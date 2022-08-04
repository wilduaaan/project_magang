<?php $title = "<i class='fa fa-book'></i>&nbsp;Kontak"; ?>
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

		<div class="row">
			<div class="col-xs-12">
				<div id="form-data" style="display:none;">
					<div class="widget-box">
						<div class="widget-header">
							<h4 class="widget-title">Form Kontak</h4>
							<div class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
								<a onclick="Batal()" data-action="close">
									<i class="ace-icon fa fa-times"></i>
								</a>
							</div>
						</div>

						<div class="widget-body">
							<div class="widget-main">
								<div class="row">
									<div class="col-xs-12">
										<form class="form-horizontal" role="form" id="formAksi">
											<input type="hidden" name="id_kontak">

											<div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Lokasi Maps Sekarang </label>
												<div class="col-sm-6" id="mmap">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Link Embed </label>
												<div class="col-sm-6">
													<input type="text" id="embed_dua" oninput="getEmbed1();" name="script_embed_code" placeholder="link lokasi" class="form-control" />
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"></label>
												<div class="col-sm-10">
													<button class="btn btn-info" type="button" id="" data-toggle="modal" data-target="#modal">
														Pilih Lokasi
													</button>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Deskripsi Kontak </label>
												<div class="col-sm-6">
													<textarea style="height: 150px;" class="form-control col-xs-10 col-sm-5" id="deskripsi_kontak" name="deskripsi_kontak" placeholder="Deskripsi Kontak"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Deskripsi Kontak (english)</label>
												<div class="col-sm-6">
													<textarea style="height: 150px;" class="form-control col-xs-10 col-sm-5" id="deskripsi_kontak2" name="deskripsi_kontak_us" placeholder="Deskripsi Kontak"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email </label>
												<div class="col-sm-6">
													<input type="text" id="embed_dua" oninput="getEmbed1();" name="email_kontak" placeholder="email" class="form-control" />
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nomor Telpon </label>
												<div class="col-sm-6">
													<input type="text" id="embed_dua" oninput="getEmbed1();" name="nomor_kontak" placeholder="nomor telpon" class="form-control" />
												</div>
											</div>

											<div class="modal fade in" id="modal">
												<div class="modal-dialog modal-md">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">x</button>
															<div class="modal-title">
																<h5>Pilih Lokasi</h5>
															</div>
														</div>
														<div class="modal-body" style="margin-left: 10px; margin-right: 10px;">
															<form id="mb">
																<input type="hidden" name="id" value="">
																<div class="form-group">
																	<label>1. Buka Halaman <a href="http://google.co.id/maps" target="_blank">Google Map</a>.</label>
																</div>
																<div class="form-group">
																	<label>2. Cari Lokasi Kota/Kabupaten/Provinsi pada Kotak Pencarian.</label>
																</div>
																<div class="form-group">
																	<label>3. Pick/Pilih Lokasi yang Sesuai dengan Klik pada Maps. Ditandai dengan Icon Lokasi Berwarna Abu-Abu.</label>
																	<img src="<?= base_url(); ?>assetsadmin/img/tutor1.jpg" width="100%" style="border: 1px solid #aaa;">
																</div>
																<div class="form-group">
																	<label>4. Klik bagikan dan kemudian klik sematkan peta.</label>
																	<img src="<?= base_url(); ?>assetsadmin/img/tutor2.jpg" width="100%" style="border: 1px solid #aaa;">
																</div>
																<div class="form-group">
																	<label>5. Copy dan Paste Koordinat yang ada di Address Bar ke Inputan di Bawah.</label>
																	<img src="<?= base_url(); ?>assetsadmin/img/tutor3.jpg" width="100%" style="border: 1px solid #aaa;">
																</div>
																<div class="form-group">
																	<label>Update Link :</label>
																	<input type="text" id="embed_satu" name="script_embed_code1" placeholder="link lokasi" class="form-control" />
																</div>
																<div class="form-group clearfix">
																	<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="getEmbed();">Save</button>
																	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>


											<<!-- div class="form-group">
												<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kontak Deskripsi Meta </label>
												<div class="col-sm-6">
													<textarea class="form-control" id="kontak_deskripsi_meta" name="kontak_deskripsi_meta" placeholder="Kontak Deskripsi Meta" class="col-xs-10 col-sm-5"></textarea>
												</div>
									</div> -->
									<div class="col-md-offset-2 col-md-9">
										<button class="btn btn-info" type="button" id="btn_save" onclick="save()">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Submit
										</button>
										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Reset
										</button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div><!-- /.row -->
				</div>
			</div><!-- /.row -->
		</div>
</div>
<!-- Boostrap Dialog -->







<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFTimIhQoFCg8bF7PAMgDWi38QqqvaCx8"></script>



<script>
	var save_method;

	var link = "<?php echo site_url('Kontak') ?>";

	var table;



	$(document).ready(function() {

		edit();

		setTimeout(function() {

			ckeditor();

		}, 2000);


	});


	function ckeditor() {

		tinyMCE.init({

			mode: "exact",
			elements: "deskripsi_kontak",
			theme: "advanced",
			plugins: "jbimages,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
			language: "en",
			theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4: "jbimages,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
			theme_advanced_toolbar_location: "top",
			theme_advanced_toolbar_align: "left",
			theme_advanced_statusbar_location: "bottom",
			theme_advanced_resizing: true,
			relative_urls: false
		});
		tinyMCE.init({
			mode: "exact",
			elements: "deskripsi_kontak2",
			theme: "advanced",
			plugins: "jbimages,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
			language: "en",
			theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4: "jbimages,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
			theme_advanced_toolbar_location: "top",
			theme_advanced_toolbar_align: "left",
			theme_advanced_statusbar_location: "bottom",
			theme_advanced_resizing: true,
			relative_urls: false
		});

	}



	function modal_peta(id, latitude, longitude) {

		// console.log(id);

		var map;

		//Parameter Google maps

		var options = {

			zoom: 16, //level zoom

			//posisi tengah peta

			center: new google.maps.LatLng(latitude, longitude),

			mapTypeId: google.maps.MapTypeId.ROADMAP

		};



		// Buat peta di

		var map = new google.maps.Map(document.getElementById('peta' + id), options);

		// Tambahkan Marker

		var locations = [

			[latitude, longitude],

		];

		var infowindow = new google.maps.InfoWindow();



		var marker, i;

		// kode untuk menampilkan banyak marker 

		for (i = 0; i < locations.length; i++) {

			marker = new google.maps.Marker({

				position: new google.maps.LatLng(locations[0][0], locations[0][1]),

				map: map,

			});

			/* menambahkan event clik untuk menampikan

			infowindows dengan isi sesuai denga

			marker yang di klik */



			google.maps.event.addListener(marker, 'click', (function(marker, i) {

				return function() {

					infowindow.setContent(locations[i][0]);

					infowindow.open(map, marker);

				}

			})(marker, i));

		}

		$("#modal-peta" + id).modal();



	}



	$(document).ready(function() {

		//$('#idImgLoader').show(2000);

		$('#idImgLoader').fadeOut(2000);

		setTimeout(function() {

			data();

		}, 2000);

	});



	function getEmbed() {

		document.getElementById('embed_dua').value = document.getElementById('embed_satu').value;

		document.getElementById('mmap').innerHTML = document.getElementById('embed_satu').value;

	}



	function getEmbed1() {

		document.getElementById('mmap').innerHTML = document.getElementById('embed_dua').value;

	}





	function data() {

		$('#data').fadeIn();

	}



	function Batal() {

		$('#form-data').slideUp(500, 'swing');

		$('#panel-data').fadeIn(1000);

	}



	function save() {

		$('#btn_save').text('Saving...');

		$('#btn_save').attr('disabled', true);





		url = link + "/ajax_update";

		tinyMCE.triggerSave();

		$.ajax({

			url: url,

			type: "POST",

			data: $('#formAksi').serialize(),

			dataType: "JSON",

			success: function(result) {

				//edit();

				setTimeout(function() {

					$('#btn_save').text('Save');

					$('#btn_save').attr('disabled', false);

					// document.getElementById('formAksi').reset();

				}, 1000);

				swal_berhasil();
				edit();

			},
			error: function(jqXHR, textStatus, errorThrown) {

				// alert('Error adding/update data');

				swal({
					title: "ERROR",
					text: "Error adding / update data",
					type: "warning",
					closeOnConfirm: true
				});

				$('#btnSave').text('save');
				$('#btnSave').attr('disabled', false);

			}

		});

	}



	function edit() {

		save_method = 'update';

		$('#panel-data').fadeOut('slow');

		$('#form-data').fadeIn('slow');

		// document.getElementById('formAksi').reset();

		$.ajax({

			url: link + "/ajax_edit/",

			type: "GET",

			dataType: "JSON",

			success: function(result) {

				//document.getElementById('fc_kdbahan').setAttribute('readonly','readonly');

				$('[name="id_kontak"]').val(result.id_kontak);

				$('[name="deskripsi_kontak"]').val(result.deskripsi_kontak);

				$('[name="deskripsi_kontak_us"]').val(result.deskripsi_kontak_us);

				$('[name="script_embed_code"]').val(result.script_embed_code);

				$('[name="email_kontak"]').val(result.email_kontak);

				$('[name="nomor_kontak"]').val(result.nomor_kontak);

				document.getElementById('mmap').innerHTML = result.script_embed_code;



			},
			error: function(jqXHR, textStatus, errorThrown) {

				alert('Error get data from ajax');

			}

		});

	}



	function lokasi() {

		$('#modal').modal({
			backdrop: 'static',
			show: true
		});

	}



	function tempat() {

		$('#modal').modal({
			backdrop: 'static',
			show: true
		});

	}



	function setLokasi() {

		var koor = $('#kontak_koordinat').val();

		var a_koor = koor.split(",");



		$('[name="kontak_lat"]').val(a_koor[0]);

		$('[name="kontak_long"]').val(a_koor[1]);



		$('[name="update_latitude"]').val(a_koor[0]);

		$('[name="update_longitude"]').val(a_koor[1]);

	}
</script>