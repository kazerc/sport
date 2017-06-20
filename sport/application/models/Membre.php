<?php

class Membre extends CI_Model {
  
  
	public function __construct() {
		parent::__construct();
  	$this->load->database();
		$this->inscrireMembre();

	}
  
public function inscrireMembre(){
    	$bdd = mysqli_connect ('dwarves.iut-fbleau.fr', 'duboisc', '60f36d1201', 'duboisc');
mysqli_select_db ($bdd,'duboisc') ;


	// on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
	mysqli_query ($bdd, "INSERT INTO Membre VALUES(' ','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['login']."','".$_POST['password']."','".$_POST['mail']."','".$_POST['avatar']."')") or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

  	mysqli_close($bdd);
	        $this->load->view("subscription");

  /* 
    if (isset($_POST["login"]) AND isset($_POST["password"]) AND isset($_POST["prenom"]) AND isset($_POST["nom"]) AND isset($_POST["mail"]) AND isset($_POST["mail"]) AND isset($_POST["avatar"]) )  {
  
      $idMembre=' ';
      $nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$login=$_POST['login'];
		$mpd=$_POST['password'];
		$mail=$_POST['mail'];
		$avatar=$_POST['avatar'];
      
$req = $bdd->prepare('INSERT INTO Membre(idMembre, nom, prenom, login, motDePasse, mail, avatar) VALUES(:idMembre ,:nom, :prenom, :login, :password, :mail, :avatar)');
$req->execute(array(
  'idMembre' => $idMembre,
	'nom' => $nom,
	'prenom' => $prenom,
	'login' => $login,
	'motDePasse' => $password,
	'mail' => $mail,
	'avatar' => $avatar
	));
		
  }
  */
}
  
}
?>