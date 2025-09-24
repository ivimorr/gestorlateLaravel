document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.mySwiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    spaceBetween: 20,
    slidesPerView: 'auto',   // Cambiado a 'auto'
    coverflowEffect: {
      rotate: 50,
      stretch: -20,           // Ajuste para acercar slides
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      // Opcionalmente puedes dejarlo vacío o ajustarlo si usas 'auto'
    }
  });
});
