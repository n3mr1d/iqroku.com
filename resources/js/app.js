import { animate, stagger, onScroll, createTimeline, random } from "animejs";
import AOS from "aos";
import "aos/dist/aos.css";

document.addEventListener("DOMContentLoaded", () => {
    /* ============================================================
       INITIALIZATION
    ============================================================ */
    AOS.init({
        duration: 800,
        easing: "ease-in-out",
        once: true,
        offset: 100,
    });

    /* ============================================================
       HERO SECTION ANIMATIONS
    ============================================================ */
    const heroSection = document.getElementById('hero-section');
    if (heroSection) {
        // Entrance: Badge, Title, Desc, Buttons
        animate('.hero-element', {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 1000,
            delay: stagger(200, { start: 300 }),
            easing: 'easeOutCubic'
        });

        // Entrance: Hero Image
        animate('.hero-image-container', {
            opacity: [0, 1],
            translateX: [50, 0],
            duration: 1200,
            delay: 800,
            easing: 'easeOutCubic'
        });

        // Continuous: Background Blobs Pulse
        animate(".hero-blob", {
            scale: [1, 1.2],
            opacity: [0.1, 0.4],
            direction: 'alternate',
            loop: true,
            duration: 4000,
            delay: stagger(1000),
            easing: 'easeInOutQuad'
        });
    }

    /* ============================================================
       LEADERSHIP SECTION ANIMATIONS
    ============================================================ */
    const leadershipHeader = document.querySelector('.leadership-header');
    if (leadershipHeader) {
        // Header Reveal
        animate('.leadership-header', {
            opacity: [0, 1],
            translateY: [40, 0],
            duration: 1000,
            easing: 'easeOutCubic',
            autoplay: onScroll({
                target: '.leadership-header',
                start: 'top 85%',
            })
        });

        // Cards Staggered Entrance
        animate('.image-hero', {
            opacity: [0, 1],
            translateY: [50, 0],
            scale: [0.9, 1],
            duration: 800,
            delay: stagger(150),
            easing: 'easeOutCubic',
            autoplay: onScroll({
                target: '.image-hero',
                start: 'top 85%',
            })
        });
    }

    /* ============================================================
       PROGRAM GOALS (Timeline)
    ============================================================ */
    if (document.querySelector('.timeline-progress')) {
        // Timeline Progress Line
        animate(".timeline-progress", {
            scaleX: [0, 1],
            transformOrigin: "left center",
            ease: "linear",
            autoplay: onScroll({
                target: ".timeline-progress",
                sync: true,
            }),
        });

        // Timeline Items
        animate(".timeline-item", {
            opacity: [0, 1],
            translateY: [40, 0],
            scale: [0.9, 1],
            delay: stagger(120),
            ease: "out(3)",
            autoplay: onScroll({
                target: ".timeline-item",
                start: "top 85%",
                end: "bottom 60%",
                sync: true,
            }),
        });
    }

    /* ============================================================
       KURIKULUM INTI (Curriculum)
    ============================================================ */
    const curriculumTitle = document.querySelector('.curriculum-title');
    if (curriculumTitle) {
        // Header Reveal
        createTimeline({
            autoplay: onScroll({
                target: '.curriculum-title',
                start: "top 85%",
            })
        })
            .add({
                targets: '.curriculum-title',
                translateY: [-30, 0],
                opacity: [0, 1],
                duration: 1000,
                easing: 'easeOutExpo'
            })
            .add({
                targets: '.curriculum-subtitle',
                translateY: [20, 0],
                opacity: [0, 1],
                duration: 800,
                easing: 'easeOutQuad'
            }, '-=600');

        // Cards Entrance
        animate(".curriculum-card", {
            opacity: [0, 1],
            translateY: [40, 0],
            scale: [0.95, 1],
            delay: stagger(120),
            ease: "out(3)",
            autoplay: onScroll({
                target: ".curriculum-card",
                start: "top 85%",
            })
        });

        // Card Hover Effect
        document.querySelectorAll('.curriculum-card').forEach((card) => {
            card.addEventListener('mouseenter', function () {
                animate(this.querySelector('.curriculum-icon'), {
                    scale: [1, 1.2, 1],
                    rotate: [-10, 10, 0],
                    duration: 600,
                    easing: 'easeInOutQuad'
                });
            });
        });
    }

    /* ============================================================
       RULES & REGULATIONS SECTION
    ============================================================ */
    if (document.querySelector('.rule-title')) {
        // Blobs Random Movement
        animate('.rules-section .blob', {
            translateX: () => random(-50, 50),
            translateY: () => random(-50, 50),
            scale: () => random(0.8, 1.2),
            duration: 8000,
            easing: 'easeInOutSine',
            direction: 'alternate',
            loop: true
        });

        // Header and Cards Entrance
        animate([".rule-badge", ".rule-title", ".rule-card"], {
            opacity: [0, 1],
            translateY: [30, 0],
            delay: stagger(120),
            ease: "easeOutCubic",
            autoplay: onScroll({
                target: ".rule-title",
                start: "top 80%",
            })
        });

        // Hover Effect for Numbers
        document.querySelectorAll('.rule-card').forEach(card => {
            card.addEventListener('mouseenter', function () {
                const badge = this.querySelector('.absolute.w-12');
                if (badge) {
                    animate(badge, {
                        scale: [1, 1.15, 1],
                        duration: 400,
                        easing: 'easeInOutQuad'
                    });
                }
            });
        });
    }

    /* ============================================================
       GENERAL UTILITIES
    ============================================================ */
    // Pulse animation for CTA buttons (continuous)
    if (document.querySelector('.cta-button')) {
        animate(".cta-button", {
            scale: [1, 1.05, 1],
            duration: 2000,
            loop: true,
            easing: 'easeInOutQuad'
        });
    }
});
