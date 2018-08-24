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
						<p>4. Payment</p>
					</div>
					<div class="col-xs-6 mobile-cart-back">
						<a href="<?= base_url(); ?>revieworder">
							<img src="<?= base_url(); ?>assets/images/main/back-arrow.png">
							<p>Back</p>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-7 review-cart-wrap">
					<div class="col-xs-12 review-cart-wrap-inside">
						<div class="col-xs-12 review-cart-title">
							<h5>Merchandise</h5>
						</div>
						<div class="col-xs-12 review-cart-row">
							<div class="col-xs-6 col-xs-offset-3 col-sm-2 col-sm-offset-0 review-cart-pict v-center-desktop" style="background-image: url(<?= base_url(); ?>assets/images/merchandise/merchan-1.png);"></div><!--
						 --><div class="col-xs-12 col-sm-10 review-cart-text-wrap v-center-desktop">
								<div class="col-xs-12 col-sm-6 cart-popup-info-wrap v-bottom-desktop">
									<h5>Sheroo (2016)</h5>
									<h5>Large (34 x 40 cm)</h5>
								</div><!--
							 --><div class="col-xs-12 col-sm-2 review-cart-qty v-bottom-desktop">
									<h5>1</h5>
								</div><!--
							 --><div class="col-xs-12 col-sm-4 cart-popup-price v-bottom-desktop">
									<h5>Rp 100.000</h5>
								</div>
							</div>
						</div>
						<div class="col-xs-12 review-cart-row">
							<div class="col-xs-6 col-xs-offset-3 col-sm-2 col-sm-offset-0 review-cart-pict v-center-desktop" style="background-image: url(<?= base_url(); ?>assets/images/merchandise/merchan-3.png);"></div><!--
						 --><div class="col-xs-12 col-sm-10 review-cart-text-wrap v-center-desktop">
								<div class="col-xs-12 col-sm-6 cart-popup-info-wrap v-bottom-desktop">
									<h5>Kingdom (2014)</h5>
									<h5>Large (34 x 40 cm)</h5>
								</div><!--
							 --><div class="col-xs-12 col-sm-2 review-cart-qty v-bottom-desktop">
									<h5>1</h5>
								</div><!--
							 --><div class="col-xs-12 col-sm-4 cart-popup-price v-bottom-desktop">
									<h5>Rp 100.000</h5>
								</div>
							</div>
						</div>
						<div class="col-xs-12 review-cart-subtotal">
							<h4>Subtotal : Rp 200.000</h4>
						</div>
						<div class="col-xs-12 review-cart-title">
							<h5>Merchandise</h5>
						</div>
						<div class="col-xs-12 review-cart-row">
							<div class="col-xs-6 col-xs-offset-3 col-sm-2 col-sm-offset-0 review-cart-pict v-center-desktop" style="background-image: url(<?= base_url(); ?>assets/images/merchandise/merchan-1.png);"></div><!--
						 --><div class="col-xs-12 col-sm-10 review-cart-text-wrap v-center-desktop">
								<div class="col-xs-12 col-sm-6 cart-popup-info-wrap v-bottom-desktop">
									<h5>Sheroo (2016)</h5>
									<h5>Large (34 x 40 cm)</h5>
								</div><!--
							 --><div class="col-xs-12 col-sm-2 review-cart-qty v-bottom-desktop">
									<h5>1</h5>
								</div><!--
							 --><div class="col-xs-12 col-sm-4 cart-popup-price v-bottom-desktop">
									<h5>Rp 100.000</h5>
								</div>
							</div>
						</div>
						<!-- <div class="col-xs-12 review-cart-subtotal">
							<h4>Subtotal : Rp 200.000</h4>
						</div>
						<div class="col-xs-12 review-cart-shipping-by">
							<h4>Shipping : Rp 10.000 JNE Reguler</h4>
						</div>
						<div class="col-xs-12 review-cart-total">
							<h4>Total : Rp 410.000</h4>
						</div> -->
						<div class="col-xs-12 cart-under-sub">
							<table>
								<tr>
									<td>Subtotal : </td>
								    <td>Rp 200.000</td>
								</tr>
								<tr>
								    <td>Shipping : </td>
								    <td>Rp 10.000 JNE Reguler</td>
								</tr>
								<tr class="cart-summary-total">
								    <td>Total : </td>
								    <td>Rp 410.000</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="col-xs-12 payment-shipping-wrap">
						<div class="col-xs-12 review-shipping-inside">
							<div class="col-xs-12 review-shipping-title">
								<h5>Shipping details</h5>
							</div>
							<div class="col-xs-12 review-shipping-address">
								<h5>Lois Bestri</h5>
								<h5>Label Inovasi Indonesia</h5>
								<h5>Treasury Tower lantai 21E, District 8, SCBD Lot 28. Jl. Jend.Sudirman kav 52-53 Office tower Kebayoran Baru, Kota Administrasi, Jakarta Selatan DKI Jakarta 12190</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 review-shipping-wrap">
					<div class="col-xs-12 payment-wrap">
						<div class="col-xs-12 payment-cart-title">
							<h5>Payment</h5>
						</div>
						<div class="col-xs-12 payment-cart-subtitle">
							<p>Transfer Bank</p>
						</div>
						<div class="col-xs-12 payment-cart-info-wrap">
							<div class="payment-bank">
								<img src="<?= base_url(); ?>assets/images/cart/bni.png">
							</div>
							<div class="payment-rek">
								<p>12304955455</p>
							</div>
							<div class="payment-name">
								<p>Beloved Heart</p>
							</div>
						</div>
						<div class="col-xs-12 payment-cart-info-wrap">
							<div class="payment-bank">
								<img src="<?= base_url(); ?>assets/images/cart/bca.png">
							</div>
							<div class="payment-rek">
								<p>35465756744</p>
							</div>
							<div class="payment-name">
								<p>Beloved Heart</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 review-shipping-button">
						<div class="payment-cart-button">
							<a href=""><button class="btn btn-help">Continue Shopping</button></a>
						</div>
						<div class="payment-cart-button">
							<a href="<?= base_url(); ?>confirmorder"><button class="btn btn-help">Next</button></a>
						</div>
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
