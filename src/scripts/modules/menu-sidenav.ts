/**
 * メニューページのサイドナビ。スクロール位置に応じてアクティブ表示を切り替える。
 * - `[data-menu-nav-link]` : ナビのリンク（`data-target` にカテゴリー ID）
 * - 各カテゴリーセクションは `id` を持つ
 */
export function initMenuSideNav(): void {
  const links = Array.from(document.querySelectorAll<HTMLAnchorElement>('[data-menu-nav-link]'));
  if (links.length === 0) {
    return;
  }

  const sections = links
    .map((link) => document.getElementById(link.dataset['target'] ?? ''))
    .filter((el): el is HTMLElement => el !== null);

  if (sections.length === 0) {
    return;
  }

  const setActive = (id: string): void => {
    links.forEach((link) => {
      const isActive = link.dataset['target'] === id;
      link.classList.toggle('opacity-70', !isActive);
      const dot = link.querySelector<HTMLElement>('[data-menu-nav-dot]');
      if (dot) {
        dot.classList.toggle('opacity-100', isActive);
        dot.classList.toggle('opacity-0', !isActive);
      }
    });
  };

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setActive(entry.target.id);
        }
      });
    },
    { rootMargin: '-45% 0px -45% 0px' }
  );

  sections.forEach((section) => observer.observe(section));

  // 初回ロード時、URL ハッシュへスムーズスクロール（例: /menu/#sweets）。
  const hash = window.location.hash;
  if (hash) {
    const target = document.querySelector(hash);
    if (target) {
      requestAnimationFrame(() => {
        target.scrollIntoView({ behavior: 'smooth' });
      });
    }
  }
}
