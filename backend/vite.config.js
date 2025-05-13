import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/vendor.min.css',
                'resources/css/default/app.min.css',
                'resources/js/vendor.min.js',
                'resources/js/app.min.js',
            ],
            refresh: true,
        }),
    ],
});
