//Second---------------------------------Section

let bannerSec = gsap.timeline({
    scrollTrigger: {
        trigger: ["#lef", "rit"],
        start: "top center",
        end: "+=160",
        // markers: true,
        scrub: 1,
    },
});

bannerSec.fromTo("#lef", { x: -50, opacity: 0 }, { x: 0, opacity: 1 });

bannerSec.fromTo("#rit", { x: 50, opacity: 0 }, { x: 0, opacity: 1 });

let manSec = gsap.timeline({
    scrollTrigger: {
        trigger: ".mAN",
        start: "top 100%",
        end: "+=20",
        // markers: true,
        scrub: 1,
    },
});
manSec.fromTo(
    ".mAN",
    { y: 100, opacity: 0 },
    { y: 0, opacity: 1, ease: "none" },
    "<"
);

//third-------------------------------Section

let bikeSec = gsap.timeline({
    scrollTrigger: {
        trigger: [".bike", ".bird", "mAN"],
        start: "top 65%",
        end: "+=200",
        toggleActions: "restart none none none",
        scrub: 1,
        // markers: true,
    },
});

bikeSec.fromTo(".bike", { x: -700 }, { x: 0, ease: "none" });

bikeSec.fromTo(
    ".bird",
    { x: 100, opacity: 0 },
    { x: 0, opacity: 1, ease: "none" },
    "<"
);

let bo = gsap.timeline({
    scrollTrigger: {
        trigger: [".bo"],
        start: "80% 100%",
        end: "+=100",
        toggleActions: "restart none none none",
        scrub: 1,
        // markers: true,
    },
});
bo.fromTo(".bo", { x: 50, opacity: 0 }, { x: 0, opacity: 1 });

let galary = gsap.timeline({
    scrollTrigger: {
        trigger: [".searchBar", ".galary"],
        start: "top 80%",
        end: "+=250",
        toggleActions: "restart none none none",
        scrub: 1,
        // markers: true,
    },
});
galary.fromTo(".searchBar", { opacity: 0, y: -40 }, { opacity: 1, y: 0 });
galary.fromTo(".galary", { opacity: 0, y: 40 }, { opacity: 1, y: 0 }, "<50%");

let dev = gsap.timeline({
    scrollTrigger: {
        trigger: [".dleft", ".dright", ".dSocial", ".developer", ".devCont"],
        start: "top 60%",
        end: "+=250",
        toggleActions: "restart none none none",
        scrub: 1,
        // markers: true,
    },
});
dev.fromTo(".dleft", { x: -100, opacity: 0 }, { x: 0, opacity: 1 });
dev.fromTo(".dright", { x: 100, opacity: 0 }, { x: 0, opacity: 1 }, "<");
dev.fromTo(".developer", { y: -20, opacity: 0 }, { y: 0, opacity: 1 }, "<");
dev.fromTo(".dSocial", { y: 20, opacity: 0 }, { y: 0, opacity: 1 });
dev.fromTo(".devCont", { y: -20, opacity: 0 }, { y: 0, opacity: 1 });

//Portfolio Page -------------------------Section

gsap.to(".portproj", {
    scrollTrigger: {
        trigger: ".portproj",
        toggleActions: "restart none none none",
        // markers: true,
        start: "45% center",
        end: "+=3100 top",
        pin: true,
        pinSpacing: false,
    },
    x: 0,
});

gsap.to(".webProj", {
    scrollTrigger: {
        trigger: ".webProj",
        toggleActions: "restart none none none",
        // markers: true,
        start: "55% center",
        end: "+=3100 top",
        pin: true,
        pinSpacing: false,
    },
    y: 0,
});

let myport = gsap.timeline({
    scrollTrigger: {
        trigger: [".rightside"],
        start: "10% center",
        end: "70% bottom",
        toggleActions: "none none none none",
        // markers: true,
        scrub: 1,
    },
});

myport.fromTo(
    ".leftside",
    { opacity: 0, x: -200 },
    { opacity: 1, x: 0, duration: 1 }
);
myport.fromTo(
    ".rightside",
    { opacity: 0, x: 200 },
    { opacity: 1, x: 0, duration: 1 },
    "<"
);

let myport1 = gsap.timeline({
    scrollTrigger: {
        trigger: [".leftside1"],
        start: "10% center",
        end: "70% bottom",
        toggleActions: "none none none none",
        // markers: true,
        scrub: 1,
    },
});

myport1.fromTo(
    ".leftside1",
    { opacity: 0, x: -200 },
    { opacity: 1, x: 0, duration: 1 }
);
myport1.fromTo(
    ".rightside1",
    { opacity: 0, x: 200 },
    { opacity: 1, x: 0, duration: 1 },
    "<"
);

let port = gsap.timeline({
    scrollTrigger: {
        trigger: [".div2", ".roman2"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

port.fromTo(".div2", { opacity: 0, x: -100 }, { opacity: 1, x: 0 });
port.fromTo(".roman2", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let port1 = gsap.timeline({
    scrollTrigger: {
        trigger: [".div3", ".roman3"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

port1.fromTo(".div3", { opacity: 0, x: -100 }, { opacity: 1, x: 0 });
port1.fromTo(".roman3", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let port2 = gsap.timeline({
    scrollTrigger: {
        trigger: [".div4", ".roman4"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

port2.fromTo(".div4", { opacity: 0, x: -100 }, { opacity: 1, x: 0 });
port2.fromTo(".roman4", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let port3 = gsap.timeline({
    scrollTrigger: {
        trigger: [".div5", "roman5"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

port3.fromTo(".div5", { opacity: 0, x: -100 }, { opacity: 1, x: 0 });
port3.fromTo(".roman5", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let port4 = gsap.timeline({
    scrollTrigger: {
        trigger: [".div6", ".roman6"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

port4.fromTo(".div6", { opacity: 0, x: -100 }, { opacity: 1, x: 0 });
port4.fromTo(".roman6", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

//Website Design Portfolio.................................... Section

let sect = gsap.timeline({
    scrollTrigger: {
        trigger: [".sec2", ".roman8"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

sect.fromTo(".sec2", { opacity: 0, x: 100 }, { opacity: 1, x: 0 });
sect.fromTo(".roman8", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let sect1 = gsap.timeline({
    scrollTrigger: {
        trigger: [".sec3", ".roman9"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

sect1.fromTo(".sec3", { opacity: 0, x: 100 }, { opacity: 1, x: 0 });
sect1.fromTo(".roman9", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let sect2 = gsap.timeline({
    scrollTrigger: {
        trigger: [".sec4", ".roman10"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

sect2.fromTo(".sec4", { opacity: 0, x: 100 }, { opacity: 1, x: 0 });
sect2.fromTo(".roman10", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let sect3 = gsap.timeline({
    scrollTrigger: {
        trigger: [".sec5", ".roman11"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

sect3.fromTo(".sec5", { opacity: 0, x: 100 }, { opacity: 1, x: 0 });
sect3.fromTo(".roman11", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });

let sect4 = gsap.timeline({
    scrollTrigger: {
        trigger: [".sec6", ".roman12"],
        toggleActions: "repeat none none none",
        start: "top center",
        end: "center 30%",
        // markers: true,
        scrub: 1,
    },
});

sect4.fromTo(".sec6", { opacity: 0, x: 100 }, { opacity: 1, x: 0 });
sect4.fromTo(".roman12", { opacity: 0, y: 100 }, { opacity: 1, y: 0 });
