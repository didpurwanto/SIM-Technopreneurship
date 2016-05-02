<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Techno ITS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("public/template")?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url("public/template")?>/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url("public/template")?>/css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("public/template")?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("public/template")?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	

	<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
		type="text/javascript" xml:space="preserve">
	</script>


</head>

<body>
    <div id="wrapper">
	<nav class="nabar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>"><font color="grey" size="4px">Techno ITS </font><font size="1px">Versi Beta 1.0</font></a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">                                
								<a href="<?php echo base_url()?>"> 
									<img href="#" height = "100px" width="100px" src="<?php echo base_url('public/img/logo.png')?>">
								</a>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <li>							                            
							<a href="<?php echo base_url()?>"></i> Home </span></a>							
                        </li>
						<li>							                            
							<a href="<?php echo base_url('index.php/page/berita')?>"></i> Berita </span></a>							
                        </li>
						<li>							                            
							<a href="<?php echo base_url('index.php/akun/login_mhs')?>"></i> Login </span></a>							
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">  
			<div class="row" style="background-color:#003399">
				<div class="col-lg-12" >
					
					<h1><font color="white">Register</font></h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<br />
		
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            Silahkan melengkapi form pendaftaran!
                        </div>
						
						<div class="panel-body">
							<form role="form" action="<?php echo base_url("index.php/akun/registrasi_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
											<div class="form-group">
											<label>NRP Ketua</label>                                            
												<font color = "red" size="2px"><div id='myform_nrpketua_errorloc' class="error_strings"></div></font>
												<input class="form-control" name="nrpketua" type="text" >
											</div>
											<div class="form-group">
												<label>Nama Ketua</label>
												<font color = "red" size="2px"><div id='myform_namaketua_errorloc' class="error_strings"></div></font>
												<input class="form-control" name="namaketua" type="text">                                            
											</div>
											<div class="form-group">
												<label>Telepon</label>
												<font color = "red" size="2px"><div id='myform_telepon_errorloc' class="error_strings"></div></font>
												<input class="form-control" name="telepon" type="text">                                            
											</div>
											<div class="form-group">
												<label>Email</label>
												<font color = "red" size="2px"><div id='myform_email_errorloc' class="error_strings"></div></font>
												<input class="form-control" name="email" type="text">                                            
											</div>
											
											<div class="form-group">
												<label>Jurusan</label>											
												<font color = "red" size="2px"><div id='myform_jurusan_errorloc' class="error_strings"></div></font>
												<select class="form-control" name="jurusan">																				
													<option selected disabled></option>
													<?php 
													foreach($jurusan as $rows)
													echo "<option value=\"".$rows['id_jurusan']."\">".$rows['nama_jurusan']."</option>"
													?>
												</select>			
											</div>									
											
											<div class="form-group">
												<label>Upload KTM <font color="red" size="1px"><br />Maksimal ukuran 2 MB dengan resolusi 1024 x 768 pixel</font></label
												<font color = "red" size="2px"><div id='myform_file1_errorloc' class="error_strings"></div></font>											
												<input type="file" name='file1' id='file1'>
											</div>
											
											
											<hr />
											<div class="form-group">
												<label>Tahun</label>
												<font color = "red" size="2px"><div id='myform_tahun_errorloc' class="error_strings"></div></font>
												<?php	
													echo "<select class=\"form-control\" name=\"tahun\">";							
													echo "<option selected disabled></option>";
													for($i=2015 ; $i<2020 ; $i++)
													{
														
															echo "<option>$i</option>";
													
													}							
														echo "</select>";
												?>
											</div>
											<div class="form-group">
												<label>Skema</label>											
												<font color = "red" size="2px"><div id='myform_skema_errorloc' class="error_strings"></div></font>
												<select class="form-control" name="skema">																				
													<option selected disabled></option>
													<option value='1'>PMW</option>
													<option value='2'>BRI</option>												
												</select>			
											</div>
											<hr />
											<div class="form-group">
												<label>Password</label>
												<font color = "red" size="2px"><div id='myform_password_errorloc' class="error_strings"></div></font>
												<input class="form-control" type="password" name="password">                                            
											</div>
											<div class="form-group">
												<label>Konfirmasi Password</label>
												<font color = "red" size="2px"><div id='myform_confpassword_errorloc' class="error_strings"></div></font>
												<input class="form-control" type="password" name="confpassword">                                            
											</div>	
											<hr />	
											<input type="submit" class="btn btn-primary"></button>
							</form>	
                        </div>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url("public/template")?>/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("public/template")?>/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url("public/template")?>/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url("public/template")?>/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url("public/template")?>/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url("public/template")?>/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
	


</body>

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("nrpketua","req","ERROR: NRP Ketua harus diisi!");			
			frmvalidator.addValidation("namaketua","req","ERROR: Nama Ketua harus diisi!");						
			frmvalidator.addValidation("jurusan","req","ERROR: Jurusan Ketua harus diisi!");						
			frmvalidator.addValidation("email","req","ERROR: Email harus diisi!");			
			frmvalidator.addValidation("telepon","req","ERROR: Telepon harus diisi!");			
			frmvalidator.addValidation("skema","req","ERROR: Skema harus diisi!");			
			frmvalidator.addValidation("tahun","req","ERROR: Tahun harus diisi!");			
			
			frmvalidator.addValidation("password","req","ERROR: Password harus diisi!");					
			
			frmvalidator.addValidation("confpassword","req","ERROR: Konfirmasi password harus diisi!");
			frmvalidator.addValidation("confpassword","eqelmnt=password","Password dan konfirmasi password harus sama!");
			
		//]]>
	</script>

</html>
