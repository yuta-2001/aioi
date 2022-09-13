import { HamburgerMenuProcess } from "./modules/_hamburgerMenuProces.js";
import { modalProcess } from "./modules/_modalProcess.js";
import { bottomBtnFadeInOut } from "./modules/_bottomBtnFadeInOut.js";
import { spanWrap } from "./modules/_spanWrap.js";
import { ScrollObserver } from "./modules/_scrollObserver.js";

new modalProcess;
const hamburger = new HamburgerMenuProcess;

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
window.addEventListener('load', function() {
	const animateTitle = document.querySelector('#main-title');
	const animateImg = document.querySelector('#main-img');
	const loader = document.querySelector('#loader');
	const loaderSpiner = document.querySelector('#loader-spiner');
	const mvLeft = document.querySelector('#main-appeal');

	this.setTimeout(function() {
		loaderSpiner.classList.add('is-loading-stop');
	}, 100);
	this.setTimeout(function() {
		loader.classList.add('is-loaded');
	}, 300);
	this.setTimeout(function() {
		animateTitle.classList.add('is-animate');
	}, 1000);
	this.setTimeout(function() {
		animateImg.classList.add('is-animate');
		mvLeft.classList.add('is-animate');
	}, 1500);
});

window.addEventListener('scroll', function() {
	bottomBtnFadeInOut();
});

/**
 * インターセクションアニメーション実行
 */
const addAnimateClass = function(el, isIntersecting) {
	if(isIntersecting) {
		el.classList.add('is-animate');
	} else {
		el.classList.remove('is-animate');
	}
}
const intersectionAnimation =	new ScrollObserver('.js-animate-content', addAnimateClass);


//ページ内スクロール
$('.page-link a[href*="#"]').click(function () {
	const btn = document.querySelector('#hamburger');
	if(btn.classList.contains('is-open')) {
		/**
		 * ハンバーガーメニュークラスの閉じる処理を実行
		 */
		hamburger.close();
	}
	/**
	 * ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
	 */
  let elmHash = $(this).attr('href'); 
	/**
	 * idの上部の距離を取得
	 */
  let pos = $(elmHash).offset().top;
  let header_heigth = $('#header').height();
  $('body,html').animate({scrollTop: pos - header_heigth}, 1000, 'swing');
  return false;
});