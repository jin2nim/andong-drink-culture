// JavaScript Document
$(function () {
  //화면이 1024보다 작으면 윈도우를 다시 로드시켜라...
  $(window).resize(function () {
    if ($(this).width() < 1024) {
      location.reload();
    }
  });//resize이벤트...


  var $header = $('header');
  var navi = $('nav');
  var headerHeight = $header.outerHeight();

  //윈도우에 스크롤양이 헤더의 높이보다 크면 헤더에 클래스 추가 
  $(window).scroll(function () {
    var cur_sct = $(this).scrollTop();
    if (cur_sct > headerHeight) {
      $header.addClass('sticky');
    } else {
      $header.removeClass('sticky');
    }
  });//scroll

  //메뉴를 클릭하면 해당하는 아티클이 자동 애니메이트 
  navi.find('li').click(function () {
    var currentIdx = $(this).index();
    //console.log(currentIdx);
    if (currentIdx == 0) {
      $header.removeClass('sticky');
    } else {
      $header.addClass('sticky');
    }
    var attribute = $(this).find('a').attr('href');
    $('body, html').animate({ scrollTop: $(attribute).offset().top - headerHeight }, 500);
  });


  $('.Quik-link').find('li').click(function () {
    var currentIdx2 = $(this).index();
    if (currentIdx2 == 0) {
      $header.removeClass('sticky');
    } else {
      $header.addClass('sticky');
    }
    var attribute2 = $(this).find('a').attr('href');
    $('body, html').animate({ scrollTop: $(attribute2).offset().top - headerHeight }, 500);
  });


  $('.menu-btn').click(function () {
    $('nav').fadeIn();
  });

  $('.close-btn').click(function () {
    $('nav').hide();
  });






});//loading













