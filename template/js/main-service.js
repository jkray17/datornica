const isLV = document.documentElement.lang === 'lv' ? true : false;

const lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy"));

lazyBackgrounds.forEach(background => {
	background.prepend(document.createElement('div'))
});

if ("IntersectionObserver" in window && "IntersectionObserverEntry" in window && "intersectionRatio" in window.IntersectionObserverEntry.prototype) {
    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });

    lazyBackgrounds.forEach(function(lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
};

/*Left menu*/

async function renderMenu(json) {
	const wrapper = document.querySelector('nav#service_left-menu');
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
				itemWrapper.classList.add('service_left-menu');
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

setTimeout(() => {
    loadMenu();
}, 1500);

/*Mobile show more*/
const showListTxt = isLV ? 'Rādīt sarakstu' : 'Показать список';
const hideListTxt = isLV ? 'Slēpt sarakstu' : 'Скрыть список';

const deviceWidth  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
const list = document.querySelectorAll('div#services nav ol > li');
if (deviceWidth < 680 && list.length){
	list.forEach(item => {
		const button = document.createElement('button');
		button.classList.add('show-more');
		button.innerText = showListTxt;
		item.append(button);
		button.after(item.children[2]);
	});
	
	const listWrapper = document.querySelector('div#services');
	if (listWrapper){
		listWrapper.addEventListener("click", e => {
			if (e.target.classList.contains('show-more') && e.target.innerText === hideListTxt){
				e.target.nextElementSibling.classList.remove('open');
				e.target.innerText = showListTxt;
				return;
			}
			if (e.target.classList.contains('show-more') && e.target.innerText === showListTxt){
				const lists = document.querySelectorAll('div#services nav ol > li ul');
				document.querySelectorAll('div#services nav ol > li button').forEach(btn => {
					if (btn.innerText === hideListTxt){btn.innerText = showListTxt;}
				})
				lists.forEach(list => {
					if (list.classList.contains('open')){list.classList.remove('open')}
				});
				e.target.innerText = hideListTxt;
				e.target.nextElementSibling.classList.add('open');
				e.target.previousElementSibling.previousElementSibling.scrollIntoView({ behavior: "smooth", block: "start" });
				return;
			}
		})
	}
};

document.querySelector('div#diagnostics').addEventListener("click", e => {
	if (e.target.id === 'get-diagnostics'){renderGetDiagnistics();}
})

/*Diagnostics*/
async function sendDiagnosticsData(name, phone, message){
	const subject = isLV ? 'Pasūtījums diagnostikai (Rīga)' : 'Заказ на диагностику (Рига)';
	const trySendDiagnosticsOrder = (formData) => fetch('get-diagnostics', {method: 'POST',body: formData})
		.then(function (response) {return true;})
		.catch(err => {return false;});
		const formData = new FormData();
		formData.append('siteUrl', window.location.href.split('?')[0]);
		formData.append('subject', subject);
		formData.append('name', name);
		formData.append('phone', phone);
		formData.append('message', message);

		const sendDiagnosticsOrder = await trySendDiagnosticsOrder(formData);
		if (sendDiagnosticsOrder){
			if (document.querySelector('div#modal-wrapper') && document.querySelector('div#form-wrapper')){
				document.querySelector('div#modal-wrapper').classList.add('close');
				document.querySelector('div#form-wrapper').classList.add('close');
				setTimeout(() => {document.querySelector('div#modal-wrapper').remove();}, 400);
			};
		};
}


function colorizeForm(target, type){
	if (type === 'invalid'){
		if (target.classList.contains('valid')) {target.classList.remove('valid');}
		target.classList.add('invalid'); 
		setTimeout(() => {target.classList.remove('invalid');}, 1500);
	}
	if (type === 'valid'){target.classList.add('valid'); }
};

function validatePhone(event, phone){
	function formatPhoneNumber(phoneNumber) {
		const formattedParts = [];
		if (phoneNumber.length > 0) {formattedParts.push(phoneNumber.substring(0, 2));
		 	formattedParts.push(phoneNumber.substring(2, 5));formattedParts.push(phoneNumber.substring(5, 8));
			formattedParts.forEach(part => {if (!part.length) {part += '＿' }})
    	if (formattedParts[0].length < 2) {formattedParts[0] += '＿';}
		if (formattedParts[1].length < 3) {formattedParts[1] += '＿';}
		if (formattedParts[2].length < 3) {formattedParts[2] += '＿';}
   		return "+371 " + formattedParts[0] + "-" + formattedParts[1] + "-" + formattedParts[2];
  		}
	}
	const phoneInput = event.target;
	if (phone === null){
		event.target.selectionStart = 5;
		event.target.selectionEnd = 5;
	}
	phone = event.target.value.replace(/\D/g, '').substring(3, 11);
	if (phoneInput.value === '' || phone === ''){
		phoneInput.value = '+371 __-___-___';
		event.target.selectionStart = 5;
		event.target.selectionEnd = 5;
	}
	if (event.target.value.replace(/\D/g, '').substring(1, 11).length > 0) {
		if (formatPhoneNumber(phone) === undefined) {
			event.target.value = '+371 __-___-___';
			event.target.selectionStart = 5;
		} else {
			let gap = 0;
			if (phone.length > 2){gap = 1;}
			if (phone.length > 5){gap = 2;}
			event.target.value = formatPhoneNumber(phone);
			event.target.selectionStart = 5 + phone.length + gap;
		}	 
		event.target.selectionEnd = event.target.selectionStart
	} else {phone = null};
	
	if (phone && phone.length === 10){ /* test it */
		if (regexPhone.test(event.target.value)) {colorizeForm(phoneInput, 'valid')}
		else {colorizeForm(phoneInput, 'invalid')};
		if (Number(phone) === 0) {colorizeForm(phoneInput, 'invalid')}
	} else if (phoneInput.classList.contains('valid')) {phoneInput.classList.remove('valid'); }
};

function renderGetDiagnistics(){
	const body = document.querySelector('body');
	const modal = document.createElement('div');
	const closeButton = document.createElement('button');
	closeButton.id = 'modal-close';
	closeButton.innerText = '✖';
	modal.id = 'modal-wrapper';
	const formWrapper = document.createElement('div');
	formWrapper.id = 'form-wrapper';
	const header = document.createElement('h2');
	header.innerText = isLV ? 'Pasūtiet diagnostiku' : 'Заказ диагностики';
	
	const form = document.createElement('form');
	const comment = document.createElement('textarea');
	comment.id = 'diagnistics-comment';
	comment.placeholder = isLV ? 'jūsu komentārs' : 'Ваш комментарий';
	comment.maxLength = 720;
	comment.name = 'comment';
	
	const formName = document.createElement('input');
	formName.id = 'diagnistics-name';
	formName.required = true;
	formName.placeholder = isLV ? 'Tavs vārds' : 'Ваше имя';
	formName.maxLength = 40;
	formName.type = 'text';
	formName.name = 'name';
	
	const formPhone = document.createElement('input');
	formPhone.id = 'diagnistics-phone';
	formPhone.required = true;
	formPhone.placeholder = isLV ? 'savu tālruņa numuru' : 'Ваш телефон';
	formPhone.maxLength = 40;
	formPhone.type = 'text';
	formPhone.name = 'phone';
	
	const button = document.createElement('button');
	button.id = 'diagnistics-button';
	button.type = 'submit';
	button.innerText = isLV ? 'Pasūtiet' : 'Заказать';
	
	form.append(comment, formName, formPhone, button);
	formWrapper.append(header, form);
	modal.append(closeButton, formWrapper);
	body.append(modal);
	
	formName.focus();
	formPhone.addEventListener("focus", (e) => {
		if (!e.target.value){e.target.value = '+371 __-___-___';}
	});
	
	const regexPhone = /^\+371 \d{2}-\d{3}-\d{3}$/;
	const regexName = /^([a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)( [a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)?$/u;
	
	form.addEventListener("input", async(e) => {
		if (e.target.id === 'diagnistics-name' && e.target.value.length > 1){
			if (regexName.test(e.target.value)){ colorizeForm(e.target, 'valid')}
			else {colorizeForm(e.target, 'invalid')}
		}
		if (e.target.id === 'diagnistics-comment' && e.target.value.length > 720){
			colorizeForm(e.target, 'invalid')
		}
		if (e.target.id === 'diagnistics-phone'){
			validatePhone(e, e.target.value)
		}
	})
	
	button.addEventListener("click", e => {
		e.preventDefault();
		if (regexName.test(formName.value) && regexPhone.test(formPhone.value) && comment.value.length < 721){
			sendDiagnosticsData(formName.value, formPhone.value, comment.value)
		} else {
			if (!regexName.test(formName.value)){colorizeForm(formName, 'invalid')}
			if (!regexPhone.test(formPhone.value)){colorizeForm(formPhone, 'invalid')}
			if (comment.value.length > 720){colorizeForm(comment, 'invalid')}
		}
	})
}