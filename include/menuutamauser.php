<?php

include 'connect.php';

$a=mysql_query("select * from cart where id_pembeli='$_SESSION[id]' and status=0",$con);
$b=mysql_num_rows($a);
if($b!=0){

echo "


			<a href='cart.php' class='adacart'>Cart (".$b.")</a>
			<a href='produk.php'>Produk</a>
			<a href='index.php'>Akun</a>
			<a href='#'>Kontak Kami</a>
			<a href='#'>Tentang Kami</a>
			<a href='carapesan.php'>Cara Pesan</a>
			<a href='#'>Chat Box</a>
			<a href='../proses/logout.php'>Log Out</a>
";
}


else{

echo "


			<a href='cart.php'>Cart (".$b.")</a>
			<a href='produk.php'>Produk</a>
			<a href='index.php'>Akun</a>
			<a href='#'>Kontak</a>
			<a href='#'>Tentang Kami</a>
			<a href='carapesan.php'>Cara Pesan</a>
			<a href='#'>Chat Box</a>
			<a href='../proses/logout.php'>Log Out</a>
";}



?>