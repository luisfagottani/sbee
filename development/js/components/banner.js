import Swiper from '../library/swiper.min.js';

const BannerActions = (function () {
  const swiper = document.querySelector('.swiper-container');

  return {
    startBanner: function () {
      if (swiper) {
        console.log("BANNER STARTED")
        new Swiper('.swiper-container', {
          // Optional parameters
          speed: 600,
          direction: 'vertical',
          loop: true,

          // Navigation arrows
          navigation: {
            nextEl: '.banner__button--next',
            prevEl: '.banner__button--prev',
          }
        })
      }
    }
  }

}());


export default BannerActions;
