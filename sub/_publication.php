<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');

/*
#Category1
-년도별
-종류별

#년도별 - Category2 (총 27개)
-간행물 및 학위논문목록집
-외국신학학술잡지 종합목록
-D.D.C. 분류표
-사서인명록
-신학도서관
-신학문헌정보

#종류별 - Category2 (총 25개)
-한국신학관계석·박사학위 논문목록집
-신학문헌정보
-D.D.C. 분류표
-외국신학학술잡지 종합목록
-신학도서관
-사서인명록
-학위논문집
-해외박사학위논문('96)
-학위논문집 목차
*/
?>

<div id="publication" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'publication', 'publication'); ?>

  <div class="sub_contents">
    <div class="sub_title_box">
      <div class="container">
        <div class="wrapper">
          <p class="sub_title">
            한국신학대학도서관협의회에서 발간한 <br/>
            <span class="bold">간행물 및 논문</span>을 확인해보세요.
          </p>
        </div>
      </div>
    </div>
    <div class="sub-tab">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <button type="button" class="sub-tab-btn act">발행년도별</button>
            <button type="button" class="sub-tab-btn">종류별</button>
          </div>
        </div>
      </div>
    </div>

    <div class="sub-tab-ct publication-ct publication-ct01">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <div class="publication-ct-list">
              <p id="publication-ct-tit">간행물 및 학위논문 목록집</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">200(Religion) Class Dewey Decimal Classification</td>
                      <td>Dewey</td>
                      <td>1973</td>
                      <td>KTLA</td>
                      <td>신학문헌서지총서 제1집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국교회문헌분류법(K.T.L.C.)</td>
                      <td>김창의</td>
                      <td>1973</td>
                      <td>한국신학 도서관협의회</td>
                      <td>신학문헌서지 총서 제2집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위논문목록집 (1945~1977)</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1977년</td>
                      <td>도서출판 나눔</td>
                      <td>신학문헌서지 총서 제 3집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위논문목록집 (1945~1984)</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1984년</td>
                      <td>장로회신학 대학출판부</td>
                      <td>신학문헌서지 총서 제 5집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위논문목록집 (1945~1985)</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1985년</td>
                      <td>장로회신학 대학출판부</td>
                      <td>신학문헌서지 총서 제 6집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위논문목록집 (1945~1988)</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1988년</td>
                      <td>도서출판 나눔</td>
                      <td>신학문헌서지 총서 제 8집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위논문목록집 (1945~1989)</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1990년</td>
                      <td>도서출판 나눔</td>
                      <td>신학문헌서지 총서 제 9집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">학위논문집('96) :장로회신학대학교신학대학원(96-8)</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1996년</td>
                      <td>한국신학 도서관협의회</td>
                      <td>신학문헌서지 총서 제11집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">해외박사학위논문('96) : 소장목록집</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1996년</td>
                      <td>서울 정보시스템</td>
                      <td>신학문헌서지 총서 제11집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">학위논문집 목차</td>
                      <td>한국신학도서관협의회 편</td>
                      <td></td>
                      <td>한국신학 도서관협의회</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">외국신학학술잡지 종합목록</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">외국신학학술잡지 종합목록</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1992년</td>
                      <td>한국신학 도서관협의회</td>
                      <td>신학문헌서지총서 제10집</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">D.D.C. 분류표</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">D.D.C. 분류표(종교분야:2000) : 번역·원문대조표</td>
                      <td>멜빌 듀이 저 한국신학도서관협의회 옮김</td>
                      <td>1982년</td>
                      <td>성광문화사</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">사서인명록</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">한국신학도서관사서인명록 (1994년)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1995년 1월</td>
                      <td>한국신학 도서관협의회</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">신학도서관</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">신학도서관 : July 1994</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1994년 6월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제1권 2호 통권2호</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학도서관 : Oct./Jan. 1994/1995</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1995년 1월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제1권 3,4호 통권3호</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">신학문헌정보</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">신학문헌정보 1979 (가을) : 뉴우스, 신학도서관 신착도서목록</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1979년 12월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제2권 2호 제10집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1981 (여름) : 뉴우스, 도서관 순회, 신학도서관 신착도서목록</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1981년 7월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제5권 1호 제11집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1983 : 신학도서관신착도서목록(양서)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1983년</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제14집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1983 : 신학도서관신착도서목록(양서)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1984년 1월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제15집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1983 : 신학도서관신착도서목록 (양서 : 철학, 종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1984년 3월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제16집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1984 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1984년 8월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제17집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1986 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1986년 10월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제23집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1988 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1989년 3월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제28집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1989 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1989년 6월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제29집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1989 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1989년 10월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제30집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1990 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1990년 4월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제31집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1990 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1990년 12월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제32집</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sub-tab-ct publication-ct publication-ct02">
      <div class="container">
        <div class="wrapper">
          <div class="inner">
            <div class="publication-ct-list">
              <p id="publication-ct-tit">한국신학관계석·박사학위 논문목록집</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위 논문목록집 (1945~1977)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1977년</td>
                      <td>도서출판나눔사</td>
                      <td>신학문헌서지총서 제 3집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위 논문목록집 (1945~1984)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1984년</td>
                      <td>장로회신학대학출판부</td>
                      <td>신학문헌서지총서 제 5집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위 논문목록집 (1945~1985)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1985년</td>
                      <td>장로회신학대학출판부</td>
                      <td>신학문헌서지총서 제 6집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위 논문목록집 (1945~1988)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1988년</td>
                      <td>도서출판나눔사</td>
                      <td>신학문헌서지총서 제 8집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">한국신학관계석·박사학위 논문목록집 (1945~1989)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1990년</td>
                      <td>도서출판나눔사</td>
                      <td>신학문헌서지총서 제 9집</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">신학문헌정보</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">신학문헌정보 1979 (가을) : 뉴우스, 신학도서관 신착도서목록</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1979년 12월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제2권 2호 제10집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1981 (여름) : 뉴우스, 도서관 순회, 신학도서관 신착도서목록</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1981년 7월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제5권 1호 제11집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1983 : 신학도서관신착도서목록(양서)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1983년</td>
                      <td>한국신학도서관협의회</td>
                      <td>제14집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1983 : 신학도서관신착도서목록(양서)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1984년 1월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제15집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1983 : 신학도서관신착도서목록 (양서 : 철학, 종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1984년 3월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제16집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1984 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1984년 8월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제17집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1986 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1986년 10월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제23집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1988 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1989년 3월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제28집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1989 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1989년6월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제29집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1989 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1989년10월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제30집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1990 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1990년4월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제31집</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학문헌정보 1990 : 신학도서관 신착도서목록 (양서:종교, 교회음악분야)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1990년 12월</td>
                      <td>한국신학도서관협의회</td>
                      <td>제32집</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">D.D.C. 분류표</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">D.D.C. 분류표(종교분야:2000) : 번역·원문대조표</td>
                      <td>멜빌 듀이 저 한국신학도서관협의회 옮김</td>
                      <td>1982년</td>
                      <td>성광문화사</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">외국신학학술잡지 종합목록</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">외국신학학술잡지 종합목록</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1992년</td>
                      <td>한국신학도서관협의회</td>
                      <td>신학문헌서지총서 제10집</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">신학도서관</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">신학도서관 : July 1994</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1994년 6월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제1권 2호 통권2호</td>
                    </tr>
                    <tr>
                      <td class="ta_l">신학도서관 : Oct./Jan. 1994/1995</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1995년 1월</td>
                      <td>한국신학 도서관협의회</td>
                      <td>제1권 3,4호 통권3호</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">사서인명록</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">한국신학도서관사서인명록(1994년)</td>
                      <td>한국신학도서관협의회 편</td>
                      <td>1995년 1월</td>
                      <td>한국신학 도서관협의회</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">학위논문집</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">학위논문집('96) :장로회신학대학교신학대학원 (96-8)</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1996년</td>
                      <td>한국신학도서관협의회</td>
                      <td>신학문헌서지총서 제11집</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">해외박사학위논문('96)</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">해외박사학위논문('96) : 소장목록집</td>
                      <td>한국신학 도서관협의회 편</td>
                      <td>1996년</td>
                      <td>서울정보시스템</td>
                      <td>신학문헌서지 총서 제11집</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="publication-ct-list">
              <p id="publication-ct-tit">학위논문집 목차</p>
              <div class="publication-ct_wrap">
                <table class="style-tb">
                  <thead>
                    <tr>
                      <th style="width: 40%;">서명</th>
                      <th style="width: 15%;">저자</th>
                      <th style="width: 15%;">발행년도</th>
                      <th style="width: 15%;">출판사</th>
                      <th style="width: 15%;">비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta_l">학위논문집 목차</td>
                      <td>한국신학도서관협의회 편</td>
                      <td></td>
                      <td>한국신학도서관협의회</td>
                      <td></td>
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
</div>