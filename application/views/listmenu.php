<html>
<head>
<title>LIST MENU</title>
</head>
<body>
	<h3> selamat datang <?= $nm_pemesan ?>, berikut daftar menu:
	<form method="post" action="<?=base_url();?>index.php/pesanmakan/formpesan">
		<table border="1">
			<tr align="center">
				<td><b>Menu</td>
				<td><b>Harga per porsi</td>
				<td><b>cek</td>
				<td><b>jumlah pemesanan</td>
			</tr>
			<?php $i = 0; foreach ($daftarmenu as $key) { ?>
				<tr>
					<td><?= $key->makanan ?></td>
					<td>Rp <?= $key->harga ?>,00</td>
					<td><input type="checkbox" name="pilihan[]" value="<?= $key->id_makanan ?>"></td>
					<td><input type="text" name="jum_pesan[$i]">
				</tr>
			<?php $i = $i + 1; } ?>	
		</table>
		<button type="submit" name="submit">PESAN</button>
	</form>
	<form method="post" action="<?=base_url();?>index.php/pesanmakan/keluar">
		<button type="submit" name="submit">KELUAR</button>
	</form>
</body>
</html>