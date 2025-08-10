<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$header_path = ASSETS . '/tmpl/header.php';
$footer_path = ASSETS . '/tmpl/footer.php';

$class_name = 'contact';
$title = 'お問い合わせ';

require_once $header_path;
?>
<main class="<?= $class_name; ?> contact--send">
  <section class="contact__hero contact-hero hero">
    <div class="index-hero__image hero__image">
      <picture>
        <source srcset="../assets/img/contact/hero-pc.jpg" media="(min-width: 768px)">
        <img class="img-w-100" src="../assets/img/contact/hero-sp.jpg" alt="<?= $title; ?>" width="1125" height="1650">
      </picture>
    </div>
    <h1 class="hero__head"><?= $title; ?></h1>
  </section>
  <nav class="contact__breadcrumb breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../top/">ホーム</a>></li>
        <li class="breadcrumb__item">送信完了</li>
      </ul>
    </div>
  </nav>
  <div class="contact__container">
    <div class="contact__inner inner">
      <p class="contact__text">お問い合わせいただきありがとうございました。<br>
        内容確認後、担当者よりメールにてご連絡いたします。</p>
      <a class="contact__button contact-button contact-button--send button" href="../top/">ホームへ戻る</a>
    </div>
  </div>
</main>
<?php
require_once $footer_path;
