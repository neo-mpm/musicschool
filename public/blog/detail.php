<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footerPath = ASSETS . '/tmpl/footer.php';
$blog_data_path = $_SERVER['DOCUMENT_ROOT'] . '/blog/data.php';

require_once $blog_data_path;

$class_name = 'detail';
$title = $blog[0]['title'];
$title_another = 'アルペジオが劇的に向上する３つの習慣';

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <nav class="detail__breadcrumb breadcrumb">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="/">ホーム</a>></li>
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="/blog/">ブログ</a>></li>
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="/blog/guitar/">ギター</a>></li>
      <li class="breadcrumb__item">
        <span class="breadcrumb__text breadcrumb__text--sp"><?= $title_another; ?></span>
        <span class="breadcrumb__text breadcrumb__text--pc"><?= $title; ?></span>
      </li>
    </ul>
  </nav>
</header>
<main class="<?= $class_name; ?>">
  <div class="detail__main">
    <article class="detail__content detail-content">
      <div class="detail-content__inner">
        <div class="detail-content__container">
          <div class="detail-content__card blog-card">
            <div class="blog-card__image-box">
              <picture class="blog-card__image">
                <source srcset="../assets/img/blog/<?= $blog[0]['src'] ?>-pc.jpg" media="(min-width: 768px)">
                <img class="img-w-100" src="../assets/img/blog/<?= $blog[0]['src'] ?>-sp.jpg" alt="" width="1005" height="600">
              </picture>
              <p class="blog-card__tag"><?= $blog[0]['tag'] ?></p>
            </div>
            <h1 class="blog-card__title page-title">
              <span class="blog-card__title-text blog-card__title-text--sp"><?= $title ?></span>
              <span class="blog-card__title-text blog-card__title-text--pc"><?= $title_another; ?></span>
            </h1>
            <p class="blog-card__date"><?= $blog[0]['date'] ?></p>
            <nav class="detail-content__sns detail-sns">
              <ul class="detail-sns__list">
                <?php
                $sns = [
                  [
                    'text' => 'facebook',
                    'url' => 'https://www.facebook.com/'
                  ],
                  [
                    'text' => 'Twitter',
                    'url' => 'https://twitter.com/'
                  ],
                  [
                    'text' => 'Hatena',
                    'url' => 'https://b.hatena.ne.jp/'
                  ],
                  [
                    'text' => 'LINE',
                    'url' => 'https://www.lycbiz.com/jp/service/line-official-account/'
                  ],
                  [
                    'text' => 'Pocket',
                    'url' => 'https://getpocket.com/'
                  ],
                ];
                foreach ($sns as $value) :
                  $lower_name = strtolower($value['text']);
                  $class_name = ' ' . $lower_name;
                  $file_name = $lower_name . '.svg';
                  $image_path = '../assets/img/blog/icon/' . $file_name;
                  $svg = simplexml_load_file($image_path);
                  $width = (string)$svg['width'];
                  $height = (string)$svg['height'];
                ?>
                  <li class="detail-sns__item<?= $class_name ?>">
                    <a class="detail-sns__link" href="<?= $value['url'] ?>">
                      <p class="detail-sns__image"><img class="img-w-100" alt="<?= $value['text'] ?>" src="<?= $image_path ?>" width="<?= $width ?>" height="<?= $height ?>"></p>
                      <p class="detail-sns__text"><?= $value['text'] ?></p>
                    </a>
                  </li>
                <?php
                endforeach;
                ?>
              </ul>
            </nav>
            <p class="detail-content__text blog-card__text"><?= $blog[0]['text'] ?></p>
          </div>
        </div>
        <h2 class="detail-content__head2">H2見出しが入ります。H2見出しが入ります。</h2>
        <p class="detail-content__text detail-content__text">本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
        <picture class="detail-content__image">
          <source srcset="/assets/img/reason/01-pc.jpg" media="(min-width: 768px)">
          <img class="img-w-100" src="/assets/img/reason/01-sp.jpg" alt="" width="1005" height="600">
        </picture>
        <ul class="detail-content__list">
          <?php
          for ($i = 0; $i < 3; $i++) :
          ?>
            <li class="detail-content__item">・リストが入ります</li>
          <?php
          endfor;
          ?>
        </ul>
        <hr class="detail-content__hr">
        <h3 class="detail-content__head3">H3見出しが入ります。H3見出しが入ります。</h3>
        <div class="detail-content__quotation detail-content-quotation">
          <p class="detail-content-quotation__image"><img class="img-w-100" alt="" src="../assets/img/blog/icon/quote.svg"></p>
          <p class="detail-content__text">本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
        </div>
        <a href="./" class="detail-content__link">テキストリンク</a>
      </div>
      <div class="detail-content__bottom detail-content-bottom">
        <div class="detail-content-bottom__box detail-content-bottom__prev">
          <a href="./" class="detail-content-bottom__link">◀︎ 前の記事</a>
          <a href="./" class="detail-content-bottom__image-link"><img class="img-w-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" alt="" width="1005" height="600"></a>
          <p class="detail-content-bottom__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
        </div>
        <div class="detail-content-bottom__box detail-content-bottom__next">
          <a href="./" class="detail-content-bottom__link">次の記事 ▶︎</a>
          <a href="./" class="detail-content-bottom__image-link"><img class="img-w-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" alt="" width="1005" height="600"></a>
          <p class="detail-content-bottom__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
        </div>
      </div>
    </article>
    <aside class="detail__related detail-related detail-aside">
      <h4 class="detail-related__head detail-aside__title">関連記事</h4>
      <ul class="detail-related__list">
        <?php
        for ($i = 0; $i < 3; $i++) :
        ?>
          <li class="detail-related__item">
            <div class="detail-related__card blog-card">
              <div class="blog-card__image-box">
                <picture class="blog-card__image">
                  <source srcset="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" media="(min-width: 768px)">
                  <img class="img-w-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-sp.jpg" alt="" width="1005" height="600">
                </picture>
                <p class="blog-card__tag">ギター</p>
              </div>
              <h5 class="blog-card__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h5>
              <p class="blog-card__date">0000.00.00</p>
            </div>
          </li>
        <?php
        endfor;
        ?>
      </ul>
    </aside>
  </div>
  <div class="detail__extra">
    <aside class="detail__magazine detail-magazine detail-aside">
      <h4 class="detail-magazine__head detail-aside__title">無料メールマガジン</h4>
      <div class="detail-magazine__container">
        <p class="detail-magazine__image">バナー広告</p>
      </div>
    </aside>
    <aside class="detail__search detail-search detail-aside">
      <h4 class="detail-search__head detail-aside__title">ブログ内を検索</h4>
      <div class="detail-search__container">
        <form action="" method="post" class="detail-search__form">
          <input type="search" name="search" class="detail-search__input" placeholder="" value="">
          <button type="submit" class="detail-search__button"><img src="../assets/img/blog/icon/search.svg" alt="" width="24" height="24"></button>
        </form>
      </div>
    </aside>
    <aside class="detail__recommend detail-recommend detail-aside">
      <h4 class="detail-recommend__head detail-aside__title">おすすめの記事</h4>
      <ul class="detail-recommend__list">
        <?php
        for ($i = 0; $i < 3; $i++) :
        ?>
          <li class="detail-recommend__item">
            <div class="detail-recommend__card blog-card">
              <div class="blog-card__image-box">
                <p class="blog-card__image"></p>
              </div>
              <h5 class="blog-card__title">タイトルが入ります。タイトル</h5>
            </div>
          </li>
        <?php
        endfor;
        ?>
      </ul>
    </aside>
    <aside class="detail__category detail-category detail-aside">
      <h4 class="detail-category__head detail-aside__title">カテゴリー</h4>
      <ul class="detail-category__list">
        <?php
        for ($i = 0; $i < 5; $i++) :
        ?>
          <li class="detail-category__item">カテゴリー</li>
        <?php
        endfor;
        ?>
      </ul>
    </aside>
  </div>
</main>

<?php
require_once $footerPath;
