document.addEventListener("DOMContentLoaded", () => {
    const options = {
        root: null, // Use the viewport as the container
        rootMargin: "0px",
        threshold: 0.1, // 10% of the element is visible
    };

    const fadeInObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            } else {
                entry.target.classList.remove("visible"); // Remove the class when the element is not in the viewport
            }
        });
    }, options);

    const fadeIn = document.querySelectorAll(".animate");
    fadeIn.forEach((element) => {
        fadeInObserver.observe(element);
    });
});

const swiper = new Swiper(".swiper", {
    effect: "cards",
    grabCursor: false,
    initialSlide: 2,
    speed: 500,
    loop: false,
    rotate: true,
    mousewheel: {
        invert: false,
    },
});
