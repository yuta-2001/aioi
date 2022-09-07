export const headerFadeIn = function() {
	const fixedHeader = document.querySelector('#fixed-header');
	const mvHeight = document.querySelector('#mv').clientHeight;
	const scrollAmount = window.pageYOffset;

	if(scrollAmount > mvHeight) {
		fixedHeader.classList.add('is-in');
	} else {
		fixedHeader.classList.remove('is-in');
	}
}