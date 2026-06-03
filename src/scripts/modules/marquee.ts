/**
 * フッターマーキー: 画面内に入ったときだけアニメーションを走らせる。
 */
export function initMarquee(): void {
  const track = document.querySelector<HTMLElement>('.marquee-track');
  const marquee = track?.querySelector<HTMLElement>('.marquee');
  if (!track || !marquee) return;

  const observer = new IntersectionObserver(
    ([entry]) => {
      marquee.classList.toggle('is-running', entry?.isIntersecting ?? false);
    },
    { rootMargin: '50px' },
  );

  observer.observe(track);
}
