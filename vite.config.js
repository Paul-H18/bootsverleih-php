import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';



export default defineConfig({
    plugins: [
        vue(),
    ],
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                registration: resolve(__dirname, 'resources/js/registration.js'),
                login: resolve(__dirname, 'resources/js/login.js'),
                navigation: resolve(__dirname, 'resources/js/navigation.js'),
            },
            output: {
                entryFileNames: '[name].js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            }
        },
        cssCodeSplit: false,
    },
    css: {
        devSourcemap: false
    }
});
