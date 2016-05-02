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
<form method="post" action="<?php echo base_url('index.php/notif/success_penilaian_monev_bulanan_p2km')?>" name="myform" id="myform" enctype="multipart/form-data">
	<h2><b>TOTAL NILAI : <?php echo "31"?></b></h2>
	Keterangan nilai rekomendasi:	
	<br />32 - 21: BISA DILAJUTKAN 
	<br />20 - 8 &nbsp:  DITUTUP
	<br />&nbsp
	<table >		
		<tr>
			<td>		
				<h4>Rekomendasi Sistem : <font color="green"><?php echo "Bisa dilanjutkan"?></font></h4>				
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
					<option>BISA DILAJUTKAN - membuat jadwal pencicilan pinjaman</option>
					<option>DITUTUP - Kembalikan semua pinjaman / aset dijual (Jadwalkan proses negoisasi tim P2KM)</option>				
				</select>
			</td>		
		</tr>	
		<tr>
			<td>
			<br />
			<font color="grey">Jika usaha tidak berjalan dan ditutup, sebutkan permasalahan yang dihadapi?(bisa memilih lebih dari satu jawaban)</font>
			</td>
		</tr>
		<tr>
			<td>
				<div class="form-group">				
					<select multiple class="form-control" name="alasan_gagal" >
						<option>1. Team work</option>
						<option>2. Ketua tidak mendukung</option>
						<option>3. Sulit mengatur waktu</option>
						<option>4. Tidak ada bimbingan</option>					
					</select>
				</div>
			</td>
		</tr>
		<tr>
			<td>		
				<h4>Catatan</h4>				
			</td>					
		</tr>
		<tr>
			<td>		
				<textarea class="form-control" rows="4" name="rekomendasi" ></textarea>
			</td>		
			
		</tr>
	</table>




<br />
<a href="<?php echo base_url('index.php/page/penilaian_monev_bulanan_p2km')?>" type="submit" class="btn btn-primary">Kembali</button></a>
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
