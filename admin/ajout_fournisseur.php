<?php 
include '../bdd.php';
include '../function.php';

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
                <h2>Form Elements<small>Normal State</small></h2>
              </header>
              <div class="inner-spacer">
                <form action="" class="orb-form">
                  <fieldset>
                    <section>
                      <label class="label">Text input</label>
                      <label class="input">
                        <input type="text">
                      </label>
                    </section>
                  
                  <footer>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </footer>
                </form>
              </div>
            </div>
          </div>
          
          <!-- End .powerwidget -->
          
        <div class="col-md-6  bootstrap-grid">
            <div class="powerwidget green" id="most-form-elements" data-widget-editbutton="false">
              <header>
                <h2>Form Elements<small>Normal State</small></h2>
              </header>
              <div class="inner-spacer">
                <form action="" class="orb-form">
                  <fieldset>
                    <section>
                      <label class="label">Text input</label>
                      <label class="input">
                        <input type="text">
                      </label>
                    </section>
                  
                  <footer>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </footer>
                </form>
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