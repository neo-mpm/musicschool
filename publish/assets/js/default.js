const breakpoint = 768;

// Nav Toggle Button
const body = document.querySelector('body');
const overlay = document.querySelector('.overlay');
const navToggle = document.querySelector('.header-nav__button');
const navContainer = document.querySelector('.header-nav__container');

if (overlay && navToggle && navContainer) {
  const navContainerLinks = navContainer.querySelectorAll('a');

  function toggleNav() {
    if (window.innerWidth >= breakpoint) return;

    if (overlay && navToggle && navContainer) {
      body.classList.toggle('open');
      overlay.classList.toggle('over');
      navToggle.classList.toggle('open');
      navContainer.classList.toggle('open');
    }
  }

  navToggle.addEventListener('click', toggleNav);
  overlay.addEventListener('click', toggleNav);
  navContainerLinks.forEach((link) => {
    link.addEventListener('click', toggleNav);
  });
}

// top-voice
const voiceSwiperBlock = '.top-voice';
const voiceSwiperElement = document.querySelector(voiceSwiperBlock);
if (voiceSwiperElement) {
  const voiceSwiper = new Swiper(voiceSwiperBlock + ' .swiper', {
    navigation: {
      nextEl: voiceSwiperBlock + ' .swiper-button-next',
      prevEl: voiceSwiperBlock + ' .swiper-button-prev',
    },
    slidesPerView: 'auto',
  });
}

// top-faq
function accordions() {
  const accordions = document.querySelectorAll('.top-faq__list');

  accordions.forEach(function (accordion) {
    const accordionBtn = accordion.querySelector('.top-faq__question');
    const accordionTarget = accordion.querySelector('.top-faq__answer');

    accordionBtn.addEventListener('click', function () {
      const isOpen = accordion.classList.contains('is-open');

      if (isOpen) {
        accordionTarget.style.height = '0px';
      } else {
        const scrollHeight = accordionTarget.scrollHeight;
        accordionTarget.style.height = scrollHeight + 'px';
      }

      accordion.classList.toggle('is-open');
      accordionTarget.classList.toggle('is-open');
    });

    accordionTarget.addEventListener('click', function () {
      accordionTarget.style.height = '0px';

      accordion.classList.toggle('is-open');
      accordionTarget.classList.toggle('is-open');
    });
  });
}

document.addEventListener('DOMContentLoaded', accordions);

// back-to-top
function handleScrollTopBtn() {
  const spFooterMargin = 20;
  const pcFooterMargin = 30;
  const SCROLL_THRESHOLD = 100;

  const scrollTopBtn = document.querySelector('.to-top');
  const footer = document.querySelector('footer');

  let FOOTER_MARGIN = window.innerWidth <= breakpoint ? spFooterMargin : pcFooterMargin;

  if (!scrollTopBtn || !footer) return;

  const scrollY = window.pageYOffset !== undefined ? window.pageYOffset : window.scrollY;
  const windowHeight = window.visualViewport ? window.visualViewport.height : window.innerHeight;
  const footerTop = footer.getBoundingClientRect().top + scrollY;

  if (scrollY > SCROLL_THRESHOLD) {
    scrollTopBtn.classList.add('active');
  } else {
    scrollTopBtn.classList.remove('active');
  }

  const overlap = scrollY + windowHeight - footerTop;
  if (overlap > 0) {
    scrollTopBtn.style.bottom = `${overlap + FOOTER_MARGIN}px`;
  } else {
    scrollTopBtn.style.removeProperty('bottom');
  }
}

window.addEventListener('scroll', handleScrollTopBtn, { passive: true });
window.addEventListener('resize', handleScrollTopBtn);
window.addEventListener('DOMContentLoaded', handleScrollTopBtn);

if (window.visualViewport) {
  window.visualViewport.addEventListener('resize', handleScrollTopBtn);
}

document.addEventListener('DOMContentLoaded', function () {
  const scrollTopBtn = document.querySelector('.to-top');
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});
