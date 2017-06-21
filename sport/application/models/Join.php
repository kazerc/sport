

<?php

class Join extends CI_Model {
  
  
	public function __construct() {
		parent::__construct();
  	$this->load->database();
		$this->rejoindreEquipe();

	}
	
public function rejoindreEquipe(){
 
	$bdd = mysqli_connect ('dwarves.iut-fbleau.fr', 'duboisc', '60f36d1201', 'duboisc');
mysqli_select_db ($bdd,'duboisc') ;

	$nom = $_POST['name'];
	$mdp = $_POST['password'];

	// on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)

$idEquipe = mysqli_query($bdd,"SELECT nom, motDePasse FROM Equipe;");

foreach($idEquipe as $val) {
if ($mdp == $val['motDePasse'] AND $nom == $val['nom']) {
	$this->load->view("JoinEquipe");
}
else {
	$this->load->view("main");
}
}
 

		 

/*
	
	    foreach($idEquipe as $valuE){
    if( $_POST['name']==$valuE['nom'] AND  $_POST['password']==$valuE['motDePasse']){
$membre = mysqli_query($bdd, "SELECT idMembre FROM Membre WHERE login ='" . $_SESSION['login'] . "';");
			$res2=	mysqli_fetch_assoc($membre); 

$join = mysqli_query($bdd, "INSERT INTO MembreEquipe VALUES (". $result['idEquipe'] .",".$res2['idMembre'].");");
  	mysqli_close($bdd);
		$this->load->view("JoinEquipe");

}

			}

		$this->load->view('rejoindre');


*/


}
}



?>