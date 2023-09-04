$(function(){
    $('.card-center').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: true,
              arrows: false,
            }
          },
          {
            breakpoint: 480,
            settings: {
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: true,
              arrows: false,
            }
          }
        ]
      });
})