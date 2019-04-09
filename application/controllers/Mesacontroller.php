<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesacontroller extends CI_Controller {

public function index ()
        {
                $this->load->view('layout/topo');
                $this->load->model('mesamodel');
                $lista['mesas'] = $this->mesamodel->listarMesa();
                $this->load->view('mesas/listagem', $lista);
                $this->load->view('layout/rodape');

    }

    
public function novo()
{
        $this->load->view('layout/topo');
        $this->load->model('mesamodel');
        $lista['ver'] = $this->mesamodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->view('mesas/formulario', $lista);
        $this->load->view('layout/rodape');
       
}


 public function salvar()
	{
		$this->load->model('mesamodel');
		$this->mesamodel->salvar();
		redirect('mesa');
        }
        

public function editar($id)
{
        
        $this->load->model('mesamodel');
        $lista['ver'] = $this->mesamodel->listarMesas_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('mesas/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        $this->load->model('mesamodel');
        $this->mesamodel->atualizar($id);
        $lista['mesas'] = $this->mesamodel->listarmesa();
        redirect('mesa');

}

public function excluir($id)
{

        $this->load->model('mesamodel');
        $this->mesamodel->excluir($id);
        redirect('mesa');

}


}