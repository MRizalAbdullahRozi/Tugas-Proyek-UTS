<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="efect.css">
</head>
<body>
		<div class="judul"><h1> Catering Bu Abu Sofyan </h1></div>
			<ul>
			<li><a href="Proyek.php"><h3> Tentang Kami </h3></a></li>
			<li><a href="menumasakan.php"><h3> Menu Masakan </h3></a></li> 
			<li><a href="daftarharga.php"><h3> Daftar Harga </h3></a></li>
			<li class="pilih"><a href="pesanan.php"><h3> Form Pesanan </h3></a></li>
			<li><a href="kontak.php"><h3> Kontak Kami </h3></a></li>
			</ul>
		<center><div class="nama">
			<h1>Form Pesanan</h1>
		</div></center>

		<div class="form">
		<div class="container">
				  <form action="input.php" method="POST">
				  <div class="row">
				    <div class="label">
				    <label for="id">ID Pesanan</label>
				    </div>
				    <div class="textbox">
				    <input type="text"  name="id" placeholder="id pesanan">
				    </div>
				  </div>
				  <div class="row">
				    <div class="label">
				    <label for="nama">Nama</label>
				    </div>
				    <div class="textbox">
				    <input type="text"  name="nama" placeholder="Nama Depan..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="label">
				    <label for="pesanan">Pesanan</label>
				    </div>
				    <div class="textbox">
				   <input type="text"  name="psn" placeholder="Masukkan Menu">
				    </div>
				  </div>
				  <div class="row">
				    <div class="label">
				    <label for="alamat">Alamat</label>
				    </div>
				    <div class="textbox">
				    <textarea  name="alamat" placeholder="Alamat.." style="height:100px"></textarea>
				    </div>
				  </div>
				   <div class="row">
				    <div class="label">
				    <label for="bayar">Bayar</label>
				    </div>
				    <div class="textbox">
				   <input type="text"  name="byr" placeholder="DP Pembayaran">
				    </div>
				  </div>
				  <br>
				  <center>
				  	<form>
				  <table>
				  	<tr>
				  		<td>
				  	<div class="row">
				    <input type="submit" value="Submit">
				  </div>
				  		</td>
				  </tr>
				  <tr>
				  	<td>
					<div class="row">
				    <input type="reset" value="Reset">
				  	</div>
				  	</td>
				  </tr>
				  </table>
				  </form>
				</center> 
				  </form>
				</div>
				</div>
				<br><br><br>
	<div class="footer">
	<footer> 
		<td> Dibuat Oleh : M Rizal Abdullah Rozi</td>
	</footer>
	<footer> 
		<td> NPM : 18082010002</td>
	</footer>
	</div>
</body>
</html>