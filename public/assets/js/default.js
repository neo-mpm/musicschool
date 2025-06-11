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

// index-voice
const voiceSwiperBlock = '.index-voice';
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

// index-faq
function accordions() {
  const accordions = document.querySelectorAll('.index-faq__item');

  accordions.forEach(function (accordion) {
    const accordionBtn = accordion.querySelector('.index-faq__question');
    const accordionTarget = accordion.querySelector('.index-faq__answer');

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
  const spFooterMargin = 10;
  const pcFooterMargin = 30;
  const SCROLL_THRESHOLD = 100;

  const scrollTopBtn = document.querySelector('.to-top');
  const footer = document.querySelector('footer');

  let FOOTER_MARGIN;
  if (window.innerWidth <= breakpoint) {
    FOOTER_MARGIN = spFooterMargin;
  } else {
    FOOTER_MARGIN = pcFooterMargin;
  }

  if (!scrollTopBtn || !footer) return;

  const footerTop = footer.getBoundingClientRect().top + window.scrollY;
  console.log(footerTop);
  const windowHeight = window.innerHeight;
  const scrollY = window.scrollY;

  if (scrollY > SCROLL_THRESHOLD) {
    scrollTopBtn.classList.add('active');
  } else {
    scrollTopBtn.classList.remove('active');
  }

  if (scrollY + windowHeight > footerTop) {
    scrollTopBtn.style.bottom = `${windowHeight - (footerTop - scrollY) + FOOTER_MARGIN}px`;
  } else {
    scrollTopBtn.style.removeProperty('bottom');
  }
}

window.addEventListener('scroll', handleScrollTopBtn);
window.addEventListener('DOMContentLoaded', handleScrollTopBtn);

document.addEventListener('DOMContentLoaded', function () {
  const scrollTopBtn = document.querySelector('.to-top');
  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});
