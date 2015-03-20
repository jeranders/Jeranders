<?php 

// Suppression du fournisseur
if (isset($_GET['del'])) {
	checkCsrf();
	$req = $bdd->prepare('DELETE FROM fournisseurs WHERE id_fournisseur = :id_fournisseur');
	$req->execute(array(
		'id_fournisseur' => $donnees['id_fournisseur']
		));

				// HISTORIQUE INSERT DEBUT
					historique(3, $h_page, 'Suppression du fournisseur ' . $donnees['f_nom']);
				// HISTORIQUE INSERT FIN


	setFlash('Vous avez bien supprimé ' . $donnees['f_nom'], 'danger');
	header('Location:liste_fournisseurs.php');
	die();
}else{

}

 ?>