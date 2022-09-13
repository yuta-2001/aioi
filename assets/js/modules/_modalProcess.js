import { backfaceFixed } from "./_backFaceFixed.js";

/**
 * モーダル開閉処理に関するクラス
 */
export class modalProcess {
	constructor() {
		this.openBtns = document.querySelectorAll('.js-modal-open');
		this.closeBtns = document.querySelectorAll('.js-modal-close');
		this.modals = document.querySelectorAll('.js-modal');
		this.excecute();
	}

	/**
	 * モーダルオープン処理
	 * @param {String} e 開く対象のモーダルに設定されているIDが入る(オープンボタンクリック時に取得)
	 */
	open(e) {
		/**
		 * 対象のモーダルを取得
		 */
		const modal = document.getElementById(e);
		/**
		 * 表示
		 */
		modal.classList.toggle('is-open');
		modal.classList.remove('is-close');
		backfaceFixed(true);
	}

	/**
	 * モーダルクローズ処理
	 */
	close() {
		backfaceFixed(false);
		for (let i =0; i < this.modals.length; i++) {
			if(this.modals[i].classList.contains('is-open')) {
				this.modals[i].classList.add('is-close');
			}
			this.modals[i].classList.remove('is-open');
		}
	}

	/**
	 * ボタンクリック時に実行する処理
	 */
	excecute() {
		this.openBtns.forEach(function(btn) {
			btn.addEventListener('click', function() {
				this.open(btn.dataset.target);
			}.bind(this));
		}.bind(this));

		this.closeBtns.forEach(function(btn) {
			btn.addEventListener('click', function () {
				this.close()
			}.bind(this));
		}.bind(this));
	}
}