<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Update Data Diri</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-primary">
			<form role="form" action = "<?php echo base_url('index.php/pages/update_data_diri_bt')?>" method="POST">
				<div class="panel-heading">			 
					<div class="row">					
						<div class="col-xs-12 text-left">                                    
							<div class="form-group">
								<label>ID Akun</label>
								<input class="form-control" name="id" readOnly="true" value="">
							</div>
							<div class="form-group">
								<label>Skema</label>
								<input class="form-control" name="skema" readOnly="true" value="">
							</div>
							<div class="form-group">
								<label>NRP</label>
								<input class="form-control" name="nrp" value="">
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input class="form-control"  name="nama" value="">
							</div>
							
							
						</div>
					</div>
				</div>			
				
				<div class="panel-footer" >	
					
					<div class="clearfix"> <br /></div>
					<div class="col-xs-30 text-right">   
					<button type="submit" class="btn btn-primary">Update</button>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>
			</form>
		</div>
	</div>               							
</div>