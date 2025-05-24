<?php
$meta_tags = set_meta_tags($title, SITE_NAME);

$default_css_path = get_file_url_with_timestamp(ASSETS . '/css/style.css', '/assets/css/style.css');
$default_js_path = get_file_url_with_timestamp(ASSETS . '/js/default.js', '/assets/js/default.js');
$back_to_top_js_path = 'https://unpkg.com/vanilla-back-to-top@7.2.1/dist/vanilla-back-to-top.min.js';
?>
<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/og-image.png" property="og:image">
  <meta content="website" property="og:type">
  <meta content="<?= $meta_tags['page_title'] ?>" property="og:title">
  <meta content="<?= KEYWORDS ?>" name="keywords">
  <meta content="<?= $meta_tags['description'] ?>" name="description">
  <meta content="telephone=metaTags" name="format-detection">
  <link rel="icon" href="/assets/img/favicon.svg">
  <?php
  if (isset($css_paths) && $css_paths) {
    foreach ($css_paths as $path) {
      echo '<link rel="stylesheet" href="' . $path . '">' . PHP_EOL;
    }
  }
  ?>
  <link rel="stylesheet" href="<?= $default_css_path ?>">
  <title><?= $meta_tags['page_title'] ?></title>
  <?php
  if (isset($js_paths) && $js_paths) {
    foreach ($js_paths as $path) {
      echo '<script src="' . $path . '" defer></script>' . PHP_EOL;
    }
  }
  ?>
  <script src="<?= $back_to_top_js_path ?>" defer></script>
  <script src="<?= $default_js_path ?>" defer></script>
</head>

<body>
