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
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugin/nouislider/nouislider.min.css">

    <!--[if lt IE 9]>
        <script src="<?= base_url(); ?>assets/plugin/ie-support/html5shiv.min.js"></script>
        <script src="<?= base_url(); ?>assets/plugin/ie-support/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<? $this->load->view('navigation'); ?>

	<section id="merchandise-detail-section">
		<div class="container-fluid">
			<a href="">
				<div class="masterpiece-detail-back-wrap">
					<div class="masterpiece-detail-back-wrap-inside">
						<img src="<?= base_url(); ?>assets/images/main/back-arrow.png">
						<p>Back</p>
					</div>
				</div>
			</a>
			<div class="row row-eq-height-desktop">
				<div class="col-xs-12 col-sm-6 merchan-detail-pict-wrap">
					<div id="merchan-detail-carousel" class="owl-carousel owl-theme">
						<div class="merchan-detail-item">
							<img src="<?= base_url(); ?>assets/images/merchandise/merchan-1.png">
						</div>
						<div class="merchan-detail-item">
							<img src="<?= base_url(); ?>assets/images/merchandise/merchan-1.png">
						</div>
						<div class="merchan-detail-item">
							<img src="<?= base_url(); ?>assets/images/merchandise/merchan-1.png">
						</div>
						<div class="merchan-detail-item">
							<img src="<?= base_url(); ?>assets/images/merchandise/merchan-1.png">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 merchan-detail-text-wrap">
					<ul class="nav nav-pills nav-justified merchan-detail-tab">
					  <li class="active"><a data-toggle="pill" href="#merchan-product-desc">Product Description</a></li>
					  <li><a data-toggle="pill" href="#merchan-product-size">Size description</a></li>
					</ul>

					<div class="tab-content">
						<div id="merchan-product-desc" class="tab-pane fade in active">
						    <div class="col-xs-12 merchandise-detail-title">
								<h4>Mug Yellow</h4>
							</div>
							<div class="col-xs-12 masterpiece-detail-by">
								<h5>By: Jay Ailani</h5>
							</div>
							<div class="col-xs-12 masterpiece-detail-desc">
								<p>Sheroo is the name of a bold lion that faces the darkness fearlessly. Meticulously carved out of the dust of charcoal, Sheroo is also the Lion of Judah, who brings light into the storms of our world. When we look into His eyes, we receive comfort, knowing we are His delight.</p>
							</div>
							<div class="col-xs-12 masterpiece-detail-info-1">
								<div class="masterpiece-detail-inline-1">
									<p>Medium : Print on Glass</p>
								</div>
								<div class="masterpiece-detail-inline-1">
									<p>Edition : 5</p>
								</div>
							</div>
							<div class="col-xs-12 masterpiece-detail-info-2">
								<div class="masterpiece-detail-inline-2">
									<p>Quantity : </p>
									<input type="number" id="merchan-q" value="1" min="1" />
								</div>
								<div class="masterpiece-detail-inline-2">
									<div class="form-group">
									    <select class="form-control" id="masterpiece-detail-size">
									        <option>Large (31 x 43 cm)</option>
									        <option>Medium (21 x 33 cm)</option>
									        <option>Small (11 x 23 cm)</option>
									    </select>
								    </div>
								</div>
								<div class="masterpiece-detail-inline-2 masterpiece-detail-price">
									<p>Rp 200.000</p>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="masterpiece-detail-button">
									<button class="btn btn-help">ADD TO CART</button>
								</div>
							</div>
						</div>
						<div id="merchan-product-size" class="tab-pane fade">
						    <ul class="merchan-detail-size-desc">
						    	<li>Size S with dimension 31 x 43 cm</li>
						    	<li>Size S with dimension 31 x 43 cm</li>
						    	<li>Size S with dimension 31 x 43 cm</li>
						    </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="merchandise-other-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 merchan-other-head">
					<h4>You may also like</h4>
				</div>
				<div class="col-xs-12">
					<div id="merchandise-other-carousel" class="owl-carousel owl-theme">
						<div class="merchandise-other-item">
							<div class="merchandise-other-pict">
								<img src="<?= base_url(); ?>assets/images/merchandise/merchan-5.png">
							</div>
							<div class="merchandise-other-text-wrap">
								<div class="merchandise-other-title">
									<h5>Heart</h5>
								</div>
								<div class="merchandise-other-price">
									<h5>$ 150</h5>
								</div>
							</div>
						</div>
						<div class="merchandise-other-item">
							<div class="merchandise-other-pict">
								<img src="<?= base_url(); ?>assets/images/merchandise/merchan-6.png">
							</div>
							<div class="merchandise-other-text-wrap">
								<div class="merchandise-other-title">
									<h5>Rabbit</h5>
								</div>
								<div class="merchandise-other-price">
									<h5>$ 80</h5>
								</div>
							</div>
						</div>
						<div class="merchandise-other-item">
							<div class="merchandise-other-pict">
								<img src="<?= base_url(); ?>assets/images/merchandise/merchan-7.png">
							</div>
							<div class="merchandise-other-text-wrap">
								<div class="merchandise-other-title">
									<h5>Flower</h5>
								</div>
								<div class="merchandise-other-price">
									<h5>$ 250</h5>
								</div>
							</div>
						</div>
						<div class="merchandise-other-item">
							<div class="merchandise-other-pict">
								<img src="<?= base_url(); ?>assets/images/merchandise/merchan-8.png">
							</div>
							<div class="merchandise-other-text-wrap">
								<div class="merchandise-other-title">
									<h5>Mustache</h5>
								</div>
								<div class="merchandise-other-price">
									<h5>$ 90</h5>
								</div>
							</div>
						</div>
						<div class="merchandise-other-item">
							<div class="merchandise-other-pict">
								<img src="<?= base_url(); ?>assets/images/merchandise/merchan-4.png">
							</div>
							<div class="merchandise-other-text-wrap">
								<div class="merchandise-other-title">
									<h5>Bird</h5>
								</div>
								<div class="merchandise-other-price">
									<h5>$ 100</h5>
								</div>
							</div>
						</div>
						<div class="merchandise-other-item">
							<div class="merchandise-other-pict">
								<img src="<?= base_url(); ?>assets/images/merchandise/merchan-2.png">
							</div>
							<div class="merchandise-other-text-wrap">
								<div class="merchandise-other-title">
									<h5>Dr. Seuss</h5>
								</div>
								<div class="merchandise-other-price">
									<h5>$ 1500</h5>
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

<!-- <script src="<?= base_url(); ?>assets/plugin/jquery-ui/jquery-ui.min.js"></script> -->
<script src="<?= base_url(); ?>assets/plugin/nouislider/nouislider.min.js"></script>
<script src="<?= base_url(); ?>assets/plugin/nouislider/wNumb.js"></script>

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
	$(function() {
		merchanDetailCarousel();
		merchanOtherCarousel();
	});

	function merchanDetailCarousel(){
		$('#merchan-detail-carousel').owlCarousel({
			nav: false,
			dots: true,
			items: 1,
		});
	}

	function merchanOtherCarousel(){
		$('#merchandise-other-carousel').owlCarousel({
			nav: true,
			dots: false,
			responsive : {
			    0 : {
			        items : 2
			    },
			    768 : {
			        items : 5
			    },
			},
			navText:['<img src="<?= base_url(); ?>assets/images/masterpiece/left-arrow.png">','<img src="<?= base_url(); ?>assets/images/masterpiece/right-arrow.png">']
		});
	}

</script>

</html>
