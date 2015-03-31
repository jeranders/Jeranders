<?php 
if (isset($_POST['send'])) {
  $pc_nom = ucfirst(securisation($_POST['pc_nom']));
  $pc_commentaire = htmlentities($_POST['pc_commentaire']);
  $pc_ref = strtoupper(securisation($_POST['pc_ref']));
  $id_categorie = (int)$_POST['pc_categorie'];  
  $pc_active = (int)$_POST['pc_active'];
  $id_membre = (int)$_SESSION['id_membre'];

  if ($pc_nom != "") {

    if (strlen($pc_nom) >= 2) {

      if ($id_categorie != '') {

        $req = $bdd->prepare('SELECT * FROM produit_c WHERE pc_nom = :pc_nom AND id_membre = :id_membre');
        $req->execute(array('pc_nom' => $pc_nom, 'id_membre' => $id_membre));
        $donnees = $req->fetch();
        if ($req->rowCount() > 0 ) {

          setFlash('Nom du composant du produit déja utilisé.', 'danger');

        }else{

          $categorie = $bdd->prepare('INSERT INTO produit_c(pc_nom, pc_ref, id_categorie, pc_commentaire,  id_membre, pc_date, pc_active) 
            VALUES (:pc_nom, :pc_ref, :id_categorie, :pc_commentaire, :id_membre, NOW(), :pc_active)');
          $categorie->execute(array(
            'pc_nom' => $pc_nom,
            'id_categorie' => $id_categorie,
            'pc_commentaire' => $pc_commentaire, 
            'pc_ref' => $pc_ref,
            'id_membre' => $id_membre,
            'pc_active' => $pc_active
            ));   

        // HISTORIQUE INSERT DEBUT
          historique(2, $h_page, 'Ajout du composant produit ' . $pc_nom);
        // HISTORIQUE INSERT FIN

          setFlash('Vous avez bien ajouté <strong>' . $pc_nom . '</strong> comme nouveau composant produit.');
          header('Location:ajout_produit_c.php');
          die();
        }

      }else{
        setFlash('Attention vous devez enregistrer une <a href="ajout_categorie.php">catégorie</a>', 'danger');
      } 

    }else{
      setFlash('Attention il y à moins de 2 caractères', 'danger');
    } 

  }else{
    setFlash('Attention il n\'y à aucun nom de composant produit.', 'danger');
  } 

}


?>