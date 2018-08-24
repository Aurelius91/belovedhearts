<script>
	$(document).ready(function(){
		var outsideMenu = $('.menu .nav-pills');
		var outsideSub = $('.dropdown-div');
		$('html').click(function(e){
			if (!$(outsideMenu).is(e.target) && $(outsideMenu).has(e.target).length === 0)
	        {
	            $(outsideSub).removeClass('look');
	            $('.submenu-ul').removeClass('look');
	            $(this).find('.expand-arrow').removeClass('rotate-180');
	        }
		});

	    $(".dropdown-call").click(function(){
			var dropLink = $(this).attr('data-href');
			if($(this).next().hasClass('look')){
				$(dropLink).removeClass('look');
				// $('.dropdown-wrap a').removeClass('lucid-bold');
			}
			else{
				$('.dropdown-div').removeClass('look');
				$(dropLink).toggleClass('look');
			}


		});

	    subMenu();


	    if(window.location.href.indexOf("whatwedo") > -1) {
	       $('.about-option-highlight').css('width', '13%');
	       $('.about-option-circle').css('left', '13%');
	    }
	    else if(window.location.href.indexOf("visionandmission") > -1){
	    	$('.about-option-highlight').css('width', '40%');
	       	$('.about-option-circle').css('left', '40%');
	    }
	    else if(window.location.href.indexOf("values") > -1){
	    	$('.about-option-highlight').css('width', '66%');
	       	$('.about-option-circle').css('left', '66%');
	    }
	    else{
	    	$('.about-option-highlight').css('width', '100%');
	       	$('.about-option-circle').css('left', '88%');
	    }

	    cartPop();
	    cartPopupQuantity();
	});

	function subMenu(){
		$('.dropdown-wrap li a').click(function(){
			var subLink = $(this).attr('data-href');

			if($(subLink).hasClass('look')){
				$(subLink).removeClass('look');
			}
			else{
				$('.submenu-ul').removeClass('look');
				$(subLink).addClass('look');
			}

			if($(this).children().hasClass('expand-arrow')){
				if($(this).find('.expand-arrow').hasClass('rotate-180')){
					console.log('rotate ada');
					$(this).find('.expand-arrow').removeClass('rotate-180');
				}
				else{
					console.log('gak ada');
					$('.expand-arrow').removeClass('rotate-180');
					$(this).find('.expand-arrow').addClass('rotate-180');
				}
			}
			else{
				$('.expand-arrow').removeClass('rotate-180');
			}

			$('.dropdown-wrap a').removeClass('lucid-bold');
			$(this).addClass('lucid-bold');
		});
	}

	function cartPop(){
		$('.cart-icon-wrap').click(function(){
			$('.cart-popup-wrap').addClass('cart-pop-show');
			$('.cart-popup').addClass('cart-popping')
		});

		$('.cart-popup-close').click(function(){
			$('.cart-popup-wrap').removeClass('cart-pop-show');
			$('.cart-popup').removeClass('cart-popping')
		});
	}

	function cartPopupQuantity(){
		$('.add').click(function () {
			$(this).prev().val(+$(this).prev().val() + 1);
		});
		$('.sub').click(function () {
			if ($(this).next().val() > 1) {
		    	if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
			}
		});
	}

</script>