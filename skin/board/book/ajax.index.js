import { formatDate } from '/ktla-dev/source/js/functions.js';

const BoardDataIndex = async(vowel, event) => {
  if(vowel == 'all') {
    location.href = '/ktla-dev/book';
  }

  $(".consonant_category_ul li a, .consonant_category_ul li button").removeClass("active");

  if(event !== null) {
    event.target.classList.add("active");
  }

  let encodedVowel = encodeURIComponent(vowel);
  let url = `/ktla-dev/api/ajax.korean_index.php?bo=book&vowel=${encodedVowel}`;
  let response = await fetch(url);
  let data = await response.json();
  const postListWrap = $("#bo_tb_body");
  let postListHtml = "";

  data?.map((post,index) => {
    postListHtml += `
    <tr class="">
      <td class="td_num2">${index+1}</td>

      <td class="td_subject mo_td_view">
        
        <a href="/ktla-dev/book/${post.wr_id}" class="bo_tit">${post.wr_subject}</a>

        <div class="mo_view mo_contents">
          <ul class="i-col-0 bo_info">
            <li><i class="fa fa-user-o" aria-hidden="true"></i><span class="sv_member">${post.wr_name}</span></li>
            <li><i class="fa fa-eye" aria-hidden="true"></i>1</li>
            <li><i class="fa fa-clock-o" aria-hidden="true"></i>${post.wr_datetime}</li>
          </ul>
        </div>
      </td>
      <td class="td_name"><span class="sv_member">${post.wr_name}</span></td>
      <td class="td_datetime">${formatDate(post.wr_datetime,'-')}</td>
    </tr>
    `;
  });
  
  $(".pg_wrap").hide();

  if(postListHtml){
    postListWrap.html(postListHtml);
  }else{
    postListWrap.html(`<tr><td colspan="4" class="empty_table">게시물이 없습니다.</td></tr>`);
  }
}

// 모듈 내 함수를 전역 스코프로 노출
window.BoardDataIndex = BoardDataIndex;