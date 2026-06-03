import '@/styles/main.css';

import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/navigation';

import { initHeaderMenu } from '@/scripts/modules/header-menu';
import { initReveal } from '@/scripts/modules/reveal';
import { initKvSwiper } from '@/scripts/modules/kv-swiper';
import { initScheduleSwiper } from '@/scripts/modules/schedule-swiper';
import { initStrawberrySwiper } from '@/scripts/modules/strawberry-swiper';
import { initDogrunSwiper } from '@/scripts/modules/dogrun-swiper';
import { initMenuSideNav } from '@/scripts/modules/menu-sidenav';
import { initMarquee } from '@/scripts/modules/marquee';

const onReady = (cb: () => void): void => {
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', cb, { once: true });
  } else {
    cb();
  }
};

onReady(() => {
  initHeaderMenu();
  initReveal();
  initKvSwiper();
  initScheduleSwiper();
  initStrawberrySwiper();
  initDogrunSwiper();
  initMenuSideNav();
  initMarquee();
});
