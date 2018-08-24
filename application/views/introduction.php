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

	<section id="introduction-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/introduction/bg.jpg);">
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

	<section id="intro-1-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 intro-title">
					<h4>Our<br>Introduction</h4>
				</div>
				<div class="col-xs-12 intro-1-content-wrap">
					<div class="col-xs-12 col-sm-5 intro-1-content">
						<div class="col-xs-12 intro-sub">
							<h4>The purpose of human life is to serve, and to show compassion and the will to help others.</h4>
						</div>
						<div class="col-xs-12 intro-desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 intro-1-pict-wrap">
						<div class="intro-1-pict" style="background-image: url(<?= base_url(); ?>assets/images/introduction/intro-1.jpg);"></div>
						<div class="intro-1-decor">
							<img src="<?= base_url(); ?>assets/images/introduction/decor-1.png">
						</div>
						<div class="intro-2-decor">
							<img src="<?= base_url(); ?>assets/images/introduction/decor-2.png">
						</div>
						<div class="intro-3-decor">
							<img src="<?= base_url(); ?>assets/images/introduction/decor-3.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="intro-2-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 intro-2-pict-wrap">
					<div class="intro-2-pict" style="background-image: url(<?= base_url(); ?>assets/images/introduction/intro-2.jpg);"></div>
				</div>
				<div class="col-xs-12 col-sm-6 intro-2-right-wrap">
					<div class="col-xs-12 benefit-tab-wrap">
						<ul class="nav nav-pills">
							<li class="active">
								<a data-toggle="pill" href="#benefit-1">
									<div class="benefit-circle" data-src="<?= base_url(); ?>assets/images/introduction/benefit-1-grey.png">
										<img src="<?= base_url(); ?>assets/images/introduction/benefit-1-white.png" data-src="<?= base_url(); ?>assets/images/introduction/benefit-1-white.png">
									</div>
								</a>
							</li>
							<li>
								<a data-toggle="pill" href="#benefit-2">
									<div class="benefit-circle" data-src="<?= base_url(); ?>assets/images/introduction/benefit-2-grey.png">
										<img src="<?= base_url(); ?>assets/images/introduction/benefit-2-grey.png" data-src="<?= base_url(); ?>assets/images/introduction/benefit-2-white.png">
									</div>
								</a>
							</li>
							<li>
								<a data-toggle="pill" href="#benefit-3">
									<div class="benefit-circle" data-src="<?= base_url(); ?>assets/images/introduction/benefit-3-grey.png">
										<img src="<?= base_url(); ?>assets/images/introduction/benefit-3-grey.png" data-src="<?= base_url(); ?>assets/images/introduction/benefit-3-white.png">
									</div>
								</a>
							</li>
							<li>
								<a data-toggle="pill" href="#benefit-4">
									<div class="benefit-circle" data-src="<?= base_url(); ?>assets/images/introduction/benefit-4-grey.png">
										<img src="<?= base_url(); ?>assets/images/introduction/benefit-4-grey.png" data-src="<?= base_url(); ?>assets/images/introduction/benefit-4-white.png">
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 intro-2-text-wrap">
						<div class="col-xs-12 intro-2-title">
							<h3>The<br>Benefits</h3>
						</div>
						<div class="col-xs-12 tab-content benefit-content">
							<div id="benefit-1" class="tab-pane fade in active">
								<h4>Happy Heart</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
							</div>
							<div id="benefit-2" class="tab-pane fade"></div>
							<div id="benefit-3" class="tab-pane fade"></div>
							<div id="benefit-4" class="tab-pane fade"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="intro-3-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 intro-title">
					<h4>The<br>Application</h4>
				</div>
				<div class="col-xs-12 intro-1-content-wrap">
					<div class="col-xs-12 col-sm-5 intro-1-content">
						<div class="col-xs-12 intro-sub">
							<h4>The purpose of human life is to serve, and to show compassion and the will to help others.</h4>
						</div>
						<div class="col-xs-12 intro-3-desc">
							<h4>Daily Life</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 intro-1-pict-wrap">
						<div id="intro-carousel" class="owl-carousel owl-theme">
							<div class="intro-item" style="background-image:url(<?= base_url(); ?>assets/images/introduction/intro-3.jpg);"></div>
							<div class="intro-item" style="background-image:url(<?= base_url(); ?>assets/images/introduction/intro-3.jpg);"></div>
							<div class="intro-item" style="background-image:url(<?= base_url(); ?>assets/images/introduction/intro-3.jpg);"></div>
						</div>
						<div class="intro-1-decor">
							<img src="<?= base_url(); ?>assets/images/introduction/decor-1.png">
						</div>
						<div class="intro-2-decor">
							<img src="<?= base_url(); ?>assets/images/introduction/decor-2.png">
						</div>
						<div class="intro-3-decor">
							<img src="<?= base_url(); ?>assets/images/introduction/decor-3.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bottom-nav-section">
		<div class="container-fluid">
			<div class="row">
				<a href="<?= base_url(); ?>counseling">
					<div class="col-sm-4 intro-bottom-nav">
						<div class="intro-bottom-nav-inside">
							<h4>GO TO COUNSELING</h4>
						</div>
					</div>
				</a>
				<a href="<?= base_url(); ?>workshopandexhibition">
					<div class="col-sm-4 intro-bottom-nav">
						<div class="intro-bottom-nav-inside">
							<h4>GO TO WORKSHOP & EXHIBITION</h4>
						</div>
					</div>
				</a>
				<a href="<?= base_url(); ?>helpthem">
					<div class="col-sm-4 intro-bottom-nav">
						<div class="intro-bottom-nav-inside">
							<h4>HELP THEM</h4>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

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
	$('.benefit-tab-wrap li').click(function(){
		$('.benefit-circle').each(function(){
			var defaultIcon = $(this).attr('data-src');
			$(this).find('img').attr('src',defaultIcon);
		});
		var activeIcon = $(this).find('img').attr('data-src');
		$(this).find('img').attr('src', activeIcon);
	});

	$('#intro-carousel').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		items: 1,
		navText:['<img src="<?= base_url(); ?>assets/images/introduction/prev-arrow.png">','<img src="<?= base_url(); ?>assets/images/introduction/next-arrow.png">']
	});
</script>

</html>
