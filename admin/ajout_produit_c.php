<?php 
include '../bdd.php';
include '../function.php';

$h_page = "Ajout d'un produit composant.";

include 'pages/ajout_produit_c-form.php';

include 'header-top.php'; ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="Administration Gestion">
<meta name="author" content="E-asy Gest">
<meta name="description" content="Gestion pour auto-entrepreneur">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ajout d'un produit composant</title>
<?php include 'header-bottom.php'; ?>

<!--Breadcrumb-->
<div class="breadcrumb clearfix">
  <ul>
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="ajout_produit_c.php">Ajout d'un produit composant</a></li>

  </ul>
</div>
<!--/Breadcrumb-->

<?php echo flash();?>
<?php include 'astuces.php'; ?>

<div class="page-header">
  <h1>Ajout d'un produit composant</h1>
</div>

<!-- Widget Row Start grid -->
<div class="row">
  <div class="col-md-12 bootstrap-grid"> 

   <!-- New widget -->
   <div class="col-md-6  bootstrap-grid">
    <div class="powerwidget green" id="most-form-elements" data-widget-editbutton="false">
      <header>
        <h2>Ajout d'un composant</h2>
      </header>
      <div class="inner-spacer">
        <form action="#" method="post" class="orb-form" id="myForm" name="r_generate">
          <fieldset>
            <section>
              <label class="label">Nom du composant</label>
              <label class="input"> <i class="icon-append fa fa-question"></i>
                <input type="text" name="pc_nom" id="pc_nom" value="<?php echo value('pc_nom'); ?>">
                <b class="tooltip tooltip-top-right">Le nom d'un composant de produit ne peut pas faire moins de 2 caractères</b>
              </label>
            </section>

            <section>
              <label class="label">Reférence</label>
              <label class="input"> <i class="icon-append fa fa-question"></i>
                <input type="text" name="pc_ref" id="pc_ref" value="<?php echo value('pc_ref'); ?>">
                <b class="tooltip tooltip-top-right">La référence d'un composant de produit doit contenir 10 caractères maximum</b>
              </label>
            </section>

            <section>
              <label class="label">Catégorie</label>
              <label class="select">
                <select class="select2" name="pc_categorie" value="<?php echo value('pc_categorie'); ?>">
                  <?php
                  $categories = $bdd->prepare('SELECT * FROM membres, categories 
                    WHERE membres.id_membre = categories.id_membre 
                    AND categories.c_active = 1 
                    AND membres.id_membre = :id_membre 
                    ORDER BY c_nom ASC');
                  $categories->execute(array('id_membre' => $_SESSION['id_membre']));
                  while ($donnees = $categories->fetch()){
                    echo '<option value="'.$donnees['id_categorie'].'">' . $donnees['c_nom'] . '</option>';
                  } 
                  $categories->closeCursor();
                  ?>
                </select>
              </label>
            </section> 

            <section>
              <label class="label">Commentaire</label>
              <label class="textarea textarea-expandable">
                <textarea rows="3" name="pc_commentaire"><?php echo value('pc_commentaire'); ?></textarea>
              </label>
            </section>         

            <label class="toggle">
              <input type="checkbox" name="pc_active" value="1" checked >
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
          <h2>Dernier composant de produit</h2>
        </header>
        <div class="inner-spacer">
          <table class="table table-condensed table-bordered margin-0px">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Référence</th>
                <th>Catégorie</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $produit_c = $bdd->prepare('SELECT * FROM membres, produit_c, categories 
                WHERE produit_c.id_categorie = categories.id_categorie 
                AND membres.id_membre = produit_c.id_membre
                AND membres.id_membre = :id 
                ORDER BY pc_date 
                DESC LIMIT 0, 10');
              $produit_c->execute(array('id' => $_SESSION['id_membre']));
              while ($donnees = $produit_c->fetch()){
                echo '<tr>';
                echo '<td>' .  $donnees['pc_nom'] . '</td>';
                echo '<td>' .  $donnees['pc_ref'] . '</td>';
                if ($donnees['c_active'] == 1) {
                   echo '<td>' .  $donnees['c_nom'] . '</td>';
                }else{
                   echo '<td>Vide où désactivé</td>';
                }               
                if ($donnees['pc_active'] == 1) {
                  echo '<td><span class="label label-success">Active</span></td>';
                }else{
                  echo '<td><span class="label label-danger">Desactivé</span></td>';
                }                
                echo '</tr>';
              } 
              $produit_c->closeCursor();
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