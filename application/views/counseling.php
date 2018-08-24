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

	<section id="counseling-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/counseling/bg.jpg);">
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

	<section id="counseling-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 counseling-top">
					<div class="col-xs-12 col-sm-4 counseling-title v-bottom-desktop">
						<h3>Our<br>Counseling</h3>
					</div><!--
				 --><div class="col-xs-12 col-sm-8 counseling-name-tab-wrap v-bottom-desktop">
						<!-- <div class="counseling-name-tab">
							<h5>Intan Sella</h5>
						</div>
						<div class="counseling-name-tab">
							<h5>Lois Best</h5>
						</div>
						<div class="counseling-add-tab">
							<img src="<?= base_url(); ?>assets/images/counseling/plus.png">
						</div> -->
						<ul class="nav nav-pills">
						  <li><a href="#">Intan Sella</a></li>
						  <li><a href="#">Lois Best</a></li>
						  <li><a href="#"><img src="<?= base_url(); ?>assets/images/counseling/plus.png"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 counseling-session-wrap">
					<div class="row row-eq-height-desktop">
						<div class="col-xs-12 col-sm-4 counseling-session-option-wrap counseling-session-1">
							<div class="col-xs-12 counseling-session-option">
								<h5>ONE SESSION</h5>
								<p>It will takes <span>50 minutes counseling</span></p>
								<p>Counselor handled by Jay</p>
								<p><span>Price $20</span></p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 counseling-session-option-wrap counseling-session-2">
							<div class="col-xs-12 counseling-session-option">
								<h5>THREE SESSION</h5>
								<p>It will takes <span>180 minutes counseling</span></p>
								<p>Counselor handled by Jay</p>
								<p><span>Price $50</span></p>
							</div>
							<div class="counseling-promo">
								<img src="<?= base_url(); ?>assets/images/counseling/promo.png">
								<p>PROMO</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 counseling-session-option-wrap counseling-session-3">
							<div class="col-xs-12 counseling-session-option">
								<h5>SIX SESSION</h5>
								<p>It will takes <span>350 minutes counseling</span></p>
								<p>Counselor handled by Jay</p>
								<p><span>Price $70</span></p>
							</div>
							<div class="counseling-promo">
								<img src="<?= base_url(); ?>assets/images/counseling/promo.png">
								<p>PROMO</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 counseling-form-wrap">
					<div class="col-xs-12 col-sm-3 counseling-form">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name">
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 counseling-form">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email">
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 counseling-form">
						<div class="form-group">
							<label for="phone">Telephone Number</label>
							<input type="text" class="form-control" id="phone">
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 counseling-form">
						<div class="form-group">
							<label for="location">Location of Counseling</label>
							<input type="text" class="form-control" id="location">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="col-xs-12 counseling-table">
						<div class="counseling-when-header-wrap">
							<div class="counseling-when-header">
								<h5>MONTH</h5>
							</div>
							<div class="counseling-when-header">
								<h5>DATE</h5>
							</div>
							<div class="counseling-when-header">
								<h5>TIME</h5>
							</div>
						</div>
						<div class="counseling-when-content-wrap">
							<div class="counseling-when-content">
								<div class="form-group">
								    <select class="form-control" id="counseling-month">
								        <option>January</option>
								        <option>February</option>
								        <option>March</option>
								        <option>April</option>
								        <option>May</option>
								        <option>June</option>
								        <option>July</option>
								        <option>August</option>
								        <option>September</option>
								        <option>October</option>
								        <option>November</option>
								        <option>December</option>
								    </select>
							    </div>
							</div>
							<div class="counseling-when-content">
								<div class="form-group">
								    <input type="date" class="form-control" id="date">
							    </div>
							</div>
							<div class="counseling-when-content">
								<div class="form-group">
								    <select class="form-control" id="counseling-time">
								        <option>1pm - 2pm</option>
								        <option>2pm - 3pm</option>
								        <option>3pm - 4pm</option>
								    </select>
							    </div>
							</div>
							<div class="counseling-when-cancel">
								<img src="<?= base_url(); ?>assets/images/counseling/close.png">
							</div>
						</div>
						<div class="counseling-when-content-wrap">
							<div class="counseling-when-content">
								<div class="form-group">
								    <select class="form-control" id="counseling-month">
								        <option>January</option>
								        <option>February</option>
								        <option>March</option>
								        <option>April</option>
								        <option>May</option>
								        <option>June</option>
								        <option>July</option>
								        <option>August</option>
								        <option>September</option>
								        <option>October</option>
								        <option>November</option>
								        <option>December</option>
								    </select>
							    </div>
							</div>
							<div class="counseling-when-content">
								<div class="form-group">
								    <input type="date" class="form-control" id="date">
							    </div>
							</div>
							<div class="counseling-when-content">
								<div class="form-group">
								    <select class="form-control" id="counseling-time">
								        <option>1pm - 2pm</option>
								        <option>2pm - 3pm</option>
								        <option>3pm - 4pm</option>
								    </select>
							    </div>
							</div>
							<div class="counseling-when-cancel">
								<img src="<?= base_url(); ?>assets/images/counseling/close.png">
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 counseling-button-wrap">
					<a href="">
						<button type="button" class="btn btn-default counseling-button">Add to cart</button>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 counseling-title counseling-testi-title">
					<h3>Our<br>Testimonials</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 counseling-testi">
					<div class="counseling-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/counseling/testi-1.jpg);">
					</div><!--
				 --><div class="counseling-testi-desc-wrap v-center">
						<div class="home-testi-desc">
							<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life changed. The weight on my shoulder is gone! Yeaayyy</p>
						</div>
						<div class="home-testi-by">
							<p>- Charlely Tesa -</p>
						</div>
						<div class="quote-mark">
							<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 counseling-testi">
					<div class="counseling-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/counseling/testi-2.jpg);">
					</div><!--
				 --><div class="counseling-testi-desc-wrap v-center">
						<div class="home-testi-desc">
							<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life changed. The weight on my shoulder is gone! Yeaayyy</p>
						</div>
						<div class="home-testi-by">
							<p>- Alexandra Wang -</p>
						</div>
						<div class="quote-mark">
							<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 counseling-testi">
					<div class="counseling-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/counseling/testi-3.jpg);">
					</div><!--
				 --><div class="counseling-testi-desc-wrap v-center">
						<div class="home-testi-desc">
							<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life changed. The weight on my shoulder is gone! Yeaayyy</p>
						</div>
						<div class="home-testi-by">
							<p>- Merry Suharlim -</p>
						</div>
						<div class="quote-mark">
							<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 counseling-testi">
					<div class="counseling-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/counseling/testi-4.jpg);">
					</div><!--
				 --><div class="counseling-testi-desc-wrap v-center">
						<div class="home-testi-desc">
							<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life changed. The weight on my shoulder is gone! Yeaayyy</p>
						</div>
						<div class="home-testi-by">
							<p>- Olive Oil -</p>
						</div>
						<div class="quote-mark">
							<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 blog-pagination">
					<nav aria-label="Page navigation">
					  <ul class="pagination">
					    <li>
					      <a href="" aria-label="Previous">
					        <span aria-hidden="true">Previous</span>
					      </a>
					    </li>
					    <li class="active"><a href="">1</a></li>
					    <li><a href="">2</a></li>
					    <li><a href="">3</a></li>
					    <li><a href="">4</a></li>
					    <li><a href="">5</a></li>
					    <li>
					      <a href="" aria-label="Next">
					        <span aria-hidden="true">Next</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="about-bottom-nav-section">
		<div class="container-fluid">
			<div class="row">
				<a href="<?= base_url(); ?>workshopandexhibition">
					<div class="col-sm-6 about-bottom-nav">
						<h4>GO TO WORKSHOP & EXHIBITION</h4>
					</div>
				</a>
				<a href="<?= base_url(); ?>helpthem">
					<div class="col-sm-6 about-bottom-nav">
						<h4>HELP THEM</h4>
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

</html>
