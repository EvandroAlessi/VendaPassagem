
<h3 style="display: inline-block;margin: 15px;">Destinos</h3>
<button type="button" class="btn btn-primary m-3" style="float:right; margin: 15px;" data-toggle="modal" data-target="#modalAdicionar">Adicionar</button>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content" style="overflow-x: scroll">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <td>
                                    Nome Aeroporto
                                </td>
                                <td>
                                    Taxa Embarque
                                </td>
                                <th class="text-right" data-sort-ignore="true">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($destinos as $entidade) {?>
                                <tr>
                                    <td>
                                        <?=$entidade->getNomeAeroporto()?>
                                    </td>
                                    <td>
                                        <?=$entidade->getTaxaEmbarque()?>
                                    </td>
                                    
                                    <td style="float: right;">
                                        <a href="#" data-toggle="modal" data-target="#modalEditar<?=$entidade->getID()?>" style="padding: 3px;"><i class="fa fa-pencil text-navy"></i></a>
                                        <a href="aeronaves/delete/<?=$entidade->getID()?>" style="padding: 3px;"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php foreach ($destinos as $entidade) {?>

<div class="modal" id="modalEditar<?=$entidade->getID()?>" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar<?=$entidade->getID()?>" action="destinos/edit/<?=$entidade->getID()?>" method="POST">
                    <td> 
                        <div class="form-group">
                            <label for="inputAddTitulo">Nome Aeroporto</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" value="<?=$entidade->getNomeAeroporto()?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Taxa Embarque</label>
                            <input type="text" class="form-control" id="qntAssentos" name="qntAssentos" value="<?=$entidade->getTaxaEmbarque()?>">
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<div class="modal" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Adicionar novo Destino</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar" action="destinos/create" method="POST">
                        <div class="form-group">
                            <label for="inputAddTitulo">Nome Aeroporto</label>
                            <input type="text" class="form-control" id="nomeAeroporto" name="nomeAeroporto">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Taxa Embarque</label>
                            <input type="text" class="form-control" id="taxaEmbarque" name="taxaEmbarque">
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>