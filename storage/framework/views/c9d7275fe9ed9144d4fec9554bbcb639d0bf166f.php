<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHARMA RAPID</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="#intro" class="scrollto" style="margin-left: -50px"><span>PHARMA RAPID</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li> <a href="pharma" class="btn-get-started2" style="color: white ; margin-left: 20px ">ARE YOU A PHARMACIE? </a></li>
                <li> <a href="login.html" class="btn-get-started2" style="color: white ; margin-left: 20px ">LOGIN</a></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->
<div id="e" style="height:200px; visibility: hidden;"></div>
<div>
    <div style="background-color:white; margin-left: 30px;">
        <label for="search">recherche:</label>
        <input type="text" name="txtt" id="txtt" style="width:50%" placeholder="paralgon">
        <button>recherche</button>
    </div><br>
    <span style="background-color:white; float: left; margin-left: 20px; width: 60%; ">
          <h4>resultats de la recherche:</h4>
          <table border="1" style="width:100%; border-collapse: collapse; border-radius: 10px; overflow: hidden;">
            <thead style="background-color:gray">
              <th style="width:20%">Nom du produit</th>
              <th style="width:30%">description</th>
              <th style="width:20%">Pharmacie</th>
              <th style="width:30%">lieu</th>
            </thead>
            <tbody>
              <tr>
                <td>paralgon 1000</td>
                <td>DCI Paracétamol; Dosage 1000 mg; Formes et présentations Comprimé. Boite de 20; Classe Pharmaco-thérapeutique Antalgique : paracétamol et dérivés</td>
                <td>El-Hikma</td>
                <td>cité 1500, batiment 4A</td>
              </tr>
              <tr>
                  <td>paralgon 500</td>
                  <td>DCI Paracétamol; Dosage 500 mg; Formes et présentations Comprimé. Boite de 20; Classe Pharmaco-thérapeutique Antalgique : paracétamol et dérivés</td>
                  <td>Najah</td>
                  <td>cité 226, batiment 3</td>
                </tr>
            </tbody>
          </table>
        </span>
    <span style="background-color:#cecece;float: right;margin-right: 20px; width: 30%; padding: 5px; border-radius: 10px;">
          <label for="">wilaya</label>
          <select name="wilaya" id="">
            <option value="NULL">--</option>
            <option value="31">oran</option>
            <option value="22">SBA</option>
            <option value="16">Alger</option>
          </select><br>
          <label for="">Daira</label>
          <select name="daira" id="">
            <option value="NULL">--</option>
            <option value="31">Oran</option>
            <option value="22">Arzew</option>
            <option value="16">ain turk</option>
          </select><br>
          <label for="">quartier</label>
          <select name="quartier" id="">
            <option value="NULL">--</option>
            <option value="31">Plateau</option>
            <option value="22">place d'armes</option>
            <option value="16">madina djadida</option>
          </select><br>
          <label for="">Type du produit</label><br>
          <label for="checkbox">comprimé</label>
          <input type="checkbox" value="comprimé">
          <label for="checkbox">sirop</label>
          <input type="checkbox" value="sirop">
          <label for="checkbox">paramedical</label>
          <input type="checkbox" value="paramedical">
          <label for="checkbox">material</label>
          <input type="checkbox" value="materiel">
          <label for="">Nom du pharmacie :</label><br>
          <input type="text" name="" id=""><br>
          <label for="">Dose:</label><br>
          <label for="radio">1 à 200</label>
          <input type="radio" name="" id="">
          <label for="radio">201 à 500</label>
          <input type="radio" name="" id="">
          <label for="radio">plus que 500</label>
          <input type="radio" name="" id="">


        </span>
</div>

</body>
</html>
<?php /**PATH /home/neox/pharma/resources/views/search.blade.php ENDPATH**/ ?>