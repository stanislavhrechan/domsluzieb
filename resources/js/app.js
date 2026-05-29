import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export function initFeatures() {

    const items = document.querySelectorAll(".feature-card");

    if (!items.length) return;

    console.log("FEATURE ANIMATIONS INIT");

    gsap.from(items, {
        y: 120,
        opacity: 0,
        scale: 0.96,
        duration: 1.1,
        ease: "expo.out",
        stagger: 0.12,

        scrollTrigger: {
            trigger: ".feature-grid",
            start: "top 85%",
            markers: true
        }
    });
}

