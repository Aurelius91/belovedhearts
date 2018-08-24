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

	<div id="signup-section">
		<div class="signup">
			<div class="container-fluid">
				<div class="row row-eq-height-desktop">
					<div class="col-xs-12 col-sm-6 signup-pict" style="background-image: url(<?= base_url(); ?>assets/images/main/signin.jpg);"></div>
					<div class="col-xs-12 col-sm-6 signup-form">
						<div class="col-xs-12 signup-title">
							<h4>SIGN IN</h4>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="email">Email <span class="form-error" style="color: red; padding-left: 20px; display: none;">*Required</span></label>
								<input type="email" class="form-control data-signin-important" id="email">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="password">Password <span class="form-error" style="color: red; padding-left: 20px; display: none;">*Required</span></label>
								<input type="password" class="form-control  data-signin-important" id="password">
							</div>
						</div>
						<div class="col-xs-12 signin-switch">
							<div class="sign-flex">
								<div class="sign-inside">
									<div class="sign-checkbox v-center">
										<div class="sign-check-in"></div>
									</div><!--
								 --><div class="sign-text v-center">
										<p>Login</p>
									</div>
								</div>
								<div class="sign-inside">
									<a href="<?= base_url(); ?>signup">
										<div class="sign-checkbox v-center">

										</div><!--
									 --><div class="sign-text v-center">
											<p>Sign up</p>
										</div>
									</a>
								</div>
								<div class="sign-inside forget-pass">
									<a href="<?= base_url(); ?>forgetpass">
										<p>Forget password?</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 signup-submit">
							<div class="signup-button-wrap">
								<button id="button-signin-submit" class="btn btn-help" onclick="submitForm();">Login</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sign-decor-1">
				<img src="<?= base_url(); ?>assets/images/main/sign-decor-1.png">
			</div>
			<div class="sign-decor-2">
				<img src="<?= base_url(); ?>assets/images/main/sign-decor-2.png">
			</div>
		</div>
	</div>

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

<script type="text/javascript">
	$(function() {
		resetSigninForm();
		signinKeypress();
	});

	function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        return regex.test(email);
    }

	function resetSigninForm() {
		$('.form-error').hide();
		$('.data-signin-important').val("");
	}

	function signinKeypress() {
    	$('#password').keypress(function(e) {
			if (e.which == 13) {
				submitForm();
			}
		});
    }

	function submitForm() {
		$('#button-signin-submit').html('<i class="fa fa-spinner fa-spin fa-fw"></i><span> Logging In...</span>');
		$('.form-error').hide();
		$('.data-signin-important').css('border-bottom', '1px solid rgba(114,114,114,0.8);');

		var found = 0;
		var email = $('#email').val();
		var password = $('#password').val();

		$.each($('.data-signin-important'), function(key, signin) {
			if ($(signin).val() == '') {
				found += 1;

				$(signin).prev().children().html(' * Required').show();
				$(signin).css('border-bottom', '1px solid red');
			}
		});

		if (email != '' && !isEmail(email)) {
			found += 1;

			$('#email').prev().children().html(' * Wrong Email Format').show();
			$('#email').css('border-bottom', '1px solid red');
		}

		if (found > 0) {
			$('#button-signin-submit').html('Login');

			return;
		}

		$('.data-signin-important').css('border-bottom', '1px solid rgba(114,114,114,0.8);');

		$.ajax({
			data :{
				email: email,
				password: password,
				"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
			},
			dataType: 'JSON',
			error: function() {
				alert('Server Error');

				$('#button-signin-submit').html('Login');
			},
			success: function(data){
				if (data.status == 'success') {
					window.location.href = "<?= base_url(); ?>";
				}
				else {
					if (data.message == 'Wrong Password') {
						$('#password').prev().children().html(' * ' + data.message).show();
						$('#password').css('border-bottom', '1px solid red');
					}
					else {
						alert(data.message);
					}
				}

				$('#button-signin-submit').html('Login');
			},
			type : 'POST',
			url : '<?= base_url(); ?>signin/ajax_login/',
		});
	}
</script>

</html>
