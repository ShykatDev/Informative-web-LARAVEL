const anim = gsap.timeline({ duration: 0.75, ease: "power2.out" });

//Buttons--------------------------------------------Section

const arr_btn1 = document.querySelector(".aa1");
const arr_btn2 = document.querySelector(".aa2");
const arr_btn3 = document.querySelector(".aa3");
const arr_btn4 = document.querySelector(".aa4");
const arr_btn5 = document.querySelector(".aa5");
const arr_btn6 = document.querySelector(".aa6");
const arr_btn7 = document.querySelector(".aa7");
const arr_btn8 = document.querySelector(".aa8");
const arr_btn9 = document.querySelector(".aa9");

//Animation------------------------------------------Start

arr_btn1.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".html-cont", { opacity: 0, x: 500, ease: "none" }, "<");
    anim.fromTo(
        ".css-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -412, ease: "none" },
        "<70%"
    );
});

arr_btn2.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".css-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".js-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -824, ease: "none" },
        "<70%"
    );
});

arr_btn3.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".js-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".node-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -1236, ease: "none" },
        "<70%"
    );
});

arr_btn4.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".node-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".angular-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -1648, ease: "none" },
        "<70%"
    );
});

arr_btn5.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".angular-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".react-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -2060, ease: "none" },
        "<70%"
    );
});

arr_btn6.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".react-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".php-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -2472, ease: "none" },
        "<70%"
    );
});

arr_btn7.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".php-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".laravel-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -2884, ease: "none" },
        "<70%"
    );
});

arr_btn8.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".laravel-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".git-cont",
        { opacity: 0, y: 0 },
        { opacity: 1, y: -3296, ease: "none" },
        "<70%"
    );
});

arr_btn9.addEventListener("click", function () {
    anim.fromTo(".comp", { x: -10 }, { x: 0, yoyo: true, repeat: 1 });
    anim.to(".git-cont", { opacity: 0, y: 0, ease: "none" }, "<");
    anim.fromTo(
        ".html-cont",
        { opacity: 0, x: -500 },
        { opacity: 1, x: 0, ease: "none" },
        "<70%"
    );
});
