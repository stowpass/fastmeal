<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {
    
    public function index (){
    if (!$this->session->usuario) redirect('login');

            $this->load->view('layout/topo');
            $this->load->view('layout/rodape');
    
       }      
       public function json()
       {
               $this->load->model('cardapiomodel');
               $lista['cardapios'] = $this->cardapiomodel->listarCardapio();
               $jax = $this->cardapiomodel->listarCardapio();
       
              // $json= json_encode($jax, JSON_NUMERIC_CHECK);
               $json= json_encode($jax);
               echo '{"android":'.$json.'}';
       
       }


}
