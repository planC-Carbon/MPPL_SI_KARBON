<!-- File update_product_view.php -->
<html>
	<head>
		<title>CRUD dengan CodeIgniter</title>
	</head>
	<body>
		<h1>Update Pohon</h1>
        <?php
            //Kita akan melakukan looping terhadap variable $product yang telah dikirimkan melalui controller
            foreach($pohon->result() as $detail)
            	echo $detail;
            {
        ?>
			<form method="post" action="http://localhost:81/CI/index.php/pohon/updatePohonDb">
			<!-- action merupakan halaman yang dituju ketika tombol submit dalam suatu form ditekan -->
            <input type="hidden" value="<?php echo $detail->id_pohon; ?>" name="id_pohon" />
			<input type="text" placeholder="Nama Pohon" name="nama_pohon" value="<?php echo $detail->nama_pohon; ?>" /> <!-- Value akan diisi berdasarkan data yang sudah ada di database, $detail->productName disini maksudnya adalah menunjuk productName yang merupakan attribute yang ada di table msProduct pada database -->
			<input type="text" placeholder="Letak Pohon" name="letak_pohon" value="<?php echo $detail->letak_pohon; ?>" /> <!-- Sama seperti di atas, hanya saja disini kita menampilkan stok -->
			<input type="text" placeholder="Berat Jenis Pohon" name="berat_jenis" value="<?php echo $detail->berat_jenis; ?>" /> <!-- Sama seperti di atas, hanya saja disini kita menampilkan stok -->
			<input type="text" placeholder="Deskripsi Pohon" name="deskripsi" value="<?php echo $detail->deskripsi; ?>" /> <!-- Sama seperti di atas, hanya saja disini kita menampilkan stok -->
			<input type="file" placeholder="Foto Pohon" name="foto_pohon" value="<?php echo $detail->foto_pohon; ?>" /> <!-- Sama seperti di atas, hanya saja disini kita menampilkan stok -->
			<input type="submit" value="Update" />
			</form>
        <?php
            }    
        ?>
	</body>
</html>