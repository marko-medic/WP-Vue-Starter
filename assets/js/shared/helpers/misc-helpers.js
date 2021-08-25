export const isPage = (pageName) =>
  document.body.classList.contains(`page-${pageName}`);

export const lazyLoadMapper = (options = []) => {
  if (!options || options.length === 0) {
    return;
  }
  options.forEach((option) => {
    if (isPage(option.pageName)) {
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
