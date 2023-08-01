'use strict';

const header = document.querySelector("#header");
const header_logo = document.querySelector("#hd_logo");
const header_logo_img = header_logo.querySelector("img");

// [Plugin - swiper] Main Visual Slider
const mainVisual = ".main_visual-slider";
const mainVisualSwiper = new Swiper(mainVisual, {
  draggable: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".main_visual-slider .swiper-pagination",
  },
  navigation: {
    nextEl: ".main_visual-slider .swiper-next",
    prevEl: ".main_visual-slider .swiper-prev",
  }
});

// Header Color Style
const headerStyle = (mode) => {
  if(mode === 'black') {
    header.classList.add('black');
    header_logo_img.setAttribute('src','/ktla-dev/source/img/logo.png');
  } else {
    header.classList.remove('black');
    header_logo_img.setAttribute('src','/ktla-dev/source/img/logo-white.png');
  }
}

$(document).ready(function(){
  // [plugin - FullPage] Main Scroll Effect
  $('#main').fullpage({
    anchors: ['page1', 'page2', 'page3', 'page4'],
    autoScrolling:true,
    navigation: false,
    showActiveTooltip: false,
    //navigationTooltips: ['','','',''],
    //responsiveWidth: 1291,
    afterLoad: function(anchorLink, index){
      if (index == 2) {
        headerStyle('black');
      } else {
        headerStyle();
      }

      //메인 퀵메뉴 오버 마우스 효과(초기화)
      $(".main_quick_list-item").eq(0).addClass('act').siblings().removeClass('act');
    }
  });

  //메인 비주얼 정지/시작
  $(mainVisual).on("click", ".swiper-toggle", function(){
    if($(this).hasClass('stop')){
      $(this).addClass('play').removeClass('stop').find('img').attr('src','/ktla-dev/source/img/play-white.svg');
      mainVisualSwiper.autoplay.stop();
    } else {
      $(this).addClass('stop').removeClass('play').find('img').attr('src','/ktla-dev/source/img/stop-white.svg');
      mainVisualSwiper.autoplay.start();
    }
  });

  //메인 퀵메뉴 오버 마우스 효과
  $(".main_quick_list-item").on('mouseover', function(){
    $(this).addClass('act').siblings().removeClass('act');
  });
});