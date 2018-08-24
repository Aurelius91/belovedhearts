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

	<section id="donate-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/donate/bg.jpg);">
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

	<section id="donation-content-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-7">
					<div class="donation-pict" style="background-image: url(<?= base_url(); ?>assets/images/donate/pict-1.jpg);">
						<!-- <img src="<?= base_url(); ?>assets/images/donate/pict-1.jpg"> -->
					</div>
					<div class="donation-circle-1">
						<img src="<?= base_url(); ?>assets/images/donate/circle-1.png">
					</div>
					<div class="donation-circle-2">
						<img src="<?= base_url(); ?>assets/images/donate/circle-2.png">
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 donation-text">
					<div class="col-sm-12 donation-title">
						<h3>WHAT<br>IS DONATION</h3>
					</div>
					<div class="col-sm-12 donation-subtitle">
						<h4>The purpose of human life is to serve, and to show compassion and the will to help others.</h4>
					</div>
					<div class="col-sm-12 donation-desc">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
					</div>
					<div class="col-xs-12 donation-button-wrap">
						<div class="donation-button">
							<a href="<?= base_url(); ?>donationform1"><button class="btn btn-help">Donate Now</button></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="bottom-donate-section">
		<div class="container-fluid">
			<div class="row">
				<a href="<?= base_url(); ?>volunteer">
					<div class="col-xs-12 bottom-donate-div">
						<h4>GO TO VOLUNTEER</h4>
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

</html>
