<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
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

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
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
</header>
<main class="<?= $class_name; ?>">
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
            <div class="result-content__card card">
              <a class="card__image-box" href="../result/details.php">
                <div class="card__image"><img class="img-100" src="../assets/img/result/<?= $index ?>.jpg" alt="" width="1161" height="819" loading="lazy"></div>
                <p class="card__tag"><?= $value ?></p>
              </a>
              <h3 class="card__title"><a class="card__title-link" href="../result/details.php">タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h3>
              <p class="card__date">0000.00.00</p>
            </div>
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
