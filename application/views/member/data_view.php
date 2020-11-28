<table style="margin: 20px auto;" border="1">
	<tr>
		<th>#</th>
		<th>ID</th>>
		<th>Nama Cabang Olahraga</th>
	</tr>
	<?php
	$no = 1;
	foreach ($'atlet' as $key) {
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $key->nama ?></td>
		<td><?php echo $key->nama_cabor ?></td>
	</tr>
	<?php  }  ?>
</table>