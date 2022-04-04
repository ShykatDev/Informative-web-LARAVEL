const tl = gsap.timeline({
    defaults: { duration: 0.7, ease: "Power3.easeOut" },
});

//Animations-----------------------------------------Start--------------------------------------------Section

tl.fromTo(".bb", { y: 50 }, { y: 0 });

tl.fromTo(
    ".bird",
    { y: 10 },
    { y: 0, yoyo: true, repeat: Infinity, duration: 1, ease: "none" },
    "<"
);

//AllPage refresh animation ---------------------------------------------------------------------------------Section

tl.fromTo(".homepage", { opacity: 0 }, { opacity: 1, duration: 2 }, "<");
tl.fromTo(".portfoliopage", { opacity: 0 }, { opacity: 1, duration: 2 }, "<");
tl.fromTo(".materialpage", { opacity: 0 }, { opacity: 1, duration: 2 }, "<");
tl.fromTo(".contactpage", { opacity: 0 }, { opacity: 1, duration: 2 }, "<");
tl.fromTo(".main-log", { opacity: 0 }, { opacity: 1, duration: 2 }, "<");

//Profile page animation---------------------------------------------------------------------------------Section

tl.fromTo(
    "#user",
    { y: 15 },
    { y: 0, ease: "none", yoyo: true, repeat: Infinity, duration: 0.5 },
    "<"
);

tl.fromTo(
    "#reveal",
    { y: 50 },
    { y: 0, ease: "none", yoyo: true, repeat: Infinity, duration: 1 },
    "<"
);

//Banner Animation--------------------------------------------------------------------------------------Section

tl.fromTo(".banner", { opacity: 0 }, { opacity: 1, duration: 1.7 }, "<");

tl.fromTo(
    ".content",
    { x: -20, opacity: 0 },
    { x: 0, opacity: 1, ease: "none" },
    "<20%"
);

tl.fromTo(
    ".pageNav",
    { y: -80, opacity: 0 },
    { y: 0, opacity: 1, delay: 1, stagger: 0.2 },
    "<"
);

tl.fromTo(".devMedia", { y: -20, opacity: 0 }, { opacity: 1, y: 0 });

tl.fromTo(
    ".sio",
    { y: -100, opacity: 0 },
    { y: 0, opacity: 1, delay: 1, stagger: 0.3 },
    "<"
);

tl.fromTo(
    ".homebanner",
    { y: 0 },
    { y: -10, yoyo: true, repeat: Infinity, duration: 1.3, ease: "none" },
    "<"
);

tl.fromTo(
    ".shadow",
    { y: 0, scale: 1 },
    {
        y: 10,
        scale: 0.8,
        yoyo: true,
        repeat: Infinity,
        duration: 1.3,
        ease: "none",
    },
    "<"
);

tl.fromTo(
    "#Vector",
    { y: -2 },
    { y: 0, yoyo: true, repeat: Infinity, ease: "none" },
    "<"
);

//Footer Micro Animation-------------------------------Start----------------------------------Section

//Location Animation
tl.fromTo("#main", { y: 0 }, { y: 2, yoyo: true, repeat: Infinity });
tl.fromTo(
    "#right-line",
    { opacity: 0 },
    { opacity: 1, yoyo: true, repeat: Infinity },
    "<"
);
tl.fromTo(
    "#left-line",
    { opacity: 0 },
    { opacity: 1, yoyo: true, repeat: Infinity },
    "<"
);

//Phone Animation
tl.fromTo("#dots", { x: 20 }, { x: 0, yoyo: true, repeat: Infinity }, "<");

//Plane Animation
tl.fromTo(
    "#force",
    { opacity: 0 },
    { opacity: 1, yoyo: true, repeat: Infinity },
    "<"
);
tl.fromTo("#plane", { x: -3 }, { x: 0, yoyo: true, repeat: Infinity }, "<");

//Mail Animation
tl.fromTo("#mh", { y: 0 }, { y: -3, yoyo: true, repeat: Infinity }, "<");

//Footer Micro Animation----------------------------End-----------------------------------------Section

//Animations----------------------------------------End-----------------------------------------Section

//Functions---------------------------------------Start-----------------------------------------Section

const subsBtn = document.querySelector(".subs");
const mail = document.forms["subForm"]["EMail"];
const notification = document.querySelector(".noti");
const warn = document.querySelector(".alert");
const cls = document.querySelector(".close");

const fun1 = function () {
    var audio = new Audio("/asset/notification.wav");
    audio.play();
    notification.innerHTML = `Please enter valid email`;
    warn.classList.add("show");
    warn.classList.remove("hide");
};

subsBtn.addEventListener("click", () => {
    if (mail.value == "") {
        fun1();
    } else if (mail.value.indexOf("@", 0) < 0) {
        fun1();
    } else if (mail.value.indexOf(".", 0) < 0) {
        fun1();
    } else {
        notification.classList.add("blueText");
        notification.innerHTML = `Thank you for subscribe!`;
        mail.value = "";
    }
});

cls.addEventListener("click", () => {
    warn.classList.add("hide");
    warn.classList.remove("show");
});

const cokBtn = document.querySelector(".cookie-got");
const cok = document.querySelector(".cookie");

cokBtn.addEventListener("click", () => {
    cok.classList.add("disappear");
});

//Functions---------------------------------------End--------------------------------Section
