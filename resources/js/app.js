import { createApp, h } from 'vue'
import { App, plugin } from '@inertiajs/inertia-vue3'
import routePlugin from './route-plugin'

const el = document.getElementById('app');

createApp({
  render: () => h(App, {
    initialPage: JSON.parse(el.dataset.page),
    resolveComponent: name => require(`./Pages/${name}`).default,
  })
}).use(plugin).use(routePlugin).mount(el);
