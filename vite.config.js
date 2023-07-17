import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
/*comentario de vite.config.js desde la rama main*/
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
