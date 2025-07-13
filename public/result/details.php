<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footerPath = ASSETS . '/tmpl/footer.php';
$blog_data_path = $_SERVER['DOCUMENT_ROOT'] . '/blog/data.php';

require_once $blog_data_path;

$class_name = 'result-details';
$title = 'タイトルが入ります。タイトルが入ります。タイトルが入ります。';

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <nav class="result-details__breadcrumb breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../top/">ホーム</a>></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../result/">卒業実績</a>></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../result/">ポップス</a>></li>
        <li class="breadcrumb__item"><?= $title; ?></li>
      </ul>
    </div>
  </nav>
</header>
<main class="<?= $class_name; ?>">
  <div class="result-details__inner inner">
    <div class="result-details__container">
      <article class="result-details__content details-content">
        <div class="details-content__inner">
          <div class="details-content__container">
            <div class="details-content__card card">
              <div class="card__image-box">
                <div class="card__image"><img class="img-100" src="../assets/img/result/01.jpg" alt="" width="1161" height="819" loading="lazy"></div>
                <p class="card__tag">ポップス</p>
              </div>
              <h1 class="card__title page-title"><span class="card__title-text"><?= $title ?></span></h1>
              <p class="card__date"><?= $blog[0]['date'] ?></p>
              <div class="result-details__box">
                <table class="result-details__table result-details-table">
                  <?php
                  $detail = [
                    '名前' => '丸山',
                    '職業' => '証券会社勤務',
                    'ジャンル' => '入力欄',
                    '実績' => '入力欄',
                    'SNS' => '入力欄'
                  ];
                  foreach ($detail as $key => $value) :
                  ?>
                    <tr>
                      <th class="result-details-table__th"><?= $key ?></th>
                      <td class="result-details-table__td"><?= $value ?></td>
                    </tr>
                  <?php
                  endforeach;
                  ?>
                </table>
                <p class="result-details__text details-content__text card__text">昔やっていた音楽活動で、副収入が得られるようになったので、毎日充実するようになりました。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="result-details__bottom details-bottom">
          <a class="details-bottom__box details-bottom__prev" href="./">
            <p class="details-bottom__link">◀︎ 前の記事</p>
            <div class="details-bottom__image-link"><img class="img-w-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" alt="" width="1005" height="600"></div>
            <p class="details-bottom__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
          </a>
          <a class="details-bottom__box details-bottom__next" href="./">
            <p class="details-bottom__link">次の記事 ▶︎</p>
            <div class="details-bottom__image-link"><img class="img-w-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" alt="" width="1005" height="600"></div>
            <p class="details-bottom__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
          </a>
        </div>
      </article>
      <aside class="result-details__related details-related details-aside">
        <h4 class="details-related__head details-aside__title">関連記事</h4>
        <ul class="details-related__list">
          <?php
          $result_images = [
            [
              'src' => '02.jpg',
              'genre' => 'ロック',
            ],
            [
              'src' => '03.jpg',
              'genre' => 'ジャズ',

            ],
            [
              'src' => '04.jpg',
              'genre' => 'ラテン',
            ],
          ];
          foreach ($result_images as $value) :
          ?>
            <li class="details-related__item">
              <a class="details-related__card card" href="details.php">
                <div class="card__image-box">
                  <div class="card__image"><img class="img-100" src="../assets/img/result/<?= $value['src'] ?>" alt="" width="1161" height="819" loading="lazy"></div>
                  <p class="card__tag"><?= $value['genre'] ?></p>
                </div>
                <h5 class="card__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h5>
                <p class="card__date">0000.00.00</p>
              </a>
            </li>
          <?php
          endforeach;
          ?>
        </ul>
      </aside>
    </div>
  </div>
</main>

<?php
require_once $footerPath;
