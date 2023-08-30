'use strict';

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
  spaceBetween: 10,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  breakpoints: {
    1291: {
      spaceBetween: 100,
    },
    768: {
      spaceBetween: 50,
    },
  },
});

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

const scrollHeader = (scrollValue) => {
  if(screen.width < 1024) {
    $("#header").addClass("scr_black");
  }

  if($("#header").hasClass("scr_black")){
    if ( scrollValue > 30 ) {
      $(".scr_black").addClass("black2");
      header_logo_img.setAttribute('src','/ktla-dev/source/img/logo.png');
    } else {
      $(".scr_black").removeClass("black2");
      header_logo_img.setAttribute('src','/ktla-dev/source/img/logo-white.png');
    }
  }

  if($("#header").hasClass("scr_black2")){
    if ( scrollValue > 30 ) {
      $(".scr_black2").addClass("black2");
      header_logo_img.setAttribute('src','/ktla-dev/source/img/logo.png');
    } else {
      $(".scr_black2").removeClass("black2");
      header_logo_img.setAttribute('src','/ktla-dev/source/img/logo.png');
    }
  }
}

$(document).ready(function(){
  let scrollValue = $(document).scrollTop();

  $(".hd_mb-btn.login").on('click', function(){
    $("#hd_mb_ov").toggleClass("on");
  })

  // [plugin - FullPage] Main Scroll Effect
  $('#main').fullpage({
    anchors: ['page1', 'page2', 'page3', 'page4'],
    autoScrolling:true,
    navigation: false,
    showActiveTooltip: false,
    responsiveWidth: 1024,
    afterLoad: function(anchorLink, index){
      if(screen.width > 1023) {
        if (index == 2) {
          headerStyle('black');
        } else {
          headerStyle();
        }

        //메인 퀵메뉴 오버 마우스 효과(초기화)
        $(".main_quick_list-item").eq(0).addClass('act').siblings().removeClass('act');
      }
    }
  });

  const hd = document.getElementById('header');
  const hdMobileMenuBtn = document.getElementById('mo_menu_btn');
  const mobileMenu = document.getElementById('mo_menu_ct');
  const hdLogo = document.querySelector('#hd_logo img');

  //모바일 메뉴 토글
  hdMobileMenuBtn.addEventListener('click', function() {
    if( hdMobileMenuBtn.classList.contains('act') ) {
      hdMobileMenuBtn.classList.remove('act');
      if ( scrollValue > 30 ) {
        hd.classList.add('black2');
        hdLogo.setAttribute('src', '/ktla-dev/source/img/logo.png');
      } else {
        hd.classList.remove('black2');
        hdLogo.setAttribute('src', '/ktla-dev/source/img/logo-white.png');
      }
      mobileMenu.classList.remove('act');
    } else {
      hdMobileMenuBtn.classList.add('act');
      hd.classList.remove('black2');
      hdLogo.setAttribute('src', '/ktla-dev/source/img/logo.png');
      mobileMenu.classList.add('act');
    }
  });

  $("#mo_hd_gnb .depth1 > li > span").on('click', function() {
    const mobileMenu_depth2 = $(this).siblings('.depth2');

    mobileMenu_depth2.slideToggle(200).closest('li').siblings('li').find('.depth2').slideUp(200);
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