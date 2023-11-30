function smoothScroll(target) {
    const element = document.querySelector(target);
    window.scroll({
        top: element.getBoundingClientRect().top + window.scrollY,
        left: 0,
        behavior: 'smooth'
    });
}
