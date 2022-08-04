<?php $title = "<i class='fa fa-home'></i>&nbsp;Home"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
	<img src='assetsadmin/img/loader-dark.gif' />
</div>
<div id="data" style="display:none;">
	<section class="content">
		<div class="page-header">
			<h1>
				<?php echo $title; ?>
			</h1>
		</div><!-- /.page-header -->

		<div class='alert alert-success' id='berhasil'><i class='fa fa-home'>&nbsp;</i>Selamat Datang Di Admin Web <?= SITE_NAME; ?></div>
	</section>
</div>
<script>
	$(document).ready(function() {
		//$('#idImgLoader').show(2000);
		$('#idImgLoader').fadeOut(2000);
		setTimeout(function() {
			data();
		}, 2000);
	});

	function data() {
		$('#data').fadeIn();
	}
</script>