<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPOS - Sistem Informasi Perpustakaan Online Sekolah</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("public/template")?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url("public/template")?>/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("public/template")?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("public/template")?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
		type="text/javascript" xml:space="preserve">
	</script>
	
	

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" align="center">
						<a href="<?php echo base_url()?>"> 
							<img href="#" height = "130px" width="130px" src="<?php echo base_url('public/img/logo.png')?>">
						</a>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url("index.php/akun/login_mhs_action")?>" method="post" name="myform" id="myform" >
                            <fieldset align="center">
                                <div class="form-group">
                                    <input class="form-control" placeholder="NRP" name="nrp" type="nrp" autofocus>
									<font color = "red" size="2px"><div id='myform_nrp_errorloc' class="error_strings"></div></font>
                                </div>
                                <div class="form-group">									
                                    <input class="form-control" placeholder="Password" name="passwd"  value="" type="password" autofocus>
									<font color = "red" size="2px"><div id='myform_passwd_errorloc' class="error_strings"></div></font>
                                </div>
								<div class="form-group">											
									<select class="form-control" name="tahun">								
										<option selected disabled>Pilih Tahun</option>
										<option>2015</option>
										<option>2016</option>												
										<option>2017</option>												
										<option>2018</option>												
										<option>2019</option>												
										<option>2020</option>												
									</select>			
								</div>
								<div class="form-group">											
									<font color = "red" size="2px"><div id='myform_skema_errorloc' class="error_strings"></div></font>
									<select class="form-control" name="skema">								
										<option selected disabled>Pilih Skema</option>
										<option value='1'>PMW</option>
										<option value='2'>BRI</option>												
									</select>			
								</div>
								
								<div type="hidden">
									  <input type="hidden" name="notif_login_failed" value="E-mail atau password salah!" >
								</div>
								
								<button type="submit"  class="btn btn-primary">L O G I N</button>  
                            </fieldset>
                        </form>
						<br />												
						<table  align="center">
						<tr>
							<td>
								<h3 class="panel-title" ><a href="<?php echo base_url()?>" class="alert-link" align="center"><font color="#227594">Kembali</font></a></h3>                    
							</td>
							<td width="200px" />
							<td>
								<h3 class="panel-title" ><a href="<?php echo base_url("index.php/akun/register")?>" class="alert-link" align="center"><font color="#227594">Register</font></a></h3>                    
							</td>
						</tr>
						</table>
						
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url("public/")?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("public/")?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url("public/")?>js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url("public/")?>js/sb-admin-2.js"></script>
	
	<!-- Validation -->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("nrp","req","ERROR: NRP harus diisi!");			
			frmvalidator.addValidation("passwd","req","ERROR: Password harus diisi!");
			frmvalidator.addValidation("skema","req","ERROR: Skema harus diisi!");
			
			
			
		//]]>
	</script>

</body>

</html>
