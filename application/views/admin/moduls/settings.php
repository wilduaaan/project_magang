<?php $title = "<i class='fa fa-cog'></i>&nbsp;Settings"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
	<img src='<?php echo base_url();?>assetsadmin/img/loader-dark.gif' />
</div>
<div id="data" style="display:none;">
<section class="content">
<div class="page-header">
	<h1>
		<?php echo $title;?>
	</h1>
</div><!-- /.page-header -->
<style type="text/css"> #loader-upload{display: none}</style>
<div id="form-update" >
<div class="tabbable">
	<ul class="nav nav-tabs" id="formAksi">
		<li class="active">
			<a data-toggle="tab" href="#link">
			<i class="green ace-icon fa fa-rss bigger-120"></i>
				Link
			</a>
		</li>

		<li>
			<a data-toggle="tab" href="#header">
			<i class="green ace-icon fa fa-file-image-o bigger-120"></i>
				Header
			</a>
		</li>

		<li>
			<a data-toggle="tab" href="#logo">
			<i class="green ace-icon fa fa-home bigger-120"></i>
				Logo
			</a>
		</li>
											
	</ul>

	<div class="tab-content">

	<div id="link" class="tab-pane fade in active">
	<form action="#" id="form-link" name="form-link" class="form-horizontal" enctype="multipart/form-data">
		 <div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Facebook </label>
			<div class="col-sm-10">
				<input type="text" id="link_setting" name="link_setting" placeholder="Facebook" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Instagram </label>
			<div class="col-sm-10">
				<input type="text" id="link_setting" name="link_setting" placeholder="Instagram" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Twitter </label>
			<div class="col-sm-10">
				<input type="text" id="link_setting" name="link_setting" placeholder="Twitter" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Youtube </label>
			<div class="col-sm-10">
				<input type="text" id="link_setting" name="link_setting" placeholder="Youtube" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Google+ </label>
			<div class="col-sm-10">
				<input type="text" id="link_setting" name="link_setting" placeholder="Google+" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>
	
		<div class="form-group">
			<div class="col-md-offset-2 col-md-9">
				<button type="button" value="Add" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" onclick="Batal2()">Cancel</button>
			</div>
		</div>
		
	</form>
	</div>

	<div id="header" class="tab-pane fade">
	<form id="form-upload" class="form-horizontal" role="form" action="<?=site_url('Settings/upload')?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id_setting"/> 
		<div class="form-body">
			<div class="form-group" >
				<p style="padding-left: 100px">Header Tentang</p>
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload" id="file-upload">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Preview</label>
					<div class="input-group col-md-9">
						<img id="loader-upload" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
		</div>
	</form>	
	<!-- <div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Gambar1 </label>
		<div class="col-sm-10">
			<input type="file" name="userfile1" id="userfile1" required>
			<span class="help-block"></span>
			<img id="loader1" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
			<img id="preview1" src="#" style="height: 100px;border: 1px solid #DDC; " />
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Gambar2 </label>
		<div class="col-sm-10">
			<input type="file" name="userfile2" id="userfile2" required>
			<span class="help-block"></span>
			<img id="loader2" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
			<img id="preview2" src="#" style="height: 100px;border: 1px solid #DDC; " />
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-3"> Gambar3 </label>
		<div class="col-sm-10">
			<input type="file" name="userfile3" id="userfile3" required>
			<span class="help-block"></span>
			<img id="loader3" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
			<img id="preview3" src="#" style="height: 100px;border: 1px solid #DDC; " />
		</div>
	</div> -->

	<form id="form-upload" class="form-horizontal" role="form" action="<?= site_url('Produk/upload')?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id_setting"/> 
		<div class="form-body">
			<div class="form-group" >
				<p style="padding-left: 100px">Header Produk</p>
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload" id="file-upload">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Preview</label>
					<div class="input-group col-md-9">
						<img id="loader-upload" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
		</div>
	</form>

	<form id="form-upload" class="form-horizontal" role="form" action="<?= site_url('Gallery/upload')?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id_setting"/> 
		<div class="form-body">
			<div class="form-group" >
				<p style="padding-left: 100px">Header Foto</p>
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload" id="file-upload">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Preview</label>
					<div class="input-group col-md-9">
						<img id="loader-upload" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
		</div>
	</form>

	<form id="form-upload" class="form-horizontal" role="form" action="<?= site_url('Kontak/upload')?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id_setting"/> 
		<div class="form-body">
			<div class="form-group" >
				<p style="padding-left: 100px">Header Kontak</p>
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload" id="file-upload">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Preview</label>
					<div class="input-group col-md-9">
						<img id="loader-upload" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
		</div>
	</form>
	</div>

	<!-- untuk bagian menu mengganti logonya semuanya-->
	<div id="logo" class="tab-pane fade"><!-- 
	<form action="#" id="form-logo" name="form-logo" class="form-horizontal" enctype="multipart/form-data"> -->
	<form id="form-logo" name="form-logo" class="form-horizontal" role="form" action="<?= site_url('Settings/upload')?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id_setting" value="9" />
		<input type="hidden" name="nama_setting"/> 
		 
		<div class="form-body">
			<div class="form-group" >
			<p style="padding-left: 100px">Logo </p>
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-uploadl" id="file-upload">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Preview</label>
					<div class="input-group col-md-9">
						<img id="loader-upload" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
		</div>
	</form>
	<!-- <form action="#" id="form-logo" name="form-logo" class="form-horizontal" enctype="multipart/form-data">
		<input type="hidden" name="id_setting"/> 
		<div class="form-body">
			<div class="form-group" >
				<p style="padding-left: 100px">Logo Produk</p>
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload" id="file-upload">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Preview</label>
					<div class="input-group col-md-9">
						<img id="loader-upload" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
		</div>

	</form>
	<form action="#" id="form-logo" name="form-logo" class="form-horizontal" enctype="multipart/form-data">
		<input type="hidden" name="id_setting"/> 
		<div class="form-body">
			<div class="form-group" >
				<p style="padding-left: 100px">Logo Foto</p>
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload" id="file-upload">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Preview</label>
					<div class="input-group col-md-9">
						<img id="loader-upload" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
		</div>

	</form> -->

	</div>

	</div>
</div>
</div>

<script>
	var zonk='';
	var save_method;
	var link = "<?php echo site_url('Settings')?>";
	
	$(document).ready(function(){
		update();
    });
	
	function data(){
		$('#data').fadeIn();
	}
	
	$(document).ready(function(){
	$('#form-logo').submit(function(e) {
		//tinyMCE.triggerSave();
		e.preventDefault(); var formData = new FormData($(this)[0]);
		$.ajax({
			url: $(this).attr("action"), type: 'POST', dataType: 'json', data: formData, async: true,
			beforeSend: function() { $('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true); },
			success: function(response) {
				if(response.status) { swal_berhasil(); update();
				} else { Batal(); reload_table(); swal_error(response.error); }
			},
			complete: function() { $('#btnSave').text('save'); $('#btnSave').attr('disabled',false); },
			cache: false, contentType: false, processData: false
		});
		return false;
	});
	
	function readURL(input) {
		$("#preview").show();
		if (input.files && input.files[0]) {
			var rd = new FileReader(); 
			rd.onload = function (e) { $('#preview').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
		}
	}
	$("#userfile").change(function(){ readURL(this); });

	});
	
	$(document).ready(function(){
		$('#form-upload').submit(function(e) {
			//tinyMCE.triggerSave();
			e.preventDefault(); var formData = new FormData($(this)[0]);
			$.ajax({
				url: $(this).attr("action"), type: 'POST', dataType: 'json', data: formData, async: true,
				beforeSend: function() { $('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true); },
				success: function(response) {
					if(response.status) { swal_berhasil(); update();
					} else { reload_table(); swal_error(response.error); }
				},
				complete: function() { $('#btnSave').text('save'); $('#btnSave').attr('disabled',false); },
				cache: false, contentType: false, processData: false
			});
		});


		function readURL(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload").change(function(){ readURL(this); });
	});
		$(document).ready(function(){
		$('#form-upload1').submit(function(e) {
			//tinyMCE.triggerSave();
			e.preventDefault(); var formData = new FormData($(this)[0]);
			$.ajax({
				url: $(this).attr("action"), type: 'POST', dataType: 'json', data: formData, async: true,
				beforeSend: function() { $('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true); },
				success: function(response) {
					if(response.status) { swal_berhasil(); update();
					} else { reload_table(); swal_error(response.error); }
				},
				complete: function() { $('#btnSave').text('save'); $('#btnSave').attr('disabled',false); },
				cache: false, contentType: false, processData: false
			});
		});
		

		function readURL(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload").change(function(){ readURL(this); });
	});

	function save() {
		var url;
		url = "<?= site_url()?>Settings/update/";
		$('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true);
		//tinyMCE.triggerSave();
		$.ajax({
			url : url, type: "POST", dataType: "JSON", data: $('#form-link').serialize(),
			success: function(data) {
				if(data.status) { swal_berhasil(); update();
				} else {
					for (var i = 0; i < data.inputerror.length; i++) {
						$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
						$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); 
					}
				}
				$('#btnSave').text('save'); $('#btnSave').attr('disabled',false); 
			},
			error: function (jqXHR, textStatus, errorThrown) {
				swal({ title:"ERROR", text:"Error adding / update data", type: "warning", closeOnConfirm: true}); 
				$('#btnSave').text('save'); $('#btnSave').attr('disabled',false);  
			}
		});
	}
	
	$(document).ready(function(){
      //$('#idImgLoader').show(2000);
	  $('#idImgLoader').fadeOut(2000);
	  setTimeout(function(){
            data();
      }, 2000);
    });
	
	function update() {
			var row = '';
			//save_method = 'update';
			$('#panel-data').fadeOut('slow');
			$('#form-update').fadeIn('slow');
			//document.getElementById('formAksi').reset();
			$.ajax({
				url : link+"/ajax_list/",
				type: "GET",
				dataType: "JSON",
				success: function(result) {
					for(x = 0; x < result.length; x++) {
						row += '<div class="form-group">' +
							'<label class="col-sm-2 control-label no-padding-right" for="form-field-1">'+result[x].nama_setting+'</label>'+
								'<div class="col-sm-10">'+
									'<input type="hidden" id="id_'+result[x].id_setting+'" value="'+result[x].id_setting+'"/>'+
									'<input type="text" id="link_'+result[x].link_setting+'" name="link_'+result[x].nama_setting+'" placeholder="'+result[x].link_setting+'" class="col-xs-10 col-sm-5" value="'+result[x].setting_source+'"/>'+
									'<span class="help-block"></span>'+
								'</div>'+
						'</div>';
					}
					$('#form-link-link').html(row);

				}, error: function (jqXHR, textStatus, errorThrown) {
					alert('Error get data from ajax'+jqXHR+errorThrown);
				}
			});
	}
		
</script>	



