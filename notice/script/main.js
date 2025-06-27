$(document).ready(function(){

  //1. 메인슬라이드

  //2. 회사소개 섹션
  let about = $('.sect2_about > .main_inner');
  let move = about.find('.sect2_move');

  //회사소개 이미지 숨기기
  move.hide();
  $(window).scroll(function () {
    let scroll = $(this).scrollTop(); //세로스크롤 값
    let main_slide_offset = $('.sect1_main_slide').offset().top();

    //스크롤되면 이미지 나타나기, 패럴랙스 스크롤
    if (scroll >= main_slide_offset + 300) {
      move.fadeIn();
      move.css({ "top": scroll / 3 + "px" });
    } else {
      move.fadeOut();
    }
  })

  //3. esg 섹션
  let esg_box = $('.esg_box');

  esg_box.mouseenter(function () {
    $(this).addClass('esg_box_hover');
    $(this).siblings('.esg_box').css({ "width": "27.85%" });
    // $(this).siblings('.esg_box').css({"background":"blue"});
    //console.log($(this).width());
    //console.log($(this).siblings().width());
    //console.log($(this).siblings('.esg_box'));
  })
  esg_box.mouseleave(function () {
    esg_box.removeClass('esg_box_hover');
    esg_box.css("width", "33.3%");
  })

  //4. 브랜드 섹션
  // 슬라이드 구현
  let wrapper = $('.brand .slide-wrapper');
  let slide_first = $('.brand .slide:first-child');
  let slide_last = $('.brand .slide:last-child');

  slide_last.insertBefore(slide_first);
  // wrapper.css('left', '-435px');

  function slideFlow() {
    let wrapper = $('.brand .slide-wrapper')
    let slide_first = $('.brand .slide:first-child');
    let slide_last = $('.brand .slide:last-child');

    wrapper.stop().animate({ "left": "-870px" }, 500, function () {
      slide_first.insertAfter(slide_last);
      console.log($('.brand .slide').eq(3));
      $('.brand .slide').eq(3).addClass('focus_slide').siblings().removeClass('focus_slide');
      wrapper.css('left', '-435px');
    })
  }
  // let Timer = setInterval(slideFlow, 4000);









})