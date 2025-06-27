$(document).ready(function(){

  // esg선택옵션
  $('.esg_select').on('click', function(){
    $(this).toggleClass('selected');
    if($(this).hasClass('selected')){
      $('.esg_select_list').slideDown();
    }else{
      $('.esg_select_list').slideUp();
    }
  });

  // esg 탭
  let tab_mn = $(".tab_con > ul > li > a");

  tab_mn.click(function(e){
    e.preventDefault();
    $('.con').fadeOut();
    $(this).next().fadeIn();

    tab_mn.removeClass('act');
    $(this).addClass('act');
  });

  // esg 보고서
  $(window).scroll(function(){
    let pos = $(document).scrollTop();
    console.log(pos);

    if(pos >= 1200){
      $('.report1').animate({'opacity':'1'},1000);
    }
    if(pos >= 1500){$('.report2').animate({'opacity':'1'},1000);}    
    
  });

  // 마우스오버시 더보기
  $('.esg_report .more').hover(function(){
    $(this).find('img').attr('src','./images/button/btn_more_red.png');
  }, function(){
    $(this).find('img').attr('src','./images/button/btn_more_redline.png');
  });

  
});