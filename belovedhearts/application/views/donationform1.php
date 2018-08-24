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

	<section id="donation-content-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 donation-form-1-pict-wrap">
					<div class="donation-form-back">
						<a href="<?= base_url(); ?>donation">
							<img src="assets/images/donate/back-arrow.png">
							<p>Back to previous page</p>
						</a>
					</div>
					<div class="donation-form-1-pict-inner-wrap">
						<div class="donation-pict" style="background-image: url(assets/images/donate/pict-1.jpg);">
						</div>
						<div class="donation-circle-1">
							<img src="assets/images/donate/circle-1.png">
						</div>
						<div class="donation-circle-2">
							<img src="assets/images/donate/circle-2.png">
						</div>
					</div>
				</div><!--
			 --><div class="col-xs-12 col-sm-6 donation-text">
					<div class="col-xs-12 donation-form-1-title">
						<h4>DONATION FORM</h4>
					</div>
					<div class="col-xs-12 donation-form-1-wrap">
						<div class="form-group">
						    <label for="sel1">How long you will commit?</label>
						    <select class="form-control" id="sel1">
						        <option>1 month</option>
						        <option>2 months</option>
						        <option>3 months</option>
						        <option>4 months</option>
						        <option>5 months</option>
						        <option>6 months</option>
						        <option>7 months</option>
						        <option>8 months</option>
						        <option>9 months</option>
						        <option>10 months</option>
						        <option>11 months</option>
						        <option>12 months</option>
						        <option>13 months</option>
						        <option>14 months</option>
						        <option>15 months</option>
						        <option>16 months</option>
						        <option>17 months</option>
						        <option>18 months</option>
						        <option>19 months</option>
						        <option>20 months</option>
						        <option>21 months</option>
						        <option>22 months</option>
						        <option>23 months</option>
						        <option>24 months</option>
						    </select>
					    </div>
					</div>
					<div class="col-xs-12 donation-form-1-wrap">
						<div class="form-group">
							<label for="donation-pay">How much you will pay?</label>
							<input type="text" class="form-control" id="donation-pay">
						</div>
					</div>
					<div class="col-xs-12 donation-form-1-wrap">
						<div class="form-group">
						    <label for="donation-bank">Payment Method (Bank Transfer)</label>
						    <select class="form-control" id="donation-bank">
						        <option data-value="#bank-1">BCA</option>
						        <option data-value="#bank-2">Mandiri</option>
						        <option data-value="#bank-3">CIMB Niaga</option>
						    </select>
					    </div>
					</div>
					<div class="col-xs-12">
						<div id="bank-1" class="col-xs-12 donation-form-1-bank-info select-show">
							<p>Bank Name : Bank Central Asia</p>
							<p>Bank Address: Jl. Mega Kuningan no.7</p>
							<p>Account Name: Beloved Heart</p>
							<p>Account Number: 234 1234 12</p>
						</div>
						<div id="bank-2" class="col-xs-12 donation-form-1-bank-info">
							<p>Bank Name : Mandiri</p>
							<p>Bank Address: Jl. Mega Kuningan no.7</p>
							<p>Account Name: Beloved Heart</p>
							<p>Account Number: 432 5756 233</p>
						</div>
						<div id="bank-3" class="col-xs-12 donation-form-1-bank-info">
							<p>Bank Name : CIMB Niaga</p>
							<p>Bank Address: Jl. Mega Kuningan no.7</p>
							<p>Account Name: Beloved Heart</p>
							<p>Account Number: 456 6547 234</p>
						</div>
					</div>
					<div class="col-xs-12 donation-form-1-bottom">
						<div class="donation-form-1-checkbox col-xs-12 col-sm-9">
							<label class="check-container">I accept the terms and conditions
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>
						<div class="donation-form-1-button-wrap col-xs-12 col-sm-3">
							<div class="donation-form-1-button">
								<a href="<?= base_url(); ?>donationform2"><button class="btn btn-help">Donate Now</button></a>
							</div>
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
	$(function(){
		bankOption();
	});

	function bankOption(){
		$('#donation-bank').change(function(){
		    var thisBank = $(this).find(':selected').attr('data-value');
		    $('.donation-form-1-bank-info').removeClass('select-show');
		    $(thisBank).addClass('select-show');
		});
	}

</script>

</html>
