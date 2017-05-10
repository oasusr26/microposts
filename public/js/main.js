/*global $*/
$(function() {
  $('.slider').slick({
    autoplaySpeed: 3000,
    speed: 1300,
    arrows: true,
    infinite: true,
    dots: true,
    slidesToShow: 1,
    centerMode: true, //要素を中央寄せ
    centerPadding:'150px', //両サイドの見えている部分のサイズ
    autoplay: true, //自動再生
    swipe: true,
    responsive: [{
      breakpoint: 480,
        settings: {
          centerMode: false,
        }
    }]
  });
});
