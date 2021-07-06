const swiper = new Swiper('.groupslide', {
    // Default parameters
    slidesPerView: 1,
    spaceBetween: 100,
    // Responsive breakpoints
    navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 100
        },
        // when window width is >= 480px
        648: {
          slidesPerView:2,
          spaceBetween: 10
        },
        // when window width is >= 640px
        768: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        1536: {
            slidesPerView: 3,
            spaceBetween: 20
          }
          
      }
   
  })