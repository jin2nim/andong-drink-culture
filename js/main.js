// JavaScript Document
$(function () {
  //화면이 1024보다 작으면 윈도우를 다시 로드시켜라...
  // $(window).resize(function () {
  //   if ($(this).width() <= 1024) {
  //     location.reload();
  //   }
  // });
  //resize이벤트...



  $('.menu-btn').click(function () {
    $('nav').fadeIn();
  });

  $('.close-btn').click(function () {
    $('nav').hide();
  });


  // 스크롤 시 헤더 고정
  var $header = $('header');
  var navi = $('nav');
  var headerHeight = $('header').outerHeight(); //헤더높이를 자동 계산 outerHeight(); 

  // 윈도우의 스크롤 양이 헤더의 높이보다 크면 헤더에 클래스 추가
  
  $(window).scroll(function(){
  var cursct = $(this).scrollTop(); //윈도우가 스크롤 되는 양을 변수에 저장
  if( cursct > headerHeight ) {
    $header.addClass('sticky');
    } else{
      $header.removeClass('sticky');   
    }
  });

  // 메뉴를 클릭하면 해당하는 아티클이 자동 애니메이트
  navi.find('li').click(function(){
    var attribute = $(this).find('a').attr('href');
    $('body,html').animate({ scrollTop: $(attribute).offset().top - headerHeight});
  });//클릭

  // 푸터에 퀵링크 메뉴를 클릭하면 해당하는 아티클 자동 애니메이션

  $('.quick-link li').click(function(){
    var attribute = $(this).find('a').attr('href');
    $('body,html').animate({ scrollTop: $(attribute).offset().top - headerHeight});
}); //클릭이벤트 
    
});//loading













