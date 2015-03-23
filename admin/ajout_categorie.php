<?php 
include '../bdd.php';
include '../function.php';

$h_page = "Ajout d'une catégorie";

include 'pages/ajout_categorie-form.php';

include 'header-top.php'; ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="Administration Gestion">
<meta name="author" content="E-asy Gest">
<meta name="description" content="Gestion pour auto-entrepreneur">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ajout d'une catégorie</title>
<?php include 'header-bottom.php'; ?>

<!--Breadcrumb-->
<div class="breadcrumb clearfix">
  <ul>
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="ajout_categorie.php">Ajout d'une catégorie</a></li>

  </ul>
</div>
<!--/Breadcrumb-->

<?php echo flash();?>
<?php include 'astuces.php'; ?>

<div class="page-header">
  <h1>Ajout d'une catégorie</h1>
</div>

<!-- Widget Row Start grid -->
<div class="row">
  <div class="col-md-12 bootstrap-grid"> 

   <!-- New widget -->
   <div class="col-md-6  bootstrap-grid">
    <div class="powerwidget green" id="most-form-elements" data-widget-editbutton="false">
      <header>
        <h2>Ajout catégorie</h2>
      </header>
      <div class="inner-spacer">
        <form action="#" method="post" class="orb-form" id="myForm" name="r_generate">
          <fieldset>
            <section>
              <label class="label">Nom de la catégorie</label>
              <label class="input"> <i class="icon-append fa fa-question"></i>
                <input type="text" name="c_nom" id="c_nom" value="<?php echo value('c_nom'); ?>">
                <b class="tooltip tooltip-top-right">Le nom d'une catégorie ne peut pas faire moins de 2 caractères</b>
              </label>
            </section>


            <section>
              <label class="label">Reférence</label>
              <label class="input">
                <label class="input"> <i class="icon-append fa fa-question"></i>
                  <input class="maj" type="text" name="c_ref" id="c_ref" value="<?php echo value('c_ref'); ?>">
                  <b class="tooltip tooltip-top-right">La référence d'une catégorie doit contenir 5 caractères maximum</b>
                </label>
                <div class="note"><strong>Note:</strong> Ex: F5478EF</div> 
                <input type="button" value="Générer" onClick="generate(this.form.gen_ref.value)">
                <input type="hidden" name="gen_ref" value="5"> 
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
          <h2>Derniere catégories</h2>
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