/**
 * スクロールに応じたフェードイン（旧 React `FadeInOnScroll` の代替）。
 *
 * 対象要素に `data-reveal` を付与する。
 * - `data-reveal="up" | "down" | "left" | "right" | "none"` で方向を指定（既定 up）
 * - `data-reveal-delay="120"` で遅延（ミリ秒）
 */
export function initReveal(): void {
  const elements = Array.from(document.querySelectorAll<HTMLElement>('[data-reveal]'));

  if (elements.length === 0) {
    return;
  }

  elements.forEach((el) => {
    const delay = Number(el.dataset['revealDelay'] ?? '0');
    if (delay > 0) {
      el.style.transitionDelay = `${delay}ms`;
    }
  });

  if (!('IntersectionObserver' in window)) {
    elements.forEach((el) => el.classList.add('is-visible'));
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1, rootMargin: '0px' }
  );

  elements.forEach((el) => observer.observe(el));
}
