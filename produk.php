<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Perkasa Gaming Shop</title>
<link rel='stylesheet' href='my.css'  type="text/css">
<?php include'include/fav.php';?>
<script type='text/javascript'>
function resetx(){
 document.getElementById("carix").value="";
}
</script>
<script type="text/javascript" language="javascript" src="keranjang.js"></script>

</head>

<body onscroll="kfloatLayer.alignFloatLayer()">
<div class='utama'>
		<a name='atas'><div class='header'></div></a>
      		 <div class='menu' align='center'><?php include'include/menuutamaindex.php'; ?></div>

<div class='isi'>
		 <center><h3>Produk Perkasa Gaming Shop</h3></center>
<!--
				<div class='cari'>
					<form action='hasilcari.php' method='post'>
						<input  type='text' name='cari' class='frmcari' size='40' id='carix' onclick='resetx()' value='Cari...'><input type='submit' value='Cari' class='tombolkeranjang'>
					</form>
				</div>
-->
<div class='tampilproduk'>

				<table width='800px' border='0' align='center'>
					<tr><th colspan='3'>Produk </th></tr>
					<tr>

						<?php

						include 'include/connect.php';

						$query=mysql_query("select * from produk order by ditambahkan asc limit 0,3",$con);

						while($x=mysql_fetch_array($query)){

						echo "<td align='center'><a href='detail_produk.php?id=".$x[0]."'><img src='img/detailprod/".$x[5]."'><br>".ucwords($x[1])."</a><br>Rp. ".number_format($x[2],0,'.' ,'. ')."</td>";
						}
						echo "</tr><tr>";

						$query=mysql_query("select * from produk order by ditambahkan asc limit 3,3",$con);

						while($x=mysql_fetch_array($query)){

						echo "<td align='center'><a href='detail_produk.php?id=".$x[0]."'><img src='img/detailprod/".$x[5]."'><br>".ucwords($x[1])."</a><br>Rp. ".number_format($x[2],0,'.' ,'. ')."</td>";
						}
						echo "</tr><tr>";

						$queryy=mysql_query("select * from produk order by ditambahkan asc limit 6,3",$con);

						while($y=mysql_fetch_array($queryy)){

						echo "<td align='center'><a href='detail_produk.php?id=".$y[0]."'><img src='img/detailprod/".$y[5]."'><br>".ucwords($y[1])."</a><br>Rp. ".number_format($y[2],0,'.','.')."</td>";
						}

						?>
			</tr>
				</table>

<br>
</div>
</div>

	<div class='footer' align='center'><?php include'include/menufooter.php';?></div>
		 <hr style='width:50%; border:1px solid #ddd;'>
	<div class='copyr' align='center' ><?php include'include/footerdesc.php';?></div>
</div>


					

<script type="text/javascript">
	kfloatLayer.init('floatlayer',0,137,5);
</script>

</body>
</html>
