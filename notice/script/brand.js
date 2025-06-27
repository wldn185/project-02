$(document).ready(function(){

  // 브랜드 카테고리 선택시 선택한 항목의 콘텐츠만 보이게
  let brand_cont_title = $('.brand_cont_nav > ul > li > a');

  brand_cont_title.click(function(e){
    e.preventDefault();

    // 카테고리 클릭시 서식 적용/해제
    !brand_cont_title.removeClass('brand_act');
    $(this).addClass('brand_act');

    // 해당 카테고리 콘텐츠만 노출
    if($(this).parent().index()==0){
      $('.brand_gallery li').hide();
      $('.brand_gallery li').show();
    } else if($(this).parent().index()==1){
      $('.brand_gallery li').hide();
      $('.brand_cosmetic').show();
    } else if($(this).parent().index()==2){
      $('.brand_gallery li').hide();
      $('.brand_makeup').show();
    } else if($(this).parent().index()==3){
      $('.brand_gallery li').hide();
      $('.brand_conscious').show();
    } else if($(this).parent().index()==4){
      $('.brand_gallery li').hide();
      $('.brand_medical').show();
    } else if($(this).parent().index()==5){
      $('.brand_gallery li').hide();
      $('.brand_body').show();
    } else if($(this).parent().index()==6){
      $('.brand_gallery li').hide();
      $('.brand_man').show();
    } else{
      $('.brand_gallery li').hide();
      $('.brand_collect').show();
    }
  })

    // 모바일 일 때
    
      // 브랜드 셀렉트 옵션 커스텀
      console.log($(document).width());
      let brand_select_btn = $('.brand_select_btn');
      let brand_select_btn_ico = $('.brand_select_btn .fa-solid');
      let brand_select = $('.brand_cont_nav ul');
      let brand_option = $('.brand_cont_nav li');

      // 셀렉트 최상단 버튼 클릭시
      brand_select_btn.click(function(){
        brand_select.slideToggle();
        brand_select_btn_ico.toggle();
      })

      // 셀렉트 내 화장품 등 옵션 클릭시
      brand_option.click(function(){
        if($(document).width() < 768){
        brand_select.slideUp();
        brand_select_btn_ico.toggle();
        }
        let brand_btn_title = $(this).find('a').attr('title');
        brand_select_btn.find('p').html(brand_btn_title);
      })
  
      // 리사이징되었을 때 옵션이 잘 보이도록
      $(window).resize(function(){
        if($(document).width() >= 768){
          console.log($(document).width());
          brand_select.css('display', 'flex');
        }else{
          brand_select.css('display', 'none');
        }
      })

}) //제이쿼리 닫는 괄호