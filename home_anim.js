const animation_1 = gsap.utils.toArray('.ani_1');
animation_1.forEach((box, i) => {
    var perc = 50;
    if (i % 2 == 0) {
        perc = 50;
    } else {
        perc = -50;
    };
    // ScrollTrigger.create({
    //     start: "+=133 65%",
    //     end: "+=200 40%",
    //     trigger: box,
    //     animation: anim,
    //     toggleActions: 'play none none reverse',
    //     // markers: true,
    //     once: false,
    // });
    gsap.set(box.children, {
        opacity: 0,
        xPercent: perc,
    })
    var fade_in = gsap.timeline({
        scrollTrigger: {
            trigger: box,
            start: "+=133 95%",
            end: "+=200 55%",
            scrub: 0.1,
        }
    })
        .to(box.children, {
            opacity: 1,
            stagger: 0.2,
            xPercent: 0,
            duration: 1,
        })
});

