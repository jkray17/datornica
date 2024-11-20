const windowWidth  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

async function addToHead(elem){document.querySelector('head').append(elem);}
async function addToBody(elem){document.querySelector('body').append(elem);}

function createLink(rel, media, type, href){const link = document.createElement('link');
	link.rel = rel;link.media = media;link.type = type;link.href = href;return link;
}

if (document.querySelector('div#brands-list')) {addToHead(createLink('stylesheet', 'all', 'text/css', '/css/brands-list.css'));};

/* SEO METRICS */

// setTimeout(() => {
// 	/* yandex */
	
// 	const ymNoScript = document.createElement('noscript');
// 	const div = document.createElement('div');
// 	const img = document.createElement('img');
// 	img.src = 'https://mc.yandex.ru/watch/28988885';
// 	img.style.position = 'absolute';
// 	img.style.left = '-9999px';
// 	img.alt = '';
// 	div.append(img);
// 	ymNoScript.append(div);
// 	addToBody(ymNoScript);
	
// 	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
// 		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
// 		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
// 		ym(28988885, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true });
	
// 	/* google */
	
// 	const conversion = document.createElement('script');
// 	conversion.async = true;
// 	conversion.src = "//www.googleadservices.com/pagead/conversion.js";
// 	addToBody(conversion);
	
// 	const googleScript = document.createElement('script');
// 	googleScript.async = true;
// 	googleScript.src = "https://www.googletagmanager.com/gtag/js?id=AW-946191896";
// 	addToBody(googleScript);
	
// 	window.dataLayer = window.dataLayer || []; function gtag(){ dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-946191896');
	
// 	gtag('event', 'page_view', {'send_to': 'AW-946191896','user_id': '318-715-0863'});
	
// 	const googleNoScript = document.createElement('noscript');
// 	const divGoogle = document.createElement('div');
// 	const imgGoogle = document.createElement('img');
// 	imgGoogle.src = '//googleads.g.doubleclick.net/pagead/viewthroughconversion/946191896/?value=0&amp;guid=ON&amp;script=0';
// 	imgGoogle.style.position = 'absolute';
// 	imgGoogle.style.left = '-9999px';
// 	imgGoogle.alt = '';
// 	divGoogle.append(imgGoogle);
// 	googleNoScript.append(divGoogle);
// 	addToBody(googleNoScript);
	
// 	/* FaceBook and other*/
	
// 	!function(f,b,e,v,n,t,s){
// 		if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
// 		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];
// 		s.parentNode.insertBefore(t,s)
// 	}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '3186077161515652');fbq('track', 'PageView');
	
// 	const fbNoScript = document.createElement('noscript');
// 	const imgFb = document.createElement('img');
// 	imgFb.src = 'https://www.facebook.com/tr?id=3186077161515652&ev=PageView&noscript=1';
// 	imgFb.style.position = 'absolute';
// 	imgFb.style.left = '-9999px';
// 	imgFb.alt = '';
// 	fbNoScript.append(imgFb);
// 	addToBody(fbNoScript);
															 
// 		setTimeout(function(){ 
// 			const jivo = document.createElement('script');
// 			jivo.src = document.documentElement.lang === 'lv' ? '//code.jivosite.com/widget/L0YugchpTg' : '//code.jivosite.com/widget/uVfv6Jv9aT';
// 			document.getElementsByTagName('head')[0].appendChild(jivo);	
// 		}, 5000);
	
// }, 3000);