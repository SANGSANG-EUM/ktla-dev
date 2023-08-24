<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입결과 시작 { -->
<div id="reg_result" class="register">
  <div class="container">
    <div class="wrapper">
      <div class="mb_default_ct">
        <div class="mb_default-title">
          <p class="sm-tit">KTLA</p>
          <p class="big-tit">회원가입</p>
        </div>

        <div class="reg_result_ct">
          <div class="reg_result-icon"><img src="/ktla-dev/source/img/reg-result-icon.png" alt=""></div>
          <p class="reg_result-txt1">한국신학대학도서관협의회 홈페이지의 <br/><b>회원가입이 완료</b>되었습니다!</p>
          <p class="reg_result-txt2">로그인 후 다양한 서비스 및 회원정보 수정이 가능합니다.</p>
        </div>
        <div class="btn_confirm_reg">
          <a href="<?php echo G5_URL ?>/" class="i-btn1">메인으로</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- } 회원가입결과 끝 -->