<!doctype html>

<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->

<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Remove Tap Highlight on Windows Phone IE -->

        <meta name="msapplication-tap-highlight" content="no"/>

        <title>Admin Web <?= SITE_NAME; ?></title>

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon-elecomp.png" type="image/x-icon" />

        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assetslogin/assets/images/favicon.png">

        

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assetslogin/components/uikit/css/uikit.almost-flat.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assetslogin/css/login_page.min.css" rel="stylesheet" type="text/css" />

    

    <body class="login_page">



        <div class="login_page_wrapper">

    <div class="md-card" id="login_card">

        <div class="md-card-content large-padding" id="login_form">

            <h2 class="heading_a uk-margin-medium-bottom uk-text-center">Login Admin</h2>

            <div id="message"></div>

            <form action="index.html">

			<div class="alert alert-danger" role='alert' id="pesan" hidden>

				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>

					<span aria-hidden='true'>×</span><span class='sr-only'>Close</span>

				</button> 

						Username dan password tidak sesuai, silahkan coba kembali

			</div>

                <div class="uk-form-row parsley-row">

                    <label for="identity">Username</label>

                    <input class="md-input" autocomplete="off" type="text" required="" id="username" name="username" />

                </div>

                <div class="uk-form-row parsley-row">

                    <label for="password">Password</label>

                    <input class="md-input" autocomplete="off" type="password" required="" id="password" name="password" />

                </div>

				<?php

					$info = $this->session->flashdata('info');

                        if(!empty($info))

                        {

                            echo $info;

                        }

				?><br>

                <div class="uk-margin-medium-top">

					<input type="button" id="login" class="md-btn md-btn-primary md-btn-block md-btn-large" value="Login">

                </div>

            </form>

        </div>

    </div>

</div>        

    <script src="<?php echo base_url();?>assetslogin/js/common.min.js"></script>

    <script src="<?php echo base_url();?>assetslogin/js/uikit_custom.min.js"></script>

    <script src="<?php echo base_url();?>assetslogin/js/altair_admin_common.min.js"></script>

    <script src="<?php echo base_url();?>assetslogin/js/jquery.form.js"></script>

    <script src="<?php echo base_url();?>assetslogin/js/modules/auth/login.min.js"></script>

	<script src="<?php echo base_url();?>assetslogin/js/jquery.min.js"></script>

	<script src="<?php echo base_url();?>assetslogin/jquery/jquery-2.1.4.min.js"></script>

    </body>

</html>

<script type="text/javascript">

        $(window).load(function(){

            setTimeout(function() {

                $('#loading').fadeOut( 400, "linear" );

            }, 300);

        });

         function cekform(){

            if(!$("#username").val())

            {

                alert('maaf username tidak boleh kosong');

                $("#username").focus();

                return false;

            }

            if(!$("#password").val())

            {

                alert('maaf password tidak boleh kosong');

                $("#password").focus();

                return false;

            }

        }



        $(function() {

            $('#login').click(function(){

                var pm1=$('#username').val();

                var pm2=$('#password').val();

                $.ajax({

                        type: "POST",

                        url : "<?php echo base_url(); ?>Login/getlogin",

                        data : "username="+pm1+"&password="+pm2+"",

                        datatype : 'json',

                        beforeSend: function(msg){$("#login").val('Loading...');},

                        success: function(msg){

                            var data_cek = JSON.parse(''+msg+'' );

                            if (data_cek.hasil=='1') {

                                $("#login").val('Login Sukses');

                                window.location.assign("<?=base_url()?>Dashboard");

                            }else{

                                $("#login").val('Login');

                                $("#pesan").attr('hidden',false);

                            }

                        }

                    });

            });

          });

        $("#password").keyup(function (e) {

            if (e.keyCode == 13) {

                $('#login').click();

            }

        });

        $("#username").keyup(function (e) {

            if (e.keyCode == 13) {

                $('#password').focus();

            }

        });



  </script>