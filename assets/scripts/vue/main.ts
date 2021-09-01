import Vue from 'vue';
import vApp from './App.vue';
import { isInPage, getCurrentPage } from '../shared/helpers/misc-helpers';

Vue.config.productionTip = false;

interface IComponentList {
  inc: string | string[];
  componentName: string;
  path: string;
}

const sharedComponents = {
  vApp,
};

const nonSharedComponents = [
  { componentName: 'vFront', inc: 'home', path: './pages/Front' },
  { componentName: 'vAbout', inc: 'about-us', path: './pages/About' },
  {
    componentName: 'vForm',
    inc: ['home', 'about-us'],
    path: './components/Form',
  },
];

const getComponentsLazily = (componentList: IComponentList[] = []) => {
  if (componentList.length === 0) {
    return {};
  }
  const components = componentList
    .filter((componentOption) => {
      if (
        typeof componentOption.inc !== 'string' &&
        typeof componentOption.inc !== 'object'
      ) {
        throw new Error('Invalid type of property inc');
      }
      if (typeof componentOption.inc === 'string') {
        return isInPage(componentOption.inc);
      }
      return componentOption.inc.includes(getCurrentPage());
    })
    .reduce(async (acc, curr) => {
      try {
        const importedModule = await import(`${curr.path}.vue`);
        const component = importedModule.default;
        const awaitedAcc = (await acc) as any;
        awaitedAcc[curr.componentName] = await component;
        return awaitedAcc;
      } catch (err) {
        console.log('@import error', err);
        throw err;
      }
    }, {});

  return components;
};

export const loadVueComponents = async (selector = '#app', extraOptions = {}) =>
  new Vue({
    el: selector,
    components: {
      ...sharedComponents,
      ...(await getComponentsLazily(nonSharedComponents)),
    },
    ...extraOptions,
  });
