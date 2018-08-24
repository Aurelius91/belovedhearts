	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			click();
			init();
			reset();
		});

		function click() {
			$('#form-back').click(function() {
				window.location.href = '<?= base_url(); ?>';
			});

			$('#form-submit').click(function() {
				submit();
			});
		}

		function init() {
			tinymce.init({
				selector: 'textarea#setting-company-address',
				height: 300,
				width: '100%',
				plugins: ["advlist autolink lists link charmap preview", "searchreplace visualblocks code", "table contextmenu paste"],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
				paste_as_text: true
			});
		}

		function reset() {
			$('#setting-company-name').val("<?= $setting->company_name; ?>");
			$('#setting-company-email').val("<?= $setting->company_email; ?>");
			$('#setting-company-phone').val("<?= $setting->company_phone; ?>");
			$('#setting-company-address').val("<?= $setting->company_address; ?>");

			$('#setting-facebook-url').val("<?= $setting->setting__social_media_facebook_link; ?>");
			$('#setting-twitter-url').val("<?= $setting->setting__social_media_twitter_link; ?>");
			$('#setting-instagram-url').val("<?= $setting->setting__social_media_instagram_link; ?>");
		}

		function submit() {
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			var companyName = $('#setting-company-name').val();
			var companyEmail = $('#setting-company-email').val();
			var companyPhone = $('#setting-company-phone').val();
			var companyAddress = $('#setting-company-address').val();

			var facebookUrl = $('#setting-facebook-url').val();
			var twitterUrl = $('#setting-twitter-url').val();
			var instagramUrl = $('#setting-instagram-url').val();

			$.ajax({
				data :{
					company_name: companyName,
					company_email: companyEmail,
					company_phone: companyPhone,
					companyAddress: company_address,
					setting__social_media_facebook_link: facebookUrl,
					setting__social_media_twitter_link: twitterUrl,
					setting__social_media_instagram_link: instagramUrl,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					$('.ui.dimmer.all-loader').dimmer('hide');
					$('.ui.basic.modal.all-error').modal('show');
					$('.all-error-text').html('Server Error.');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.ui.text.loader').html('Refreshing your page...');

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>setting/ajax_update/',
				xhr: function() {
					var percentage = 0;
					var xhr = new window.XMLHttpRequest();

					xhr.upload.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Checking Data..');
					}, false);

					xhr.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Updating Database...');
					}, false);

					return xhr;
				},
			});
		}
	</script>

	<!-- Dashboard Here -->
	<div class="main-content">
		<div class="ui stackable one column centered grid">
			<div class="column">
				<div class="ui attached message setting-header">
					<div class="header">Company Details</div>
				</div>
				<div class="form-content">
					<div class="ui form">
						<h4 class="ui dividing header">General Settings</h4>
						<div class="field">
							<div class="field">
								<label>Company Name</label>
								<input id="setting-company-name" placeholder="Company Name.." type="text">
							</div>
							<div class="two fields">

								<div class="field">
									<label>Company Email</label>
									<input id="setting-company-email" placeholder="Company Email" type="text">
								</div>
								<div class="field">
									<label>Company Phone</label>
									<input id="setting-company-phone" placeholder="Company Phone.." type="text">
								</div>
							</div>
							<div class="field">
								<label>Company Address</label>
								<input id="setting-company-address" placeholder="Company Address.." type="text">
							</div>
						</div>

						<h4 class="ui dividing header">General Settings</h4>
						<div class="field">
							<div class="three fields">
								<div class="field">
									<label>Facebook URL</label>
									<input id="setting-facebook-url" placeholder="Company Email" type="text">
								</div>
								<div class="field">
									<label>Twitter URL</label>
									<input id="setting-twitter-url" placeholder="Company Email 2" type="text">
								</div>
								<div class="field">
									<label>Instagram URL</label>
									<input id="setting-instagram-url" placeholder="Company Phone 2.." type="text">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui bottom attached message text-right setting-header">
					<div class="ui buttons">
						<button id="form-back" class="ui left attached button form-button">Back</button>
						<button id="form-submit" class="ui right attached button form-button">Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>