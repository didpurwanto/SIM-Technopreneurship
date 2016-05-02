<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Data Pengguna</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

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
								<th>ID</th>
								<th>NRP</th>
								<th>Nama</th>								
							</tr>
						</thead>						
						
						<?php
							$i=1;
							foreach($result as $data)
							{
								echo "<tr class=\"odd gradeX\" align=\"center\">";
								echo "<td>".$i."</td>";
									$i = $i+1;
								echo "<td align='left'>".$data['id']."</td>";
								echo "<td align='left'>".$data['nrp']."</td>";
								echo "<td align='left'>".$data['nama']."</td>";																		
							}
						?>
							
					</table>
				</div>
				
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->