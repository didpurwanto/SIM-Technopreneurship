<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Ubah Password</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">			
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<form role="form" action="<?php echo base_url('index.php/page/update_password_doskarbem_bt')?>" method="post" name="myform" id="myform">							
							<div class="form-group">
								<label>Password Lama</label>
								<font color = "red" size="2px"><div id='myform_PasswordLama_errorloc' class="error_strings"></div></font>
								<input class="form-control" name="PasswordLama" type="password">
							</div>
							<div class="form-group">
								<label>Password Baru</label>
								<font color = "red" size="2px"><div id='myform_password_errorloc' class="error_strings"></div></font>
								<input class="form-control" type="password" name="password">                                            
							</div>
							<div class="form-group">
								<label>Konfirmasi Password</label>
								<font color = "red" size="2px"><div id='myform_confpassword_errorloc' class="error_strings"></div></font>
								<input class="form-control" type="password" name="confpassword">                                            
							</div>
							<input type="submit" class="btn btn-primary"></button>                                                                             
						</form>
		
				
				</div>
				<!-- /.row (nested) -->
				
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();
					
			frmvalidator.addValidation("PasswordLama","req","ERROR: Password lama harus diisi!");					
			frmvalidator.addValidation("password","req","ERROR: Password baru harus diisi!");					
			frmvalidator.addValidation("confpassword","req","ERROR: Konfirmasi password harus diisi!");					

			frmvalidator.addValidation("confpassword","eqelmnt=password","Password baru dan konfirmasi password harus sama!");
			
		//]]>
	</script>
