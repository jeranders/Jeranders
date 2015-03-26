<?php 
if (isset($_POST['send'])) {
  $c_nom = ucfirst(securisation($_POST['c_nom']));
  $c_description = htmlentities($_POST['c_description']);
  $c_ref = strtoupper(securisation($_POST['c_ref']));  
  $c_active = securisation($_POST['c_active']);
  $id_membre = (int)$_SESSION['id_membre'];

  if ($c_nom != "") {

    if (strlen($c_nom) >= 2) {

      $req = $bdd->prepare('SELECT * FROM categories WHERE c_nom = :c_nom AND id_membre = :id_membre');
      $req->execute(array('c_nom' => $c_nom, 'id_membre' => $id_membre));
      $donnees = $req->fetch();
      if ($req->rowCount() > 0 ) {

        setFlash('Nom de la catégorie déja utilisé.', 'danger');

      }else{

        $categorie = $bdd->prepare('INSERT INTO categories(c_nom, c_description, c_ref, id_membre, c_active, c_date) 
          VALUES (:c_nom, :c_description, :c_ref, :id_membre, :c_active, NOW())');
        $categorie->execute(array(
          'c_nom' => $c_nom,
          'c_description' => $c_description, 
          'c_ref' => $c_ref,
          'id_membre' => $id_membre,
          'c_active' => $c_active
          ));   

        // HISTORIQUE INSERT DEBUT
        historique(2, $h_page, 'Ajout de la catégorie ' . $c_nom);
        // HISTORIQUE INSERT FIN

        setFlash('Vous avez bien ajouté <strong>' . $c_nom . '</strong> comme nouvelle catégorie.');
        header('Location:ajout_categorie.php');
        die();
      }

    }else{
      setFlash('Attention il y à moins de 2 caractères', 'danger');
    } 

  }else{
    setFlash('Attention il n\'y à aucun nom de catégorie.', 'danger');
  } 

}


?>