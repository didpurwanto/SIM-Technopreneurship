<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Approve Akun</h1>					
	</div>
	<!-- /.col-lg-12 -->
</div>	

<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Validasi Data Akun
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#general" data-toggle="tab">General</a>
					</li>
					<li><a href="#ketua" data-toggle="tab">Data Ketua</a>
					</li>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane fade in active" id="general">
						<h4>Data General</h4>
						<table>
							<tr>
								<td width="100px"> Tahun
								</td>
								<td width="20px"> :
								</td>
								<td> <?php echo $tahun?>
								</td>
							</tr>							
							<tr>
								<td width="200px"> id pengaju proposal
								</td>
								<td width="20px"> :
								</td>
								<td> <?php echo $id_pengaju_proposal?>
								</td>
							</tr>
							
							<tr>
								<td width="100px"> Skema
								</td>
								<td width="20px"> :
								</td>
								<td> <?php echo $nama_skema?>
								</td>
							</tr>
						</table>
					</div>
					<div class="tab-pane fade" id="ketua">
						<h4>Data Ketua</h4>
						<table>
							<tr>								
								<td rowspan="3"> <img src="<?php echo base_url('uploads/techno_its/')."/".$path_ktm?>" width="80px" height="100">
								</td>
							</tr>							
						</table>
						<br />
						<table>
							<tr>
								<td width="100px"> Nama
								</td>
								<td width="20px"> :
								</td>
								<td> <?php echo $nama?>
								</td>
							</tr>
							<tr>
								<td width="100px"> NRP
								</td>
								<td width="20px"> :
								</td>
								<td> <?php echo $nrp?>
								</td>
							</tr>
							<tr>
								<td width="100px"> Jurusan
								</td>
								<td width="20px"> :
								</td>
								<td> <?php echo $nama_jurusan?>
								</td>
							</tr>								
						</table>
					</div>		
				</div>
			</div>
			<!-- /.panel-body -->			            
	</div>

<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tindakan
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">			
			<a href="<?php echo base_url('index.php/page/approve_akun_action/')."/".$id_pengaju_proposal."/"?>" type="button" class="btn btn-outline btn-primary" value="1">Approve</a>
			<a href type="button" class="btn btn-outline btn-danger" value="2">Disapprove</a>

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
</div>	


			