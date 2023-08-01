<?php
include_once('./_common.php');
include EUM_INCLUDE_PATH.'/menus.php';

function sub_top($sb_menus, $sb_id, $pg_id){
  $menu_index = array_search($sb_id, array_column($sb_menus, 'id'));
  $menu2_index = array_search($pg_id, array_column($sb_menus[$menu_index]['sb_2menus'], 'id'));
?>
<section class="sb_top <?php echo $sb_id.'_top';?>">
  <h2 class="sound_only"><?php echo $sb_menus[0]; ?> 페이지</h2>
  <div class="container">
    <div class="wrapper">
      <div class="sb_top_ct">
        <p class="sb_title-eng"><?php echo $sb_menus[$menu_index]['sb_2menus'][$menu2_index]['name_eng']; ?></p>
        <p class="sb_title"><?php echo $sb_menus[$menu_index]['sb_2menus'][$menu2_index]['name']; ?></p>
        <div class="sb_menus">
          <a href="/ktla-dev/" class="sb_menus-home"><img src="/ktla-dev/source/img/sb_menu-home.png" alt="홈으로 가기"></a>
          <select class="sb_menus_sel">
          <?php 
          foreach ($sb_menus as $menu) {
          ?>
            <option value="<?php echo $menu['link']; ?>" <?php echo $menu['id'] == $sb_id ? 'selected':'';?>><?php echo $menu['name']; ?></option>
          <?php 
          } 
          ?>
          </select>
          <select class="sb_menus_sel">
          <?php 
          foreach ($sb_menus[$menu_index]['sb_2menus'] as $menu2) {
          ?>
            <option value="<?php echo $menu2['link']; ?>" <?php echo $menu2['id'] == $pg_id ? 'selected':'';?>><?php echo $menu2['name']; ?></option>
          <?php 
          } 
          ?>
          </select>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
} 
?>