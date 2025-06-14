  <div class="overlay"></div>
  <div class="header__container">
    <a class="header__link" href="/">
      <svg class="header__logo">
        <use xlink:href="#logo"></use>
      </svg>
      <h1 class="header__head"><span class="header__head--large">きたむら</span><br class="br-pc">ミュージックスクール</h1>
    </a>
    <nav class="header__nav header-nav">
      <p class="header-nav__box">
        <span class="header-nav__button">
          <span class="header-nav__line"></span>
        </span>
      </p>
      <div class="header-nav__container">
        <ul class="header-nav__list">
          <?php foreach ($navMenu as $key => $value) :
            if ($key === 'index') continue; ?>
            <li class="header-nav__item">
              <a class="header-nav__link" href="/<?= $key ?>/"><?= $value ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <a class="header-nav__contact button" href="/contact/"><span class="button__span">お問い合わせ</span></a>
      </div>
    </nav>
  </div>
