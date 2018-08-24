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

	<section id="masterpiece-detail-section">
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
				<div class="col-xs-12 col-sm-6 masterpiece-detail-left masterpiece-detail-vertical">
					<div class="masterpiece-detail-pict-wrap">
						<div class="masterpiece-detail-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-4.jpg);"></div>
						<div class="masterpiece-detail-frame">
							<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

						</div>
						<div class="masterpiece-detail-frame-shadow">
							<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 masterpiece-detail-right masterpiece-detail-vertical">
					<div class="col-xs-12 masterpiece-detail-text-wrap">
						<div class="col-xs-12 masterpiece-detail-title">
							<h4>Sheroo (2016)</h4>
						</div>
						<div class="col-xs-12 masterpiece-detail-by">
							<h5>By: Jay Ailani</h5>
						</div>
						<div class="col-xs-12 masterpiece-detail-desc">
							<p>Sheroo is the name of a bold lion that faces the darkness fearlessly. Meticulously carved out of the dust of charcoal, Sheroo is also the Lion of Judah, who brings light into the storms of our world. Whrn we look into His eyes, we receive comfort, knowing we are His delight.</p>
						</div>
						<div class="col-xs-12 masterpiece-detail-info-1">
							<div class="masterpiece-detail-inline-1">
								<p>Medium : Print on Paper</p>
							</div>
							<div class="masterpiece-detail-inline-1">
								<p>Edition : 5</p>
							</div>
						</div>
						<div class="col-xs-12 masterpiece-detail-info-2">
							<div class="masterpiece-detail-inline-2">
								<p>Quantity : 1</p>
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
					<div class="masterpiece-detail-arrow-left">
						<img src="<?= base_url(); ?>assets/images/masterpiece/left-arrow.png">
					</div>
					<div class="masterpiece-detail-arrow-right">
						<img src="<?= base_url(); ?>assets/images/masterpiece/right-arrow.png">
					</div>
					<div class="col-xs-12 masterpiece-detail-number-wrap">
						<div class="masterpiece-detail-number-inside">
							<a href="">
								<div class="masterpiece-detail-number">
									<p>01</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>02</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>03</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>04</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>05</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>06</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>07</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>08</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>09</p>
								</div>
							</a>
							<a href="">
								<div class="masterpiece-detail-number">
									<p>10</p>
								</div>
							</a>
						</div>
						<div id="masterpiece-detail-carousel" class="owl-carousel owl-theme">
							<div class="masterpiece-detail-number-item">
								<p>01</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>02</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>03</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>04</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>05</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>06</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>07</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>08</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>09</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>10</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>11</p>
							</div>
							<div class="masterpiece-detail-number-item">
								<p>12</p>
							</div>
						</div>
					</div>
					<div class="masterpiece-detail-decor-1">
						<img src="<?= base_url(); ?>assets/images/masterpiece/decor-1.png">
					</div>
					<div class="masterpiece-detail-decor-2">
						<img src="<?= base_url(); ?>assets/images/masterpiece/decor-2.png">
					</div>
					<div class="masterpiece-detail-decor-3">
						<img src="<?= base_url(); ?>assets/images/masterpiece/decor-3.png">
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
	$('#masterpiece-detail-carousel').owlCarousel({
		loop: false,
		nav: true,
		dots: false,
		responsive : {
		    0 : {
		        items : 7
		    },
		    768 : {
		        items : 10
		    },
		},
		navText:['<img src="<?= base_url(); ?>assets/images/masterpiece/left-arrow.png">','<img src="<?= base_url(); ?>assets/images/masterpiece/right-arrow.png">']
	});

	$('.artist-carousel-item').click(function(){
		$('.artist-activate').removeClass('artist-name-on');
		$(this).children().addClass('artist-name-on');
		$('#artist-carousel').trigger('stop.owl.autoplay');
	});

</script>

</html>
