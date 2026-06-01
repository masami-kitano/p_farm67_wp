import { defineConfig } from 'vite';
import path from 'path';
import tailwindcss from '@tailwindcss/vite';
import liveReload from 'vite-plugin-live-reload';

export default defineConfig({
  plugins: [tailwindcss(), liveReload([path.resolve(__dirname, 'theme/**/*.php')])],
  publicDir: false,
  base: './',
  build: {
    outDir: path.resolve(__dirname, 'theme/dist'),
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'src/scripts/main.ts'),
      },
      output: {
        entryFileNames: '[name].js',
        chunkFileNames: 'chunks/[name]-[hash].js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name === 'main.css') {
            return 'style.css';
          }
          if (assetInfo.name?.endsWith('.css')) {
            return '[name].css';
          }
          return 'assets/[name]-[hash][extname]';
        },
      },
    },
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'src'),
    },
  },
  server: {
    port: 5173,
    strictPort: true,
    host: '0.0.0.0',
    cors: true,
    hmr: {
      host: 'localhost',
      clientPort: 5173,
    },
    watch: {
      usePolling: true,
      interval: 100,
    },
  },
});
