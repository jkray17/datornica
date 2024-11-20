const isLV = document.documentElement.lang === 'lv' ? true : false;

/*Left menu*/

async function renderMenu(json) {
	const wrapper = document.querySelector('nav#contacts_left-menu');
	if(json.menuIndex.length && wrapper){
		const frame = document.createElement('ul');
		json.menuIndex.forEach(item => {
			const menuItem = document.createElement('li');
			const itemLink = document.createElement('a');
			itemLink.classList.add('icon');
			itemLink.href = item.href;
			itemLink.title = item.header;
			itemLink.style.background = "url('" + item.icon + "') center center / 50px 50px no-repeat";
			if (item.submenuIndex.length){
				const itemWrapper = document.createElement('section');
				itemWrapper.classList.add('contacts_left-menu');
				const wrapperHeader = document.createElement('p');
				wrapperHeader.innerText = item.header;
				const wrapperFrame = document.createElement('ul');
				item.submenuIndex.forEach(link => {
					if (!link.href.includes('404')){
						const li = document.createElement('li');
						const a = document.createElement('a');
						a.href = link.href;
						a.title = link.title;
						a.innerText = link.title;
						li.append(a);
						wrapperFrame.append(li);
					}
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
	const fileName = document.documentElement.lang === 'lv' ? 'menu_lv' : 'menu_ru';
    const response = await fetch(fileName, {headers: { 'Accept': 'application/json' }})
	.then((response) => response.json()).then((json) => renderMenu(json));
};

/*contacts*/

const contacts = document.querySelector('div#contacts_wrapper')

async function renderContactsModal(data, type){
	const body = document.querySelector('body');
	const modal = document.createElement('div');
	const closeButton = document.createElement('button');
	closeButton.id = 'modal-close';
	closeButton.innerText = '✖';
	modal.id = 'modal-wrapper';
	const formWrapper = document.createElement('div');
	formWrapper.id = 'form-wrapper';
	const header = document.createElement('h2');
	header.innerText = isLV ? (type === 'map' ? 'Mēs atrodamies kartē': 'Kā mūs atrast') : (type === 'map' ? 'Мы на карте': 'Как нас найти');
	
	let src = null;
	if (type === 'map') {
		src = document.createElement('iframe');
		src.src = data;
	}
	if (type === 'image') {
		src = document.createElement('img');
		src.classList.add('big')
		src.src = data;
		src.alt = isLV ? 'Mēs atrodamies kartē' : 'Мы на карте';
	}
	formWrapper.append(header, src);
	modal.append(closeButton, formWrapper);
	body.append(modal);
}

async function sendMessageData(name, mail, message){
	const subject = isLV ? 'Saņemts jauns pieprasījums (Rīga)' : 'Поступило новое обращение (Рига)';
	const thanks = isLV ? 'Paldies, ka sazinājāties! Mēs drīzumā atbildēsim.' : 'Спасибо за обращение! Мы ответим в ближайшее время.';
	const trySendMessage = (formData) => fetch('send-message', {method: 'POST',body: formData})
		.then(function (response) {return true;})
		.catch(err => {return false;});
		const formData = new FormData();
		formData.append('subject', subject);
		formData.append('name', name);
		formData.append('email', mail);
		formData.append('message', message);

	const sendMessage = await trySendMessage(formData);
		if (sendMessage){
			const form = document.querySelector('div#contacts_form');
			form.previousElementSibling.innerText = thanks;
			form.remove();
		};
}


function colorizeInput(target, type){
	if (type === 'invalid'){
		if (target.classList.contains('valid')) {target.classList.remove('valid');}
		target.classList.add('invalid'); 
		setTimeout(() => {target.classList.remove('invalid');}, 2500);
	}
	if (type === 'valid'){target.classList.add('valid'); }
};

contacts.addEventListener("click", async e => {
	const regexName = /^([a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)( [a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)?$/u;
	const regexMail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
	
	if (e.target.tagName === 'IMG' && e.target.hasAttribute('data-map')) { await renderContactsModal(e.target.getAttribute('data-map'), 'map') }
	if (e.target.tagName === 'IMG' && e.target.hasAttribute('data-src')) { await renderContactsModal(e.target.getAttribute('data-src'), 'image') }
	if (e.target.tagName === 'INPUT' && e.target.classList.contains('button')) {
		e.preventDefault();
		const form = (document.querySelector('div#contacts_form').children[0]);
		const name = form.children[0].value;
		const mail = form.children[1].value;
		const message = form.children[2].value;
		if (regexName.test(name) && regexMail.test(mail) && message.length < 2001){
			colorizeInput(form.children[0], 'valid');
			colorizeInput(form.children[1], 'valid');
			colorizeInput(form.children[2], 'valid');
			sendMessageData(name, mail, message)
		} else {
			if (!regexName.test(name)){colorizeInput(form.children[0], 'invalid')}
			if (!regexMail.test(mail)){colorizeInput(form.children[1], 'invalid')}
			if (message.length > 2000){colorizeInput(form.children[2], 'invalid')}
		}
	}

})

setTimeout(() => {
    loadMenu();
}, 1500);