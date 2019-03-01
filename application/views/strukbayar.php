<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<?php foreach ($listpesanan as $key) { ?>
			<tr>
				<td><?= $key->menu_mkn ?></td>
				<td><?= $key->pcs ?></td>
				<td><?= $key->total ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>