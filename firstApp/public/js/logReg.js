//login page animation---------------------------------------------------------------------------------Section
const tl = gsap.timeline({
    defaults: { duration: 0.7, ease: "Power3.easeOut" },
});

tl.fromTo(".form", { x: -100, opacity: 0 }, { x: 0, opacity: 1 }, "<");
tl.fromTo(".form-r", { x: 100, opacity: 0 }, { x: 0, opacity: 1 }, "<");
tl.fromTo("#head", { x: 50, opacity: 0 }, { x: 0, opacity: 1 }, "<");
tl.fromTo("#rest", { x: 50, opacity: 0 }, { x: 0, opacity: 1 }, "<");
tl.fromTo("#body", { x: 50, opacity: 0 }, { x: 0, opacity: 1 }, "<");
tl.fromTo(
    "#head",
    { y: 10 },
    { y: 0, ease: "none", yoyo: true, repeat: Infinity }
);
tl.fromTo(
    "#tik",
    { y: 10 },
    { y: 0, ease: "none", yoyo: true, repeat: Infinity }
);
