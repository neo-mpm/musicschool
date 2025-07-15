<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$header_path = ASSETS . '/tmpl/header.php';
$footerPath = ASSETS . '/tmpl/footer.php';
$blog_data_path = $_SERVER['DOCUMENT_ROOT'] . '/blog/data.php';

require_once $blog_data_path;

$class_name = 'blog-details';
$title = $blog[0]['title'];

require_once $header_path;
?>
<main class="<?= $class_name; ?>">
  <nav class="blog-details__breadcrumb breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../top/">ホーム</a>></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="../blog/">ブログ</a>></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="./">ギター</a>></li>
        <li class="breadcrumb__item"><span class="breadcrumb__text ellipsis"><?= $title; ?></span></li>
      </ul>
    </div>
  </nav>
  <div class="blog-details__inner inner">
    <div class="blog-details__container">
      <div class="blog-details__main">
        <article class="blog-details__content details-content">
          <div class="details-content__inner">
            <div class="details-content__container">
              <div class="details-content__card card">
                <div class="card__image-box">
                  <picture class="card__image">
                    <source srcset="../assets/img/blog/<?= $blog[0]['src'] ?>-pc.jpg" media="(min-width: 768px)">
                    <img class="img-100" src="../assets/img/blog/<?= $blog[0]['src'] ?>-sp.jpg" alt="" width="1005" height="600" loading="lazy">
                  </picture>
                  <p class="card__tag"><?= $blog[0]['tag'] ?></p>
                </div>
                <h1 class="card__title page-title">
                  <span class="card__title-text"><?= $title ?></span>
                </h1>
                <p class="card__date"><?= $blog[0]['date'] ?></p>
                <nav class="details-content__sns blog-details-sns">
                  <ul class="blog-details-sns__list">
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
                      <li class="blog-details-sns__item<?= $class_name ?>">
                        <a class="blog-details-sns__link" href="<?= $value['url'] ?>" target="_blank" rel="noreferrer">
                          <div class="blog-details-sns__image"><img class="img-w-100" alt="<?= $value['text'] ?>" src="<?= $image_path ?>" width="<?= $width ?>" height="<?= $height ?>" loading="lazy"></div>
                          <p class="blog-details-sns__text"><?= $value['text'] ?></p>
                        </a>
                      </li>
                    <?php
                    endforeach;
                    ?>
                  </ul>
                </nav>
                <p class="details-content__text card__text"><?= $blog[0]['text'] ?></p>
              </div>
            </div>
            <h2 class="details-content__head2">H2見出しが入ります。H2見出しが入ります。</h2>
            <p class="details-content__text details-content__text">本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
            <picture class="details-content__image">
              <source srcset="../assets/img/top/reason/01-pc.jpg" media="(min-width: 768px)">
              <img class="img-w-100" src="../assets/img/top/reason/01-sp.jpg" alt="" width="1005" height="600" loading="lazy">
            </picture>
            <ul class="details-content__list">
              <?php
              for ($i = 0; $i < 3; $i++) :
              ?>
                <li class="details-content__item">・リストが入ります</li>
              <?php
              endfor;
              ?>
            </ul>
            <hr class="details-content__hr">
            <h3 class="details-content__head3">H3見出しが入ります。H3見出しが入ります。</h3>
            <div class="details-content__quotation blog-details-quotation">
              <div class="blog-details-quotation__image"><img class="img-w-100" alt="" src="../assets/img/blog/icon/quote.svg" width="28" height="25"></div>
              <p class="details-content__text">本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
            </div>
            <a href="details.php" class="details-content__link">テキストリンク</a>
          </div>
          <div class="details-content__bottom details-bottom">
            <a class="details-bottom__box details-bottom__prev" href="details.php">
              <p class="details-bottom__link">◀︎ 前の記事</p>
              <div class="details-bottom__image-link"><img class="img-w-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" alt="" width="1005" height="600" loading="lazy"></div>
              <p class="details-bottom__title ellipsis">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
            </a>
            <a class="details-bottom__box details-bottom__next" href="details.php">
              <p class="details-bottom__link">次の記事 ▶︎</p>
              <div class="details-bottom__image-link"><img class="img-w-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" alt="" width="1005" height="600" loading="lazy"></div>
              <p class="details-bottom__title ellipsis">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
            </a>
          </div>
        </article>
        <aside class="blog-details__related details-related details-aside">
          <h4 class="details-related__head details-aside__title">関連記事</h4>
          <ul class="details-related__list">
            <?php
            for ($i = 0; $i < 3; $i++) :
            ?>
              <li class="details-related__item">
                <a class="details-related__card card" href="details.php">
                  <div class="card__image-box">
                    <picture class="card__image">
                      <source srcset="../assets/img/blog/<?= $blog[2]['src'] ?>-pc.jpg" media="(min-width: 768px)">
                      <img class="img-100" src="../assets/img/blog/<?= $blog[2]['src'] ?>-sp.jpg" alt="" width="1005" height="600" loading="lazy">
                    </picture>
                    <p class="card__tag">ギター</p>
                  </div>
                  <h5 class="card__title ellipsis">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h5>
                  <p class="card__date">0000.00.00</p>
                </a>
              </li>
            <?php
            endfor;
            ?>
          </ul>
        </aside>
      </div>
      <div class="blog-details__extra">
        <aside class="blog-details__magazine blog-details-magazine details-aside">
          <h4 class="blog-details-magazine__head details-aside__title">無料メールマガジン</h4>
          <div class="blog-details-magazine__container">
            <a href="details.php" class="blog-details-magazine__link">
              <p class="blog-details-magazine__image">バナー広告</p>
            </a>
          </div>
        </aside>
        <aside class="blog-details__search blog-details-search details-aside">
          <h4 class="blog-details-search__head details-aside__title">ブログ内を検索</h4>
          <div class="blog-details-search__container">
            <form action="details.php" method="post" class="blog-details-search__form">
              <input type="search" name="search" class="blog-details-search__input" placeholder="" value="">
              <button type="submit" class="blog-details-search__button"><img src="../assets/img/blog/icon/search.svg" alt="" width="24" height="24" loading="lazy"></button>
            </form>
          </div>
        </aside>
        <aside class="blog-details__recommend blog-details-recommend details-aside">
          <h4 class="blog-details-recommend__head details-aside__title">おすすめの記事</h4>
          <ul class="blog-details-recommend__list">
            <?php
            for ($i = 0; $i < 3; $i++) :
            ?>
              <li class="blog-details-recommend__item">
                <a class="blog-details-recommend__card card" href="details.php">
                  <div class="card__image-box">
                    <div class="card__image"></div>
                  </div>
                  <h5 class="card__title ellipsis">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h5>
                </a>
              </li>
            <?php
            endfor;
            ?>
          </ul>
        </aside>
        <aside class="blog-details__category blog-details-category details-aside">
          <h4 class="blog-details-category__head details-aside__title">カテゴリー</h4>
          <ul class="blog-details-category__list">
            <?php
            for ($i = 0; $i < 5; $i++) :
            ?>
              <li class="blog-details-category__item"><a href="./">カテゴリー</a></li>
            <?php
            endfor;
            ?>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</main>

<?php
require_once $footerPath;
