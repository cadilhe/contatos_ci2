<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    /**
    É sempre conveniente criar um construror para cada Controller. Apos este contrutor, pode-se chamar os helpers, libraries, e demais elementos necessários para o Controller
    **/
    
   public function index() {
		// método padrão do controller
        
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('dashboard');
         $this->load->view('includes/html_footer');
        
	}
}
