{**
 * templates/frontend/components/download_link.tpl
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display a download link for files
 *
 * @uses $downloadFile SubmissionFile The download file object
 * @uses $monograph Monograph The monograph this file is attached to
 * @uses $publicationFormat PublicationFormat The publication format this file is attached to
 * @uses $currency Currency The currency object
 * @uses $useFilename string Whether or not to use the file name in link. Default is false and pub format name is used
 *}

{assign var=publicationFormatId value=$publicationFormat->getBestId()}

{* Generate the download URL *}
{url|assign:downloadUrl op="view" path=$monograph->getBestId()|to_array:$publicationFormatId:$downloadFile->getBestId()}

{* Display the download link *}
<a href="{$downloadUrl}" class="cmp_download_link thumbnailLinkImg {$downloadFile->getDocumentType()}">
<img alt="{translate key="catalog.coverImageTitle" monographTitle=$monograph->getLocalizedFullTitle()|strip_tags|escape}" src="{url router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="cover" submissionId=$monograph->getId() random=$monograph->getId()|uniqid}" />
</a>
