<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary col-lg-12 ">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Cadastro de pedido</h3>

    </div>
    <hr>
    <!-- /.box-header -->

    <body>
        <div class="row col-md-12">
                <div class="form-group col-md-12">
                <button style="margin: 10px 0;" 
                        id="botao-add-linha"
                        class="adicionar btn btn-primary">
                        <i class="fa fa-plus"></i>&nbsp;Novo Linha</button>
                
                </div>
    <div class="row ">
        <div class="form-group col-md-12">
                               <div class="col-lg-12">
                                <table id="products-table" class="table table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Quantidade</th>
                                        <th>Descrição</th>
                                        <th>Valor Unit</th>
                                        <th>Valor Total</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                          <input required="required" 
                                          class="form-control quantidade" 
                                          type="text" 
                                          name="quantidade-novo-0"
    
                                          value="">
                                        </td>
                                        <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >                                     
                                        <input required="required" 
                                          class="form-control descricao" 
                                          type="text" 
                                          name="descricao-novo-0"
                                          value="">
                                        </td>
                                        <td class="auto">
                                          <input required="required" 
                                          class="form-control valor_unit" 
                                          type="number" 
                                          onblur="calcular()"
                                          name="valor_unit-novo-0"
                                          value="">
                                        </td>
                                        <td class="auto">
                                          <input required="required" 
                                          class="form-control valor_total" 
                                          type="number" 
                                          disabled=""
                                          name="valor_total-novo-0"
                                          value="">
                                        </td>
                                        <td>
                                            <a class="remover-linha" id-local="0" href="#" style="color: red;">
                                                <i class="fa fa-trash red"></i> Excluir
                                            </a>
                                          </td>
                                        </tr>
                                        
                                      </tbody>
                                </table>
                            </div>
                        </div>
           </div>
          </div>
        

    </form>
       

