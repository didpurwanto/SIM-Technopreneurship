<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Tulis Berita</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<form method="post" action="<?php echo base_url('index.php/page/tambah_berita_bt')?>" name="myform" id="myform" enctype="multipart/form-data">
<div class="col-lg-6">
	<div class="jumbotron">


	<table>	
		<tr>
			<td width = "700px">
				<div class="form-group">				
					<label>Judul Berita</label>
					<font color = "red" size="2px"><div id='myform_judul_errorloc' class="error_strings"></div></font>
					<textarea class="form-control" rows="1" name="judul" ></textarea>
				</div>
				
				<div class="form-group">				
					<label>Isi Berita</label>
					<font color = "red" size="2px"><div id='myform_isi_errorloc' class="error_strings"></div></font>
					<textarea class="form-control" rows="17" name="isi" ></textarea>
				</div>
				
				
			</td>
			
		<tr>
	</table>

	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
<div>
</form>

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("judul","req","ERROR: Judul harus diisi!");			
			frmvalidator.addValidation("isi","req","ERROR: Isi harus diisi!");			
				
			
			
			
		//]]>
	</script>