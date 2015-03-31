<?php 
include '../bdd.php';
include '../function.php';

$h_page = "Création d'un produit";

//include 'pages/ajout_produit-form.php';

include 'header-top.php'; ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="Administration Gestion">
<meta name="author" content="E-asy Gest">
<meta name="description" content="Gestion pour auto-entrepreneur">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Création d'un produit</title>
<?php include 'header-bottom.php'; ?>

<!--Breadcrumb-->
<div class="breadcrumb clearfix">
  <ul>
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="ajout_produit.php">Création d'un produit</a></li>

  </ul>
</div>
<!--/Breadcrumb-->

<?php echo flash();?>
<?php include 'astuces.php'; ?>

<div class="page-header">
  <h1>Création d'un produit</h1>
</div>

<!-- Widget Row Start grid -->
<div class="row">
  <div class="col-md-12 bootstrap-grid"> 

   <!-- New widget -->
   <div class="col-md-6  bootstrap-grid">
    <div class="powerwidget green" id="most-form-elements" data-widget-editbutton="false">
      <header>
        <h2>Création d'un produit</h2>
      </header>
      <div class="inner-spacer">
        <form action="#" method="post" class="orb-form" id="myForm" name="r_generate">
          <fieldset>
            <section>
              <label class="label">Nom du produit</label>
              <label class="input"> <i class="icon-append fa fa-question"></i>
                <input type="text" name="c_nom" id="c_nom" value="<?php echo value('c_nom'); ?>">
                <b class="tooltip tooltip-top-right">Le nom d'une catégorie ne peut pas faire moins de 2 caractères</b>
              </label>
            </section>


            <section>
              <label class="label">Reférence</label>
              <label class="input"> <i class="icon-append fa fa-question"></i>
                <input type="text" name="c_ref" id="c_ref" value="<?php echo value('c_ref'); ?>">
                <b class="tooltip tooltip-top-right">La référence d'une catégorie doit contenir 5 caractères maximum</b>
              </label>
            </section>       
          

            <section>
              <label class="label">Description</label>
              <label class="textarea textarea-expandable">
                <textarea rows="3" name="c_description"><?php echo value('c_description'); ?></textarea>
              </label>
            </section>         

            <label class="toggle">
              <input type="checkbox" name="c_active" value="1" checked >
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
          <h2>Derniere création</h2>
        </header>
        <div class="inner-spacer">
          <table class="table table-condensed table-bordered margin-0px">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Référence</th>
                <th>Description</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $categories = $bdd->prepare('SELECT * FROM membres, categories WHERE membres.id_membre = categories.id_membre AND membres.id_membre = :id ORDER BY c_date DESC LIMIT 0, 10');
              $categories->execute(array('id' => $_SESSION['id_membre']));
              while ($donnees = $categories->fetch()){
                echo '<tr>';
                echo '<td>' .  $donnees['c_nom'] . '</td>';
                echo '<td>' .  $donnees['c_ref'] . '</td>';
                echo '<td>' .  $donnees['c_description'] . '</td>';
                if ($donnees['c_active'] == 1) {
                  echo '<td><span class="label label-success">Active</span></td>';
                }else{
                  echo '<td><span class="label label-danger">Desactivé</span></td>';
                }                
                echo '</tr>';
              } 
              $categories->closeCursor();
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