<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garconcontroller extends CI_Controller {

        public function index ()
        {
                $this->load->view('layout/topo');
                $this->load->model('garconmodel');
                $lista['garcons'] = $this->garconmodel->listarGarcon();
                $this->load->view('garcons/listagem', $lista);
                $this->load->view('layout/rodape');

    }

    
public function novo()
{
        $this->load->view('layout/topo');
        $this->load->model('mesamodel');
        $lista['vermesa'] = $this->mesamodel->listarmesa(); 
        $this->load->model('garconmodel');
        $lista['ver'] = $this->garconmodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->view('garcons/formulario', $lista);
        $this->load->view('layout/rodape');
       
}


 public function salvar()
	{
               
                              
                $this->load->model('garconmodel');
		$this->garconmodel->salvar();
		redirect('garcon');
        }
        

public function editar($id)
{
        
        $this->load->model('garconmodel');
        $this->load->model('mesamodel');
        $lista['vermesa'] = $this->mesamodel->listarmesa();
        $lista['ver'] = $this->garconmodel->listargarcons_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('garcons/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        $this->load->model('garconmodel');
        $this->garconmodel->atualizar($id);
        $lista['garcons'] = $this->garconmodel->listargarcon();
        redirect('garcon');

}

public function excluir($id)
{

        $this->load->model('garconmodel');
        $this->garconmodel->excluir($id);
        redirect('garcon');

}






}