<div class="page-wrapper"><div><div>

    <div class="navigation"><div class="wrapper"><div>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="navigation-logo">
          <img src="<?php print base_path().path_to_theme(); ?>/img/danbury.svg" alt="<?php print t('Home'); ?>" />
        </a>
        <?php print render($page['navigation']); ?>
    </div></div></div>

    <div class="header"><div><div>
      <?php print render($page['header']); ?>
    </div></div></div>

    <div class="main-wrapper"><div><div>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><div class="page-title"><h1><?php print $title; ?></h1></div><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
    </div></div></div>

    <div class="footer"><div><div>
      <?php print render($page['footer']); ?>
      <div class="copyright">&copy; DANBURY <?php print date('Y'); ?></div>
      <div class="site-by-cci">Site by <a href="https://ccistudios.com" target="_blank">CCI Studios</a></div>
    </div></div></div>

</div></div></div>
