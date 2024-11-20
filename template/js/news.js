/*Left menu*/

async function renderMenu(json) {
	const wrapper = document.querySelector('nav#news_left-menu');
	if(json.menuIndex.length && wrapper){
		const frame = document.createElement('ul');
		json.menuIndex.forEach(item => {
			const menuItem = document.createElement('li');
			const itemLink = document.createElement('a');
			itemLink.classList.add('icon');
			itemLink.href = item.href;
			itemLink.title = item.header;
			itemLink.style.background = "url('/img/left-menu/" + item.icon + ".svg') center center / 50px 50px no-repeat";
			if (item.submenuIndex.length){
				const itemWrapper = document.createElement('section');
				itemWrapper.classList.add('news_left-menu');
				const wrapperHeader = document.createElement('p');
				wrapperHeader.innerText = item.header;
				const wrapperFrame = document.createElement('ul');
				item.submenuIndex.forEach(link => {
					const li = document.createElement('li');
					const a = document.createElement('a');
					a.href = link.href;
					a.title = link.title;
					a.innerText = link.title;
					li.append(a);
					wrapperFrame.append(li);
				});
				itemWrapper.append(wrapperHeader, wrapperFrame);
				menuItem.append(itemWrapper);
			};
			menuItem.append(itemLink);
			frame.append(menuItem);
		});
		wrapper.append(frame);
		setTimeout(() => {
    		wrapper.classList.add('show');
		}, 500)
	} else return;
};

async function loadMenu() {
	const fileName = document.documentElement.lang === 'lv' ? 'left-menu-lv' : 'left-menu-ru';
    const response = await fetch('/js/' + fileName + '.json', {headers: { 'Accept': 'application/json' }})
	.then((response) => response.json()).then((json) => renderMenu(json));
};

setTimeout(() => {
    loadMenu();
}, 1500);