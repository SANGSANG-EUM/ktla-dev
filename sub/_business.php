<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
?>

<div id="business" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'introduce', 'business'); ?>

  <div class="sub_contents">
    <div class="sub_title_box">
      <div class="container">
        <div class="wrapper">
          <p class="sub_title">
            한국신학대학도서관협의회에서 목표하는 <br>
            <span class="bold">주요사업</span>을 소개합니다.
          </p>
        </div>
      </div>
    </div>
    <div class="business-major">
      <div class="container">
        <div class="wrapper">
          <div id="business-major-ct" class="inner">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
const businessMajorContainer = document.querySelector("#business-major-ct");
const businessMajorList = [
  "신학도서관 상호간의 문헌, 자료의 교환, 상호대차의 협력",
  "신학도서관 상호의 친목",
  "신학도서관의 관리 운영 기술에 관한 조사 연구",
  "신학 서지 활동의 협력",
  "신학도서관 직원의 자질 향상과 지위 향상",
  "신학도서관의 지위 향상",
  "양서의 선정 추천 및 보급",
  "해외봉사단 운영으로 해외 기관과의 상호교류 및 선교 활동",
  "연구회, 강습회, 전시회 등의 개최",
  "국내외 관계 단체와의 연락 및 협조",
  "기타 본 회 목적 달성에 필요한 사업을 추진"
]

window.addEventListener("load", () => {
  businessMajorList.map((data, index) => {
    let num = index < 9? '0'+(index + 1) : index + 1;
    businessMajorContainer.innerHTML += `<div class="business-major-list"><p class="num">${num}</p><p class="text">${data}</p></div>`;
  })
  $(".business-major-list").matchHeight();
});
</script>