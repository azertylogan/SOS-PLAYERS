<link rel="stylesheet" type="text/css" href="css/inscriptionJeu.css">
<nav class="navbar navbar-light bg-dark justify-content-between" style="background-color: silver;">
    <!--   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <a class="navbar-brand" href="ppem2l.php">Acceuil</a>
   <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item">Sports de ball</a>
          <a class="dropdown-item">Sports de combat</a>
          <a class="dropdown-item">Sports aquatique</a>
        </div>
      </li>
     </ul>
      --> <ul class="navbar-nav"><!--
        <li class="nav-item">
          <a class="nav-link " href="seconnecter.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="inscription.php">Inscription</a>
        </li> -->
        <li class="nav-item">
          <a class="navbar-brand" href="inscriptionJeu.php">E SPORT</a>
        </li>
      </ul>
        <div class="searchnav">
        <form class="form-inline my-2 my-lg-0" action="rechercherJoueur.php" method="GET">
           <input class="form-control mr-sm-2" type="search" placeholder="Recherche de joueur" aria-label="Search" name="terme">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="s" value = "Rechercher">Rechercher</button>
        </form>
        </div>
        <li class="nav-item">
        <a class="nav-link" href="deconnect.php">deconnection</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="connexionAdmin.php">admin</a>
      </li>
    </div>
  </nav>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
