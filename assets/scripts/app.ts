import { init as homeInit } from './pages/home';
import { loadVueComponents } from './shared/helpers/vue-helpers';

declare global {
  interface Window {
    wp_data: any;
    jQuery: JQuery;
  }
}

console.log('Currently running on: ', window.wp_data.env?.MODE || 'Production');

const { jQuery } = window;
homeInit(jQuery);

loadVueComponents();
