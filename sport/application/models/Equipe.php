<?php

session_start();

?>
<?php

class Equipe extends CI_Model {
  
  
	public function __construct() {
		parent::__construct();
  	$this->load->database();
		$this->creerEquipe();

	}
	
public function creerEquipe(){
 
$nomEquipe = $_POST['nomEquipe'];

	$bdd = mysqli_connect ('dwarves.iut-fbleau.fr', 'duboisc', '60f36d1201', 'duboisc');
	$req = mysqli_query($bdd, " SELECT idEquipe, nom FROM Equipe");

foreach ($req as $reponse) {
if ($nomEquipe == $reponse['nom']) {
	$this->load->view('CreerEquipe');
}
}



	// on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
	mysqli_query ($bdd, "INSERT INTO Equipe VALUES(' ','".$_POST['nomEquipe']."','".$_POST['passwordE']."','".$_POST['sport']."','".$_POST['ville']."','".$_POST['description']."','".$_POST['mixité']."','".$_POST['logo']."','".$_POST['photo']."')") or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
$data2 = mysqli_query($bdd,"SELECT idEquipe FROM Equipe WHERE nom = '".$_POST['nomEquipe']."';");
	$result=	mysqli_fetch_assoc($data2); 
	$data3 = mysqli_query($bdd, "SELECT idMembre FROM Membre WHERE login = '" .$_SESSION['login'].  "'; ");
	$data4=	mysqli_fetch_assoc($data3); 


	mysqli_query($bdd, "INSERT INTO Administrateur VALUES(".$data4['idMembre']. ",".$result['idEquipe'].");") or die ('Erreur SQL !<br />');
  	mysqli_close($bdd);


	        $this->load->view("EquipeOk");





}
}



?>