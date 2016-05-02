<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Pergantian Ketua Kelompok</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">			
			<div class="panel-body">
				
							<form role="form" action="<?php echo base_url("index.php/page/ganti_ketua_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
							<table>
								
								<tr>
									<td width="200px"><b>Pilih ketua baru</b>
									</td>
									<td width="15px">:
									</td>
									<td>
										<select class="form-control" name="anggota">																
											<option selected disabled></option>
											<?php
												foreach($anggota as $rows)
												{
													echo "<option value=\"".$rows['nrp']."\">".$rows['nama']."</option>";
												}
											?>									
										</select>
									</td>
									<td><font color = "red" size="2px"><div id='myform_anggota_errorloc' class="error_strings"></div></font>
									</td>
									
								</tr>
								<tr>
									<td>
										<b>&nbsp</b>
									</td>
								</tr>
								<tr>
									<td>
										<b>Password baru</b>
									</td>
									<td width="15px">:
									</td>
									<td>				
										<div class="form-group">									
											<input class="form-control" name="password" type="password">
										</div>
									</td>
									<td><font color = "red" size="2px"><div id='myform_password_errorloc' class="error_strings"></div></font>
									</td>
								</tr>
								
								<tr>
									<td>
										<b>Konfirmasi password baru</b>
									</td>
									<td width="15px">:
									</td>
									<td>				
										<div class="form-group">								
										<input class="form-control" name="confpassword" type="password">
									</div>
									</td>
									<td><font color = "red" size="2px"><div id='myform_confpassword_errorloc' class="error_strings"></div></font>
									</td>
								</tr>
								
								<tr>
									<td>
									</td>
									<td>
									</td>
									<td align="right"><input type="submit" name="submit" class="btn btn-primary"></input>		
									</td>
								</tr>
							</table>
							
							
						</form>	
				
			</div>
		</div>
	</div>
</div>
				
<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("anggota","req","ERROR: Anggota harus diisi!");			
			
			frmvalidator.addValidation("password","req","ERROR: Password harus diisi!");					
			
			frmvalidator.addValidation("confpassword","req","ERROR: Konfirmasi password harus diisi!");
			frmvalidator.addValidation("confpassword","eqelmnt=password","Password dan konfirmasi password harus sama!");			
			
			
			
		//]]>
	</script>