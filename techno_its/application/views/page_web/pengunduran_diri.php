<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
	type="text/javascript" xml:space="preserve">
</script>

<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Pengunduran Diri</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<form method="post" action="<?php echo base_url('index.php/page/pengunduran_diri_action')?>" name="myform" id="myform" enctype="multipart/form-data">
<!-- data kelompok -->
<div class="col-lg-7">
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
				<td ><?php echo $judul ?>
				</td>			
			</tr>
			<tr>
				<td >Dosen Pembimbing
				</td>
				<td > :
				</td>
				<td ><?php echo $nama_doskarbem ?>
				</td>			
			</tr>
			<tr>			
				<td width="180px">Dana yang diajukan
				</td>
				<td width="10px"> :
				</td>
				<td><?php echo $dana_diajukan ?>
				</td>			
			</tr>
			<tr>			
				<td width="180px">Dana yang disetujui
				</td>
				<td width="10px"> :
				</td>
				<td><?php echo $dana_disetujui ?>
				</td>			
			</tr>
			<tr>
				<td>Abstraksi
				</td>
				<td > :
				</td >
				<td><?php echo $abstraksi ?>
				</td>			
			</tr>
			<tr>
				<td>File Proposal
				</td>
				<td > :
				</td >
				<td>
				<a  href="<?php echo base_url('uploads/techno_its')?><?php echo $path_proposal?>"><b><font >proposal.pdf </font></b></a>
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
				<td ><?php echo $nama ?>
				</td>			
			</tr>
			<tr>			
				<td width="180px">Jurusan
				</td>
				<td width="10px"> :
				</td>
				<td><?php echo $jurusan ?>
				</td>			
			</tr>
			
			<tr>
				<td>NRP
				</td>
				<td > :
				</td >
				<td><?php echo $nrp ?>
				</td>			
			</tr>
			<tr>
				<td>Telepon
				</td>
				<td > :
				</td >
				<td><?php echo "$telepon" ?>
				</td>			
			</tr>
			<tr>
				<td>Email
				</td>
				<td > :
				</td >
				<td><?php echo "$email_mahasiswa" ?>
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
		<?php
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
			?>		
		
		
		</p>


		<!--mengundurkan diri-->
		Menyatakan tidak dapat melanjutkan (mengundurkan diri) dari program kewirausahaan dengan alasan :
		<table>	
			<tr>
				<td width = "700px">
					<div class="form-group">
						
						<font color = "red" size="2px"><div id='myform_alasan_errorloc' class="error_strings"></div></font>
						<textarea class="form-control" rows="4" name="alasan" placeholder="Tulislah alasan pengunduran diri kelompok Anda"></textarea>
					</div>
					
					<div class="form-group">
						<label>Upload File Pengunduran Diri</label>
						<label><i><font size="1px" color="brown"> File harus berekstensi zip atau rar dengan ukuran maksimal 5MB</font></i></label>
						<input type="file" name="userfile">
					</div>
					
				</td>
				
			<tr>
		</table>
		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("alasan","req","ERROR: Alasan harus diisi!");			
				
			
			
			
		//]]>
	</script>