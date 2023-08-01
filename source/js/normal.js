const header = document.querySelector("#header");
const header_logo = document.querySelector("#hd_logo");
const header_logo_img = header_logo.querySelector("img");

const mainVisualSwiper = new Swiper('.main_visual-slider', {
  draggable: true,
  // autoplay: {
    // delay: 4000,
    // disableOnInteraction: false
  // },
  pagination: {
    el: ".main_visual-slider .swiper-pagination",
  },
  navigation: {
    nextEl: ".main_visual-slider .swiper-next",
    prevEl: ".main_visual-slider .swiper-prev",
  }
});

const headerStyle = (mode) => {
  if(mode === 'black') {
    header.classList.add('black');
    header_logo_img.setAttribute('src','/source/img/logo.png');
  } else {
    header.classList.remove('black');
    header_logo_img.setAttribute('src','/source/img/logo-white.png');
  }
}

$(document).ready(function(){
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
    }
  });
});