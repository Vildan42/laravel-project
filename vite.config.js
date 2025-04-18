import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // server: {
    //     host: 'lar.local.gd',
    //     https: true,
    // },
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/sass/app.scss'],
            refresh: true,
        }),
    ],
});
