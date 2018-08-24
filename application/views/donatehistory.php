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

	<section id="account-order">
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
						<h5>DONATE</h5>
					</div>
					<div class="col-xs-12 account-order-table">
						<div class="table-responsive">
						  	<table class="table">
						    	<thead>
						      		<tr>
								        <th><h5>Order</h5></th>
								        <th><h5>Date</h5></th>
								        <th><h5>Status</h5></th>
								        <th><h5>Total</h5></th>
								        <th><h5>Qty</h5></th>
								        <th><h5>Actions</h5></th>
						      		</tr>
						    	</thead>
						    	<tbody>
						      		<tr>
								        <td><h5>#2143</h5></td>
								        <td><h5>March 10, 2018</h5></td>
								        <td><h5>On hold</h5></td>
								        <td><h5>Rp 200.000</h5></td>
								        <td><h5>1</h5></td>
								        <td>
								        	<div class="action-button-wrap">
												<button class="btn btn-help" data-toggle="modal" data-target="#order-pop">View</button>
											</div>
											<div class="action-button-wrap">
												<a href="<?= base_url(); ?>orders/detail">
													<button class="btn btn-help">Payment Confirmation</button>
												</a>
											</div>
								        </td>
						      		</tr>
						      		<tr>
								        <td><h5>#2245</h5></td>
								        <td><h5>March 10, 2018</h5></td>
								        <td><h5>Completed</h5></td>
								        <td><h5>Rp 1.400.000</h5></td>
								        <td><h5>10</h5></td>
								        <td>
								        	<div class="action-button-wrap">
												<button class="btn btn-help" data-toggle="modal" data-target="#order-pop">View</button>
											</div>
											<div class="action-button-wrap">
												<a href="<?= base_url(); ?>orders/detail">
													<button class="btn btn-help">Payment Confirmation</button>
												</a>
											</div>
								        </td>
						      		</tr>
						    	</tbody>
						  	</table>
						</div>
					</div>
					<div id="order-pop" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal"><img src="<?= base_url(); ?>assets/images/main/close.png"></button>
					      	</div>
					      	<div class="modal-body">
					        	<div class="order-pop-title">
					        		<h5>ORDER DETAIL</h5>
					        	</div>
					        	<div class="order-pop-text">
					        		<p>Order <span class="being-red">#3421</span> was placed on <span class="being-red">March 10, 2018</span> and is currently <span class="being-red">Completed</span></p>
					        	</div>
					        	<div class="order-pop-table-wrap">
					        		<table class="table table-condensed">
									    <thead>
									      	<tr>
									        	<th>PRODUCT</th>
									        	<th>QTY</th>
									        	<th>TOTAL</th>
									      	</tr>
									    </thead>
									    <tbody>
									      	<tr>
										        <td>Sheroo</td>
										        <td>1</td>
										        <td>Rp 200.000</td>
									      	</tr>
									      	<tr>
										        <td>Counseling</td>
										        <td>1</td>
										        <td>Rp 200.000</td>
									      	</tr>
									      	<tr>
										        <td>Subtotal</td>
										        <td>1</td>
										        <td>Rp 400.000</td>
									      	</tr>
									      	<tr>
										        <td>Shipping</td>
										        <td></td>
										        <td>Rp 10.000 via JNE</td>
									      	</tr>
									      	<tr class="total-order-count">
										        <td>Total</td>
										        <td></td>
										        <td>Rp 410.000</td>
									      	</tr>
									    </tbody>
									</table>
					        	</div>
					        	<div class="account-order-detail-button">
					        		<div class="action-button-wrap">
										<button class="btn btn-help">Order Again</button>
									</div>
					        	</div>
					        	<div class="order-detail-address">
									<div class="order-shipping">
										<div class="order-shipping-title">
											<h5>BILLING ADDRESS</h5>
										</div>
										<div class="order-shipping-address">
											<h5>Lois Bestri</h5>
											<h5>Label Inovasi Indonesia<br>
												Treasury Tower lantai 21E, District 8, SCBD Lot 28. Jl. Jend.Sudirman kav 52-53 Office Tower<br>
												Kebayoran Baru, Kota Administrasi Jakarta Selatan<br>
												DKI Jakarta<br>
												12190
											</h5>
										</div>
									</div><!--
								 --><div class="order-shipping">
										<div class="order-shipping-title">
											<h5>SHIPPING ADDRESS</h5>
										</div>
										<div class="order-shipping-address">
											<h5>Lois Bestri</h5>
											<h5>Label Inovasi Indonesia<br>
												Treasury Tower lantai 21E, District 8, SCBD Lot 28. Jl. Jend.Sudirman kav 52-53 Office Tower<br>
												Kebayoran Baru, Kota Administrasi Jakarta Selatan<br>
												DKI Jakarta<br>
												12190
											</h5>
										</div>
									</div>
								</div>
					      	</div>
					    </div>

					  </div>
					</div>
					<div class="col-xs-12 account-order-table-mobile">
						<div class="col-xs-12 aotm-row">
							<div class="aotm-list-left">
								<h5>Order </h5>
								<h5>Date </h5>
								<h5>Status </h5>
								<h5>Total </h5>
								<h5>Qty </h5>
								<h5>Actions </h5>
							</div>
							<div class="aotm-list-right">
								<h5>: #2512</h5>
								<h5>: March 10,2018</h5>
								<h5>: Completed</h5>
								<h5>: Rp 200.000</h5>
								<h5>: 1</h5>
								<div class="action-button-mobile">
									<div class="action-button-wrap">
										<button class="btn btn-help" data-toggle="modal" data-target="#order-pop">View</button>
									</div>
								</div>
								<div class="action-button-mobile">
									<div class="action-button-wrap">
										<a href="<?= base_url(); ?>orders/detail">
											<button class="btn btn-help">Payment Confirmation</button>
										</a>
									</div>
								</div>
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


</html>
