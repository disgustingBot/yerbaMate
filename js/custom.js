d=document;w=window;c=console;



function Parallax(className) {
  let elements = [];
  let screenHeight, animationId, isAnimating;

  window.requestAnimationFrame =
    window.requestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(f) {
      return setTimeout(f, 1000 / 60);
    };

  const setup = () => {
    // Cleanup before setting up new requestAnimationFrame.
    cancelAnimationFrame(animationId);

    const parallaxElements = Array.from(
      document.querySelectorAll(`.${className}`)
    );

    if (!parallaxElements.length) {
      console.error("No parallax elements found.");
      return;
    }

    elements = parallaxElements.map(el => {
      const { top, height } = el.getBoundingClientRect();
      const speed = Number(el.getAttribute("data-parallax"));
      return {
        el,
        originalTop: top + window.scrollY,
        height,
        speed
      };
    });
    screenHeight = window.innerHeight;

    animate();
  };

  const animate = () => {c.log("animating");
    if (!isAnimating) {
      isAnimating = true;
      elements.forEach(({ el, originalTop, height, speed }) => {
        // c.log();
        // document.querySelectorAll(`.${className}`).forEach(e => {observer.observe(e);})

        const { top: newTop } = el.getBoundingClientRect();
        let translate;
        if (screenHeight >= originalTop) {
          translate = Math.floor((window.scrollY / speed) * -1);
        } else {
          translate = Math.floor((newTop - height / 2) / speed);
        }
        el.style.transform = `translate3d(0, ${translate}px, 0)`;
        // c.log(translate);
      });
      isAnimating = false;
      animationId = requestAnimationFrame(animate);
    }
  };







  const cancelAnimationFrame =
    window.cancelAnimationFrame ||
    window.mozCancelAnimationFrame ||
    clearTimeout;

  const cleanup = () => {
    cancelAnimationFrame(animationId);
    window.removeEventListener("resize", setup);
  };

  const init = () => {
    setup();
    window.addEventListener("resize", setup);
  };

  return {
    init,
    cleanup
  };
}





const { init } = new Parallax("parallax");
init();
