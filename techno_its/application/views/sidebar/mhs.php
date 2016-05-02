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
                <a class="navbar-brand" href="<?php echo base_url('index.php/page/dashboard')?>"><font color="grey" size="4px">Techno ITS </font><font size="1px">Versi Beta 1.0</font></a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">                                
								<a href="<?php echo base_url('index.php/page/dashboard_mhs')?>"> 
									<img href="<?php echo base_url('index.php/page/dashboard')?>" height = "100px" width="100px" src="<?php echo base_url('public/img/logo.png')?>">
								</a>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li><a href="#"><i class="fa fa-wrench fa-fw"></i> Ubah Profil Kelompok<span class="fa arrow"></a>							
						<ul class="nav nav-second-level">
							<li><a href="<?php echo base_url("index.php/page/update_password_mhs")?>">Ubah Password</a>							
							</li>
							<li><a href="<?php echo base_url("index.php/page/ganti_ketua")?>"> Ganti Ketua Kelompok</a></li>
							
						</ul>
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Proposal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
								<li>
                                    <?php
                                        if($this->session->userdata('status')=='A1')
                                            echo "<a href=".base_url('index.php/page/status_proposal').">Melihat Status Proposal</a>";
                                    ?>
                                </li>
								<li>
                                    <?php
                                        if($this->session->userdata('status')=='A0')
                                            echo "<a href=".base_url('index.php/page/mengajukan_proposal').">Mengajukan Proposal</a>";
                                    ?>
                                    
                                </li>
                            </ul>
                        </li>
						
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Monev<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
								<li>
                                    <a href="<?php echo base_url("index.php/page/monev_bulanan_mhs")?>">Mengisi Monev</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url("index.php/page/rekap_monev_pilih_mhs")?>">Rekap Monev</a>
                                </li>
                            </ul>
                        </li>						
						
						<li>
							<a  href="#"><i class="fa fa-edit fa-fw"></i>Penyelesaian Usaha<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
									<a class="" href="<?php echo base_url("index.php/page/penyelesaian_usaha")?>"> Mengisi Form Penyelesaian Usaha</a>
								</li>
                            </ul>
						</li>
						
						<li>
							<a  href="#"><i class="fa fa-sitemap fa-fw"></i>Pengunduran Diri<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
									<a class="" href="<?php echo base_url("index.php/page/pengunduran_diri")?>"> Mengisi Form Pengunduran Diri</a>
								</li>
                            </ul>
						</li>
						
						<li>
                            <a class="" href="<?php echo base_url("index.php/akun/logout")?>"><i class="fa fa-dashboard fa-fw"></i> Logout</a>
                        </li> 
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
