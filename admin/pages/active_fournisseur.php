<?php 

// Suppression du fournisseur
if (isset($_GET['active'])) {
	$_GET['active'] = (int)$_GET['active'];
	checkCsrf();
	$req = $bdd->prepare('SELECT * FROM fournisseurs WHERE id_fournisseur = :id_fournisseur');
	$req->execute(array('id_fournisseur' => $_GET['active']));
	$donnees = $req->fetch();
	$id_fournisseur = $donnees['id_fournisseur'];
	$f_nom = $donnees['f_nom'];

	$f_active = 1;
	$id_membre = $_SESSION['id_membre'];
	$req = $bdd->prepare('UPDATE fournisseurs SET f_active = :f_active WHERE id_fournisseur = :id_fournisseur AND id_membre = :id_membre');
	$req->execute(array(
		'id_fournisseur' => $id_fournisseur,
		'f_active' => $f_active,
		'id_membre' => $id_membre
		));

				// HISTORIQUE INSERT DEBUT
	historique(4, $h_page, 'Activation du fournisseur ' . $f_nom);
				// HISTORIQUE INSERT FIN


	setFlash('Vous avez bien activé ' . $donnees['f_nom']);
	header('Location:liste_fournisseur.php');
	die();
}else{

}

?>