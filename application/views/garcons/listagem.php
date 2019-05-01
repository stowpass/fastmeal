<?php
defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
    <div class="box-header
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
        <h3 class="box-title ">Garcons:</h3>

    </div>
    <br>
    <hr>
    <a href="<?php echo site_url('garcon/novo'); ?>" class="btn btn-primary mb-2">Novo Garçon</a>
  <hr>

    <table class="table  table-bordered">
        <thead>

        <tr>
            <th scope="col">Nome do Garçon</th>
            
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($garcons as $garcon) : ?>

            <tr>

                <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                 <?php echo $garcon['nome'] ?>
                </td>
               
                
                <td class="auto">
                    <center>
                        <a href="<?php echo base_url('garcon/editar/' . $garcon['id']); ?>"><i
                                    class="fa fa-edit"></i>Editar
                        </a> |
                        <a href="<?php echo site_url('garcon/excluir/' . $garcon['id']); ?>"
                           onclick='return confirm("Deseja realmente deletar esse garcon?");'><i
                                    class="fa fa-trash"></i>Excluir</a>
                    </center>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>
</div>