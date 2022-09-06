/**
 * 背景の固定処理を行います。
 * @param {boolean} fixed 背景を固定したい場合はtrue, 背景固定を解除する場合にはfalse
 */
export const backfaceFixed = function(fixed) {
	/**
	 * 表示されているスクロールバーの幅を計測。
	 * 背景固定時に計測された幅だけbodyの右側に余白を生成
	 */
	const scrollbarWidth = window.innerWidth - document.body.clientWidth;
	document.body.style.paddingRight = fixed ? `${scrollbarWidth}px` : '';

	/**
	 * スクロールを取得する要素を出力する。(html or body)
	 * @returns {HTMLElement} html または body
	 */
	const scrollingElement = () => {
			const browser = window.navigator.userAgent.toLowerCase();
			if ('scrollingElement' in document) return document.scrollingElement;
			if (browser.indexOf('webkit') > 0) return document.body;
			return document.documentElement;
	};

	/**
	 * 変数にスクロール量を格納しておく
	 * スクロールロック解除時に使用
	 */
	const scrollY = fixed
			? scrollingElement().scrollTop
			: parseInt(document.body.style.top || '0');

	/**
	 * bodyのcssに以下のスタイルを適用。
	 * 背景を固定する。
	 */
	const styles = {
			height: '100vh',
			left: '0',
			overflow: 'hidden',
			position: 'fixed',
			top: `${scrollY * -1}px`,
			width: '100vw',
	};
	Object.keys(styles).forEach((key) => {
			document.body.style[key] = fixed ? styles[key] : '';
	});

	/**
	 * 背景の固定を解除したときに元の位置に戻す
	 */
	if (!fixed) window.scrollTo(0, scrollY * -1);
};
