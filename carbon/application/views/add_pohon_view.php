<!-- File add_product_view.php -->
<html>
	<head>
		<title>CRUD dengan CodeIgniter</title>
	</head>
	<body>
		<h1>Tambah Pohon baru</h1>
		<form method="post" action="<?= base_url() ?>index.php/pohon/addPohonDb">
			<!-- action merupakan halaman yang dituju ketika tombol submit dalam suatu form ditekan -->
			<input type="text" placeholder="Nama Pohon" name="nama_pohon" />
			<input type="text" placeholder="Letak Pohon" name="letak_pohon" />
			<input type="text" placeholder="Berat Jenis Pohon" name="berat_jenis" />
			<input type="text" placeholder="Deskripsi" name="deskripsi" />
			<input type="file" placeholder="Foto Pohon" name="foto_pohon" />
			<input type="submit" />
		</form>
	</body>
</html>