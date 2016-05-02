
<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Status Proposal</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<a href="<?php echo base_url('index.php/page/rekap_proposal_semua_doskarbem')?>"> <font size="3px">&nbspKembali</font></a>

<div class="jumbotron">
	
	<table>
		<tr>
			<td width="250px">
				<h3><b>STATUS PROPOSAL</b></h3>
			</td>
			<td width="10px"><h3><b>:</b></h3>
			</td>
			<td><h3><b><?php echo $nama_status ?></b></h3>
			</td>
		</tr>
	</table>	
	<hr />
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
</div>

<script>
		<!-- PDF viewer -->
	<script type="text/javascript" src="<?php echo base_url()?>/public/pdf-viewer/scripts/pdfobject.js"></script>
</script>