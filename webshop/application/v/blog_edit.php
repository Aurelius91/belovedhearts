	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			click();
			init();
			reset();
			change();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>blog/view/1/';
		}

		function change() {
			$('#main-image').change(function() {
				var file_data = $('#main-image').prop('files')[0];
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
							$('.preview').remove();

							var image = '<img class="preview" style="width: 100%;" src="<?= base_url(); ?>images/website/'+ data.image_id +'.'+ data.ext +'">';
							$('#preview').append(image);
                            $('#preview').data('image_id', data.image_id);
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

		function click() {
			$('#form-back').click(function() {
				back();
			});

			$('#form-submit').click(function() {
				submit();
			});

			$('.form-input').click(function() {
				$(this).removeClass('input-error');
			});
		}

		function init() {
			tinymce.init({
				selector: 'textarea#blog-content',
				height: 300,
				width: '100%',
				plugins: ["advlist autolink lists link charmap preview", "searchreplace visualblocks code", "table contextmenu paste"],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
				paste_as_text: true
			});

			$('.ui.search.dropdown.form-input').dropdown('clear');
		}

		function reset() {
			$('#blog-name').val("<?= $blog->name; ?>");
			$('#blog-subtitle').val("<?= $blog->subtitle; ?>");
			$('#blog-author').val("<?= $blog->author; ?>");
			$('#blog-youtube-url').val("<?= $blog->youtube_url; ?>");

			$('#blog-metatag-title').val("<?= $blog->metatag_title; ?>");
			$('#blog-metatag-author').val("<?= $blog->metatag_author; ?>");
			$('#blog-metatag-keywords').val("<?= $blog->metatag_keywords; ?>");
			$('#blog-metatag-description').val("<?= $blog->metatag_description; ?>");

			$('#main-image').val("");
			$('#preview').data('image_id', 0);

			$('.preview').remove();

			var image = '<img class="preview" style="width: 100%;" src="<?= base_url(); ?>images/website/<?= $blog->image_name; ?>">';
			$('#preview').append(image);
		}

		function submit() {
			var blogName = $('#blog-name').val();
			var blogSubtitle = $('#blog-subtitle').val();
			var blogAuthor = $('#blog-author').val();
			var blogContent = tinyMCE.get('blog-content').getContent();
			var blogYoutubeUrl = $('#blog-youtube-url').val();

			var blogMetatagTitle = $('#blog-metatag-title').val();
			var blogMetatagAuthor = $('#blog-metatag-author').val();
			var blogMetatagKeywords = $('#blog-metatag-keywords').val();
			var blogMetatagDescription = $('#blog-metatag-description').val();

			var imageId = $('#preview').data('image_id');

			var found = 0;

			$.each($('.data-important'), function(key, data) {
				if ($(data).val() == '' || $(data).val() <= 0) {
					found += 1;

					$(data).addClass('input-error');
				}
			});

			if (found > 0) {
				return;
			}

			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					name: blogName,
					subtitle: blogSubtitle,
					author: blogAuthor,
					content: blogContent,
					youtube_url: blogYoutubeUrl,
					metatag_title: blogMetatagTitle,
					metatag_author: blogMetatagAuthor,
					metatag_keywords: blogMetatagKeywords,
					metatag_description: blogMetatagDescription,
					image_id: imageId,
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

						back();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>blog/ajax_edit/<?= $blog->id; ?>/',
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
					<div class="header">Edit Blog</div>
				</div>
				<div class="form-content">
					<div class="ui form">
						<h4 class="ui dividing header">Blog - Details</h4>
						<div class="three fields">
							<div class="field">
								<label>Name <span class="color-red">*</span></label>
								<input id="blog-name" class="form-input data-important" placeholder="Name.." type="text">
							</div>
							<div class="field">
								<label>Subtitle <span class="color-red">*</span></label>
								<input id="blog-subtitle" class="form-input data-important" placeholder="Subtitle.." type="text">
							</div>
							<div class="field">
								<label>Author <span class="color-red">*</span></label>
								<input id="blog-author" class="form-input data-important" placeholder="Author.." type="text">
							</div>
						</div>
						<div class="field">
							<label>Content</label>
							<textarea id="blog-content" placeholder="Content.."><?= $blog->content; ?></textarea>
						</div>
						<div class="field">
							<label>Youtube Url</label>
							<input id="blog-youtube-url" class="form-input" placeholder="Youtube Url.." type="text">
						</div>

						<h4 class="ui dividing header">Product - SEO Meta Tag</h4>
						<div class="three fields">
							<div class="field">
								<label>Metatag Title</label>
								<input id="blog-metatag-title" class="form-input" placeholder="Metatag Title.." type="text">
							</div>
							<div class="field">
								<label>Metatag Author</label>
								<input id="blog-metatag-author" class="form-input" placeholder="Metatag Author.." type="text">
							</div>
							<div class="field">
								<label>Metatag Keywords</label>
								<input id="blog-metatag-keywords" class="form-input" placeholder="Metatag Keywords.." type="text">
							</div>
						</div>
						<div class="field">
							<label>Metatag Description</label>
							<input id="blog-metatag-description" class="form-input" placeholder="Metatag Description.." type="text">
						</div>

						<h4 class="ui dividing header">Upload Image</h4>
						<div class="three fields">
							<div class="field">
								<label>Upload Image <span class="color-red">*</span></label>
								<div>Recommended Size: 1920px x 960px</div>
								<div style="padding-bottom: 5px;">Max File Size: 500kb</div>
								<input id="main-image" class="form-input" placeholder="Upload Image.." type="File">
							</div>
						</div>

						<div class="three fields">
							<div class="field">
								<label>Preview Image </label>
								<div id="preview"></div>
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