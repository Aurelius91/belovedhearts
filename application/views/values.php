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

	<section id="values-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/values/bg.jpg);">
		<div class="container-fluid">
			<div class="banner-overlay"></div>
			<div class="banner-text-wrap">
				<div class="banner-title">
					<h4>If everyone is moving forward together, then success takes care of itself.</h4>
				</div>
				<div class="banner-sub">
					<h5>- Henry Ford -</h5>
				</div>
			</div>
		</div>
	</section>

	<section class="about-content-section">
		<div class="container-fluid">
			<div class="row">
				<? include 'about-us-navigation.php' ?>
				<div class="col-xs-12 values-quote-wrap">
					<div class="values-quote-inside">
						<div class="values-quote">
							<h4>The purpose of human life is serve, and to show compassion and the will to help others. <span class="smaller-quote">-Oprah Winfrey-</span></h4>
						</div><!--
					 --><div class="values-title">
							<h3>Our<br>Values</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="values-content-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 values-navigation-wrap">
					<ul class="nav nav-pills nav-justified">
						<li class="active">
							<a data-toggle="pill" href="#love">
								<div class="values-tab-circle">
									<div class="values-tab-inner-circle" data-src="<?= base_url(); ?>assets/images/values/red-love.png">
										<img src="<?= base_url(); ?>assets/images/values/white-love.png" data-src="<?= base_url(); ?>assets/images/values/white-love.png">
									</div>
								</div>
								<div class="values-tab-text">
									<h5>Love</h5>
								</div>
							</a>
						</li>
						<li>
							<a data-toggle="pill" href="#holy-spirit">
								<div class="values-tab-circle">
									<div class="values-tab-inner-circle" data-src="<?= base_url(); ?>assets/images/values/red-spirit.png">
										<img src="<?= base_url(); ?>assets/images/values/red-spirit.png" data-src="<?= base_url(); ?>assets/images/values/white-spirit.png">
									</div>
								</div>
								<div class="values-tab-text">
									<h5>Holy Spirit</h5>
								</div>
							</a>
						</li>
						<li>
							<a data-toggle="pill" href="#holy-bible">
								<div class="values-tab-circle">
									<div class="values-tab-inner-circle" data-src="<?= base_url(); ?>assets/images/values/red-bible.png">
										<img src="<?= base_url(); ?>assets/images/values/red-bible.png" data-src="<?= base_url(); ?>assets/images/values/white-bible.png">
									</div>
								</div>
								<div class="values-tab-text">
									<h5>Holy Bible</h5>
								</div>
							</a>
						</li>
						<li>
							<a data-toggle="pill" href="#freedom-art">
								<div class="values-tab-circle">
									<div class="values-tab-inner-circle" data-src="<?= base_url(); ?>assets/images/values/red-art.png">
										<img src="<?= base_url(); ?>assets/images/values/red-art.png" data-src="<?= base_url(); ?>assets/images/values/white-art.png">
									</div>
								</div>
								<div class="values-tab-text">
									<h5>Freedom Art</h5>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 values-content tab-content">
					<div id="love" class="tab-pane fade in active">
					    <div class="col-xs-12 col-sm-6 values-pict-wrap">
					    	<div class="values-pict" style="background-image: url(<?= base_url(); ?>assets/images/values/pict-1.jpg);"></div>
					    	<div class="values-circle-1">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-1.png">
					    	</div>
					    	<div class="values-circle-2">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-2.png">
					    	</div>
					    	<div class="values-circle-3">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-3.png">
					    	</div>
					    </div>
					    <div class="col-xs-12 col-sm-6 values-text-wrap">
					    	<div class="col-xs-12 values-text-title">
					    		<h4>Love</h4>
					    	</div>
					    	<div class="col-xs-12 values-desc">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    		<p> Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    	</div>
					    </div>
					</div>

					<div id="holy-spirit" class="tab-pane fade">
					    <div class="col-xs-12 col-sm-6 values-pict-wrap">
					    	<div class="values-pict" style="background-image: url(<?= base_url(); ?>assets/images/values/pict-1.jpg);"></div>
					    	<div class="values-circle-1">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-1.png">
					    	</div>
					    	<div class="values-circle-2">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-2.png">
					    	</div>
					    	<div class="values-circle-3">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-3.png">
					    	</div>
					    </div>
					    <div class="col-xs-12 col-sm-6 values-text-wrap">
					    	<div class="col-xs-12 values-text-title">
					    		<h4>Holy Spirit</h4>
					    	</div>
					    	<div class="col-xs-12 values-desc">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    		<p> Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    	</div>
					    </div>
					</div>

					<div id="holy-bible" class="tab-pane fade">
					    <div class="col-xs-12 col-sm-6 values-pict-wrap">
					    	<div class="values-pict" style="background-image: url(<?= base_url(); ?>assets/images/values/pict-1.jpg);"></div>
					    	<div class="values-circle-1">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-1.png">
					    	</div>
					    	<div class="values-circle-2">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-2.png">
					    	</div>
					    	<div class="values-circle-3">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-3.png">
					    	</div>
					    </div>
					    <div class="col-xs-12 col-sm-6 values-text-wrap">
					    	<div class="col-xs-12 values-text-title">
					    		<h4>Holy Bible</h4>
					    	</div>
					    	<div class="col-xs-12 values-desc">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    		<p> Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    	</div>
					    </div>
					</div>

					<div id="freedom-art" class="tab-pane fade">
					    <div class="col-xs-12 col-sm-6 values-pict-wrap">
					    	<div class="values-pict" style="background-image: url(<?= base_url(); ?>assets/images/values/pict-1.jpg);"></div>
					    	<div class="values-circle-1">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-1.png">
					    	</div>
					    	<div class="values-circle-2">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-2.png">
					    	</div>
					    	<div class="values-circle-3">
					    		<img src="<?= base_url(); ?>assets/images/values/bulat-3.png">
					    	</div>
					    </div>
					    <div class="col-xs-12 col-sm-6 values-text-wrap">
					    	<div class="col-xs-12 values-text-title">
					    		<h4>Freedom Art</h4>
					    	</div>
					    	<div class="col-xs-12 values-desc">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    		<p> Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat</p>
					    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					    	</div>
					    </div>
					</div>

				</div>
				<div class="b-decor">
					<img src="<?= base_url(); ?>assets/images/values/B.png">
				</div>
			</div>
		</div>
	</section>

	<? include 'about-us-bottom-navigation.php' ?>

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
	$(document).ready(function(){
		$('.values-navigation-wrap li').click(function(){
			$('.values-tab-inner-circle').each(function(){
				var defaultIcon = $(this).attr('data-src');
				$(this).find('img').attr('src',defaultIcon);
			});
			var activeIcon = $(this).find('img').attr('data-src');
			$(this).find('img').attr('src', activeIcon);
		})
	});
</script>

</html>
