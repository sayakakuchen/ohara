
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.page-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('.p-header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top  - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');

    return false;
  });

  var header = $('.p-header').outerHeight();
  var urlHash = location.hash;
  if(urlHash) {
      $('body,html').stop().scrollTop(0);
      setTimeout(function(){
          var target = $(urlHash);
          var position = target.offset().top - header;
          $('body,html').stop().animate({scrollTop:position}, 500);
      }, 100);
  }

  $('.js-column-slider').slick({
    slidesToShow:2,
    dots:false,
    arrow:true,
    variableWidth: true,
    // autoplay:true,
    prevArrow: '<div class="slide-arrow prev-arrow"></div>',
    nextArrow: '<div class="slide-arrow next-arrow"></div>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1, 
          variableWidth: false,
        }
      }
    ]
  });

  if (window.matchMedia('(max-width:767px)').matches) {
    $('.js-about-slider').slick({
      slidesToShow:1,
      dots:false,
      arrows:true,
      variableWidth: true,
      infinite: false,
      // autoplay:true,
      prevArrow: '<div class="slide-arrow prev-arrow"></div>',
      nextArrow: '<div class="slide-arrow next-arrow"></div>',
    });
  }

  $('.js-mv-modal').click(function(){
    let index = $(this).index();
    $('.p-mvModal').fadeIn();
    $('html').addClass('is-fixed');
    $('.p-mvModal__content').eq(index - 1).fadeIn();
  });

  $('.js-mv-modal-close').click(function(){
    $('.p-mvModal').fadeOut();
    $('html').removeClass('is-fixed');
    $('.p-mvModal__content').fadeOut();
  });

  $('.js-lineup').click(function(){
    $(this).toggleClass('is-active');
    $(this).find('.p-lineup__lists').slideToggle();
  });
  
  $('.js-case-slider')
  .on("init", function (event, slick) {
    $(this).append('<div class="p-viewCase__num"><span class="p-viewCase__now"></span><span class="p-viewCase__all"></span></div>');
    $(".p-viewCase__now").text(slick.currentSlide + 1); 
    $(".p-viewCase__all").text(slick.slideCount); 
  })
  .slick({
    slidesToShow:1,
    dots:false,
    arrows:false,
    autoplay:true,
  })
  .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    $(".p-viewCase__now").text(nextSlide + 1);
  });

  $('.js-studySlide-slider').slick({
    variableWidth: true,
    slidesToShow:1,
    cssEase: "linear",
    pauseOnFocus: false,
    pauseOnHover: false,
    swipe: false, 
    dots:false,
    arrows:false,
    autoplay:true,
    speed: 10000,
  });

  $('.js-drawer-button').click(function(){
    $(this).toggleClass('is-active');
    $(this).next().slideToggle();
  });

  $('.js-hamburger').click(function(){
    var isExpanded = $(this).attr('aria-expanded') === 'true';
    $(this).attr('aria-expanded', !isExpanded);
    $('.p-drawer').attr('aria-hidden', isExpanded);
    $(this).toggleClass('is-active');
    $('.p-drawer').fadeToggle();
    $('html').toggleClass('is-fixed');
  });

  $('.js-pickup-slider').slick({
    slidesToShow:1,
    dots:true,
    arrow:true,
    autoplay:true,
    dotsClass: 'slider-dots',
    responsive: [
      {
        breakpoint: 767,
        settings: {
        slidesToShow: 1, 
        arrows:false,
        }
      }
    ]
  });

  

  if (document.cookie.indexOf('visited=yes') === -1) {
    document.cookie = 'visited=yes path=/';
    $('.js-column-modal-close').click(function(){
      $('.l-column-modal').fadeOut();
    });
  } else { 
    $('.l-column-modal').hide();
  }
  


});
