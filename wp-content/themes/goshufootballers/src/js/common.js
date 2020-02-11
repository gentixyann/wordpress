
/* Init */
var $currentScrollY = 0;
var $topBtn = $('#page-top');

function returnScroll(){
  $wrapper.setAttribute('style', '');
  if ($(this).scrollTop() > 100) {
    $topBtn.fadeIn();
  }
  window.scrollTo(0, $currentScrollY);
}

function offScroll(){
  $currentScrollY = window.pageYOffset;
  $wrapper.style.position = 'fixed';
  $wrapper.style.width = '100%';
  $wrapper.style.top = $currentScrollY;
  $wrapper.style.zIndex = 3;
  $topBtn.fadeOut();
}

/* Menu */
const $body    = document.querySelector('body');
const $wrapper = document.getElementById('js_wrapper');

const $menuButton = document.getElementById('js_menu_button');

$menuButton.addEventListener('click', () => {
  if($body.classList.contains('is_menu')){
    $body.classList.remove('is_menu');
    $body.classList.add('is_fade');
    returnScroll();
    setTimeout(function(){
      $body.classList.remove('is_fade');
    }, 1000);
  }else{
    $body.classList.add('is_menu');
    offScroll();
  }
});

/* Menu Link */
const $menuLinks = document.querySelectorAll('.nav a');

$menuLinks.forEach(function($link){
  $link.addEventListener('click', () => {
    $body.classList.remove('is_menu');
    $body.classList.add('is_fade');
    returnScroll();
    setTimeout(function(){
      $body.classList.remove('is_fade');
    }, 1000);
  });
});


/* Top scroll */
$(function() {
  $topBtn.hide();
  //スクロールが100に達したらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $topBtn.fadeIn();
    } else {
      $topBtn.fadeOut();
    }
  });
  //スクロールしてトップ
  $topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});

$(function () {
  // プルダウン変更時に遷移
  $('select[id=js_select_month]').change(function() {
    if ($(this).val() != '') {
      window.location.href = $(this).val();
    }
  });
});
