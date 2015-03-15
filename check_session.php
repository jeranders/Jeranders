<?php 
if (isset($_SESSION['id_membre']) == '' ) {
	header('Location:../index.php');
	die();
}

?>