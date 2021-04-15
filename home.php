<!DOCTYPE html>
<html lang="ro">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ITech</title>
<link rel="icon" href="img/logo.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/home.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/home.js"></script>

</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#home"><span style="color:white">IT</span><span style="color:red">ech</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#despre">Despre</a></li>
        <li><a href="#servicii">Servicii</a></li>
        <li><a href="#proiecte">Proiecte</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
    <h1><span style="color:black">IT</span><span style="color:white">ech</span></h1>
    <p>Hardware - Networking - Software Development - Web Development</p>
</div>

<div id="despre" class="container-fluid div-pad">
  <div class="row">
    <div class="col-sm-8">
      <h2>IT<span style="color:red">ech</span></h2>
      <h4>Tot ce ai nevoie doar la un click distanță.</h4>
      <p>Ai o problemă hardware sau vrei doar să faci un upgrade pc-ului tău, noi te putem ajuta.</p>
      <p>Viteza de internet este mică, nu ai conectivitate sau vrei să faci un upgrade rețelei tale, noi te putem ajuta.</p>
      <p>Ai nevoie de un soft, de o automatizare sau pur și simplu ai o idee pe care vrei să o realizezi? Ai ghicit, noi te putem ajuta.</p>
      <button class="btn btn-default btn-lg" onclick="window.location.href='#contact'">Lasă-ne un mesaj</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-send logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid div-pad">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-check logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Calitățile noastre</h2>
      <h4><strong>Calități:</strong> seriozitate - profesionalism - comunicare - punctualitate</h4>
      <p><strong>Misiunea noastră:</strong> Rezolvarea problemelor clientului în cel mai scurt timp posibil.</p>
      <p><strong>Scopul nostru:</strong> Să iți facem viața cât mai ușoară, fără bătăi de cap.</p>
    </div>
  </div>
</div>

<div id="servicii" class="container-fluid div-pad text-center">
  <h2>Servicii</h2>
  <h4>Printre ofertele noastre se numără următoarele</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cog logo-small"></span>
      <h3>Hardware</h3>
      <p>Troubleshooting hardware</p>
      <p>Instalare/Upgrade componente PC</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo-small"></span>
      <h3>Networking</h3>
      <p>Troubleshooting network</p>
      <p>Instalare/Configurare router/switch</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-folder-open logo-small"></span>
      <h3>Software</h3>
      <p>Instalare windows/programe de bază</p>
      <p>Devirusare pc</p>
    </div>
    </div>
    <br><br>
  <div class="row">
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-phone logo-small"></span>
      <h3>Software Development</h3>
      <p>Debugging</p>
      <p>Development</p>
    </div>
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-cloud logo-small"></span>
      <h3>Web Development</h3>
      <p>Debugging</p>
      <p>Development</p>
    </div>
  </div>
</div>

<div id="proiecte" class="container-fluid div-pad text-center bg-grey">
  <h2>Proiecte</h2>
  <h4>O parte din proiectele noastre</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="#contact"><img src="img/transport.ico" alt="Transport"></a>
        <p><strong>Transport Angajați</strong></p>
        <p>Soft pentru transportul angajaților cu autobuzul</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="#contact"><img src="img/scanare.ico" alt="Scanare"></a>
        <p><strong>Scanare Angajați</strong></p>
        <p>Soft pentru pontarea angajaților</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="#contact"><img src="img/testare.ico" alt="Testare"></a>
        <p><strong>Testare Angajați</strong></p>
        <p>Soft pentru testarea angajaților pentru covid</p>
      </div>
    </div>
    <div class="row text-center">
    <div class="col-sm-6">
      <div class="thumbnail">
        <a href="#contact"><img src="img/web.png" alt="Transport"></a>
        <p><strong>Webasto Olympics</strong></p>
        <p>Pagina web pentru organizarea olimpiadei</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
        <a href="#contact"><img src="img/web2.png" alt="Scanare"></a>
        <p><strong>DST</strong></p>
        <p>Pagina web pentru firmă de prestare servicii</p>
      </div>
    </div>
</div>

<h2>Ce spun clienții noștri</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"Foarte promți și au rezolvat problema rapid."<br><span style="font-style:normal;">Dobre Cristian, Arad</span></h4>
    </div>
    <div class="item">
      <h4>"Cei mai buni! Recomand cu încredere!"<br><span style="font-style:normal;">Stancu Ionuț, Cluj</span></h4>
    </div>
    <div class="item">
      <h4>"Rapid, simplu și ușor. Atât am de spus despre ei."<br><span style="font-style:normal;">Ambra Ofelia, Arad</span></h4>
    </div>
    <div class="item">
      <h4>"După intervenție am impresia că am un calculator nou. Vă mulțumesc."<br><span style="font-style:normal;">Sicra Călin, Timișoara</span></h4>
    </div>
    <div class="item">
      <h4>"Cu ajutorul lor am reușit să aduc afacerea mea și online. Totul a descurs perfect."<br><span style="font-style:normal;">Herbei Ioana, Oradea</span></h4>
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="contact" class="container-fluid div-pad bg-grey">
  <h2 class="text-center">Contact</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactează-ne și vom răspunde fiecărei problemă în maxim 24 de ore.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Arad, Ro</p>
      <p><span class="glyphicon glyphicon-phone"></span> 0745123456</p>
      <p><span class="glyphicon glyphicon-time"></span> L-V 09:00 - 17:00</p>
      <p><span class="glyphicon glyphicon-envelope"></span> office@itech.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nume" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Mesaj" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Trimite</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Made by Draia Radu &copy 2021</p>
</footer>

</body>

</html>