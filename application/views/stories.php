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

	<section id="stories-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/stories/bg.jpg);">
		<div class="container-fluid">
			<div class="banner-overlay"></div>
			<div class="banner-text-wrap">
				<div class="banner-title">
					<h4>If everyone is moving forward together, then success takes care of itself.</h4>
				</div>
				<div class="banner-sub">
					<h5>- Henry Ford -</h5>
				</div>
			</div>
		</div>
	</section>

	<section class="about-content-section">
		<div class="container-fluid">
			<div class="row">
				<? include 'about-us-navigation.php' ?>
				<div class="col-xs-12 stories-content-wrap">
					<div class="col-xs-12 col-sm-6 stories-content v-center">
						<div class="col-xs-12 what-we-do-subtitle">
							<h4>The purpose of human life is to serve, and to show compassion and the will to help others.</h4>
						</div>
						<div class="col-xs-12 what-we-do-desc stories-desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
							<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
							<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
						<div class="stories-b">
							<img src="<?= base_url(); ?>assets/images/stories/B.png">
						</div>
					</div><!--
				 --><div class="col-xs-12 col-sm-6 stories-right v-center">
				 		<div class="col-xs-12 stories-title-wrap">
					 		<div class="col-xs-12 stories-title">
								<h3>Our<br>Stories</h3>
							</div>
						</div>
						<div class="col-xs-12 stories-video-outter-wrap">
							<div class="col-xs-12 stories-video-wrap">
								<video width="720" height="auto" controls id="stories-video">
									<source src="<?= base_url(); ?>assets/video/pidio.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
								<div class="home-video-play-outter">
									<div class="home-video-play-inside">
										<div class="home-video-play"></div>
									</div>
								</div>
							</div>
							<div class="stories-video-shadow"></div>
							<div class="stories-circle-1">
								<img src="<?= base_url(); ?>assets/images/stories/circle-1.png">
							</div>
							<div class="stories-circle-2">
								<img src="<?= base_url(); ?>assets/images/stories/circle-2.png">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<? include 'about-us-bottom-navigation.php' ?>

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

<script type="text/javascript">
	$(document).ready(function(){
		$('.home-video-play-outter').click(function(){
			if($('.home-video-play-outter').hasClass('playing')){
				$('#stories-video').get(0).pause();
				$('.home-video-play-outter').removeClass('playing');
			}
			else{
				$('#stories-video').get(0).play();
				$('.home-video-play-outter').addClass('playing');
			}

		});
	});
</script>

</html>
