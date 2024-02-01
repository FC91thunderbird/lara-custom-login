import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/css/app.css', 'resources/assets/js/app.js',
            'resources/assets/admin/vendor/css/pages/page-auth.css',
        ],
            refresh: true,
        }),
    ],
});
