<?php 

if (isset($_GET['active'])) {
	$_GET['active'] = (int)$_GET['active'];
	checkCsrf();
	$req = $bdd->prepare('SELECT * FROM produit_c WHERE id_produit_c = :id_produit_c');
	$req->execute(array('id_produit_c' => $_GET['active']));
	$donnees = $req->fetch();
	$id_produit_c = $donnees['id_produit_c'];
	$pc_nom = $donnees['pc_nom'];

	$pc_active = 1;
	$id_membre = $_SESSION['id_membre'];
	$req = $bdd->prepare('UPDATE produit_c SET pc_active = :pc_active WHERE id_produit_c = :id_produit_c AND id_membre = :id_membre');
	$req->execute(array(
		'id_produit_c' => $id_produit_c,
		'pc_active' => $pc_active,
		'id_membre' => $id_membre
		));

				// HISTORIQUE INSERT DEBUT
	historique(4, $h_page, 'Activation du composant produit ' . $pc_nom);
				// HISTORIQUE INSERT FIN


	setFlash('Vous avez bien activé ' . $donnees['pc_nom']);
	header('Location:liste_produit_c.php');
	die();
}else{

}

?>