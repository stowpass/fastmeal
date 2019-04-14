<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garconmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function listarGarcon(){

        $this->db->from('garcons')->where('status = 1');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get();
        return $query->result_array();
        // Antiga tava fazendo aaulssim
        /// return $this->db->get('empresas')->order_by('id', 'desc')->result_array();
	    ///
    }

    public  function vazio(){
        
        return array (0=>array(
            
            "nome"=>"",
          
            "id_mesa"=>"",
           
        ));

    }

    public function salvar()
    {
 
            /*foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            */    
        
         

            $data = array(
                'nome'           => $_POST['nome'],
                'id_mesa'   => $_POST['id_mesa'],
            

        );
      
            return $this->db->insert('garcons', $data);


    }
//==============================================================
    public function atualizar($id)
    {

       
            $data = array(
                'nome'           => $_POST['nome'],
                'id_mesa'   => $_POST['id_mesa'], 
            );
         
        

         /* Poderia ser resumido assim:::::::::::::::::::::::::::::::::::::::::::::::::
         
        if($novo_nome == "") unset($_POST['foto']);
        else $_POST['foto'] = $novo_nome;
        
         foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }

*/
         /* foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }*/


            return $this->db->update('garcons', $data, "id = $id");
         
    }

    
    public function excluir($id)
    {
        $data = array(
            'status'           => '0'     
        );
        
        return $this->db->update('garcons', $data, "id = $id");
        
    }
   
    
    public function listarGarcons_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('garcons')->where('id', $id)->get()->result_array();
    }       




}