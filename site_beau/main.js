document.addEventListener('DOMContentLoaded', function() {
    let hamburger = document.querySelector(".checkbox");
    let menu = document.querySelector(".mobile_menu");
    let active = true;
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    hamburger.addEventListener('click', function() {
        const state = active ? '40%' : '-100%';
        menu.style.transform = `translateY(${state})`;
        active = !active;
    });

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove("active");
    });
});
