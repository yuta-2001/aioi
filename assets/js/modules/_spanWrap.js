export const spanWrap =  function() {
	const targets = document.querySelectorAll('.js-split');
	targets.forEach( function(target){
		const nodes = [...target.childNodes];
	
		let spanWrapText = "";
	
		nodes.forEach((node) => {
			if(node.nodeType == 3) {
				const text = node.textContent.replace(/\r?\n|&nbsp;/g, '').trim();
	
				spanWrapText = spanWrapText + text.split('').reduce((acc, v) => {
					return acc + `<span class="char"><span>${v}</span></span>`
				}, "");
			} else {
				spanWrapText = spanWrapText + node.outerHTML;
			}
		});
		target.innerHTML = spanWrapText
	})
}