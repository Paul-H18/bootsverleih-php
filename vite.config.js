import { defineConfig } from 'vite';

export default defineConfig({
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        rollupOptions: {
            input: 'resources/css/app.css',
            output: {
                assetFileNames: 'app.css'
            }
        }
    },
    css: {
        devSourcemap: false
    }
});
