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
						<p>2. Shipping Address</p>
					</div>
					<div class="col-xs-6 mobile-cart-back">
						<a href="<?= base_url(); ?>cart">
							<img src="<?= base_url(); ?>assets/images/main/back-arrow.png">
							<p>Back</p>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 shipping-address-wrap">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" value="Lois Bestri">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 shipping-address-wrap shipping-address-right">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" value="loisbestri@gmail.com">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 shipping-address-wrap">
					<div class="form-group">
						<label for="phone">Telephone Number</label>
						<input type="text" class="form-control" id="phone" value="081956543215">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 shipping-address-wrap shipping-address-right">
					<div class="form-group">
						<label for="address">Street Address</label>
						<input type="text" class="form-control" id="address" value="Jl. Anggur duren barat blok C3 No.18">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 shipping-address-wrap">
					<div class="form-group">
						<label for="country">Country</label>
						<select class="form-control" id="country">
					        <option>Indonesia</option>
					        <option>Amerika</option>
					        <option>Singapore</option>
					    </select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 shipping-address-wrap shipping-address-right">
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" class="form-control" id="city" value="DKI Jakarta">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 shipping-address-wrap">
					<div class="form-group">
						<label for="office">Office tower/ House/ Residential</label>
						<input type="text" class="form-control" id="office" value="Office tower">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 shipping-address-wrap shipping-address-right">
					<div class="form-group">
						<label for="district">District</label>
						<select class="form-control" id="district">
					        <option>Kebayoran Baru</option>
					        <option>Tangerang</option>
					        <option>Banten</option>
					    </select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 shipping-address-wrap">
					<div class="form-group">
						<label for="postal">Postal Code</label>
						<input type="text" class="form-control" id="postal" value="14140">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 shipping-address-wrap shipping-address-right">
					<div class="form-group">
						<label for="delivery">Delivery</label>
						<select class="form-control" id="delivery">
					        <option>JNE Regular</option>
					        <option>JNE Yes</option>
					        <option>J&T Regular</option>
					        <option>J&T Express</option>
					    </select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 shipping-submit-wrap">
					<div class="donation-form-1-checkbox col-xs-12 col-sm-8">
						<label class="check-container">I accept the terms and conditions
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="donation-form-1-button-wrap col-xs-12 col-sm-4">
						<div class="donation-form-1-button">
							<a href="<?= base_url(); ?>revieworder"><button class="btn btn-help">Save</button></a>
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
