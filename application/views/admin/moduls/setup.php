<!-- <?php $title = "<i class='fa fa-cogs'></i>&nbsp;Setting"; ?> -->
<?php $title = "<i class='fa fa-cog'></i>&nbsp;Settings"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
	<img src='<?php echo base_url();?>assets/img/loader-dark.gif' />
</div>
<!-- untuk bagian preview upload nya gambar pada gambarnya-->
<div id="data" style="display:none;">
	<style type="text/css"> 
		#loader-upload1{display: none;}#loader-upload2{display: none;}#loader-upload3{display: none;}#loader-upload4{display: none;}#loader-upload5{display: none;}
	</style>
<section class="content">
<div class="page-header">
	<h1>
		<?php echo $title;?>
	</h1>
</div>
<div class="tabbable">
	<ul class="nav nav-tabs" id="formAksi">
		<li class="active">
				<!-- #home var menggambil data / menampilkan data mengambil datanya-->
			<a data-toggle="tab" href="#home">
				<i class="green ace-icon fa fa-rss bigger-120"></i>
				Link
			</a>
		</li>
		<li>
			<a data-toggle="tab" href="#messages">
			<i class="green ace-icon fa fa-file-image-o bigger-120"></i>
				Gambar Header
			</a>
		</li>
		<li>
			<a data-toggle="tab" href="#logo">
			<i class="green ace-icon fa fa-home bigger-120"></i>
				Logo
			</a>
		</li>

		

											
	</ul>

	<!-- untuk halaman viewnya bagian link-->
	<div class="tab-content">
	
	
	<div id="home" class="tab-pane fade fade in active">
	<form id="formAksi" class="form-horizontal" role="form" action="#" method="POST" >
		<input type="hidden" name="faspen_id"/> 
		<div class="form-body">
			<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email </label>
				<div class="col-sm-10">
					<input type="text" id="email" name="email" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Facebok </label>
				<div class="col-sm-10">
					<input type="text" id="facebook" name="facebook" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Instagram </label>
				<div class="col-sm-10">
					<input type="text" id="instagram" name="instagram" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Youtube </label>
				<div class="col-sm-10">
					<input type="text" id="youtube" name="youtube" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			
			<div class="form-group">
			
			<div class="col-md-offset-2 col-md-9">
				<button class="btn btn-info" type="submit" id="btn_save" onclick="save()">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Update
				</button>
			</div>	
			</div>
		</div>
	</form>	
	</div>
	


	<!--untuk bagian upload header-->
	<div id="messages" class="tab-pane fade">
		<div class="form-body">
			 <form id="form-upload" class="form-horizontal" role="form" action="<?= site_url('Setup/upload')?>" method="POST" enctype="multipart/form-data"> 
			<div class="form-group" >
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload1" id="file-upload1">
				<span class="help-block"></span>
				<!-- <div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div> -->
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Header Tentang</label>
					<div class="input-group col-md-9">
						<img id="loader-upload1" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload1" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
			<!-- </form>	
			<form id="form-upload2" class="form-horizontal" role="form" action="<?= site_url('Setup/upload_produk')?>" method="POST" enctype="multipart/form-data"> -->
			<div class="form-group" >
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload2" id="file-upload2">
				<span class="help-block"></span>
				<!-- <div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div> -->
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Header Produk</label>
					<div class="input-group col-md-9">
						<img id="loader-upload2" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload2" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
			<!-- </form> -->
			<!-- <form id="form-upload3" class="form-horizontal" role="form" action="<?= site_url('Setup/upload_foto')?>" method="POST" enctype="multipart/form-data"> -->
			<div class="form-group" >
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload3" id="file-upload3">
				<span class="help-block"></span>
				<!-- <div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div> -->
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Header Foto</label>
					<div class="input-group col-md-9">
						<img id="loader-upload3" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload3" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
			<!-- </form>		 -->
			<!-- <form id="form-upload4" class="form-horizontal" role="form" action="<?= site_url('Setup/upload_about')?>" method="POST" enctype="multipart/form-data"> -->
			<div class="form-group" >
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload4" id="file-upload4">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Header Kontak</label>
					<div class="input-group col-md-9">
						<img id="loader-upload4" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload4" src="#" style="height: 100px;border: 1px solid #DDC; " />

					</div>
			</div>
			</form>		
		</div>	
	</div>

	<!--logo -->
	<div id="logo" class="tab-pane fade"><!-- 
	<form action="#" id="form-logo" name="form-logo" class="form-horizontal" enctype="multipart/form-data"> -->
	<form id="form-upload" class="form-horizontal" role="form" action="<?= site_url('Setup/upload_logo')?>" method="POST" enctype="multipart/form-data">
			<div class="form-group" >
			<label class="control-label col-md-3">Pilih File</label>
			<div class="input-group col-md-6">
				<input type="file" name="file-upload5" id="file-upload5">
				<span class="help-block"></span>
				<div class="input-group-btn">
					<button type="submit" class="btn btn-primary">Upload</button>
				</div>
			</div>
			</div>
			<div class="form-group" >
				<label class="control-label col-md-3">Logo</label>
					<div class="input-group col-md-9">
						<img id="loader-upload5" src="<?= base_url(); ?>uploads/load.gif" style="height: 30px;">
						<img id="preview-upload5" src="#" style="height: 100px;border: 1px solid #DDC; " />
					</div>
			</div>
	</form>	
	</div>
</div>
</div>
</div>
</section>

<script type="text/javascript">


	var zonk='';
	var link = "<?php echo site_url('Setup')?>";
	$(document).ready(function(){
      ubah();


      function readURL1(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload1').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload1").change(function(){ readURL1(this); });

		function readURL2(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload2').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload2").change(function(){ readURL2(this); });

		function readURL3(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload3').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload3").change(function(){ readURL3(this); });

		function readURL4(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload4').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload4").change(function(){ readURL4(this); });

		function readURL5(input) {
			if (input.files && input.files[0]) {
				var rd = new FileReader(); 
				rd.onload = function (e) { $('#preview-upload5').attr('src', e.target.result); }; rd.readAsDataURL(input.files[0]);
			}
		}
		$("#file-upload5").change(function(){ readURL5(this); });
    });


	function data(){
		$('#data').fadeIn();
	}
	
	
	
	$(document).ready(function(){
      //$('#idImgLoader').show(2000);
	  $('#idImgLoader').fadeOut(2000);
	  setTimeout(function(){
            data();
      }, 2000);
	  
    });
	
	

    function ubah() {
				link_edit = "ajax_edit";
        $.ajax({
            url : link+"/"+link_edit+"/",
            type: "GET",
            dataType: "JSON",
            success: function(result) {
            // //set_data1 dst menggambil data function mdl_setup "get_by_id" dan  email dst menenggambillya di id&name di bagian viewnya
            // console.log(result.set_header1);
            var img = '<?= base_url(); ?>assets/images/'+result.set_header1;
			var img2 = '<?= base_url(); ?>assets/images/'+result.set_header2;
			var img3 = '<?= base_url(); ?>assets/images/'+result.set_header3;
			var img4 = '<?= base_url(); ?>assets/images/'+result.set_header4;
			var img5 = '<?= base_url(); ?>assets/images/'+result.set_logo1;
               $("#email").val(result.set_data1); 
			   $("#facebook").val(result.set_data2);
			   $("#instagram").val(result.set_data3);
			   $("#youtube").val(result.set_data4);	
			   $('#preview-upload1').attr('src', img);
			   $('#preview-upload2').attr('src', img2); 
			   $('#preview-upload3').attr('src', img3);
			   $('#preview-upload4').attr('src', img4);
			   $('#preview-upload5').attr('src', img5);		   
			   		   
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
	
	$(document).on('submit', '#formAksi', function(e) { 
    tinyMCE.triggerSave(); 
      e.preventDefault();
			var link_sub = '<?php echo $this->session->userdata('current_language')=='english'?>';
			if(link_sub){
				link_edit = "update_link_en";
			}else{
				link_edit = "update_link";
			}
        $.ajax({
            url : link+"/"+link_edit+"/",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){                 
                swal_berhasil(); 
                ubah();
                //$('#a7').val();  
                setTimeout(function(){
                    $('#btn_save').text('Ubah');
                    $('#btn_save').attr('disabled', false);
                    //document.getElementById('formAksi').reset();
                }, 1000);

            }           
        });
        return false;
    });
	
</script>