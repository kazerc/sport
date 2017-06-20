   <?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">
    <meta charset="utf-8">
    <title>Club de sport de l'IUT de Senart</title>
  </head>
  <body>
    <?php
      include('header.php');
      ?>
    <div id="register">
    
    <form action="" method="post">
        <select name="name">
            <option value="-1"  selected="selected"></option>
  <?php 
     class Calendrier extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->authentification();
        }

        public function authentification(){

				
$bdd = mysqli_connect('dwarves.iut-fbleau.fr','duboisc','60f36d1201','duboisc');
      
 	$result = mysqli_query($bdd, "SELECT idMembre FROM Membre WHERE login = '" .$_SESSION['login'].  "'; ");
					//$result2=	mysqli_fetch_assoc($result); 
    
$req = mysqli_query($bdd,"SELECT nom  FROM Equipe join MembreEquipe on Equipe.idEquipe=MembreEquipe.idEquipe WHERE idMembre=" .$result['idMembre']. ";");
			//	$res=	mysqli_fetch_assoc($req); 
		
$a = 0;
foreach ($req as $equipe) {

  echo '<option value=' .$a. '>'.$equipe['nom'].'</option>';
$a++;
}
	}
				}

?>

    </select>


    <div>
        <input type="password" id="password" name ="password" placeholder="mot de passe"/>
    </div>

    <div class="button">
        <button type="submit" value="envoyer" name="rejoindre_equipe">rejoindre</button>
    </div>


</form>

    </div>
    <?php
      include('footer.php');
      ?>
  </body>
</html>