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
			<b><font color="black">INPUT DATA PROPOSAL =></font></b>
			<b><font color="#003399">INPUT DATA ANGGOTA =></font></b>
			<b><font color="black"> HASIL INPUT DATA PROPOSAL</font></b>
			<hr />
		</td>
	</tr>
</table>
<form method="POST" action ="<?php echo base_url('index.php/page/mengajukan_proposal_hasil')?>" name="myform" id="myform" enctype="multipart/form-data">
		
	<?php
		echo "<input type=\"hidden\" name=\"jumlah_anggota\" value=\"".$jumlah_anggota."\"";
		for ($i = 1 ; $i <= $jumlah_anggota ; $i++)
		{
			echo "<table>";
				echo "<tr>";
					echo "<td>";
						echo "<br />";
						echo "<div class=\"form-group\">";
						echo "<label>NRP Anggota $i</label>";
							echo "<font color = \"red\" size=\"2px\"><div id='myform_nrp_anggota".$i."_errorloc' class=\"error_strings\"></div></font>";
							echo "<input class=\"form-control\" name=\"nrp_anggota".$i."\" type=\"text\" >";
						echo "</div>";
						echo "<div class=\"form-group\">";
							echo "<label>Nama Anggota $i</label>";
							echo "<font color = \"red\" size=\"2px\"><div id='myform_nama_anggota".$i."_errorloc' class=\"error_strings\"></div></font>";
							echo "<input class=\"form-control\" name=\"nama_anggota".$i."\" type=\"text\">";
						echo "</div>";
						echo "<div class=\"form-group\">";
							echo "<label>Telepon</label>";
							echo "<font color = \"red\" size=\"2px\"><div id='myform_telepon".$i."_errorloc' class=\"error_strings\"></div></font>";
							echo "<input class=\"form-control\" name=\"telepon".$i."\" type=\"text\">";
						echo "</div>";
						echo "<div class=\"form-group\">";
							echo "<label>Email</label>";
							echo "<font color = \"red\" size=\"2px\"><div id='myform_email".$i."_errorloc' class=\"error_strings\"></div></font>";
							echo "<input class=\"form-control\" name=\"email".$i."\" type=\"text\">";
						echo "</div>";
						echo "<div class=\"form-group\">";
							echo "<label>Jurusan Anggota $i</label>";
							echo "<font color = \"red\" size=\"2px\"><div id='myform_jurusan_anggota".$i."_errorloc' class=\"error_strings\"></div></font>";
							echo "<select class=\"form-control\" name=\"jurusan_anggota".$i."\">";
								echo "<option selected disabled></option>";
								foreach($jurusan as $rows)
								{
									echo "<option value=\"".$rows['id_jurusan']."\">".$rows['nama_jurusan']."</option>";
								}
							echo "</select>";
						echo "</div>";							
						
						echo "<div class=\"form-group\">";
							echo "<label>Upload KTM <font color=\"red\" size=\"1px\"><br />Maksimal ukuran 2 MB dengan resolusi 1024 x 768 pixel</font></label"
							echo "<font color = \"red\" size=\"2px\"><div id='myform_file1_errorloc' class=\"error_strings\"></div></font>";
							echo "<input type=\"file\" name='file".$i."' id='file".$i."'>";
						echo "</div>";					
						echo "<hr />";
					echo "</td>";
				echo "</tr>";
			echo "</table>";
		}	
	?>	

		
	<a type="submit" href="<?php echo base_url('index.php/page/mengajukan_proposal')?>" class="btn btn-primary">&nbspKembali&nbsp</a>
	<button type="submit" class="btn btn-primary">Simpan dan Lanjutkan</button>
	
</form>

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("nrp_anggota1","req","ERROR: NRP anggota 1 harus diisi!");			
			frmvalidator.addValidation("nama_anggota1","req","ERROR: Nama Anggota 1 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota1","req","ERROR: Jurusan Anggota 1 harus diisi!");			
			frmvalidator.addValidation("telepon1","req","ERROR: Telepon Anggota 1 harus diisi!");			
			frmvalidator.addValidation("email1","req","ERROR: Email Anggota 1 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota2","req","ERROR: NRP anggota 2 harus diisi!");	
			frmvalidator.addValidation("nama_anggota2","req","ERROR: Nama Anggota 2 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota2","req","ERROR: Jurusan Anggota 2 harus diisi!");			
			frmvalidator.addValidation("telepon2","req","ERROR: Telepon Anggota 2 harus diisi!");			
			frmvalidator.addValidation("email2","req","ERROR: Email Anggota 2 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota3","req","ERROR: NRP anggota 3 harus diisi!");	
			frmvalidator.addValidation("nama_anggota3","req","ERROR: Nama Anggota 3 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota3","req","ERROR: Jurusan Anggota 3 harus diisi!");	
			frmvalidator.addValidation("telepon3","req","ERROR: Telepon Anggota 3 harus diisi!");			
			frmvalidator.addValidation("email3","req","ERROR: Email Anggota 3 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota4","req","ERROR: NRP anggota 4 harus diisi!");	
			frmvalidator.addValidation("nama_anggota4","req","ERROR: Nama Anggota 4 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota4","req","ERROR: Jurusan Anggota 4 harus diisi!");	
			frmvalidator.addValidation("telepon4","req","ERROR: Telepon Anggota 4 harus diisi!");			
			frmvalidator.addValidation("email4","req","ERROR: Email Anggota 4 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota5","req","ERROR: NRP anggota 5 harus diisi!");	
			frmvalidator.addValidation("nama_anggota5","req","ERROR: Nama Anggota 5 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota5","req","ERROR: Jurusan Anggota 5 harus diisi!");	
			frmvalidator.addValidation("telepon5","req","ERROR: Telepon Anggota 5 harus diisi!");			
			frmvalidator.addValidation("emai5","req","ERROR: Email Anggota 5 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota6","req","ERROR: NRP anggota 6 harus diisi!");	
			frmvalidator.addValidation("nama_anggota6","req","ERROR: Nama Anggota 6 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota6","req","ERROR: Jurusan Anggota 6 harus diisi!");	
			frmvalidator.addValidation("telepon6","req","ERROR: Telepon Anggota 6 harus diisi!");			
			frmvalidator.addValidation("email6","req","ERROR: Email Anggota 6 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota7","req","ERROR: NRP anggota 7 harus diisi!");	
			frmvalidator.addValidation("nama_anggota7","req","ERROR: Nama Anggota 7 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota7","req","ERROR: Jurusan Anggota 7 harus diisi!");	
			frmvalidator.addValidation("telepon7","req","ERROR: Telepon Anggota 7 harus diisi!");			
			frmvalidator.addValidation("email7","req","ERROR: Email Anggota 7 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota8","req","ERROR: NRP anggota 8 harus diisi!");	
			frmvalidator.addValidation("nama_anggota8","req","ERROR: Nama Anggota 8 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota8","req","ERROR: Jurusan Anggota 8 harus diisi!");	
			frmvalidator.addValidation("telepon8","req","ERROR: Telepon Anggota 8 harus diisi!");			
			frmvalidator.addValidation("email8","req","ERROR: Email Anggota 8 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota9","req","ERROR: NRP anggota 9 harus diisi!");	
			frmvalidator.addValidation("nama_anggota9","req","ERROR: Nama Anggota 9 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota9","req","ERROR: Jurusan Anggota 9 harus diisi!");	
			frmvalidator.addValidation("telepon9","req","ERROR: Telepon Anggota 9 harus diisi!");			
			frmvalidator.addValidation("email9","req","ERROR: Email Anggota 9 harus diisi!");			
			
			frmvalidator.addValidation("nrp_anggota10","req","ERROR: NRP anggota 10 harus diisi!");	
			frmvalidator.addValidation("nama_anggota10","req","ERROR: Nama Anggota 10 harus diisi!");			
			frmvalidator.addValidation("jurusan_anggota10","req","ERROR: Jurusan Anggota 10 harus diisi!");	
			frmvalidator.addValidation("telepon10","req","ERROR: Telepon Anggota 10 harus diisi!");			
			frmvalidator.addValidation("email10","req","ERROR: Email Anggota 10 harus diisi!");			
			
		//]]>
	</script>