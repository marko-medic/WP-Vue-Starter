interface IOptions {
  pageName: string;
  modules: any[];
}

export const isInPage = (pageName: string) =>
  document.body.classList.contains(`page-${pageName}`);

export const getCurrentPage = () => {
  if (window.location.pathname === '/') {
    return 'home';
  }

  return window.location.pathname.replace(/\//g, '');
};

export const lazyLoadMapper = (options: IOptions[] = []) => {
  if (!options || options.length === 0) {
    return;
  }
  options.forEach((option) => {
    if (isInPage(option.pageName)) {
      option.modules.forEach((optionModule) => {
        import(`../../${optionModule}.ts`).then((module) => {
          if (typeof module.init === 'function') {
            const { jQuery: $ } = window;
            module.init($);
          }
        });
      });
    }
  });
};
