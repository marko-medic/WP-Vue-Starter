import { init as navInit } from './shared/sections/nav';
import { lazyLoadMapper } from './shared/helpers/misc-helpers';
import { loadVueComponents } from './vue/main';

declare global {
  interface Window {
    wp_data: any;
    jQuery: JQuery;
  }
}

loadVueComponents();

console.log('Currently running on: ', window.wp_data.env?.MODE || 'Production');

const { jQuery: $ } = window;
navInit($);

lazyLoadMapper([
  { pageName: 'home', modules: ['pages/home'] },
  { pageName: 'about', modules: ['pages/about'] },
]);
