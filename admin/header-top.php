<?php if (isset($_SESSION['id_membre'])) {
	// Session OK
}else{
	header('Location:../index.php');
	die();
} 
?>
<!DOCTYPE html>
<head>