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
				Ukuran
			</a>
		</li>

	
											
	</ul>

	<div class="tab-content">

	<div id="link" class="tab-pane fade in active">
	<form id="formAksi2" class="form-horizontal" role="form" action="#" method="POST" >

		<input type="hidden" name="id_setting_ukuran">
		 <div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ukuran Foto Slider </label>
			<div class="col-sm-10">
				<input type="text" id="ukuran_foto_slider" name="ukuran_foto_slider" placeholder="Ukuran Foto Slider" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ukuran Foto Tentang </label>
			<div class="col-sm-10">
				<input type="text" id="ukuran_foto_tentang" name="ukuran_foto_tentang" placeholder="Ukuran Foto Tentang" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ukuran Foto Produk </label>
			<div class="col-sm-10">
				<input type="text" id="ukuran_foto_produk" name="ukuran_foto_produk" placeholder="Ukuran Foto Produk" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Ukuran Foto Galeri </label>
			<div class="col-sm-10">
				<input type="text" id="ukuran_foto_galeri" name="ukuran_foto_galeri" placeholder="Ukuran Foto Galeri" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Footer </label>
			<div class="col-sm-10">
				<input type="text" id="footer" name="footer" placeholder="Footer" class="col-xs-10 col-sm-5" />
				<span class="help-block"></span>
			</div>
		</div>
	
		<div class="form-group">
			<div class="col-md-offset-2 col-md-9">
				<button class="btn btn-info" type="submit" id="btn_save2" >
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
	var zonk='';
	var save_method;
	var link = "<?php echo site_url('Setting_ukuran')?>";

	$(document).ready(function(){
		ubah();
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
            url : "<?php echo site_url('Setting_ukuran')?>/"+link_edit+"/",
            type: "GET",
            dataType: "JSON",
            success: function(result) {    
			   $("input[name='id_setting_ukuran']").val(result.set_data1); 
			    $("input[name='ukuran_foto_slider']").val(result.set_data2); 
			     $("input[name='ukuran_foto_tentang']").val(result.set_data3); 
			      $("input[name='ukuran_foto_produk']").val(result.set_data4);
			       $("input[name='ukuran_foto_galeri']").val(result.set_data5); 
			        $("input[name='footer']").val(result.set_data6);  
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

     $(document).on('submit', '#formAksi2', function(e) {
     // tinyMCE.triggerSave();
        e.preventDefault();
          $.ajax({
              url : "<?php echo site_url('Setting_ukuran')?>/update_ukuran/",
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
                      $('#btn_save2').text('Update Berhasil');
                      $('#btn_save2').attr('disabled', false);
                      //document.getElementById('formAksi').reset();
                  }, 1000);

              }
          });
          return false;
      });


</script>