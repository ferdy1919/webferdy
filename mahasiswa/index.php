<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<style type="text/css">
	body {
	background-color: #FF6;
}
    </style>
<meta charset="utf-8">
</head>
<body>
<backgorund color = "Blue">
	<div class="container">
		<div class="text-center alert alert-info font-weight-bold">Data Mahasiswa</div>
		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<br> <br>
		<table class="table table-bordered">
			<thead>					
				<tr bgcolor="#FFFFFF">
					<th bgcolor="#FFFFFF">NO</th>
					<th bgcolor="#FFFFFF">NIM</th>
					<th bgcolor="#FFFFFF">Nama</th>
					<th bgcolor="#FFFFFF">Prodi</th>
					<th bgcolor="#FFFFFF">Aksi</th>
				</tr>
			</thead>		
			<tbody>
				<?php
				require '../koneksi.php';
				$query = "select * from mahasiswa";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td bgcolor="#000000"><font color = "white"><?= $no++;?></td>
						<td bgcolor="#000000"><font color = "white"><?= $isi-> nim;?></td>
						<td bgcolor="#000000"><font color = "white"><?= $isi-> nama_mahasiswa;?></td>
						<td bgcolor="#000000"><font color = "white"><?= $isi-> prodi;?></td>
						<td bgcolor="#000000">
							
							
							<a href="edit.php?nim=<?php echo $isi->nim; ?>" class="btn btn-primary"><font color ="Blue">Edit</a>

							<a href="delete.php?nim=<?php echo $isi->nim; ?>" class="btn btn-dark"><font color="red">Hapus</a>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>