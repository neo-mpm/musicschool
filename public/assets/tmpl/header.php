<?php
$meta_tags = set_meta_tags($title, SITE_NAME);

$default_css_path = get_file_url_with_timestamp(ASSETS . '/css/style.css', '../assets/css/style.css');
$default_js_path = get_file_url_with_timestamp(ASSETS . '/js/default.js', '../assets/js/default.js');
?>
<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/og-image.jpg" property="og:image">
  <meta content="website" property="og:type">
  <meta content="<?= $meta_tags['page_title'] ?>" property="og:title">
  <meta content="<?= KEYWORDS ?>" name="keywords">
  <meta content="<?= $meta_tags['description'] ?>" name="description">
  <meta content="telephone=metaTags" name="format-detection">
  <title><?= $meta_tags['page_title'] ?></title>
  <link rel="icon" href="../assets/img/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

  <?php
  if (isset($css_paths) && $css_paths) {
    foreach ($css_paths as $path) {
      echo '<link rel="stylesheet" href="' . $path . '">' . PHP_EOL;
    }
  }
  ?>
  <link rel="stylesheet" href="<?= $default_css_path ?>">
  <?php
  if (isset($js_paths) && $js_paths) {
    foreach ($js_paths as $path) {
      echo '<script src="' . $path . '" defer></script>' . PHP_EOL;
    }
  }
  ?>
  <script src="<?= $default_js_path ?>" defer></script>
</head>

<body>
  <header class="header">
    <div class="header__inner inner">
      <div class="overlay"></div>
      <a class="header__link" href="../top/">
        <svg class="header__logo">
          <use xlink:href="#logo"></use>
        </svg>
        <?php
        if (isset($title) && $title === '') {
          $logo = '<h1 class="header__head"><span class="header__head--large">きたむら</span><br class="br-pc">ミュージックスクール</h1>';
        } else {
          $logo = '<div class="header__head"><span class="header__head--large">きたむら</span><br class="br-pc">ミュージックスクール</div>';
        }
        echo $logo;
        ?>
      </a>
      <nav class="header__nav header-nav">
        <p class="header-nav__box">
          <span class="header-nav__button">
            <span class="header-nav__line"></span>
          </span>
        </p>
        <div class="header-nav__container">
          <ul class="header-nav__list">
            <?php foreach ($navMenu as $key => $value) :
              if ($key === 'top') continue; ?>
              <li class="header-nav__item">
                <a class="header-nav__link" href="../<?= $key ?>/"><?= $value ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
          <a class="header-nav__contact button" href="../contact/"><span class="button__span">お問い合わせ</span></a>
        </div>
      </nav>
    </div>
  </header>
