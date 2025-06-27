<?php
  include('header_notice.php')
?>
<?php
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 폰트어썸
add_stylesheet('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">', 0);

// 스타일서식
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="../../project2/css/reset.css">', 1);
add_stylesheet('<link rel="stylesheet" href="../../project2/css/base.css">', 2);
add_stylesheet('<link rel="stylesheet" href="../../project2/css/common.css">', 3);


?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<section class="notice_lately">
    <h4 class="notice_h4">NOTICE</h4>
    <div class="notice_swiper">
      <div class="notice_swiper_wrapper">
        <div class="notice_swiper_slide">
          <div class="notice_lately_img">
            <a href="#" title="반짝반짝 페리오' 공연으로 차별적 고객경험 전파'">
              <img src="https://www.careshop.co.kr/ecm_upload/news/news_17155653777260.jpg" alt="반짝반짝 페리오 이미지">
            </a>
          </div>
          <div class="notice_lately_txt">
            <a href="#" title="반짝반짝 페리오' 공연으로 차별적 고객경험 전파'">
              <p class="notice_lately_sTitle">공연 관람 후 어린이 80% 이상 양치·손 씻기 습관 개선’</p>
              <h5 class="notice_lately_title">'반짝반짝 페리오' 공연으로 차별적 고객경험 전파</h5>
              <p class="notice_lately_p">LG생활건강은 신나는 음악과 율동으로 건강한 치아 위생 습관을 익히고 차별적인 고객경험을 체험하는 어린이 건강 뮤지컬 ‘반짝반짝 페리오’
                공연을 개최한다.
              </p>
            </a>
          </div>
        </div>
        <div class="notice_swiper_slide">
          <div class="notice_lately_img">
            <a href="#" title="“뉴진스 하니, 구찌뷰티의 미학을 완벽히 구현” 브랜디드 영상 공개'">
              <img src="https://www.careshop.co.kr/ecm_upload/news/news_17153164598080.jpg" alt="뉴진스 하니 브랜디드 영상 이미지">
            </a>
          </div>
          <div class="notice_lately_txt">
            <a href="#" title="“뉴진스 하니, 구찌뷰티의 미학을 완벽히 구현” 브랜디드 영상 공개'">
              <p class="notice_lately_sTitle">LG생활건강,</p>
              <h5 class="notice_lately_title">“뉴진스 하니, 구찌뷰티의 미학을 완벽히 구현” 브랜디드 영상 공개</h5>
              <p class="notice_lately_p">글로벌 명품 브랜드 ‘구찌뷰티’에서 걸그룹 뉴진스의 ‘하니’가 출연한 SNS 콘텐츠를 잇따라 공개하면서 MZ세대 마케팅을 강화하고 있다.
              </p>
            </a>
          </div>
        </div>
        <div class="notice_swiper_slide">
          <div class="notice_lately_img">
            <a href="#" title="바디케어 브랜드 '비클리닉스 론칭'">
              <img src="https://www.careshop.co.kr/ecm_upload/news/news_17150545711950.jpg" alt="비클리닉스 론칭 이미지">
            </a>
          </div>
          <div class="notice_lately_txt">
            <a href="#" title="바디케어 브랜드 '비클리닉스 론칭'">
              <p class="notice_lately_sTitle">LG생활건강,</p>
              <h5 class="notice_lately_title">바디케어 브랜드 '비클리닉스' 론칭</h5>
              <p class="notice_lately_p">LG생활건강은 얼굴 스킨케어 제품에 활용하는 고효능 성분을 바디케어 제품에 담는 글로벌 최신 트렌드에 발맞춘 새로운 바디케어 브랜드인
                ‘비클리닉스(b.clinicx)를 최근 선보였다.
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="notice_lately_btn">
      <img src="../../project2/images/button/arrow_left.png" alt="좌측 콘텐츠" class="notice_prev">
      <img src="../../project2/images/button/arrow_right.png" alt="우측 콘텐츠" class="notice_next">
    </div>
  </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      let notice_btn = $('.notice_lately_btn');
      let notice_Lbtn = $('.notice_prev');
      let notice_Rbtn = $('.notice_next');
      let notice_wrapper = $('.notice_swiper_wrapper');
      let notice_slide = $('.notice_swiper_silde');

      let i = 0;

      notice_Rbtn.mouseenter(function(){
        notice_Rbtn.attr('src', '../../project2/images/button/arrow_right_red.png')
      })
      notice_Rbtn.mouseleave(function(){
        notice_Rbtn.attr('src', '../../project2/images/button/arrow_right.png')
      })
      notice_Lbtn.mouseenter(function(){
        notice_Lbtn.attr('src', '../../project2/images/button/arrow_left_red.png')
      })
      notice_Lbtn.mouseleave(function(){
        notice_Lbtn.attr('src', '../../project2/images/button/arrow_left.png')
      })

      notice_Rbtn.click(function () {
        notice_btnR();
      })

      notice_Lbtn.click(function () {
        notice_btnL();
      })

      function notice_btnR() {
        if ($(window).width() >= 1025) {
          if (i == 0) {
            notice_wrapper.css('transform', 'translateX(-100%)');
            i++;
          } else if (i == 1) {
            notice_wrapper.css('transform', 'translateX(-200%)');
            i++;
          } else {
            notice_wrapper.css('transform', 'translateX(0%)');
            i = 0;
          }
        } else if ($(window).width() < 1025) {
          if (i == 0) {
            notice_wrapper.css('transform', 'translateX(-33.33%)');
            i++;
          } else if (i == 1) {
            notice_wrapper.css('transform', 'translateX(-66.66%)');
            i++;
          } else {
            notice_wrapper.css('transform', 'translateX(0%)');
            i = 0;
          }
        }
      };

      function notice_btnL() {
        if ($(window).width() >= 1025) {
          if (i == 2) {
            notice_wrapper.css('transform', 'translateX(-1220px)');
            i--;
          } else if (i == 1) {
            notice_wrapper.css('transform', 'translateX(0px)');
            i--;
          } else {
            notice_wrapper.css('transform', 'translateX(-2440px)');
            i = 2;
          }
        } else if ($(window).width() < 1025) {
          if (i == 2) {
            notice_wrapper.css('transform', 'translateX(-33.33%)');
            i--;
          } else if (i == 1) {
            notice_wrapper.css('transform', 'translateX(0px)');
            i--;
          } else {
            notice_wrapper.css('transform', 'translateX(-66.66%');
            i = 2;
          }
        }
      };


      let noticeTimer = setInterval(notice_btnR, 3000);

    }) //제이쿼리 끝
  </script>