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
          <button type="button" class="swiper-toggle stop">
            <img src="/ktla-dev/source/img/stop-white.svg" alt="">
          </button>
        </div>
        <button type="button" class="swiper-arrow swiper-prev"></button>
        <button type="button" class="swiper-arrow swiper-next"></button>
      </div>
    </div>
  </div>
  <div class="section main_section02" data-anchor="page2">
    <div class="sec_in">
      <div class="main_news">
        <div class="wrapper">
          <div class="match-height inner">
            <div class="main_news_lt">
              <div class="main_sec-title">
                <p class="big-title"><span>신대도협의</span> 새로운 <br/>소식을 확인<span>해보세요.</span></p>
                <p class="small-title">한국신학도서관협의회는 신학계 도서관의 발전과 <br/>회원교 유대 강화 및 협력증진을 도모하고 있습니다.</p>
              </div>
              <div>
                <a href="" class="main_news-more">협회 소개</a>
                <a href="" class="main_news-more">공지사항</a>
              </div>
            </div>
            <div class="main_news_rt">
              <div class="i-col-2 main_news_list">
                <div class="main_news_list-item">
                  <a href="" class="main_news_list-box">
                    <p class="label">공지사항</p>
                    <p class="text_row2 subj">회원교 간 방학 중 일반열람실 상호이용 실시 안내</p>
                    <p class="text_row2 cont">공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다.</p>
                    <p class="date">2023-05-26</p>
                  </a>
                </div>
                <div class="main_news_list-item">
                  <a href="" class="main_news_list-box">
                    <p class="label">공지사항</p>
                    <p class="text_row2 subj">2023년 한국신학대학도서관협의회 공로상 추천의 건</p>
                    <p class="text_row2 cont">공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다.</p>
                    <p class="date">2023-04-18</p>
                  </a>
                </div>
                <div class="main_news_list-item">
                  <a href="" class="main_news_list-box">
                    <p class="label">공지사항</p>
                    <p class="text_row2 subj">2023년도 제1차 임원회의 결과 안내</p>
                    <p class="text_row2 cont">공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다. 공지사항 내용이 미리보기로 일부 표기됩니다.</p>
                    <p class="date">2023-04-18</p>
                  </a>
                </div>
                <div class="main_news_list-item noti-zone">
                  <a href="" class="main_news_list-box">
                    <img src="/ktla-dev/source/img/t-main-noti.jpg" alt="30주년 기념 논문집 '신학과 도서관' 한국신학도서관협의회 30년사 PDF 보기">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section main_section03" data-anchor="page3">
    <div class="sec_in">
      <div class="main_quick">
        <div class="wrapper">
          <div class="main_sec-title">
            <p class="big-title"><span>신대도협은</span> 다양한 활동을 통해 <br/>신학계 도서관의 위상<span>을 높입니다.</span></p>
          </div>
          <div class="match-height main_quick_list">
            <div class="main_quick_list-item act">
              <p class="title">세미나 안내</p>
              <p class="expl">온라인을 통해 세미나 참여 등록 및 기타 확인이 가능합니다.</p>
              <div class="quick-btns">
                <a href="" class="quick-btn">온라인 등록</a>
                <a href="" class="quick-btn">등록 확인/수정</a>
                <a href="" class="quick-btn">교육이수 확인증</a>
              </div>
            </div>
            <div class="main_quick_list-item">
              <p class="title">회원교 소개</p>
              <p class="expl">한국신학도서관협의회와 함께하는 회원교를 소개합니다.</p>
              <div class="quick-btns">
                <a href="" class="quick-btn">회원교 명단</a>
                <a href="" class="quick-btn">회원교 소식</a>
                <a href="" class="quick-btn">신도협 편람</a>
              </div>
            </div>
            <div class="main_quick_list-item">
              <p class="title">커뮤니티</p>
              <p class="expl">한국신학도서관협의회의 소통 공간입니다.<br/><br/></p>
              <div class="quick-btns">
                <a href="" class="quick-btn">활동 사진</a>
                <a href="" class="quick-btn">자료실</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="main_footer" class="section fp-auto-height" data-anchor="page5">
    footer
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');