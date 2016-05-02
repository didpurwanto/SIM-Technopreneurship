<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>
<style>
hr { 
    border-color: grey;
    
} 
</style>
<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Monitoring dan Evaluasi</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<div class="jumbotron">

<form method="post" action="<?php echo base_url('index.php/page/monev_bulanan_hasil')?>" name="myform" id="myform" ">
<table>		
	<tr>
		<td width = "800px">					
			<label>Managemen Tim</label> 
			
			<br />Bagaimana struktur usaha?				
			<font color = "red" size="2px"><div id='myform_aspek1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek1" ></textarea>
			
			<br />Bagaimana peran masing-masing bagian?				
			<font color = "red" size="2px"><div id='myform_aspek2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek2" ></textarea>
			
			<br />Apa sajakah kesepakatan yang yang telah dibuat?				
			<font color = "red" size="2px"><div id='myform_aspek3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek3" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki organigram antara anggota tim				
			<br />Memiliki job description antara anggota tim untuk dimasukkan dalam buku SOP				
			<br />Memiliki komitmen tertulis antara anggota tim				
		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Stok Bahan Baku</label> 
			
			<br />Seberapa banyak kita membeli stok?				
			<font color = "red" size="2px"><div id='myform_aspek4_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek4" ></textarea>
			
			<br />Bagaimana membeli stok bahan baku ketika diawal usaha?				
			<font color = "red" size="2px"><div id='myform_aspek5_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek5" ></textarea>
			
			<br />Hal apa sajakah yang perlu dipertimbangkan?				
			<font color = "red" size="2px"><div id='myform_aspek6_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek6" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Format Buku CekStok untuk dimasukkan dalamBuku SOP
			<br />Memiliki Rencana Belanja Bahan Baku Rutin
			<br />Memiliki SOP Pembelian-Penyimpanan-Distribusi (untuk dimasukkan dalam Buku SOP)
			<br />Memiliki List  Supplier Bahan Baku (untuk 1 item, diusahakan minimal ada 2 supplier)
		
		</td>		
	<tr>
		
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Proses Produksi</label> 
			
			<br />Siapakah yg sebaiknya diawal melakukan proses produksi?				
			<font color = "red" size="2px"><div id='myform_aspek7_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek7" ></textarea>
			
			<br />Bagaimana membuat proses produksi efisien?				
			<font color = "red" size="2px"><div id='myform_aspek8_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek8" ></textarea>
			
			<br />Apakah alat produksi mutlak harus dimiliki diawal usaha?				
			<font color = "red" size="2px"><div id='myform_aspek9_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek9" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki SOP Produksi Efisien
			<br />Memiliki List Rencana Investasi Peralatan yang dapat meningkatkan efisiensi produksi		
		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Distribusi Produk</label> 
			
			<br />Bagaimana distribusi bahan baku kerumah produksi?				
			<font color = "red" size="2px"><div id='myform_aspek10_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek10" ></textarea>
			
			<br />Bagaimana strategi distribusi kekonsumen (delivery order)?				
			<font color = "red" size="2px"><div id='myform_aspek11_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek11" ></textarea>
			
			<br />Berapa minimum produk bisa diantar?				
			<font color = "red" size="2px"><div id='myform_aspek12_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek12" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Perhitungan Biaya Distribusi Bahan Baku &Barang Jadi (untuk konsumen)			
			<br />Memiliki Armada Distribusi (hakmilik/sewa)			
		</td>		
	<tr>
	
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Marketing</label> 
			
			<br />Apa sajakah strategi marketing yang dilakukan?				
			<font color = "red" size="2px"><div id='myform_aspek131_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek13" ></textarea>
			
			<br />Berapa budget marketing tiap bulan?				
			<font color = "red" size="2px"><div id='myform_aspek17_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek17" ></textarea>
			
			<br />Bagaimana mengukur keberhasilan marketing yang dilakukan?				
			<font color = "red" size="2px"><div id='myform_aspek151_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek15" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Rencana Strategi Marketing Standar& Strategi Marketing Bulanan (atau eventual) selama setahun
			<br />Memiliki Budget Marketing yang sesuai dengan impact yang ingin dicapai
			<br />Memiliki Metode Pengukuran Keberhasilan Marketing

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Customer Service</label> 
			
			<br />Apa yang dilakukan kalau ada konsumen marah?				
			<font color = "red" size="2px"><div id='myform_aspek16_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek16" ></textarea>
			
			<br />Bagaimana mengetahui tingkat kepuasan konsumen?				
			<font color = "red" size="2px"><div id='myform_aspek171_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek17" ></textarea>
			
			<br />Pelayanan apa yang diberikan setelah barang terjual?				
			<font color = "red" size="2px"><div id='myform_aspek18_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek18" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki List FAQ (Frequently Asked Question) mengenai segala hal yang berhubungan dengan pelayanan konsumen (untuk dimasukkan dalamBuku SOP)

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Research and Development (RnD)</label> 
			
			<br />Seperti apakah program pengembangan produk?				
			<font color = "red" size="2px"><div id='myform_aspek19_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek19" ></textarea>
			
			<br />Apa yang menjadi pertimbangan arah RnD?				
			<font color = "red" size="2px"><div id='myform_aspek20_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek20" ></textarea>
			
			<br />Siapakah yang melakukan program RnD?				
			<font color = "red" size="2px"><div id='myform_aspek21_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek21" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Rencana Pengembangan Produk Selama Satu Tahun (mengapa 1 tahun karena berhubungan dengan budgetting plan &tutup buku akhir tahun)
			<br />Memiliki SDM RnD

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Alokasi Pendanaan Start Up</label> 
			
			<br />Berapa biaya yang digunakan untuk start up?				
			<font color = "red" size="2px"><div id='myform_aspek22_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek22" ></textarea>
			
			<br />Barang-barang apa saja yang dibeli saat start up?				
			<font color = "red" size="2px"><div id='myform_aspek23_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek23" ></textarea>
			
			<br />Bagaiamana cara menghemat biaya start up?				
			<font color = "red" size="2px"><div id='myform_aspek24_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek24" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Budgetting Plan Selama 1 bulan awal (detail per hari) dan juga Selama 1 Tahun (Per bulan)			
		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Lokasi Perusahaan</label> 
			
			<br />Dimanakah proses produksi berjalan saat diawal?				
			<font color = "red" size="2px"><div id='myform_aspek25_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek25" ></textarea>
			
			<br />Apakah perlu kita memilih posisi strategis?				
			<font color = "red" size="2px"><div id='myform_aspek26_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek26" ></textarea>
			
			<br />Apa pertimbangan memilih lokasi?				
			<font color = "red" size="2px"><div id='myform_aspek27_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek27" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Rumah Produksi Khusus yang berbeda dengan lokasi penjualan (bisajugasebagaigudang)
			<br />Memiliki List Target Lokasi yang diinginkan (Alamat lengkap& CP yang bisa dihubungi)
			<br />Memiliki Standar Pemilihan Lokasi (untuk dimasukkan dalam Buku SOP)

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Pencatatan Keuangan</label> 
			
			<br />Bagaiamanakah format pencatatan keuangan yang dilakukan?				
			<font color = "red" size="2px"><div id='myform_aspek28_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek28" ></textarea>
			
			<br />Apa sajakah yang harus dicatat?				
			<font color = "red" size="2px"><div id='myform_aspek29_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek29" ></textarea>
			
			<br />Bagaimana mengurangi faktor resiko, pencatatan tidak sama dengan barang yang terjual?				
			<font color = "red" size="2px"><div id='myform_aspek30_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek30" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Menggunakan komputerisasi dalam pencatatan keuangan (minimal ms Excel, lebih dianjurkan software akuntansi)
			<br />Memiliki Buku Jurnal Tertulis (minimal tentang uang keluar masuk)
			<br />Memiliki Rekening Tabungan Bisnis
			<br />Memiliki Sistem Validasi Omset-Stok (untuk memastikan kejujuran karyawan)

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Brand, Tagline, dan Positioning Usaha</label> 
			
			<br />Apa alasan memilih brand saat ini?				
			<font color = "red" size="2px"><div id='myform_aspek31_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek31" ></textarea>
			
			<br />Apakah tips memilih logo yang tepat?				
			<font color = "red" size="2px"><div id='myform_aspek32_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek32" ></textarea>
			
			<br />Apa tagline-nya? Dan apa pengaruhnya dengan positioning?				
			<font color = "red" size="2px"><div id='myform_aspek33_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek33" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Marketing Tools (Logo, Brosur, Namecard, dll)

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Management Karyawan</label> 
			
			<br />Bagaimana cara merekrut karyawan?				
			<font color = "red" size="2px"><div id='myform_aspek34_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek34" ></textarea>
			
			<br />Bagaimana cara perhitungan gaji karyawan diawal?				
			<font color = "red" size="2px"><div id='myform_aspek35_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek35" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki standar kriteria karyawan
			<br />Mengetahui besaran gaji karyawan
			<br />Memiliki alat ukur kinerja karyawan

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Harga Jual dan Profit</label> 
			
			<br />Bagaimana cara menentukan harga jual?				
			<font color = "red" size="2px"><div id='myform_aspek36_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek36" ></textarea>
			
			<br />Seberapa besar profit yang bisa diambil?				
			<font color = "red" size="2px"><div id='myform_aspek37_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek37" ></textarea>
			
			<br />Apabila ada pesaing dg harga murah, apa yang harus dilakukan?				
			<font color = "red" size="2px"><div id='myform_aspek38_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek38" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki simulasi budgetting Plan dan Proyeksi Keuntungan (dianjurkan menggunakan Ms Excel)

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Legalitas Usaha</label> 
			
			<br />Apakah dari awal sudah berbadan hukum?				
			<font color = "red" size="2px"><div id='myform_aspek39_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek39" ></textarea>
			
			<br />Apakah keuntungan &kerugian punya badan hukum?				
			<font color = "red" size="2px"><div id='myform_aspek40_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek40" ></textarea>
			
			<br />Apakah sudah mendaftarkan merek? Bgaiamana caranya?				
			<font color = "red" size="2px"><div id='myform_aspek41_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek41" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki Badan Usaha (CV, UD, Koperasi, atau PT)
			<br />Telah melakukan daftar merk (atasnama pribadi atau badan usaha) availabilitas merk bisa di cekpada website dgip.go.id

		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Pesaing</label> 
			
			<br />Apa sajakah pesaing usaha ini?				
			<font color = "red" size="2px"><div id='myform_aspek42_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek42" ></textarea>
			
			<br />Bagaiamana strategi menghadapi mereka?				
			<font color = "red" size="2px"><div id='myform_aspek43_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek43" ></textarea>
			
			<br />Apakah pernah terjadi konflik?				
			<font color = "red" size="2px"><div id='myform_aspek44_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek44" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Memiliki List Kompetitor lengkap dengan deskripsinya (termasuk SWOT mereka)

		</td>		
	<tr>
	
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Penghasilan Owner</label> 
			
			<br />Bagaimana cara menentukan gaji owner?				
			<font color = "red" size="2px"><div id='myform_aspek13_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek13" ></textarea>
			
			<br />Seberapa besar laba ditahan untuk keberlangsungan usaha?				
			<font color = "red" size="2px"><div id='myform_aspek14_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek14" ></textarea>
			
			<br />Apakah ada pengaruh kinerja antara owner yang digaji dengan tidak digaji?				
			<font color = "red" size="2px"><div id='myform_aspek15_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="2" name="aspek15" ></textarea>
			
		</td>		
		<td width="50px">
		</td>
		<td width = "500px">					
			<label>Catatan :</label> 			
			<br />Ada kesepakatan yang tertuang dalam komitmen terlulis di awal mengenai formulasi gaji owner-laba ditahan, bagi hasil akhir tahun, dll

		</td>		
	<tr>
	
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Kendala</label> 
			
			<br />Uraikan Kendala – Kendala Selama Berbisnis:				
			
			<textarea class="form-control" rows="5" name="kendala" ></textarea>
			
		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
</table>

<table >		
		<tr>
			<td>		
				<label>Aspek Dokumentasi Kemajuan Usaha 6 Bulanan</label>
				<font color = "red" size="2px"><div id='myform_rekomendasi_errorloc' class="error_strings"></div></font>
			</td>		
		</tr>
		<tr>
			<td>
				Dokumentasi file
			</td>
		</tr>
		<tr>
			<td>
				<div class="form-group">

					<label><i><font size="1px" color="brown"> File harus berekstensi .pdf</font></i></label>
					<input type="file" name="userfile">
				</div>
			</td>
		</tr>
	</div>
</table>
<!--h3><font color="#003399">Feedback Pembimbing dan Tim Pokja P2KM</font></h3>
<table>
	<tr>
		<td width = "800px">					
			<label><br />Saran dan Catatan Dosen Pembimbing</label> 			
			<textarea disabled class="form-control" rows="5" name="saran_pembimbing" ></textarea>
			
		</td>		
	<tr>
	
	<tr>
		<td>
			<hr/>
		</td>
	</tr>
	
	<tr>
		<td width = "800px">					
			<label><br />Saran dan Catatan Tim Pokja P2KM</label> 
			<textarea disabled  class="form-control" rows="5" name="saran_p2km" ></textarea>
			
		</td>		
	<tr>
</table>
<br /-->
<a href="<?php echo base_url('index.php/page/pilih_monev_bulanan')?>" class="btn btn-primary">Kembali</a>
<button type="submit" class="btn btn-primary">Submit</button>
</form>



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
			frmvalidator.addValidation("aspek9","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek10","req","ERROR: Kolom harus diisi!");		
			frmvalidator.addValidation("aspek11","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek12","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek13","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek14","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek15","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek16","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek17","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek18","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek19","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek20","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek21","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek22","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek23","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek24","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek25","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek26","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek27","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek28","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek29","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek30","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek31","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek32","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek33","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek34","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek35","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek36","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek37","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek38","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek39","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek40","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek41","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek42","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek43","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek44","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek45","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek46","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek47","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek48","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek49","req","ERROR: Kolom harus diisi!");
			
			
			
		//]]>
	</script>

</html>