import Swiper from 'swiper';
import { Autoplay, EffectFade } from 'swiper/modules';

/** トップのキービジュアル（クロスフェードのオートスライド） */
export function initKvSwiper(): void {
  const el = document.querySelector<HTMLElement>('.kv-swiper');
  if (!el) {
    return;
  }

  new Swiper(el, {
    modules: [Autoplay, EffectFade],
    effect: 'fade',
    fadeEffect: { crossFade: true },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    loop: true,
    speed: 2500,
  });
}
