/**
 * モバイルのハンバーガーメニュー開閉。
 * - `[data-menu-open]`     : ハンバーガーボタン
 * - `[data-menu-close]`    : 閉じるボタン
 * - `[data-mobile-menu]`   : 左から右にスライドインするメニュードロワー
 * - `[data-menu-backdrop]` : ドロワー背面の半透明オーバーレイ
 */
export function initHeaderMenu(): void {
  const openButton = document.querySelector<HTMLButtonElement>('[data-menu-open]');
  const closeButton = document.querySelector<HTMLButtonElement>('[data-menu-close]');
  const menu = document.querySelector<HTMLElement>('[data-mobile-menu]');
  const backdrop = document.querySelector<HTMLElement>('[data-menu-backdrop]');

  if (!menu || !openButton) {
    return;
  }

  const open = (): void => {
    menu.style.transform = 'translateX(0)';
    backdrop?.classList.remove('hidden');
    openButton.classList.add('hidden');
    document.body.style.overflow = 'hidden';
  };

  const close = (): void => {
    menu.style.transform = 'translateX(-100%)';
    backdrop?.classList.add('hidden');
    openButton.classList.remove('hidden');
    document.body.style.overflow = '';
  };

  openButton.addEventListener('click', open);
  closeButton?.addEventListener('click', close);
  backdrop?.addEventListener('click', close);

  menu.querySelectorAll<HTMLAnchorElement>('a').forEach((link) => {
    link.addEventListener('click', close);
  });
}
