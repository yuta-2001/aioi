import { backfaceFixed } from "./_backFaceFixed.js";

/**
 * ハンバーガーメニューの開閉処理に関するクラス
 */
export class HamburgerMenuProcess {
	constructor () {
		this.button = document.querySelector('#hamburger');
		this.modal = document.querySelector('#navigation');
		this.excecute();
	}

	/**
	 * 処理を実行
	 */
	excecute() {
		this.button.addEventListener('click', function() {
			if(this.button.classList.contains('is-open')) {
				this.close();
			} else {
				this.open();
			}
		}.bind(this));
	}

	/**
	 * モーダルを開く際の処理
	 */
	open() {
		backfaceFixed(true);
		this.button.classList.add('is-open');
		this.modal.classList.add('is-open');
	}

	/**
	 * モーダルを閉じる際の処理
	 */
	close () {
		backfaceFixed(false);
		this.button.classList.remove('is-open');
		this.modal.classList.remove('is-open');
	}
}