<?php include 'bdd.php'; 
include 'function.php'; 

/*LOGIN START*/
if (isset($_POST['send'])) {
  $pseudo = securisation($_POST['username']);
  $grainDeSel = "sE##!oep24854$$#dsdfzz215754eEeBistoufleAnCat##sdfsd"; 
  $pass_hache = sha1(securisation($_POST['password'] . $grainDeSel)); 

  $req = $bdd->prepare('SELECT * FROM membres WHERE m_nom_utilisateur = :pseudo AND m_password = :pass');
  $req->execute(array('pseudo' => $pseudo, 'pass' => $pass_hache));
  $donnees = $req->fetch();
  if ($req->rowCount() > 0 ) {
    $_SESSION['id_membre'] = $donnees['id_membre'];
    $_SESSION['m_nom_utilisateur'] = $donnees['m_nom_utilisateur'];
    setFlash('Bonjour ' . $donnees['m_nom_utilisateur'] . ' j\'espère que vous allez bien !');
    header('Location:admin/index.php');
    die();
  }else{
    setFlash('Nom d\'utilisateur ou mot de passe incorrect.', 'danger');
  }
}

/*LOGIN END*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="E-asy Gest vous permez d'avoir une meilleur gestion de votre auto-entreprise">
  <meta name="author" content="E-asy Gest">
  <link rel="icon" href="../../favicon.ico">

  <title>E-asy Gest | La gestion de votre auto-entreprise</title>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Lora:400,700" media="screen" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!-- E-asy Gest theme -->
  <link href="css/theme.css" rel="stylesheet">


  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>


      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">E-asy Gest</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#.about">About</a></li>
              <li><a href="#contact">Contact</a></li> 
              <li><a href="#.wassup">#.wassup</a></li>         
            </ul>
            <ul class="nav navbar-nav pull-right">
              <?php if (isset($_SESSION['id_membre']) == '') {
                ?>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Connexion</a></li>           
                <li><a href="#">Inscription</a></li> 
                <?php
              }else{
                ?>
                <li><a href="admin/index.php">Administration</a></li> 
                <?php
              } ?>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1>Une simple gestion...</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn t-btn-green btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
      <div class="row"><div class="col-md-4 col-md-offset-4"><?php echo flash();?></div></div>
      
      <!-- Button trigger modal -->

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Connexion</h4>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Login</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre pseudo" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mot de passe</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe" name="password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn t-btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn t-btn-green" name="send">Connexion</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

          <div class="col-md-4">
            <h2>Contrôle de votre stock</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Carnet de clients</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Gestion des dépenses</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12"><h2 class='wassup'>I have a class of ".wassup"</h2>
            <p class="wassup">
              Nunc ullamcorper neque vel nibh porttitor mattis. Integer orci lacus, lacinia et vestibulum id, elementum non metus. Nullam in ligula vel libero ultrices dignissim vitae non neque. Maecenas posuere mattis enim sed placerat. Aliquam sed augue quis justo lacinia laoreet. Donec purus sem, condimentum sit amet dapibus vulputate, luctus quis mauris. Sed dapibus purus quis neque blandit dignissim. Sed luctus convallis imperdiet. Sed id dolor eget sapien facilisis fermentum sit amet sit amet nibh. Suspendisse et adipiscing augue. Nam eu nisi lacinia arcu sollicitudin fringilla ac a neque. Vivamus feugiat mattis lectus, eget volutpat mi semper in. Integer tincidunt tincidunt odio, vel cursus quam aliquam sit amet.
            </p></div> 
          </div>


          <hr>

          <footer>
            <p>&copy; Company 2015</p>
          </footer>
        </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.arbitrary-anchor.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
    // Effacement de la div flash
    setTimeout(function() {
     document.getElementById('noti').innerHTML = "";
     },3000);
    </script>


  </body>
  </html>
