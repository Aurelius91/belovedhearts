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

	<section id="home-banner-1">
		<!--<div class="home-banner-1-padding"></div>-->
		<div id="home-banner-carousel" class="owl-theme owl-carousel">
			<div class="home-banner-item" style="background-image:url(<?= base_url(); ?>assets/images/main/banner-1.jpg);"></div>
			<div class="home-banner-item" style="background-image:url(<?= base_url(); ?>assets/images/main/banner-1.jpg);"></div>
			<div class="home-banner-item" style="background-image:url(<?= base_url(); ?>assets/images/main/banner-1.jpg);"></div>
			<div class="home-banner-item" style="background-image:url(<?= base_url(); ?>assets/images/main/banner-1.jpg);"></div>
		</div>
		<div class="owl-theme">
			<div class="owl-controls home-custom-dots-wrap">
				<div id="customDots" class="owl-dots"></div>
			</div>
		</div>
		<div class="home-banner-title">
			<h3>You are beautiful and valuable and made in His Image</h3>
		</div>
		<div class="home-banner-social">
			<div class="footer-social-grid v-center">
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div><!--
		 --><div class="footer-social-grid v-center">
				<div class="footer-social-separate"></div>
			</div><!--
		 --><div class="footer-social-grid v-center">
				<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div><!--
		 --><div class="footer-social-grid v-center">
				<div class="footer-social-separate"></div>
			</div><!--
		 --><div class="footer-social-grid v-center">
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>
	</section>

	<section id="home-imparting">
		<div class="container-fluid">
			<div class="big-b">
				<!--<h1>B</h1>-->
				<img src="<?= base_url(); ?>assets/images/main/B.png">
			</div>
			<div class="home-imparting-wrap">
				<div class="home-imparting-1">
					<div class="mobile-home-imparting-1-text">
						<div class="home-imparting-1-title">
							<h3>IMPARTING FATHER LOVES</h3>
						</div>
						<div class="home-imparting-1-quote quote">
							<h4>Helping others is the way we help ourselves.</h4>
						</div>
						<div class="home-imparting-1-by">
							<p>-Oprah Winfrey-</p>
						</div>
					</div>
					<div class="home-imparting-1-pict" style="background-image:url(<?= base_url(); ?>assets/images/main/imparting-1.jpg);">
					</div><!--
				 --><div class="home-imparting-1-text">
						<div class="home-imparting-1-text-inside">
							<div class="home-imparting-1-title">
								<h3>IMPARTING FATHER LOVES</h3>
							</div>
							<div class="home-imparting-1-quote quote">
								<h4>Helping others is the way we help ourselves.</h4>
							</div>
							<div class="home-imparting-1-by">
								<p>-Oprah Winfrey-</p>
							</div>
						</div>
					</div>
				</div>
				<div class="home-video-wrap">
					<a data-toggle="modal" data-target="#video-modal" role="button">
						<div class="home-video-circle">
							<video width="200%" height="100%">
								<source src="<?= base_url(); ?>assets/video/pidio.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
						<div class="home-video-play-outter">
							<div class="home-video-play-inside">
								<div class="home-video-play"></div>
							</div>
						</div>
					</a>
				</div>
				<div class="home-imparting-2">
					<div class="home-imparting-2-text">
						<div class="home-imparting-desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
						<div class="home-imparting-btn">
							<button class="btn btn-help">Help them</button>
						</div>
					</div>
					<div class="home-imparting-2-pict-wrap">
						<div class="home-imparting-2-pict" style="background-image:url(<?= base_url(); ?>assets/images/main/imparting-2.jpg);">
						</div>
						<div class="home-imparting-grey-box"></div>
					</div>
					<div class="mobile-home-imparting-2-text">
						<div class="home-imparting-desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
						<div class="home-imparting-btn">
							<button class="btn btn-help">Help them</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<div id="video-modal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close video-modal-close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<video width="720" height="auto" controls>
						<source src="<?= base_url(); ?>assets/video/pidio.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>
	</div>

	<section id="home-art-therapy" style="background-image: url(<?= base_url(); ?>assets/images/main/art-therapy-bg.jpg);">
		<div class="container-fluid">
			<div class="row">
				<div class="home-art-therapy-content v-top">
					<div class="home-art-therapy-title">
						<h3>ART<br>THERAPY</h3>
					</div>
					<div class="home-art-therapy-quote quote">
						<h4>I think when you work really hard and you help others, God helps you get what you want.</h4>
					</div>
					<div class="home-art-therapy-by">
						<p>-Gina Rodriguez-</p>
					</div>
					<div class="home-art-therapy-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					</div>
					<div class="home-art-therapy-button">
						<button class="btn btn-help">Help them</button>
					</div>
				</div><!--
			 --><div class="home-art-therapy-pict-1 v-top">
					<div class="frame-1">
						<img src="<?= base_url(); ?>assets/images/main/frame-portrait.jpg">
						<div class="frame-1-inside" style="background-image:url(<?= base_url();?>assets/images/main/at-portrait.jpg);"></div>
					</div>
				</div><!--
			 --><div class="home-art-therapy-pict-2 v-top">
					<div class="frame-2">
						<img src="<?= base_url(); ?>assets/images/main/frame-landscape.jpg">
						<div class="frame-2-inside" style="background-image:url(<?= base_url();?>assets/images/main/at-landscape.jpg);"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home-testi" style="background-image:url(<?= base_url(); ?>assets/images/main/testi-bg.jpg);">
		<div class="red-cover"></div>
		<div class="container-fluid">
			<div class="home-testi-content-wrap">
				<div class="home-testi-content">
					<div class="row row-eq-height">
						<div class="home-testi-1">
							<div class="home-testi-quote-wrap">
								<div class="home-testi-quote quote">
									<h4>Once I leave this earth, I know I've done something that will continue to help others</h4>
								</div>
								<div class="home-testi-quote-by">
									<p>-Jackie Joyner-</p>
								</div>
							</div><!--
						 --><div class="home-testi-title">
								<h3>WHAT<br>CLIENT SAY</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="home-testi-carousel" class="owl-theme owl-carousel">
							<div class="home-testi-item">
								<div class="home-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/main/client-1.jpg);">
								</div><!--
							 --><div class="home-testi-desc-wrap v-center">
									<div class="home-testi-desc">
										<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life was changed. The weight on my shoulder is gone!</p>
									</div>
									<div class="home-testi-by">
										<p>-Charlely Tesa-</p>
									</div>
									<div class="quote-mark">
										<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
									</div>
								</div>
							</div>
							<div class="home-testi-item">
								<div class="home-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/main/client-2.jpg);">
								</div><!--
							 --><div class="home-testi-desc-wrap v-center">
									<div class="home-testi-desc">
										<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life was changed. The weight on my shoulder is gone!</p>
									</div>
									<div class="home-testi-by">
										<p>-Alexandra Wang-</p>
									</div>
									<div class="quote-mark">
										<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
									</div>
								</div>
							</div>
							<div class="home-testi-item">
								<div class="home-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/main/client-1.jpg);">
								</div><!--
							 --><div class="home-testi-desc-wrap v-center">
									<div class="home-testi-desc">
										<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life was changed. The weight on my shoulder is gone!</p>
									</div>
									<div class="home-testi-by">
										<p>-Charlely Tesa-</p>
									</div>
									<div class="quote-mark">
										<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
									</div>
								</div>
							</div>
							<div class="home-testi-item">
								<div class="home-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/main/client-2.jpg);">
								</div><!--
							 --><div class="home-testi-desc-wrap v-center">
									<div class="home-testi-desc">
										<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life was changed. The weight on my shoulder is gone!</p>
									</div>
									<div class="home-testi-by">
										<p>-Alexandra Wang-</p>
									</div>
									<div class="quote-mark">
										<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
									</div>
								</div>
							</div>
							<div class="home-testi-item">
								<div class="home-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/main/client-1.jpg);">
								</div><!--
							 --><div class="home-testi-desc-wrap v-center">
									<div class="home-testi-desc">
										<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life was changed. The weight on my shoulder is gone!</p>
									</div>
									<div class="home-testi-by">
										<p>-Charlely Tesa-</p>
									</div>
									<div class="quote-mark">
										<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
									</div>
								</div>
							</div>
							<div class="home-testi-item">
								<div class="home-testi-pp v-center" style="background-image: url(<?= base_url(); ?>assets/images/main/client-2.jpg);">
								</div><!--
							 --><div class="home-testi-desc-wrap v-center">
									<div class="home-testi-desc">
										<p>I was very down before, but once I get to know Beloved Hearts and got a couple of sessions, my life was changed. The weight on my shoulder is gone!</p>
									</div>
									<div class="home-testi-by">
										<p>-Alexandra Wang-</p>
									</div>
									<div class="quote-mark">
										<img src="<?= base_url(); ?>assets/images/main/quote-mark.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home-artwork">
		<div class="container-fluid">
			<div class="row">
				<div class="home-artwork-title v-center">
					<h3>OUR<br>ARTWORKS</h3>
				</div><!--
			 --><div class="home-artwork-quote-wrap v-center">
					<div class="home-artwork-quote quote">
						<h4>I've come to the conclusion that it's not really possible to help others</h4>
					</div>
					<div class="home-artwork-quote-by">
						<p>-Paul Cezanne-</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="home-artwork-artist-wrap">
					<ul class="nav nav-tabs home-artwork-tabs">
						<li class="active"><a data-toggle="tab" href="#home-artwork-1">Jay Ailanee</a></li>
						<li><a data-toggle="tab" href="#home-artwork-2">Nathan Abi</a></li>
						<li><a data-toggle="tab" href="#home-artwork-3">Frans Maute</a></li>
						<li><a data-toggle="tab" href="#home-artwork-4">Picasso</a></li>
						<li><a data-toggle="tab" href="#home-artwork-5">Alexander Graham</a></li>
						<li><a href="">See All</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="tab-content home-artwork-tab-content">
					<div id="home-artwork-1" class="tab pane fade in active tab-content-inside">
						<div class="col-xs-12 col-sm-3 home-artwork-grid">
							<div class="col-xs-12 col-sm-12 home-artwork-pict-outter">
								<div class="col-xs-12 col-sm-12 home-artwork-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/artwork-1.jpg);">
								</div>
								<div class="home-artwork-buy">
									<h4>BUY NOW</h4>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 home-artwork-text-under">
								<h4>Smile</h4>
								<h4>$110</h4>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 home-artwork-grid">
							<div class="col-xs-12 col-sm-12 home-artwork-pict-outter">
								<div class="col-xs-12 col-sm-12 home-artwork-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/artwork-2.jpg);">
								</div>
								<div class="home-artwork-buy">
									<h4>BUY NOW</h4>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 home-artwork-text-under">
								<h4>Smile</h4>
								<h4>$90</h4>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 home-artwork-grid">
							<div class="col-xs-12 col-sm-12 home-artwork-pict-outter">
								<div class="col-xs-12 col-sm-12 home-artwork-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/artwork-3.jpg);">
								</div>
								<div class="home-artwork-buy">
									<h4>BUY NOW</h4>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 home-artwork-text-under">
								<h4>Smile</h4>
								<h4>$120</h4>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 home-artwork-grid">
							<div class="col-xs-12 col-sm-12 home-artwork-pict-outter">
								<div class="col-xs-12 col-sm-12 home-artwork-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/artwork-4.jpg);">
								</div>
								<div class="home-artwork-buy">
									<h4>BUY NOW</h4>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 home-artwork-text-under">
								<h4>Smile</h4>
								<h4>$78</h4>
							</div>
						</div>
					</div>
					<div id="home-artwork-2" class="tab pane fade tab-content-inside">
					</div>
					<div id="home-artwork-3" class="tab pane fade tab-content-inside">
					</div>
					<div id="home-artwork-4" class="tab pane fade tab-content-inside">
					</div>
					<div id="home-artwork-5" class="tab pane fade tab-content-inside">
					</div>
				</div>
			</div>
		</div>
		<div class="home-artwork-decor-1 img-100">
			<img src="<?= base_url(); ?>assets/images/main/artwork-decor-1.png">
		</div>
		<div class="home-artwork-decor-2 img-100">
			<img src="<?= base_url(); ?>assets/images/main/artwork-decor-2.png">
		</div>
		<div class="home-artwork-decor-3 img-100">
			<img src="<?= base_url(); ?>assets/images/main/artwork-decor-3.png">
		</div>
		<div class="home-artwork-decor-4 img-100">
			<img src="<?= base_url(); ?>assets/images/main/artwork-decor-4.png">
		</div>
		<div class="home-artwork-decor-5 img-100">
			<img src="<?= base_url(); ?>assets/images/main/artwork-decor-5.png">
		</div>
	</section>

	<section id="home-support" style="background-image: url(<?= base_url(); ?>assets/images/main/home-support-bg.jpg);">
		<div class="container-fluid">
			<div class="row">
				<div class="home-support-outter">
					<div class="home-support-pict-wrap v-center">
						<div class="home-support-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/home-support-pict.jpg);">
							<div class="home-support-circle-1">
								<div class="home-support-circle-2"></div>
							</div>
						</div>
						<div class="home-support-gradient"></div>
					</div><!--
				 --><div class="home-support-text-wrap v-center">
						<div class="home-support-title">
							<h3>SUPPORT<br>US</h3>
						</div>
						<div class="home-support-quote quote">
							<h4>The purpose of human life is to serve, and to show compassion and the will to help others.</h4>
						</div>
						<div class="home-support-quote-by">
							<p>-Oprah Winfrey-</p>
						</div>
						<div class="home-support-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
						</div>
						<div class="home-support-button-wrap">
							<button class="btn btn-help">Donate Now</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home-activity" style="background-image: url(<?= base_url(); ?>assets/images/main/home-activity-bg.jpg), -webkit-radial-gradient(circle, #d64242 20%, #9c0d0d 80%);
	background-image: url(<?= base_url(); ?>assets/images/main/home-activity-bg.jpg),-o-radial-gradient(circle, #d64242 20%, #9c0d0d 80%);
	background-image: url(<?= base_url(); ?>assets/images/main/home-activity-bg.jpg),-moz-radial-gradient(circle, #d64242 20%, #9c0d0d 80%);
	background-image: url(<?= base_url(); ?>assets/images/main/home-activity-bg.jpg),radial-gradient(circle, #d64242 20%, #9c0d0d 80%);
	">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 home-activity-title v-center">
					<h3>MISSION<br>ITINERARY</h3>
				</div><!--
			 --><div class="col-xs-12 col-sm-6 home-activity-quote-wrap v-center">
					<div class="col-xs-12 home-activity-quote quote">
						<h4>Help other reach world-class. And they'll joyfully help you get to your best.</h4>
					</div>
					<div class="col-xs-12 home-activity-quote-by">
						<p>-Robin S-</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 home-activity-text">
					<h4>I will be training a bunch of Indonesian missionaires from different tribes this week, who are on their missions training school. My translator is a man who is working with really low paid transgender prostitutes in the slums and currently he is staffing the discipleship training school that I'm teaching at. It's a joy to train and be faith journeying with so many passionate people.</h4>
				</div>
			</div>
			<div class="row">
				<div class="home-activity-button-wrap">
					<button class="btn btn-help">Learn More</button>
				</div>
			</div>
		</div>
	</section>

	<section id="home-blog" style="background-image: url(<?= base_url(); ?>assets/images/main/home-blog-bg.jpg);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-5 col-sm-3 v-bottom">
					<div class="home-blog-button-wrap">
						<button class="btn btn-help">See All</button>
					</div>
				</div><!--
			 --><div class="col-xs-7 col-sm-3 col-sm-offset-6 v-bottom home-blog-title">
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
						<div class="col-sm-12 home-blog-button-outter-wrap">
							<div class="home-blog-button-wrap">
								<button class="btn btn-help">Read more</button>
							</div>
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
							<div class="home-blog-button-wrap">
								<button class="btn btn-help">Read more</button>
							</div>
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
							<div class="home-blog-button-wrap">
								<button class="btn btn-help">Read more</button>
							</div>
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
							<div class="home-blog-button-wrap">
								<button class="btn btn-help">Read more</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home-ig">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h3>@Beloved_heart</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
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

<script>
	$('#home-banner-carousel').owlCarousel({
		autoplay: false,
		loop: false,
		nav: false,
		dot: true,
		items: 1,
		dotsContainer: '#customDots',
	});

	$('#home-testi-carousel').owlCarousel({
		autoplay: false,
		loop: false,
		nav: false,
		dot: true,
		responsive : {
		    0 : {
		        items : 1
		    },
		    768 : {
		        items : 2
		    },
		}
	});

</script>

<? include 'menu-function.php' ?>

</html>
