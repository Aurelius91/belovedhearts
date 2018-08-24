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

	<section class="cart-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 cart-title">
					<h4>My Cart</h4>
				</div>
			</div>
			<div class="row">
				<? include 'cart-process.php' ?>
				<div class="col-xs-12 mobile-cart-indicator-wrap">
					<div class="col-xs-6 mobile-cart-indicator">
						<p>5. Confirm order</p>
					</div>
					<div class="col-xs-6 mobile-cart-back">
						<a href="<?= base_url(); ?>payment">
							<img src="<?= base_url(); ?>assets/images/main/back-arrow.png">
							<p>Back</p>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 confirm-check-wrap">
					<div class="confirm-check v-center">
						<img src="<?= base_url(); ?>assets/images/cart/check.png">
					</div><!--
				 --><div class="confirm-seal v-center">
						<h4>Order Confirmed</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 confirm-desc">
					<p>Thank you. Your checkout has been successful. Your order confirmation has been sent to <span>Loisbestri@gmail.com</span>. Please confirm your payment at your order list.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 confirm-button-wrap">
					<div class="confirm-cart-button">
						<a href=""><button class="btn btn-help">Continue Shopping</button></a>
					</div>
				</div>
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


</script>

</html>
