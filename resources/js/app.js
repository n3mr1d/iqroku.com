import AOS from "aos";
import "aos/dist/aos.css";
import { animate } from "animejs";
import { waapi } from "animejs";
document.addEventListener("DOMContentLoaded", () => {
    AOS.init({
        duration: 800, // durasi animasi (ms)
        easing: "ease-in-out",
        once: true, // animasi hanya sekali
        offset: 100, // jarak trigger
    });
    animate(".square", {
        x: "15rem", // TranslateX shorthand
        scale: 1.25,
        skew: -45,
        rotate: "1turn",
    });

    // the WAAPI version is recommanded if you want to animate the transform property directly
    waapi.animate(".square", {
        transform: "translateX(15rem) scale(1.25) skew(-45deg) rotate(1turn)",
    });
});
