<style>
hr { 
    border-color: grey;
	
    
} 
</style>

<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white"> Monitoring dan Evaluasi</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />



<div class="jumbotron">
<h4><font color="#003399"><b>DATA MONEV PERIODE : <?php echo "1"?></b></font></h4>
<hr />
<form method="post" action="<?php echo base_url('index.php/page/penilaian_monev_dosbem_detail_action')?>" name="myform" id="myform" enctype="multipart/form-data">
	<table>
		<tr>
			<td width="500px">
				<label>Aspek Progress Kegiatan Usaha</label>			
			</td>				
			<td width="35px">
			</td>
			<td width="500px">
			<label>Komentar</label>
			</td>
		</tr>
		<input type="hidden" name="id_monev" value="<?php echo $id_monev?>"></input>	
		<tr>
			<td>				
				<?php echo "Apakah usaha masih berjalan?" ?>		
				<font color = "red" size="2px"><div id='myform_aspek1_errorloc' class="error_strings"></div></font>				
			</td>		
		</tr>
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev1" value="<?php echo $id_jawaban_pertanyaan_monev1?>"></input>			
				<select class="form-control" name="aspek1">																				
					<?php echo "<option selected hidden>".$jawaban1."</option>"?>
					<option>Berjalan dengan keuntungan terus meningkat (4)</option>
					<option>Berjalan dengan keuntungan stabil (3)</option>
					<option>Berjalan tetapi rugi (2)</option>
					<option>Tidak berjalan (1)</option>					
				</select>	
			</td>
			<td width="35px">
			</td>
			<td width="600px" >		
			<textarea class="form-control"  rows="2" name="komentar_aspek1" readOnly="true"><?php echo $komentar1?></textarea>
			</td>
		</tr>
		
		<tr>
			<td>
				<?php echo "Apakah Anda masih akan melanjutkan usaha ini?"?>
				<font color = "red" size="2px"><div id='myform_aspek2_errorloc' class="error_strings"></div></font>				
				
			</td>		
		</tr>
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev2" value="<?php echo $id_jawaban_pertanyaan_monev2?>"></input>	
				<select class="form-control" name="aspek2">
					<?php echo "<option selected hidden>".$jawaban2."</option>"?>
					<option>Saya lanjutkan dan terus saya kembangkan (4)</option>
					<option>Saya lanjutkan seadanya dulu (3)</option>
					<option>Saya lanjutkan tetapi dengan  beberapa syarat (2)</option>
					<option>Tidak saya lanjutkan (1)</option>					
				</select>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control"  rows="2" name="komentar_aspek2" readOnly="true"><?php echo $komentar2?></textarea>
			</td>
		</tr>
			
		<tr>
			<td width = "500px">					
				<hr />
				<br />
				<label>Aspek Kejelasan Mekanisme Pelaksanaan</label> 
				
			</td>			
		</tr>
		<tr>
			<td>
				<?php echo "Apakah rancangan yang dibuat dalam proposal bisa dilaksanakan?" ?>
				<font color = "red" size="2px"><div id='myform_aspek3_errorloc' class="error_strings"></div></font>				
			</td>		
		</tr>	
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev3" value="<?php echo $id_jawaban_pertanyaan_monev3?>"></input>	
				<select class="form-control" name="aspek3">																				
					<?php echo "<option selected hidden>".$jawaban3."</option>"?>
					<option>Berjalan tepat sesuai dengan proposal (4)</option>
					<option>Berjalan dengan sedikit modifikasi proposal (3)</option>
					<option>Berjalan dengan banyak modifikasi proposal (2)</option>
					<option>Tidak berjalan(1)</option>					
				</select>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek3" readOnly="true"><?php echo $komentar3?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Apakah ada upaya untuk memperbaiki pelaksanaan?" ?>
				<font color = "red" size="2px"><div id='myform_aspek4_errorloc' class="error_strings"></div></font>				
			</td>		
		</tr>	
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev4" value="<?php echo $id_jawaban_pertanyaan_monev4?>"></input>	
				<select class="form-control" name="aspek4">																				
					<?php echo "<option selected hidden>".$jawaban4."</option>"?>
					<option>Sudah diperbaiki dan sudah ada rencana perbaikan (4)</option>
					<option>Akan diperbaiki dan sudah ada rencana perbaikan (3)</option>
					<option>Akan diperbaiki tapi belum ada rencana perbaikan (2)</option>
					<option>Tidak ada upaya perbaikan (1)</option>					
				</select>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek4" readOnly="true"><?php echo $komentar4?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Bagaimanakah hasil usaha setelah dilakukan perbaikan?" ?>
				<font color = "red" size="2px"><div id='myform_aspek5_errorloc' class="error_strings"></div></font>				
			</td>		
		</tr>	
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev5" value="<?php echo $id_jawaban_pertanyaan_monev5?>"></input>	
				<select class="form-control" name="aspek5">																				
					<?php echo "<option selected hidden>".$jawaban5."</option>"?>
					<option>Profit meningkat(4)</option>
					<option>Profit stabil(3)</option>
					<option>Profit menurun (2)</option>
					<option>Tidak profit(1)</option>					
				</select>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
				<textarea class="form-control" rows="2" name="komentar_aspek5" readOnly="true"><?php echo $komentar5?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Apakah ada usaha pengembangan" ?>
				<font color = "red" size="2px"><div id='myform_aspek6_errorloc' class="error_strings"></div></font>				
			</td>		
		</tr>	
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev6" value="<?php echo $id_jawaban_pertanyaan_monev6?>"></input>	
				<select class="form-control" name="aspek6">																				
					<?php echo "<option selected hidden>".$jawaban6."</option>"?>
					<option>Sudah dilakukan pengembangan bisnis dan ada rencana pengembangan bisnis (4)</option>
					<option>Sudah ada pengembangan bisnis tetapi tidak ada rencana pengembangan bisnis (3)</option>
					<option>Belum ada pengembangan bisnis tetapi sudah ada rencana pengembangan bisnis (2)</option>
					<option>Tidak ada rencana pengembangan bisnis (1)</option>					
				</select>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek6" readOnly="true"><?php echo $komentar6?></textarea>
			</td>
		</tr>
		
		<tr>
			<td width = "500px">					
				<br /><hr />
				<label>Aspek Kondisi Finansial</label> 			
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Apakah kondisi keuangan bisnis Anda sehat?" ?>				
				<font color = "red" size="2px"><div id='myform_aspek7_errorloc' class="error_strings"></div></font>				
			</td>		
		</tr>	
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev7" value="<?php echo $id_jawaban_pertanyaan_monev7?>"></input>	
				<select class="form-control" name="aspek7">																				
					<?php echo "<option selected hidden>".$jawaban7."</option>"?>
					<option>Sangat sehat dan tercatat rapi (4)</option>
					<option>Sehat tetapi tidak tercatat (3)</option>
					<option>Tidak sehat dan tercatat rapi (2)</option>
					<option>Tidak sehat dan tidak tercatat rapi (1)</option>					
				</select>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek7" readOnly="true"><?php echo $komentar7?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Bagaimanakan kondisi aset Anda?" ?>		
				<font color = "red" size="2px"><div id='myform_aspek8_errorloc' class="error_strings"></div></font>				
			</td>		
		</tr>	
		<tr>
			<td><input type="hidden" name="id_jawaban_pertanyaan_monev8" value="<?php echo $id_jawaban_pertanyaan_monev8?>"></input>	
				<select class="form-control" name="aspek8">																				
					<?php echo "<option selected hidden>".$jawaban8."</option>"?>
					<option>Banyak aset dan terinventaris (4)</option>
					<option>Banyak aset tetapi tidak terinventaris (3)</option>
					<option>Tidak banyak aset tetapi tidak terinventaris (2)</option>
					<option>Tidak ada aset (1)</option>					
				</select>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek8" readOnly="true"><?php echo $komentar8?></textarea>
			</td>
		</tr>	
	</table>
	<br />
	<table >		
		<tr>
			<td>
				<hr />					
				<label>Aspek Dokumentasi</label>
				
			</td>		
		</tr>
		<tr>
			<td>
				<?php echo "Dokumentasi lokasi, produk, proses pengolahan, dan pelaksana" ?>
			</td>
		</tr>
		<tr>
			<td>
				<a  href="<?php echo base_url('uploads/techno_its/')?><?php echo $file ?>"><b><font >Lihat Laporan </font></b></a>
			</td>
		</tr>
	</div>
	</table>
	
	<hr />
		<table>
			<tr>
				<td width="1000px">			
					<label>Catatan</label>
				</td>
			</tr>
			<tr>
				<td width=\"1000px\" >
					<textarea class="form-control"  rows="4" name="catatan" ><?php echo $catatan?></textarea>
				</td>
			</tr>
		</div>
		</table>
	
	
	<br />
	<a href="<?php echo base_url('index.php/page/penilaian_monev_pilih_dosbem')?>" type="button" class="btn btn-primary">Kembali</button></a>
	

	<button type="submit" class="btn btn-primary">Submit</button>


	<br />
	
</form>
</html>


<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("aspek1","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek2","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek4","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek5","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek6","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek7","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek8","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("rekomendasi","req","ERROR: Kolom harus diisi!");
			
			
		//]]>
	</script>
	
	<!-- PDF viewer -->
	<script type="text/javascript" src="<?php echo base_url()?>/public/pdf-viewer/scripts/pdfobject.js"></script>
