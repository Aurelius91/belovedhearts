<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0">


    <title><?= $web; ?> - <?= $title;?></title>

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugin/bootstrap/css/bootstrap.min.css">
    <? $this->load->view('load-style'); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugin/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugin/owl-carousel/owl.theme.default.css">

    <!--[if lt IE 9]>
        <script src="<?= base_url(); ?>assets/plugin/ie-support/html5shiv.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugin/ie-support/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<? $this->load->view('navigation'); ?>

	<section id="artist-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/artist/bg.jpg);">
		<div class="container-fluid">
			<div class="banner-overlay"></div>
			<div class="banner-text-wrap">
				<div class="banner-title">
					<h4>Take care of your body. It's the only place you have to live.</h4>
				</div>
				<div class="banner-sub">
					<h5>- Henry Ford -</h5>
				</div>
			</div>
		</div>
	</section>

	<section id="our-artist-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="our-artist-title v-top-desktop">
						<h3>Our<br>Artists</h3>
					</div><!--
				 --><div class="our-artist-carousel-wrap v-top-desktop">
						<div id="artist-carousel" class="owl-theme owl-carousel">
							<div class="artist-carousel-item" style="background-image: url(<?= base_url(); ?>assets/images/artist/artist-1.jpg);">
								<div class="artist-activate">
									<h4>Austellung</h4>
								</div>
							</div>
							<div class="artist-carousel-item" style="background-image: url(<?= base_url(); ?>assets/images/artist/artist-2.jpg);">
								<div class="artist-activate">
									<h4>Yayoi</h4>
								</div>
							</div>
							<div class="artist-carousel-item" style="background-image: url(<?= base_url(); ?>assets/images/artist/artist-3.jpg);">
								<div class="artist-activate">
									<h4>Abraham</h4>
								</div>
							</div>
							<div class="artist-carousel-item" style="background-image: url(<?= base_url(); ?>assets/images/artist/artist-4.jpg);">
								<div class="artist-activate">
									<h4>Lauv</h4>
								</div>
							</div>
							<div class="artist-carousel-item" style="background-image: url(<?= base_url(); ?>assets/images/artist/artist-1.jpg);">
								<div class="artist-activate">
									<h4>Austellung</h4>
								</div>
							</div>
							<div class="artist-carousel-item" style="background-image: url(<?= base_url(); ?>assets/images/artist/artist-2.jpg);">
								<div class="artist-activate">
									<h4>Yayoi</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 artist-content-wrap">
					<div class="col-xs-12 col-sm-5 artist-big-pict-wrap">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 artist-bigger-pict" style="background-image: url(<?= base_url(); ?>assets/images/artist/artist-bigger-3.jpg);">
						</div>
						<div class="artist-decor-1">
							<img src="<?= base_url(); ?>assets/images/artist/decor-1.png">
						</div>
						<div class="artist-decor-2">
							<img src="<?= base_url(); ?>assets/images/donate/circle-1.png">
						</div>
						<div class="artist-decor-3">
							<img src="<?= base_url(); ?>assets/images/donate/circle-2.png">
						</div>
					</div>
					<div class="col-xs-12 col-sm-2 artist-name-wrap">
						<div class="artist-name-rotate">
							<h3>Abraham James</h3>
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 artist-text">
						<div class="col-xs-12 artist-subtitle">
							<h4>The purpose of human life is to serve, and to show compassion and the will to help others.</h4>
						</div>
						<div class="col-xs-12 artist-desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
						</div>
					</div>
				</div>
			</div>
			<div class="artist-big-decor-1">
				<img src="<?= base_url(); ?>assets/images/artist/decor-5.png">
			</div>
			<div class="artist-big-decor-2">
				<img src="<?= base_url(); ?>assets/images/artist/decor-4.png">
			</div>
			<div class="artist-big-decor-3">
				<img src="<?= base_url(); ?>assets/images/artist/decor-2.png">
			</div>
		</div>
	</section>

	<section id="artist-collection-section">
		<div class="container-fluid">
			<div class="row row-eq-height-desktop">
				<div class="col-xs-12 col-sm-3 artist-collection artist-collection-name">
					<div class="artist-name">
						<h4>Abraham Collections</h4>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 artist-collection" style="background-image: url(<?= base_url(); ?>assets/images/artist/collection-1.jpg);">
					<div class="artist-collection-info">
						<div class="artist-collection-title">
							<h5>Women in Hill</h5>
						</div>
						<div class="artist-collection-button">
							<button class="btn btn-help-2" data-toggle="modal" data-target="#artist-popup">See Detail</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 artist-collection-2" style="background-image: url(<?= base_url(); ?>assets/images/artist/collection-2.jpg);">
					<div class="artist-collection-info">
						<div class="artist-collection-title">
							<h5>Women in Hill</h5>
						</div>
						<div class="artist-collection-button">
							<button class="btn btn-help-2" data-toggle="modal" data-target="#artist-popup">See Detail</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 artist-collection" style="background-image: url(<?= base_url(); ?>assets/images/artist/collection-3.jpg);">
					<div class="artist-collection-info">
						<div class="artist-collection-title">
							<h5>Women in Hill</h5>
						</div>
						<div class="artist-collection-button">
							<button class="btn btn-help-2" data-toggle="modal" data-target="#artist-popup">See Detail</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 artist-collection" style="background-image: url(<?= base_url(); ?>assets/images/artist/collection-4.jpg);">
					<div class="artist-collection-info">
						<div class="artist-collection-title">
							<h5>Women in Hill</h5>
						</div>
						<div class="artist-collection-button">
							<button class="btn btn-help-2" data-toggle="modal" data-target="#artist-popup">See Detail</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 artist-collection" style="background-image: url(<?= base_url(); ?>assets/images/artist/collection-5.jpg);">
					<div class="artist-collection-info">
						<div class="artist-collection-title">
							<h5>Women in Hill</h5>
						</div>
						<div class="artist-collection-button">
							<button class="btn btn-help-2" data-toggle="modal" data-target="#artist-popup">See Detail</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 artist-collection" style="background-image: url(<?= base_url(); ?>assets/images/artist/collection-6.jpg);">
					<div class="artist-collection-info">
						<div class="artist-collection-title">
							<h5>Women in Hill</h5>
						</div>
						<div class="artist-collection-button">
							<button class="btn btn-help-2" data-toggle="modal" data-target="#artist-popup">See Detail</button>
						</div>
					</div>
				</div>
			</div>
			<div class="artist-big-decor-4">
				<img src="<?= base_url(); ?>assets/images/artist/decor-3.png">
			</div>
		</div>
	</section>

	<section class="about-bottom-nav-section">
		<div class="container-fluid">
			<div class="row">
				<a href="<?= base_url(); ?>masterpiece">
					<div class="col-sm-6 about-bottom-nav">
						<h4>BUY MASTERPIECE</h4>
					</div>
				</a>
				<a href="<?= base_url(); ?>merchandise">
					<div class="col-sm-6 about-bottom-nav">
						<h4>BUY MERCHANDISE</h4>
					</div>
				</a>
			</div>
		</div>
	</section>

	<div id="artist-popup" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-body">
	      	<div class="row row-eq-height-desktop">
		        <div class="artist-popup-left">
		        	<div class="artist-popup-frame-wrap">
		        		<div class="artist-popup-frame-pict">
		        			<div class="artist-popup-pict" style="background-image: url(<?= base_url(); ?>assets/images/artist/popup-1.jpg);"></div>
		        			<img src="<?= base_url(); ?>assets/images/artist/artist-frame.png">
		        		</div>
		        	</div>
		        </div><!--
		     --><div class="artist-popup-right">
		        	<div class="artist-popup-text">
		        		<h5>Women in Hill</h5>
		        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

		        	</div>
		        </div>
		    </div>
	        <div class="artist-popup-close">
	      		<button type="button" class="close" data-dismiss="modal"><img src="<?= base_url(); ?>assets/images/artist/close.png"></button>
	      	</div>
	      	<div class="artist-popup-decor-1">
	      		<img src="<?= base_url(); ?>assets/images/artist/popup-decor-1.png">
	      	</div>
	      	<div class="artist-popup-decor-2">
	      		<img src="<?= base_url(); ?>assets/images/artist/popup-decor-2.png">
	      	</div>
	      	<div class="artist-popup-decor-3">
	      		<img src="<?= base_url(); ?>assets/images/artist/popup-decor-3.png">
	      	</div>
	      </div>
	    </div>

	  </div>
	</div>

	<? include 'footer.php' ?>

</body>

<script src="<?= base_url(); ?>assets/plugin/animate/animate.js"></script>
<script>
    var animate = new Animate({
        target: '[data-animate]',
        remove: true,
        scrolled: false,
        reverse: false,
        onLoad: true,
        onScroll: true,
        onResize: false,
        offset: [1, 0.5],
        disableFilter: false,
        callbackOnInit: function() {},
        callbackOnAnimate: function(el) {},
    });

    animate.init();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>if (!window.jQuery) { document.write('<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"><\/script>'); }</script>
<script src="<?= base_url(); ?>assets/plugin/bootstrap/js/bootstrap-custom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async defer></script>
<script src="<?= base_url(); ?>assets/plugin/parallax/parallax.js"></script>
<script src="<?= base_url(); ?>assets/plugin/owl-carousel/owl.carousel.min.js"></script>

<script>
var isMobile = {
    Android: function() { return navigator.userAgent.match(/Android/i); },
    BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i); },
    iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); },
    Opera: function() { return navigator.userAgent.match(/Opera Mini/i); },
    Windows: function() { return navigator.userAgent.match(/IEMobile/i); },
    any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };

    jQuery(function($) {
        if (isMobile.any()) {
            document.documentElement.className = document.documentElement.className + " touch";

            $('.go-parallax').each(function(i, obj) {

                $(this).css("background-image", 'url('+$(this).data('image-src')+')');
                $(this).css("background-color", "#FFFFFF");
                $(this).css("background-size", "cover");
                $(this).css("background-position", "center center");

            });
        }

    });
</script>

<? include 'menu-function.php' ?>

<script>
	$('#artist-carousel').owlCarousel({
		autoplay: true,
		loop: true,
		nav: false,
		dots: false,
		responsive : {
		    0 : {
		        items : 2
		    },
		    768 : {
		        items : 5
		    },
		},
		autoplayHoverPause:true,
		autoplaySpeed: 400,
		autoplayTimeout: 3000,
		margin: 30,
	});

	$('.artist-carousel-item').click(function(){
		$('.artist-activate').removeClass('artist-name-on');
		$(this).children().addClass('artist-name-on');
		$('#artist-carousel').trigger('stop.owl.autoplay');
	});

</script>

</html>
