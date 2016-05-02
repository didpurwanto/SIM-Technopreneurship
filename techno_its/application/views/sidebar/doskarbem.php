<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIM Kewirausahaan</title>

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
                <a class="navbar-brand" href="#"><font color="grey" size="4px">Techno ITS </font><font size="1px">Versi Beta 1.0</font></a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">                                
								<a href="<?php echo base_url('index.php/page/dashboard')?>"> 
									<img href="#" height = "100px" width="100px" src="<?php echo base_url('public/img/logo.png')?>">
								</a>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
						
						
						<?php 						
						if($this->session->userdata('hak_akses')<=4) 
						{
							echo "<li>";
								if($this->session->userdata('hak_akses')==4 || $this->session->userdata('hak_akses')==1)
								{									
									echo "<li>";
									echo "<a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> Konfigurasi<span class=\"fa arrow\"></span></a>";
										echo "<ul class=\"nav nav-second-level\">";
											echo "<li><a href=\" ".base_url('index.php/page/update_password_doskarbem')." \"> Ubah Password </a></li>";
											if($this->session->userdata('hak_akses')==4)
												echo "<li><a href=\" ".base_url('index.php/page/tambah_tahun_skema')." \" > Tambah Tahun dan Skema</a></li>";
											if($this->session->userdata('hak_akses')==1)
												echo "<li><a href=\" ".base_url('index.php/page/setting_penilaian_pilih')." \"> Konfigurasi Penilaian</a></li>";
										echo "</ul>";
									echo "<li>";									
								}
								
								echo "<a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Proposal<span class=\"fa arrow\"></span></a>";
								echo "<ul class=\"nav nav-second-level\">";
									if($this->session->userdata('hak_akses')==1) 
									{
										echo "<li>";
										echo "<a href=\" ".base_url('index.php/page/penilaian_proposal_pilih')." \"> Menilai Proposal</a>";
										echo "</li>";
									}
									
									echo "<li>";
										echo "<a href=\" ".base_url('index.php/page/rekap_proposal_semua_doskarbem')." \"> Rekap Proposal</a>";
									echo "</li>";								
								echo "</ul>";
							echo "</li>";
						}
							
							
						if($this->session->userdata('hak_akses')==4) 
						{
							echo "<li>";
								echo "<a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Kelola Akun<span class=\"fa arrow\"></span></a>";
								echo "<ul class=\"nav nav-second-level\">";
									echo "<li>";
										echo "<a href=\" ".base_url('index.php/page/approve_akun')." \">Approve Akun</a>";
									echo "</li>";
								echo "</ul>";
							echo "</li>";
							echo "<li>";
								 echo "<a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i>Kelola Ijazah<span class=\"fa arrow\"></span></a>";
								echo "<ul class=\"nav nav-second-level\">";
									echo "<li>";
										echo "<a href=\" ".base_url('index.php/page/update_status_ijazah_pilih')." \">Ubah Status Ijazah</a>";
									echo "</li>";
									echo "<li>";
										echo "<a href=\" ".base_url('index.php/page/penyelesaian_usaha_pilih')." \">Rekap Penyelesaian Usaha</a>";
									echo "</li>";
								echo "</ul>";
							echo "</li>";
						}
						
						if($this->session->userdata('hak_akses')== 1 || $this->session->userdata('hak_akses')== 3  || $this->session->userdata('hak_akses')== 2) 
						{
							echo "<li>";
								echo "<a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i> Monev<span class=\"fa arrow\"></span></a>";
								echo "<ul class=\"nav nav-second-level\">";
									if($this->session->userdata('hak_akses')==1 || $this->session->userdata('hak_akses')==3 ) 
									{
										echo "<li>";
											echo "<a href=\" ".base_url('index.php/page/penilaian_monev_pilih_dosbem')." \">Menilai Monev</a>";
										echo "</li>";								
										echo "<li>";
											echo "<a href=\" ".base_url('index.php/page/rekap_monev_pilih_dosbem')." \">Rekap Monev</a>";
										echo "</li>";
										
										
									}
									else if($this->session->userdata('hak_akses')==2)
									{
										echo "<li>";
											echo "<a href=\" ".base_url('index.php/page/rekap_monev_pilih_pembimbing')." \">Rekap Monev</a>";
										echo "</li>";								
									}
									
								echo "</ul>";
							echo "</li>	";					
						}
						
						if($this->session->userdata('hak_akses')==4) 						
						{
							echo "<li>";
								echo "<a  href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i>Pengunduran Diri<span class=\"fa arrow\"></span></a>";
								echo "<ul class=\"nav nav-second-level\">";
									echo "<li>";
										echo "<a  href=\" ".base_url('index.php/page/persetujuan_pengunduran_diri_pilih')."\"> Persetujuan Pengunduran Diri</a>";
									echo "</li>";
									echo "<li>";
										echo "<a href=\" ".base_url('index.php/page/rekap_pengunduran_diri_pilih')." \"> Rekap Pengunduran Diri</a>";
									echo "</li>";
								echo "</ul>";
							echo "</li>";							
						}
						
						if($this->session->userdata('hak_akses')==4 || $this->session->userdata('hak_akses')==3) 
						{
							echo "<li><a href=\" ".base_url('index.php/page/tambah_berita')."\"><i class=\"fa fa-edit fa-fw\"></i> Tambah Berita</a>";
						}
												
						echo "<li>";
                            echo "<a href=\" ".base_url()." \"><i class=\"fa fa-dashboard fa-fw\"></i> Logout</a>";
                        echo "</li> ";
						
					?>		
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">            
            <?php $this->load->view($isi); ?>  <!--LOAD PTG-->
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

</html>
