import { animate, stagger, onScroll } from "animejs";

/**
 * Modern Animations using Anime.js
 * Optimized for performance and high-end aesthetics
 */

const initAnimations = () => {


    /* ============================================================
         HERO & NAVIGATION
      ============================================================ */
    if (document.getElementById("hero")) {
        animate(".hero-blob", {
            scale: [1, 1.2],
            opacity: [0.1, 0.4],
            direction: "alternate",
            loop: true,
            duration: 4000,
            delay: stagger(1000),
            easing: "ease-in-out",
        });

        animate(".hero-element", {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 800,
            delay: stagger(100, { start: 200 }),
            easing: "ease-out",
        });

        animate(".hero-image-container", {
            opacity: [0, 1],
            translateX: [50, 0],
            duration: 1000,
            delay: 500,
            easing: "ease-out",
        });
    }

    /* ============================================================
         ABOUT US
      ============================================================ */
    if (document.querySelector(".about-header")) {
        animate(".about-header", {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: ".about-header", start: "top 85%" })
        });

        animate(".about-content", {
            opacity: [0, 1],
            translateX: [-40, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: ".about-content", start: "top 85%" })
        });

        animate(".about-image", {
            opacity: [0, 1],
            scale: [0.8, 1],
            translateY: [20, 0],
            duration: 800,
            delay: stagger(150),
            easing: "ease-out",
            autoplay: onScroll({ target: ".about-image", start: "top 90%" })
        });
    }

    /* ============================================================
         OUR TEAM
      ============================================================ */
    const teamSection = document.getElementById("team");
    if (teamSection) {
        animate(["#team flux\\:badge", "#team h2"], {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: "#team", start: "top 90%" })
        });

        animate(".team-card", {
            opacity: [0, 1],
            translateY: [40, 0],
            scale: [0.95, 1],
            duration: 600,
            delay: stagger(100),
            easing: "ease-out",
            autoplay: onScroll({ target: ".team-grid", start: "top 85%" })
        });
    }

    /* ============================================================
         LEADERSHIP (inside Hero or separate)
      ============================================================ */
    if (document.querySelector(".leadership-header")) {
        animate(".leadership-header", {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: ".leadership-header", start: "top 90%" })
        });

        animate(".image-hero", {
            opacity: [0, 1],
            translateY: [40, 0],
            scale: [0.9, 1],
            duration: 800,
            delay: stagger(150),
            easing: "ease-out",
            autoplay: onScroll({ target: ".image-hero", start: "top 85%" })
        });
    }

    /* ============================================================
         PROGRAM GOALS
      ============================================================ */
    if (document.getElementById("goals")) {
        animate(["#goals flux\\:badge", "#goals h1"], {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: "#goals", start: "top 90%" })
        });

        animate("#goals .timeline-item", {
            opacity: [0, 1],
            translateY: [40, 0],
            duration: 800,
            delay: stagger(150),
            easing: "ease-out",
            autoplay: onScroll({ target: "#goals", start: "top 85%" })
        });
    }

    /* ============================================================
         TIMELINE
      ============================================================ */
    if (document.querySelector("#waktu")) {
        animate([".waktu-badge", ".waktu-title"], {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 800,
            delay: stagger(150),
            easing: "ease-out",
            autoplay: onScroll({ target: "#waktu", start: "top 85%" })
        });

        animate(".timeline-track-line", {
            scaleX: [0, 1],
            transformOrigin: "left",
            duration: 1200,
            easing: "ease-in-out",
            autoplay: onScroll({ target: ".timeline-track-line", start: "top 90%" })
        });

        animate("#waktu .timeline-item", {
            opacity: [0, 1],
            scale: [0, 1],
            duration: 1000,
            delay: stagger(150),
            easing: "ease-out",
            autoplay: onScroll({ target: "#waktu .timeline-item", start: "top 85%" })
        });

        animate(".timeline-label", {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 600,
            delay: stagger(100),
            easing: "ease-out",
            autoplay: onScroll({ target: ".timeline-label", start: "top 90%" })
        });
    }

    /* ============================================================
         RULES
      ============================================================ */
    if (document.querySelector("#rules")) {
        animate(["#rules .inline-flex", "#rules h1", "#rules p.text-xl"], {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 800,
            delay: stagger(150),
            easing: "ease-out",
            autoplay: onScroll({ target: "#rules", start: "top 90%" })
        });

        animate(".rule-card", {
            opacity: [0, 1],
            translateY: [40, 0],
            duration: 600,
            delay: stagger(100),
            easing: "ease-out",
            autoplay: onScroll({ target: ".rule-card", start: "top 90%" })
        });
    }

    /* ============================================================
         SUPPORTING ACTIVITIES
      ============================================================ */
    if (document.querySelector(".activities-header")) {
        animate(".activities-header", {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: ".activities-header", start: "top 85%" })
        });

        animate(".activity-card", {
            opacity: [0, 1],
            translateY: [40, 0],
            scale: [0.95, 1],
            duration: 600,
            delay: stagger(100),
            easing: "ease-out",
            autoplay: onScroll({ target: ".activity-card", start: "top 90%" })
        });
    }

    /* ============================================================
         VISION & MISSION (PURPOSE)
      ============================================================ */
    if (document.querySelector(".purpose-header")) {
        animate(".purpose-header", {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: ".purpose-header", start: "top 85%" })
        });

        animate(".purpose-card", {
            opacity: [0, 1],
            translateY: [40, 0],
            duration: 800,
            delay: stagger(200),
            easing: "ease-out",
            autoplay: onScroll({ target: ".purpose-card", start: "top 85%" })
        });

        animate(".purpose-detail-card", {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 600,
            delay: stagger(100),
            easing: "ease-out",
            autoplay: onScroll({ target: ".purpose-detail-card", start: "top 90%" })
        });
    }

    /* ============================================================
         CORE CURRICULUM
      ============================================================ */
    if (document.querySelector(".curriculum-title")) {
        animate(".curriculum-title", {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 800,
            easing: "ease-out",
            autoplay: onScroll({ target: ".curriculum-title", start: "top 85%" })
        });

        animate(".curriculum-subtitle", {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 1000,
            delay: 200,
            easing: "ease-out",
            autoplay: onScroll({ target: ".curriculum-subtitle", start: "top 85%" })
        });

        animate(".curriculum-card", {
            opacity: [0, 1],
            translateY: [40, 0],
            duration: 800,
            delay: stagger(100),
            easing: "ease-out",
            autoplay: onScroll({ target: ".curriculum-card", start: "top 90%" })
        });
    }
};

// Start
document.addEventListener("DOMContentLoaded", initAnimations);

// Livewire Compatibility
document.addEventListener("livewire:init", () => {
    Livewire.hook("morph.updated", (el, component) => {
        if (el.el && (el.el.querySelector(".team-card") || el.el.classList.contains("team-card"))) {
            animate(".team-card", {
                opacity: [1],
                translateY: [0],
                duration: 400,
                easing: "ease-out",
            });
        }
    });
});
