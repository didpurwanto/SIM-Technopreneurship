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
<b>Perkembangan Omset  </b>

<form method="post" action="<?php echo base_url('index.php/page/monev_bulanan_hasil')?>" name="myform" id="myform" enctype="multipart/form-data">
<table  >
	<tr> 
		<td width="100px">Minggu ke 1
		</td>
		<td width="220px"><input class="form-control" name="omset_1" placeholder="Tulis jumlah omsetnya" value="<?php echo $jumlah_omset_minggu1?>" readOnly="true">
		</td>
		<td width="9px">
		<td width="220px"><input class="form-control" name="keuntungan_1" placeholder="Tulis jumlah keuntungannya" value="<?php echo $jumlah_keuntungan_minggu1?>" readOnly="true">
		</td>
		
	</tr>
	<tr>
		<td>&nbsp
		</td>
		<td><font color = "red" size="2px"><div id='myform_omset_1_errorloc' class="error_strings"></div></font>
		</td>
		<td width="9px">
		<td><font color = "red" size="2px"><div id='myform_keuntungan_1_errorloc' class="error_strings"></div></font>
		</td>
	</tr>
	<tr> 
		<td width="100px">Minggu ke 2
		</td>
		<td width="220px"><input class="form-control" name="omset_2" placeholder="Tulis jumlah omsetnya" value=" <?php echo $jumlah_omset_minggu2 ?>" readOnly="true">
		</td>
		<td width="9px">
		<td width="220px"><input class="form-control" name="keuntungan_2" placeholder="Tulis jumlah keuntungannya" value=" <?php echo $jumlah_keuntungan_minggu2?>" readOnly="true">
		</td>		
	</tr>
	<tr>
		<td>&nbsp
		</td>
		<td><font color = "red" size="2px"><div id='myform_omset_2_errorloc' class="error_strings"></div></font>
		</td>
		<td width="9px">
		<td><font color = "red" size="2px"><div id='myform_keuntungan_2_errorloc' class="error_strings"></div></font>
		</td>
	</tr>
	<tr> 
		<td width="100px">Minggu ke 3
		</td>
		<td width="220px"><input class="form-control" name="omset_3" placeholder="Tulis jumlah omsetnya" value="<?php echo $jumlah_omset_minggu3?>" readOnly="true">
		</td>
		<td width="9px">
		<td width="220px"><input class="form-control" name="keuntungan_3" placeholder="Tulis jumlah keuntungannya" value="<?php echo $jumlah_keuntungan_minggu3?>" readOnly="true">
		</td>
	</tr>
	<tr>
		<td>&nbsp
		</td>
		<td><font color = "red" size="2px"><div id='myform_omset_3_errorloc' class="error_strings"></div></font>
		</td>
		<td width="9px">
		<td><font color = "red" size="2px"><div id='myform_keuntungan_3_errorloc' class="error_strings"></div></font>
		</td>
	</tr>
	<tr> 
		<td width="100px">Minggu ke 4
		</td>
		<td width="220px"><input class="form-control" name="omset_4" placeholder="Tulis jumlah omsetnya" value="<?php echo $jumlah_omset_minggu4?>" readOnly="true">
		</td>
		<td width="9px">
		<td width="220px"><input class="form-control" name="keuntungan_4" placeholder="Tulis jumlah keuntungannya" value="<?php echo $jumlah_keuntungan_minggu4?>" readOnly="true">
		</td>
	</tr>
	<tr>
		<td>&nbsp
		</td>
		<td><font color = "red" size="2px"><div id='myform_omset_4_errorloc' class="error_strings"></div></font>
		</td>
		<td width="9px">
		<td><font color = "red" size="2px"><div id='myform_keuntungan_4_errorloc' class="error_strings"></div></font>
		</td>
	</tr>
	<tr> 
		<td width="100px">Minggu ke 5
		</td>
		<td width="220px"><input class="form-control" name="omset_5" placeholder="Tulis jumlah omsetnya" value="<?php echo $jumlah_keuntungan_minggu5?>" readOnly="true">		
		</td>
		<td width="9px">
		</td>
		<td width="220px"><input class="form-control" name="keuntungan_5" placeholder="Tulis jumlah keuntungannya" value="<?php echo $jumlah_keuntungan_minggu5?>" readOnly="true">
		</td>
	</tr>
	<tr>
		<td>&nbsp
		</td>
		<td><font color = "red" size="2px"><div id='myform_omset_5_errorloc' class="error_strings"></div></font>
		</td>
		<td width="9px">
		<td><font color = "red" size="2px"><div id='myform_keuntungan_5_errorloc' class="error_strings"></div></font>
		</td>
	</tr>
</table>
<hr />
<table>		
	<tr>
		<td width = "800px">					
			<label>Managemen Tim</label> 
			
			<br />Bagaimana struktur usaha?				
			<font color = "red" size="2px"><div id='myform_aspek1_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek1_1" readOnly="true"><?php echo $jawaban_1_1 ?></textarea>
			
			<br />Bagaimana peran masing-masing bagian?				
			<font color = "red" size="2px"><div id='myform_aspek1_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek1_2" readOnly="true"><?php echo $jawaban_1_2 ?></textarea>
			
			<br />Apa sajakah kesepakatan yang yang telah dibuat?				
			<font color = "red" size="2px"><div id='myform_aspek1_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek1_3" readOnly="true"><?php echo $jawaban_1_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek2_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek2_1" readOnly="true"><?php echo $jawaban_2_1 ?></textarea>
			
			<br />Bagaimana membeli stok bahan baku ketika diawal usaha?				
			<font color = "red" size="2px"><div id='myform_aspek2_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek2_2" readOnly="true"><?php echo $jawaban_2_2 ?></textarea>
			
			<br />Hal apa sajakah yang perlu dipertimbangkan?				
			<font color = "red" size="2px"><div id='myform_aspek2_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek2_3" readOnly="true"><?php echo $jawaban_2_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek3_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek3_1" readOnly="true"><?php echo $jawaban_3_1 ?></textarea>
			
			<br />Bagaimana membuat proses produksi efisien?				
			<font color = "red" size="2px"><div id='myform_aspek3_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek3_2" readOnly="true"><?php echo $jawaban_3_2 ?></textarea>
			
			<br />Apakah alat produksi mutlak harus dimiliki diawal usaha?				
			<font color = "red" size="2px"><div id='myform_aspek3_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek3_3" readOnly="true"><?php echo $jawaban_3_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek4_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek4_1" readOnly="true"><?php echo $jawaban_4_1 ?></textarea>
			
			<br />Bagaimana strategi distribusi kekonsumen (delivery order)?				
			<font color = "red" size="2px"><div id='myform_aspek4_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek4_2" readOnly="true"><?php echo $jawaban_4_2 ?></textarea>
			
			<br />Berapa minimum produk bisa diantar?				
			<font color = "red" size="2px"><div id='myform_aspek4_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek4_3" readOnly="true"><?php echo $jawaban_4_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek5_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek5_1" readOnly="true"><?php echo $jawaban_5_1 ?></textarea>
			
			<br />Berapa budget marketing tiap bulan?				
			<font color = "red" size="2px"><div id='myform_aspek5_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek5_2" readOnly="true"><?php echo $jawaban_5_2 ?></textarea>
			
			<br />Bagaimana mengukur keberhasilan marketing yang dilakukan?				
			<font color = "red" size="2px"><div id='myform_aspek5_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek5_3" readOnly="true"><?php echo $jawaban_5_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek6_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek6_1" readOnly="true"><?php echo $jawaban_6_1 ?></textarea>
			
			<br />Bagaimana mengetahui tingkat kepuasan konsumen?				
			<font color = "red" size="2px"><div id='myform_aspek6_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek6_2" readOnly="true"><?php echo $jawaban_6_2 ?></textarea>
			
			<br />Pelayanan apa yang diberikan setelah barang terjual?				
			<font color = "red" size="2px"><div id='myform_aspek6_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek6_3" readOnly="true"><?php echo $jawaban_6_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek7_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek7_1" readOnly="true"><?php echo $jawaban_7_1 ?></textarea>
			
			<br />Apa yang menjadi pertimbangan arah RnD?				
			<font color = "red" size="2px"><div id='myform_aspek7_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek7_2" readOnly="true"><?php echo $jawaban_7_2 ?></textarea>
			
			<br />Siapakah yang melakukan program RnD?				
			<font color = "red" size="2px"><div id='myform_aspek7_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek7_3" readOnly="true"><?php echo $jawaban_7_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek8_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek8_1" readOnly="true"><?php echo $jawaban_8_1 ?></textarea>
			
			<br />Barang-barang apa saja yang dibeli saat start up?				
			<font color = "red" size="2px"><div id='myform_aspek8_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek8_2" readOnly="true"><?php echo $jawaban_8_2 ?></textarea>
			
			<br />Bagaiamana cara menghemat biaya start up?				
			<font color = "red" size="2px"><div id='myform_aspek8_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek8_3" readOnly="true"><?php echo $jawaban_8_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek9_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek9_1" readOnly="true"><?php echo $jawaban_9_1 ?></textarea>
			
			<br />Apakah perlu kita memilih posisi strategis?				
			<font color = "red" size="2px"><div id='myform_aspek9_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek9_2" readOnly="true"><?php echo $jawaban_9_2 ?></textarea>
			
			<br />Apa pertimbangan memilih lokasi?				
			<font color = "red" size="2px"><div id='myform_aspek9_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek9_3" readOnly="true"><?php echo $jawaban_9_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek10_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek10_1" readOnly="true"><?php echo $jawaban_10_1 ?></textarea>
			
			<br />Apa sajakah yang harus dicatat?				
			<font color = "red" size="2px"><div id='myform_aspek10_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek10_2" readOnly="true"><?php echo $jawaban_10_2 ?></textarea>
			
			<br />Bagaimana mengurangi faktor resiko, pencatatan tidak sama dengan barang yang terjual?				
			<font color = "red" size="2px"><div id='myform_aspek10_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek10_3" readOnly="true"><?php echo $jawaban_10_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek11_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek11_1" readOnly="true"><?php echo $jawaban_11_1 ?></textarea>
			
			<br />Apakah tips memilih logo yang tepat?				
			<font color = "red" size="2px"><div id='myform_aspek11_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek11_2" readOnly="true"><?php echo $jawaban_11_2 ?></textarea>
			
			<br />Apa tagline-nya? Dan apa pengaruhnya dengan positioning?				
			<font color = "red" size="2px"><div id='myform_aspek11_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek11_3" readOnly="true"><?php echo $jawaban_11_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek12_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek12_1" readOnly="true"><?php echo $jawaban_12_1 ?></textarea>
			
			<br />Bagaimana cara perhitungan gaji karyawan diawal?				
			<font color = "red" size="2px"><div id='myform_aspek12_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek12_2" readOnly="true"><?php echo $jawaban_12_2 ?></textarea>

			<br />Bagaimana cara mengontrol karyawan?				
			<font color = "red" size="2px"><div id='myform_aspek12_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek12_3" readOnly="true"><?php echo $jawaban_12_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek13_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek13_1" readOnly="true"><?php echo $jawaban_13_1 ?></textarea>
			
			<br />Seberapa besar profit yang bisa diambil?				
			<font color = "red" size="2px"><div id='myform_aspek13_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek13_2" readOnly="true"><?php echo $jawaban_13_2 ?></textarea>
			
			<br />Apabila ada pesaing dg harga murah, apa yang harus dilakukan?				
			<font color = "red" size="2px"><div id='myform_aspek13_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek13_3" readOnly="true"><?php echo $jawaban_13_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek14_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek14_1" readOnly="true"><?php echo $jawaban_14_1 ?></textarea>
			
			<br />Apakah keuntungan &kerugian punya badan hukum?				
			<font color = "red" size="2px"><div id='myform_aspek14_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek14_2" readOnly="true"><?php echo $jawaban_14_2 ?></textarea>
			
			<br />Apakah sudah mendaftarkan merek? Bgaiamana caranya?				
			<font color = "red" size="2px"><div id='myform_aspek14_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek14_3" readOnly="true"><?php echo $jawaban_14_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek15_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek15_1" readOnly="true"><?php echo $jawaban_15_1 ?></textarea>
			
			<br />Bagaiamana strategi menghadapi mereka?				
			<font color = "red" size="2px"><div id='myform_aspek15_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek15_2" readOnly="true"><?php echo $jawaban_15_2 ?></textarea>
			
			<br />Apakah pernah terjadi konflik?				
			<font color = "red" size="2px"><div id='myform_aspek15_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek15_3" readOnly="true"><?php echo $jawaban_15_3 ?></textarea>
			
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
			<font color = "red" size="2px"><div id='myform_aspek16_1_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek16_1" readOnly="true"><?php echo $jawaban_16_1 ?></textarea>
			
			<br />Seberapa besar laba ditahan untuk keberlangsungan usaha?				
			<font color = "red" size="2px"><div id='myform_aspek16_2_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek16_2" readOnly="true"><?php echo $jawaban_16_2 ?></textarea>
			
			<br />Apakah ada pengaruh kinerja antara owner yang digaji dengan tidak digaji?				
			<font color = "red" size="2px"><div id='myform_aspek16_3_errorloc' class="error_strings"></div></font>
			<textarea class="form-control" rows="4" name="aspek16_3" readOnly="true" > <?php echo $jawaban_16_3 ?> </textarea>
			
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
			
			<textarea class="form-control" rows="5" name="kendala" readOnly="true"><?php echo $kendala?></textarea>
			
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
				<label>Aspek Dokumentasi</label>
				<font color = "red" size="2px"><div id='myform_rekomendasi_errorloc' class="error_strings"></div></font>
			</td>		
		</tr>
		<tr>
			<td>
				Dokumentasi foto-foto dan lainnya
			</td>
		</tr>
		<tr>
			<td><a  href="<?php echo base_url('uploads/techno_its')?><?php echo $path_file_monev_1_bulan?>"><b><font >Download Laporan Monev </font></b></a>
			</td>
		</tr>
		
	</div>
	<tr>
		<td width = "800px">					
			<label><br />Saran dan Catatan Dosen Pembimbing</label> 
			
			<textarea class="form-control" rows="5" name="kendala" ></textarea>
			
		</td>		
	<tr>
</table>
	<br />

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
			
			frmvalidator.addValidation("omset_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("keuntungan_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("omset_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("keuntungan_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("omset_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("keuntungan_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("omset_4","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("keuntungan_4","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("omset_5","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("keuntungan_5","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek1_1","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek1_2","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek1_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek2_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek2_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek2_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek3_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek3_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek3_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek4_1","req","ERROR: Kolom harus diisi!");		
			frmvalidator.addValidation("aspek4_2","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek4_3","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek5_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek5_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek5_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek6_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek6_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek6_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek7_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek7_2","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek7_3","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek8_1","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek8_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek8_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek9_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek9_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek9_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek10_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek10_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek10_3","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek11_1","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek11_2","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek11_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek12_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek12_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek12_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek13_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek13_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek13_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek14_1","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek14_2","req","ERROR: Kolom harus diisi!");			
			frmvalidator.addValidation("aspek14_3","req","ERROR: Kolom harus diisi!");						
			frmvalidator.addValidation("aspek15_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek15_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek15_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek16_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek16_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek16_3","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek17_1","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek17_2","req","ERROR: Kolom harus diisi!");
			frmvalidator.addValidation("aspek17_3","req","ERROR: Kolom harus diisi!");
			
		//]]>
	</script>

</html>