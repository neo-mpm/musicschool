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
    <div class="blog-hero__inner hero__inner">
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
  <section class="blog__content blog-content">
    <h3 class="blog-content__head page-title">ブログ一覧</h3>
    <div class="blog-content__container">
      <?php
      require_once $blog_data_path;

      $blog = array_merge($blog, $blog, $blog);
      $blog[] = $blog[0];
      $extra_text = '<span class="blog-content__extra-text">本文が入ります。本文が入ります。本文が入ります。本文が入ります。</span>';
      $blog[0]['text'] .= $extra_text;

      foreach ($blog as $index => $value) :
      ?>
        <article class="blog-content__item">
          <div class="blog-content__card blog-card">
            <a class="blog-card__image-box" href="detail.php">
              <picture class="blog-card__image">
                <source srcset="/assets/img/blog/<?= $value['src'] ?>-pc.jpg" media="(min-width: 768px)">
                <img class="img-w-100" src="/assets/img/blog/<?= $value['src'] ?>-sp.jpg" alt="" width="1005" height="600">
              </picture>
              <p class="blog-card__tag"><?= $value['tag'] ?></p>
            </a>
            <h4 class="blog-card__title"><a class="blog-card__title-link" href="detail.php"><?= $value['title'] ?></a></h4>
            <p class="blog-card__date"><?= $value['date'] ?></p>
            <p class="blog-card__text"><?= $value['text'] ?></p>
          </div>
        </article>
      <?php
      endforeach;
      ?>
    </div>
  </section>
  <nav class="blog__pager blog-pager">
    <ul class="blog-pager__list">
      <li class="blog-pager__item blog-pager__item--active"><span class="blog-pager__inner">1</span></li>
      <li class="blog-pager__item"><a class="blog-pager__inner blog-pager__link" href="">2</a></li>
      <li class="blog-pager__item"><a class="blog-pager__inner blog-pager__link" href="">3</a></li>
      <li class="blog-pager__item blog-pager__item--dot"><span class="blog-pager__inner">…</span></li>
      <li class="blog-pager__item"><a class="blog-pager__inner blog-pager__link" href="">9</a></li>
    </ul>
  </nav>
</main>
<?php
require_once $footerPath;
