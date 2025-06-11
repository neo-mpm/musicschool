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
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">ホーム</a>></li>
      <li class="breadcrumb__item"><?= $title; ?></li>
    </ul>
  </nav>
</header>
<main class="<?= $class_name; ?>">
  <div class="contact__inner inner">
    <div class="contact__container">
      <p class="contact__text">当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>
        通常３営業日以内にメールにてご連絡させていただきます。</p>
      <form class="contact__form contact-form" action="send.php" method="post">
        <fieldset class="contact-form__fieldset">
          <label class="contact-form__label" for="company_name">会社名</label>
          <input type="text" class="contact-form__input" name="company_name" id="company_name" placeholder="きたむらミュージックスクール">
        </fieldset>
        <fieldset class="contact-form__fieldset">
          <label class="contact-form__label" for="name">お名前</label>
          <input type="text" class="contact-form__input" name="name" id="name" placeholder="北村　翔平">
        </fieldset>
        <fieldset class="contact-form__fieldset">
          <label class="contact-form__label" for="email">メールアドレス</label>
          <input type="email" class="contact-form__input" name="email" id="email" placeholder="info@kitamura.musicschool.jp">
        </fieldset>
        <fieldset class="contact-form__fieldset">
          <label class="contact-form__label" for="tel">電話番号</label>
          <input type="tel" class="contact-form__input" name="tel" id="tel" placeholder="090-1234-5678">
        </fieldset>
        <fieldset class="contact-form__fieldset contact-form__fieldset--checkboxes">
          <legend class="contact-form__legend">
            <span class="contact-form__text-space">目的</span><br class="br-pc">(複数選択可)
          </legend>
          <div class="contact-form__checkbox-wrapper">
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="プランについてのお問い合わせ">プランについてのお問い合わせ
            </label>
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="ヒアリングのご予約">ヒアリングのご予約
            </label>
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="資料請求">資料請求
            </label>
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="その他">その他
            </label>
          </div>
        </fieldset>
        <fieldset class="contact-form__fieldset  contact-form__fieldset--textarea">
          <label class="contact-form__label" for="message"><span class="contact-form__text-space">内容</span></label>
          <textarea class="contact-form__textarea" name="message" id="message" placeholder="内容に関する詳細や備考等をご入力ください。"></textarea>
        </fieldset>
        <button type="submit" class="contact__button button button--bottom">送信</button>
      </form>
    </div>
  </div>
</main>
<?php
require_once $footer_path;
