$(document).ready(function(){





  let w_size = $(window).width();

  console.log(w_size);

  //1. 메인슬라이드
  let main_slidebox = $('.main_slidebox');
  let i = 0;
  
  let l_btn = $('.main_slide_lnr_btn img:nth-child(2)');
  let r_btn = $('.main_slide_lnr_btn img:nth-child(3)');
  let pause_btn = $('.main_slide_btn > img');
  let slide_c_btn = $('.main_slide_c_btn span');

  //슬라이드 이동 함수
  function mainSlide(){
    slide_c_btn.stop().removeClass('main_slide_on');
    main_slidebox.stop().removeClass('act');

    if(i==2){ 
      i=0;  
    }else{ 
      i++; 
    }
    slide_c_btn.eq(i).stop().addClass('main_slide_on');
    main_slidebox.eq(i).stop().addClass('act');
  }
  function mainSlide2(){
    slide_c_btn.stop().removeClass('main_slide_on');
    main_slidebox.stop().removeClass('act');

    if(i==0){ 
      i=2;  
    }else{ 
      i--; 
    }
    slide_c_btn.eq(i).stop().addClass('main_slide_on');
    main_slidebox.eq(i).stop().addClass('act');
  }
  //슬라이드 오토플레이
  let Timer =setInterval(mainSlide , 3000);

  // 좌우버튼
  l_btn.click(function(){
    clearInterval(Timer);
    mainSlide2();
  })

  r_btn.click(function(){
    clearInterval(Timer);
    mainSlide();
  })
  //멈춤버튼
  pause_btn.click(function(){
    let video1 = $('.sect1_main_slide video').get(0);
    let video2 = $('.sect1_main_slide video').get(1);
    let video3 = $('.sect1_main_slide video').get(2);

    clearInterval(Timer);
    if($(this).attr('src')=='./images/button/btn_pause.png'){
      $(this).attr('src', './images/button/btn_play.png');

      video1.pause();
      video2.pause();
      video3.pause();
    }else if($(this).attr('src')=='./images/button/btn_play.png'){
      $(this).attr('src', './images/button/btn_pause.png');

      video1.play();
      video2.play();
      video3.play();

      Timer =setInterval(mainSlide , 6000);
    }
  })

  //2. 회사소개 섹션
  let about = $('.sect2_about > .main_inner');
  let move = about.find('.sect2_move img');

  //회사소개 이미지 숨기기
  move.hide();
  $(window).scroll(function () {
    let scroll = $(this).scrollTop(); //세로스크롤 값
    let sect2_offset = $('.sect2_about').offset().top;
    let h2_offset = $('.sect2_about h2').offset().top;
    
    console.log(sect2_offset);
    console.log(h2_offset);
    //스크롤되면 이미지 나타나기, 패럴랙스 스크롤
    if(w_size >=1025){ //pc해상도일 경우
      // 이미지 변경
      if(scroll<300){
        move.stop().fadeOut();
      }else if(scroll >= 300 && scroll<=500){
        move.stop().fadeOut();
        move.eq(0).stop().fadeIn();
        move.css({ "top": scroll / 3 + "px" });
      }else if (scroll > 500 && scroll<=900) {
        move.stop().fadeOut();
        move.eq(1).stop().fadeIn();
        move.css({ "top": scroll / 3 + "px" });
      }else if(scroll>900 && scroll<=h2_offset){
        move.stop().fadeOut();
        move.eq(2).stop().fadeIn();
        move.css({ "top": scroll / 3 + "px" });
      }
      else if(scroll > h2_offset){
          //move.fadeOut();
      }

    }else if(w_size >= 768){ //태블릿해상도일 경우
      // 이미지 변경
      if(scroll<300){
        move.stop().fadeOut();
      }else if(scroll >= 200 && scroll<=500){
        move.stop().fadeOut();
        move.eq(0).stop().fadeIn();
        move.css({ "top": scroll / 2.5 + "px" });
      }else if (scroll > 200 && scroll<=700) {
        move.stop().fadeOut();
        move.eq(1).stop().fadeIn();
        move.css({ "top": scroll / 2.5 + "px" });
      }else if(scroll>700 && scroll<=h2_offset){
        move.stop().fadeOut();
        move.eq(2).stop().fadeIn();
        move.css({ "top": scroll / 2.5 + "px" });
      }
      else if(scroll > h2_offset){
          //move.fadeOut();
      }
  
    }else if(w_size <= 767){ //모바일해상도일 경우
      // 이미지 변경
      if(scroll<300){
        move.stop().fadeOut();
      }else if(scroll >= 300 && scroll<=400){
        move.stop().fadeOut();
        move.eq(0).stop().fadeIn();
        move.css({ "top": scroll / 2.5 + "px" });
      }else if (scroll > 400 && scroll<=600) {
        move.stop().fadeOut();
        move.eq(1).stop().fadeIn();
        move.css({ "top": scroll / 2.5 + "px" });
      }else if(scroll>600 && scroll<=h2_offset){
        move.stop().fadeOut();
        move.eq(2).stop().fadeIn();
        move.css({ "top": scroll / 2.5 + "px" });
      }
      else if(scroll > h2_offset){
          //move.fadeOut();
      }
    }
      
  })

  //3. esg 섹션
  let esg_box = $('.esg_box');
  let esg_btn = $('.esg_box img');

  if(w_size >=1025){ //pc해상도일 경우
    //박스오버시 너비 변경 
    esg_box.mouseenter(function () {
      $(this).css({ 
        "width": "44.3%" ,
        "filter":"grayscale(0.4)"
      });
      $(this).siblings('.esg_box').css({ "width": "27.85%" });
    })
    .mouseleave(function () {
      esg_box.css({
        "width": "33.3%",
        "filter":"grayscale(0.8)"
      });
    });
  }else if(w_size >= 768){ //태블릿해상도일 경우
    //박스오버시 높이 변경 
    esg_box.mouseenter(function () {
      $(this).css({ 
        "height": "44.3%" ,
        "filter":"grayscale(0.4)"
      });
      $(this).siblings('.esg_box').css({ "height": "27.85%" });
    })
    .mouseleave(function () {
      esg_box.css({
        "height": "33.3%",
        "filter":"grayscale(0.8)"
      });
    });
  }else if(w_size <= 767){ //모바일해상도일 경우
    //박스오버시 높이 변경 
    esg_box.mouseenter(function () {
      $(this).css({ 
        "height": "44.3%" ,
        "filter":"grayscale(0.4)"
      });
      $(this).siblings('.esg_box').css({ "height": "27.85%" });
    })
    .mouseleave(function () {
      esg_box.css({
        "height": "33.3%",
        "filter":"grayscale(0.8)"
      });
    });
  }

  
  //버튼 오버시 색상 변경
  esg_btn.mouseenter(function(){
    $(this).attr('src', './images/button/btn_more_red.png');
  })
  .mouseleave(function(){
    $(this).attr('src', './images/button/btn_more_beige.png');
  })


  //4. 브랜드 섹션
  



  //6. 공지사항 섹션
  let sect6_more_btn = $('.sect6_board .board_leftbox a img');
  //버튼 오버시 이벤트
  sect6_more_btn.mouseenter(function(){
    $(this).attr('src', './images/button/btn_more_beige.png');
  })
  .mouseleave(function(){
    $(this).attr('src', './images/button/btn_more.png');
  })






})