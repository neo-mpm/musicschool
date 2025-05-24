// index-voice
const voiceSwiperBlock = '.index-voice';
const voiceSwiperElement = document.querySelector(voiceSwiperBlock);
if (voiceSwiperElement) {
  const voiceSwiper = new Swiper(voiceSwiperBlock + ' .swiper', {
    breakpoints: {
      768: {
        slidesPerView: 3,
      },
      920: {
        slidesPerView: 3,
        spaceBetween: 35,
      },
    },
    navigation: {
      nextEl: voiceSwiperBlock + ' .swiper-button-next',
      prevEl: voiceSwiperBlock + ' .swiper-button-prev',
    },
    spaceBetween: 20,
    // loop: true,
  });
}

// index-faq
function accordions() {
  const accordions = document.querySelectorAll('.index-faq__item');

  accordions.forEach(function (accordion) {
    const accordionTarget = accordion.querySelector('.index-faq__answer');
    const accordionBtn = accordion.querySelector('.index-faq__question');

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
  });
}

document.addEventListener('DOMContentLoaded', accordions);

// back-to-top
addBackToTop({
  innerHTML: '<svg viewBox="0 0 68 68"><circle cx="34" cy="34" r="34"/><path d="M45.6527 42.2031L34.0764 26.4995L22.5 42.2031" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  scrollDuration: 500,
  textColor: 'transparent',
});
