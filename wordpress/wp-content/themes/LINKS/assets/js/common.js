var ua = {};
ua.name = window.navigator.userAgent.toLowerCase();
ua.isiPhone = ua.name.indexOf('iphone') >= 0;
ua.isAndroid = ua.name.indexOf('android') >= 0;
ua.isTouch = ('ontouchstart' in window);
$(function(){
    var allH = $('.content-wrap').height();
    var footerH = $('.footer').height();
    $(window).on('load resize',function(){
        w = window.innerWidth ? window.innerWidth: $(window).width();
        h = window.innerHeight ? window.innerHeight: $(window).height();
    });
    if(ua.isTouch){
        w = screen.width;
        h = screen.height;
    } else {
        w = window.innerWidth ? window.innerWidth: $(window).width();
        h = window.innerHeight ? window.innerHeight: $(window).height();
    }
   
    //ヘッダーナビ
    $(document).on('click', '.open-close', function(){
        $(this).toggleClass('active').next().slideToggle(300);
    });
    $(document).on('click', '.sub-list-menu', function(){
        $(this).toggleClass('active').next().slideToggle(300);
    });
});

//navhoverで画像を暗く
$(document).ready(function () {
  $(".hover").hover(
  function () {
  $(".gray").addClass("gray_active");
  },
  function () {
  $(".gray").removeClass("gray_active");
  }
  );
  });

//header表示
var coconalaIndex = (function(){
  var viewMode = '';

  function _init() {   
    fixedMenu();
  }

  function fixedMenu() {
    $(window).scroll(function() {
      var scrollVal = $(window).scrollTop();

      if(scrollVal > 450 && !$('.header-fix').hasClass('is-show')) {
        $('.header-fix').addClass('is-show');
      } else if(scrollVal <= 450 && $('.header-fix').hasClass('is-show')) {
        $('.header-fix').removeClass('is-show');
      }
    });
  }

  return {
    init : _init
  };

}());

$(function(){
  coconalaIndex.init();
});


/*scroll下*/
$(function(){
	$(window).on('load scroll',function (){
		$('.animation').each(function(){
			//ターゲットの位置を取得
			var target = $(this).offset().top;
			//スクロール量を取得
			var scroll = $(window).scrollTop();
			//ウィンドウの高さを取得
			var height = $(window).height();
			//ターゲットまでスクロールするとフェードインする
			if (scroll > target - height){
				//クラスを付与
				$(this).addClass('active');
			}
		});
	});
});

/*scroll右横から*/
$(function(){
  $('.animation02 .item-right').addClass('move');
  $(window).scroll(function(){
    $(".animation02").each(function(){
      var imgPos = $(this).offset().top;    
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/5){
        $(this).find(".item-right").removeClass('move');
      } else {
        $(this).find(".item-right").addClass('move');
      }
    });
  });
});

/*scroll左横から*/
$(function(){
  $('.animation02 .item-left').addClass('move');
  $(window).scroll(function(){
    $(".animation02").each(function(){
      var imgPos = $(this).offset().top;    
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/5){
        $(this).find(".item-left").removeClass('move');
      } else {
        $(this).find(".item-left").addClass('move');
      }
    });
  });
});

//スクロールしたらページトップボタンを表示する
$(function() {
  var topBtn = $('#pageTop');
  //ボタンを非表示にする
  topBtn.hide();
  //スクロールしてページトップから100に達したらボタンを表示
  $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
　　　　　　　//フェードインで表示
          topBtn.fadeIn();
      } else {
　　　　　　　//フェードアウトで非表示
          topBtn.fadeOut();
      }
  });
});

//background fixedが他のsectionで表示しないためのjQuery
jQuery(function($){
	$(window).on('load scroll resize', function() {
		//　「section.top-page__link」が存在したら発火
		if($('section.top-page__link').length){
		    add_class_in_scrolling($('section.top-page__link'));
		}
	});
	// スクロールで要素が表示されている時にclassを付与する
	function add_class_in_scrolling(target) {
	    //　指定した要素の次の要素
	    var nextElement = $('section.top-page__coating');
	    var winScroll = $(window).scrollTop();
	    var winHeight = $(window).height();
	    //　ウィンドウの最下部の位置取得
	    var scrollPos = winScroll + winHeight;
	    //　指定した要素が画面内に入ったらclass付与して出たら削除
	    if(target.offset().top - 100 < scrollPos && nextElement.offset().top + winHeight + 100 > scrollPos) {
	        target.addClass('show');
	    }else{
	        target.removeClass('show');//showにfixedを指定
	    }
	}
});

//sp用のメニューをスクロールさせる時にbodyを動かなくするためにclassを付ける
jQuery(function($){
  var scrollPos;//グローバルで初期かしておかないと上にもどっちゃう
  $('.open-close').on('click', function() {
      if($('body').hasClass('fix')){
          $('body').removeClass('fix').css('top',0 + 'px');
          window.scrollTo( 0 , scrollPos );//初期化
      }else{
          scrollPos = $(window).scrollTop();//現在のスクロール位置
          $('body').addClass('fix').css('top',-scrollPos + 'px');
      }
  });
});


$(window).scroll(function(){
	$(".passing").each(function(){
		var imgPos = $(this).offset().top;    
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > imgPos - windowHeight + windowHeight / 4){
			$(this).addClass('move');
		}
	});
});

//animation passing 画面に入ったら表示する
$(window).scroll(function(){
	$(".passing").each(function(){
		var imgPos = $(this).offset().top;    
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > imgPos - windowHeight + windowHeight / 4){
			$(this).addClass('move');
		}
	});
});

var $header = $('.header');
var HEADER_FIXED_POSITION = 0;
function scrollHandler(){
  if($(this).scrollTop() > HEADER_FIXED_POSITION){
      $header.addClass('is-fixed');
  }else{
      $header.removeClass('is-fixed');
  }
}
$(window).on('scroll', scrollHandler);

//faq開閉させる
		$(function(){
			$('.list_faq > dt').on('click',function(){
			  $(this).next('dd').slideToggle();
			  $(this).toggleClass('active');
			});
		 });

//スライダー設定
$(function(){
$(".slider").slick({
  autoplay: true,
  infinite: true,
  dots: false, //ドットのナビゲーションを表示
  slidesToShow: 3, //表示するスライドの数
  slidesToScroll: 1, //スクロールで切り替わるスライドの数
  responsive: [
    {
      breakpoint: 1023, // 600〜1023px
      settings: {
        slidesToShow: 2, //表示するスライドの数
        slidesToScroll: 1, //スクロールで切り替わるスライドの数
        dots: true, //ドットのナビゲーションを表示
        rows: 1,
        slidesPerRow: 1,
      },
    },
    {
      breakpoint: 768, // 600〜1023px
      settings: {
        slidesToShow: 1, //表示するスライドの数
        slidesToScroll: 1, //スクロールで切り替わるスライドの数
        dots: true, //ドットのナビゲーションを表示
        rows: 1,
        slidesPerRow: 1,
      },
    },
  ],
  }).on('setPosition', function (event, slick) {
    slick.$slides.css('height', slick.$slideTrack.height() + 'px');
  });
});