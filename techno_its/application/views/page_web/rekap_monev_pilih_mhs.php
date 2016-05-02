<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Monitoring dan Evaluasi</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />
<div class="col-lg-5">
	<div class="jumbotron">
	<p>Silahkan pilih periode monev Anda<br /></p>

	<form method="post" action="<?php echo base_url('index.php/page/rekap_monev_mhs')?>" name="myform" id="myform" enctype="multipart/form-data">
	<table>	
		<tr>
			<td width = "500px">
				
				<div class="form-group">
					<font color = "red" size="2px"><div id='myform_periode_errorloc' class="error_strings"></div></font>
					<?php	
						echo "<select class=\"form-control\" name=\"periode\">";					
						echo "<option selected disable></option>";
						for($i=1 ; $i<=$periode_monev ; $i++)
						{
							
								echo "<option>$i</option>";
						
						}							
							echo "</select>";
					?>
				</div>
				
			</td>
			<td width="10px">
			</td>
			
		<tr>
	</table>

	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	
	
	
</div>

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			
			frmvalidator.addValidation("periode","req","ERROR: Periode monev harus diisi!");						
		//]]>
	</script>