<?php 

// Suppression du fournisseur
if (isset($_GET['active'])) {
	$_GET['active'] = (int)$_GET['active'];
	checkCsrf();
	$req = $bdd->prepare('SELECT * FROM categories WHERE id_categorie = :id_categorie');
	$req->execute(array('id_categorie' => $_GET['active']));
	$donnees = $req->fetch();
	$id_categorie = $donnees['id_categorie'];
	$c_nom = $donnees['c_nom'];

	$c_active = 1;
	$id_membre = $_SESSION['id_membre'];
	$req = $bdd->prepare('UPDATE categories SET c_active = :c_active WHERE id_categorie = :id_categorie AND id_membre = :id_membre');
	$req->execute(array(
		'id_categorie' => $id_categorie,
		'c_active' => $c_active,
		'id_membre' => $id_membre
		));

				// HISTORIQUE INSERT DEBUT
	historique(4, $h_page, 'Activation de la catégorie ' . $c_nom);
				// HISTORIQUE INSERT FIN


	setFlash('Vous avez bien activé ' . $donnees['c_nom']);
	header('Location:liste_categories.php');
	die();
}else{

}

?>