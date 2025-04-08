import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: process.env.VITE_HOST || '0.0.0.0',
        port: process.env.VITE_PORT || 3000,
        hmr: {
            host: process.env.VITE_APP_NAME || 'flatmarket.loc',
        },
        cors: true,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
