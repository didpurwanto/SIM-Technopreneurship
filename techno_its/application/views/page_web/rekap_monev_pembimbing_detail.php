<style>
hr { 
    border-color: grey;
	
    
} 
</style>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white"> Monitoring dan Evaluasi</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />


<div class="jumbotron">
<h4><font color="#003399"><b>DATA MONEV PERIODE : <?php echo $periode_monev?></b></font></h4>
<hr />
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
		
		<tr>
			<td>				
				<?php echo "Apakah usaha masih berjalan?" ?>				
			</td>		
		</tr>
		<tr>
			<td>			
				<textarea class="form-control" rows="2" name="aspek1" readOnly="true"><?php echo $jawaban1?></textarea>
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
				
			</td>		
		</tr>
		<tr>
			<td>
				<textarea class="form-control" rows="2" name="aspek2" readOnly="true"><?php echo $jawaban2?></textarea>
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
				
			</td>		
		</tr>	
		<tr>
			<td>
				<textarea class="form-control" rows="2" name="aspek3" readOnly="true"><?php echo $jawaban3?></textarea>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek3" readOnly="true"><?php echo $komentar3?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Apakah ada upaya untuk memperbaiki pelaksanaan?" ?>
				
			</td>		
		</tr>	
		<tr>
			<td>
				<textarea class="form-control" rows="2" name="aspek4" readOnly="true"><?php echo $jawaban4?></textarea>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek4" readOnly="true"><?php echo $komentar4?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Bagaimanakah hasil usaha setelah dilakukan perbaikan?" ?>
				
			</td>		
		</tr>	
		<tr>
			<td>
				<textarea class="form-control" rows="2" name="aspek5" readOnly="true"><?php echo $jawaban5?></textarea>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
				<textarea class="form-control" rows="2" name="komentar_aspek5" readOnly="true"><?php echo $komentar5?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Apakah ada usaha pengembangan" ?>
				
			</td>		
		</tr>	
		<tr>
			<td>
				<textarea class="form-control" rows="2" name="aspek6" readOnly="true"><?php echo $jawaban6?></textarea>
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
				
			</td>		
		</tr>	
		<tr>
			<td>
				<textarea class="form-control" rows="2" name="aspek7" readOnly="true"><?php echo $jawaban7?></textarea>
			</td>
			<td width="35px"></td>
			<td width="600px" >		
			<textarea class="form-control" rows="2" name="komentar_aspek7" readOnly="true"><?php echo $komentar7?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "Bagaimanakan kondisi aset Anda?" ?>		
				
			</td>		
		</tr>	
		<tr>
			<td>
				<textarea class="form-control" rows="2" name="aspek8" readOnly="true"><?php echo $jawaban8?></textarea>
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
				<a  href="<?php echo base_url('uploads/techno_its/')?><?php echo $file?>"><b><font >Lihat Laporan </font></b></a>
			</td>
		</tr>
	</div>
	</table>
	<table >		
		<tr>
			<td>
				<hr />					
				<label>Catatan</label>
				
			</td>		
		</tr>
		<tr>
			<td width="1000px" >	
				<textarea class="form-control"  rows="4" name="catatan" readOnly="true"><?php echo $catatan?></textarea>
			</td>
		</tr>
	</div>
	</table>
	<br />
	<a href="<?php echo base_url('index.php/page/rekap_monev_pilih_pembimbing')?>" type="button" class="btn btn-primary">Kembali</button></a>



	<br />
	
	<!-- PDF viewer -->
	<script type="text/javascript" src="<?php echo base_url()?>/public/pdf-viewer/scripts/pdfobject.js"></script>
</html>