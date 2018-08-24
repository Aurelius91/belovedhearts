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

	<section id="masterpiece-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/bg.jpg);">
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

	<section id="masterpiece-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 masterpiece-top-part">
					<div class="col-xs-12 col-sm-6 masterpiece-title v-bottom-desktop">
						<h3>Our<br>Masterpiece</h3>
					</div><!--
				 --><div class="col-xs-12 col-sm-6 masterpiece-filter v-bottom-desktop">
						<div class="masterpiece-filter-inside">
							<div class="form-group">
								<label for="artist-filter">Artist:</label>
								<select class="form-control" id="artist-filter">
								    <option>All</option>
								    <option>Lois Bestri</option>
								    <option>Gilang Ilham</option>
								    <option>Irvan Kho</option>
								</select>
							</div>
						</div>
						<div class="masterpiece-filter-inside">
							<div class="form-group">
								<label for="sort-filter">Sort By:</label>
								<select class="form-control" id="sort-filter">
								    <option>Popularity</option>
								    <option>Price</option>
								    <option>Alphabet</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-1.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Sheroo (2016)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>120 X 90 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 500</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-2.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Royalty (2014)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>40 X 30 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 160</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-3.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Blueprint (2014)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>120 X 90 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 110</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-4.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Sheroo (2016)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>120 X 90 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 500</h5>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-5.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Sheroo (2016)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>120 X 90 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 500</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-6.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Beloved (2015)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>31 X 31 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 180</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-7.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Sheroo (2016)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>120 X 90 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 500</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-3 masterpiece-catalog">
					<a href="<?= base_url(); ?>masterpiece/detail/">
						<div class="masterpiece-pict-wrap">
							<div class="masterpiece-pict" style="background-image: url(<?= base_url(); ?>assets/images/masterpiece/master-8.jpg);"></div>
							<div class="masterpiece-frame">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame.png">

							</div>
							<div class="masterpiece-frame-shadow">
								<img src="<?= base_url(); ?>assets/images/masterpiece/frame-shadow.png">
							</div>
							<div class="masterpiece-buy-wrap">
								<div class="masterpiece-buy">
									<img src="<?= base_url(); ?>assets/images/main/troli.png">
									<h5>Buy now</h5>
								</div>
							</div>
						</div>
						<div class="masterpiece-text-wrap">
							<div class="masterpiece-name">
								<h5>Sheroo (2016)</h5>
							</div>
							<div class="masterpiece-size">
								<h5>120 X 90 cm</h5>
							</div>
							<div class="masterpiece-price">
								<h5>$ 500</h5>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 blog-pagination masterpiece-pagination">
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

			<div class="artist-big-decor-1">
				<img src="<?= base_url(); ?>assets/images/artist/decor-5.png">
			</div>
			<div class="artist-big-decor-2">
				<img src="<?= base_url(); ?>assets/images/artist/decor-4.png">
			</div>
			<div class="masterpiece-big-decor-3">
				<img src="<?= base_url(); ?>assets/images/artist/decor-2.png">
			</div>
		</div>
	</section>

	<section class="about-bottom-nav-section">
		<div class="container-fluid">
			<div class="row">
				<a href="<?= base_url(); ?>merchandise">
					<div class="col-xs-12 about-bottom-nav">
						<h4>BUY MERCHANDISE</h4>
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
