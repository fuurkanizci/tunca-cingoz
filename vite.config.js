import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    resolve: {
        extensions: ['.js', '.json', '.vue', '.css'],
        alias:{
            '~tailwindcss': path.resolve(__dirname, 'node_modules/tailwindcss'),
            '~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free'),
            'jquery': path.resolve(__dirname, 'node_modules/jquery'),
            '~swiper': path.resolve(__dirname, 'node_modules/swiper'),
            'magnificPopup': path.resolve(__dirname, 'node_modules/magnific"-popup'),
            'sweetalert2': path.resolve(__dirname, 'node_modules/sweetalert2'),
        }
    },
    optimizeDeps: {
        include: ['swiper/css']
    }
});
