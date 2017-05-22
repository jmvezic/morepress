<?php /* Smarty version 2.6.26, created on 2017-04-05 06:06:13
         compiled from issue/issue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'issue/issue.tpl', 17, false),array('modifier', 'strip_unsafe_html', 'issue/issue.tpl', 44, false),array('modifier', 'to_array', 'issue/issue.tpl', 53, false),array('function', 'url', 'issue/issue.tpl', 44, false),array('function', 'translate', 'issue/issue.tpl', 96, false),array('function', 'call_hook', 'issue/issue.tpl', 102, false),)), $this); ?>
<script type="text/javascript" src="/plugins/themes/morepress/js/JournalIssueCollapser.js"></script>
<?php if ($this->_tpl_vars['publishedArticles']): ?>
<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sectionId'] => $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>

 
<div id="tocContainer" class="sectionParent">
	<?php if ($this->_tpl_vars['section']['title']): ?><a href="#" class="tocSectionTitle">&raquo;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['section']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endif; ?>
	<div class="sectionChild">
	<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>

	<?php $this->assign('articlePath', $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['article']->getId()); ?>

	<?php if ($this->_tpl_vars['article']->getLocalizedFileName() && $this->_tpl_vars['article']->getLocalizedShowCoverPage() && ! $this->_tpl_vars['article']->getHideCoverPageToc($this->_tpl_vars['locale'])): ?>
		<?php $this->assign('showCoverPage', true); ?>
	<?php else: ?>
		<?php $this->assign('showCoverPage', false); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['article']->getLocalizedAbstract() == ""): ?>
		<?php $this->assign('hasAbstract', 0); ?>
	<?php else: ?>
		<?php $this->assign('hasAbstract', 1); ?>
	<?php endif; ?>

	<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] || ( $this->_tpl_vars['subscriptionExpiryPartial'] && $this->_tpl_vars['articleExpiryPartial'][$this->_tpl_vars['articleId']] ) )): ?>
		<?php $this->assign('hasAccess', 1); ?>
	<?php else: ?>
		<?php $this->assign('hasAccess', 0); ?>
	<?php endif; ?>
	
	<div id="tocSectionContainer">
		<div id="tocItemContainer">
			<?php if (! $this->_tpl_vars['hasAccess'] || $this->_tpl_vars['hasAbstract']): ?><a class="tocItemTitle" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</a><br><?php endif; ?>
			<?php if (( ! $this->_tpl_vars['section']['hideAuthor'] && $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_DEFAULT ) || $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_SHOW): ?>
				<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
					<span class="tocItemAuthors"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?></span>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?><br>
			<div id="tocLinksContainer">
			<?php if ($this->_tpl_vars['hasAccess'] || ( $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] )): ?>
				<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['articlePath'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" <?php if ($this->_tpl_vars['galley']->getRemoteURL()): ?>target="_blank" <?php endif; ?> id="tocItemFullTextLink"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
					<?php endforeach; endif; unset($_from); ?><?php endif; ?>
			</div>
		</div>
	</div>
	
	
	<?php endforeach; endif; unset($_from); ?>	
	</div>
	
</div>

<!-- <?php if ($this->_tpl_vars['section']['title']): ?><h4 class="tocSectionTitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['section']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h4><?php endif; ?>

<table class="tocArticle">
<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
	<?php $this->assign('articlePath', $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['article']->getId()); ?>

	<?php if ($this->_tpl_vars['article']->getLocalizedFileName() && $this->_tpl_vars['article']->getLocalizedShowCoverPage() && ! $this->_tpl_vars['article']->getHideCoverPageToc($this->_tpl_vars['locale'])): ?>
		<?php $this->assign('showCoverPage', true); ?>
	<?php else: ?>
		<?php $this->assign('showCoverPage', false); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['article']->getLocalizedAbstract() == ""): ?>
		<?php $this->assign('hasAbstract', 0); ?>
	<?php else: ?>
		<?php $this->assign('hasAbstract', 1); ?>
	<?php endif; ?>

	<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] || ( $this->_tpl_vars['subscriptionExpiryPartial'] && $this->_tpl_vars['articleExpiryPartial'][$this->_tpl_vars['articleId']] ) )): ?>
		<?php $this->assign('hasAccess', 1); ?>
	<?php else: ?>
		<?php $this->assign('hasAccess', 0); ?>
	<?php endif; ?>


<tr valign="top" class="TOC">
	<td class="tocArticleCoverImage<?php if ($this->_tpl_vars['showCoverPage']): ?> showCoverImage<?php endif; ?>">
		<?php if ($this->_tpl_vars['showCoverPage']): ?>
			<div class="tocCoverImage">
				<?php if (! $this->_tpl_vars['hasAccess'] || $this->_tpl_vars['hasAbstract']): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
" class="file"><?php endif; ?>
				<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getFileName($this->_tpl_vars['locale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['article']->getCoverPageAltText($this->_tpl_vars['locale']) != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCoverPageAltText($this->_tpl_vars['locale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverPage.altText"), $this);?>
"<?php endif; ?>/>
				<?php if (! $this->_tpl_vars['hasAccess'] || $this->_tpl_vars['hasAbstract']): ?></a><?php endif; ?>
			</div>
		<?php endif; ?>
	</td>

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Issue::Issue::ArticleCoverImage"), $this);?>


	<td class="tocArticleTitleAuthors<?php if ($this->_tpl_vars['showCoverPage']): ?> showCoverImage<?php endif; ?>">
		<div class="tocTitle">
			<?php if (! $this->_tpl_vars['hasAccess'] || $this->_tpl_vars['hasAbstract']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</a> <div class="tocGalleys">
			<?php if ($this->_tpl_vars['hasAccess'] || ( $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] )): ?>
				<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['articlePath'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" <?php if ($this->_tpl_vars['galley']->getRemoteURL()): ?>target="_blank" <?php endif; ?>class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
					<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['restrictOnlyPdf']): ?>
						<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || ! $this->_tpl_vars['galley']->isPdfGalley()): ?>
							<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
						<?php else: ?>
							<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && ! $this->_tpl_vars['restrictOnlyPdf']): ?>
					<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN): ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
					<?php else: ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="tocPages">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		</div>
	</td>
			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

			<?php endif; ?>
		</div>
		<div class="tocAuthors">
			<?php if (( ! $this->_tpl_vars['section']['hideAuthor'] && $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_DEFAULT ) || $this->_tpl_vars['article']->getHideAuthor() == @AUTHOR_TOC_SHOW): ?>
				<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authorList']['iteration']++;
?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			<?php else: ?>
				&nbsp;
			<?php endif; ?>
		</div>
	</td>

	<td class="tocArticleGalleysPages<?php if ($this->_tpl_vars['showCoverPage']): ?> showCoverImage<?php endif; ?>">
		<div class="tocGalleys">
			<?php if ($this->_tpl_vars['hasAccess'] || ( $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] )): ?>
				<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['articlePath'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" <?php if ($this->_tpl_vars['galley']->getRemoteURL()): ?>target="_blank" <?php endif; ?>class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
					<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['restrictOnlyPdf']): ?>
						<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || ! $this->_tpl_vars['galley']->isPdfGalley()): ?>
							<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
						<?php else: ?>
							<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && ! $this->_tpl_vars['restrictOnlyPdf']): ?>
					<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN): ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
					<?php else: ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="tocPages">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		</div>
	</td>
</tr>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Issue::Issue::Article"), $this);?>

<?php endforeach; endif; unset($_from); ?>
</table> -->

<?php if (! ($this->_foreach['sections']['iteration'] == $this->_foreach['sections']['total'])): ?>
<div class="separator"></div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.noArticles"), $this);?>

<?php endif; ?>
