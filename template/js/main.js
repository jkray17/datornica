document.querySelector('div#index_slider').classList.add('big');

const isLV = document.documentElement.lang === 'lv' ? true : false ;

/*Left menu*/

async function renderMenu(json) {
	const wrapper = document.querySelector('nav#index_left-menu');
	if(json.menuIndex.length && wrapper){
		const frame = document.createElement('ul');
		json.menuIndex.forEach(item => {
			const menuItem = document.createElement('li');
			const itemLink = document.createElement('a');
			itemLink.classList.add('icon');
			itemLink.href = item.href;
			itemLink.title = item.header;
			itemLink.style.background = "url('/" + item.icon + "') center center / 50px 50px no-repeat";
			if (item.submenuIndex.length){
				const itemWrapper = document.createElement('section');
				itemWrapper.classList.add('index_left-menu');
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
    		document.querySelector('div#index_frame').classList.add('right');
    		wrapper.classList.add('show');
		}, 500)
	} else return;
};

async function loadMenu() {
	const fileName = document.documentElement.lang === 'lv' ? '/menu_lv' : '/menu_ru';
    const response = await fetch(fileName, {headers: { 'Accept': 'application/json' }})
	.then((response) => response.json()).then((json) => renderMenu(json));
};

setTimeout(() => {
    document.querySelector('div#slide01').classList.add('show');
    loadMenu();
}, 1500);

/*first slide*/
const widthLimit = 1280;
let lastWidth = widthLimit;
let membersLimit = 4;
let current = 0;
const members = document.querySelectorAll('div.member');

function checkNavigation(){
	const leftArrow = document.querySelector('button#listing-left');
	const rightArrow = document.querySelector('button#listing-right');
	if (current > 0) { leftArrow.classList.remove('hidden');} 
	else { leftArrow.classList.add('hidden');}
	if (current + membersLimit < members.length) { rightArrow.classList.remove('hidden');} 
	else { rightArrow.classList.add('hidden');}
}

function reselectMembers(membersLimit){
	current = 0;
	const hidden = members.length - membersLimit;
	members.forEach(member => { if (member.classList.contains('hidden')){member.classList.remove('hidden')}})
	if (membersLimit < 4) {
		members.forEach(member => { 
			const id = Number(member.id.split('-')[1]);
			if ( id > membersLimit ){member.classList.add('hidden')} 
		})
	};
	checkNavigation()
};



function changeMembers(direction) {
  if (direction === 'left') {
    if (current > 0) {
      members[current + membersLimit - 1].classList.add('hidden');
      members[current - 1].classList.remove('hidden');
      current--;
    }
  } else if (direction === 'right') {
    if (current + membersLimit < members.length) {
      members[current].classList.add('hidden');
      members[current + membersLimit].classList.remove('hidden');
      current++;
    }
  }
	checkNavigation()
}

function checkSize(){
	const currentWidth = window.innerWidth;
	if (currentWidth >= widthLimit){lastWidth = widthLimit; membersLimit = 4; reselectMembers(membersLimit); return};
	if (currentWidth < widthLimit && currentWidth >= 960 && currentWidth < widthLimit && lastWidth !== 1){
		lastWidth = 1; membersLimit = 3;reselectMembers(membersLimit);};
	if (currentWidth < widthLimit && currentWidth >= 680 && currentWidth < 960 && lastWidth !== 2){
		lastWidth = 2; membersLimit = 2;reselectMembers(membersLimit);};
	if (currentWidth < widthLimit && currentWidth >= 260 && currentWidth < 680 && lastWidth !== 3){
		lastWidth = 3; membersLimit = 1;reselectMembers(membersLimit);};
	if (currentWidth < widthLimit && currentWidth < 260){lastWidth = widthLimit; membersLimit = 4;};
};

checkSize();

/*Gallery*/
const logoPath = 'img/logo-white.svg';
const gallery = [];
const slideShowInterval = 4000;
let slideShowStatus = false;
let slideShow = null;

function closeGallery() {
	if (slideShowStatus){slideShowStatus = false; clearInterval(slideShow); slideShow = null;}
	const modal = document.querySelector('div#modal-wrapper');
	if (modal){modal.classList.add('close');setTimeout(() => {modal.remove();}, 400);};
}

document.querySelector('section#index_gallery ul').childNodes.forEach(item => {
	if (!item.length) {gallery.push({src: item.firstChild.src.split('/')[6], alt: item.firstChild.alt})}
});

async function changeGallery(type){
	function startSlideShow() {changeGallery('next')};
	const slideShowButton = document.querySelector('button#slideButton-show');
	const current = document.querySelector('div#galleryList img.selected');
	const currentFile = current.src.split('/')[6];
	const currentID = gallery.findIndex(img => img.src === currentFile);
	if (type === 'show' && current){
		if (!slideShowStatus) { changeGallery('next'); slideShowStatus = true; slideShow = setInterval(startSlideShow, slideShowInterval);} 
		else { slideShowStatus = false; clearInterval(slideShow); slideShow = null;};
		slideShowButton.classList.toggle('active');
	};
	if (type === 'next' && current){
		if (currentID < gallery.length - 1){reselectGallery(current.nextElementSibling);} 
		else {reselectGallery(document.querySelector('div#galleryList').firstElementChild);}
	};
	if (type === 'prev' && current){
		if (currentID > 0){reselectGallery(current.previousElementSibling);}
		else {reselectGallery(document.querySelector('div#galleryList').lastElementChild);}
	};
}

async function loadBigImage(target){
	const path = target.src.split('gallery')[0] + 'gallery/big' + target.src.split('gallery')[1]
	const loader = document.querySelector('div.gallery-loader');
	const wrapper = document.querySelector('div#big-wrapper');
	const decription = wrapper.querySelector('span#image-description');
	if (wrapper.classList.contains('loaded')){wrapper.classList.remove('loaded')}
	if (!loader.classList.contains('show')){loader.classList.add('show')};
	setTimeout(() => {
		const downloadingImage = new Image();
		decription.innerText = target.alt;
		downloadingImage.src = path;
		downloadingImage.onload = function(){
    		if (loader.classList.contains('show')){loader.classList.remove('show')};
			if (!wrapper.classList.contains('loaded')){wrapper.classList.add('loaded');}
			wrapper.style.background = 'url(' + path +  ') no-repeat center center / cover';
		};
	}, 400);
};

function reselectGallery(target) {
	document.querySelector('div#galleryList').childNodes.forEach(img => {
		if (img.classList.contains('selected')){img.classList.remove('selected')};
	});
	target.classList.add('selected');
	loadBigImage(target);
}

async function renderGallery(target){
	const body = document.querySelector('body');
	const modal = document.createElement('div');
	const closeButton = document.createElement('button');
	closeButton.id = 'modal-close';
	closeButton.innerText = '✖';
	modal.id = 'modal-wrapper';
	const list = document.createElement('div');
	list.id = 'galleryList';
	gallery.forEach(img => {
		const image = document.createElement('img');
		image.alt = img.alt; image.src = '/img/mainpage/gallery/' + img.src;
		if(img.src === target.src.split('/')[6]){image.classList.add('selected')}
		list.append(image);
	});
	const loader = document.createElement('div');
	loader.classList.add('gallery-loader', 'show');
	const frame = document.createElement('div');
	frame.id = 'big-frame';
	const wrapper = document.createElement('div');
	wrapper.id = 'big-wrapper';
	wrapper.classList.add('loaded');
	const logo = document.createElement('img');
	logo.src = logoPath;
	logo.alt = 'watermark';
	const description = document.createElement('span');
	description.id = 'image-description';
	wrapper.append(logo, description);
	frame.append(wrapper);
	const controls = document.createElement('div');
	controls.id = 'galleryControls';
	const prev = document.createElement('button');
	prev.innerText = '➧';
	prev.title = isLV ? 'Iepriekšējais' : 'Предыдущая';
	prev.id = 'slideButton-prev';
	const show = document.createElement('button');
	show.innerText = '▶';
	show.title = isLV ? 'Slaidrāde' : 'Слайдшоу';
	show.id = 'slideButton-show';
	const next = document.createElement('button');
	next.innerText = '➧';
	next.title = isLV ? 'Nākamais' : 'Следующая';
	next.id = 'slideButton-next';
	controls.append(prev, show, next);
	modal.append(closeButton, list, loader, frame, controls);
	body.append(modal);
	loadBigImage(target);
};

/* Rating*/

function renderRating(target){
	const id = Number(target.parentNode.parentNode.parentNode.parentNode.id.split('-')[1]);
	const type = target.classList[0] === 'down' ? (isLV ? 'negatīvs' :'негативная') : (target.classList[0] === 'up' ? (isLV ? 'pozitīvs' :'позитивная') : null)
	if (!isNaN(id) && type){
	const member = document.querySelector('div.member#member-' + id);
	const path = member.querySelector('img').src;
	const body = document.querySelector('body');
	const modal = document.createElement('div');
	const closeButton = document.createElement('button');
	closeButton.id = 'modal-close';
	closeButton.innerText = '✖';
	modal.id = 'modal-wrapper';
	const formWrapper = document.createElement('div');
	formWrapper.id = 'form-wrapper';
	const header = document.createElement('h2');
	header.innerText = isLV ? 'Darba Vērtējums' : 'Оценка работы';
	const photo = document.createElement('div');
	photo.classList.add('rate-photo');
	photo.style.background = 'url(' + path +  ') no-repeat center center / cover';
	const name = document.createElement('p');
	name.innerHTML = isLV ? 'Meistars' + ': <span>' + member.querySelector('p.member-name').innerText + '</span>' 
		:'Мастер' + ': <span>' + member.querySelector('p.member-name').innerText + '</span>';
	name.id = 'master-name';
	name.classList.add('rate');
	const rate = document.createElement('p');
	rate.innerHTML = isLV ? 'Jūsu vērtējums:  <span>kopumā ' + type + '</span>' : 'Ваша оценка: <span>в целом ' + type + '</span>';
	rate.id = 'master-rate';
	rate.classList.add('rate', target.classList[0]);
	const form = document.createElement('form');
	const comment = document.createElement('textarea');
	comment.id = 'rate-comment';
	comment.required = true;
	comment.placeholder = isLV ? 'Jūsu komentārs (obligāts!)' : 'Ваш комментарий (обязательно!)';
	comment.maxLength = 720;
	comment.name = 'comment';
	const formName = document.createElement('input');
	formName.id = 'rate-name';
	formName.required = true;
	formName.placeholder = isLV ? 'Jūsu vārds (līgumā)' : 'Ваше имя (в договоре)';
	formName.maxLength = 40;
	formName.type = 'text';
	formName.name = 'name';
	const formOrder = document.createElement('input');
	formOrder.id = 'rate-order';
	formOrder.required = true;
	formOrder.placeholder = isLV ? 'Līguma numurs' : 'Номер договора';
	formOrder.min = 1;
	formOrder.max = 9999;
	formOrder.type = 'number';
	formOrder.name = 'order';
	const button = document.createElement('button');
	button.id = 'rate-button';
	button.type = 'submit';
	button.innerText = isLV ? 'Iesniedziet vērtējumu' : 'Отправить оценку';
	form.append(comment, formName, formOrder, button);
	formWrapper.append(photo, header, name, rate, form);
	modal.append(closeButton, formWrapper);
	body.append(modal);
	formOrder.oninput = function () {if (this.value.length > 4) {this.value = this.value.slice(0,4);}}
	}
}

async function validateRating(){
	function colorize(target){target.classList.add('invalid');setTimeout(() => {target.classList.remove('invalid');}, 2000);};
	const regexName = /^([a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)( [a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+(?:-[a-zA-Zа-яА-ЯёЁāčēģīķļņšūžĀČĒĢĪĶĻŅŠŪŽ]+)?)?$/u;
	const regexOrderNumber = /^(?:[1-9]\d{0,3}|9999)$/;
	const rateName = document.querySelector('input#rate-name').value;
	const rateOrderNumber = document.querySelector('input#rate-order').value;
	const commentText = document.querySelector('textarea#rate-comment').value;
	if (regexName.test(rateName) && regexOrderNumber.test(rateOrderNumber) && commentText.length > 0 && commentText.length < 721){
		const trySendMasterRatingUpdate = (formData) => fetch('master-rating', {method: 'POST',body: formData})
		.then(function (response) {return true;})
		.catch(err => {return false;});
		const formData = new FormData();
		formData.append('siteUrl', window.location.href);
		formData.append('subject', 'Обновление рейтинга мастера');
		formData.append('master', document.querySelector('div#form-wrapper p#master-name span').innerText || null);
		formData.append('rate', document.querySelector('div#form-wrapper p#master-rate span').innerText || null);
		formData.append('name', rateName);
		formData.append('order', rateOrderNumber);
		formData.append('message', commentText);
		/*
		for (var pair of formData.entries()) {
    		console.log(pair[0]+ ', ' + pair[1]); 
		}
		*/
		const sendMasterRatingUpdate = await trySendMasterRatingUpdate(formData);
		if (sendMasterRatingUpdate){closeGallery()};
		
	} else {
		if (!regexName.test(rateName)){colorize(document.querySelector('input#rate-name'))};
		if (!regexOrderNumber.test(rateOrderNumber)){colorize(document.querySelector('input#rate-order'))};
		if (!commentText.length || commentText.length > 720){colorize(document.querySelector('textarea#rate-comment'))};
	}
};

document.querySelector('body').addEventListener("click", async(e) => {
	if (e.target.id === 'show_more_news' && document.querySelector('section#news_list')){
		e.preventDefault();
		if (!document.querySelector('section#news_list').classList.contains('open')){
			document.querySelector('section#news_list').classList.add('open');e.target.innerText = isLV ? 'Slēpt sarakstu' : 'Скрыть список';}
		else {document.querySelector('section#news_list').classList.remove('open');e.target.innerText = isLV ? 'Parādīt vairāk' : 'Показать больше';}
	};
	if (e.target.classList.contains('gallery')){renderGallery(e.target)};
	if (e.target.classList.contains('up') || e.target.classList.contains('down')){renderRating(e.target)};
	if (e.target.id === 'modal-close' || e.target.id === 'modal-wrapper'){closeGallery()};
	if (e.target.parentNode.id === 'galleryList'){reselectGallery(e.target)};
	if (e.target.id.includes('slideButton')) {changeGallery(e.target.id.split('-')[1])};
	if (e.target.id.includes('listing')) {changeMembers(e.target.id.split('-')[1])};
	if (e.target.id === 'rate-button') { e.preventDefault(); validateRating();};
});
document.querySelector('body').addEventListener("keydown", e => {
	if (document.querySelector('div#galleryControls')){
		if (e.key === 'ArrowRight' || e.key === '6') {changeGallery('next')};
		if (e.key === 'ArrowLeft' || e.key === '4') {changeGallery('prev')};
	};
	if (lastWidth !== widthLimit && !document.querySelector('div#modal-wrapper')) {
		if (e.key === 'ArrowRight' || e.key === '6') {changeMembers('right')};
		if (e.key === 'ArrowLeft' || e.key === '4') {changeMembers('left')};
	};
});
window.addEventListener("resize", checkSize);