// resources/js/app.js – Inertia + Vue 3 setup
import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
    // Resolve Vue page components. Supports nested folders (e.g., Landing/Index.vue).
    resolve: name => {
        console.log('Inertia resolve component:', name);
        const pages = import.meta.glob('./Pages/**/*.vue');
        const path = `./Pages/${name}.vue`;
        if (!pages[path]) {
            console.error(`[Inertia] Component not found: ${path}`);
            // Return a minimal stub component to avoid undefined errors.
            return Promise.resolve({ default: { template: '<div></div>' } });
        }
        return resolvePageComponent(path, pages);
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
