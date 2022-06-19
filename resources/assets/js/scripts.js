$(function() {

	let toggle = document.querySelector('.nav-toggle')
	let navMob = document.querySelector('.nav-mob')
	toggle.addEventListener('click', function(e) {
		this.classList.toggle('opened')
		navMob.classList.toggle('show')
	})

	let clickNav = document.querySelectorAll('.nav-list__item .anchor')

	clickNav.forEach(el => {
		el.addEventListener("click", () => {
			toggle.classList.remove('opened')
			navMob.classList.remove('show')
		})
	})

	const navHeight = $('.nav').innerHeight()
	$('.height').css('margin-top', navHeight)

	if ($(window).width() < 767) {
		$('.services-wrap').slick({
			slidesToShow: 1,
			adaptiveHeight: true,
			fade: true
		})
	}

	// Скролинг по якорям
	$('.anchor').bind("click", function(e){
		const anchor = $(this)
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-navHeight // отступ от меню
		}, 500)
	e.preventDefault()
	})

	$('.portfolio-slider').slick({
		infinite: false,
		slidesToShow: 1,
		adaptiveHeight: true,
		fade: true
	})

	$('.clients-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 4,
		adaptiveHeight: true,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					rows: 3,
					slidesPerRow: 1,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
		]
	})

	$('a[href^="#"].in-mark').click(function(event) {
		event.preventDefault()
		var el = $(this).attr('href')
		$('.in-mark').removeClass('actm')
		$(this).addClass('actm')
	})

	// Инит фансибокса
	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	})

	$('.services-link').click(function(e) {
		$('.dropdown-list').toggleClass('show')
		$(this).toggleClass('toggle-active')
		e.preventDefault()
	})

	$('.parallax-layer').parallax()

	$('.animate-container_i1 .animate').parallax({xparallax: false, yparallax: '250px',})
	$('.animate-container_i2 .animate').parallax({xparallax: false, yparallax: '100px',})
	$('.animate-container_i3 .animate').parallax({xparallax: '50px', yparallax: false,})
	$('.animate-container_i4 .animate').parallax({xparallax: '100px', yparallax: '100px',})
	$('.animate-container_i5 .animate').parallax({xparallax: '100px', yparallax: '100px',})
	$('.animate-container_i7 .animate').parallax({xparallax: false, yparallax: '100px',})
	$('.animate-container_i8 .animate').parallax({xparallax: '100px', yparallax: '100px',})
	$('.animate-container_i9 .animate').parallax({xparallax: false, yparallax: '250px',})
	$('.animate-container_i10 .animate').parallax({xparallax: '150px', yparallax: false,})
	$('.animate-container_i11 .animate').parallax({xparallax: '75px', yparallax: '75px',})
	$('.animate-container_i12 .animate').parallax({xparallax: false, yparallax: '75px',})
	$('.animate-container_i13 .animate').parallax({xparallax: false, yparallax: '75px',})

	
		$('.openMore').click(function(e) {
			$(this).closest('.service-portfolio').find('.service-portfolio__wraper.none').removeClass('none')
			$(this).closest('.service-portfolio').find('.openModal.none').removeClass('none')
			$(this).hide()
			e.preventDefault()
		})
	
	//price service btn
	$('.service-btn').click(function() {
		let link = $(this).data('price')
		let hiddenInput = $('#modal2 form').find('input[name=price]')
		hiddenInput.val(link)
	})

	// Отправка формы
	$('form').submit(function() {
		let link = $(this).find('input[name=price]').val()
		let data = $(this).serialize()
		data += '&ajax-request=true'
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				if (link != undefined) {
					window.open(link, '_blank')
				}
				$.fancybox.close()
				$.fancybox.open({src:'#thn'})
			})()
		})
		return false
	})

})
