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

	<section id="workshop-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/counseling/bg.jpg);">
		<div class="container-fluid">
			<div class="banner-overlay"></div>
			<div class="banner-text-wrap">
				<div class="banner-title">
					<h4>Take care of your body. It's the only place you have to live.</h4>
				</div>
				<div class="banner-sub">
					<h5>- Henry Ford -</h5>
				</div>
			</div>
		</div>
	</section>

	<section id="help-them-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-4 help-title v-top-desktop">
					<h3>Help<br>Them</h3>
				</div><!--
			 --><div class="col-xs-12 col-sm-8 help-info-wrap v-top-desktop">
			 		<div class="help-info">
			 			<h5>COUNSELING & WORKSHOP</h5>
						<p>It will takes <span>50 minutes counseling for each session</span></p>
						<p>Counselor handled by Jay</p>
						<p><span>Price $20/ one session</span></p>
			 		</div>
			 	</div>
			</div>
			<div class="row">
				<div class="col-xs-12 help-desc">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequatLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
					<p>ellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 help-them-buy-wrap">
					<!-- <div class="help-them-buy">
						Buy voucher
						<button type="button" id="sub" class="sub">-</button>
					    <input type="number" id="1" value="1" min="1" />
					    <button type="button" id="add" class="add">+</button>
					</div> -->
					<div class="help-them-buy-first">
						<select>
							<option>Buy voucher for 1 person</option>
							<option>Buy voucher for 2 person</option>
							<option>Buy voucher for 3 person</option>
							<option>Buy voucher for 4 person</option>
							<option>Buy voucher for 5 person</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 help-them-table-head">
					<div class="col-sm-3 help-them-table-col-head">
						<h5>ART THERAPY</h5>
					</div>
					<div class="col-sm-3 help-them-table-col-head">
						<h5>SESSION</h5>
					</div>
					<div class="col-sm-3 help-them-table-col-head">
						<h5>PRICE</h5>
					</div>
				</div>
				<div class="col-xs-12 help-them-table-row help-odd-row">
					<div class="col-sm-3 help-them-table-col v-top-desktop">
						<div class="form-group">
						    <select class="form-control help-type">
						        <option>Counseling</option>
						        <option>Workshop & Exhibition</option>
						    </select>
					    </div>
					</div><!--
				 --><div class="col-sm-3 help-them-table-col help-them-session-part v-top-desktop">
						<div class="form-group">
							<label>Session</label>
						    <!-- <button type="button" id="sub" class="sub">-</button>
						    <input type="number" id="1" value="3" min="1" />
						    <button type="button" id="add" class="add">+</button> -->
						    <select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
					    </div>
					</div><!--
				 --><div class="col-sm-3 help-them-table-col v-top-desktop">
						<h5>$ 60</h5>
					</div><!--
				 --><div class="col-sm-3 help-them-cancel v-top-desktop">
						<a href="">
							<img src="<?= base_url(); ?>assets/images/helpthem/cancel.png">
						</a>
					</div>
				</div>
				<div class="col-xs-12 help-them-table-row help-even-row">
					<div class="col-sm-3 help-them-table-col v-top-desktop">
						<div class="form-group">
						    <select class="form-control help-type">
						        <option>Counseling</option>
						        <option>Workshop & Exhibition</option>
						    </select>
					    </div>
					</div><!--
				 --><div class="col-sm-3 help-them-table-col help-them-session-part v-top-desktop">
						<div class="form-group">
							<label>Session</label>
						    <!-- <button type="button" id="sub" class="sub">-</button>
						    <input type="number" id="1" value="1" min="1" />
						    <button type="button" id="add" class="add">+</button> -->
						    <select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
					    </div>
					</div><!--
				 --><div class="col-sm-3 help-them-table-col v-top-desktop">
						<h5>$ 20</h5>
					</div><!--
				 --><div class="col-sm-3 help-them-cancel v-top-desktop">
						<a href="">
							<img src="<?= base_url(); ?>assets/images/helpthem/cancel.png">
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 counseling-button-wrap">
					<a href="">
						<button type="button" class="btn btn-default counseling-button">Add to cart</button>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="about-bottom-nav-section">
		<div class="container-fluid">
			<div class="row">
				<a href="<?= base_url(); ?>counseling">
					<div class="col-sm-6 about-bottom-nav">
						<h4>GO TO COUNSELING</h4>
					</div>
				</a>
				<a href="<?= base_url(); ?>workshopandexhibition">
					<div class="col-sm-6 about-bottom-nav">
						<h4>GO TO WORKSHOP & EXHIBITION</h4>
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

<script>
	$('#workshop-modal-carousel').owlCarousel({
		nav: true,
		dots: false,
		items: 4,
		margin: 15,
		navText:['<img src="<?= base_url(); ?>assets/images/masterpiece/left-arrow.png">','<img src="<?= base_url(); ?>assets/images/masterpiece/right-arrow.png">']
	});

	$('.workshop-modal-item').click(function(){
		var bg = $(this).attr('data-bg');
        $('.workshop-modal-pict img').attr('src', bg);
	});

	$('.add').click(function () {
		$(this).prev().val(+$(this).prev().val() + 1);
	});
	$('.sub').click(function () {
		if ($(this).next().val() > 1) {
	    	if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
	});

</script>

</html>
