<script type="text/javascript">
var $ = window.jQuery;
</script>
<script src="https://min30327.github.io/luxy.js/dist/js/luxy.js"></script>
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

<script charset="utf-8">
var isMobile = /iPhone|iPad|Android/i.test(navigator.userAgent);
if (!isMobile) {
    luxy.init({
        wrapper: '#luxy',
        wrapperSpeed: 0.065,
    });
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;

    function letBodyScroll(bool) {
        if (bool) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = 'auto';
        }
    }

    const targetNode = document.querySelector('.navbar_menu-button');

    // Check if targetNode exists before attempting to observe
    if (targetNode) {
        const config = {
            attributes: true,
            childList: false,
            subtree: false
        };

        const callback = function(mutationsList, observer) {
            for (let i = 0; i < mutationsList.length; i++) {
                if (mutationsList[i].type === 'attributes') {
                    const menuIsOpen = mutationsList[i].target.classList.contains('w--open');
                    letBodyScroll(menuIsOpen);
                }
            }
        };

        const observer = new MutationObserver(callback);
        observer.observe(targetNode, config);
    }
});
</script>

<script>
let typeSplit = new SplitType('[animate]', {
    types: 'lines, words, chars',
    tagName: 'span'
})
gsap.from('[animate]', {
    y: '100%',
    opacity: 1,
    duration: 0.5,
    ease: 'circ.out',
    stagger: 0.25,
    scrollTrigger: {
        trigger: '[animate]',
        start: 'top center',
    }
})
</script>
<script>
window.addEventListener("DOMContentLoaded", (event) => {
    // Split text into spans
    let typeSplit = new SplitType("[text-split]", {
        types: "words, chars",
        tagName: "span"
    });
    // Link timelines to scroll position
    function createScrollTrigger(triggerElement, timeline) {
        // Reset tl when scroll out of view past bottom of screen
        ScrollTrigger.create({
            trigger: triggerElement,
            start: "top bottom",
            onLeaveBack: () => {
                timeline.progress(0);
                timeline.pause();
            }
        });
        // Play tl when scrolled into view (60% from top of screen)
        ScrollTrigger.create({
            trigger: triggerElement,
            start: "top 60%",
            onEnter: () => timeline.play()
        });
    }
    $("[words-slide-up]").each(function(index) {
        let tl = gsap.timeline({
            paused: true
        });
        tl.from($(this).find(".word"), {
            opacity: 0,
            yPercent: 100,
            duration: 0.5,
            ease: "back.out(2)",
            stagger: {
                amount: 0.5
            }
        });
        createScrollTrigger($(this), tl);
    });
    $("[words-rotate-in]").each(function(index) {
        let tl = gsap.timeline({
            paused: true
        });
        tl.set($(this).find(".word"), {
            transformPerspective: 1000
        });
        tl.from($(this).find(".word"), {
            rotationX: -90,
            duration: 0.6,
            ease: "power2.out",
            stagger: {
                amount: 0.6
            }
        });
        createScrollTrigger($(this), tl);
    });
    $("[words-slide-from-right]").each(function(index) {
        let tl = gsap.timeline({
            paused: true
        });
        tl.from($(this).find(".word"), {
            opacity: 0,
            x: "1em",
            duration: 0.6,
            ease: "power2.out",
            stagger: {
                amount: 0.2
            }
        });
        createScrollTrigger($(this), tl);
    });
    $("[letters-slide-up]").each(function(index) {
        let tl = gsap.timeline({
            paused: true
        });
        tl.from($(this).find(".char"), {
            yPercent: 100,
            duration: 0.2,
            ease: "power1.out",
            stagger: {
                amount: 0.6
            }
        });
        createScrollTrigger($(this), tl);
    });
    $("[letters-slide-down]").each(function(index) {
        let tl = gsap.timeline({
            paused: true
        });
        tl.from($(this).find(".char"), {
            yPercent: -120,
            duration: 0.3,
            ease: "power1.out",
            stagger: {
                amount: 0.7
            }
        });
        createScrollTrigger($(this), tl);
    });
    $("[letters-fade-in]").each(function(index) {
        let tl = gsap.timeline({
            paused: true
        });
        tl.from($(this).find(".char"), {
            wait: 1,
            opacity: 0,
            duration: 0.2,
            ease: "power1.out",
            stagger: {
                amount: 0.8
            }
        });
        createScrollTrigger($(this), tl);
    });
    $("[letters-fade-in-random]").each(function(index) {
        let tl = gsap.timeline({
            paused: true
        });
        tl.from($(this).find(".char"), {
            opacity: 0,
            duration: 0.05,
            ease: "power1.out",
            stagger: {
                amount: 0.4,
                from: "random"
            }
        });
        createScrollTrigger($(this), tl);
    });
    $("[scrub-each-word]").each(function(index) {
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: $(this),
                start: "top 80%",
                end: "top center",
                scrub: true
            }
        });

        tl.from($(this).find(".word"), {
            opacity: 0.2,
            duration: 0.2,
            ease: "power1.out",
            stagger: {
                each: 0.4
            }
        });
    });
    // Avoid flash of unstyled content
    gsap.set("[text-split]", {
        opacity: 1
    });
});
</script>