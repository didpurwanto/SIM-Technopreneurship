<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Rekap Semua Proposal</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>								
								
								<th>Tahun</th>		
								<th>Skema</th>		
								<th>Ketua</th>		
								<th>Judul</th>
								<th>Pembimbing</th>								
								<th>Status</th>								
								<th>Tindakan</th>	
							</tr>
						</thead>
						<tbody>
							<?php
							$i=1;
							foreach($result as $data)
							{
								echo "<tr class=\"odd gradeX\" align=\"center\">";
								echo "<td>".$i."</td>";
									$i = $i+1;
								
								echo "<td align='left'>".$data['tahun_pengaju_proposal']."</td>";
								echo "<td align='left'>".$data['nama_skema']."</td>";
								
								echo "<td align='left'>".$data['nrp']."</td>";
								echo "<td align='left'>".$data['judul_proposal']."</td>";
								echo "<td align='left'>".$data['dosen_pembimbing']."</td>";
								echo "<td align='left'>".$data['nama_status']."</td>";
								
								echo "<form role=\"form\" action=\"".base_url('index.php/page/rekap_proposal_semua_detail_doskarbem')."/".$data['id_pengaju_proposal']."/".$data['tahun_pengaju_proposal']."/".$data['skema']."/".$data['nrp']."\"> ";												
								echo "<td><button type=\"submit\" class=\"btn btn-primary\">Lihat Detail</button></td>";
								echo "</form>";	
							}
						?>
							
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