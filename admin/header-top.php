<?php if (isset($_SESSION['id_membre'])) {
	# code...
}else{
	header('Location:../index.php');
	die();
} 
?>
<!DOCTYPE html>
<head>