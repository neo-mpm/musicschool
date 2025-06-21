<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footer_path = ASSETS . '/tmpl/footer.php';

$class_name = 'page404';
$title = '404 not fonud';

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <section class="page404__hero page404-hero hero">
    <picture class="index-hero__image hero__image">
      <source srcset="../assets/img/404/hero-pc.jpg" media="(min-width: 768px)">
      <img class="img-w-100" src="../assets/img/404/hero-sp.jpg" alt="<?= $title; ?>" width="1125" height="1650">
    </picture>
    <h2 class="hero__h2"><?= $title; ?></h2>
  </section>
</header>
<main class="<?= $class_name; ?>">
  <div class="page404__inner inner">
    <div class="page404__container">
      <p class="page404__text">申し訳ございませんが、お探しのページが見つかりませんでした。<br>
        お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。</p>
      <a class="button button--bottom page404__button" href="../top/">ホームへ戻る</a>
    </div>
  </div>
</main>
<?php
require_once $footer_path;
