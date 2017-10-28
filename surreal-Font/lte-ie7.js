/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'surreal\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-location' : '&#xe001;',
			'icon-envelop' : '&#xe002;',
			'icon-phone' : '&#xe003;',
			'icon-print' : '&#xe004;',
			'icon-clock' : '&#xe005;',
			'icon-arrow-right' : '&#xe006;',
			'icon-arrow-left' : '&#xe007;',
			'icon-twitter' : '&#xe008;',
			'icon-google-plus' : '&#xe009;',
			'icon-facebook' : '&#xe00a;',
			'icon-flickr' : '&#xe00b;',
			'icon-skype' : '&#xe00c;',
			'icon-linkedin' : '&#xe00d;',
			'icon-pinterest' : '&#xe00e;',
			'icon-youtube' : '&#xe00f;',
			'icon-vimeo' : '&#xe010;',
			'icon-dribbble' : '&#xe011;',
			'icon-feed' : '&#xe012;',
			'icon-plus' : '&#xe000;',
			'icon-arrow-left-2' : '&#xe013;',
			'icon-arrow-down' : '&#xe014;',
			'icon-arrow-up' : '&#xe015;',
			'icon-arrow-right-2' : '&#xe016;',
			'icon-quote' : '&#xe017;',
			'icon-search' : '&#xe018;',
			'icon-brush' : '&#xe019;',
			'icon-share' : '&#xe01a;',
			'icon-mobile' : '&#xe01b;',
			'icon-camera' : '&#xe01c;',
			'icon-camera-2' : '&#xe01d;',
			'icon-quill' : '&#xe01e;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};