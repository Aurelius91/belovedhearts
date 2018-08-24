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

	<section id="blog-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/blog/bg.jpg);">
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

	<section id="blog-content-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 blog-content-title">
					<h3>OUR<br>BLOG</h3>
				</div>
			</div>
			<div class="row row-eq-height-desktop">
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-1.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>I Imagined What Happened If We Could Swim In The Clouds</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Cath A</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-2.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>I Accidentally Found A Mysterious Forest Full Of Shoes</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Louisa F</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-3.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>Woman Photographs Strangers To Show How People React To Overweight People</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Chika S</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-4.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>I Accidentally Found A Mysterious Forest Full Of Shoes</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Chika S</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-eq-height-desktop">
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-1.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>I Imagined What Happened If We Could Swim In The Clouds</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Cath A</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-2.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>I Accidentally Found A Mysterious Forest Full Of Shoes</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Louisa F</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-3.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>Woman Photographs Strangers To Show How People React To Overweight People</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Chika S</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 home-blog-wrap">
					<div class="col-xs-12 home-blog-radius">
						<div class="col-xs-12 home-blog-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-4.jpg);">
						</div>
						<div class="col-xs-12 home-blog-text">
							<div class="col-xs-12 home-blog-headline">
								<p>I Accidentally Found A Mysterious Forest Full Of Shoes</p>
							</div>
							<div class="col-xs-12 home-blog-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
							</div>
							<div class="col-xs-12 home-blog-by">
								<p>Chika S</p>
							</div>

						</div>
						<div class="col-xs-12 home-blog-button-outter-wrap">
							<a href="<?= base_url(); ?>blogdetail">
								<div class="home-blog-button-wrap">
									<button class="btn btn-help">Read more</button>
								</div>
							</a>
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
