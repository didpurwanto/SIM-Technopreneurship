<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Konfigurasi Penilaian</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<form method="post" action="<?php echo base_url('index.php/page/mengajukan_proposal_anggota')?>" name="myform" id="myform" enctype="multipart/form-data">

<br /><br /><br />
<button type="submit" class="btn btn-primary">Simpan dan Lanjutkan</button>
</form>

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("judul","req","ERROR: Judul harus diisi!");			
			frmvalidator.addValidation("dosbing","req","ERROR: Dosen Pembimbing harus diisi!");			
			frmvalidator.addValidation("jumlah_anggota","req","ERROR: Jumlah Anggota harus diisi!");			
			frmvalidator.addValidation("dana_diajukan","req","ERROR: Dana yang diajukan harus diisi!");			
			frmvalidator.addValidation("abstraksi","req","ERROR: Abstraksi yang diajukan harus diisi!");			
						
		//]]>
	</script>