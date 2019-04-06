<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoriamodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function listarCategoria(){

        $this->db->from('categorias');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo assim
        /// return $this->db->get('empresas')->order_by('id', 'desc')->result_array();
	    ///
    }

    public  function vazio(){
        
        return array (0=>array(
            
            "nome"=>"",
        

        ));

    }

    public function salvar()
    {
 
            foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            
            return $this->db->insert('categorias', $this);

    }
//==============================================================
    public function atualizar($id)
    {
           
          foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }

            return $this->db->update('categorias', $this, "id = $id");
         

    }

    
    public function excluir($id)
    {
         $this->db->delete('categorias', "id = $id");
        
    }
   
    
    public function listarCategorias_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('categorias')->where('id', $id)->get()->result_array();
    }       




}