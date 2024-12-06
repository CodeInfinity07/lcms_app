import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/assets/scss/app.scss',
                'public/assets/scss/bootstrap.scss',
                'public/assets/scss/icons.scss',
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                    // Place global variables or mixins here if needed
                `,
            },
        },
    },
});
