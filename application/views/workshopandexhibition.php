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

	<section id="workshop-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-4 workshop-title v-bottom-desktop">
					<h3>Our<br>Workshop</h3>
				</div><!--
			 --><div class="col-xs-12 col-sm-8 workshop-filter-wrap v-bottom-desktop">
					<div class="workshop-filter">
						<div class="form-group">
							<label for="workshop-year">Year</label>
						    <select class="form-control" id="workshop-year">
						        <option>2018</option>
						        <option>2019</option>
						        <option>2020</option>
						    </select>
					    </div>
					</div>
					<div class="workshop-filter">
						<div class="form-group">
							<label for="workshop-month">Month</label>
						    <select class="form-control" id="workshop-month">
						        <option>January</option>
						        <option>February</option>
						        <option>March</option>
						        <option>April</option>
						        <option>May</option>
						        <option>June</option>
						        <option>July</option>
						        <option selected>August</option>
						        <option>September</option>
						        <option>October</option>
						        <option>November</option>
						        <option>December</option>
						    </select>
					    </div>
					</div>
					<div class="workshop-filter">
						<div class="form-group">
							<label for="workshop-weeks">Week</label>
						    <select class="form-control" id="workshop-weeks">
						        <option>1 Aug - 4 Aug</option>
						        <option>5 Aug - 11 Aug</option>
						        <option>12 Aug - 18 Aug</option>
						        <option>19 Aug - 25 Aug</option>
						        <option>26 Aug - 31 Aug</option>
						    </select>
					    </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 workshop-list-wrap">
					<div class="row row-eq-height-desktop">
						<div class="col-xs-12 col-sm-4 workshop-list">
							<div class="col-xs-12 workshop-list-inside" style="background-image: url(<?= base_url(); ?>assets/images/workshop/workshop-1.jpg);">
								<div class="workshop-overlay"></div>
								<div class="col-xs-12 workshop-list-day odd-workshop-list">
									<h5>Monday, 13 August</h5>
								</div>
								<div class="col-xs-12 workshop-list-content">
									<div class="workshop-list-text">
										<div class="workshop-list-title">
											<h4>Father Heart's</h4>
										</div>
										<div class="workshop-list-time">
											<p>13 pm - 16 pm</p>
											<p>At Mall Kelapa Gading</p>
										</div>
										<div class="workshop-list-price">
											<h5>$ 30</h5>
										</div>
									</div>
									<div class="workshop-button">
										<a href="">
											<button type="button" class="btn btn-default btn-workshop">Add to cart</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 workshop-list">
							<div class="col-xs-12 workshop-list-inside" style="background-image: url(<?= base_url(); ?>assets/images/workshop/workshop-2.jpg);">
								<div class="workshop-overlay"></div>
								<div class="col-xs-12 workshop-list-day even-workshop-list">
									<h5>Wednesday, 15 August</h5>
								</div>
								<div class="col-xs-12 workshop-list-content">
									<div class="workshop-list-text">
										<div class="workshop-list-title">
											<h4>Annointing</h4>
										</div>
										<div class="workshop-list-time">
											<p>09 am - 12 pm</p>
											<p>At Abura Soba</p>
										</div>
										<div class="workshop-list-price">
											<h5>$ 30</h5>
										</div>
									</div>
									<div class="workshop-button">
										<a href="">
											<button type="button" class="btn btn-default btn-workshop">Add to cart</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 workshop-list">
							<div class="col-xs-12 workshop-list-inside" style="background-image: url(<?= base_url(); ?>assets/images/workshop/workshop-1.jpg);">
								<div class="workshop-overlay"></div>
								<div class="col-xs-12 workshop-list-day odd-workshop-list">
									<h5>Thursday, 16 August</h5>
								</div>
								<div class="col-xs-12 workshop-list-content">
									<div class="workshop-list-text">
										<div class="workshop-list-title">
											<h4>Father Heart's</h4>
										</div>
										<div class="workshop-list-time">
											<p>13 pm - 16 pm</p>
											<p>At Mall Kelapa Gading</p>
										</div>
									</div>
									<div class="workshop-button">
										<button type="button" class="btn btn-default btn-workshop" data-toggle="modal" data-target="#workshop-modal">See detail</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 workshop-list-wrap">
					<div class="row row-eq-height-desktop">
						<div class="col-xs-12 col-sm-4 workshop-list">
							<div class="col-xs-12 workshop-list-inside" style="background-image: url(<?= base_url(); ?>assets/images/workshop/workshop-3.jpg);">
								<div class="workshop-overlay"></div>
								<div class="col-xs-12 workshop-list-day odd-workshop-list">
									<h5>Friday, 17 August</h5>
								</div>
								<div class="col-xs-12 workshop-list-content">
									<div class="workshop-list-text">
										<div class="workshop-list-title">
											<h4>Father Heart's</h4>
										</div>
										<div class="workshop-list-time">
											<p>13 pm - 16 pm</p>
											<p>At Mall Kelapa Gading</p>
										</div>
										<div class="workshop-list-price">
											<h5>$ 30</h5>
										</div>
									</div>
									<div class="workshop-button">
										<a href="">
											<button type="button" class="btn btn-default btn-workshop">Add to cart</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 workshop-list">
							<div class="col-xs-12 workshop-list-inside" style="background-image: url(<?= base_url(); ?>assets/images/workshop/workshop-2.jpg);">
								<div class="workshop-overlay"></div>
								<div class="col-xs-12 workshop-list-day even-workshop-list">
									<h5>Saturday, 18 August</h5>
								</div>
								<div class="col-xs-12 workshop-list-content">
									<div class="workshop-list-text">
										<div class="workshop-list-title">
											<h4>Annointing</h4>
										</div>
										<div class="workshop-list-time">
											<p>09 am - 12 pm</p>
											<p>At Abura Soba</p>
										</div>
									</div>
									<div class="workshop-button">
										<a href="">
											<button type="button" class="btn btn-default btn-workshop">See detail</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 workshop-list">
							<div class="col-xs-12 workshop-list-inside" style="background-image: url(<?= base_url(); ?>assets/images/workshop/workshop-4.jpg);">
								<div class="workshop-overlay"></div>
								<div class="col-xs-12 workshop-list-day odd-workshop-list">
									<h5>Sunday, 19 August</h5>
								</div>
								<div class="col-xs-12 workshop-list-content">
									<div class="workshop-list-text">
										<div class="workshop-list-title">
											<h4>Father Heart's</h4>
										</div>
										<div class="workshop-list-time">
											<p>13 pm - 16 pm</p>
											<p>At Mall Kelapa Gading</p>
										</div>
										<div class="workshop-list-price">
											<h5>$ 30</h5>
										</div>
									</div>
									<div class="workshop-button">
										<a href="">
											<button type="button" class="btn btn-default btn-workshop">Add to cart</button>
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

	<div id="workshop-modal" class="modal fade" role="dialog">
		<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		    	<div class="workshop-modal-close">
		    		<button type="button" class="close" data-dismiss="modal">
		    			<img src="<?= base_url(); ?>assets/images/main/close.png">
		    		</button>
		    	</div>
			    <div class="modal-body">
			        <div class="workshop-modal-pict-wrap v-top-desktop">
			        	<div class="workshop-modal-pict">
			        		<img src="<?= base_url(); ?>assets/images/workshop/detail-1.jpg">
			        	</div>
			        	<div class="workshop-modal-carousel-wrap">
			        		<div id="workshop-modal-carousel" class="owl-carousel owl-theme">
			        			<div class="workshop-modal-item" style="background-image:url(<?= base_url(); ?>assets/images/workshop/detail-1.jpg);" data-bg="<?= base_url(); ?>assets/images/workshop/detail-1.jpg"></div>
			        			<div class="workshop-modal-item" style="background-image:url(<?= base_url(); ?>assets/images/workshop/detail-2.jpg);" data-bg="<?= base_url(); ?>assets/images/workshop/detail-2.jpg"></div>
			        			<div class="workshop-modal-item" style="background-image:url(<?= base_url(); ?>assets/images/workshop/detail-3.jpg);" data-bg="<?= base_url(); ?>assets/images/workshop/detail-3.jpg"></div>
			        			<div class="workshop-modal-item" style="background-image:url(<?= base_url(); ?>assets/images/workshop/detail-4.jpg);" data-bg="<?= base_url(); ?>assets/images/workshop/detail-4.jpg"></div>
			        			<div class="workshop-modal-item" style="background-image:url(<?= base_url(); ?>assets/images/workshop/detail-5.jpg);" data-bg="<?= base_url(); ?>assets/images/workshop/detail-5.jpg"></div>
			        		</div>
			        	</div>
			        </div><!--
			     --><div class="workshop-modal-text-wrap v-top-desktop">
			        	<div class="workshop-modal-title">
			        		<h4>Father Heart's</h4>
			        	</div>
			        	<div class="workshop-modal-desc">
			        		<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent</p>
			        		<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt </p>
			        	</div>
			        	<div class="workshop-modal-info-wrap">
			        		<div class="workshop-modal-info">
			        			<p>Time : 13 pm - 16 pm</p>
			        		</div>
			        		<div class="workshop-modal-info">
			        			<p>Location : at Mall Kelapa Gading</p>
			        		</div>
			        		<div class="workshop-modal-info workshop-modal-price">
			        			<p>Price : <span>$ 30</span></p>
			        		</div>
			        	</div>
			        </div>
			    </div>
		    </div>

		</div>
	</div>

	<section class="about-bottom-nav-section">
		<div class="container-fluid">
			<div class="row">
				<a href="<?= base_url(); ?>counseling">
					<div class="col-sm-6 about-bottom-nav">
						<h4>GO TO COUNSELING</h4>
					</div>
				</a>
				<a href="<?= base_url(); ?>helpthem">
					<div class="col-sm-6 about-bottom-nav">
						<h4>GO TO HELP THEM</h4>
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
		responsive : {
		    0 : {
		        items : 2
		    },
		    768 : {
		        items : 4
		    },
		},
		margin: 15,
		navText:['<img src="<?= base_url(); ?>assets/images/masterpiece/left-arrow.png">','<img src="<?= base_url(); ?>assets/images/masterpiece/right-arrow.png">']
	});

	$('.workshop-modal-item').click(function(){
		var bg = $(this).attr('data-bg');
        $('.workshop-modal-pict img').attr('src', bg);
	});

</script>

</html>
