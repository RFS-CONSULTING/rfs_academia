require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Layout from './Layouts/MainLayout.vue'
import {__, trans, setLocale, getLocale, transChoice, MaticeLocalizationConfig, locales} from "matice"
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const page = require(`./Pages/${name}`).default
        page.layout = Layout
        return page
    },

    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { 
                route,
                $trans: trans,
                $__: __,
                $transChoice: transChoice,
                $setLocale(locale) {
                    setLocale(locale);
                    this.$forceUpdate() // Refresh the vue instance(The whole app in case of SPA) after the locale changes.
                },
                // The current locale
                $locale() {
                    return getLocale()
                },
                // A listing of the available locales
                $locales() {
                    return locales()
                }
            } 
            })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
