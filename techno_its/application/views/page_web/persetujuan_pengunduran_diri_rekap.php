<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Persetujuan Pengunduran Diri</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />
<a href="<?php echo base_url('index.php/page/rekap_pengunduran_diri_pilih')?>"> <font size="3px">&nbspKembali</font></a>

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
								<th>ID Kelompok</th>		
								<th>Judul</th>
								<th>Pembimbing</th>
								<th>Tindakan</th>	
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center">1</td>
								<td align="center">22/07/2015</td>								
								<td align="center">5111100702</td>								
								<td align="center">Peternakan Elektrik</td>								
								<td align="center">Dosen A</td>									
								<td align="center">
								<form role="form" method="post" action="<?php echo base_url('index.php/page/persetujuan_pengunduran_diri_detail')?>">
									<button type="submit" class="btn btn-primary">Lihat Detail</button>;
								</form>
								</td>	
							</tr>
							
						</tbody>
						
						
						
							
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