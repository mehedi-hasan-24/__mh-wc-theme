const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    effect: 'cube',
    cubeEffect: {
        shadow: true, // Enable shadow
        slideShadows: true, // Enable slide shadows
        shadowOffset: 20, // Offset for the shadow
        shadowScale: 0.94, // Scale for the shadow
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },speed: 1200,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
  });

  console.log(swiper);
  