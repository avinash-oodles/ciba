window.addEventListener("load", () => {
    gsap.to(".common-section", {
      opacity: 1,
      y: 0,
      duration: 1,
      delay: 0.3,
      ease: "power4.out"
    });
    gsap.to([".hero-card1", ".hero-card2"], {
        y: 0,
        duration: 0.6,
        ease: "power2.out",
        delay: 0.8 
      });
  });


  document.addEventListener("DOMContentLoaded", () => {
    // Existing feature-card-bottom animation
    const featureCards = document.querySelectorAll(".feature-card-bottom");
  
    featureCards.forEach(card => {
      const img = card.querySelector(".feature-img-one");
  
      card.addEventListener("mouseenter", () => {
        gsap.to(img, {
          rotate: -4,
          duration: 0.8,
          ease: "power2.inOut"
        });
      });
  
      card.addEventListener("mouseleave", () => {
        gsap.to(img, {
          rotate: 0,
          duration: 0.8,
          ease: "power2.inOut"
        });
      });
    });
  
    // ✅ New GSAP animation for feature-card-third
    const thirdCards = document.querySelectorAll(".feature-card-third");
  
    thirdCards.forEach(card => {
      const img = card.querySelector(".third-card-img");
      const icon = card.querySelector(".third-card-icon");
  
      card.addEventListener("mouseenter", () => {
        gsap.to(img, {
          y: -5,
          duration: 0.4,
          ease: "power2.out"
        });
        gsap.to(icon, {
          rotate: -12,
          duration: 0.4,
          ease: "power2.out"
        });
      });
  
      card.addEventListener("mouseleave", () => {
        gsap.to(img, {
          y: 0,
          duration: 0.4,
          ease: "power2.out"
        });
        gsap.to(icon, {
          rotate: 0,
          duration: 0.4,
          ease: "power2.out"
        });
      });
    });
  });
  
