<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
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
		<div class="alert alert-info text-center font-weight-bold">Perwalian</div>
		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<br>
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
				$query = "select * from perwalian";
				$result = mysqli_query($link, $query);
				$no ='1';
				while ($isi = mysqli_fetch_object($result)) {
					?>
					<tr>
						<td><font color = "white"><?= $no++;?></td>
						<td><font color = "white"><?= $isi-> id;?></td>
						<td><font color = "white"><?= $isi-> dosen_nip;?></td>
						<td><font color = "white"><?= $isi-> mahasiswa_nim;?></td>
						<td>
							<a href="edit.php?id=<?php echo $isi->id; ?>" class="btn btn-primary"><font color ="Blue">Edit</a>

							<a href="delete.php?id=<?php echo $isi->id; ?>" class="btn btn-dark"><font color ="red">Hapus</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>