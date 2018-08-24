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
			$('.ui.search.dropdown.form-input').dropdown('clear');
		}

		function reset() {
			$('#setting-default-password').val("<?= $setting->setting__website_default_registration_password; ?>");

			$('#setting-email-sent-to').val("<?= $setting->system_email_send_to; ?>");
			$('#setting-email-sent-cc').val("<?= $setting->system_email_send_cc; ?>");
		}

		function submit() {
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			var defaultPassword = $('#setting-default-password').val();
			var emailSentTo = $('#setting-email-sent-to').val();
			var emailSentCC = $('#setting-email-sent-cc').val();

			$.ajax({
				data :{
					system_email_send_to: emailSentTo,
					system_email_send_cc: emailSentCC,
					setting__website_default_registration_password: defaultPassword,
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
					<div class="header">System Settings</div>
				</div>
				<div class="form-content">
					<div class="ui form">
						<h4 class="ui dividing header">Default Password Submission</h4>
						<!-- General -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>Default Password</label>
									<input id="setting-default-password" class="form-input" placeholder="Default Password.." type="text">
								</div>
							</div>
						</div>

						<h4 class="ui dividing header">Enquiry Email Settings</h4>
						<!-- General -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>General Email Sent To</label>
									<input id="setting-email-sent-to" class="form-input" placeholder="General Email Sent To.." type="text">
								</div>
								<div class="field">
									<label>General Email Sent CC (separated by ';')</label>
									<input id="setting-email-sent-cc" class="form-input" placeholder="General Email Sent CC.." type="text">
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