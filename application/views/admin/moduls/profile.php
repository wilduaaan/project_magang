<?php $title = "<i class='fa fa-user'></i>&nbsp;Profile"; ?>
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
			<a data-toggle="tab" href="#profile">
			<i class="green ace-icon fa fa-book bigger-120"></i>
				Profile
			</a>
		</li>
					
		<li>
			<a data-toggle="tab" href="#ubahpassword">
			<i class="green ace-icon fa fa-lock bigger-120"></i>
				Ubah Password
			</a>
		</li>						
	</ul>

	<div class="tab-content">
	<div id="profile" class="tab-pane fade in active">
	<form action="<?= site_url()?>Profile/update/" id="form" name="form" class="form-horizontal" enctype="multipart/form-data"  method="POST">

		<input type="hidden" name="id_admin"/>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nama Lengkap </label>
			<div class="col-sm-10">
				<input type="text" id="admin_nama" name="admin_nama" placeholder="Nama Lengkap" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Username  </label>
			<div class="col-sm-10">
				<input type="text" id="admin_username" name="admin_username" placeholder="Nama Username" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nomor Telephone </label>
			<div class="col-sm-10">
				<input type="text" id="telephone" name="telephone" placeholder="Nomor Telephone" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>
		
		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email </label>
			<div class="col-sm-10">
				<input type="text" id="email" name="email" placeholder="Email" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat </label>
			<div class="col-sm-10">
				<input type="text" id="alamat" name="alamat" placeholder="Alamat" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-offset-2 col-md-9">
				<button type="submit" value="Add" id="btnSave"  class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" onclick="Batal2()">Cancel</button>
			</div>
		</div>
	</form>
	</div>

	<div id="ubahpassword" class="tab-pane fade">
	<form action="#" id="form-password" name="form-password" class="form-horizontal" enctype="multipart/form-data">
		<input type="hidden" name="id_admin"/>
		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Password Sekarang </label>
			<div class="col-sm-10">
				<input type="password" id="profile_password_sekarang" name="profile_password_sekarang" placeholder="Password Sekarang" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>
		
		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Password Baru </label>
			<div class="col-sm-10">
				<input type="password" id="profile_password_baru" name="profile_password_baru" placeholder="Password Baru" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Konfirmasi Password Baru </label>
			<div class="col-sm-10">
				<input type="password" id="profile_konfirmasi_password" name="profile_konfirmasi_password" placeholder="Konfirmasi password Baru" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-offset-2 col-md-9">
				<button type="button" value="Add" id="btnSaveP" onclick="save_p()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" onclick="Batal3()">Cancel</button>
			</div>
		</div>

	</form>
	</div>

	</div>
</div>
</div>

<script>
	var zonk='';
	var save_method;
	var link = "<?php echo site_url('Profile')?>";
	var table;
	
	$(document).ready(function(){
		update();
    });
	
	function data(){
		$('#data').fadeIn();
	}
	
	$(document).ready(function(){
	$('#form-add').submit(function(e) {
		tinyMCE.triggerSave();
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
			tinyMCE.triggerSave();
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
		url = "<?= site_url()?>Profile/update/";
		$('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true);
		//tinyMCE.triggerSave();
		$.ajax({
			url : url, type: "POST", dataType: "JSON", data: $('#form').serialize(),
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
	// Save Password
	function save_p() {
		var url;
		url = "<?= site_url()?>Profile/update_p/";
		//tinyMCE.triggerSave();
		if($('#profile_password_baru').val() == $('#profile_konfirmasi_password').val()) {
			$('#btnSaveP').text('saving...'); $('#btnSaveP').attr('disabled',true);
			$.ajax({
				url : url, type: "POST", dataType: "JSON", data: $('#form-password').serialize(),
				success: function(data) {
					if(data.status) { swal_berhasil(); update_p();
					} else {
						for (var i = 0; i < data.inputerror.length; i++) {
							$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
							$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); 
						}
					}
					$('#btnSaveP').text('save'); $('#btnSaveP').attr('disabled',false); 
				},
				error: function (jqXHR, textStatus, errorThrown) {
					swal({ title:"ERROR", text:"Error adding / update data", type: "warning", closeOnConfirm: true}); 
					$('#btnSaveP').text('save'); $('#btnSaveP').attr('disabled',false);  
				}
			});
		}
		else {
			alert('Password Tidak Sama. Coba Lagi.');
		}
	}
	
	$(document).ready(function(){
      //$('#idImgLoader').show(2000);
	  $('#idImgLoader').fadeOut(2000);
	  setTimeout(function(){
            data();
      }, 2000);
	  setTimeout(function(){
            //ckeditor();
      }, 2000);
    });
	
	function ckeditor(){
		
	}
	
	function update() {
			save_method = 'update';
			$('#panel-data').fadeOut('slow');
			$('#form-update').fadeIn('slow');
			//document.getElementById('formAksi').reset();

			$.ajax({

				url : link+"/ajax_edit/",
				type: "GET",
				dataType: "JSON",
				success: function(result) {
					$('[name="id_admin"]').val(result.id_admin);
					$('[name="admin_nama"]').val(result.admin_nama);
					$('[name="admin_username"]').val(result.admin_username);
					$('[name="telephone"]').val(result.telephone);
					$('[name="email"]').val(result.email);
					$('[name="alamat"]').val(result.alamat);

					

				}, error: function (jqXHR, textStatus, errorThrown) {
					alert('Error get data from ajax');
				}

			});

	}

	// function update_p() {
	// 		save_method = 'update';
	// 		$('#panel-data').fadeOut('slow');
	// 		$('#form-update').fadeIn('slow');
	// 		//document.getElementById('formAksi').reset();

	// 		$.ajax({

	// 			url : link+"/ajax_edit_p/",
	// 			type: "GET",
	// 			dataType: "JSON",
	// 			success: function(result) {
	// 				$('[name="id_admin"]').val(result.id_admin);
	// 				$('[name="profile_nama_lengkap"]').val(result.admin_nama);
	// 				$('[name="profile_nomor_telephone"]').val(result.user_telephone);
	// 				$('[name="profile_email"]').val(result.user_email);
	// 				$('[name="profile_alamat"]').val(result.user_alamat);
	// 				$('[name="profile_password_sekarang"]').val(result.admin_view_password);
	// 				$('[name="profile_konfirmasi_password]').val('');
	// 				$('[name="profile_password_baru]').val('');

	// 			}, error: function (jqXHR, textStatus, errorThrown) {
	// 				alert('Error get data from ajax');
	// 			}

	// 		});
	// }
		
</script>	