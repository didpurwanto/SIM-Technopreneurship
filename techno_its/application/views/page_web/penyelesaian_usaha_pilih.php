<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Rekap Penyelesaian Usaha</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<div class="col-lg-4" >
	<div class="jumbotron">
	<p>Silahkan pilih tahun dan skema<br /></p>

	<form method="post" action="<?php echo base_url('index.php/page/penyelesaian_usaha_rekap')?>" name="myform" id="myform" enctype="multipart/form-data">
	<table>	
		<tr>
			<td width = "500px">
				<div class="form-group">
					<label>Tahun</label>
					<font color = "red" size="2px"><div id='myform_tahun_errorloc' class="error_strings"></div></font>
					<select class="form-control" name="tahun" id="tahun">
						<option selected disabled></option>
						<option value="1">2015</option>
						<option value="2">2016</option>
						<option value="3">2017</option>												
						<option value="4">2018</option>
						<option value="5">2019</option>
					</select>
				</div>
				<div class="form-group">
					<label>Skema</label>
					<font color = "red" size="2px"><div id='myform_skema_errorloc' class="error_strings"></div></font>
					<select class="form-control" name="skema" id="skema">
						<option selected disabled></option>
						<option value="1">PMW</option>
						<option value="2">BRI</option>					
					</select>
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

			frmvalidator.addValidation("tahun","req","ERROR: Tahun harus diisi!");			
			frmvalidator.addValidation("skema","req","ERROR: Skema harus diisi!");						
		//]]>
	</script>