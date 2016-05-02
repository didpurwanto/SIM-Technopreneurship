<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Tambah Tahun dan Skema</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<div class="row">	
		<div class="panel panel-default">			
			<div class="panel-body">
				<div class="row">                                
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Tahun dan Skema
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
								<form role="form" action="<?php echo base_url("index.php/page/tambah_tahun_bt")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
									<table>
										<tr>
											<td>
												<label >Pilih tahun</label>
												<font color = "red" size="2px"><div id='myform_tahun_errorloc' class="error_strings"></div></font>
											</td>										
										</tr>
										<tr>
											<td>
												<?php	
														echo "<select class=\"form-control\" name=\"tahun\">";							
														echo "<option selected disabled></option>";
														for($i=2015 ; $i<2040 ; $i++)
														{
															
																echo "<option>$i</option>";
														
														}							
															echo "</select>";
													?>
											</td>
										</tr>
										
										<tr>
											<td>
												<label >Nama Skema</label>
												<font color = "red" size="2px"><div id='myform_skema_errorloc' class="error_strings"></div></font>
											</td>										
										</tr>
										<tr>
											<td>
												<input class="form-control" name="skema">
											</td>
										</tr>
									</table>
								
																
									<br />
									<input type="submit" class="btn btn-primary"></button>
								</form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
				
				<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rekap Tahun dan Skema
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Skema</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td >1</td>
                                            <td>2015</td>
                                            <td>PMW</td>
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
            </div>
            <!-- /.row -->
				
			
			</div>
		</div>
		<!-- /.panel -->

</div>
<!-- /.row -->

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();
					
			frmvalidator.addValidation("tahun","req","ERROR: Tahun  harus diisi!");					
			frmvalidator.addValidation("skema","req","ERROR: Skema harus diisi!");					
			
			
		//]]>
	</script>
