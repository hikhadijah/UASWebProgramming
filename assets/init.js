const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav, {
	activeClass: 'active'
});

const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
	indicators: false,
	height: 500,
	transition: 600,
	interval: 3000
});

const paralax = document.querySelectorAll('.parallax');
M.Parallax.init(paralax);

const scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll);

// $(document).ready(function () {
// 	$('select').material_select();
// });

const sel = document.querySelectorAll('select');
M.FormSelect.init(sel);

const side = document.querySelectorAll('.sidenav-adm');
M.Sidenav.init(side);