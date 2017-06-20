    <?php

    class Data extends CI_Controller {

    	public function __construct() {
    		parent::__construct();
    	$this->load->helper('url');
    	}



      public function connexion(){
        $this->load->model("Connexion");
      }




      public function okinscription(){
         $this->load->model("Membre");
      }
      
     public function okcreation(){
         $this->load->model("Equipe");
      }

    	  public function joinEquipe() {
   $this->load->model("Join");
  }
    	
    	

    }
?>
