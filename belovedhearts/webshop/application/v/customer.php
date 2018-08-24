	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			reset();
			init();
			customerKeypress();
			customerClick();
			onChange();
			changeStatusCustomer();
		});

		var filterQuery = '<?= $filter; ?>';

		function changeFilter(f) {
			filterQuery = f;
		}

		function addCustomer() {
			var customerName = $('#customer-name-add').val();
			var customerPhone = $('#customer-phone-add').val();
			var customerEmail = $('#customer-email-add').val();
			var found = 0;

			$.each($('.data-important-add'), function(key, data) {
				if ($(data).val() == '') {
					found += 1;

					$('.color-red.warning').html('This Field Must Be Filled');
				}
			});

			if (found > 0) {
				return;
			}

			$('.add-customer-modal').modal('hide');
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					name: customerName,
					phone: customerPhone,
					email: customerEmail,
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
						$('.ui.text.loader').html('Redirecting...');

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.color-red.warning').html(data.message);

						$('.add-customer-modal').modal({
							inverted: true,
						}).modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>customer/ajax_add/',
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

		function changeStatusCustomer() {
			$('.change-status').click(function() {
				var status = $(this).attr('data-customer-status-update');
				var customerId = $(this).attr('data-customer-id');
				var updated = $(this).attr('data-customer-updated');

				/* change status */
				$('.ui.text.loader').html('Connecting to Database...');
				$('.ui.dimmer.all-loader').dimmer('show');

				$.ajax({
					data :{
						status: status,
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
							$('.ui.text.loader').html('Redirecting...');

							window.location.reload();
						}
						else {
							$('.ui.dimmer.all-loader').dimmer('hide');
							$('.ui.basic.modal.all-error').modal('show');
							$('.all-error-text').html(data.message);
						}
					},
					type : 'POST',
					url : '<?= base_url() ?>customer/ajax_change_status/'+ customerId +'/',
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
			});
		}

		function deleteCustomer() {
			var customerId = $('.delete-customer-button').attr('data-customer-id');
			var customerUpdated = $('.delete-customer-button').attr('data-customer-updated');

			$('.ui.basic.modal.modal-warning-delete').modal('hide');
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					updated: customerUpdated,
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
						$('.ui.text.loader').html('Redirecting...');

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>customer/ajax_delete/'+ customerId +'/',
				xhr: function() {
					var percentage = 0;
					var xhr = new window.XMLHttpRequest();

					xhr.upload.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Validating Data..');
					}, false);

					xhr.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Delete Data from Database...');
					}, false);

					return xhr;
				},
			});
		}

		function editCustomer() {
			var customerName = $('#customer-name-edit').val();
			var customerPhone = $('#customer-phone-edit').val();
			var customerEmail = $('#customer-email-edit').val();

			var customerId = $('#customer-name-edit').data('customer_id');
			var customerUpdated = $('#customer-name-edit').data('updated');
			var found = 0;

			$.each($('.data-important-edit'), function(key, data) {
				if ($(data).val() == '') {
					found += 1;

					$('.color-red.warning').html('This Field Must Be Filled');
				}
			});

			if (found > 0) {
				return;
			}

			$('.edit-customer-modal').modal('hide');
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					name: customerName,
					phone: customerPhone,
					email: customerEmail,
					updated: customerUpdated,
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
						$('.ui.text.loader').html('Redirecting...');

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.color-red.warning').html(data.message);

						$('.edit-customer-modal').modal({
							inverted: true,
						}).modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>customer/ajax_edit/'+ customerId +'/',
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

		function filter(page) {
			var searchQuery = ($('.input-search').val() == '') ? '' : $.base64('encode', $('.input-search').val());

			window.location.href = '<?= base_url(); ?>customer/view/'+ page +'/'+ filterQuery +'/'+ searchQuery +'/';
		}

		function getCustomer(customerId) {
			$('.ui.text.loader').html('Connecting to Database...');

			$.ajax({
				data :{
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
						$('#customer-name-edit').val(data.customer.name);
						$('#customer-phone-edit').val(data.customer.phone);
						$('#customer-email-edit').val(data.customer.email);

						$('#customer-name-edit').data('customer_id', customerId);
						$('#customer-name-edit').data('updated', data.customer.updated);

						$('.edit-customer-modal').modal({
							inverted: false,
						}).modal('show');
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.color-red.warning').html(data.message);

						$('.add-customer-modal').modal({
							inverted: true,
						}).modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>customer/ajax_get/'+ customerId +'/',
				xhr: function() {
					var percentage = 0;
					var xhr = new window.XMLHttpRequest();

					xhr.upload.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Checking Data..');
					}, false);

					xhr.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Retrieving Data...');
					}, false);

					return xhr;
				},
			});
		}

		function init() {
			$('.dropdown-search, .dropdown-filter').dropdown({
				allowAdditions: true
			});

			$('.ui.search.dropdown.form-input').dropdown('clear');

			$('table').tablesort();
		}

		function onChange() {
			$('#customer-image-add').change(function() {
				var file_data = $('#customer-image-add').prop('files')[0];
				var form_data = new FormData();
				form_data.append('file', file_data);
				form_data.append("<?= $csrf['name'] ?>", "<?= $csrf['hash'] ?>");

				$.ajax({
					cache: false,
					contentType: false,
					data: form_data,
					dataType: 'JSON',
					error: function() {
						alert('Server Error.');
					},
					processData: false,
					type: 'post',
					success: function(data) {
						if (data.status == 'success') {
							$('#customer-image-add').data('image_id', data.image_id);

							alert('Image Uploaded');
						}
						else {
							alert(data.message);
						}
					},
					url: '<?= base_url(); ?>image/ajax_upload_all/',
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
					}
				});
			});

			$('#customer-image-edit').change(function() {
				var file_data = $('#customer-image-edit').prop('files')[0];
				var form_data = new FormData();
				form_data.append('file', file_data);
				form_data.append("<?= $csrf['name'] ?>", "<?= $csrf['hash'] ?>");

				$.ajax({
					cache: false,
					contentType: false,
					data: form_data,
					dataType: 'JSON',
					error: function() {
						alert('Server Error.');
					},
					processData: false,
					type: 'post',
					success: function(data) {
						if (data.status == 'success') {
							$('#customer-image-edit').data('image_id', data.image_id);

							alert('Image Uploaded');
						}
						else {
							alert(data.message);
						}
					},
					url: '<?= base_url(); ?>image/ajax_upload_all/',
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
					}
				});
			});
		}

		function reset() {
			$('.input-search').val("<?= $query; ?>");
			$('#input-page').val("<?= $page; ?>");

			$('#customer-name-add').val("");
			$('#customer-capacity-add').val("0");
		}

		function customerClick() {
			$('.button-prev').click(function() {
				var page = parseInt('<?= $page; ?>');

				page = page - 1 ;

				if (page <= 0) {
					return;
				}

				filter(page);
			});

			$('.button-next').click(function() {
				var page = parseInt('<?= $page; ?>');
				var maxPage = parseInt('<?= $count_page; ?>');

				page = page + 1 ;

				if (page > maxPage) {
					return;
				}

				filter(page);
			});

			$('.item-add-button').click(function() {
				$('#customer-name-add').val("");
				$('#customer-capacity-add').val("0");
				$('.color-red.warning').html("");

				$('.add-customer-modal').modal({
					inverted: false,
				}).modal('show');
			});

			$('.open-modal-warning-delete').click(function() {
				var customerId = $(this).attr('data-customer-id');
				var customerName = $(this).attr('data-customer-name');
				var customerUpdated = $(this).attr('data-customer-updated');

				$('.delete-customer-title').html('Delete customer ' + customerName);
				$('.delete-customer-button').attr('data-customer-id', customerId);
				$('.delete-customer-button').attr('data-customer-updated', customerUpdated);

				$('.ui.basic.modal.modal-warning-delete').modal('show');
			});
		}

		function customerKeypress() {
			$('.input-search').keypress(function(e) {
				if (e.which == 13) {
					var page = 1;

					filter(page);
				}
			});

			$('#input-page').keypress(function(e) {
				if (e.which == 13) {
					var page = $('#input-page').val();

					filter(page);
				}
			});
		}
	</script>

	<!-- Dashboard Here -->
	<div class="ui basic modal modal-warning-delete">
		<div class="ui icon header">
			<i class="trash outline icon delete-icon"></i>
			<span class="delete-customer-title">Delete Customer</span>
		</div>
		<div class="content text-center">
			<p>You're about to delete this Customer. You will not be able to undo this action. Are you sure?</p>
		</div>
		<div class="actions">
			<div class="ui red basic cancel inverted button">
				<i class="remove icon"></i>
				No
			</div>
			<div class="ui green ok inverted button delete-customer-button" onclick="deleteCustomer();">
				<i class="checkmark icon"></i>
				Yes
			</div>
		</div>
	</div>

	<div class="ui modal add-customer-modal">
		<i class="close icon"></i>
		<div class="header">Add Customer</div>
		<div class="form-content content">
			<div class="form-add">
				<div class="form-content">
					<div class="ui form">
						<div class="field">
							<label>Name <span class="color-red warning"></span></label>
							<input id="customer-name-add" type="text" class="data-important-add" placeholder="Name..">
						</div>
						<div class="two fields">
							<div class="field">
								<label>Phone <span class="color-red warning"></span></label>
								<input id="customer-phone-add" type="text" class="data-important-add" placeholder="Phone..">
							</div>
							<div class="field">
								<label>Email <span class="color-red warning"></span></label>
								<input id="customer-email-add" type="text" class="data-important-add" placeholder="Email..">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="actions text-right">
				<div class="ui deny button form-button">Exit</div>
				<div class="ui button form-button" onclick="addCustomer();">Submit</div>
			</div>
		</div>
	</div>

	<div class="ui modal edit-customer-modal">
		<i class="close icon"></i>
		<div class="header">Edit Customer</div>
		<div class="form-content content">
			<div class="form-add">
				<div class="form-content">
					<div class="ui form">
						<div class="field">
							<label>Name <span class="color-red warning"></span></label>
							<input id="customer-name-edit" class="data-important-edit" placeholder="Name..">
						</div>

						<div class="two fields">
							<div class="field">
								<label>Phone <span class="color-red warning"></span></label>
								<input id="customer-phone-edit" class="data-important-edit" placeholder="Phone..">
							</div>
							<div class="field">
								<label>Email <span class="color-red warning"></span></label>
								<input id="customer-email-edit" class="data-important-edit" placeholder="Email..">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="actions text-right">
				<div class="ui deny button form-button">Exit</div>
				<div class="ui button form-button" onclick="editCustomer();">Submit</div>
			</div>
		</div>
	</div>

	<div class="main-content">
		<div class="ui top attached menu table-menu">
			<div class="item">
				Data - Customer Lists
			</div>
			<div class="right menu">
				<? if (isset($acl['customer']) && $acl['customer']->add > 0): ?>
					<a class="item item-add-button">
						<i class="add circle icon"></i> Add Customer
					</a>
				<? endif; ?>

				<div class="item">
					<div class="ui dropdown dropdown-filter">
						<div class="text"><?= ucwords($filter); ?></div>
						<i class="dropdown icon"></i>
						<div class="menu">
							<div class="item" onclick="changeFilter('all');">All</div>
						</div>
					</div>
				</div>
				<div class="ui right aligned category search item search-item-container">
					<div class="ui transparent icon input">
						<input class="input-search" placeholder="Search..." type="text">
						<i class="search link icon"></i>
					</div>
					<div class="results"></div>
				</div>
			</div>
		</div>
		<div class="ui bottom attached segment table-segment">
			<table class="ui striped selectable sortable celled table">
				<thead>
					<tr>
						<th class="td-icon">Action</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<? if (count($arr_customer) <= 0): ?>
						<tr>
							<td colspan="5">No Result Founds</td>
						</tr>
					<? else: ?>
						<? foreach ($arr_customer as $customer): ?>
							<tr>
								<td class="td-icon">
									<a class="change-status" data-customer-id="<?= $customer->id; ?>" data-customer-status-update="<? if ($customer->status == 'Active'): ?>Void<? else: ?>Active<? endif; ?>" data-customer-updated="<?= $customer->updated; ?>">
										<span class="table-icon" data-content="Change Status">
											<i class="edit icon"></i>
										</span>
									</a>
								</td>
								<td><?= $customer->name; ?></td>
								<td><?= $customer->phone; ?></td>
								<td><?= $customer->email; ?></td>
								<td><?= $customer->status; ?></td>
							</tr>
						<? endforeach; ?>
					<? endif; ?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="5">
							<button class="ui button button-prev">Prev</button>
							<span>
								<div class="ui input input-page">
									<input id="input-page" placeholder="" type="text">
								</div> / <?= $count_page; ?>
							</span>
							<button class="ui button button-next">Next</button>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</body>
</html>