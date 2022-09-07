export const bottomBtnFadeInOut = function() {
	const bottomBtn = document.querySelector('#bottom-fixed-btn');
	const mvHeight = document.querySelector('#mv').clientHeight;
	const contactFromTop = document.querySelector('#contact').offsetTop;
	const fadeOutPoint = contactFromTop - mvHeight;
	const scrollAmount = window.pageYOffset;

	if(scrollAmount > mvHeight && scrollAmount < fadeOutPoint) {
		bottomBtn.classList.add('is-in');
	} else {
		bottomBtn.classList.remove('is-in');
	}
}