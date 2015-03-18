<?php 
include '../bdd.php';
include '../function.php';

$h_page = "Ajout d'un fournisseur";

if (isset($_POST['send'])) {
  $f_nom = ucfirst(securisation($_POST['f_nom']));
  $f_site = securisation($_POST['f_site']);
  $f_email = securisation($_POST['f_email']);
  $f_ref = securisation($_POST['f_ref']);
  $f_tel = securisation($_POST['f_tel']);
  $f_fax = securisation($_POST['f_fax']);
  $f_adresse = securisation($_POST['f_adresse']);
  $f_code_postal = securisation($_POST['f_code_postal']);
  $f_ville = securisation($_POST['f_ville']);
  $f_pays = securisation($_POST['f_pays']);
  $f_commentaire = htmlentities($_POST['f_commentaire']);
  $f_active = securisation($_POST['f_active']);
  $id_membre = $_SESSION['id_membre'];

  if ($f_nom != "") {


    if (!filter_var($f_email, FILTER_VALIDATE_EMAIL) === false) {

      $req = $bdd->prepare('SELECT * FROM fournisseurs WHERE f_nom = :f_nom AND id_membre = :id_membre');
      $req->execute(array('f_nom' => $f_nom, 'id_membre' => $id_membre));
      $donnees = $req->fetch();
      if ($req->rowCount() > 0 ) {

        setFlash('Nom du fournisseur déja utilisé.', 'danger');

      }else{

        $fournisseurs = $bdd->prepare('INSERT INTO fournisseurs(f_nom, f_ref, f_email, f_site, f_tel, f_fax, f_commentaire, f_pays, f_adresse, f_code_postal, f_ville, f_date, id_membre, f_active) 
          VALUES (:f_nom, :f_ref, :f_email, :f_site, :f_tel, :f_fax, :f_commentaire, :f_pays, :f_adresse, :f_code_postal, :f_ville, NOW(), :id_membre, :f_active)');
        $fournisseurs->execute(array(
          'f_nom' => $f_nom,
          'f_ref' => $f_ref,
          'f_email' => $f_email,
          'f_site' => $f_site,    
          'f_tel' => $f_tel,
          'f_fax' => $f_fax,
          'f_commentaire' => $f_commentaire,
          'f_pays' => $f_pays,
          'f_adresse' => $f_adresse,
          'f_code_postal' => $f_code_postal,
          'f_ville' => $f_ville,      
          'f_active' => $f_active,      
          'id_membre' => $id_membre
          ));   

        // HISTORIQUE INSERT DEBUT
        historique(2, $h_page, 'Ajout du fournisseur ' . $f_nom);
        // HISTORIQUE INSERT FIN

        setFlash('Vous avez bien ajouté <strong>' . $f_nom . '</strong> comme nouveau fournisseur.');
        header('Location:ajout_fournisseur.php');
        die();

      }


    }else{
      setFlash('Attention l\'email est vide ou invalide', 'danger');
    }



  }else{
    setFlash('Attention il n\'y à aucun nom de fournisseur.', 'danger');
  } 

}

include 'header-top.php'; ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="Administration Gestion">
<meta name="author" content="E-asy Gest">
<meta name="description" content="Gestion pour auto-entrepreneur">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>E-asy Gest</title>
<?php include 'header-bottom.php'; ?>

<!--Breadcrumb-->
<div class="breadcrumb clearfix">
  <ul>
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="ajout_fournisseur.php">Ajout d'un fournisseur</a></li>

  </ul>
</div>
<!--/Breadcrumb-->

<?php echo flash(); ?>
<?php include 'astuces.php'; ?>

<div class="page-header">
  <h1>Ajout d'un fournisseur<small>Formulaire</small></h1>
</div>

<!-- Widget Row Start grid -->
<div class="row">
  <div class="col-md-12 bootstrap-grid"> 


   <!-- New widget -->
   <div class="col-md-6  bootstrap-grid">
    <div class="powerwidget green" id="most-form-elements" data-widget-editbutton="false">
      <header>
        <h2>Ajout fournisseur</h2>
      </header>
      <div class="inner-spacer">
        <form action="#" method="post" class="orb-form">
          <fieldset>
            <section>
              <label class="label">Nom du fournisseur</label>
              <label class="input">
                <input type="text" name="f_nom" value="<?php echo value('f_nom'); ?>">
              </label>
            </section>

            <section>
              <label class="label">Reférence</label>
              <label class="input">
                <input type="text" name="f_ref" value="<?php echo value('f_ref'); ?>">
              </label>
              <div class="note"><strong>Note:</strong> Ex: F5478EF</div>
            </section>

            <section>
              <label class="label">Site web</label>
              <label class="input">
                <input type="text" name="f_site" value="<?php echo value('f_site'); ?>">
              </label>
            </section>

            <section>
              <label class="label">Contact email</label>
              <label class="input">
                <input type="email" name="f_email" value="<?php echo value('f_email'); ?>">
              </label>
            </section>

            <section>
              <label class="label">Téléphone</label>
              <label class="input">
                <input type="text" name="f_tel" value="<?php echo value('f_tel'); ?>">
              </label>
            </section>

            <section>
              <label class="label">Fax</label>
              <label class="input">
                <input type="text" name="f_fax" value="<?php echo value('f_fax'); ?>">
              </label>
            </section>          

            <section>
              <label class="label">Adresse</label>
              <label class="input">
                <input type="text" name="f_adresse" value="<?php echo value('f_adresse'); ?>">
              </label>
            </section>
            <section>
              <label class="label">Code Postal</label>
              <label class="input">
                <input type="text" name="f_code_postal" value="<?php echo value('f_code_postal'); ?>">
              </label>
            </section>

            <section>
              <label class="label">Ville</label>
              <label class="input">
                <input type="text" name="f_ville" value="<?php echo value('f_ville'); ?>">
              </label>
            </section>

            <section>
              <label class="label">Pays</label>
              <label class="select">
                <select class="select2" name="f_pays" value="<?php echo value('f_pays'); ?>">
                  <?php
                  $pays = $bdd->query('SELECT * FROM pays ORDER BY nom_fr_fr ASC');
                  while ($donnees = $pays->fetch()){
                    echo '<option value="'.$donnees['alpha2'].'">' .  $donnees['nom_fr_fr'] . '</option>';
                  } 
                  $pays->closeCursor();
                  ?>
                </select>
              </label>
            </section>   

            <section>
              <label class="label">Commentaire</label>
              <label class="textarea textarea-expandable">
                <textarea rows="3" name="f_commentaire"><?php echo value('f_commentaire'); ?></textarea>
              </label>
            </section>         

            <label class="toggle">
              <input type="checkbox" name="f_active" value="1" checked >
              <i></i>Activer
            </label>

            <footer>
              <button type="submit" name="send" class="btn t-btn-green">Envoyer</button>
            </footer>
          </form>
        </div>
      </div>
    </div>

    <!-- End .powerwidget -->

    <div class="col-md-6  bootstrap-grid">
      <div class="powerwidget cold-grey" id="table2" data-widget-editbutton="false">
        <header>
          <h2>Dernier fournisseur</h2>
        </header>
        <div class="inner-spacer">
          <table class="table table-condensed table-bordered margin-0px">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Référence</th>
                <th>Email</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $fournisseurs = $bdd->prepare('SELECT * FROM membres, fournisseurs WHERE membres.id_membre = fournisseurs.id_membre AND membres.id_membre = :id ORDER BY f_date DESC LIMIT 0, 10');
              $fournisseurs->execute(array('id' => $_SESSION['id_membre']));
              while ($donnees = $fournisseurs->fetch()){
                echo '<tr>';
                echo '<td>' .  $donnees['f_nom'] . '</td>';
                echo '<td>' .  $donnees['f_ref'] . '</td>';
                echo '<td>' .  $donnees['f_email'] . '</td>';
                if ($donnees['f_active'] == 1) {
                  echo '<td><span class="label label-success">Active</span></td>';
                }else{
                  echo '<td><span class="label label-danger">Desactivé</span></td>';
                }                
                echo '</tr>';
              } 
              $fournisseurs->closeCursor();
              ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- End powerwidget -->

  </div>
  <!-- /Inner Row Col-md-12 --> 
</div>
<!-- /Widgets Row End Grid--> 
</div>
<!-- / Content Wrapper --> 

<?php include 'footer.php'; ?>