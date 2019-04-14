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
            <th scope="col"><center>Mesa de Atendimento</center></th>
            
            <th scope="col"><center>Ações</center></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($garcons as $garcon) : ?>

            <tr>

                <td class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                 <?php echo $garcon['nome'] ?>
                </td>
                <td class="auto">
                    <center><?php echo $garcon['id_mesa'] ?></center>
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