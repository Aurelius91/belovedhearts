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

	<section id="merchandise-banner" class="top-banner" style="background-image: url(<?= base_url(); ?>assets/images/merchandise/bg.jpg);">
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

	<section id="merchandise-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 masterpiece-top-part">
					<div class="col-xs-12 col-sm-6 masterpiece-title v-bottom-desktop">
						<h3>Our<br>Merchandise</h3>
					</div><!--
				 --><div class="col-xs-12 col-sm-6 masterpiece-filter v-bottom-desktop">
						<!-- <div class="masterpiece-filter-inside">
							<div class="form-group">
								<label for="artist-filter">Artist:</label>
								<select class="form-control" id="artist-filter">
								    <option>All</option>
								    <option>Lois Bestri</option>
								    <option>Gilang Ilham</option>
								    <option>Irvan Kho</option>
								</select>
							</div>
						</div> -->
						<div class="merchandise-filter-inside">

								<label for="sort-filter">Sort By:</label>
								<select id="sort-filter">
								    <option>Price low to high</option>
								    <option>Price high to low</option>
								    <option>Alphabet</option>
								</select>

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 merchandise-main-wrap">
					<div class="col-xs-12 col-sm-3 merchandise-side-filter-wrap">
						<div class="merchandise-filter-1">
							<h4>Category</h4>
							<ul>
								<li><div class="merchan-category-list">Mug</div></li>
								<li><div class="merchan-category-list">Notebook</div></li>
								<li><div class="merchan-category-list">Prints</div></li>
								<li><div class="merchan-category-list">Tshirt</div></li>
								<li><div class="merchan-category-list">Quotes</div></li>
								<li><div class="merchan-category-list">Totebag</div></li>
							</ul>
						</div>
						<div class="merchandise-filter-2">
							<h4>Price</h4>
							<div id="coba-drag"></div>
						</div>
						<div class="merchandise-filter-3">
							<h4>Size</h4>
							<div class="merchandise-size-filter-wrap">
								<div class="merchandise-size-filter">
									<p>S</p>
								</div>
								<div class="merchandise-size-filter">
									<p>M</p>
								</div>
								<div class="merchandise-size-filter">
									<p>L</p>
								</div>
								<div class="merchandise-size-filter">
									<p>XL</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-9 merchandise-main-product-wrap">
						<div class="row">
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-1.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Sheroo</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 50</h5>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-2.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Royalty</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 75</h5>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-3.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Blueprint</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 77</h5>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-4.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Royalty</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 80</h5>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-5.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Sheroo</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 50</h5>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-6.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Royalty</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 75</h5>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-7.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Blueprint</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 77</h5>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 merchandise-each-product">
								<div class="col-xs-12 merchandise-pict">
									<img src="<?= base_url(); ?>assets/images/merchandise/merchan-8.png">
								</div>
								<div class="col-xs-12 merchandise-buy">
									<a href="<?= base_url(); ?>merchandise/detail">
										<button class="btn btn-merchandise">
											<img src="<?= base_url(); ?>assets/images/main/troli.png">
											Buy now
										</button>
									</a>
								</div>
								<div class="col-xs-12 merchandise-name">
									<h4>Royalty</h4>
								</div>
								<div class="col-xs-12 merchandise-price">
									<h5>$ 80</h5>
								</div>
							</div>
						</div>
					</div>
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
				<a href="">
					<div class="col-xs-12 about-bottom-nav">
						<h4>BUY MASTERPIECE</h4>
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
		categoryChoose();
		priceDrag();
		sizeFilter();
	});

	function categoryChoose(){
		$('.merchandise-filter-1 li').click(function(){
			$(this).find('.merchan-category-list').toggleClass('colorful');
		});
	}

	function priceDrag(){
		var handlesSlider = document.getElementById('coba-drag');

		noUiSlider.create(handlesSlider, {
			start: [ 50, 800 ],
			tooltips: true,
			range: {
				'min': [  0 ],
				'max': [ 1000 ]
			},
			format: wNumb({
				decimals: 3,
				thousand: '.',
				suffix: ' (US $)',
			}),
			step: 50,
		});
	}


	function sizeFilter(){
		$('.merchandise-size-filter').click(function(){
			$(this).toggleClass('size-filter-choose');
		});
	}
</script>

</html>
