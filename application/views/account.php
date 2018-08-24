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

	<section id="my-account">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 account-title">
					<h3>My account</h3>
				</div>
			</div>
			<div class="row row-eq-height-desktop">
				<div class="col-xs-12 col-sm-4 account-left-part">
					<? include 'account-nav.php' ?>
				</div>
				<div class="col-xs-12 col-sm-8 account-detail-wrap">
					<div class="col-xs-12 account-detail-title">
						<h5>CONTACT DETAILS</h5>
					</div>
					<div class="col-xs-12 col-sm-6 account-form">
						<div class="form-group">
							<label for="first-name">First Name *</label>
							<input type="text" class="form-control" id="first-name" value="Lois">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 account-form">
						<div class="form-group">
							<label for="last-name">Last Name *</label>
							<input type="text" class="form-control" id="last-name" value="Bestri">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 account-form">
						<div class="form-group">
							<label for="email">Email Address *</label>
							<input type="email" class="form-control" id="email" value="loisbestri@gmail.com">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 account-form">
						<div class="form-group">
							<label for="phone">Phone Number *</label>
							<input type="text" class="form-control" id="phone" value="081212126565">
						</div>
					</div>
					<div class="col-xs-12 account-detail-title">
						<h5>PASSWORD CHANGE</h5>
					</div>
					<div class="col-xs-12 col-sm-6 account-form">
						<div class="form-group">
							<label for="current-pass">Current Password *</label>
							<input type="password" class="form-control" id="current-pass" value="beloved123">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 account-form">
						<div class="form-group">
							<label for="new-password">New Password *</label>
							<input type="password" class="form-control" id="new-password" value="beloved123">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 account-form">
						<div class="form-group">
							<label for="confirm">Confirm Password *</label>
							<input type="password" class="form-control" id="confirm" value="beloved987">
						</div>
					</div>
					<div class="col-xs-12 account-button-wrap">
						<div class="account-button">
							<button class="btn btn-help">Submit</button>
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


</html>
