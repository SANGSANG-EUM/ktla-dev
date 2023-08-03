<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
?>

<div id="regi_confirm_list" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'seminar', 'regi_view'); ?>

  <div class="sub_contents">
    
    <!-- Sub Title { -->
    <div class="sub_title_box">
      <div class="container">
        <div class="wrapper">
          <p class="sub_title">
            등록하신 <span class="bold">정보 및 교육이수증</span>을 <br>
            확인하실 수 있습니다.
          </p>
        </div>
      </div>
    </div>
    <!-- } Sub Title -->

    <div class="regi_confirm_wrap">
      <div class="container">
        <div class="wrapper">
          <div class="regi_confirm_caption">
            ※ 신청상태가 [접수 중], [접수 완료], [접수 불가]일 경우 신청서 수정이 가능합니다. (신청서 수정시 접수상태가 접수중으로 초기화되며 관리자 심사 후 상태가 재변경됩니다.) <br>
            ※ 신청 상태가 납부완료가 되면 완료처리 내역을 확인하실 수 있으며, 해당 신청서는 더 이상 수정이 불가능 합니다. <br>
            ※ 아래 항목 중 수정하시고자 하는 항목의 버튼을 누르시면 수정화면으로 이동합니다.
          </div>
          <div class="regi_confirm_ct">
            <p class="regi_confirm_title">한국신학대학도서관협의회 50주년 기념 세미나</p>
            <div class="regi_confirm_list">
              <table>
                <thead>
                  <tr>
                    <th class="td-num">No.</th>
                    <th class="td-name">이름</th>
                    <th class="td-content">소속기관명</th>
                    <th class="td-date">등록일</th>
                    <th class="td-status">신청상태</th>
                    <th class="td-confirm">교육이수증 확인</th>
                    <th class="td-btn">수정/삭제</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="td-num">10</td>
                    <td class="td-name">홍길동</td>
                    <td class="td-content">대한신학대학원대학교</td>
                    <td class="td-date">2023-07-10</td>
                    <td class="td-status">접수중</td>
                    <td class="td-confirm">
                      <button class="confirm-btn">확인증 발급</button>
                    </td>
                    <td class="i-col-0 td-btn">
                      <span class="td-btn-item">
                        <a href="" class="tb-btn">수정</a>
                      </span>
                      <span class="td-btn-item">
                        <button class="tb-btn">삭제</button>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>