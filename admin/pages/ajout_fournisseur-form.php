<?php 
if (isset($_POST['send'])) {
  $f_nom = ucfirst(securisation($_POST['f_nom']));
  $f_site = securisation($_POST['f_site']);
  $f_email = securisation($_POST['f_email']);
  $f_ref = securisation($_POST['f_ref']);
  $f_tel = securisation($_POST['f_tel']);
  $f_fax = securisation($_POST['f_fax']);
  $f_adresse = securisation($_POST['f_adresse']);
  $f_code_postal = securisation($_POST['f_code_postal']);
  $f_ville = securisation($_POST['f_ville']);
  $f_pays = securisation($_POST['f_pays']);
  $f_commentaire = htmlentities($_POST['f_commentaire']);
  $f_active = securisation($_POST['f_active']);
  $id_membre = $_SESSION['id_membre'];

  if ($f_nom != "") {
 
      $req = $bdd->prepare('SELECT * FROM fournisseurs WHERE f_nom = :f_nom AND id_membre = :id_membre');
      $req->execute(array('f_nom' => $f_nom, 'id_membre' => $id_membre));
      $donnees = $req->fetch();
      if ($req->rowCount() > 0 ) {

        setFlash('Nom du fournisseur déja utilisé.', 'danger');

      }else{

        $fournisseurs = $bdd->prepare('INSERT INTO fournisseurs(f_nom, f_ref, f_email, f_site, f_tel, f_fax, f_commentaire, f_pays, f_adresse, f_code_postal, f_ville, f_date, id_membre, f_active) 
          VALUES (:f_nom, :f_ref, :f_email, :f_site, :f_tel, :f_fax, :f_commentaire, :f_pays, :f_adresse, :f_code_postal, :f_ville, NOW(), :id_membre, :f_active)');
        $fournisseurs->execute(array(
          'f_nom' => $f_nom,
          'f_ref' => $f_ref,
          'f_email' => $f_email,
          'f_site' => $f_site,    
          'f_tel' => $f_tel,
          'f_fax' => $f_fax,
          'f_commentaire' => $f_commentaire,
          'f_pays' => $f_pays,
          'f_adresse' => $f_adresse,
          'f_code_postal' => $f_code_postal,
          'f_ville' => $f_ville,      
          'f_active' => $f_active,      
          'id_membre' => $id_membre
          ));   

        // HISTORIQUE INSERT DEBUT
        historique(2, $h_page, 'Ajout du fournisseur ' . $f_nom);
        // HISTORIQUE INSERT FIN

        setFlash('Vous avez bien ajouté <strong>' . $f_nom . '</strong> comme nouveau fournisseur.');
        header('Location:ajout_fournisseur.php');
        die();

      }

  }else{
    setFlash('Attention il n\'y à aucun nom de fournisseur.', 'danger');
  } 

}


 ?>