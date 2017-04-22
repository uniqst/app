// $('.catalog').dcAccordion({speed:200});

function showCart(cart){
	$('#cart .modal-body').html(cart);
	$('#cart').modal();
}

function getCart(){
	
	$.ajax({
		url: '/cart/show',
		type: 'GET',
		success: function(res){
			if(!res) alert('Ошибка');
			showCart(res);
		},
		error: function(){
			alert('Error');
		}
	});
}

$('#cart .modal-body').on('click', '.del-item', function(){
	var id = $(this).data('id');
	$.ajax({
		url: '/cart/del-item',
		data: {id: id},
		type: 'GET',
		success: function(res){
			if(!res) alert('Ошибка');
			showCart(res);
		},
		error: function(){
			alert('Error');
		}
	});
});


function clearCart(){
	$.ajax({
		url: '/cart/clear',
		type: 'GET',
		success: function(res){
			if(!res) alert('Ошибка');
			showCart(res);
		},
		error: function(){
			alert('Error');
		}
	});
}



// $('.add-to-cart').on('click', function (e){
// 	e.preventDefault();
// 	var id = $(this).data('id');
// 	qty = $('#qty' + id).val();
// 	$.ajax({
// 		url: '/cart/add',
// 		data: {id: id, qty: qty},
// 		type: 'GET',
// 		success: function(res){
// 			if(!res) alert('Ошибка');
// 			showCart(res);
// 		},
// 		error: function(){
// 			alert('Error');
// 		}
// 	});
// });

$('.add-to-cart').on('click', function (e){
	e.preventDefault();
	var id = $(this).data('id');
	//qty = $('#qty' + id).val();
	$.ajax({
		url: '/cart/add',
		data: {id: id,qty:1},
		type: 'GET',
		success: function(res){
			if(!res) alert('Ошибка');
			showCart(res);
		},
		error: function(){
			alert('Error');
		}
	});
});

$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
});



/*
$(document).ready(function() {
	var navbarToggle = '.navbar-toggle'; // name of navbar toggle, BS3 = '.navbar-toggle', BS4 = '.navbar-toggler'
	$('.dropdown, .dropup').each(function() {
		var dropdown = $(this),
			dropdownToggle = $('[data-toggle="dropdown"]', dropdown),
			dropdownHoverAll = dropdownToggle.data('dropdown-hover-all') || false;

		// Mouseover
		dropdown.hover(function(){
			var notMobileMenu = $(navbarToggle).size() > 0 && $(navbarToggle).css('display') === 'none';
			if ((dropdownHoverAll == true || (dropdownHoverAll == false && notMobileMenu))) {
				dropdownToggle.trigger('click');
			}
		})
	});
});
*/

$(document).ready(function() {

	// $('#myCarousel').carousel({
	// 	interval: 3000,
	// })

	function fix_size() {
		var images = $('.img-container img');
		images.each(setsize);

		function setsize() {
			var img = $(this),
				img_dom = img.get(0),
				container = img.parents('.img-container');
			if (img_dom.complete) {
				resize();
			} else img.one('load', resize);

			function resize() {
				if ((container.width() / container.height()) < (img_dom.width / img_dom.height)) {
					img.width('100%');
					img.height('auto');
					return;
				}
				img.height('100%');
				img.width('auto');
			}
		}
	}
	$(window).on('resize', fix_size);
	fix_size();


	$('.main-carousel').carousel({
		interval: 7000
	});
});
