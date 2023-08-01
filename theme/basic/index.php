<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div id="main" class="contents_wrap">
  <div class="section main_section01" data-anchor="page1">
    <div class="sec_in">
      <div class="main_visual-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide main_visual-item item1">
            <div class="container main_visual_ct">
              <div class="wrapper">
                <div class="inner">
                  <p class="small-txt">Korean Theological University and Seminary Library Association</p>
                  <p class="big-txt">함께 이어온 지혜와 미래, <br/><strong>한국신학대학도서관협의회</strong></p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide main_visual-item item2">
            <div class="container main_visual_ct">
              <div class="wrapper">
                <div class="inner">
                  <p class="small-txt">Korean Theological University and Seminary Library Association</p>
                  <p class="big-txt">함께 이어온 지혜와 미래, <br/><strong>한국신학대학도서관협의회</strong></p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide main_visual-item item3">
            <div class="container main_visual_ct">
              <div class="wrapper">
                <div class="inner">
                  <p class="small-txt">Korean Theological University and Seminary Library Association</p>
                  <p class="big-txt">함께 이어온 지혜와 미래, <br/><strong>한국신학대학도서관협의회</strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-control">
          <div class="swiper-pagination"></div>
          <button type="button" style="width: 30px; height: 30px;"><img src="/source/img/stop-white.svg" alt="" style="width: 20px"></button>
        </div>
        <button type="button" class="swiper-arrow swiper-prev"></button>
        <button type="button" class="swiper-arrow swiper-next"></button>
      </div>
    </div>
  </div>
  <div class="section main_section02" data-anchor="page2">
    <div class="sec_in">
      2
      <button type="button" class="swiper-stop"><img src="/source/img/play-white.svg" alt=""></button>
    </div>
  </div>
  <div class="section main_section03" data-anchor="page3">
    <div class="sec_in">
      3
    </div>
  </div>
  <div id="main_footer" class="section fp-auto-height" data-anchor="page5">
    footer
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');