<?php
include_once('./_common.php');

$board_name = $g5['write_prefix'].$_GET['bo'];
$vowel = $_GET['vowel'];

switch ($vowel) {
  case 'ㄱ' :
    $startScope = '가';
    $endScope = '나';
    break;
  case 'ㄴ' :
    $startScope = '나';
    $endScope = '다';
    break;
  case 'ㄷ' :
    $startScope = '다';
    $endScope = '라';
    break;
  case 'ㄹ' :
    $startScope = '라';
    $endScope = '마';
    break;
  case 'ㅁ' :
    $startScope = '마';
    $endScope = '바';
    break;
  case 'ㅂ' :
    $startScope = '바';
    $endScope = '사';
    break;
  case 'ㅅ' :
    $startScope = '사';
    $endScope = '아';
    break;
  case 'ㅇ' :
    $startScope = '아';
    $endScope = '자';
    break;
  case 'ㅈ' :
    $startScope = '자';
    $endScope = '차';
    break;
  case 'ㅊ' :
    $startScope = '차';
    $endScope = '카';
    break;
  case 'ㅋ' :
    $startScope = '카';
    $endScope = '타';
    break;
  case 'ㅌ' :
    $startScope = '타';
    $endScope = '파';
    break;
  case 'ㅍ' :
    $startScope = '파';
    $endScope = '하';
    break;
  case 'ㅎ' :
    $startScope = '하';
    $endScope = '';
    break;
}

$sql = " SELECT 
          wr_id, 
          wr_subject, 
          wr_name, 
          wr_datetime 
          FROM {$board_name} 
          WHERE wr_is_comment = 0 and wr_subject RLIKE '^({$vowel})' or (wr_subject >= '{$startScope}'  and wr_subject < '{$endScope}') order by wr_subject 
        ";
$result = sql_query($sql);

$data = array();
for($i=0; $row=sql_fetch_array($result); $i++){
  $data[] = $row;
}

echo json_encode($data);
?>