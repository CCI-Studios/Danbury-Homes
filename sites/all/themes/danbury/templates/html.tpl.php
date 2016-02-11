<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <title><?php print $head_title; ?></title>
  <script src="https://use.typekit.net/onr7yco.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
