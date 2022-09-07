import { HamburgerMenuProcess } from "./modules/_hamburgerMenuProces.js";
import { modalProcess } from "./modules/_modalProcess.js";
import { headerFadeIn } from "./modules/_headerFadeIn.js";
import { bottomBtnFadeInOut } from "./modules/_bottomBtnFadeInOut.js";
import { spanWrap } from "./modules/_spanWrap.js";
import { ScrollObserver } from "./modules/_scrollObserver.js";

new modalProcess();
new HamburgerMenuProcess();

spanWrap();

/**
 * アコーディオン開閉処理
 */
$(function(){
	$('.js-accordion-head').on('click',function(){
		$(this).next('.js-accordion-content').slideToggle();
		$(this).children('.js-head-btn').toggleClass('is-open');
		$(this).parent('.js-accordion').toggleClass('is-open');
	});
});

/**
 * ローディング関連の処理
 */
// window.addEventListener('load', function() {
// 	const animateTitle = document.querySelector('#main-title');
// 	const animateImg = document.querySelector('#main-img');
// 	const loader = document.querySelector('#loader');
// 	const loaderSpiner = document.querySelector('#loader-spiner');

// 	this.setTimeout(function() {
// 		loaderSpiner.classList.add('is-loading-stop');
// 	}, 300);
// 	this.setTimeout(function() {
// 		loader.classList.add('is-loaded');
// 	}, 500);
// 	this.setTimeout(function() {
// 		animateTitle.classList.add('is-animate');
// 	}, 1000);
// 	this.setTimeout(function() {
// 		animateImg.classList.add('is-animate');
// 	}, 1200);
// });

window.addEventListener('scroll', function() {
	const windowWidth = document.querySelector('body').clientWidth;
	if(windowWidth > 960) {
		headerFadeIn();
	}

	bottomBtnFadeInOut();
});

/**
 * 独立支援制度部分の棒線に関するアニメーション
 */
const addAnimateClass = function(el, isIntersecting) {
	if(isIntersecting) {
		el.classList.add('is-animate');
	}
}
const lineAnimation =	new ScrollObserver('.js-line', addAnimateClass);

//ページ内スクロール
$('.page-link a[href*="#"]').click(function () {
  let elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
  let pos = $(elmHash).offset().top;//idの上部の距離を取得
  let header_heigth = $('#fixed-header').height();
  $('body,html').animate({scrollTop: pos - header_heigth}, 1000, 'swing'); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
  return false;
});