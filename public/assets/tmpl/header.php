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
      <?php
      $logo_element = <<<EOM
      <a class="header__link" href="../top/">
        <svg class="header__logo">
          <use xlink:href="#logo"></use>
        </svg>
        <p class="header__text"><span class="header__text--large">きたむら</span><br class="br-pc">ミュージックスクール</p>
      </a>

EOM;

      if (isset($title) && $title === '') {
        $logo = '<h1 class="header__box">' . $logo_element . '</h1>' . PHP_EOL;
      } else {
        $logo = '<div class="header__box">' . $logo_element . '</div>' . PHP_EOL;
      }
      echo $logo;
      ?>
      <nav class="header__nav header-nav">
        <div class="header-nav__button">
          <div class="header-nav__box">
            <div class="header-nav__line"></div>
          </div>
        </div>
        <div class="header-nav__container">
          <ul class="header-nav__list">
            <?php foreach ($navMenu as $key => $value) :
              if ($key === 'top') continue; ?>
              <li class="header-nav__item">
                <a class="header-nav__link" href="../<?= $key ?>/"><?= $value ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
          <a class="header-nav__contact button" href="../contact/">お問い合わせ</a>
        </div>
      </nav>
    </div>
  </header>
