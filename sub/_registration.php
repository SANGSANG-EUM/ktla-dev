<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
?>

<div id="registration" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'seminar', 'regi_write'); ?>

  <div class="sub_contents">
    
    <!-- Sub Title { -->
    <div class="sub_title_box">
      <div class="container">
        <div class="wrapper">
          <p class="sub_title">
            진행 예정인 세미나를 온라인을 통해 <br>
            <span class="bold">간편하게</span> 신청하세요.
          </p>
        </div>
      </div>
    </div>
    <!-- } Sub Title -->

    <div class="regi_expl_wrap">
      <div class="container">
        <div class="wrapper">
          <div class="regi_expl_box">
            <p class="expl01">한국신학대학도서관협의회 50주년 기념 세미나</p>
            <p class="expl02">한국신학대학도서돤협의회 50주년 기념 세미나의 온라인 신청기한은 2023년 7월 7일(금)까지이며, 참가자 명단은 홈페이지에서 확인 가능합니다. <br>많은 관심과 참여를 부탁드립니다.</p>
            <ul class="i-col-0 regi_expl_info_ul">
              <li>
                <p class="title">간사</p>
                <p class="content">김아라</p>
              </li>
              <li>
                <p class="title">문의</p>
                <p class="content">042-828-3245/3242</p>
              </li>
              <li>
                <p class="title">이메일</p>
                <p class="content">ktla1973@naver.com</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="regi_form_wrap">
      <div class="container">
        <div class="wrapper">
          <form action="">
            <div class="i-col-2 regi_form_list">
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">교육명</p>
                  <div class="regi_form_content">
                    한국신학대학도서관협의회 50주년 기념 세미나
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">아이디</p>
                  <div class="regi_form_content">
                    abcd1234
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">이름</p>
                  <div class="regi_form_content">
                    홍길동
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">이메일</p>
                  <div class="regi_form_content">
                    ktla1973@naver.com
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">핸드폰 번호</p>
                  <div class="regi_form_content">
                    <div class="input_wrap">
                      <input type="text" class="input-text" placeholder="‘-’을 기재하여 입력해 주세요.">
                    </div>
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">참여일</p>
                  <div class="regi_form_content">
                    <div class="check_wrap">
                      <div class="check_li">
                        <input type="checkbox" id="check1">
                        <label for="check1">
                          <span></span>
                          8/17(목)
                        </label>
                      </div>
                      <div class="check_li">
                        <input type="checkbox" id="check2">
                        <label for="check2">
                          <span></span>
                          8/18(금)
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">소속기관명</p>
                  <div class="regi_form_content">
                    <div class="input_wrap">
                      <input type="text" class="input-text" placeholder="소속 대학명을 입력해 주세요.">
                    </div>
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">직위</p>
                  <div class="regi_form_content">
                    <div class="input_wrap">
                      <input type="text" class="input-text" placeholder="직위를 입력해 주세요.">
                    </div>
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">직장연락처</p>
                  <div class="regi_form_content">
                    <div class="input_wrap">
                      <input type="text" class="input-text" placeholder="‘-’을 기재하여 입력해 주세요.">
                    </div>
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">성별</p>
                  <div class="regi_form_content">
                    <div class="radio_wrap">
                      <div class="radio_li">
                        <input type="radio" id="radio1" name="sex" checked>
                        <label for="radio1">남성</label>
                      </div>
                      <div class="radio_li">
                        <input type="radio" id="radio2" name="sex">
                        <label for="radio2">여성</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="regi_form_li">
                <div class="regi_form_li_inner">
                  <p class="regi_form_title">숙박유무</p>
                  <div class="regi_form_content">
                    <div class="radio_wrap">
                      <div class="radio_li">
                        <input type="radio" id="radio3" name="acc" checked>
                        <label for="radio3">Yes</label>
                      </div>
                      <div class="radio_li">
                        <input type="radio" id="radio4" name="acc">
                        <label for="radio4">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="regi_form_caption">
            ※ 1박 2일 숙박 일정으로 진행되오니, 신청시 확인 부탁드립니다. <br>
            ※ 방배정(2인 1실)을 위하여 성별을 반드시 체크 해주세요. <br>
            ※ 이틀 차에 경주국립박물관 테마투어(신라천년서고)가 예정되어 있습니다. 반드시 참석 유무를 체크해주세요.
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="btn_wrap">
      <div class="container">
        <div class="wrapper">
          <div class="btn_box">
            <button class="i-btn1">등록하기</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>