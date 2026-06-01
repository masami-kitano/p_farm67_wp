import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

/** ドッグランの画像スライダー（左右ナビ付き） */
export function initDogrunSwiper(): void {
  const el = document.querySelector<HTMLElement>('.dogrun-swiper');
  if (!el) {
    return;
  }

  new Swiper(el, {
    modules: [Navigation],
    navigation: {
      prevEl: '.dogrun-swiper-prev',
      nextEl: '.dogrun-swiper-next',
    },
    loop: true,
    speed: 600,
    slidesPerView: 1,
    spaceBetween: 40,
  });
}
