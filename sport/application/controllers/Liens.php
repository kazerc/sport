    <?php

    class Liens extends CI_Controller {

    	public function __construct() {
    		parent::__construct();
    	$this->load->helper('url');
    	}

    public function home(){
    		$this->load->view('accueil');  
    }
         public function main(){
    		$this->load->view('main');  
    }

    public function event(){
    $this->load->view('CreerEvent');
    }
        public function team(){
    $this->load->view("CreerEquipe");
    }
    
      public function subscribe(){
        $this->load->view("inscription");
      }
      
       public function calendrier(){
        $this->load->view("Calendrier");
      }

    
      public function rejoindre(){
        $this->load->view("rejoindre");
      }
    	
    	
    	public function inscription() {
    		$this->load->view('vue');
    		
    	}
    }
?>
