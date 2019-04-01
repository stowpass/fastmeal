<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaController extends CI_Controller {

public function index ()
        {
                $this->load->view('layout/topo');
                $this->load->model('categoriamodel');
                $lista['categorias'] = $this->categoriamodel->listarCategoria();
                $this->load->view('categorias/listagem', $lista);
                $this->load->view('layout/rodape');

    }

    
public function novo()
{
        $this->load->view('layout/topo');
        $this->load->model('categoriamodel');
        $lista['ver'] = $this->categoriamodel->vazio();
        $lista['acao'] = "salvar";
        $this->load->view('categorias/formulario', $lista);
        $this->load->view('layout/rodape');
       
}


 public function salvar()
	{
		$this->load->model('categoriamodel');
		$this->categoriamodel->salvar();
		redirect('categoria');
        }
        

public function editar($id)
{
        
        $this->load->model('categoriamodel');
        $lista['ver'] = $this->categoriamodel->listarCategorias_com_id($id);
        $lista['acao'] = 'atualizar/' . $id;
        $this->load->view('layout/topo');
        $this->load->view('categorias/formulario',$lista);
        $this->load->view('layout/rodape');

}

public function atualizar($id)
{
        $this->load->model('categoriamodel');
        $this->categoriamodel->atualizar($id);
        $lista['categorias'] = $this->categoriamodel->listarCategoria();
        redirect('categoria');

}

public function excluir($id)
{

        $this->load->model('categoriamodel');
        $this->categoriamodel->excluir($id);
        redirect('categoria');

}


}