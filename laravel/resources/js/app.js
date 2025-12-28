import { animate, stagger, onScroll } from "animejs";

/**
 * Optimized Animations using Anime.js
 * Performance-first approach with reduced complexity
 */

// Check if user prefers reduced motion
const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
).matches;

// Performance check - detect low-end devices
const isLowEndDevice = () => {
    const memory = navigator.deviceMemory; // GB
    const cores = navigator.hardwareConcurrency;
    return (memory && memory < 4) || (cores && cores < 4);
};

// Optimize animation settings based on device capability
const getOptimizedDuration = (baseDuration) => {
    if (prefersReducedMotion) return 0;
    if (isLowEndDevice()) return baseDuration * 0.7; // 30% faster
    return baseDuration;
};

const getOptimizedStagger = (baseStagger) => {
    if (prefersReducedMotion) return 0;
    if (isLowEndDevice()) return baseStagger * 0.6; // Reduce stagger delay
    return baseStagger;
};

/**
 * Simplified animation helper
 * Reduces code duplication and ensures consistent performance
 */
const animateOnScroll = (selector, config = {}) => {
    if (!document.querySelector(selector)) return;

    const defaultConfig = {
        opacity: [0, 1],
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
        easing: "ease-out",
        autoplay: onScroll({
            target: selector,
            start: "top 90%",
        }),
    };

    animate(selector, { ...defaultConfig, ...config });
};

const initAnimations = () => {
    // Skip animations if user prefers reduced motion
    if (prefersReducedMotion) {
        // Just make everything visible immediately
        document.body.style.setProperty("--animation-disabled", "1");
        return;
    }

    /* ============================================================
         HERO SECTION - Immediate load, no scroll trigger
      ============================================================ */
    if (document.getElementById("hero")) {
        // Subtle blob animation - only on high-end devices
        if (!isLowEndDevice()) {
            animate(".hero-blob", {
                scale: [1, 1.15],
                opacity: [0.2, 0.3],
                direction: "alternate",
                loop: true,
                duration: 6000, // Slower for smoothness
                delay: stagger(1500),
                easing: "ease-in-out",
            });
        }

        // Hero content - faster, simpler
        animate(".hero-element", {
            opacity: [0, 1],
            translateY: [15, 0],
            duration: getOptimizedDuration(500),
            delay: stagger(60, { start: 100 }),
            easing: "ease-out",
        });

        animate(".hero-image-container", {
            opacity: [0, 1],
            translateX: [30, 0],
            duration: getOptimizedDuration(600),
            delay: 300,
            easing: "ease-out",
        });
    }

    /* ============================================================
         ABOUT US - Scroll triggered
      ============================================================ */
    animateOnScroll(".about-header", {
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
    });

    animateOnScroll(".about-content", {
        translateX: [-20, 0],
        duration: getOptimizedDuration(500),
    });

    // Simplified image animation - no scale to reduce jank
    animateOnScroll(".about-image", {
        opacity: [0, 1],
        translateY: [15, 0],
        duration: getOptimizedDuration(500),
        delay: stagger(getOptimizedStagger(80)),
    });

    /* ============================================================
         OUR TEAM - Optimized for many elements
      ============================================================ */
    if (document.getElementById("team")) {
        animateOnScroll("#team flux\\:badge, #team h2", {
            translateY: [15, 0],
            duration: getOptimizedDuration(500),
        });

        // Reduced animation complexity for team cards
        animateOnScroll(".team-card", {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: getOptimizedDuration(400),
            delay: stagger(getOptimizedStagger(50)), // Reduced stagger
            autoplay: onScroll({ target: ".team-grid", start: "top 85%" }),
        });
    }

    /* ============================================================
         LEADERSHIP
      ============================================================ */
    animateOnScroll(".leadership-header", {
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
    });

    animateOnScroll(".image-hero", {
        opacity: [0, 1],
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
        delay: stagger(getOptimizedStagger(80)),
    });

    /* ============================================================
         PROGRAM GOALS
      ============================================================ */
    if (document.getElementById("goals")) {
        animateOnScroll("#goals flux\\:badge, #goals h1", {
            translateY: [15, 0],
            duration: getOptimizedDuration(500),
        });

        animateOnScroll("#goals .timeline-item", {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: getOptimizedDuration(500),
            delay: stagger(getOptimizedStagger(80)),
            autoplay: onScroll({ target: "#goals", start: "top 85%" }),
        });
    }

    /* ============================================================
         TIMELINE - Simplified for performance
      ============================================================ */
    if (document.querySelector("#waktu")) {
        animateOnScroll(".waktu-badge, .waktu-title", {
            translateY: [20, 0],
            duration: getOptimizedDuration(500),
            delay: stagger(getOptimizedStagger(100)),
        });

        // Timeline line - optimized
        animateOnScroll(".timeline-track-line", {
            scaleX: [0, 1],
            transformOrigin: "left",
            duration: getOptimizedDuration(800),
            easing: "ease-in-out",
        });

        // Simplified scale animation
        animateOnScroll("#waktu .timeline-item", {
            opacity: [0, 1],
            scale: [0.8, 1],
            duration: getOptimizedDuration(500),
            delay: stagger(getOptimizedStagger(100)),
        });

        animateOnScroll(".timeline-label", {
            opacity: [0, 1],
            translateY: [15, 0],
            duration: getOptimizedDuration(400),
            delay: stagger(getOptimizedStagger(60)),
        });
    }

    /* ============================================================
         RULES
      ============================================================ */
    if (document.querySelector("#rules")) {
        animateOnScroll("#rules .inline-flex, #rules h1, #rules p.text-xl", {
            translateY: [20, 0],
            duration: getOptimizedDuration(500),
            delay: stagger(getOptimizedStagger(100)),
        });

        animateOnScroll(".rule-card", {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: getOptimizedDuration(400),
            delay: stagger(getOptimizedStagger(60)),
        });
    }

    /* ============================================================
         SUPPORTING ACTIVITIES
      ============================================================ */
    animateOnScroll(".activities-header", {
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
    });

    // Reduced scale for better performance
    animateOnScroll(".activity-card", {
        opacity: [0, 1],
        translateY: [20, 0],
        duration: getOptimizedDuration(400),
        delay: stagger(getOptimizedStagger(60)),
    });

    /* ============================================================
         VISION & MISSION (PURPOSE)
      ============================================================ */
    animateOnScroll(".purpose-header", {
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
    });

    animateOnScroll(".purpose-card", {
        opacity: [0, 1],
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
        delay: stagger(getOptimizedStagger(120)),
    });

    animateOnScroll(".purpose-detail-card", {
        opacity: [0, 1],
        translateY: [15, 0],
        duration: getOptimizedDuration(400),
        delay: stagger(getOptimizedStagger(60)),
    });

    /* ============================================================
         CORE CURRICULUM
      ============================================================ */
    animateOnScroll(".curriculum-title", {
        translateY: [20, 0],
        duration: getOptimizedDuration(500),
    });

    animateOnScroll(".curriculum-subtitle", {
        translateY: [15, 0],
        duration: getOptimizedDuration(500),
        delay: 100,
    });

    animateOnScroll(".curriculum-card", {
        opacity: [0, 1],
        translateY: [20, 0],
        duration: getOptimizedDuration(400),
        delay: stagger(getOptimizedStagger(60)),
    });

    /* ============================================================
         CTA SECTION
      ============================================================ */
    if (document.querySelector("#cta")) {
        animateOnScroll(".cta-content", {
            opacity: [0, 1],
            translateX: [-40, 0],
            duration: getOptimizedDuration(600),
            easing: "ease-out",
        });

        animateOnScroll(".cta-images", {
            opacity: [0, 1],
            translateX: [40, 0],
            duration: getOptimizedDuration(600),
            delay: 200,
            easing: "ease-out",
        });
    }
};

// Initialize with performance check
const init = () => {
    // Add CSS variable for reduced motion
    if (prefersReducedMotion) {
        document.documentElement.style.setProperty(
            "--animation-duration",
            "0s",
        );
    }

    initAnimations();
};

// Start - use requestIdleCallback if available for better performance
if ("requestIdleCallback" in window) {
    requestIdleCallback(init);
} else {
    document.addEventListener("DOMContentLoaded", init);
}

// Livewire Compatibility - Optimized
document.addEventListener("livewire:init", () => {
    Livewire.hook("morph.updated", (el) => {
        if (prefersReducedMotion) return;

        if (
            el.el &&
            (el.el.querySelector(".team-card") ||
                el.el.classList.contains("team-card"))
        ) {
            // Simplified re-animation
            requestAnimationFrame(() => {
                animate(".team-card", {
                    opacity: [0.8, 1],
                    duration: getOptimizedDuration(300),
                    easing: "ease-out",
                });
            });
        }
    });
});
