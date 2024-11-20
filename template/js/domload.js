const defaultLanguage = document.documentElement.lang === 'lv' ? true : false ;
/* TXT */
const orderMessage = defaultLanguage ? 		'Saņemts pasūtījums par pakalpojumiem (Rīga)' 		: 'Поступил заказ на услуги (Рига)'
const callbackMessage = defaultLanguage ? 	'Atzvanīšanas pieprasījums stundas laikā (Rīga)' 	: 'Запрос на обратный звонок в течение часа (Рига)';
const callbackAfter = defaultLanguage ? 	'Paldies! Drīz ar Jums sazināsies!' 				: 'Спасибо! С вами свяжутся в ближайшее время!';
const consultMessage = defaultLanguage ? 	'Bezmaksas konsultācija (Rīga)' 					: 'Бесплатная консультация (Рига)';
const consultAfter = defaultLanguage ? 		'Pieprasījums nosūtīts!' 							: 'Запрос отправлен!';
const invalidName = defaultLanguage ? 		'Ir pieļaujami tikai burti!' 						: 'Допустимы только буквы!';
const invalidNumber = defaultLanguage ? 	'Nepareizs formāts!' 								: 'Неверный формат!';
const invalidMail = defaultLanguage ? 		'Nepareizs E-mail!' 								: 'Неверный E-mail!';
const invalidComment = defaultLanguage ? 	'Pārsniegts ziņojuma apjoms!' 						: 'Превышен объем сообщения!';
const noName = defaultLanguage ? 			'Vārds nav norādīts!' 								: 'Имя не указано!';
const noNumber = defaultLanguage ? 			'Tālrunis nav norādīts!' 							: 'Телефон не указан!';
const noMail = defaultLanguage ? 			'E-mail nav norādīts!' 								: 'E-mail не указан!';
const cartCurrency = 'EUR';
const masters = [
	{
		name: defaultLanguage ? 			'Maksims Runecs' 										: 'Максим Рунец',
		photo: 'img/masters/maxim.webp',
		rating: '9/9',
		workExp: defaultLanguage ? 			'Vairāk nekā 4 gadu pieredze' 						: 'Опыт работы более 4 лет.'
	},
	{
		name: defaultLanguage ? 			'Vitalijs Carenoks' 								: 'Виталий Царенок',
		photo: 'img/masters/vitaliy.webp',
		rating: '9/9',
		workExp: defaultLanguage ? 			'Vairāk nekā 6 gadu pieredze' 						: 'Опыт работы более 6 лет.'
	},
	{
		name: defaultLanguage ? 			'Artjoms Sroslovs' 									: 'Артём Срослов',
		photo: 'img/masters/artem.webp',
		rating: '9/9',
		workExp: defaultLanguage ? 			'Vairāk nekā 4 gadu pieredze' 						: 'Опыт работы более 4 лет.'
	}
]

const width  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
/* device header */
const header = document.querySelector('#device_header');
if (width < 680 && header) {
	const burger = document.querySelector('#device_header_burger');
	const menu = document.querySelector('#device_header_nav');
	const wrapper = document.querySelector('#nav_list_wrapper');
	if (burger && menu && wrapper){
		header.addEventListener('click', e => {
			var delay = 100;

			if (e.target === burger || e.target.parentNode === burger){
				burger.classList.toggle('open');
				const hiddenList =  document.querySelectorAll('#nav_list_wrapper > ul > li > a.hidden');
				hiddenList.forEach(function(link, currentIndex) {
					if (link.classList.contains('no')){link.classList.remove('no');}
				});
				if (!menu.classList.contains('open')){
					menu.classList.toggle('open');
					hiddenList.forEach(function(link, currentIndex) {
						setTimeout(function() {link.classList.add('no')}, delay*currentIndex);
					});
				} else {
					wrapper.classList.add('hide');
					hiddenList.forEach(link => {link.classList.remove('no')});
					setTimeout(() => {
						wrapper.classList.remove('hide');
						menu.classList.toggle('open');
					}, 300);
				}
			}
			if (e.target.parentNode.classList.contains('firstParent')){
				e.preventDefault();
				const parents = document.querySelectorAll('li.firstParent');
				const lists = document.querySelectorAll('div.first_sub_menu');
				const hiddenList =  e.target.nextElementSibling.querySelectorAll('div.first_sub_menu.closed > ul > li > a.hidden');
				hiddenList.forEach(function(link, currentIndex) {
					if (link.classList.contains('no')){link.classList.remove('no');}
				});
				parents.forEach(parent => {
					if (parent.classList.contains('open')){parent.classList.remove('open')};
				});
				e.target.parentNode.classList.add('open');
				if (!e.target.nextElementSibling.classList.contains('closed')) {
					e.target.parentNode.classList.remove('open');
					e.target.nextElementSibling.classList.add('closed');
				} else {
					lists.forEach(list => {if (!list.classList.contains('closed')){list.classList.add('closed')};});
					e.target.nextElementSibling.classList.remove('closed');
					hiddenList.forEach(function(link, currentIndex) {
						setTimeout(function() {link.classList.add('no')}, delay*currentIndex);
					});
				}
			}
			if (e.target.parentNode.classList.contains('secondParent')){
				e.preventDefault();
				const parents = document.querySelectorAll('li.secondParent');
				const lists = document.querySelectorAll('div.second_sub_menu');
				const hiddenList =  e.target.nextElementSibling.querySelectorAll('div.second_sub_menu.closed > ul > li > a.hidden');
				hiddenList.forEach(function(link, currentIndex) {
					if (link.classList.contains('no')){link.classList.remove('no');}
				});
				parents.forEach(parent => {
					if (parent.classList.contains('open')){parent.classList.remove('open')};
				});
				e.target.parentNode.classList.add('open');
				if (!e.target.nextElementSibling.classList.contains('closed')) {
					e.target.parentNode.classList.remove('open');
					e.target.nextElementSibling.classList.add('closed');
				} else {
					lists.forEach(list => {if (!list.classList.contains('closed')){list.classList.add('closed')};});
					e.target.nextElementSibling.classList.remove('closed');
					hiddenList.forEach(function(link, currentIndex) {
						setTimeout(function() {link.classList.add('no')}, delay*currentIndex);
					});
				}
			}
		});
	}
}
/* pc header */
const wideHeader = document.querySelector('#pc_header');
const content = document.querySelector('#main_content');
const toTopButton = document.querySelector('#to-top');

content.addEventListener("scroll", function(){
	if (width > 959 && wideHeader){
		setTimeout(() => {
			if (!content.scrollTop && wideHeader.classList.contains('short')) {wideHeader.classList.remove('short')} 
			else if(content.scrollTop < 350 && !wideHeader.classList.contains('short')) {wideHeader.classList.add('short')}
		}, 0);
	}
	if (content.scrollTop > 350 && toTopButton.classList.contains('hidden')){toTopButton.classList.remove('hidden')} 
	if (content.scrollTop < 350 && !toTopButton.classList.contains('hidden')) {toTopButton.classList.add('hidden')}
});

if (width > 959 && wideHeader) {
	wideHeader.addEventListener("mouseover", e => {
		const parent = e.target.parentNode.parentNode.parentNode;
		const sub = e.target.nextElementSibling;
		const listLength = e.target.parentNode.childNodes.length
		if (parent.tagName === 'DIV' && sub &&  !sub.classList.contains('noParent') && sub.tagName !== 'DIV'){
			if (listLength * .6 > Array.from(e.target.parentNode.children).indexOf(e.target) 
				&& listLength * .3  < Array.from(e.target.parentNode.children).indexOf(e.target)){
				sub.querySelector('div.sub_menu').classList.add('center')
			};
			if (listLength * .3 < Array.from(e.target.parentNode.children).indexOf(e.target)){
				sub.querySelector('div.sub_menu').classList.add('bottom')
			};
		}
	});
	wideHeader.addEventListener("click", e => {
		if (e.target.classList.contains('bottom_arrow')){
			const target = e.target.previousElementSibling.querySelector('ul');
			if (target && !target.scrollTop){target.scrollTop = target.scrollHeight};
			if (target && target.scrollTop){target.scrollTop = 0};
		}
	})
};
/* callback */		
const body = document.querySelector('body');
const pageID = Number(body.id);
const faq = document.querySelector('section#faq');
const consultationCall = document.querySelector('button#consultation-call');
const regexPhone = /^\+371 \d{2}-\d{3}-\d{3}$/;
const regexName = /^([a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)( [a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)?$/u;
const regexMail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const validationValues = {
	callback: {
		nameStatus: false,
		phoneStatus: false,
		phoneNumber: null
	},
	modal: {
		nameStatus: false,
		phoneStatus: false,
		phoneNumber: null
	},
	order: {
		nameStatus: false,
		phoneStatus: false,
		phoneNumber: null,
		mailStatus: false,
		commentStatus: true
	}
}
function closeModal() {
	const modal = document.querySelector('div#modal-wrapper');
	const form = document.querySelector('div#form-wrapper');
	const order = document.querySelector('div#order-wrapper');
	const masterSelect = document.querySelector('div#master-select-wrapper');
	if (modal && form){modal.classList.add('close');form.classList.add('close');setTimeout(() => {modal.remove();}, 400);};
	if (modal && masterSelect){modal.classList.add('close');masterSelect.classList.add('close');setTimeout(() => {modal.remove();}, 400);};
	if (modal && order){modal.classList.add('close');order.classList.add('close');setTimeout(() => {modal.remove();}, 400);};
}
function renderModal(body) {
	if (document.querySelector('div#modal-wrapper')){document.querySelector('div#modal-wrapper').remove();};
	const modalWrapper = document.createElement('div');
	modalWrapper.id = 'modal-wrapper';
	const modalCloseButton = document.createElement('button');
	modalCloseButton.innerText = '✖';
	modalCloseButton.id = 'modal-close';
	const formWrapper = document.createElement('div');
	formWrapper.id = 'form-wrapper';
	const formHeader = document.createElement('h2');
	formHeader.innerText = defaultLanguage ? 'Bezmaksas konsultācija' : 'Бесплатная консультация';
	const form = document.createElement('form');
	const formButton = document.createElement('button');
	formButton.id = 'modal-form-button';
	formButton.innerText = defaultLanguage ? 'Nosūtīt pieprasījumu' : 'Отправить запрос';
	formButton.type = 'submit';
	const formName = document.createElement('input');
	formName.required = true;
	formName.id = 'modal-form-name';
	formName.placeholder = defaultLanguage ? 'Jūsu vārds' : 'Ваше имя';
	formName.type = 'text';
	formName.name = 'name';
	const formPhone = document.createElement('input');
	formPhone.required = true;
	formPhone.id = 'modal-form-phone';
	formPhone.placeholder = defaultLanguage ? 'Jūsu tālrunis' : 'Ваш телефон';
	formPhone.type = 'text';
	formPhone.name = 'phone';
	form.append(formName, formPhone, formButton);
	formWrapper.append(formHeader, form);
	modalWrapper.append(modalCloseButton, formWrapper);
	body.append(modalWrapper);
	formName.focus();
	formPhone.addEventListener("focus", (e) => {
		if (!e.target.value){e.target.value = '+371 __-___-___';}
	});
}
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
function isValidPhone(event, phone, valid){
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
	if (regexPhone.test(event.target.value)) {valid = true;}
	else {valid = false};
	if (Number(phone) === 0) {valid = false}
	return valid;
};
async function isValidName(event, name){
	if (regexName.test(event.target.value)) {name = true;}
	else {name = false}
	return name;
};
async function isValidMail(event, mail){
	if (regexMail.test(event.target.value)) {mail = true;}
	else {mail = false}
	return mail;
};
async function isValidComment(event, comment){
	if (event.target.value.length < 721) {comment = true;}
	else {comment = false}
	return comment;
};
const trySendToTelegram = (formData) => fetch('templates/dvc/sendTelegram.php', {method: 'POST',body: formData})
.then(function (response) {return true;})
.catch(err => {return false;});
const trySendToMail = (formData) => fetch('send_form?page=' + pageID, {method: 'POST',body: formData})
.then(function (response) {return true;})
.catch(err => {return false;});
const trySendCart = (formData) => fetch('sendCartNew', {method: 'POST',body: formData})
.then(function (response) {return true;})
.catch(err => {return false;});

const callbackNumber = document.querySelector('input#callback-number');
function formValidator(nameStatus, phoneStatus, name, phone){
	if (!nameStatus && name.value === ''){
		const oldPH = name.placeholder; 
		name.placeholder = noName;
		setTimeout(() => {name.placeholder = oldPH;}, 2000);
	}
	if (!nameStatus && name.value !== '') {
		const oldPH = name.placeholder;
		const oldValue = name.value; 
		name.value = '';
		name.placeholder = invalidName;
		setTimeout(() => {name.value = oldValue; name.placeholder = oldPH;}, 2000);
	}
	if (!phoneStatus && phone.value === ''){
		const oldPH = phone.placeholder; 
		phone.placeholder = noNumber;
		setTimeout(() => {phone.placeholder = oldPH;}, 2000);
	}
	if (!phoneStatus && phone.value !== ''){
		const oldPH = phone.placeholder;
		const oldValue = phone.value;
		phone.value = '';
		phone.placeholder = invalidNumber;
		setTimeout(() => {phone.value = oldValue; phone.placeholder = oldPH;}, 2000);
	}
}
function formValidator2(mailStatus, commentStatus, mail, comment){
	if (!mailStatus && mail.value === ''){
		const oldPH = mail.placeholder; 
		mail.placeholder = noMail;
		setTimeout(() => {mail.placeholder = oldPH;}, 2000);
	}
	if (!mailStatus && mail.value !== '') {
		const oldPH = mail.placeholder;
		const oldValue = mail.value; 
		mail.value = '';
		mail.placeholder = invalidMail;
		setTimeout(() => {mail.value = oldValue; mail.placeholder = oldPH;}, 2000);
	}
	if (!commentStatus && comment.value !== ''){
		const oldPH = comment.placeholder;
		const oldValue = comment.value;
		comment.value = '';
		comment.placeholder = invalidComment;
		setTimeout(() => {comment.value = oldValue; comment.placeholder = oldPH;}, 2000);
	}
}
/* Product cart */
const sessionCart = sessionStorage.getItem('cart');
const sessionMaster = sessionStorage.getItem('master');
const sessionTotal = sessionStorage.getItem('total');
const cartArrowButton = document.querySelector('button#cart-arrow');
const cartCounter = document.querySelector('button#cart-products-counter');
const cartWrapper = document.querySelector('div#cart-wrapper');
let selectedMaster = 0;
const cart = JSON.parse(sessionCart) || [];
let total = JSON.parse(sessionTotal) || 0;
const category = document.querySelector('h2.intro') ? document.querySelector('h2.intro').innerText : (defaultLanguage ? 'Bez kategorijas' : 'Без категории');
async function renderMasterFrame(){
	if (document.querySelector('div#master-frame')){document.querySelector('div#master-frame').remove();}
	const randomMaster = await masters[JSON.parse(sessionMaster)] || await masters[Math.floor(Math.random()*masters.length)];
	selectedMaster = masters.indexOf(randomMaster);
	const masterFrame = document.createElement('div');
	masterFrame.id = 'master-frame';
	const header = document.createElement('h3');
	header.id = 'master-frame-header'
	header.innerText = defaultLanguage ? 'Iesakām meistarus' : 'Рекомендуем мастера';
	const masterName = document.createElement('div');
	masterName.id = 'master-frame-name';
	masterName.innerText = randomMaster.name;
	const masterPhoto = document.createElement('img');
	masterPhoto.id = 'master-frame-photo';
	masterPhoto.src = randomMaster.photo;
	masterPhoto.alt = randomMaster.name;
	const selectAnother = document.createElement('button');
	selectAnother.id = 'master-frame-select';
	selectAnother.innerText = defaultLanguage ? 'Izvēlēties citu meistaru' : 'Выбрать другого мастера';
	masterFrame.append(header, masterName, masterPhoto, selectAnother);
	cartWrapper.append(masterFrame);
	return masterFrame;
};
function changeMaster(){
	sessionStorage.setItem('master', JSON.stringify(selectedMaster));
	cartWrapper.querySelector('div#master-frame-name').innerText = masters[selectedMaster].name;
	cartWrapper.querySelector('img#master-frame-photo').src = masters[selectedMaster].photo;
	cartWrapper.querySelector('img#master-frame-photo').alt = masters[selectedMaster].name;
};
if (!window.location.href.match(/stati/) && !window.location.href.match(/raksti/)) {
	if (cart.length){
		cart.forEach(item => {if (document.querySelector('#' + item.id)){
		content.querySelector('#' + item.id).classList.add('selected')}})
	};
	if (cart.length && cartArrowButton?.classList.contains('hidden') && cartCounter?.classList.contains('hidden')) {
		cartArrowButton.classList.remove('hidden');cartCounter.classList.remove('hidden');cartCounter.innerText = cart.length;
	};
	if (width > 1890 && cart.length){
		cartWrapper.classList.toggle('hidden');cartCounter.classList.toggle('hidden');cartArrowButton.classList.toggle('open-cart');
		renderCartFrame(total);
	};
};
function renderSelectMaster(body) {
	if (document.querySelector('div#modal-wrapper')){document.querySelector('div#modal-wrapper').remove();};
	const modalWrapper = document.createElement('div');
	modalWrapper.id = 'modal-wrapper';
	const modalCloseButton = document.createElement('button');
	modalCloseButton.innerText = '✖';
	modalCloseButton.id = 'modal-close';
	const selectWrapper = document.createElement('div');
	selectWrapper.id = 'master-select-wrapper';
	const header = document.createElement('h3');
	header.id = 'master-select-header'
	header.innerText = defaultLanguage ? 'Meistara izvēle' : 'Выбор мастера';
	selectWrapper.append(header)
	masters.forEach((master, index) => {
		const masterFrame = document.createElement('div');
		masterFrame.classList.add('master-select-frame');
		masterFrame.id = 'master-' + index;
		if (index === selectedMaster) {masterFrame.classList.add('selected');}
		const check = document.createElement('div');
		check.classList.add('master-select-check');
		const name = document.createElement('div');
		name.classList.add('master-select-name');
		name.innerText = master.name;
		const workExp = document.createElement('div');
		workExp.classList.add('master-select-exp');
		workExp.innerText = master.workExp;
		name.append(workExp);
		const rating = document.createElement('div');
		rating.classList.add('master-select-rating');
		rating.innerText = master.rating;
		const ratingDesc = document.createElement('div');
		ratingDesc.classList.add('master-select-rating-desc');
		ratingDesc.innerText = defaultLanguage ? 'Reitings' : 'Рейтинг';
		const masterPhoto = document.createElement('img');
		masterPhoto.id = 'master-frame-photo';
		masterPhoto.src = master.photo;
		masterPhoto.alt = master.name;
		rating.append(ratingDesc);
		masterFrame.append(check, name, rating, masterPhoto);
		selectWrapper.append(masterFrame)
	});
	modalWrapper.append(modalCloseButton, selectWrapper);
	body.append(modalWrapper);
};
async function addToCart(target){
	const formatTarget = {
		id: target.id,
		name: target.querySelector('td.product-name').innerText,
		price: parseInt(target.querySelector('td.product-price').innerText, 10),
		pagetitle: category
	}
	cart.push(formatTarget);
	total = await cart.reduce((accumulator, item) => accumulator + item.price, 0);
	await sessionStorage.setItem('cart', JSON.stringify(cart));
	await sessionStorage.setItem('total', JSON.stringify(total));
	await renderCartFrame(total);
	return total;
};
async function removeFromCart(id){
	const index = cart.findIndex(item => item.id === id);
	if (index !== -1) {cart.splice(index, 1);};
	total = await cart.reduce((accumulator, item) => accumulator + item.price, 0);
	await sessionStorage.setItem('cart', JSON.stringify(cart));
	await sessionStorage.setItem('total', JSON.stringify(total));
	await renderCartFrame(total);
	return total;
};
function formatPrice(price){
	return price.toString().replace(/(\d{1})(\d{3})$/, "$1 $2");
};
async function renderCartFrame(total){
	const target = cartWrapper.querySelector('div#master-frame') || await renderMasterFrame();
	if (document.querySelector('div#cart-frame')){document.querySelector('div#cart-frame').remove()};
	const cartFrame = document.createElement('div');
	cartFrame.id = 'cart-frame';
	const cartList = document.createElement('ul');
	cartList.id = 'cart-list';
	if (cart.length){
		cart.forEach(item => {
			const itemWrapper = document.createElement('li');
			itemWrapper.classList.add('cart-item');
			const deleteButton = document.createElement('button');
			deleteButton.id = 'cart' + '-' + item.id.split('-')[1] + '-' + item.id.split('-')[2];
			deleteButton.classList.add('cart-item-delete');
			deleteButton.innerText = '✖';
			deleteButton.title = defaultLanguage ? 'Dzēst pozīciju' : 'Удалить позицию';
			const itemName = document.createElement('span');
			itemName.classList.add('cart-item-name');
			itemName.innerText = item.name;
			const itemPrice = document.createElement('span');
			itemPrice.classList.add('cart-item-price');
			itemPrice.innerText =  formatPrice(item.price) + ' ' + cartCurrency;
			
			itemWrapper.append(deleteButton, itemName, itemPrice)
			cartList.append(itemWrapper)
		});
	} else {
		const emptyList = document.createElement('li');
		emptyList.classList.add('empty');
		emptyList.innerText = defaultLanguage ? 'Pakalpojumi nav izvēlēti' : 'Услуги не выбраны';
		cartList.append(emptyList);
	}
	const cartTotal = document.createElement('p');
	cartTotal.id = 'cart-total';
	cartTotal.innerText = defaultLanguage ? 'Summa: ' + formatPrice(total) + ' ' + cartCurrency : 'Сумма: ' + formatPrice(total) + ' ' + cartCurrency;
	cartFrame.append(cartList);
	const addFormButton = document.createElement('button');
	addFormButton.id = 'cart-add-form';
	addFormButton.innerText = defaultLanguage ? 'Pasūtīt' : 'Оформить заказ';
	if (cart.length && total){cartFrame.append(cartTotal, addFormButton)};
	target.after(cartFrame);
};
function renderOrder(body) {
	if (document.querySelector('div#modal-wrapper')){document.querySelector('div#modal-wrapper').remove();};
	const modalWrapper = document.createElement('div');
	modalWrapper.id = 'modal-wrapper';
	const modalCloseButton = document.createElement('button');
	modalCloseButton.innerText = '✖';
	modalCloseButton.id = 'modal-close';
	const orderWrapper = document.createElement('div');
	orderWrapper.id = 'order-wrapper';
	const header = document.createElement('h3');
	header.id = 'order-header'
	header.innerText = defaultLanguage ? 'Pasūtījuma noformēšana' : 'Оформление заказа';
	const form = document.createElement('form');
	const formButton = document.createElement('button');
	formButton.id = 'order-button';
	formButton.innerText = defaultLanguage ? 'Nosūtīt' : 'Отправить';
	formButton.type = 'submit';
	const formName = document.createElement('input');
	formName.required = true;
	formName.id = 'order-name';
	formName.placeholder = defaultLanguage ? 'Jūsu vārds' : 'Ваше имя';
	formName.type = 'text';
	formName.name = 'name';
	formName.maxLength = 40;
	const formMail = document.createElement('input');
	formMail.required = true;
	formMail.id = 'order-mail';
	formMail.placeholder = defaultLanguage ? 'Jūsu E-mail' : 'Ваш E-mail';
	formMail.type = 'email';
	formMail.name = 'email';
	formMail.maxLength = 30;
	const formPhone = document.createElement('input');
	formPhone.required = true;
	formPhone.id = 'order-phone';
	formPhone.placeholder = defaultLanguage ? 'Jūsu tālrunis' : 'Ваш телефон';
	formPhone.type = 'text';
	formPhone.name = 'phone';
	const formComment = document.createElement('textarea');
	formComment.id = 'order-comment';
	formComment.placeholder = defaultLanguage ? 'Jūsu komentārs (nav obligāts)' : 'Ваш комментарий (не обязательно)';
	formComment.type = 'text';
	formComment.name = 'comment';
	formComment.maxLength = 720;
	form.append(formName, formMail, formPhone, formComment, formButton);
	orderWrapper.append(header, form);
	modalWrapper.append(modalCloseButton, orderWrapper);
	body.append(modalWrapper);
	formName.focus();
	formPhone.addEventListener("focus", (e) => {
		if (!e.target.value){e.target.value = '+371 __-___-___';}
	});
}

function changeMap(target) {
	const id = Number(target.split('-')[2]);
	if (isNaN(id)) return;
	const controls = body.querySelector('nav#map-controls');
	const buttons = controls.querySelectorAll('li');
	const frame = body.querySelector('div#google-map');
	const maps = frame.querySelectorAll('iframe');
	buttons.forEach(button => { if (button.classList.contains('active')) {button.classList.remove('active')}});
	maps.forEach(map => { if (map.classList.contains('active')) {map.classList.remove('active')}});
	controls.querySelector('li#select-map-' + id).classList.add('active');
	frame.querySelector('iframe#map-' + id).classList.add('active');
};

/* Listeners */

if (callbackNumber){
	callbackNumber.addEventListener("focus", (e) => {
		if (!e.target.value){e.target.value = '+371 __-___-___';}
	});
};
body.addEventListener("input", async(e) => {
	if (e.target.id === 'modal-form-name'){validationValues.modal.nameStatus = await isValidName(e,validationValues.modal.nameStatus)}
	if (e.target.id === 'modal-form-phone'){
		validationValues.modal.phoneStatus = await isValidPhone(e,
		validationValues.modal.phoneNumber, validationValues.modal.phoneStatus)
	}
	if (e.target.id === 'callback-name'){validationValues.callback.nameStatus = await isValidName(e,validationValues.callback.nameStatus)}
	if (e.target.id === 'callback-number'){
		validationValues.callback.phoneStatus = await isValidPhone(e,
		validationValues.callback.phoneNumber, validationValues.callback.phoneStatus)
	}
	if (e.target.id === 'order-name'){validationValues.order.nameStatus = await isValidName(e,validationValues.order.nameStatus)}
	if (e.target.id === 'order-comment'){validationValues.order.commentStatus = await isValidComment(e,validationValues.order.commentStatus)}
	if (e.target.id === 'order-mail'){validationValues.order.mailStatus = await isValidMail(e,validationValues.order.mailStatus)}
	if (e.target.id === 'order-phone'){
		validationValues.order.phoneStatus = await isValidPhone(e,
		validationValues.order.phoneNumber, validationValues.order.phoneStatus)
	}
});
body.addEventListener("click", async(e) => {
	if (e.target.id === 'to-top') {content.scrollTop = 0;}
	if (e.target.id === 'cart-arrow'|| e.target.id === 'cart-products-counter') {
		cartWrapper.classList.toggle('hidden');cartCounter.classList.toggle('hidden');cartArrowButton.classList.toggle('open-cart');
		renderCartFrame(total);
	};
	if (e.target.classList.contains('product-item') || e.target.parentNode.classList.contains('product-item')){
		if (e.target.classList.contains('product-item')){e.target.classList.toggle('selected')};
		if (e.target.parentNode.classList.contains('product-item')){e.target.parentNode.classList.toggle('selected')};
		if (e.target.classList.contains('product-item') && e.target.classList.contains('selected')){total = await addToCart(e.target);}
		if (e.target.parentNode.classList.contains('product-item') && e.target.parentNode.classList.contains('selected')){total = await addToCart(e.target.parentNode);}
		if (e.target.classList.contains('product-item') && !e.target.classList.contains('selected')){total = await removeFromCart(e.target.id);}
		if (e.target.parentNode.classList.contains('product-item') && !e.target.parentNode.classList.contains('selected')){total = await removeFromCart(e.target.parentNode.id);}
		if (!cart.length && !cartWrapper.classList.contains('hidden') && !cartArrowButton.classList.contains('hidden')) {
			cartArrowButton.style.transitionDelay = '0s';cartWrapper.classList.add('hidden');
			cartArrowButton.classList.add('hidden');cartArrowButton.classList.remove('open-cart');
			setTimeout(() => {cartArrowButton.style.transitionDelay = ''}, 300);
		};
		if (cart.length && cartArrowButton.classList.contains('hidden') && cartCounter.classList.contains('hidden')) {
			cartArrowButton.classList.remove('hidden');cartCounter.classList.remove('hidden');
		};
		if (!cart.length && !cartArrowButton.classList.contains('hidden') && !cartCounter.classList.contains('hidden')){
			cartArrowButton.classList.add('hidden');cartCounter.classList.add('hidden');
		};
		if (width > 1890 && cart.length && cartWrapper.classList.contains('hidden')){
			cartWrapper.classList.toggle('hidden');cartCounter.classList.toggle('hidden');cartArrowButton.classList.toggle('open-cart');
			renderCartFrame(total);
		};
		cartCounter.innerText = cart.length;
	};
	if (e.target.classList.contains('cart-item-delete')){
		const itemID = 'product' + '-' + e.target.id.split('-')[1] + '-' + e.target.id.split('-')[2];
		total = await removeFromCart(itemID);
		const targetItem = content.querySelector('#' + itemID);
		if (targetItem) {targetItem.classList.remove('selected');}
		cartCounter.innerText = cart.length;
		if (!cart.length && !cartWrapper.classList.contains('hidden') && !cartArrowButton.classList.contains('hidden') && width < 1890) {
			setTimeout(() => {
				cartArrowButton.style.transitionDelay = '0s';cartWrapper.classList.add('hidden');
				cartArrowButton.classList.add('hidden');cartArrowButton.classList.remove('open-cart');
				setTimeout(() => {cartArrowButton.style.transitionDelay = ''}, 300);
			}, 2000);
		};
	};
	if (e.target.id === 'cart-add-form'){renderOrder(body)};
	if (e.target.id === 'master-frame-select'){renderSelectMaster(body)};
	if (e.target.classList.contains('master-select-frame') 
		|| e.target.parentNode.classList.contains('master-select-frame')
	   	|| e.target.parentNode.parentNode.classList.contains('master-select-frame')){
		if (e.target.classList.contains('master-select-frame')){selectedMaster = Number(e.target.id.split('-')[1])};
		if (e.target.parentNode.classList.contains('master-select-frame')){selectedMaster = Number(e.target.parentNode.id.split('-')[1])};
		if (e.target.parentNode.parentNode.classList.contains('master-select-frame')){selectedMaster = Number(e.target.parentNode.parentNode.id.split('-')[1])};
		closeModal(); changeMaster();
	};
	if (faq){
		if (e.target.tagName === 'BUTTON' && e.target.parentNode.classList.contains('accordion-item')){
			const faqList = document.querySelectorAll('div.accordion-item');
			faqList.forEach(item => {if (item.classList.contains('active')){item.classList.remove('active')};});
			e.target.parentNode.classList.add('active');
		}
	};
	if (e.target.id === 'order-button' && pageID) {
		e.preventDefault();
		const name = document.querySelector('input#order-name');
		const phone = document.querySelector('input#order-phone');
		const mail = document.querySelector('input#order-mail');
		const comment = document.querySelector('textarea#order-comment');
		const totalValue = formatPrice(total) + ' ' + cartCurrency;
		const master = masters[selectedMaster].name;
		if (validationValues.order.phoneStatus && validationValues.order.nameStatus && phone.value !== '' && name.value !== ''
		   && validationValues.order.mailStatus && validationValues.order.commentStatus && mail.value !== '') {
			const formData = new FormData();
			formData.append('siteUrl', window.location.href);
			formData.append('subject', orderMessage);
			formData.append('master', master);
			formData.append('name',name.value);
			formData.append('email',mail.value);
			formData.append('phone', phone.value);
			formData.append('message', comment.value);
			formData.append('total', totalValue);
			formData.append('cart', JSON.stringify(cart));
			cartStatus = await trySendCart(formData);
			if (cartStatus){
				e.target.parentNode.previousElementSibling.innerText = callbackAfter;
				e.target.parentNode.remove();
			};
		} else {
			formValidator(validationValues.order.nameStatus, validationValues.order.phoneStatus, name, phone);
			formValidator2(validationValues.order.mailStatus, validationValues.order.commentStatus, mail, comment);
		};
	};
	if (e.target === consultationCall){e.preventDefault();renderModal(body);};
	if (e.target.id === 'modal-close' || e.target.id === 'modal-wrapper'){closeModal()};
	if (e.target.id === 'callback-button' && pageID) {
		e.preventDefault();
		const name = document.querySelector('input#callback-name');
		const phone = document.querySelector('input#callback-number');
		if (validationValues.callback.phoneStatus && validationValues.callback.nameStatus && phone.value !== '' && name.value !== ''){
			const formData = new FormData();
			formData.append('siteUrl', window.location.href);
			formData.append('name',name.value);
			formData.append('phone', phone.value);
			formData.append('message', callbackMessage);
			const tgStatus = await trySendToTelegram(formData);
			const mailStatus = await trySendToMail(formData);
			if (tgStatus && mailStatus){
				e.target.parentNode.previousElementSibling.previousElementSibling.innerText = callbackAfter;
				e.target.parentNode.previousElementSibling.remove();
				e.target.parentNode.remove();
			}
		} else {formValidator(validationValues.callback.nameStatus, validationValues.callback.phoneStatus, name, phone)}
	};
	if (e.target.id === 'modal-form-button' && pageID) {
		e.preventDefault();
		const name = document.querySelector('input#modal-form-name');
		const phone = document.querySelector('input#modal-form-phone');
		if (validationValues.modal.phoneStatus && validationValues.modal.nameStatus && phone.value !== '' && name.value !== ''){
			const formData = new FormData();
			formData.append('siteUrl', window.location.href);
			formData.append('name',name.value);
			formData.append('phone', phone.value);
			formData.append('message', consultMessage);
			const tgStatus = await trySendToTelegram(formData);
			const mailStatus = await trySendToMail(formData);
			if (tgStatus && mailStatus){
				e.target.parentNode.previousElementSibling.innerText = consultAfter;
				e.target.parentNode.remove();
				setTimeout(() => {closeModal();}, 4000);
			}
		} else {formValidator(validationValues.modal.nameStatus, validationValues.modal.phoneStatus, name, phone)}
	};
	if (e.target.classList.contains('brands-item') || e.target.parentNode.classList.contains('brands-item')){
		let itemID;
		const brands = e.target.parentNode.parentNode.parentNode;
		const navList = brands.querySelectorAll('li.brands-item');
		if (!navList.length){return};
		const list = brands.querySelectorAll('div.brands-list-item');
		navList.forEach(item => {if (item.classList.contains('active')) {item.classList.remove('active')}});
		if (e.target.classList.contains('brands-item')){e.target.classList.add('active');itemID = e.target.id.split('-')[2]};
		if (e.target.parentNode.classList.contains('brands-item')){e.target.parentNode.classList.add('active');};
		if (itemID === 'list'){
			list.forEach(brand => {if (brand.classList.contains('hidden')){brand.classList.remove('hidden')};})
		} else {
			list.forEach(brand => {
				if (brand.classList.contains('hidden')){brand.classList.remove('hidden')};
				if (!brand.classList.contains('category-' + itemID)){brand.classList.add('hidden')};
			});
		}
	};
	if (e.target.id.includes('select-map')) { changeMap(e.target.id)}
})