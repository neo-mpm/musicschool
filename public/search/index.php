<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footerPath = ASSETS . '/tmpl/footer.php';
$blog_data_path = $_SERVER['DOCUMENT_ROOT'] . '/blog/data.php';

require_once $blog_data_path;

$class_name = 'search';
$title = '検索';

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <nav class="detail__breadcrumb breadcrumb">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="../top/">ホーム</a>></li>
      <li class="breadcrumb__item"><span class="breadcrumb__text"><?= $title; ?></span></li>
    </ul>
  </nav>
</header>
<main class="<?= $class_name; ?>">
  <section class="search__content search-content blog-content">
    <div class="blog__inner inner">
      <div class="blog__container">
        <h3 class="search-content__head search-content-head blog-content__head"><span class="search-content-head__text">「<span class="search-content-head__text--bold">キーワード</span>」の検索結果</span><span class="search-content-head__text">28件</span></h3>
        <div class="search-content__container blog-content__container">
          <?php
          require_once $blog_data_path;
          $blog = array_merge($blog, $blog, $blog);
          $blog[] = $blog[0];
          foreach ($blog as $index => $value) :
          ?>
            <article class="blog-content__item">
              <div class="blog-content__card card">
                <a class="card__image-box" href="../blog/details.php">
                  <picture class="card__image">
                    <source srcset="../assets/img/blog/<?= $value['src'] ?>-pc.jpg" media="(min-width: 768px)">
                    <img class="img-100" src="../assets/img/blog/<?= $value['src'] ?>-sp.jpg" alt="" width="1005" height="600" loading="lazy">
                  </picture>
                  <p class="card__tag"><?= $value['tag'] ?></p>
                </a>
                <h4 class="card__title"><a class="card__title-link" href="../blog/details.php"><?= $value['title'] ?></a></h4>
                <p class="card__date"><?= $value['date'] ?></p>
                <p class="card__text"><?= $value['text'] ?></p>
              </div>
            </article>
          <?php
          endforeach;
          ?>
        </div>
      </div>
    </div>
  </section>
  <nav class="blog__pager pager">
    <ul class="pager__list">
      <li class="pager__item pager__item--active"><span class="pager__inner">1</span></li>
      <li class="pager__item"><a class="pager__inner pager__link" href="">2</a></li>
      <li class="pager__item"><a class="pager__inner pager__link" href="">3</a></li>
    </ul>
  </nav>
</main>

<?php
require_once $footerPath;
