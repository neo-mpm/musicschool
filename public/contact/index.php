<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$header_path = ASSETS . '/tmpl/header.php';
$footer_path = ASSETS . '/tmpl/footer.php';

$class_name = 'contact';
$title = 'お問い合わせ';

require_once $header_path;
?>
<main class="<?= $class_name; ?>">
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
        <li class="breadcrumb__item"><?= $title; ?></li>
      </ul>
    </div>
  </nav>
  <div class="contact__container">
    <div class="contact__inner inner">
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
          <p class="contact-form__legend">
            <span class="contact-form__text-space">目的</span><br class="br-pc">(複数選択可)
          </p>
          <div class="contact-form__checkbox-wrapper">
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="プランについてのお問い合わせ">
              <span class="contact-form__text--checkbox">プランについてのお問い合わせ</span>
            </label>
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="ヒアリングのご予約">
              <span class="contact-form__text--checkbox">ヒアリングのご予約</span>
            </label>
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="資料請求">
              <span class="contact-form__text--checkbox">資料請求</span>
            </label>
            <label class="contact-form__label contact-form__label--checkbox">
              <input type="checkbox" class="contact-form__checkbox" name="purpose[]" value="その他">
              <span class="contact-form__text--checkbox">その他</span>
            </label>
          </div>
        </fieldset>
        <fieldset class="contact-form__fieldset  contact-form__fieldset--textarea">
          <label class="contact-form__label contact-form__label--textarea" for="message"><span class="contact-form__text-space">内容</span></label>
          <textarea class="contact-form__textarea" name="message" id="message" placeholder="内容に関する詳細や備考等をご入力ください。"></textarea>
        </fieldset>
        <button type="submit" class="contact__button contact-button contact-button--submit button"><span class="contact-button__span contact-button__span--submit">送信</span></button>
      </form>
    </div>
  </div>
</main>
<?php
require_once $footer_path;
