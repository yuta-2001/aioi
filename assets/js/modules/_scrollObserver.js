/**
 * スクロール監視クラス
 * @this {ScrollObserver}
 * @param {HTMLElement} els 監視対象の要素
 * @param {function} 監視対象の対象要素がアニメーション発火時する時の挙動
 * @param {object} オプションで追加、更新したいものを記載する
 */
export class ScrollObserver {
	constructor(els, cb, options) {
		this.els = document.querySelectorAll(els);
		this.cb = cb;
		const defaultOptions = {
			root: null,
			threshold: 0,
			rootMargin: '-20% 0px',
		}
		this.options = Object.assign(defaultOptions, options);
		this._init();
	}

	/**
	 * スクロール監視クラスの初期化処理
	 * 領域内に入った要素ここに対しての処理
	 * スクロールオブザーバークラスのインスタンス化
	 */
	_init() {
		const callback = function(entries, observer) {
			entries.forEach(entry => {
				/**
				 * 要素が交差したらコールバック関数の第二引数にtrueを返す。
				 * 一度交差したら監視を終了させる。
				 */
				if(entry.isIntersecting) {
					this.cb(entry.target, true);
					
					/**
					 * 交差時毎回アクションさせるものにはjs-action-everyを追加
					 */
					if(entry.target.classList.contains('js-action-every')) {
					} else {
						observer.unobserve(entry.target);
					}
				} else {
					this.cb(entry.target, false);
				}
			});
		}

		const io = new IntersectionObserver(callback.bind(this), this.options);
		this.els.forEach(el => {
			io.observe(el)
		});
	}
}