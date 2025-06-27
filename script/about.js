$(document).ready(function(){


  let m_mobile =`<section class="about_m_cont2">
    <div class="about_cont_wrap">
      <div class="about_inner">
        <div class="about_item item1">
          <div>
            <img src="./images/about/about_cont1.jpg" alt="">
          </div>
          <div class="about_txt_box">
            <h4>수상내역</h4>
            <p>LG생활건강은 관련업계 주요기관들로부터 다양한<br> 
              상을 수상하며 역량을 인정받고 있습니다</p>
            <a href="#" title="수상내역"><img src="./images/button/btn_more_redline.png" alt="수상내역바로가기" class="btn_more"></a>
          </div>
        </div>

        <div class="about_item item2">
          <div class="about_cont2_img">
            <img src="./images/about/about_cont2.jpg" alt="">
          </div>
          <div class="about_txt_box">
            <h4>사업장소개</h4>
            <p>세계 최고 수준의 기술로 세계 최고 품질의 제품을<br>
              가장 안전하게 만들겠습니다</p>
            <a href="#" title="사업장소개"><img src="./images/button/btn_more_redline.png" alt="사업장소개바로가기" class="btn_more"></a>
          </div>
        </div>

        <div class="about_item item3">
          <div>
            <img src="./images/about/about_cont3.jpg" alt="">
          </div>
          <div class="about_txt_box">
            <h4>전국매장찾기</h4>
            <p>LG생활건강의 제품을 판매하는 백화점, 로드샵,<br>
              대형마트, 면세점 등 각 유통채널 별 매장을 만나보세요</p>
            <a href="#" title="전국매장찾기"><img src="./images/button/btn_more_redline.png" alt="전국매장찾기바로가기" class="btn_more"></a>
          </div>
        </div>

        <div class="about_item item4">
          <div>
            <img src="./images/about/about_cont4.jpg" alt="">
          </div>
          <div class="about_txt_box">
            <h4>인재채용</h4>
            <p>일을 즐기고, 생활을 즐기고, 꿈을 즐기는 일할 맛 나는<br> 
              직장 LG생활건강에서 당신의 꿈을 펼쳐보세요</p>
            <a href="#" title="인재채용"><img src="./images/button/btn_more_redline.png" alt="인재채용바로가기" class="btn_more"></a>
          </div>
        </div>
      </div>
    </div>
  </section>`;

    $('.about_cont2').after(m_mobile);


  /*회사연혁 년도 클릭 시 색상변경*/ 
$('div > ul > li > a').click(function(){
  console.log("dddd");
  $('div > ul > li > a').removeClass('active');
  $(this).addClass('active');

  /*회사연혁 년도 클릭 시 년도 변경*/ 
  let historyYear = $(this).attr('title');
  $('.about_container >.year_box > .year').html(historyYear + "~") ;
});


/*버튼 클릭시 이미지 변경*/

$('.about_cont1 .btn_more').hover(function(){
  $(this).attr('src','./images/button/btn_more_beige.png');
}, function(){
  $(this).attr('src','./images/button/btn_more.png');
}
);

$('.about_cont2 .btn_more').hover(function(){
  $(this).attr('src','./images/button/btn_more_red.png');
}, function(){
  $(this).attr('src','./images/button/btn_more_redline.png');
}
);

/*모바일*/ 
$('.about_m_cont2 .btn_more').hover(function(){
  $(this).attr('src','./images/button/btn_more_red.png');
}, function(){
  $(this).attr('src','./images/button/btn_more_redline.png');
}
);



});