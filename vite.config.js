import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/animate.css',
                'resources/css/tailwind.css',
                'resources/js/app.js',
                'resources/js/popper.js'
            ],
            refresh: true,
        }),
    ],
});
