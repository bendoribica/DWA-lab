<!DOCYPE HTML>

<html>
	<head>
	<meta charset="UTF-8" />
	<!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	</head>
	<body>
			 <header class="site-header">
     
  </header>

			
		<div class="row info">
			<header class="column column-12">
				 <img src="images/logo2.jpg" alt="HTML5 Icon" style="width:100px;height:100px">  
				<div class="user">
					<?php
						$username=$_POST['username'];
						$pass=$_POST['password'];
						
						echo $username;

					?>
					<button onclick="location.href='login.html'">Odjava</button>
				</div>
				<hr>
			</header>

			<div class="column column-3">
				<nav class="main">
					<ul class="main-navigation">
						<li><a href="#osobni">Naslovnica</a></li>
						<li><a href="jela.php">Jela</a></li>
						<li><a href="unos.php">Unos</a></li>
						<li><a href="#znanja">Kontakt</a></li>
					</ul>
				</nav>
				
			</div>

			<div class="column column-9">
                <a name="osobni">
				<h3>Osobni podaci</h3>
				<p>Ime: Benjamin</p>
				<p>Prezime: Ratković</p>
				<p>Datum rođenja: 22.10.1991</p>
                   
                <a name="skolovanje">
				<h3>Školovanje:</h3>
				<p>Osnovna škola: OŠ Milka Trnina</p>
				<p>Srednja škola: Opća Gimnazija Ivanić grad, podružnica Križ</p>
				<p>Fakultet: Tehničko veleučilište u Zagrebu-smjer računarstvo</p>
                
                <a name="radno">
				<h3>Radno iskustvo:</h3>
				<p>Radno iskustvo:3 godine rada u Vipnetu (služba za korisnike, teh. podrška, računi, ugovori), 1 godina rada u Konzumu (punioc polica), </p>
                <p>1 mjesec rada u Konzumu na moru (skladište, blagajna, primitak robe)</p>
                <a name="znanja">
				<h3>Znanja i vještine</h3>
				<p>Vještine: C/C++, Java, HTML/CSS, PHP, MSOffice</p>
				<p>Jezici: Hrvatski, Engleski</p>
			</div>

		</div>		

		
		<footer class="site-footer">
    
    <p>Copyright ZKD, 2015</p>
  </footer>
		</footer>
		
	</body>


</html>
