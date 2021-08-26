import { init as homeInit } from './pages/home';
import { loadVueComponents } from './shared/helpers/vue-helpers';

console.log(
  'Currently running on: ',
  window.wp_data?.env?.MODE || 'Production'
);

const { jQuery } = window;
homeInit(jQuery);

loadVueComponents();
