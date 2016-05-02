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
<div class="jumbotron">
<form method="post" action="<?php echo base_url('index.php/page/monev_semester')?>" name="myform" id="myform" enctype="multipart/form-data">
<table>	
	<tr>
		<td width = "500px">
			<div class="form-group">
				<label>Monev ke</label>
				<font color = "red" size="2px"><div id='myform_pilih_monev_errorloc' class="error_strings"></div></font>
				<input class="form-control" name="pilih_monev" >
			</div>
		</tr>
	</td>
</table>


<br />
<button type="submit" class="btn btn-primary">Submit</button>


</form>
			

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("pilih_monev","req","ERROR: Periode monev harus diisi!");			
			
		//]]>
	</script>