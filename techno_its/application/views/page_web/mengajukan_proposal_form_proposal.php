<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Mengajukan Proposal</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<table >
	<tr>
		<td width="1000px">		
			<b><font color="#003399">INPUT DATA PROPOSAL =></font></b>
			<b><font color="black">INPUT DATA ANGGOTA =></font></b>
			<b><font color="black"> HASIL INPUT DATA PROPOSAL</font></b>
			<hr />
		</td>
	</tr>
</table>
<form method="post" action="<?php echo base_url('index.php/page/mengajukan_proposal_anggota')?>" name="myform" id="myform" enctype="multipart/form-data">
<table>	
	<tr>
		<td width = "500px">
			<div class="form-group">
				<label>Judul</label>
				<font color = "red" size="2px"><div id='myform_judul_errorloc' class="error_strings"></div></font>
				<textarea class="form-control" rows="4" name="judul" ></textarea>
			</div>
			<div class="form-group">
				<label>Dosen Pembimbing</label>
				<font color = "red" size="2px"><div id='myform_dosbing_errorloc' class="error_strings"></div></font>
				<select class="form-control" name="dosbing" id="dosbing">
					<option selected disabled>Pilih Dosen</option>
					<?php
						foreach($result as $rows)
						{
							echo "<option value=\"".$rows['email_doskarbem']."\">".$rows['nama_doskarbem']."</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Dana yang Diajukan</label>
				<font color = "red" size="2px"><div id='myform_dana_diajukan_errorloc' class="error_strings"></div></font>
				<input class="form-control" name="dana_diajukan" >
			</div>
			<div class="form-group">
				<label>Jumlah Anggota</label>
				<font color = "red" size="2px"><div id='myform_jumlah_anggota_errorloc' class="error_strings"></div></font>
				<select class="form-control" name="jumlah_anggota" id="jumlah_anggota">
					<option selected disabled></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>												
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="form-group">
				<label>Upload File</label>
				<label><i><font size="1px" color="brown"> File harus berekstensi .pdf dengan ukuran maksimal 5MB</font></i></label>
				<input type="file" name="userfile">
			</div>
			
		</td>
		<td width="10px">
		</td>
		<td width="500px">
		<div class="form-group">
			<label>Abstraksi</label>
			<font color = "red" size="2px"><div id='myform_abstraksi_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" name="abstraksi" rows="18" ></textarea>
			</div>
		</td>
		<td width = "10px">
		</td>
	<tr>
</table>
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