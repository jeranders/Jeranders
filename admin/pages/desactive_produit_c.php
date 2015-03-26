<?php 

if (isset($_GET['desactive'])) {
	$_GET['desactive'] = (int)$_GET['desactive'];
	checkCsrf();
	$req = $bdd->prepare('SELECT * FROM produit_c WHERE id_produit_c = :id_produit_c');
	$req->execute(array('id_produit_c' => $_GET['desactive']));
	$donnees = $req->fetch();
	$id_produit_c = $donnees['id_produit_c'];
	$pc_nom = $donnees['pc_nom'];

	$pc_active = 0;
	$id_membre = $_SESSION['id_membre'];
	$req = $bdd->prepare('UPDATE produit_c SET pc_active = :pc_active WHERE id_produit_c = :id_produit_c AND id_membre = :id_membre');
	$req->execute(array(
		'id_produit_c' => $id_produit_c,
		'pc_active' => $pc_active,
		'id_membre' => $id_membre
		));

				// HISTORIQUE INSERT DEBUT
	historique(4, $h_page, 'Désactivation du composant produit ' . $pc_nom);
				// HISTORIQUE INSERT FIN


	setFlash('Vous avez bien désactivé ' . $donnees['pc_nom']);
	header('Location:liste_produit_c.php');
	die();
}else{

}

?>