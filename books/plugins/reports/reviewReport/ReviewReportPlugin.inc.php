<?php

/**
 * @file ReviewReportPlugin.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ReviewReportPlugin
 * @ingroup plugins_reports_review
 * @see ReviewReportDAO
 *
 * @brief Review report plugin
 */

import('lib.pkp.classes.plugins.ReportPlugin');

class ReviewReportPlugin extends ReportPlugin {
	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		$success = parent::register($category, $path, $mainContextId);
		if ($success && Config::getVar('general', 'installed')) {
			$this->import('ReviewReportDAO');
			$reviewReportDAO = new ReviewReportDAO();
			DAORegistry::registerDAO('ReviewReportDAO', $reviewReportDAO);
		}
		$this->addLocaleData();
		return $success;
	}

	/**
	 * @copydoc Plugin::getName()
	 */
	function getName() {
		return 'ReviewReportPlugin';
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.reports.reviews.displayName');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.reports.reviews.description');
	}

	/**
	 * @copydoc ReportPlugin::display()
	 */
	function display($args, $request) {
		$context = $request->getContext();

		header('content-type: text/comma-separated-values');
		header('content-disposition: attachment; filename=reviews-' . date('Ymd') . '.csv');
		AppLocale::requireComponents(LOCALE_COMPONENT_PKP_SUBMISSION);

		$reviewReportDao = DAORegistry::getDAO('ReviewReportDAO');
		list($commentsIterator, $reviewsIterator) = $reviewReportDao->getReviewReport($context->getId());

		$comments = array();
		while ($row = $commentsIterator->next()) {
			if (isset($comments[$row['submission_id']][$row['author_id']])) {
				$comments[$row['submission_id']][$row['author_id']] .= "; " . $row['comments'];
			} else {
				$comments[$row['submission_id']][$row['author_id']] = $row['comments'];
			}
		}

		import('lib.pkp.classes.submission.reviewAssignment.ReviewAssignment');
		$recommendations = array(
			SUBMISSION_REVIEWER_RECOMMENDATION_ACCEPT => 'reviewer.article.decision.accept',
			SUBMISSION_REVIEWER_RECOMMENDATION_PENDING_REVISIONS => 'reviewer.article.decision.pendingRevisions',
			SUBMISSION_REVIEWER_RECOMMENDATION_RESUBMIT_HERE => 'reviewer.article.decision.resubmitHere',
			SUBMISSION_REVIEWER_RECOMMENDATION_RESUBMIT_ELSEWHERE => 'reviewer.article.decision.resubmitElsewhere',
			SUBMISSION_REVIEWER_RECOMMENDATION_DECLINE => 'reviewer.article.decision.decline',
			SUBMISSION_REVIEWER_RECOMMENDATION_SEE_COMMENTS => 'reviewer.article.decision.seeComments'
		);

		$columns = array(
			'stage_id' => __('workflow.stage'),
			'round' => __('plugins.reports.reviews.round'),
			'submission' => __('plugins.reports.reviews.submissionTitle'),
			'submission_id' => __('plugins.reports.reviews.submissionId'),
			'reviewer' => __('plugins.reports.reviews.reviewer'),
			'firstname' => __('user.firstName'),
			'middlename' => __('user.middleName'),
			'lastname' => __('user.lastName'),
			'dateassigned' => __('plugins.reports.reviews.dateAssigned'),
			'datenotified' => __('plugins.reports.reviews.dateNotified'),
			'dateconfirmed' => __('plugins.reports.reviews.dateConfirmed'),
			'datecompleted' => __('plugins.reports.reviews.dateCompleted'),
			'datereminded' => __('plugins.reports.reviews.dateReminded'),
			'declined' => __('submissions.declined'),
			'recommendation' => __('plugins.reports.reviews.recommendation'),
			'comments' => __('plugins.reports.reviews.comments')
		);

		$fp = fopen('php://output', 'wt');
		fputcsv($fp, array_values($columns));

		while ($row = $reviewsIterator->next()) {
			foreach ($columns as $index => $junk) switch ($index) {
				case 'stage_id':
					$columns[$index] = __(WorkflowStageDAO::getTranslationKeyFromId($row[$index]));
					break;
				case 'declined':
					$columns[$index] = __($row[$index]?'common.yes':'common.no');
					break;
				case 'recommendation':
					if (isset($recommendations[$row[$index]])) {
						$columns[$index] = (!isset($row[$index])) ? __('common.none') : __($recommendations[$row[$index]]);
					} else {
						$columns[$index] = '';
					}
					break;
				case 'comments':
					if (isset($comments[$row['submission_id']][$row['reviewer_id']])) {
						$columns[$index] = $comments[$row['submission_id']][$row['reviewer_id']];
					} else {
						$columns[$index] = '';
					}
					break;
				default:
					$columns[$index] = $row[$index];
			}
			fputcsv($fp, $columns);
		}
		fclose($fp);
	}
}

?>
