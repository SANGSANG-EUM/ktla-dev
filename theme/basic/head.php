<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include EUM_INCLUDE_PATH.'/menus.php';
?>

<?php
$pg_name = str_replace('.php', '', basename($_SERVER['PHP_SELF']));

$header_style = "";
if(defined('_INDEX_')) { // index에서만 실행
  $header_style = "";
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
} else if($pg_name == 'login' || $pg_name == 'register' || $pg_name == 'register_form' || $pg_name == 'register_result') {
  $header_style = "scr_black2";
} else {
  $header_style = "scr_black";
}
?>

<!-- 헤더 시작 { -->
<div id="header" class="<?php echo $header_style;?>">
  <h1 id="hd_logo">
    <a href="/ktla-dev/">
      <img src="/ktla-dev/source/img/logo-white.png" alt="한국신학대학도서관협의회">
    </a>
  </h1>

  <nav id="hd_gnb">
    <ul class="depth1">
      <?php foreach ($sb_menus as $menu) { ?>
      <li>
        <a href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></a>
        <?php if ( isset($menu['sb_2menus']) ) { ?>
        <ul class="depth2">
          <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
          <li>
            <a href="<?php echo $menu2['link'];?>"><?php echo $menu2['name'];?></a>
            <?php if ( isset($menu2['sb_3menus']) ) { ?>
            <ul class="depth3">
              <?php foreach ($menu2['sb_3menus'] as $menu3) { ?>
              <li>
                <a href="<?php echo $menu3['link'];?>"><?php echo $menu3['name'];?></a>
              </li>
              <?php } ?>
            </ul>
            <?php } ?>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
  </nav>

  <button type="button" id="mo_menu_btn" class="">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="hd_mb">
    <?php if($is_member){ ?>
    <button type="button" class="hd_mb-btn login">
      <img src="/ktla-dev/source/img/login-icon.png" alt=""><?php echo $member['mb_name'];?>님
    </button>

    <div id="hd_mb_ov" class="<?php echo $is_admin?'adm':''; ?>">
      <ul>
        <?php if($is_admin){ ?>
        <li>
          <a href="/ktla-dev/adm" target="_blank">관리자</a>
        </li>
        <?php } ?>
        <li>
          <a href="/ktla-dev/bbs/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
        </li>
        <li>
          <a href="/ktla-dev/bbs/logout.php">로그아웃</a>
        </li>
      </ul>
    </div>
    <?php } else { ?>
    <a href="/ktla-dev/bbs/login.php" class="hd_mb-btn"><img src="/ktla-dev/source/img/login-icon.png" alt="">로그인</a>
    <?php } ?>
  </div>
</div>

<div id="mo_menu_ct">
  <div class="mo_mb_menu">
    <ul>
    <?php if($is_member){ ?>
    <li>
      <a href="/ktla-dev/bbs/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
    </li>
    <li>
      <a href="/ktla-dev/bbs/logout.php">로그아웃</a>
    </li>
    <?php } else { ?>
    <li>
      <a href="/ktla-dev/bbs/login.php">로그인</a>
    </li>
    <?php } ?>
    </ul>
  </div>
  <nav id="mo_hd_gnb">
    <ul class="depth1">
      <?php foreach ($sb_menus as $menu) { ?>
      <li>
        <span href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></span>
        <?php if ( isset($menu['sb_2menus']) ) { ?>
        <ul class="depth2">
          <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
          <li>
            <a href="<?php echo $menu2['link'];?>"><?php echo $menu2['name'];?></a>
            <?php if ( isset($menu2['sb_3menus']) ) { ?>
            <ul class="depth3">
              <?php foreach ($menu2['sb_3menus'] as $menu3) { ?>
              <li>
                <a href="<?php echo $menu3['link'];?>"><?php echo $menu3['name'];?></a>
              </li>
              <?php } ?>
            </ul>
            <?php } ?>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>
<!-- } 헤더 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">