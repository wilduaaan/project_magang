<?php $title = "<i class='fa fa-cog'></i>&nbsp;Settings"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
	<img src='<?php echo base_url(); ?>assetsadmin/img/loader-dark.gif' />
</div>
<div id="data" style="display:none;">
	<section class="content">
		<div class="page-header">
			<h1>
				<?php echo $title; ?>
			</h1>
		</div><!-- /.page-header -->
		<style type="text/css">
			#loader-upload {
				display: none
			}
		</style>
		<div id="form-update">
			<div class="tabbable">
				<ul class="nav nav-tabs" id="formAksi">
					<li class="active">
						<a data-toggle="tab" href="#link">
							<i class="green ace-icon fa fa-rss bigger-120"></i>
							Meta Beranda
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#link2">
							<i class="green ace-icon fa fa-rss bigger-120"></i>
							Meta Produk
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#link3">
							<i class="green ace-icon fa fa-rss bigger-120"></i>
							Meta Galeri
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#link4">
							<i class="green ace-icon fa fa-rss bigger-120"></i>
							Meta Kontak
						</a>
					</li>

				</ul>

				<div class="tab-content">

					<div id="link" class="tab-pane fade in active">
						<form id="formAksi2" class="form-horizontal" role="form" action="#" method="POST">

							<input type="hidden" name="id_meta_beranda">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Title </label>
								<div class="col-sm-10">
									<input type="text" id="title" name="title_beranda" placeholder="Title" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Keyword </label>
								<div class="col-sm-10">
									<input type="text" id="meta_keyword" name="keyword_beranda" placeholder="Meta Keyword" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Description </label>
								<div class="col-sm-10">
									<input type="text" id="meta_description" name="deskripsi_beranda" placeholder="Meta Description" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link Canonical </label>
								<div class="col-sm-10">
									<input type="text" id="link_canonical" name="link_beranda" placeholder="Link Canonical" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-2 col-md-9">
									<button class="btn btn-info" type="submit" id="btn_save2">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Update
									</button>
								</div>
							</div>

						</form>
					</div>

					<div id="link2" class="tab-pane fade ">
						<form id="formAksi3" class="form-horizontal" role="form" action="#" method="POST">

							<input type="hidden" name="id_meta_produk">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Title</label>
								<div class="col-sm-10">
									<input type="text" id="title" name="title_produk" placeholder="Title" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Keyword </label>
								<div class="col-sm-10">
									<input type="text" id="meta_keyword" name="keyword_produk" placeholder="Meta Keyword" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Description </label>
								<div class="col-sm-10">
									<input type="text" id="meta_description" name="deskripsi_produk" placeholder="Meta Description" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link Canonical </label>
								<div class="col-sm-10">
									<input type="text" id="link_canonical" name="link_produk" placeholder="Link Canonical" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-2 col-md-9">
									<button class="btn btn-info" type="submit" id="btn_save2">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Update
									</button>
								</div>
							</div>

						</form>
					</div>

					<div id="link3" class="tab-pane fade ">
						<form id="formAksi4" class="form-horizontal" role="form" action="#" method="POST">

							<input type="hidden" name="id_meta_galeri">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Title </label>
								<div class="col-sm-10">
									<input type="text" id="title" name="title_galeri" placeholder="Title" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Keyword </label>
								<div class="col-sm-10">
									<input type="text" id="meta_keyword" name="keyword_galeri" placeholder="Meta Keyword" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Description </label>
								<div class="col-sm-10">
									<input type="text" id="meta_description" name="deskripsi_galeri" placeholder="Meta Description" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link Canonical </label>
								<div class="col-sm-10">
									<input type="text" id="link_canonical" name="link_galeri" placeholder="Link Canonical" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-2 col-md-9">
									<button class="btn btn-info" type="submit" id="btn_save2">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Update
									</button>
								</div>
							</div>

						</form>
					</div>


					<div id="link4" class="tab-pane fade">
						<form id="formAksi5" class="form-horizontal" role="form" action="#" method="POST">

							<input type="hidden" name="id_meta_kontak">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Title </label>
								<div class="col-sm-10">
									<input type="text" id="title" name="title_kontak" placeholder="Title" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Keyword </label>
								<div class="col-sm-10">
									<input type="text" id="meta_keyword" name="keyword_kontak" placeholder="Meta Keyword" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meta Description </label>
								<div class="col-sm-10">
									<input type="text" id="meta_description" name="deskripsi_kontak" placeholder="Meta Description" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link Canonical </label>
								<div class="col-sm-10">
									<input type="text" id="link_canonical" name="link_kontak" placeholder="Link Canonical" class="col-xs-10 col-sm-5" />
									<span class="help-block"></span>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-2 col-md-9">
									<button class="btn btn-info" type="submit" id="btn_save2">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Update
									</button>
								</div>
							</div>

						</form>
					</div>


				</div>
			</div>
		</div>

		<script>
			var zonk = '';
			var save_method;
			var link = "<?php echo site_url('Setting_title') ?>";

			$(document).ready(function() {
				ubah();
				ubah2();
				ubah3();
				ubah4();
				//ubah5();
			});

			function data() {
				$('#data').fadeIn();
			}

			$(document).ready(function() {
				//$('#idImgLoader').show(2000);
				$('#idImgLoader').fadeOut(2000);
				setTimeout(function() {
					data();
				}, 2000);
			});

			function ubah() {


				link_edit = "ajax_edit_meta_beranda";

				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/" + link_edit + "/",
					type: "GET",
					dataType: "JSON",
					success: function(result) {
						$("input[name='id_meta_beranda']").val(result.set_data1);
						$("input[name='title_beranda']").val(result.set_data2);
						$("input[name='keyword_beranda']").val(result.set_data3);
						$("input[name='deskripsi_beranda']").val(result.set_data4);
						$("input[name='link_beranda']").val(result.set_data5);

					},
					error: function(jqXHR, textStatus, errorThrown) {
						alert('Error get data from ajax');
					}
				});


			}


			function ubah2() {


				link_edit = "ajax_edit_meta_produk";

				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/" + link_edit + "/",
					type: "GET",
					dataType: "JSON",
					success: function(result) {
						$("input[name='id_meta_produk']").val(result.set_data1);
						$("input[name='title_produk']").val(result.set_data2);
						$("input[name='keyword_produk']").val(result.set_data3);
						$("input[name='deskripsi_produk']").val(result.set_data4);
						$("input[name='link_produk']").val(result.set_data5);

					},
					error: function(jqXHR, textStatus, errorThrown) {
						alert('Error get data from ajax');
					}
				});


			}


			function ubah3() {


				link_edit = "ajax_edit_meta_galeri";

				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/" + link_edit + "/",
					type: "GET",
					dataType: "JSON",
					success: function(result) {
						$("input[name='id_meta_galeri']").val(result.set_data1);
						$("input[name='title_galeri']").val(result.set_data2);
						$("input[name='keyword_galeri']").val(result.set_data3);
						$("input[name='deskripsi_galeri']").val(result.set_data4);
						$("input[name='link_galeri']").val(result.set_data5);

					},
					error: function(jqXHR, textStatus, errorThrown) {
						alert('Error get data from ajax');
					}
				});


			}


			function ubah4() {


				link_edit = "ajax_edit_meta_kontak";

				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/" + link_edit + "/",
					type: "GET",
					dataType: "JSON",
					success: function(result) {
						$("input[name='id_meta_kontak']").val(result.set_data1);
						$("input[name='title_kontak']").val(result.set_data2);
						$("input[name='keyword_kontak']").val(result.set_data3);
						$("input[name='deskripsi_kontak']").val(result.set_data4);
						$("input[name='link_kontak']").val(result.set_data5);

					},
					error: function(jqXHR, textStatus, errorThrown) {
						alert('Error get data from ajax');
					}
				});


			}




			$(document).on('submit', '#formAksi2', function(e) {
				// tinyMCE.triggerSavesz
				e.preventDefault();
				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/update_title1/",
					type: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						swal_berhasil();
						ubah();
						//$('#a7').val();
						setTimeout(function() {
							$('#btn_save2').text('Update Berhasil');
							$('#btn_save2').attr('disabled', false);
							//document.getElementById('formAksi').reset();
						}, 1000);

					}
				});
				return false;
			});

			$(document).on('submit', '#formAksi3', function(e) {
				// tinyMCE.triggerSavesz
				e.preventDefault();
				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/update_title2/",
					type: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						swal_berhasil();
						ubah();
						//$('#a7').val();
						setTimeout(function() {
							$('#btn_save2').text('Update Berhasil');
							$('#btn_save2').attr('disabled', false);
							//document.getElementById('formAksi').reset();
						}, 1000);

					}
				});
				return false;
			});

			$(document).on('submit', '#formAksi4', function(e) {
				// tinyMCE.triggerSavesz
				e.preventDefault();
				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/update_title3/",
					type: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						swal_berhasil();
						ubah();
						//$('#a7').val();
						setTimeout(function() {
							$('#btn_save2').text('Update Berhasil');
							$('#btn_save2').attr('disabled', false);
							//document.getElementById('formAksi').reset();
						}, 1000);

					}
				});
				return false;
			});


			$(document).on('submit', '#formAksi5', function(e) {
				// tinyMCE.triggerSavesz
				e.preventDefault();
				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/update_title4/",
					type: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						swal_berhasil();
						ubah();
						//$('#a7').val();
						setTimeout(function() {
							$('#btn_save2').text('Update Berhasil');
							$('#btn_save2').attr('disabled', false);
							//document.getElementById('formAksi').reset();
						}, 1000);

					}
				});
				return false;
			});
			$(document).on('submit', '#formAksi6', function(e) {
				// tinyMCE.triggerSavesz
				e.preventDefault();
				$.ajax({
					url: "<?php echo site_url('Setting_title') ?>/update_title5/",
					type: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						swal_berhasil();
						ubah();
						//$('#a7').val();
						setTimeout(function() {
							$('#btn_save2').text('Update Berhasil');
							$('#btn_save2').attr('disabled', false);
							//document.getElementById('formAksi').reset();
						}, 1000);

					}
				});
				return false;
			});
		</script>