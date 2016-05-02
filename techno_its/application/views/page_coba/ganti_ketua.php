<html>

	<form role="form" action="<?php echo base_url("index.php/page/ganti_ketua_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">

		<select class="form-control" name="anggota">																
			<option selected disabled>Pilih Ketua Baru</option>
			<?php
				foreach($anggota as $rows)
				{
					echo "<option value=\"".$rows['nrp']."\">".$rows['nama']."</option>";
				}
			?>									
		</select>
		<input type="password" name="password"></input>
		<input type="submit" name="submit"></input>		
	</form>

</html>