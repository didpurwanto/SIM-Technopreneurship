<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Approve Akun</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Kelompok</th>
								<th>Ketua</th>
								<th>Tahun</th>								
								<th>Skema</th>	
								<th>Tindakan</th>	
							</tr>
						</thead>
						<?php
							$i=1;
							foreach($result as $data)
							{
								echo "<tr class=\"odd gradeX\" align=\"center\">";
								echo "<td>".$i."</td>";
									$i = $i+1;
								echo "<td align='left'>".$data['id_pengaju_proposal']."</td>";
								echo "<td align='left'>".$data['nrp']."</td>";
								echo "<td align='left'>".$data['tahun_pengaju_proposal']."</td>";
								echo "<td align='left'>".$data['nama_skema']."</td>";
								
								echo "<form role=\"form\" action=\"".base_url('index.php/page/approve_akun_bt')."/".$data['tahun_pengaju_proposal']."/".$data['id_skema']."/".$data['id_pengaju_proposal']."/\"> ";												
								echo "<td><button type=\"submit\" class=\"btn btn-primary\">Lihat Detail</button></td>";
								echo "</form>";	
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