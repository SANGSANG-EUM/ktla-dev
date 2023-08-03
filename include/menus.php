<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => 'introduce',
    'name' => '신대도협 소개',
    'link' => '/ktla-dev/sub/aboutus',
    'sb_2menus' => [
      [
        'id' => 'aboutus',
        'name' => '협회 안내',
        'name_eng' => 'Association Information',
        'link' => '/ktla-dev/sub/aboutus'
      ],
      [
        'id' => 'business',
        'name' => '주요 사업',
        'name_eng' => 'Major Business',
        'link' => '/ktla-dev/sub/business'
      ],
      [
        'id' => 'executive',
        'name' => '임원단',
        'name_eng' => 'Executive Group',
        'link' => '/ktla-dev/sub/executive'
      ],
      [
        'id' => '',
        'name' => '연혁',
        'name_eng' => 'Our History',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '회칙',
        'name_eng' => 'Association Rules',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '회원교 안내',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '회원교 명단',
        'name_eng' => 'List Of Member Organizations',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '신도협 편람',
        'name_eng' => 'KTLA handbook',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '출판물 소개',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '출판물',
        'name_eng' => 'Publication',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '커뮤니티',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '자료실',
        'name_eng' => 'Reference Library',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '활동 사진',
        'name_eng' => 'Activity Picture',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '회원게시판',
        'name_eng' => 'Membership Board',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '공지사항',
        'name_eng' => 'Notice',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '세미나 안내',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '참가 안내',
        'name_eng' => 'Participation Guide',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '온라인 등록',
        'name_eng' => 'Online Registration',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '등록확인',
        'name_eng' => 'Confirm Registration',
        'link' => ''
      ]
    ]
  ]
];

//제품 카테고리 DB 데이터 가져오기 + 메뉴 배열에 할당
/* 필요시 주석 해제
$cate_table = G5_TABLE_PREFIX.'shop_category';
$prd_table = G5_TABLE_PREFIX.'shop_item';
$prd_cate_sql = " select ca_id, ca_1_subj from {$cate_table} ";
$prd_cate_result = sql_query($prd_cate_sql);
$prd_cate = array();
for($i=0; $prd_cate_row=sql_fetch_array($prd_cate_result); $i++){
  $sb_menus[1]['sb_2menus'][] = [
    'id' => $prd_cate_row['ca_id'],
    'name' => $prd_cate_row['ca_1_subj'],
    'link' => '/sub/prod_list/'.$prd_cate_row['ca_id'],
  ];

  $prd_item_sql = " select it_id, it_name from {$prd_table} where ca_id = '{$prd_cate_row['ca_id']}' and it_use=1 ";
  $prd_item_result = sql_query($prd_item_sql);
  $prd_item = array();
  for($k=0; $prd_item_row=sql_fetch_array($prd_item_result); $k++){
    $sb_menus[1]['sb_2menus'][$i]['sb_3menus'][] = [
      'id' => $prd_item_row['it_id'],
      'name' => $prd_item_row['it_name'],
      'link' => '/sub/prod_view/'.$prd_item_row['it_id'],
    ];
  }
}
*/
?>