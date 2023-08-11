'use strict';

const header = document.querySelector("#header");
const header_logo = document.querySelector("#hd_logo");
const header_logo_img = header_logo.querySelector("img");

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
    clickable: true
  },
  navigation: {
    nextEl: ".main_visual-slider .swiper-next",
    prevEl: ".main_visual-slider .swiper-prev",
  }
});

// [Plugin - swiper] Main Visual Slider
const partners = ".partners-slider";
const partnersSwiper = new Swiper(partners, {
  draggable: true,
  slidesPerView: "auto",
  spaceBetween: 100,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  }
});

const scrollHeader = (scrollValue) => {
  if ( scrollValue > 30 ) {
    $(".scr_black").addClass("black2");
    header_logo_img.setAttribute('src','/ktla-dev/source/img/logo.png');
  } else {
    $(".scr_black").removeClass("black2");
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

  let scrollValue = $(document).scrollTop();
  scrollHeader(scrollValue);

  $(window).scroll(function(){
    scrollValue = $(document).scrollTop(); 
    scrollHeader(scrollValue);
  });

  //신대도협소개 > 연혁/세미나현황 탭
  const subTab = ".sub-tab-btn";
  const subTabCt = ".sub-tab-ct";
  $(subTab).on('click', function(){
    let subTabIndex = $(this).index();

    $(this).addClass('act').siblings(subTab).removeClass('act');
    $(subTabCt).eq(subTabIndex).fadeIn(200).siblings(subTabCt).hide();
  })

  //신대도협소개 > 세미나현황 아코디언
  let seminarBtn = ".seminar-box .year";
  let seminarBox = "";
  let seminarCt = "";
  
  $(seminarBtn).on('click', function(){
    seminarBox = $(this).closest(".seminar-box");
    seminarCt = $(this).siblings(".seminar-group");

    seminarBox.addClass('act').siblings().removeClass('act');
    seminarCt.slideDown(200);
    seminarBox.siblings().find(".seminar-group").slideUp(200)
  })
});