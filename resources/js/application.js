import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import '../css/app.css';
import 'sweetalert2/src/sweetalert2.scss'
import VueTheMask from 'vue-the-mask'

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./${name}.vue`, import.meta.glob('./App/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(VueTheMask)
            .mount(el)
    },
});
