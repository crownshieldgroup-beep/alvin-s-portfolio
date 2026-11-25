import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

window.Alpine = Alpine;
Alpine.start();

gsap.registerPlugin(ScrollTrigger);

const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
document.documentElement.classList.remove('no-js');

if (reduced) {
    document.documentElement.classList.add('reduced-motion');
} else {
    const lenis = new Lenis({ duration: 1.1, smoothWheel: true });
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);

    // Hero headline: lines rise in sequence.
    gsap.from('[data-hero] > *', {
        y: 40,
        opacity: 0,
        duration: 1.1,
        ease: 'power3.out',
        stagger: 0.12,
        delay: 0.1,
    });

    // Generic scroll reveals, staggered within a group.
    document.querySelectorAll('[data-reveal-group]').forEach((group) => {
        gsap.to(group.querySelectorAll('[data-reveal]'), {
            opacity: 1,
            y: 0,
            duration: 0.9,
            ease: 'power3.out',
            stagger: 0.1,
            scrollTrigger: { trigger: group, start: 'top 82%' },
        });
    });

    document.querySelectorAll('[data-reveal]:not([data-reveal-group] [data-reveal])').forEach((el) => {
        gsap.to(el, {
            opacity: 1,
            y: 0,
            duration: 0.9,
            ease: 'power3.out',
            scrollTrigger: { trigger: el, start: 'top 85%' },
        });
    });

    // Subtle parallax on tagged images.
    document.querySelectorAll('[data-parallax]').forEach((el) => {
        gsap.fromTo(el, { yPercent: -6 }, {
            yPercent: 6,
            ease: 'none',
            scrollTrigger: { trigger: el.parentElement, scrub: true },
        });
    });

    // Count up stats.
    document.querySelectorAll('[data-count]').forEach((el) => {
        const end = Number(el.dataset.count);
        const obj = { v: 0 };
        gsap.to(obj, {
            v: end,
            duration: 1.6,
            ease: 'power2.out',
            scrollTrigger: { trigger: el, start: 'top 90%' },
            onUpdate: () => (el.textContent = Math.round(obj.v)),
        });
    });
}
