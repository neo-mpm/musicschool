<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/src/config.php';

$head_path = ASSETS . '/tmpl/head.php';
$header_elements_path = ASSETS . '/tmpl/header_elements.php';
$footer_path = ASSETS . '/tmpl/footer.php';
$blog_data_path = $_SERVER['DOCUMENT_ROOT'] . '/blog/data.php';

$swiper_css_path = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css';
$css_paths = [$swiper_css_path];

$swiper_js_path = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js';
$js_paths = [$swiper_js_path];

$title = '';

require_once $head_path;
?>
<header class="header">
  <?php
  require_once $header_elements_path;
  ?>
  <section class="index__hero index-hero hero">
    <div class="index-hero__inner hero__inner">
      <h2 class="index-hero__h2 hero__h2">「音楽で生きる」<br class="br-sp">を叶える<br>
        ミュージックスクール</h2>
    </div>
  </section>
</header>
<main class="index">
  <section class="index__topic index-topic">
    <div class="index-topic__inner">
      <h3 class="index-topic__head title">全人類、<br class="br-sp">ミュージシャン計画。</h3>
      <p class="index-topic__text">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
      <p class="index-topic__semicircle">
        <picture>
          <source srcset="assets/img/topic/semicircle-pc.svg" media="(min-width: 768px)">
          <img class="img-w-100" src="assets/img/topic/semicircle-sp.svg" alt="" width="335" height="37">
        </picture>
      </p>
      <div class="index-topic__table">
        <p class="index-topic__data index-topic__data--left">Enthusiasm</p>
        <p class="index-topic__data index-topic__data--left">Envision</p>
        <p class="index-topic__data index-topic__data--left index-topic__data--bottom">Effulgent</p>
        <p class="index-topic__data index-topic__data--right">熱狂し</p>
        <p class="index-topic__data index-topic__data--right">想像し</p>
        <p class="index-topic__data index-topic__data--right index-topic__data--bottom">輝く存在へ</p>
      </div>
    </div>
  </section>
  <section class="index__about index-about">
    <h3 class="index-about__head title">音楽業界初！<br>
      収益化までサポートする<br class="br-sp">ミュージックスクール</h3>
    <p class="index-about__text">楽器や作詞作曲などの<br class="br-sp">技術・知識はもちろんのこと<br>
      自分で稼ぎつづけるための<br class="br-sp">ビジネス面もサポートします！</p>
  </section>
  <section class="index__reason index-reason">
    <h3 class="index-reason__head title">きたむらミュージック<br class="br-sp">スクールが選ばれる理由</h3>
    <ul class="index-reason__list">
      <?php
      $reason = [
        [
          'src'  => '01',
          'title' => '技術面はプロによるマンツーマン授業！',
          'text' => '第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。',
        ],
        [
          'src'  => '02',
          'title' => '収益化するためのビジネスサポート！',
          'text' => 'コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。',
        ],
        [
          'src'  => '03',
          'title' => '24時間365日使える練習ROOMを完備！',
          'text' => '一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。　（アプリで予約が必要です）',
        ],
      ];

      foreach ($reason as $value) :
      ?>
        <li class="index-reason__item">
          <p class="index-reason__image">
            <picture>
              <source srcset="assets/img/reason/<?= $value['src'] ?>-pc.jpg" media="(min-width: 768px)">
              <img class="img-w-100" src="assets/img/reason/<?= $value['src'] ?>-sp.jpg" alt="" width="335" height="200">
            </picture>
          </p>
          <div class="index-reason__box">
            <h4 class="index-reason__title"><?= $value['title'] ?></h4>
            <p class="index-reason__text"><?= $value['text'] ?></p>
          </div>
        </li>
      <?php
      endforeach;
      ?>
    </ul>
  </section>
  <section class="index__voice index-voice">
    <h3 class="index-voice__head title">生徒さんたちの声</h3>
    <div class="index-voice__container">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
          $voice = [
            [
              'src'  => '01.jpg',
              'occupation' => '証券会社勤務',
              'name' => '丸山',
              'text' => '昔やっていた音楽活動で、副収入が得られるようになったので、毎日充実するようになりました。',
            ],
            [
              'src'  => '02.jpg',
              'occupation' => 'IT会社勤務',
              'name' => 'S.E',
              'text' => 'プロの指導が受けられるので、技術が確実に上がるし、音楽への考え方とかも勉強できて最高です。',
            ],
            [
              'src'  => '03.jpg',
              'occupation' => '都内大学生',
              'name' => '田森',
              'text' => '就職する前にビジネスの事が学べるし、好きな音楽で稼げるようになったので選択肢が増えました。',
            ],
          ];

          $voice = array_merge($voice, $voice);

          foreach ($voice as $value) :
          ?>
            <div class="swiper-slide">
              <p class="index-voice__image"><img class="img-100" src="assets/img/voice/<?= $value['src'] ?>" alt="" width="335" height="200"></p>
              <h4 class="index-voice__name"><span><?= $value['occupation'] ?></span><span><?= $value['name'] ?>さん</span></h4>
              <p class="index-voice__text"><?= $value['text'] ?></p>
            </div>
          <?php
          endforeach;
          ?>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>
  <section class="index__guide index-guide">
    <h3 class="index-guide__head title">ご利用の流れ</h3>
    <div class="index-guide__container">
      <ul class="index-guide__list">
        <?php
        $guide = [
          [
            'title' => 'お問い合わせ',
            'text' => 'まずはフォームまたはメールにてお問い合わせください。<br>ヒアリングの日程を調整します。',
          ],
          [
            'title' => 'ヒアリング',
            'text' => '現在の技術面や将来の目標などをお伺いします。<br>悩みや不安な事もお気軽にご相談ください。',
          ],
          [
            'title' => 'プランのご提案',
            'text' => 'ライフスタイルや目標によって最適なプランをご提案します。<br>継続できるようサポートいたします。',
          ],
          [
            'title' => 'ご入学',
            'text' => 'お申し込み完了後、レッスンがスタートします。<br>マンツーマン指導なので、いつからでもスタートが可能です。',
          ],
        ];

        foreach ($guide as $value) :
        ?>
          <li class="index-guide__item">
            <h4 class="index-guide__title"><?= $value['title'] ?></h4>
            <p class="index-guide__text"><?= $value['text'] ?></p>
          </li>
        <?php
        endforeach;
        ?>
      </ul>
    </div>
  </section>
  <section class="index__faq index-faq">
    <h3 class="index-faq__head title">よくあるご質問</h3>
    <ul class="index-faq__list">
      <?php
      $faq = [
        [
          'question' => 'どのような生徒さんがどれぐらいの期間で稼いでいますか？',
          'answer' => '途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。',
        ],
        [
          'question' => '途中でプランを変更することは可能ですか？',
          'answer' => '途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。',
          'is-open' => true,
        ],
        [
          'question' => '入学金などの分割払いはできますか？',
          'answer' => '途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。',
        ],
        [
          'question' => '休学することも可能ですか？',
          'answer' => '途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。',
        ],
      ];

      foreach ($faq as $value) :
        $is_open = '';
        if (isset($value['is-open'])) {
          $is_open = ' is-open';
        }
      ?>
        <dl class="index-faq__item<?= $is_open ?>">
          <dt class="index-faq__question">
            <div class="index-faq__box">
              <p class="index-faq__icon">Q</p>
              <p class="index-faq__text"><?= $value['question'] ?></p>
              <p class="index-faq__arrow"><img class="img-100" src="assets/img/faq/faq-arrow-sp.svg" alt="" width="" height=""></p>
            </div>
          </dt>
          <dd class="index-faq__answer<?= $is_open ?>">
            <div class="index-faq__box">
              <p class="index-faq__icon index-faq__icon--red">A</p>
              <p class="index-faq__text index-faq__text--red"><?= $value['answer'] ?></p>
            </div>
          </dd>
        </dl>
      <?php
      endforeach;
      ?>
    </ul>
  </section>
  <section class="index__blog index-blog">
    <div class="index-blog__container">
      <h3 class="index-blog__head title">ブログ</h3>
      <ul class="index-blog__list">
        <?php
        require_once $blog_data_path;

        $blog = array_reverse($blog);

        foreach ($blog as $value) :
        ?>
          <li class="index-blog__item">
            <div class="index-blog__card blog-card">
              <a class="blog-card__image-box" href="detail.php">
                <picture class="blog-card__image">
                  <source srcset="assets/img/blog/<?= $value['src'] ?>-pc.jpg" media="(min-width: 768px)">
                  <img class="img-w-100" src="assets/img/blog/<?= $value['src'] ?>-sp.jpg" alt="" width="1005" height="600">
                </picture>
                <p class="blog-card__tag"><?= $value['tag'] ?></p>
              </a>
              <h4 class="blog-card__title"><?= $value['title'] ?></h4>
              <p class="blog-card__date"><?= $value['date'] ?></p>
            </div>
          </li>
        <?php
        endforeach;
        ?>
      </ul>
      <a class="index-blog__link" href="blog">ブログ一覧へ</a>
    </div>
  </section>
</main>
<?php
require_once $footer_path;
