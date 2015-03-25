<?php session_start();
// Fonction qui permet de faire un message par session.
function flash(){
	if (isset($_SESSION['flash'])) {
		extract($_SESSION['flash']);
		unset($_SESSION['flash']);
		return "<div id='noti'><div class='alert alert-$type alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		$message
		</div></div>";	

	}
}

function setFlash($message, $type = 'success'){
	$_SESSION['flash']['message'] = $message;
	$_SESSION['flash']['type'] = $type;
}


// Protection des données SQL

if (!isset($_SESSION['csrf'])) {
	$_SESSION['csrf'] = sha1(time() + rand());
}

function csrf(){
	return 'csrf=' . $_SESSION['csrf'];
}

function checkCsrf(){
	if (!isset($_GET['csrf']) || $_GET['csrf'] != $_SESSION['csrf']) {
		header('Location:csrf.php');
		die();
	}
}


/*Fonction qui affiche les infos des utilisateur n'importe ou dans la page*/
function info($id){
	
	global $bdd;
	$membres = $bdd->prepare('SELECT * FROM membres, configurations WHERE membres.id_membre = configurations.id_membre AND membres.id_membre = :id');
	$membres->execute(array('id' => $_SESSION['id_membre']));
	$donnees = $membres->fetch(); 
	$membres->closeCursor();
	return $donnees[$id];;
	
}

function info_active($id){
	
	global $bdd;
	$ca = $bdd->prepare('SELECT * FROM membres, config_activite WHERE membres.id_membre = config_activite.id_membre AND membres.id_membre = :id');
	$ca->execute(array('id' => $_SESSION['id_membre']));
	$donnees = $ca->fetch(); 
	$ca->closeCursor();
	return $donnees[$id];;
	
}

/* FONCTION LISTE DES FOURNISSEURS
*/
// function fournisseurs($id){

// 	global $bdd;
// 	$fournisseurs = $bdd->prepare('SELECT * FROM membres, fournisseurs WHERE membres.id_membre = fournisseurs.id_membre AND membres.id_membre = :id ORDER BY fournisseurs.f_nom ASC');
// 	$fournisseurs->execute(array('id' => $_SESSION['id_membre']));
// 	while ($donnees = $fournisseurs->fetch()){
// 		echo '<option>' .  $donnees[$id] . '</option>';
// 	} 
// 	$fournisseurs->closeCursor();
// 	return $donnees[$id];
// }

function typeproduit($id){
	
	global $bdd;
	$typeproduit = $bdd->prepare('SELECT * FROM membres, type_produit WHERE membres.id_membre = type_produit.id_membre AND membres.id_membre = :id ORDER BY type_produit.t_p_nom ASC');
	$typeproduit->execute(array('id' => $_SESSION['id_membre']));
	while ($donnees = $typeproduit->fetch()){
		echo '<option>' .  $donnees[$id] . '</option>';
	} 
	$typeproduit->closeCursor();
	return $donnees[$id];
}




function securisation($donnees){
	$donnees = trim($donnees);
	$donnees = stripcslashes($donnees);
	$donnees = strip_tags($donnees);
	return $donnees;
}



//Fonction pour choisir label et texte des types historiques

function type_historique($id) {
	global $bdd;
	$type_historique = $bdd->query('SELECT * FROM historiques'); 
	$donnees = $type_historique->fetch();
	if ($id == 1) {
		echo '<span class="label label-success label-sm"> Modification </span>';
	}elseif ($id == 2) {
		echo '<span class="label label-primary label-sm"> Ajout </span>';
	}elseif ($id == 3) {
		echo '<span class="label label-danger label-sm"> Suppression </span>';
	}
	return $id;
	$type_historique->closeCurser();
}


// Fonction insertion historique
function historique($type, $page, $description){
	global $bdd;
	$h_page = $page;
	$h_type = $type;
	$h_description =  $description;
	$h_ip = $_SERVER["REMOTE_ADDR"];
	$h_id_membre = $_SESSION['id_membre'];

	$historique = $bdd->prepare('INSERT INTO historiques(h_page, h_date, h_type, h_description, h_ip, h_id_membre) VALUES (:h_page, NOW(), :h_type, :h_description, :h_ip, :h_id_membre)');
	$historique->execute(array(         
		'h_page' => $h_page,                    
		'h_type' => $h_type,
		'h_description' => $h_description,
		'h_ip' => $h_ip,
		'h_id_membre' => $h_id_membre
		));
}




/**
 * Fonction getRelativeTime
 * <?php echo getRelativeTime ('2010-03-01 13:25:00'); ?>
 */

function getRelativeTime($date) {
    // Déduction de la date donnée à la date actuelle
	$time = time() - strtotime($date); 

    // Calcule si le temps est passé ou à venir
	if ($time > 0) {
		$when = "il y a";
	} else if ($time < 0) {
		$when = "dans environ";
	} else {
		return "il y a moins d'une seconde";
	}
	$time = abs($time); 

    // Tableau des unités et de leurs valeurs en secondes
    $times = array( 31104000 =>  'an{s}',       // 12 * 30 * 24 * 60 * 60 secondes
                    2592000  =>  'mois',        // 30 * 24 * 60 * 60 secondes
                    86400    =>  'jour{s}',     // 24 * 60 * 60 secondes
                    3600     =>  'heure{s}',    // 60 * 60 secondes
                    60       =>  'minute{s}',   // 60 secondes
                    1        =>  'seconde{s}'); // 1 seconde         

    foreach ($times as $seconds => $unit) {
        // Calcule le delta entre le temps et l'unité donnée
    	$delta = round($time / $seconds); 

        // Si le delta est supérieur à 1
    	if ($delta >= 1) {
            // L'unité est au singulier ou au pluriel ?
    		if ($delta == 1) {
    			$unit = str_replace('{s}', '', $unit);
    		} else {
    			$unit = str_replace('{s}', 's', $unit);
    		}
            // Retourne la chaine adéquate
    		return $when." ".$delta." ".$unit;
    	}
    }
}




function value($id){
	if (isset($_POST[$id])) {
		echo $_POST[$id];
	}
}

?>