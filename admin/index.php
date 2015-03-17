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
    <li><a href="index.php">Panneaux de contrôle</a></li>

  </ul>
</div>
<!--/Breadcrumb-->

<?php echo flash(); ?>

<?php include 'astuces.php'; ?>

<div class="page-header">
  <h1>Panneaux de contrôle<small>Vue d'ensemble</small></h1>
</div>

<!-- Widget Row Start grid -->
<div class="row" id="powerwidgets">
  <div class="col-md-12 bootstrap-grid"> 

    <!--Panel-->
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-title pull-left">Labels<small>Panel Success</small></div>
        <div class="pull-right"> <a href="#" data-toggle="modal" data-target="#panel-question" class="btn-question"><i class="fa fa-question-circle"></i></a> <a href="#" class="btn-minmax"><i class="fa fa-chevron-circle-up"></i></a> <a href="#" class="btn-close"><i class="fa fa-times-circle"></i></a> </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body"> Add Content and Start with Panel </div>
    </div>
    <!--/Panel--> 


  </div>
  <!-- /Inner Row Col-md-12 --> 
</div>
<!-- /Widgets Row End Grid--> 
</div>
<!-- / Content Wrapper --> 

<?php include 'footer.php'; ?>