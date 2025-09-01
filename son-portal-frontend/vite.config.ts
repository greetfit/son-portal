import {fileURLToPath, URL} from 'node:url'

import {defineConfig} from 'vite'
import vue from '@vitejs/plugin-vue'
import Components from 'unplugin-vue-components/vite'
import {BootstrapVueNextResolver} from 'bootstrap-vue-next'

// https://vitejs.dev/config/
export default defineConfig({
    // base: "/lahomes_v/",
    plugins: [
        vue(),
        Components({
            resolvers: [BootstrapVueNextResolver()],
        }),
    ],
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./src', import.meta.url))
        }
    },
    server:{
        proxy:{
            '/api':{
                target:"http://127.0.0.1:8000/",
                changeOrigin:true,
                headers:{
                    Accept:"application/json",
                    "Content-Type":"application/json"
                }
            }
        }
    }
})
