<?php 
include '../bdd.php';
include '../function.php';

$h_page = 'Liste composant de produit';

include 'pages/desactive_produit_c.php';
include 'pages/active_produit_c.php';

include 'header-top.php'; ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="Administration Gestion">
<meta name="author" content="E-asy Gest">
<meta name="description" content="Gestion pour auto-entrepreneur">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Liste des composants de produits</title>
<?php include 'header-bottom.php'; ?>

<!--Breadcrumb-->
<div class="breadcrumb clearfix">
  <ul>
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="liste_produit_c.php">Liste des composants de produits</a></li>

  </ul>
</div>
<!--/Breadcrumb-->

<?php echo flash(); ?>
<?php include 'astuces.php'; ?>

<div class="page-header">
  <h1>Liste des composants de produits</h1>
</div>

<!-- Widget Row Start grid -->
<div class="row">
  <div class="col-md-12 bootstrap-grid"> 


    <!-- New widget -->
    <div class="powerwidget" id="datatable-filter-column" data-widget-editbutton="false">
      <header>
        <h2>Composants</h2>
      </header>
      <div class="inner-spacer">
        <table class="display table table-striped table-hover" id="table-2">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Référence</th>
              <th>Commentaire</th>
              <th>Active</th>
              <th>Contrôle</th>
            </tr>
          </thead>
          <tbody>

            <?php 
            $produit_c = $bdd->prepare('SELECT * FROM membres, produit_c WHERE membres.id_membre = produit_c.id_membre AND membres.id_membre = :id ORDER BY pc_date DESC LIMIT 0, 10');
            $produit_c->execute(array('id' => $_SESSION['id_membre']));
            while ($donnees = $produit_c->fetch()){
              ?>
              <tr>
                <td><a href="produit_c.php?p=<?php echo $donnees['id_produit_c']; ?>"><?php echo $donnees['pc_nom']; ?></a> </td>
                <td><?php echo $donnees['pc_ref']; ?> </td>
                <td><?php echo $donnees['pc_commentaire']; ?> </td>
                <?php          
                if ($donnees['pc_active'] == 1) {
                  ?>
                  <td><span class="label label-success">Active</span></td>
                  <?php
                }else{
                  ?>
                  <td><span class="label label-danger">Desactivé</span></td>
                  <?php
                }
                ?>
                <td> 
                  <a href="produit_c.php?modif=<?php echo $donnees['id_produit_c']; ?>" class="btn btn-success tooltiped" data-toggle="tooltip" data-placement="bottom" title="Modifier"><i class="fa fa-edit"></i></a>  
                  <a  class="btn btn-danger tooltiped" data-toggle="tooltip" data-placement="bottom" title="Supprimer"><i class="fa fa-trash-o"></i></a> 

                  <?php          
                  if ($donnees['pc_active'] == 1) {
                    ?>
                    <a href="liste_produit_c.php?desactive=<?php echo $donnees['id_produit_c']?>&<?php echo csrf(); ?>" class="btn btn-warning tooltiped" data-toggle="tooltip" data-placement="bottom" title="Désactiver"><i class="fa fa-power-off"></i></a>
                    <?php
                  }else{
                    ?>
                    <a href="liste_produit_c.php?active=<?php echo $donnees['id_produit_c']?>&<?php echo csrf(); ?>" class="btn btn-success tooltiped" data-toggle="tooltip" data-placement="bottom" title="Activer"><i class="fa fa-power-off"></i></a>
                    <?php
                  }
                  ?>

                </td>
                <?php
                echo '</tr>';
              } 
              $produit_c->closeCursor();
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th><input type="text" name="filter_game_name" placeholder="Filtrer par nom" class="search_init" /></th>
                <th><input type="text" name="filter_publisher" placeholder="Filtrer par Référence" class="search_init" /></th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!-- End .powerwidget --> 

    </div>
    <!-- /Inner Row Col-md-12 --> 
  </div>
  <!-- /Widgets Row End Grid--> 
</div>
<!-- / Content Wrapper --> 

<?php include 'footer.php'; ?>