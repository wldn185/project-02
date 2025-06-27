// common.js

$(document).ready(function () {
  //변수선언
  //헤더 관련 변수
  let header = $('header'),
    h1 = $('h1'),
    gnb = $('.gnb'),
    gnb_list = $('.gnb li'),
    gnb_a = $('.gnb > ul > li > a'),
    h_nav = $('.h_nav'),
    search = $('.fa-magnifying-glass'),
    search_text = $('#search_text'),
    globe = $('.h_lang .fa-globe'),
    lang = $('.h_lang > ul li'),
    sub_menu_list = $('.sub_rightbox > ul > li > a'),
    sub_menu_inner = $('.sub_rightbox_inner');

  //태블릿, 모바일 변수
  let m_gnb_list = $('.m_gnb_inner > li > a');

  m_gnb_list.click(function(){
    // 하위메뉴 열고 닫기
    m_gnb_list.next().slideUp();
    $(this).next().slideDown();
    // 꺽쇄 위아래로 변경
    m_gnb_list.children().css({'transform':'rotate(0deg)'});
    $(this).children().css({'transform':'rotate(180deg)'});
  })
  

  let w_size = $(window).width(); //윈도우 너비값
  //PC 해상도일 경우
  
    // 0. 헤더
    // 헤더에 마우스오버 시 이벤트
    header.mouseenter(function () {
      if (w_size >= 1025) {
        header.css({
          'background-color': '#fff'
        });
  
        h1.find('img').attr({
          'src': './images/logo2.png',
          'style': 'width:200px;'
        });
        gnb_a.css({ 'color': '#333' });
        h_nav.css({ 'color': '#333' });
        $('.h_nav > ul > li > a, .h_nav > ul > li > i').css({ 'color': '#333' });
      } else if (w_size >= 768) { //태블릿 해상도일 경우
        header.css({
          'background-color': 'rgba(0,0,0,.25)',
          'border-bottom': '1px solid transparent'
        });
      }else if (w_size <= 767) { //모바일해상도일 경우
        header.css({
          'background-color': 'rgba(0,0,0,.25)',
          'border-bottom': '1px solid transparent'
        });
      }
    })
      .mouseleave(function (e) {
        if (w_size >= 1025) {
          header.css({
            'background-color': 'transparent',
            'color': '#333',
            'border-bottom': "1px solid #fff"
          });
          $('.sub_menu').css({
            //'background-color':'transparent',
            //'border-top': "1px solid #fff"
          });
          h1.find('img').attr({
            'src': './images/logo.png',
            'style': 'width:200px;'
          });
          gnb_a.css({ 'color': '#fff' });
          h_nav.css({ 'color': '#fff' });
          $('.h_nav > ul > li > a, .h_nav > ul > li > i').css({ 'color': '#fff' });
  
          $('.sub_leftbox, .vertical_line, .sub_rightbox, .sub_rightbox_inner').stop().fadeOut("600");
        } else if (w_size >= 768) { //태블릿 해상도일 경우
          header.css({
            'background-color': 'transparent',
            'border-bottom': "1px solid #fff"
          });
        }else if (w_size <= 767) { //모바일해상도일 경우
          header.css({
            'background-color': 'transparent',
            'border-bottom': "1px solid #fff"
          });
        }
      });


  //탑버튼 숨기기
  //$('.btn_top').hide();
  // 스크롤이벤트
  $(window).scroll(function () {
    let scrollT = $(this).scrollTop();
    let second_sect_offset = $('main section:nth-of-type(2)').offset().top;
    let innerHeight = $(window).innerHeight();
    let scrollHeight = $('body').prop('scrollHeight');

    //헤더 스크롤 내리면 서식 변경
    if (scrollT >= 100) {
      header.css({
        'background-color': 'rgba(0,0,0,.25)',
        'border-bottom': '1px solid transparent'
      });
    } else {
      header.css({
        'background-color': 'transparent',
        'border-bottom': '1px solid var(--color_sub2)'
      });
    }

    // 탑버튼
    // 1. 탑버튼 숨기고 특정위치에서부터 나타내기
    if(scrollT <= second_sect_offset+100){
      $('.btn_top').stop().fadeOut();
    }else{
      $('.btn_top').stop().fadeIn();
    }

    // 2. 탑버튼 푸터 만나면 위치값 바뀌게 하기
    if(w_size >=1025){ //pc해상도일 경우
      if(scrollT + innerHeight >= scrollHeight){
        $('.btn_top').css('bottom',$('footer').height()+10);
      }else{
        $('.btn_top').css('bottom','60px');
      }
    }else if(w_size >= 768){ //태블릿해상도일 경우
      if(scrollT + innerHeight >= scrollHeight){
        // $('.btn_top').css('bottom','360px');
        $('.btn_top').css('bottom',$('footer').height()+10);
      }else{
        $('.btn_top').css('bottom','80px');
      }
    }else if(w_size <= 767){ //모바일해상도일 경우
      if(scrollT + innerHeight >= scrollHeight){
        $('.btn_cs').css('bottom',$('footer').height()+70); // 상담사버튼
        $('.btn_top').css('bottom',$('footer').height()+10);
      }else{
        $('.btn_cs').css('bottom','140px');
        $('.btn_top').css('bottom','80px');
      }

      if(scrollT <= second_sect_offset+100){
        $('.btn_cs').stop().fadeOut();
      }else{
        $('.btn_cs').stop().fadeIn();
      }
    }
  })
  


  //서브메뉴 모두 숨기기
  //$('.sub_menu').hide();

  //메인메뉴목록 오버 이벤트
  gnb_a.mouseover(function () {
    //gnb_a.next().stop().hide();
    $(this).next().stop().fadeIn();
    header.stop().css({
      'background-color': '#fff',
      'border-bottom': "#333"
    });
    $('.sub_menu').css({
      //'background-color':'transparent',
      'border-top': "#333"
    });
    $(this).next().css({ 'z-index': '10' });
    gnb_a.css({ 'color': 'var(--color_sub3)' });
    $(this).css({ 'color': 'var(--color_main)' });

    $('.sub_leftbox, .vertical_line, .sub_rightbox, .sub_rightbox_inner').fadeIn();
  })
  .mouseout(function () {
    if ($(this) == gnb_a.eq(0)) {
      $(this).next().css({ 'z-index': '2' });
    } else {
      $(this).next().css({ 'z-index': '1' });
    }
  });
  $('.gnb > ul, .sub_menu').mouseleave(function () {
    gnb_a.next().stop().fadeOut("900");
  })

  //2단내비게이션 내부 목록 클릭 이벤트
  sub_menu_list.click(function () {
    $(this).parent().siblings().find('.sub_rightbox_inner').removeClass('act');
    $(this).next().addClass('act');
  })

  //viewmore 오버 이벤트
  $('.btn_viewmore img').mouseenter(function(){
    $(this).attr('src', './images/button/btn_viewmore_red.png');
  })
  .mouseleave(function(){
    $(this).attr('src', './images/button/btn_viewmore.png');
  })


  //로그인, 검색창, 언어설정
  //검색창
  search.click(function () {
    //alert('aa');

    search_text.css({ 'display': 'block' });
    search_text.animate({ 'width': '150px' }, 300);
    $(this).css({ 'color': 'var(--color_main)' });
    $('.h_nav > ul > li:first-child').css({ 'transform': 'translateX(-120px)' });
  })
  //언어설정
  //globe 아이콘 클릭 시 이벤트
  globe.click(function () {
    lang.toggle();
  })
  //하위메뉴 오버시 이벤트
  lang.hover(function () {
    lang.removeClass('h_lang_act');
    $(this).addClass('h_lang_act');
  })


  // 푸터영역
  // 패밀리사이트
  $('.f_select').on('click', function(){
    $(this).toggleClass('selected');
    if($(this).hasClass('selected')){
      $('.f_list').slideDown();
    }else{
      $('.f_list').slideUp();
    }
  });
  // 탑버튼, 상담사버튼 색깔변경
  $('.btn_top').hover(function(){
    $(this).find('img').attr('src','./images/button/btn_top_red.png');
  }, function(){
    $(this).find('img').attr('src','./images/button/btn_top.png');
  });
  $('.btn_cs img').hover(function(){
    $(this).attr('src','./images/button/btn_cus_red.png');
  }, function(){
    $(this).attr('src','./images/button/bnt_cus.png');
  });
  // 상담사버튼 클릭시 전화번호
  $('.btn_cs img').click(function(){
    $('.cs_con').toggle();
  });


})