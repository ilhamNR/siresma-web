import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/admin.css',
                'resources/js/app.js',
                'resources/css/admin/main.css',
                'resources/js/admin/main.js',
                'resources/js/admin/dashboard.js',
                'resources/css/admin/nasabah.css',
                'resources/js/admin/nasabah.js',
                'resources/js/admin/userdetails.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
