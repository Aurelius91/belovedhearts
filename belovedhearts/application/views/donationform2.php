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

	<section id="donation-form-2-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="col-xs-12 donation-form-2-title">
						<h4>Donation Details</h4>
					</div>
					<div class="col-xs-11 donation-form-2">
						<div class="form-group">
							<label for="donation-name">Name</label>
							<input type="text" class="form-control" id="donation-name">
						</div>
					</div>
					<div class="col-xs-11 donation-form-2">
						<div class="form-group">
							<label for="donation-email">Email Address</label>
							<input type="text" class="form-control" id="donation-email">
						</div>
					</div>
					<div class="col-xs-11 donation-form-2">
						<div class="form-group">
							<label for="donation-phone">Phone Number</label>
							<input type="text" class="form-control" id="donation-phone">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 donation-form-2-right">
					<div class="col-xs-12 donation-form-2-title">
						<h4>Your Donation</h4>
					</div>
					<div class="col-xs-12 donation-table-1">
						<div class="col-xs-12 donation-table-head donation-row">
							<div class="col-xs-6">
								<h5>Donation</h5>
							</div>
							<div class="col-xs-6">
								<h5>Total</h5>
							</div>
						</div>
						<div class="col-xs-12 donation-row">
							<div class="col-xs-6">
								<h5>Period of Donation</h5>
							</div>
							<div class="col-xs-6">
								<h5>12 Months</h5>
							</div>
						</div>
						<div class="col-xs-12 donation-row">
							<div class="col-xs-6">
								<h5>Amount of Donation</h5>
							</div>
							<div class="col-xs-6">
								<h5>IDR 10000/month</h5>
							</div>
						</div>
					</div>
					<div class="col-xs-12 donation-form-2-bank-info">
						<p>Bank Name : Bank Central Asia</p>
						<p>Bank Address: Jl. Mega Kuningan no.7</p>
						<p>Account Name: Beloved Heart</p>
						<p>Account Number: 432 5756 233</p>
					</div>
					<div class="col-xs-12 donation-form-2-button-wrap">
						<div class="donation-button">
							<button data-toggle="modal" data-target="#thankyou-donate" class="btn btn-help">SUBMIT</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="thankyou-donate" class="modal fade" role="dialog">
	  	<div class="modal-dialog">

	    <!-- Modal content-->
		    <div class="modal-content">
		      	<div class="modal-body">
		      		<button type="button" class="close thankyou-donate-close" data-dismiss="modal">
		      			<img src="assets/images/donate/close.png">
		      		</button>
		        	<div class="thankyou-donate-pict-wrap">
		        		<div class="thankyou-donate-pict" style="background-image: url(assets/images/donate/thankyou-pict.jpg);">
		        		</div>
		        		<div class="thankyou-donate-circle-1">
		        			<img src="assets/images/main/home-support-circle-2.png">
		        		</div>
		        		<div class="thankyou-donate-circle-2">
		        			<img src="assets/images/main/home-support-circle-1.png">
		        		</div>
		        		<div class="thankyou-donate-circle-3">
		        			<img src="assets/images/main/home-support-circle-2.png">
		        		</div>
		        	</div>
		        	<div class="thankyou-donate-text-wrap">
		        		<div class="thankyou-donate-title">
		        			<h4>THANK YOU</h4>
		        		</div>
		        		<div class="thankyou-donate-desc">
		        			<p>For your willingness to donate every month.</p>
		        			<p>May God bless you abundantly!</p>
		        		</div>
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


</html>
