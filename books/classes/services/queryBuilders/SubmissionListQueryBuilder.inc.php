<?php

/**
 * @file classes/services/QueryBuilders/SubmissionListQueryBuilder.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2000-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SubmissionListQueryBuilder
 * @ingroup query_builders
 *
 * @brief Submission list Query builder
 */

namespace OMP\Services\QueryBuilders;

use Illuminate\Database\Capsule\Manager as Capsule;

class SubmissionListQueryBuilder extends \PKP\Services\QueryBuilders\PKPSubmissionListQueryBuilder {

	/** @var int|array Category ID(s) */
	protected $categoryIds = null;

	/** @var int|array Series ID(s) */
	protected $seriesIds = null;

	/** @var bool Order featured items first */
	protected $orderByFeaturedSeq = null;

	/**
	 * Set category filter
	 *
	 * @param int|array $categoryIds
	 *
	 * @return \OMP\Services\QueryBuilders\SubmissionListQueryBuilder
	 */
	public function filterByCategories($categoryIds) {
		if (!is_null($categoryIds) && !is_array($categoryIds)) {
			$categoryIds = array($categoryIds);
		}
		$this->categoryIds = $categoryIds;
		return $this;
	}

	/**
	 * Set series filter
	 *
	 * @param int|array $seriesIds
	 *
	 * @return \App\Services\QueryBuilders\SubmissionListQueryBuilder
	 */
	public function filterBySeries($seriesIds) {
		if (!is_null($seriesIds) && !is_array($seriesIds)) {
			$seriesIds = array($seriesIds);
		}
		$this->seriesIds = $seriesIds;
		return $this;
	}

	/**
	 * Implement app-specific ordering options for catalog
	 *
	 * Publication date, Title or Series position, with featured items first
	 *
	 * @param string $column
	 * @param string $direction
	 *
	 * @return \App\Services\QueryBuilders\SubmissionListQueryBuilder
	 */
	public function orderBy($column, $direction = 'DESC') {
		// Bring in orderby constants
		import('classes.monograph.PublishedMonographDAO');
		switch ($column) {
			case ORDERBY_DATE_PUBLISHED:
				$this->orderColumn = 'ps.date_published';
				break;
			case ORDERBY_SERIES_POSITION:
				$this->orderColumn = 's.series_position';
				break;
			default:
				return parent::orderBy($column, $direction);
		}
		$this->orderDirection = $direction;

		return $this;
	}

	/**
	 * Order featured items first
	 *
	 * @return \App\Services\QueryBuilders\SubmissionListQueryBuilder
	 */
	public function orderByFeatured() {
		$this->orderByFeaturedSeq = true;
	}

	/**
	 * Execute additional actions for app-specific query objects
	 *
	 * @param object Query object
	 * @return object Query object
	 */
	public function appGet($q) {
		$primaryLocale = \AppLocale::getPrimaryLocale();
		$locale = \AppLocale::getLocale();

		$this->columns[] = Capsule::raw('COALESCE(stl.setting_value, stpl.setting_value) AS series_title');

		$q->groupBy(Capsule::raw('COALESCE(stl.setting_value, stpl.setting_value)'));

		$q->leftJoin('series_settings as stpl', function($join) use($primaryLocale) {
			$join->on('s.series_id', '=', Capsule::raw('stpl.series_id'));
			$join->on('stpl.setting_name', '=', Capsule::raw("'title'"));
			$join->on('stpl.locale', '=', Capsule::raw("'{$primaryLocale}'"));
		});

		$q->leftJoin('series_settings as stl', function($join) use($locale) {
			$join->on('s.series_id', '=', Capsule::raw('stl.series_id'));
			$join->on('stl.setting_name', '=', Capsule::raw("'title'"));
			$join->on('stl.locale', '=', Capsule::raw("'{$locale}'"));
		});

		if (!empty($this->seriesIds)) {
			$q->whereIn('s.series_id', $this->seriesIds);
		}

		if (!empty($this->categoryIds)) {
			$q->leftJoin('submission_categories as sc', 's.submission_id', '=', 'sc.submission_id')
				->whereIn('sc.category_id', $this->categoryIds);
		}

		if (!empty($this->orderByFeaturedSeq)) {
			if (!empty($this->seriesIds)) {
				$assocType = ASSOC_TYPE_SERIES;
				$assocIds = $this->seriesIds;
			} elseif (!empty($this->categoryIds)) {
				$assocType = ASSOC_TYPE_CATEGORY;
				$assocIds = $this->categoryIds;
			} else {
				$assocType = ASSOC_TYPE_PRESS;
				$assocIds = array(1); // OMP only supports a single press
			}
			$q->leftJoin('features as psf', function($join) use ($assocType, $assocIds) {
				$join->on('s.submission_id', '=', 'psf.submission_id')
					->on('psf.assoc_type', '=', Capsule::raw($assocType));
				foreach ($assocIds as $assocId) {
					$join->on('psf.assoc_id', '=', Capsule::raw(intval($assocId)));
				}
			});

			// Featured sorting should be the first sort parameter. We sort by
			// the seq parameter, with null values last
			$q->groupBy(Capsule::raw('psf.seq'));
			array_unshift(
				$q->orders,
				array('type' => 'raw', 'sql' => 'case when psf.seq is null then 1 else 0 end'),
				array('column' => 'psf.seq', 'direction' => 'ASC')
			);
		}

		return $q;
	}
}
