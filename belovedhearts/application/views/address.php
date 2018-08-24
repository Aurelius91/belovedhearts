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

	<section id="my-account">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 account-title">
					<h3>My account</h3>
				</div>
			</div>
			<div class="row row-eq-height-desktop">
				<div class="col-xs-12 col-sm-4 account-left-part">
					<? include 'account-nav.php' ?>
				</div>
				<div class="col-xs-12 col-sm-8 account-detail-wrap">
					<div class="col-xs-12 account-detail-title">
						<h5>BILLING ADDRESS</h5>
					</div>
					<div class="col-xs-12 account-address-wrap">
						<div class="account-button">
							<button class="btn btn-help" data-toggle="modal" data-target="#address-modal">Edit</button>
						</div>
						<div class="account-address">
							<h5>Lois Bestri</h5>
							<h5>Label Inovasi Indonesia<br>
								Treasury Tower lantai 21E, District 8, SCBD Lot 28. Jl. Jend.Sudirman kav 52-53 Office Tower<br>
								Kebayoran Baru, Kota Administrasi Jakarta Selatan<br>
								DKI Jakarta<br>
								12190
							</h5>
						</div>
					</div>

					<div class="col-xs-12 account-detail-title">
						<h5>SHIPPING ADDRESS</h5>
					</div>
					<div class="col-xs-12 account-address-wrap">
						<div class="account-button">
							<button class="btn btn-help" data-toggle="modal" data-target="#address-modal">Edit</button>
						</div>
						<div class="account-address">
							<h5>Lois Bestri</h5>
							<h5>Label Inovasi Indonesia<br>
								Treasury Tower lantai 21E, District 8, SCBD Lot 28. Jl. Jend.Sudirman kav 52-53 Office Tower<br>
								Kebayoran Baru, Kota Administrasi Jakarta Selatan<br>
								DKI Jakarta<br>
								12190
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="address-modal" class="modal fade" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		    	<div class="workshop-modal-close">
		    		<button type="button" class="close" data-dismiss="modal">
		    			<img src="<?= base_url(); ?>assets/images/main/close.png">
		    		</button>
		    	</div>
			    <div class="modal-body">
			        <div class="address-edit">
			        	<div class="form-group">
							<label for="address">Address</label>
							<textarea class="form-control" rows="5" id="address"></textarea>
						</div>
			        </div>
			    </div>
		    </div>

		</div>
	</div>

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
