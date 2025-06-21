<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footer_path = ASSETS . '/tmpl/footer.php';

$class_name = 'contact';
$title = 'お問い合わせ';

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <section class="contact__hero contact-hero hero">
    <picture class="index-hero__image hero__image">
      <source srcset="../assets/img/contact/hero-pc.jpg" media="(min-width: 768px)">
      <img class="img-w-100" src="../assets/img/contact/hero-sp.jpg" alt="<?= $title; ?>" width="1125" height="1650">
    </picture>
    <h2 class="hero__h2"><?= $title; ?></h2>
  </section>
  <nav class="contact__breadcrumb breadcrumb">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="../top/">ホーム</a>></li>
      <li class="breadcrumb__item">送信完了</li>
    </ul>
  </nav>
</header>
<main class="<?= $class_name; ?> contact--send">
  <div class="contact__inner inner">
    <div class="contact__container">
      <p class="contact__text">お問い合わせいただきありがとうございました。<br>
        内容確認後、担当者よりメールにてご連絡いたします。</p>
      <a class="button button--bottom contact__button--send " href="../top/">ホームへ戻る</a>
    </div>
  </div>
</main>
<?php
require_once $footer_path;
