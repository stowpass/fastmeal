<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CardapioModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function listarCardapio(){

        $this->db->from('cardapios');
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
            "descricao"=>"",
            "id_categoria"=>"",
            "valor"=>"",
            "foto"=>"",


        ));

    }

    public function salvar()
    {
 
            /*foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }
            */    
            
            
            $fotografias = array();
            foreach ($_FILES as $foto) {

                if($foto['name'] !=''){
                    $novo_nome = uniqid().'_'.$foto['name'];
                    array_push($fotografias,$novo_nome);
                    move_uploaded_file($foto['tmp_name'],'assets/imagens/' .$novo_nome);
                }
            }

            $data = array(
                'nome'           => $_POST['nome'],
                'id_categoria'   => $_POST['id_categoria'],
                'descricao'      => $_POST['descricao'],
                'valor'          => $_POST['valor'],
                'foto'          => $novo_nome

        );
      
            return $this->db->insert('cardapios', $data);

          


            

    }
//==============================================================
    public function atualizar($id)
    {
        $fotografias = array();
        foreach ($_FILES as $foto) {

            if($foto['name'] !=''){
                $novo_nome = uniqid().'_'.$foto['name'];
                array_push($fotografias,$novo_nome);
                move_uploaded_file($foto['tmp_name'],'assets/imagens/' .$novo_nome);
            }
        }

        $data = array(
            'nome'           => $_POST['nome'],
            'id_categoria'   => $_POST['id_categoria'],
            'descricao'      => $_POST['descricao'],
            'valor'          => $_POST['valor'],
            'foto'          => $novo_nome

    );
         /* foreach(array_keys($_POST) as $chave){
                eval('$this->' . $chave . ' = $_POST["' . $chave . '"];');
            }*/


            return $this->db->update('cardapios', $data, "id = $id");
         

    }

    
    public function excluir($id)
    {
         $this->db->delete('cardapios', "id = $id");
        
    }
   
    
    public function listarcardapios_com_id($id){
        //retorna os dados do cliente
        return $this->db->from('cardapios')->where('id', $id)->get()->result_array();
    }       




}