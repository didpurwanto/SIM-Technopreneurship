<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Penilaian Monitoring dan Evaluasi</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<div class="jumbotron">
<form method="post" action="<?php echo base_url('index.php/page/penilaian_monev_rekomendasi_bt')?>" name="myform" id="myform" enctype="multipart/form-data">
	<h2><b>TOTAL NILAI : <?php echo $nilai_monev;?></b></h2>
	Keterangan nilai rekomendasi:	
	<br />32 - 21: BISA DILANJUTKAN 
	<br />20 - 8 &nbsp:  DITUTUP
	<br />&nbsp
	<table >		
		<tr><input type="hidden" name="id_monev" value="<?php echo $id_monev;?>"></input>
			<td>		
				<?php 
				if($nilai_monev >20)
					echo "<h4>Rekomendasi Sistem : <font color=\"green\">Bisa dilanjutkan</font></h4>";
				else
					echo "<h4>Rekomendasi Sistem : <font color=\"red\">DITUTUP</font></h4>";
				?>				
			</td>
		</tr>
		<tr>
			<td>		
				<h4>Rekomendasi Reviewer</h4>
				<font color = "red" size="2px"><div id='myform_rekom_errorloc' class="error_strings"></div></font>
			</td>		
		</tr>		
		<tr>
			<td>		
				<select class="form-control" name="rekom">						
					<option selected disabled></option>
					<option value="1">BISA DILANJUTKAN - membuat jadwal pencicilan pinjaman</option>
					<option value="0">DITUTUP - Kembalikan semua pinjaman / aset dijual (Jadwalkan proses negoisasi tim P2KM)</option>				
				</select>
			</td>		
		</tr>	
		<tr>
			<td>
			<br />
			<font color="grey">Jika usaha tidak berjalan dan ditutup, sebutkan permasalahan yang dihadapi?</font>
			</td>
		</tr>
		<tr>
			<td>
				<div class="form-group">				
					<textarea class="form-control" name="alasan_gagal" rows="2" ></textarea>
				</div>
			</td>
		</tr>
		
	</table>




<br />

<button type="submit" class="btn btn-primary">Submit Rekomendasi</button>


</form>



<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("rekom","req","ERROR: Kolom harus diisi!");
			
			
		//]]>
	</script>
	
	<!-- PDF viewer -->
	<script type="text/javascript" src="http://localhost/maktabah-online/public/pdf-viewer/scripts/pdfobject.js"></script>
