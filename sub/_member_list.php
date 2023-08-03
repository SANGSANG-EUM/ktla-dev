<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
?>

<div id="member_list" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'organization', 'member'); ?>

  <div class="sub_contents">
    
    <!-- Sub Title { -->
    <div class="sub_title_box">
      <div class="container">
        <div class="wrapper">
          <p class="sub_title">
          한국신학대학도서관협의회와 함께하는 <br>
            <span class="bold">회원교</span>를 소개합니다.
          </p>
        </div>
      </div>
    </div>
    <!-- } Sub Title -->

    <div class="member_list_wrap">
      <div class="wrapper">
        <div class="consonant_category_wrap">
          <ul class="i-col-0 consonant_category_ul">
            <li class="active"><button>전체</button></li>
            <li><button data-sort="ㄱ">ㄱ</button></li>
            <li><button data-sort="ㄴ">ㄴ</button></li>
            <li><button data-sort="ㄷ">ㄷ</button></li>
            <li><button data-sort="ㄹ">ㄹ</button></li>
            <li><button data-sort="ㅁ">ㅁ</button></li>
            <li><button data-sort="ㅂ">ㅂ</button></li>
            <li><button data-sort="ㅅ">ㅅ</button></li>
            <li><button data-sort="ㅇ">ㅇ</button></li>
            <li><button data-sort="ㅈ">ㅈ</button></li>
            <li><button data-sort="ㅊ">ㅊ</button></li>
            <li><button data-sort="ㅋ">ㅋ</button></li>
            <li><button data-sort="ㅌ">ㅌ</button></li>
            <li><button data-sort="ㅎ">ㅎ</button></li>
          </ul>
        </div>
        <div class="member_list_box">
          <ul class="i-col-2 member_list">

          </ul>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
  let member = [
    {
      'idx': 1,
      'name': '강서대학교',
      'add': '[07661] 서울특별시 강서구 까치산로 24길 47',
      'tel': '02-2600-2491',
    },
    {
      'idx': 2,
      'name': '가톨릭대학교(성신교정)',
      'add': '[03083] 서울특별시 종로구 창경궁로 296-12(혜화동)',
      'tel': '02-740-9720~1',
    },
    {
      'idx': 3,
      'name': '감리교신학대학교',
      'add': '[03745] 서울특별시 서대문구 독립문로 56',
      'tel': '02-361-9232',
    },
    {
      'idx': 4,
      'name': '개신대학원대학교',
      'add': '[01118] 서울특별시 강북구 도봉로 235',
      'tel': '070-7207-0113',
    },
    {
      'idx': 5,
      'name': '건신대학원대학교',
      'add': '[34825] 대전광역시 중구 동서대로 1327번길 40',
      'tel': '042-721-3412',
    },
    {
      'idx': 6,
      'name': '고려신학대학원',
      'add': '[31071] 충청남도 천안시 동남구 충절로 535-31(삼룡동)',
      'tel': '041-560-1940',
    },
    {
      'idx': 7,
      'name': '광신대학교',
      'add': '[61027] 광주광역시 북구 본촌동 산 70',
      'tel': '062-605-1042~3',
    },
    {
      'idx': 8,
      'name': '광주가톨릭대학교',
      'add': '[58230] 전라남도 나주시 남평읍 중남길 12-25',
      'tel': '061-339-2251',
    },
    {
      'idx': 9,
      'name': '구세군사관대학원대학교',
      'add': '[13800] 경기도 과천시 관악산길 216',
      'tel': '02-502-9505',
    },
    {
      'idx': 10,
      'name': '수도국제대학원대학교',
      'add': '[08773] 서울특별시 관악구 남부순환로 1548',
      'tel': '02-839-0388(401)',
    },
    {
      'idx': 11,
      'name': '나사렛대학교',
      'add': '[31172] 충청남도 천안시 서북구 월봉로 48',
      'tel': '041-570-7729',
    },
    {
      'idx': 12,
      'name': '대구가톨릭대학교',
      'add': '[41969] 대구광역시 중구 명륜로 12번길 47',
      'tel': '053-660-5181',
    },
    {
      'idx': 13,
      'name': '대신대학교',
      'add': '[38649] 경상북도 경산시 경청로222길 33',
      'tel': '053-810-0783',
    },
    {
      'idx': 14,
      'name': '대전신학대학교',
      'add': '[34432] 대전광역시 대덕구 한남로 41',
      'tel': '042-606-0121',
    },
    {
      'idx': 15,
      'name': '대한신학대학원대학교',
      'add': '[13907] 경기도 안양시 만안구 경수대로 1406번길 30',
      'tel': '031-470-3329',
    },
    {
      'idx': 16,
      'name': '루터대학교',
      'add': '[17072] 경기도 용인시 기흥구 금화로 82번길 20',
      'tel': '031-679-2362',
    },
    {
      'idx': 17,
      'name': '백석대학교(천안)',
      'add': '[31065] 충청남도 천안시 동남구 문암로 58',
      'tel': '041-550-2619',
    },
    {
      'idx': 18,
      'name': '부산장신대학교',
      'add': '[50883] 경상남도 김해시 김해대로 1894-68',
      'tel': '055-320-2522',
    },
    {
      'idx': 19,
      'name': '서울기독대학교',
      'add': '[03422] 서울특별시 은평구 갈현로4길 26-2',
      'tel': '055-320-2522',
    },
    {
      'idx': 20,
      'name': '서울성경신학대학원대학교',
      'add': '[07066] 서울특별시 동작구 신대방14가길 45-1',
      'tel': '02-845-7701',
    },
    {
      'idx': 21,
      'name': '서울신학대학교',
      'add': '[14754] 경기도 부천시 소사구 호현로 489번길 52',
      'tel': '032-340-9247',
    },
    {
      'idx': 22,
      'name': '서울장신대학교',
      'add': '[12749] 경기도 광주시 정안로 145',
      'tel': '031-799-9031',
    },
    {
      'idx': 23,
      'name': '서울한영대학교',
      'add': '[08274] 서울특별시 구로구 경인로 290-42',
      'tel': '02-2669-2280',
    },
    {
      'idx': 24,
      'name': '성결대학교',
      'add': '[14097] 경기도 안양시 만안구 성결대학로 53',
      'tel': '031-467-8261~7',
    },
    {
      'idx': 25,
      'name': '수원가톨릭대학교',
      'add': '[18332] 경기도 화성시 봉담읍 왕림1길 67',
      'tel': '031-290-8877',
    },
    {
      'idx': 26,
      'name': '순복음신학교',
      'add': '[03392] 서울특별시 은평구 역말로8길 5-1(대조동 67-9)',
      'tel': '02-383-3673',
    },
    {
      'idx': 27,
      'name': '실천신학대학원대학교',
      'add': '[17304] 경기도 이천시 신둔면 마소로11번길 311-43',
      'tel': '031-638-8657~8',
    },
    {
      'idx': 28,
      'name': '아세아연합신학대학교',
      'add': '[12508] 경기도 양평군 옥천면 경강로 1276',
      'tel': '031-770-7747',
    },
    {
      'idx': 29,
      'name': '아세아연합신학대학교',
      'add': '[12508] 경기도 양평군 옥천면 경강로 1276',
      'tel': '031-770-7747',
    },
    {
      'idx': 30,
      'name': '에스라성경대학원대학교',
      'add': '[10273] 경기도 고양시 덕양구 대양로285번길 33-7',
      'tel': '031-962-9196',
    },
    {
      'idx': 31,
      'name': '영남신학대학교',
      'add': '[38451] 경상북도 경산시 진량읍 봉화1길 26',
      'tel': '053-850-0572',
    },
    {
      'idx': 32,
      'name': '웨스트인스터신학대학원대학교',
      'add': '[16995] 경기도 용인시 기흥구 동백죽전대로 201-11',
      'tel': '031-270-6019',
    },
    {
      'idx': 33,
      'name': '인천가톨릭대학교',
      'add': '[23058] 인천광역시 강화군 양도면 고려왕릉로 53-1',
      'tel': '032-930-8047',
    },
    {
      'idx': 34,
      'name': '장로회신혁대학교',
      'add': '[04965] 서울특별시 광진구 광장로5길 25-1(광장동)',
      'tel': '02-450-0765',
    },
    {
      'idx': 35,
      'name': '전북신학교',
      'add': '[55072] 전라북도 전주시 완산구 삼산길 29',
      'tel': '063-223-6801',
    },
    {
      'idx': 36,
      'name': '제네바신학대학원대학교',
      'add': '[10801] 경기도 파주시 파평면 파산서원길 64-68',
      'tel': '031-958-6003',
    },
    {
      'idx': 37,
      'name': '주안대학원대학교',
      'add': '[22140] 인천광역시 남구 석바위로74번길 11',
      'tel': '032-446-5200',
    },
    {
      'idx': 38,
      'name': '총신대학교(서울)',
      'add': '[06988] 서울특별시 동작구 사당로 143',
      'tel': '02-3479-0284',
    },
    {
      'idx': 39,
      'name': '총신대학교(양지)',
      'add': '[17157] 경기도 용인시 처인구 양지면 학촌로 110',
      'tel': '031-679-1718',
    },
    {
      'idx': 40,
      'name': '칼빈대학교',
      'add': '[16911] 경기도 용인시 기흥구 마북로 184',
      'tel': '031-283-9305',
    },
    {
      'idx': 41,
      'name': '평택대학교',
      'add': '[17869] 경기도 평택시 서동대로 3825',
      'tel': '031-659-8466',
    },
    {
      'idx': 42,
      'name': '한국성서대학교',
      'add': '[01757] 서울특별시 노원구 동일로214길 32',
      'tel': '02-950-5450',
    },
    {
      'idx': 43,
      'name': '한국침례신학대학',
      'add': '[34098] 대전광역시 유성구 북유성대로 190',
      'tel': '042-828-3242',
    },
    {
      'idx': 44,
      'name': '한세대학교',
      'add': '[15852] 경기도 군포시 당정동 604-5',
      'tel': '031-450-5067',
    },
    {
      'idx': 45,
      'name': '한신대학교 장공도서관',
      'add': '[01025] 서울특별시 강북구 인수봉로 159',
      'tel': '02-2125-0131',
    },
    {
      'idx': 46,
      'name': '한일장신대학교',
      'add': '[55359] 전라북도 완주군 상관면 왜목로 726-15',
      'tel': '063-230-5471',
    },
    {
      'idx': 47,
      'name': '합동신학대학원대학교',
      'add': '[16517] 경기도 수원시 영통구 광교중앙로 50(원천동)',
      'tel': '031-212-3696',
    },
    {
      'idx': 48,
      'name': '협성대학교',
      'add': '[18330] 경기도 화성시 봉담읍 최루백로 72',
      'tel': '031-299-1351',
    },
    {
      'idx': 49,
      'name': '호남신학대학교',
      'add': '[61642] 광주광역시 남구 제중로 77',
      'tel': '062-650-1543',
    },
    {
      'idx': 50,
      'name': '횃불트리니티신학대학원대학교',
      'add': '[06752] 서울특별시 서초구 바우뫼로31길 70',
      'tel': '02-570-7132',
    },
  ];

  // 이름을 가나다 순으로 정렬하는 함수
  function compareNames(a, b) {
    return a.name.localeCompare(b.name);
  }

  // 배열을 이름으로 정렬
  member.sort(compareNames);

  let memberList = document.querySelector('.member_list');
  let memberLi = '';

  for (let i = 0; i < member.length; i++) {
    let name = member[i].name;
    let add = member[i].add;
    let tel = member[i].tel;
    memberLi += `
      <li>
        <div class="member_list_inner">
          <p class="title">${name}</p>
          <div class="member_list_info">
            <p class="member_list_info_item address">${add}</p>
            <p class="member_list_info_item tel">${tel}</p>
          </div>
        </div>
      </li>
    `;
  }

  memberList.innerHTML = memberLi;

  let categoryButtons = document.querySelectorAll('.consonant_category_ul li button');

  categoryButtons.forEach(button => {
    button.addEventListener('click', function (e) {
      // 모든 버튼의 부모 li에서 active 클래스를 제거합니다.
      categoryButtons.forEach(btn => btn.parentElement.classList.remove('active'));

      // 클릭한 버튼의 부모 li에 active 클래스를 추가합니다.
      this.parentElement.classList.add('active');

      // 클릭한 버튼의 data-sort 속성을 sortName으로 설정합니다.
      let sortName = e.target.getAttribute('data-sort');

      // memberList를 비워줍니다.
      memberList.innerHTML = '';

      // sortName으로 시작하는 멤버만 필터링하여 memberLi에 추가합니다.
      let filteredMembers = member.filter(item => item.name.startsWith(sortName));
      let memberLi = '';

      for (let i = 0; i < filteredMembers.length; i++) {
        let name = filteredMembers[i].name;
        let add = filteredMembers[i].add;
        let tel = filteredMembers[i].tel;
        memberLi += `
          <li>
            <div class="member_list_inner">
              <p class="title">${name}</p>
              <div class="member_list_info">
                <p class="member_list_info_item address">${add}</p>
                <p class="member_list_info_item tel">${tel}</p>
              </div>
            </div>
          </li>
        `;
      }

      // memberList에 내용을 추가합니다.
      memberList.innerHTML = memberLi;

    });
  });

</script>