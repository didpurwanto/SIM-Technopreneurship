<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Rekap Penilaian Monitoring dan Evaluasi</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />
<a href="<?php echo base_url('index.php/page/rekap_monev_pilih_dosbem')?>"> <font size="3px">&nbspKembali</font></a>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tabel Data Pengguna
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Ketua</th>		
								<th>Judul</th>
								<th>Pembimbing</th>
								<th>Tindakan</th>	
							</tr>
						</thead>
						<?php 
						$i=1;
						foreach($rekap as $rows)
						{
							echo "<tbody>";
							echo "<tr>";
								echo "<td align=\"center\">".$i."</td>";
								$i++;
								echo "<td align=\"center\">".$rows['tanggal_memasukan_monev']."</td>";								
								echo "<td align=\"center\">".$rows['nrp']."</td>";								
								echo "<td align=\"center\">".$rows['judul_proposal']."</td>";	
								echo "<td align=\"center\">".$rows['nama_doskarbem']."</td>";									
								echo "<td align=\"center\">";
								echo "<a href=\"".base_url('index.php/page/rekap_monev_dosbem_detail')."/".$rows['id_pengaju_proposal']."/".$rows['periode_monev']."\"type=\"submit\" class=\"btn btn-primary\">Lihat Detail</a>";
								echo "</td>";	
							echo "</tr>";
							
						echo "</tbody>";
						}
						?>	
						
						
						
							
					</table>
				</div>
				<!-- /.table-responsive -->
				
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->