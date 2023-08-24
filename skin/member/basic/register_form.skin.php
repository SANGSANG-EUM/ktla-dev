<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.register_form.js"></script>', 0);
if ($config['cf_cert_use'] && ($config['cf_cert_simple'] || $config['cf_cert_ipin'] || $config['cf_cert_hp']))
    add_javascript('<script src="'.G5_JS_URL.'/certify.js?v='.G5_JS_VER.'"></script>', 0);
?>

<!-- 회원정보 입력/수정 시작 { -->

<div class="mb_default register">
  <div class="container">
    <div class="wrapper">
      <div class="mb_default_ct">
        <div class="mb_default-title">
          <p class="sm-tit">KTLA</p>
          <p class="big-tit">회원가입</p>
        </div>

        <form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>"
          onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
          <input type="hidden" name="w" value="<?php echo $w ?>">
          <input type="hidden" name="url" value="<?php echo $urlencode ?>">
          <input type="hidden" name="agree" value="<?php echo $agree ?>">
          <input type="hidden" name="agree2" value="<?php echo $agree2 ?>">
          <input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
          <input type="hidden" name="cert_no" value="">
          <input type="hidden" name="mb_nick" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>" id="reg_mb_nick">
          <?php if (isset($member['mb_sex'])) {  ?>
            <input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>">
          <?php }  ?>
          <?php if (isset($member['mb_nick_date']) && $member['mb_nick_date'] > date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400))) { // 닉네임수정일이 지나지 않았다면  ?>
          <input type="hidden" name="mb_nick_default" value="<?php echo get_text($member['mb_nick']) ?>">
          <input type="hidden" name="mb_nick" value="<?php echo get_text($member['mb_nick']) ?>">
          <?php }  ?>

          

          <div id="register_form" class="form_01">
            <div class="register_form_inner">
              <div class="register_form_row">
                <label for="reg_mb_id" class="register_form_label">아이디</label>
                <div class="register_form_ibox">
                  <div class="btn_frmline_wrap">
                    <input type="text" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id"
                      <?php echo $required ?> <?php echo $readonly ?>
                      class="fm-input <?php echo $required ?> <?php echo $readonly ?>" minlength="3" maxlength="20"
                      placeholder="영문자 / 숫자 / _ 만 입력 가능(최소 3자이상 입력)">
                    <button type="button" id="idcheck" class="btn_frmline">중복확인</button>
                  </div>
                </div>
              </div>
              <div class="register_form_row">
                <label for="reg_mb_password" class="register_form_label">비밀번호</label>
                <div class="register_form_ibox">
                  <input type="password" name="mb_password" id="reg_mb_password" <?php echo $required ?>
                    class="fm-input full <?php echo $required ?>" minlength="3" maxlength="20" placeholder="비밀번호를 입력해 주세요.">
                </div>
              </div>
              <div class="register_form_row">
                <label for="reg_mb_password_re" class="register_form_label">비밀번호 확인</label>
                <div class="register_form_ibox">
                  <input type="password" name="mb_password_re" id="reg_mb_password_re" <?php echo $required ?>
                    class="fm-input full <?php echo $required ?>" minlength="3" maxlength="20" placeholder="비밀번호를 한번 더 입력해 주세요.">
                </div>
              </div>
              <div class="register_form_row">
                <label for="reg_mb_name" class="register_form_label">이름</label>
                <div class="register_form_ibox">
                  <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>"
                    <?php echo $required ?> <?php echo $name_readonly; ?>
                    class="fm-input full <?php echo $required ?> <?php echo $name_readonly ?>" size="10"
                    placeholder="이름을 입력해 주세요.">
                </div>
              </div>
              <div class="register_form_row">
                <label for="reg_mb_email" class="register_form_label">이메일</label>
                <div class="register_form_ibox">
                  <div class="btn_frmline_wrap">
                    <input type="hidden" name="old_email" value="<?php echo $member['mb_email'] ?>">
                    <input type="text" name="mb_email" value="<?php echo isset($member['mb_email'])?$member['mb_email']:''; ?>"
                      id="reg_mb_email" required class="fm-input email required" size="70" maxlength="100"
                      placeholder="이메일 주소를 입력해 주세요.">
                    <button type="button" id="emailcheck" class="btn_frmline">중복확인</button>
                  </div>
                </div>
              </div>
              <div class="register_form_row check_row">
                <label for="" class="register_form_label">메일링 서비스</label>
                <div class="register_form_ibox">
                  <div class="checkbtn2">
                    <input type="checkbox" name="mb_mailling" value="1" id="reg_mb_mailling"
                      <?php echo ($w=='' || $member['mb_mailling'])?'checked':''; ?> class="selec_chk">
                    <label for="reg_mb_mailling">
                      <b class="sound_only">메일링서비스</b>
                      정보 메일을 받겠습니다.
                    </label>
                  </div>
                </div>
              </div>
              <div class="register_form_row">
                <label for="reg_mb_tel" class="register_form_label">연락처(업무용)</label>
                <div class="register_form_ibox">
                  <input type="text" name="mb_tel" value="<?php echo get_text($member['mb_tel']) ?>" id="reg_mb_tel"
                    <?php echo $config['cf_req_tel']?"required":""; ?>
                    class="fm-input full <?php echo $config['cf_req_tel']?"required":""; ?>" maxlength="20"
                    placeholder="연락처를 ‘-’없이 입력해 주세요.">
                </div>
              </div>
              <div class="register_form_row">
                <label for="reg_mb_hp" class="register_form_label">핸드폰 번호</label>
                <div class="register_form_ibox">
                  <input type="text" name="mb_hp" value="<?php echo get_text($member['mb_hp']) ?>" id="reg_mb_hp"
                    <?php echo $hp_required; ?> <?php echo $hp_readonly; ?>
                    class="fm-input full <?php echo $hp_required; ?> <?php echo $hp_readonly; ?>" maxlength="20"
                    placeholder="연락처를 ‘-’없이 입력해 주세요.">
                </div>
              </div>
              <div class="register_form_row check_row">
                <label for="" class="register_form_label">SMS 수신여부</label>
                <div class="register_form_ibox">
                  <?php if ($config['cf_use_hp']) { ?>
                  <div class="checkbtn2">
                    <input type="checkbox" name="mb_sms" value="1" id="reg_mb_sms"
                      <?php echo ($w=='' || $member['mb_sms'])?'checked':''; ?> class="selec_chk">
                    <label for="reg_mb_sms">
                      <b class="sound_only">SMS 수신여부</b>
                      휴대폰 문자메세지를 받겠습니다.
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <div class="register_form_row">
                <label for="" class="register_form_label">주소</label>
                <div class="register_form_ibox">
                  <?php if ($config['cf_use_addr']) { ?>
                    <?php if ($config['cf_req_addr']) { ?> (필수)<?php }  ?>
                    <div class="btn_frmline_wrap">
                      <label for="reg_mb_zip" class="sound_only">우편번호<?php echo $config['cf_req_addr']?' (필수)':''; ?></label>
                      <input type="text" name="mb_zip" value="<?php echo $member['mb_zip1'].$member['mb_zip2']; ?>"
                        id="reg_mb_zip" <?php echo $config['cf_req_addr']?"required":""; ?>
                        class="fm-input twopart_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="5" maxlength="6"
                        placeholder="우편번호">
                      <button type="button" class="btn_frmline"
                        onclick="win_zip('fregisterform', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');">주소검색</button>
                    </div>
                    <input type="text" name="mb_addr1" value="<?php echo get_text($member['mb_addr1']) ?>" id="reg_mb_addr1"
                      <?php echo $config['cf_req_addr']?"required":""; ?>
                      class="fm-input frm_address full <?php echo $config['cf_req_addr']?"required":""; ?>" size="50"
                      placeholder="기본주소">
                    <label for="reg_mb_addr1"
                      class="sound_only">기본주소<?php echo $config['cf_req_addr']?' (필수)':''; ?></label><br>
                    <input type="text" name="mb_addr2" value="<?php echo get_text($member['mb_addr2']) ?>" id="reg_mb_addr2"
                      class="fm-input frm_address full" size="50" placeholder="상세주소">
                    <label for="reg_mb_addr2" class="sound_only">상세주소</label>
                    <br>
                    <input type="hidden" name="mb_addr3" value="<?php echo get_text($member['mb_addr3']) ?>" id="reg_mb_addr3"
                      class="fm-input frm_address full" size="50" readonly="readonly" placeholder="참고항목">
                    <label for="reg_mb_addr3" class="sound_only">참고항목</label>
                    <input type="hidden" name="mb_addr_jibeon" value="<?php echo get_text($member['mb_addr_jibeon']); ?>">
                  <?php }  ?>
                </div>
              </div>
              <div class="register_form_row">
                <label for="reg_mb_homepage" class="register_form_label">소속기관명</label>
                <div class="register_form_ibox">
                  <input type="text" name="mb_homepage" value="<?php echo get_text($member['mb_homepage']) ?>"
                    id="reg_mb_homepage" <?php echo $config['cf_req_homepage']?"required":""; ?>
                    class="fm-input full <?php echo $config['cf_req_homepage']?"required":""; ?>" size="70"
                    maxlength="255" placeholder="소속 대학명을 입력해 주세요.">
                </div>
              </div>
              <div class="register_form_row">
                <label for="captcha_key" class="register_form_label">자동등록방지</label>
                <div class="register_form_ibox">
                  <div class="is_captcha_use">
                    <?php echo captcha_html(); ?>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div class="btn_confirm">
            <button type="submit" id="btn_submit" class="i-btn1" accesskey="s"><?php echo $w==''?'가입하기':'수정하기'; ?></button>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  $(function () {
    $("#idcheck").click(function(){
      let msg = reg_mb_id_check();
      if(msg == "" || msg == null) {
        if(!confirm("가입할 수 있는 아이디입니다.\n현재 아이디를 사용하시겠습니까?")) {
          document.getElementById("reg_mb_id").value = "";
        }
      } else {
        alert(msg);
      }
    });

    $("#emailcheck").click(function(){
      let msg = reg_mb_email_check();
      if(msg == "" || msg == null) {
        if(!confirm("가입할 수 있는 이메일입니다.\n현재 이메일을 사용하시겠습니까?")) {
          document.getElementById("reg_mb_email").value = "";
        }
      } else {
        alert(msg);
      }
    });

    $("#reg_zip_find").css("display", "inline-block");
    var pageTypeParam = "pageType=register";

    <?php if ($config['cf_cert_use'] && $config['cf_cert_simple']) { ?>
      // 이니시스 간편인증
      var url = "<?php echo G5_INICERT_URL; ?>/ini_request.php";
      var type = "";
      var params = "";
      var request_url = "";

      $(".win_sa_cert").click(function () {
        if (!cert_confirm()) return false;
        type = $(this).data("type");
        params = "?directAgency=" + type + "&" + pageTypeParam;
        request_url = url + params;
        call_sa(request_url);
      }); <?php } ?>
    <?php if ($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
      // 아이핀인증
      var params = "";
      $("#win_ipin_cert").click(function () {
        if (!cert_confirm()) return false;
        params = "?" + pageTypeParam;
        var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php" + params;
        certify_win_open('kcb-ipin', url);
        return;
      });

      <?php
    } ?>
    <?php
    if ($config['cf_cert_use'] && $config['cf_cert_hp']) {
      ?>
      // 휴대폰인증
      var params = "";
      $("#win_hp_cert").click(function () {
        if (!cert_confirm()) return false;
        params = "?" + pageTypeParam; <
        ?php
        switch ($config['cf_cert_hp']) {
          case 'kcb':
            $cert_url = G5_OKNAME_URL.
            '/hpcert1.php';
            $cert_type = 'kcb-hp';
            break;
          case 'kcp':
            $cert_url = G5_KCPCERT_URL.
            '/kcpcert_form.php';
            $cert_type = 'kcp-hp';
            break;
          case 'lg':
            $cert_url = G5_LGXPAY_URL.
            '/AuthOnlyReq.php';
            $cert_type = 'lg-hp';
            break;
          default:
            echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
            echo 'return false;';
            break;
        } ?
        >

        certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>" + params);
        return;
      }); <?php
    } ?>
  });

  // submit 최종 폼체크
  function fregisterform_submit(f) {
    // 회원아이디 검사
    if (f.w.value == "") {
      var msg = reg_mb_id_check();
      if (msg) {
        alert(msg);
        f.mb_id.select();
        return false;
      }
    }

    if (f.w.value == "") {
      if (f.mb_password.value.length < 3) {
        alert("비밀번호를 3글자 이상 입력하십시오.");
        f.mb_password.focus();
        return false;
      }
    }

    if (f.mb_password.value != f.mb_password_re.value) {
      alert("비밀번호가 같지 않습니다.");
      f.mb_password_re.focus();
      return false;
    }

    if (f.mb_password.value.length > 0) {
      if (f.mb_password_re.value.length < 3) {
        alert("비밀번호를 3글자 이상 입력하십시오.");
        f.mb_password_re.focus();
        return false;
      }
    }

    // 이름 검사
    if (f.w.value == "") {
      if (f.mb_name.value.length < 1) {
        alert("이름을 입력하십시오.");
        f.mb_name.focus();
        return false;
      }

      /*
      var pattern = /([^가-힣\x20])/i;
      if (pattern.test(f.mb_name.value)) {
          alert("이름은 한글로 입력하십시오.");
          f.mb_name.select();
          return false;
      }
      */
    }

    <?php
    if ($w == '' && $config['cf_cert_use'] && $config['cf_cert_req']) {
      ?>
      // 본인확인 체크
      if (f.cert_no.value == "") {
        alert("회원가입을 위해서는 본인확인을 해주셔야 합니다.");
        return false;
      } <?php } ?>

    // 닉네임 검사
    // if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
      // var msg = reg_mb_nick_check();
      // if (msg) {
        // alert(msg);
        // f.reg_mb_nick.select();
        // return false;
      // }
    // }

    // E-mail 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
      var msg = reg_mb_email_check();
      if (msg) {
        alert(msg);
        f.reg_mb_email.select();
        return false;
      }
    }

    <?php
    if (($config['cf_use_hp'] || $config['cf_cert_hp']) && $config['cf_req_hp']) {
      ?>
      // 휴대폰번호 체크
      var msg = reg_mb_hp_check();
      if (msg) {
        alert(msg);
        f.reg_mb_hp.select();
        return false;
      } 
    <?php } ?>

    if (typeof f.mb_icon != "undefined") {
      if (f.mb_icon.value) {
        if (!f.mb_icon.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
          alert("회원아이콘이 이미지 파일이 아닙니다.");
          f.mb_icon.focus();
          return false;
        }
      }
    }

    if (typeof f.mb_img != "undefined") {
      if (f.mb_img.value) {
        if (!f.mb_img.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
          alert("회원이미지가 이미지 파일이 아닙니다.");
          f.mb_img.focus();
          return false;
        }
      }
    }

    if (typeof (f.mb_recommend) != "undefined" && f.mb_recommend.value) {
      if (f.mb_id.value == f.mb_recommend.value) {
        alert("본인을 추천할 수 없습니다.");
        f.mb_recommend.focus();
        return false;
      }

      var msg = reg_mb_recommend_check();
      if (msg) {
        alert(msg);
        f.mb_recommend.select();
        return false;
      }
    }

    <?php echo chk_captcha_js(); ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
  }

  jQuery(function ($) {
    //tooltip
    $(document).on("click", ".tooltip_icon", function (e) {
      $(this).next(".tooltip").fadeIn(400).css("display", "inline-block");
    }).on("mouseout", ".tooltip_icon", function (e) {
      $(this).next(".tooltip").fadeOut();
    });
  });
</script>

<!-- } 회원정보 입력/수정 끝 -->