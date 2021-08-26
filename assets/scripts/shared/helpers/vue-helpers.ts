import Vue from 'vue';
import vHeader from '../../components/Header.vue';
import vFooter from '../../components/Footer.vue';
import { isInPage, getCurrentPage } from './misc-helpers';

interface IComponentList {
  inc: string | string[];
  componentName: string;
  pathName: string;
}

const sharedComponents = {
  vHeader,
  vFooter,
};

const nonSharedComponents = [
  { componentName: 'vFront', inc: 'home', pathName: 'Front' },
  { componentName: 'vAbout', inc: 'about-us', pathName: 'About' },
  { componentName: 'vForm', inc: ['home', 'about-us'], pathName: 'Form' },
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
      const importedModule = await import(`../../components/${curr.pathName}`);
      const cmp = await importedModule.default;
      const awaitedAcc = (await acc) as any;
      awaitedAcc[curr.componentName] = await cmp;
      return awaitedAcc;
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
