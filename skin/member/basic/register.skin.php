<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입약관 동의 시작 { -->
<div class="mb_default register">
  <div class="container">
    <div class="wrapper">
      <div class="mb_default_ct">
        <div class="mb_default-title">
          <p class="sm-tit">KTLA</p>
          <p class="big-tit">회원가입</p>
        </div>

        <form name="fregister" id="fregister" action="<?php echo $register_action_url ?>"onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">
          <?php
          // 소셜로그인 사용시 소셜로그인 버튼
          @include_once(get_social_skin_path().'/social_register.skin.php');
          ?>
          <section id="fregister_term">
            <h2 class="sound_only">회원가입약관</h2>
            <div class="term_tbox">
              <div class="term_tsec1">
                <p class="term_tsec1_txt1">온라인 회원가입을 하시면 홈페이지 전체 이용이 가능합니다.</p>
                <p class="term_tsec1_txt2">※ 온라인 회원 가입은 별도의 가입비가 없습니다.</p>
              </div>

              <div class="term_tsec2">
                <p class="term_tsec2_txt1">온라인 회원가입 대상</p>
                <ul class="term_tsec2_txt_ul1">
                  <li>
                    <p class="term_tsec2_txt2">① 신도협 회원교 근무하는 도서관 직원</p>
                  </li>
                  <li>
                    <p class="term_tsec2_txt2">② 교회도서관 또는 신학전문도서관으로 승인을 얻은 자</p>
                  </li>
                  <li>
                    <p class="term_tsec2_txt2">③ 신도협에 관심이 있고, 신학정보 공유를 원하는 자</p>
                  </li>
                </ul>
              </div>

              <div class="term_tsec2">
                <p class="term_tsec2_txt1">오프라인 회원가입 대상</p>
                <ul class="term_tsec2_txt_ul2">
                  <li>
                    <p class="term_tsec2_txt3">1. 단체회원</p>
                    <p class="term_tsec2_txt4">기독교(그리스도교)가 인정한 신학대학, 각종학교(신학교) 및 신학전문 도서관으로 가입원서를 접수하여 임원회에서 심의하여 승인을 얻은 도서관</p>
                  </li>
                  <li>
                    <p class="term_tsec2_txt3">2. 개인회원</p>
                    <p class="term_tsec2_txt4">신학도서관에 근무하다 퇴직하거나 타부서에서 일하는 사람으로 가입원서를 제출하여 임원회의 심의를 거쳐 허락을 받은 사람</p>
                  </li>
                  <li>
                    <p class="term_tsec2_txt3">3. 명예회원</p>
                    <p class="term_tsec2_txt4">본 회의 설립취지와 목적에 찬동하며 가입을 원하는 개인이나, 단체로 임원회의 심의를 거쳐 승인을 받은 사람(단체)</p>
                  </li>
                  <li>
                    <p class="term_tsec2_txt3">4. 종신회원</p>
                    <p class="term_tsec2_txt4">신학도서관에 근무하다 퇴직 또는 기타의 사유로 도서관 일선에서 떠난 분 중 임원회에서 그 공로를 인정하여 추대하는 회원</p>
                  </li>
                </ul>
              </div>

              <div class="term_tsec3">
                <p class="term_tsec3_txt1">회원 가입을 원하시면 협의회 사무국으로 연락을 주십시오.</p>
                <p class="term_tsec3_txt1">(홈페이지 : http://www.ktla.or.kr / 전화 : 042-828-3245 / 팩스 : 042-828-3239)</p>
                <p class="term_tsec3_txt1">친절하게 입회원서 작성을 돕도록 하겠습니다.</p>
                <p class="term_tsec3_txt2">※ 연회비: 임원교 350,000 / 일반회원 300,000</p>
              </div>
            </div>
          </section>

          <div id="fregister_chkall" class="chk_all fregister_agree">
            <div class="checkbtn2">
              <input type="checkbox" name="agree" id="agree" class="selec_chk">
              <label for="agree">약관의 내용에 동의합니다.</label>
            </div>
          </div>

          <div class="cf btn_confirm">
            <button type="submit" class="i-btn1">다음으로</button>
          </div>
        </form>

        <div class="reg-group">
          <p class="reg-group-txt1">가입원서(단체회원)</p>
          <div class="reg-group-in">
            <p class="reg-group-txt2">한국신학대학도서관협의회의 단체 회원 입회를 원하실 경우 ‘가입 원서’를 다운받으시고 내용 작성 후 파일에 기재된 주소 또는 메일로 보내주세요.</p>
            <a href="" class="reg-group-btn">가입하기</a>
          </div>
        </div>

        <script>
          function fregister_submit(f) {
            if (!f.agree.checked) {
              alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
              f.agree.focus();
              return false;
            }

            return true;
          }

          jQuery(function ($) {
            // 모두선택
            $("input[name=chk_all]").click(function () {
              if ($(this).prop('checked')) {
                $("input[name^=agree]").prop('checked', true);
              } else {
                $("input[name^=agree]").prop("checked", false);
              }
            });
          });
        </script>
      </div>
    </div>
  </div>
</div>
<!-- } 회원가입 약관 동의 끝 -->
