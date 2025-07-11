<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footerPath = ASSETS . '/tmpl/footer.php';
$blog_data_path = $_SERVER['DOCUMENT_ROOT'] . '/blog/data.php';

$class_name = 'blog';
$title = $navMenu[$class_name];

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <section class="blog__hero blog-hero hero">
    <picture class="index-hero__image hero__image">
      <source srcset="../assets/img/blog/hero-pc.jpg" media="(min-width: 768px)">
      <img class="img-w-100" src="../assets/img/blog/hero-sp.jpg" alt="<?= $title; ?>" width="1125" height="1650">
    </picture>
    <h1 class="hero__head"><?= $title; ?></h1>
  </section>
  <nav class="blog__breadcrumb breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../top/">ホーム</a>></li>
        <li class="breadcrumb__item"><?= $title; ?></li>
      </ul>
    </div>
  </nav>
</header>
<main class="<?= $class_name; ?>">
  <section class="blog__content blog-content">
    <div class="blog__inner inner">
      <h2 class="blog-content__head page-title">ブログ一覧</h2>
      <div class="blog-content__container">
        <?php
        require_once $blog_data_path;
        $blog = array_merge($blog, $blog, $blog);
        $blog[] = $blog[0];
        foreach ($blog as $index => $value) :
        ?>
          <article class="blog-content__item">
            <div class="blog-content__card card">
              <a class="card__image-box" href="details.php">
                <picture class="card__image">
                  <source srcset="../assets/img/blog/<?= $value['src'] ?>-pc.jpg" media="(min-width: 768px)">
                  <img class="img-100" src="../assets/img/blog/<?= $value['src'] ?>-sp.jpg" alt="" width="1005" height="600" loading="lazy">
                </picture>
                <p class="card__tag"><?= $value['tag'] ?></p>
              </a>
              <h3 class="card__title"><a class="card__title-link" href="details.php"><?= $value['title'] ?></a></h3>
              <p class="card__date"><?= $value['date'] ?></p>
              <p class="card__text"><?= $value['text'] ?></p>
            </div>
          </article>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>
  <nav class="blog__pager pager">
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
