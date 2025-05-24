<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footer_path = ASSETS . '/tmpl/footer.php';

$class_name = 'plan';
// $title = $navMenu[$class_name];
$title = 'プラン・料金';

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <section class="plan__hero plan-hero hero">
    <div class="plan-hero__inner hero__inner">
      <h2 class="hero__h2"><?= $title; ?></h2>
    </div>
  </section>
  <nav class="blog__breadcrumb breadcrumb">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">ホーム</a>></li>
      <li class="breadcrumb__item"><?= $title; ?></li>
    </ul>
  </nav>
</header>
<main class="<?= $class_name; ?>">
  <section class="plan__topic plan-topic">
    <h3 class="plan-topic__head page-title">料金体系</h3>
    <div class="plan-topic__container">
      <p class="plan-topic__box">入会金 39,000円</p>
      <p class="plan-topic__image"><img class="img-w-100" src="../assets/img/plan/plus.jpg" alt="" width="57" height="57"></p>
      <p class="plan-topic__box">月額料金</p>
    </div>
    <p class="plan-topic__text">きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。</p>
  </section>
  <section class="plan__content plan-content">
    <h3 class="plan-content__head page-title">プラン内容・月額料金</h3>
    <div class="plan-content__container">
      <table class="plan-content__table">
        <thead>
          <tr class="plan-content__tr">
            <th class="plan-content__th"></th>
            <th class="plan-content__th">
              <p class="plan-content__box"><span class="plan-content__text">ベーシック<br class="br-sp">プラン</span></p>
            </th>
            <th class="plan-content__th">
              <p class="plan-content__text"><span class="plan-content__small">おすすめ</span><br>
                スタンダード<br class="br-sp">プラン</p>
            </th>
            <th class="plan-content__th">
              <p class="plan-content__box"><span class="plan-content__text">プレミアム<br class="br-sp">プラン</span></p>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $plan = [
            [
              'title'    => '月額料金',
              'basic'    => [false, '39,000円'],
              'standard' => [false, '59,000円'],
              'premium'  => [false, '128,000円'],
            ],
            [
              'title'    => 'マンツーマン授業',
              'basic'    => [true, '週１回'],
              'standard' => [true, '週２回'],
              'premium'  => [true, '無制限'],
            ],
            [
              'title'    => 'ビジネス基本講座',
              'basic'    => [true, ''],
              'standard' => [true, ''],
              'premium'  => [true, ''],
            ],
            [
              'title'    => '練習ROOM利用',
              'basic'    => [true, '月10時間'],
              'standard' => [true, '月20時間'],
              'premium'  => [true, '無制限'],
            ],
            [
              'title'    => 'ビジネスコンサル',
              'basic'    => [false, '-'],
              'standard' => [true, '月２回'],
              'premium'  => [true, '月３回'],
            ],
            [
              'title'    => 'コミュニティ<br class="br-sp">参加資格',
              'basic'    => [false, '-'],
              'standard' => [false, '-'],
              'premium'  => [true, ''],
            ],
          ];

          $isCircle = function ($boolean) {
            return $boolean ? '<span class="plan-content__circle"></span><br>' : '';
          };

          $formatLine = function ($text) {
            return $text === '-' ? '<span class="plan-content__line"></span>' : $text;
          };

          foreach ($plan as $value) :
          ?>
            <tr class="plan-content__tr">
              <td class="plan-content__td">
                <p class="plan-content__text"><?= $value['title'] ?></p>
              </td>
              <td class="plan-content__td">
                <p class="plan-content__text"><?= $isCircle($value['basic'][0]) ?><?= $formatLine($value['basic'][1]) ?></p>
              </td>
              <td class="plan-content__td">
                <p class="plan-content__text"><?= $isCircle($value['standard'][0]) ?><?= $formatLine($value['standard'][1]) ?></p>
              </td>
              <td class="plan-content__td">
                <p class="plan-content__text"><?= $isCircle($value['premium'][0]) ?><?= $formatLine($value['premium'][1]) ?></p>
              </td>
            </tr>
          <?php
          endforeach;
          ?>
        </tbody>
      </table>
    </div>
    <p class="plan-content__notice">※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>
  </section>
</main>
<?php
require_once $footer_path;
