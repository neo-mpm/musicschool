<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$header_path = ASSETS . '/tmpl/header.php';
$footerPath = ASSETS . '/tmpl/footer.php';
$result_genre = [
  'ポップス',
  'ロック',
  'ジャズ',
  'ラテン',
  'クラシック',
];

$class_name = 'result';
$title = $navMenu[$class_name];

require_once $header_path;
?>
<main class="<?= $class_name; ?>">
  <section class="result__hero result-hero hero">
    <picture class="index-hero__image hero__image">
      <source srcset="../assets/img/result/hero-pc.jpg" media="(min-width: 768px)">
      <img class="img-w-100" src="../assets/img/result/hero-sp.jpg" alt="<?= $title; ?>" width="1125" height="1650">
    </picture>
    <h1 class="hero__head"><?= $title; ?></h1>
  </section>
  <nav class="result__breadcrumb breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../top/">ホーム</a>></li>
        <li class="breadcrumb__item"><?= $title; ?></li>
      </ul>
    </div>
  </nav>
  <section class="result__content result-content">
    <div class="result__inner inner">
      <h2 class="result-content__head page-title">卒業実績一覧</h2>
      <div class="result-content__container">
        <?php
        $result_genre = array_merge($result_genre, $result_genre);
        foreach ($result_genre as $index => $value) :
          $index = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
        ?>
          <article class="result-content__item">
            <a class="result-content__card card" href="../result/details.php">
              <div class="card__image-box">
                <div class="card__image"><img class="img-100" src="../assets/img/result/<?= $index ?>.jpg" alt="" width="1161" height="819" loading="lazy"></div>
                <p class="card__tag"><?= $value ?></p>
              </div>
              <h3 class="card__title ellipsis">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
              <p class="card__date">0000.00.00</p>
            </a>
          </article>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>
  <nav class="result__pager pager">
    <ul class="pager__list">
      <li class="pager__item pager__item--active"><span class="pager__inner">1</span></li>
      <li class="pager__item"><a class="pager__inner pager__link" href="">2</a></li>
      <li class="pager__item"><a class="pager__inner pager__link" href="">3</a></li>
      <li class="pager__item pager__item--dot"><span class="pager__inner">…</span></li>
      <li class="pager__item"><a class="pager__inner pager__link" href="">9</a></li>
    </ul>
  </nav>
</main>
<?php
require_once $footerPath;
