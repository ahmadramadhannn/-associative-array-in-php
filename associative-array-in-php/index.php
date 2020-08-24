<?php 

$books = [
	[
		"Penulis" => "Ahmad Ramadhan",
		"Judul Buku" => "Semangat Terus",
		"Pengarang" => "Ahmad Ramadhan",
		"Terbit" => "2023",
		"Harga" => "50 Ribu"
	],

	[
		"Harga" => "100 Ribu",
		"Judul Buku" => "Sukses Tidak Datang Dalam Satu Malam",
		"Penulis" => "Ahmad Ramadhan",
		"Pengarang" => "Ahmad Ramadhan",
		"Terbit" => "2024"
	],

	[
		"Judul Buku" => "Nothing is in impossible",
		"Penulis" => "Ahmad Ramadhan",
		"Terbit" => "2025",
		"Pengarang" => "Ahmad Ramadhan",
		"Harga" => "80 Ribu"
	]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
		
		ul li {
			list-style: none;
		}
	</style>
</head>
<body>
	<h1>Data Buku</h1>
	<?php $i = 1; ?>
	<?php foreach($books as $book) : ?>
	<ul>
		<li>No : <?= $i; ?></li>
		<li>Penulis : <?= $book['Penulis']; ?></li>
		<li>Pengarang : <?= $book['Pengarang']; ?></li>
		<li>Judul Buku : <?= $book['Judul Buku']; ?></li>
		<li>Harga : <?= $book['Harga']; ?></li>
		<li>Terbit : <?= $book['Terbit']; ?></li>
	</ul>	
	<?php $i++; ?>
	<?php endforeach ?>
</body>
</html>