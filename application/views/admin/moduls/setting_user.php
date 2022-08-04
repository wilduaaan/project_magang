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
				User
			</a>
		</li>

	
											
	</ul>

	<div class="tab-content">

	<div id="link" class="tab-pane fade in active">
	<form id="formAksi2" class="form-horizontal" role="form" action="#" method="POST" >

		<input type="hidden" name="id_setting_user">
		 <input type="hidden" name="Id" value="<?php echo $this->session->userdata('no_peserta') ?>">
                  <input type="hidden" name="username" value="<?php echo $this->session->userdata('Username') ?>">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password Sekarang</label>

                    <div class="col-sm-10" id="xu_pass">
                      <input type="password" class="form-control" onkeyup="npas_su()" required name="c_pass" id="c_pass" placeholder="Password Sekarang">
                      <input type="hidden" name="x_pass" id="x_pass" value="<?php echo $this->session->userdata('admin_view_password') ?>">
                      <label class="control-label" for="inputSuccess" id="x_scp" style="display: none;"><i class="fa fa-check label-success"></i> Password lama cocok</label>
                      <label class="control-label" for="inputError" id="x_erp" style="display: none;"><i class="fa fa-times-circle-o label-danger"></i> Password lama tidak cocok</label>

                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Password Baru</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control"  required id="n_pass" name="n_pass" placeholder="Password Baru">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Ulangi Password</label>

                    <div class="col-sm-10" id="du_pass">
                      <input type="password" class="form-control"  required id="u_pass" name="u_pass" onkeyup="npas()" placeholder="Ulangi Password">


                      <label class="control-label" for="inputSuccess" id="scp" style="display: none;"><i class="fa fa-check label-success"></i> Password cocok</label>
                      <label class="control-label" for="inputError" id="erp" style="display: none;"><i class="fa fa-times-circle-o label-danger"></i> Password tidak cocok</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">



                      <button type="submit" id="spass" name="mit2" class="btn btn-flat btn-success"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                  </div>
                  <script type="text/javascript">
                    // $(document).ready(function(){

                      function npas_su(){
                      	var cp = $("#c_pass").val();
                      	var xp = $("#x_pass").val();

                      	console.log(cp);
                      	console.log(xp);

                      	if (cp==xp) {
                          document.getElementById('x_scp').removeAttribute('style');
                          document.getElementById('spass').removeAttribute('disabled');
                          $("#xu_pass").attr('class','col-sm-10 has-success');
                          $("#x_erp").attr('style','display: none;');
                          // console.log('benar');
                        }else{
                          document.getElementById('x_erp').removeAttribute('style');
                          $("#xu_pass").attr('class','col-sm-10 has-error');
                          $("#x_scp").attr('style','display: none;');
                          $("#spass").attr('disabled','disabled');
                          // console.log('salah');
                        }
                      }	


                      function npas() {
                        var np = $("#n_pass").val();
                        var up = $("#u_pass").val();
                        if (up==np) {
                          document.getElementById('scp').removeAttribute('style');
                          document.getElementById('spass').removeAttribute('disabled');
                          $("#du_pass").attr('class','col-sm-10 has-success');
                          $("#erp").attr('style','display: none;');
                          // console.log('benar');
                        }else{
                          document.getElementById('erp').removeAttribute('style');
                          $("#du_pass").attr('class','col-sm-10 has-error');
                          $("#scp").attr('style','display: none;');
                          $("#spass").attr('disabled','disabled');
                          // console.log('salah');
                        }
                      }
                    // });
                  </script>
	
		
	</form>
	</div>

	


	</div>
</div>
</div>

<script>
	var zonk='';
	var save_method;
	var link = "<?php echo site_url('Setting_ukuran')?>";

	// $(document).ready(function(){
	// 	ubah();
 //    });

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
            url : "<?php echo site_url('Setting_user')?>/"+link_edit+"/",
            type: "GET",
            dataType: "JSON",
            success: function(result) {    
			   $("input[name='id_setting_user']").val(result.set_data1); 
			    $("input[name='n_pass']").val(result.set_data2); 
			    
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

     $(document).on('submit', '#formAksi2', function(e) {
     // tinyMCE.triggerSave();
        e.preventDefault();
          $.ajax({
              url : "<?php echo site_url('Setting_user')?>/update_user/",
              type: "POST",
              data:  new FormData(this),
              contentType: false,
              cache: false,
              processData:false,
              success: function(data){
                  swal_berhasil();
                 // ubah();
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