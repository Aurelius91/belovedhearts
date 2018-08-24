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

	<section id="confirm-page-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 confirm-form-title">
					<h4>CONFIRMATION FORM</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 volunteer-form-wrap left-volunteer-form">
					<div class="form-group">
						<label for="confirm-name">Name</label>
						<input type="text" class="form-control" id="confirm-name">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 volunteer-form-wrap right-volunteer-form">
					<div class="form-group">
						<label for="confirm-email">Email Address</label>
						<input type="text" class="form-control" id="confirm-email">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 volunteer-form-wrap left-volunteer-form">
					<div class="form-group">
						<label for="confirm-payment-date">Payment Date</label>
						<input type="text" class="form-control" id="confirm-payment-date">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 volunteer-form-wrap right-volunteer-form">
					<div class="form-group">
						<label for="confirm-payment-amount">Payment Amount</label>
						<input type="text" class="form-control" id="confirm-payment-amount">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 volunteer-form-wrap left-volunteer-form order-attach-wrap">
					<div class="form-group">
						<label for="confirm-invoice">Invoice</label>
						<!-- <input type="text" class="form-control" id="confirm-invoice"> -->

						<div class="input-group input-file">

				    		<input type="text" class="form-control" placeholder='Click here to attach file' />

				            <span class="input-group-btn">
				        		<button class="btn btn-default btn-choose" type="button"><img src="<?= base_url(); ?>assets/images/main/attach.png"></button>
				    		</span>

						</div>

					</div>
				</div>
				<div class="col-xs-12 col-sm-6 volunteer-form-wrap right-volunteer-form">
					<div class="form-group">
						<label for="confirm-notes">Notes</label>
						<input type="text" class="form-control" id="confirm-notes">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="action-button-wrap">
					<button class="btn btn-help" data-toggle="modal" data-target="#order-pop">SUBMIT</button>
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

<script type="text/javascript">
	$(function() {
		bs_input_file();
	});

	function bs_input_file() {
		$(".input-file").before(
			function() {
				if ( ! $(this).prev().hasClass('input-ghost') ) {
					var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
					element.attr("name",$(this).attr("name"));
					element.change(function(){
						element.next(element).find('input').val((element.val()).split('\\').pop());
					});
					$(this).find("button.btn-choose").click(function(){
						element.click();
					});

					$(this).find('input').css("cursor","pointer");
					$(this).find('input').mousedown(function() {
						$(this).parents('.input-file').prev().click();
						return false;
					});
					return element;
				}
			}
		);
	}
</script>

</html>
