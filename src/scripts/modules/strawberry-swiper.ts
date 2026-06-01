import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

/**
 * いちごのアーチ型スライダー。
 * スライドの progress に応じてカードの回転と Y 位置をリアルタイム更新し、
 * 中央が最も高く、端に行くほど傾いて下がるアーチ状のレイアウトを作る。
 */
export function initStrawberrySwiper(): void {
  const el = document.querySelector<HTMLElement>('.strawberry-swiper');
  if (!el) {
    return;
  }

  const updateTransforms = (swiper: Swiper): void => {
    swiper.slides.forEach((slide) => {
      const wrapper = slide.querySelector<HTMLElement>('.strawberry-card-wrapper');
      const card = slide.querySelector<HTMLElement>('.strawberry-card');
      if (!wrapper || !card) {
        return;
      }

      const progress = (slide as HTMLElement & { progress?: number }).progress ?? 0;

      const maxRotation = 30;
      const rotation = Math.max(-maxRotation, Math.min(maxRotation, -progress * 15));

      const maxOffsetY = 120;
      const offsetY = Math.min(maxOffsetY, progress * progress * 30);

      wrapper.style.transform = `translateY(${offsetY}px)`;
      card.style.transform = `rotate(${rotation}deg)`;
    });
  };

  const swiper = new Swiper(el, {
    modules: [Autoplay],
    slidesPerView: 1.3,
    spaceBetween: 40,
    centeredSlides: true,
    loop: true,
    speed: 800,
    watchSlidesProgress: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 3.15,
        spaceBetween: 48,
      },
      1024: {
        slidesPerView: 4.1,
        spaceBetween: 80,
      },
    },
    on: {
      init: (s) => updateTransforms(s),
      slideChange: (s) => updateTransforms(s),
      progress: (s) => updateTransforms(s),
      setTransition: (s, duration) => {
        s.slides.forEach((slide) => {
          const wrapper = slide.querySelector<HTMLElement>('.strawberry-card-wrapper');
          const card = slide.querySelector<HTMLElement>('.strawberry-card');
          if (wrapper) {
            wrapper.style.transitionDuration = `${duration}ms`;
          }
          if (card) {
            card.style.transitionDuration = `${duration}ms`;
          }
        });
      },
    },
  });

  window.setTimeout(() => updateTransforms(swiper), 50);
}
