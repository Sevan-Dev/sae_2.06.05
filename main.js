let hamburger = document.querySelector(".checkbox")
let menu = document.querySelector(".mobile_menu")
let active = true;

hamburger.addEventListener('click', function() {
    const state = active ? '40%' : '-100%';
    menu.style.transform = `translateY(${state})`;
    active = !active;
});
