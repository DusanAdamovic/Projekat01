<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- html and css link-->
    <link rel="stylesheet" href="stil.css">

    <title>Adamović Dušan</title>
  </head>
  <body>

<!--NAVBAR-->
<body data-spy="scroll" data-target=".navbar">
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
		  <a class="navbar-brand" href="#"><i class=""></i>Home</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
	  <div class="collapse navbar-collapse" id="navigation">
		  <ul class="navbar-nav mr-auto">
			  <li>
				  <a class="nav-link" href="#I">Informacije</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#S">Moje slike</a>
				</li>
				<li>
				  <a class="nav-link" href="#V">Veštine</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#K">Konkakt</a>
				</li>
				  </ul>
			</div>	
		</div>
</nav>


<!--CONTAINER-->
  <div class="container">
    <div class="jumbotron">
        <h1>Dobro Došli.</h1>
          <p>Ovo je sajt o meni, Adamović Dušanu.</p>
       </div>
   </div>


<!--Slika pozadine-->
<div class="container-fluid pojedin_sekcija sekcija-light">
<div id="galerija-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
<div class="container">
  <img src="slike/Pozadina.jpg" alt="Avatar" class="center1">
  <div class="overlay">
    <div class="text">Na ovom sajtu možete saznati više o meni. Moje veštine, informacije itd...</div>
  </div>
</div>
<hr/>


<!--Segment informacije-->
<div class="container-fluid pojedin_sekcija sekcija-dark">
  <div class="row" >
    <a id="I" ></a><h3>-Informacije-</h3>
</div>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a href="#usluge-dogadjaji" data-toggle="tab" class="nav-link active">Informacije</a>
      </li>
        <li class="nav-item">
          <a href="#usluge-personal" data-toggle="tab" class="nav-link">O meni</a>
      </li>
    </ul>
    <div class="tab-content sekcija-light">
      <div role="tabpanel" class="tab-pane active" id="usluge-dogadjaji">
        <div class="container">
          <div class="row">
              <p>
                Pozdrav. Moje ime je Adamović Dušan. Student sam Visoke poslovne škole strukonih studija, koja se nalazi u Novom Sadu. 
						  </p>
							<p>
							  Trenutno sam treća godina osnovnih strukovnih studija. Moj smer je primenjena informatika. I voleo bih još da napredujem.
							</p>
						</br>
							<p>
							  Najviše me inetersuje programiranje. Preciznije: Front-End programiranje. <!--Ujedo mislim da imam dosta stečenog znanja iz tih jezika i softvera, koje je neophodni.-->
							</p>
						</br>
							<p>
              Tokom mog studiranja najviše sam učijo jezike kao što su: Html/Css, Java, SQL, JavaScript, Php.
							</p>
						</br>
							<p>
              Softveri na kojima sam radio i učio su: Visual studio code, Eclipse, Sublime text, MySql, Pycharm. Frameworks u kojima sam radio su: Bootstrap, Spring boot, Angular, React.
							</p>
            </br>
              <p>
              Pored programa koje sam nabrojao radio sam i u: Wordpress, Photoshop, Microsoft office.
              </p>
            </br>
              <p>
              Jezici koje govorim su Englski i Srpski jezik.
              </p>
      </div>
    </div>
</div>
  
<!--Segment o meni-->
  <div role="tabpanel" class="tab-pane" id="usluge-personal">
    <div class="container">
      <div class="row"> 
          <p>
			      Moje ime je Adamović Dušan. Rođen sam 08.07.2001.godine u Sremskoj Mitrovici.
				  </p>
			  </br>
					<p>
				    Odrastao sam i živeo u Šidu. Trenutno prebivalište mi je Novi Sad.
				  </p>
				</br>
          <p>
          Pohađao sam četvorogodišnju srednju školu "Nikola Tesla" Šid, smer elektrotehničar računara. Trenutno sam student Visoke poslovne škole strukovnih studija.
          </p>
        </br>
				  <p>
            Neki moj hobi je: Vežbanje.
          </p>
    </div>
  </div>
</div>
<div role="tabpanel" class="tab-pane" id="usluge-ostalo">
  <div class="container">
    <div class="row">
      </div>
    </div>
  </div>
  </div>
</div>


<!--CONTAINER SLIKE-->
<div class="container-fluid pojedin_sekcija sekcija-light">
  <div class="row">
    <a id="S"></a><h3>-Moje slike-</h3>
	</div>
<hr/>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slike/Slika1.jpg" alt="First slide" class="center">
    </div>
    <div class="carousel-item">
      <img src="slike/Slika2.jpg" alt="Second slide" class="center">
    </div>
    <div class="carousel-item">
      <img src="slike/Slika3.jpg" alt="Third slide" class="center">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
<hr/>

<!--Segment veštine -->
<a class="left carousel-control" href="#galerija-carousel" role="button" data-slide="prev">
  <span class="icon-prev" aria-hidden="true"></span>
    </a>
      <a class="right carousel-control" href="#galerija-carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
    </a>
      <ol class="carousel-indicators">
      <li data-target="#galerija-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#galerija-carousel" data-slide-to="1"></li>
      <li data-target="#galerija-carousel" data-slide-to="2"></li>
    </ol>
  </div>
</div>
<div class="container-fluid pojedin_sekcija sekcija-dark" style="color:black">
  <div class="row">
    <a id="V"></a><h3 style="color:white">-Veštine-</h3>
</div>
<div class="card-deck">
  <div class="card">
	  <img class="card-img-top" src="slike/html1.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Html/Css</h5>
	      <p class="card-text">HTML, skracenica od HyperText Markup Language, je standarizovani jezik koji se koristi pri strukturiranju tekstova, medija i ugradenih objekata u web stranice i elektronsku poštu. Kao modifikovanu i pojednostavljenu verziju SGML jezika, HTML standarizuje i održava World Wide Web Consortium (W3C). </p>
  </div>
</div>
	<div class="card">
	  <img class="card-img-top" src="slike/php2.jpg" alt="Card image cap">
		  <div class="card-body">
			  <h5 class="card-title">Php</h5>
				  <p class="card-text">PHP: Hypertext Preprocessor je projekat otvorenog koda (open source) i jedan je od najboljih i najpoznatijih server-side rešenja. Server side scripting predstavlja vid izvršavanja web skripti na web-u, a samo mu ime kaže da se izvršava na serveru (suprotno od JavaScript-e koja se izvršava na klijentu (client-side)browseru). </p>
  </div>
</div>
<div class="card">
  <img class="card-img-top" src="slike/javascript3.jpg" alt="Card image cap">
	  <div class="card-body">
		  <h5 class="card-title">JavaScript</h5>
			  <p class="card-text">JavaScript je skriptni programski jezik koji se prvenstveno koristi za definisanje funkcionalnosti web stranica na klijentskoj strani. Dinamican, slabo tipiziran jezik, sa skromnom podrškom za objektno orijentirano programiranje, on zapravo predstavlja implementaciju standarda ECMAscipt-a.</p>
		  </div>
	  </div>
  </div>
</div>

<!--KONTAKT-->
<div class="kontakt">
  <section class="my-4">
      <div class="py-4">
          <a id="K"></a>
          <h2 class="text-center">-Kontakt-</h2>
      </div>

      <div class="w-70 m-auto">
        <form action="about.php" method="post">
            <label>Ime:</label>
            <input type="text" name="ime" class="form-control">
      </div>
      <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Br-telefona:</label>
        <input type="text" name="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-success" style="background-color: SeaGreen;">Submit</button>
    </form>
  </section>
</div>

<!--Footer segment-->
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

  <footer class="bg-dark text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Prebivalište:</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Srbija</a>
            </li>
            <li>
              <a class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Novi Sad</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Kontakt:</h5>

          <ul class="list-unstyled">
            <li>
              <a class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>E-mail:</a>
            </li>
            <li>
              <a class="text-white"><i class="fas fa-backspace fa-fw fa-sm me-2"></i>dusan.adamovic0807@gmail.com</a>
            </li>
            <li>
              <a class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Broj-telefona:</a>
            </li>
            <li>
              <a class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2">+381/61-7177600</i></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Društvene mreže:</h5>

          <ul class="list-unstyled">
            <li>
              <a href="https://www.instagram.com/" class="text-white">Instagram</a>
            </li>
            <li>
              <a href="https://sr-rs.facebook.com/" class="text-white">Faceobook</a>
            </li>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Kreator:</h5>

          <ul class="list-unstyled">
            <li>
              <a class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Adamović Dušan</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white">Adamović Dušan</a>
    </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>