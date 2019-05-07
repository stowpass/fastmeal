<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {
    
    
    public function index (){
     
     
        if ($_SESSION['usuario']=="") {
            redirect('login');
            //$this->load->view('');

        }else{
             $this->load->view('layout/topo');
      $this->load->view('layout/rodape');
        }


    }
}