export const isInPage = (pageName) =>
  document.body.classList.contains(`page-${pageName}`);

export const isObjectEmpty = (object) => Object.keys(object).length === 0;

export const getCurrentPage = () => {
  if (window.location.pathname === '/') {
    return 'home';
  }

  return window.location.pathname.replace(/\//g, '');
};

export const lazyLoadMapper = (options = []) => {
  if (!options || options.length === 0) {
    return;
  }
  options.forEach((option) => {
    if (isInPage(option.pageName)) {
      option.modules.forEach((optionModule) => {
        import(`../../${optionModule}.js`).then((module) => {
          if (typeof module.default === 'function') {
            module.default();
          }
        });
      });
    }
  });
};
