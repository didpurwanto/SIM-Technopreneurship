<div class="row" style="background-color:#003399">
	<div class="col-lg-12" >
		
		<h1><font color="white">Mengajukan Proposal</font></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<br />

<table >
	<tr>
		<td width="1000px">		
			<b><font color="black">INPUT DATA PROPOSAL =></font></b>
			<b><font color="black">INPUT DATA ANGGOTA =></font></b>
			<b><font color="#003399"> HASIL INPUT DATA PROPOSAL</font></b>
			<hr />
		</td>
	</tr>
</table>
<div class="jumbotron">
	<h2><font color="#003399">Pengajuan Proposal Berhasil</font></h2>
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
			<td ><?php echo $judul?>
			</td>			
		</tr>
		<tr>
			<td >Dosen Pembimbing
			</td>
			<td > :
			</td>
			<td ><?php echo $nama_doskarbem?>
			</td>			
		</tr>
		<tr>			
			<td width="180px">Dana yang diajukan
			</td>
			<td width="10px"> :
			</td>
			<td><?php echo $dana?>
			</td>			
		</tr>
		<tr>
			<td>Abstraksi
			</td>
			<td > :
			</td >
			<td><?php echo $abstraksi?>
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
			<td ><?php echo $nama?>
			</td>			
		</tr>
		<tr>			
			<td width="180px">Jurusan
			</td>
			<td width="10px"> :
			</td>
			<td><?php echo $jurusan?>
			</td>			
		</tr>
		
		<tr>
			<td>NRP
			</td>
			<td > :
			</td >
			<td><?php echo $nrp?>
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
			echo "</table>";
			echo "<br />";
		}
		?>		
		
	<br />
	
	</p>
</div>

<script>
	
</script>