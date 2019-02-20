<!DOCTYPE html>
<html> 
<head>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/styleku.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
	<div class="hider">
		<div class="container">
			<div class="titlee"><p align="center">Selamat Datang <br>di Portal Kafe</p></div>
			<div class="desk">Portal Cafe Merupakan tempat yang pas<br> dan juga asik untuk nongkrong bersama teman - teman</div>
			<div class="btengah"><button class="btentang">Tentang Kami</button></div>
		</div>
	</div>
	<div id="demo" class="carousel slide" data-ride="carousel">

		<div class="container">
			<div class="sub">Tentang Kami</div>
			<div class="bsub">Berikut adalah hal yang bisa anda ketahui<br>
			tentang Portal Cafe</div>
			<img src="../assets/img/bg-tentang.jpeg" class="tntang">
			<hr class="liness">
			<div class="descc">Portal cafe didirikan pd dibekasi tgl 20 sept 2017 owner penamaan portal cafe terinspirasi dari istilah "Portal" para rider di portal oleh saudara2 nya sesama rider pd saat melakukan perjalanan turing di daerah yg dilewati. Pendirian portal cafe tak luput dari support para rider  yg tergabung dalam Max Owner Bekasi yg merupakan komunitas motor yamaha max series yg mana owners merupakan salah satu founder dan ketua umum nya. Portal cafe dg menggunakan konsep tata ruangan yg menonjolkan anak motor nya dan  menggunakan bahan2 dari limbah seperti meja cafe dan kursi2 mengunakan drum dan kayu. Portal cafe menyajikan makanan dan minuman urban serta kopi nusantara yg diolah langsung dimulai proses roasting dan pembuatan serta penyeduhan dg takaran terukur yg menghasil rasa kopi yg nikmat. Portal cafe saat ini telah memiliki 2 tempat /cabang utk mengakomodir permintaan konsumer khusus nya prime konsumer yakni para rider yg selalu menyambangi portal cafe. Portal cafe tak luput pula dikunjungi oleh penikmat kopi yg datang dari daerah2 jakarta dan komunitas2 mobil. </div>
		</div>

		<div class="review">
			<div class="container">
				<div class="sub2">Kenapa Portal Cafe ?</div>
				<div class="bsub">Mengapa harus portal cafe yang dipilih sebagai<br>tempat nongkrong</div>
				<div class="carding">
					<div class="ikon">
						<img class="ikone" src="../assets/icon/Cafe.png">
					</div>
					<div class="tcard">Tempat yang nyaman</div>
					<div class="tdesk">Portal Cafe adalah tempat<br>
						yang nyaman untuk bersantai</div>
				</div>
				<div class="carding">
					<div class="ikon">
						<img class="ikone" src="../assets/icon/Nongkrong.png">
					</div>
					<div class="tcard">Asik buat Nongkrong</div>
					<div class="tdesk">Portal Cafe adalah tempat<br>
						yang pas buat nongkrong  bersama<br> 
					teman - teman</div>
				</div>
				<div class="carding">
					<div class="ikon">
						<img class="ikone" src="../assets/icon/Group.png">
					</div>
					<div class="tcard">Kopi yang nikmat</div>
					<div class="tdesk">Portal Cafe menyajikan<br>
						kopi nusantara yang di olah langsung dengan takaran terukur</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="krisar">
				<div class="sub">Kritik & Saran</div>
				<div class="bsub">Berikut adalah hal yang bisa anda ketahui<br>
				tentang Portal Cafe</div>
				<form method="POST" action="<?php echo base_url(). 'input/input_comment' ?>">
					<div class="krisar-kolom">
						<div><input type="text" name="nama" placeholder="Masukkan nama anda ..." class="kolom-nama"></div>
						<div><input type="email" name="email" placeholder="Masukkan email anda ..." class="kolom-email"></div>
						<div><textarea name="kritsar" placeholder="Kritik dan Saran Anda ..." class="kolom-krisar"></textarea></div>
						<div><input type="submit" name="kirim" class="btn-kirim"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>