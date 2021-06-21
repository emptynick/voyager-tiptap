import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [vue()],
    build: {
        cssCodeSplit: true,
        lib: {
            entry: 'src/main.js',
            name: 'Tiptap',
            formats: ['umd'],
            fileName: 'tiptap'
        },
        rollupOptions: {
            external: ['vue'],
            output: {
                globals: {
                    vue: 'Vue'
                }
            }
        }
    }
})
