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
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pengecekan Berkas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
								<form role="form" action="<?php echo base_url("index.php/page/tambah_tahun_bt")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
									<table>
										<div class="form-group">
                                            <label>Cek kelengkapan berkas mahasiswa</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Proposal usaha
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Laporan kemajuan usaha
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Form 4 / Formulir pengunduran diri
                                                </label>
                                            </div>
											<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Surat pernyataan
                                                </label>
                                            </div>
											<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Kwitansi pembayaran resmi
                                                </label>
                                            </div>
                                        </div>
									</table>									
									<button type="submit" class="btn btn-primary">Setujui Pengunduran Diri</button>
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
                            Data Kelompok Pengaju Proposal
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                
								<div class="jumbotron">		
									<table>
										<tr>
											<td colspan="3">
												<b>DATA PROPOSAL</b>
											</td>
										</tr>
									</table>
									<br />
									<table>		
										<tr>
											<td >Judul
											</td>
											<td > :
											</td>
											<td ><?php echo "Lalala" ?>
											</td>			
										</tr>
										<tr>
											<td >Dosen Pembimbing
											</td>
											<td > :
											</td>
											<td ><?php echo "lalala" ?>
											</td>			
										</tr>
										<tr>			
											<td width="180px">Dana yang diajukan
											</td>
											<td width="10px"> :
											</td>
											<td><?php echo "100" ?>
											</td>			
										</tr>
										<tr>			
											<td width="180px">Dana yang disetujui
											</td>
											<td width="10px"> :
											</td>
											<td><?php echo "10" ?>
											</td>			
										</tr>
										<tr>
											<td>Abstraksi
											</td>
											<td > :
											</td >
											<td><?php echo "asd" ?>
											</td>			
										</tr>
										<tr>
											<td>File Proposal
											</td>
											<td > :
											</td >
											<td>
											<a  href="<?php echo base_url('uploads/techno_its')?><?php echo "path"?>"><b><font >proposal.pdf </font></b></a>
											</td>			
										</tr>
										
									</table>
									<br />
									<table>
										<tr>
											<td colspan="3">
												<b>DATA KETUA</b>
											</td>
										</tr>
									</table>
									<br />
									<table>		
										<tr>
											<td >Nama
											</td>
											<td > :
											</td>
											<td ><?php echo "nama" ?>
											</td>			
										</tr>
										<tr>			
											<td width="180px">Jurusan
											</td>
											<td width="10px"> :
											</td>
											<td><?php echo "juru" ?>
											</td>			
										</tr>
										
										<tr>
											<td>NRP
											</td>
											<td > :
											</td >
											<td><?php echo "nrp" ?>
											</td>			
										</tr>
										<tr>
											<td>Telepon
											</td>
											<td > :
											</td >
											<td><?php echo "telepon" ?>
											</td>			
										</tr>
										<tr>
											<td>Email
											</td>
											<td > :
											</td >
											<td><?php echo "email_mahasiswa" ?>
											</td>			
										</tr>
									</table>
									<br />
									<table>
										<tr>
											<td colspan="3">
												<b>DATA ANGGOTA</b>
											</td>
										</tr>
									</table>
									<br />
									<?php /*
										foreach($result2 as $rows)
										{
											echo "<table>";
											echo "<tr>";
												echo "<td >Nama";
												echo "</td>";
												echo "<td>:";
												echo "</td>";
												echo "<td >".$rows['nama'];
												echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<td width=\"180px\">Jurusan";
												echo "</td>";
												echo "<td width=\"10px\"> :";
												echo "</td>";
												echo "<td>".$rows['nama_jurusan'];
												echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<td >NRP";
												echo "</td>";
												echo "<td>:";
												echo "</td>";
												echo "<td >".$rows['nrp'];
												echo "</td>";
											echo "</tr>";
											echo "<tr>";
												echo "<td >Telepon";
												echo "</td>";
												echo "<td>:";
												echo "</td>";
												echo "<td >".$rows['telepon'];
												echo "</td>";
											echo "</tr>";
											echo "<tr>";
												echo "<td >Email";
												echo "</td>";
												echo "<td>:";
												echo "</td>";
												echo "<td >".$rows['email_mahasiswa'];
												echo "</td>";
											echo "</tr>";
											echo "</table>";
											echo "<br />";
										}
										*/?>	
										
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
