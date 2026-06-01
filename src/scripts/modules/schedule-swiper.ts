import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

/**
 * トップのスケジュールスライダー。
 * - センタリングのループスライダー
 * - SP: カードタップで裏返し（`.card-flip-inner` に `flipped` を付与）
 * - PC: hover で説明を表示（CSS 側で処理）
 */
export function initScheduleSwiper(): void {
  const el = document.querySelector<HTMLElement>('.schedule-swiper');
  if (!el) {
    return;
  }

  new Swiper(el, {
    modules: [Autoplay],
    centeredSlides: true,
    loop: true,
    speed: 800,
    slidesPerView: 1.2,
    spaceBetween: 20,
    preventClicks: false,
    preventClicksPropagation: false,
    maxBackfaceHiddenSlides: 0,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 3.4,
        spaceBetween: 40,
      },
    },
  });

  const cards = Array.from(el.querySelectorAll<HTMLElement>('.card-flip'));

  const toggle = (card: HTMLElement): void => {
    const inner = card.querySelector<HTMLElement>('.card-flip-inner');
    if (!inner) {
      return;
    }
    const willFlip = !inner.classList.contains('flipped');
    cards.forEach((c) => c.querySelector('.card-flip-inner')?.classList.remove('flipped'));
    if (willFlip) {
      inner.classList.add('flipped');
    }
  };

  cards.forEach((card) => {
    card.addEventListener('click', (event) => {
      event.stopPropagation();
      toggle(card);
    });
    card.addEventListener('keydown', (event) => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        toggle(card);
      }
    });
  });
}
