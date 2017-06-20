
<?php  
    

    class Connexion extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->authentification();
        }

        public function authentification(){

$login = $_POST['login'];
$mdp = $_POST['password'];
$bool = false;



$connexion= mysqli_connect("dwarves.iut-fbleau.fr","duboisc","60f36d1201","duboisc");
mysqli_select_db ($connexion,'duboisc') ;

$requete= mysqli_query($connexion, "SELECT login,motDePasse FROM Membre WHERE login = '$login' AND motDePasse = '$mdp';")  or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

foreach($requete as $reponse) {
    if($login==$reponse['login'] AND $mdp==$reponse['motDePasse']) {
        $bool = true;
        $data = array('log'=>$login,'logged'=>true);
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
        $this->load->view('main');
    }
}   


    if ($bool==false) {
        $this->load->view('accueil');
    }




    }

    
  }  ?>