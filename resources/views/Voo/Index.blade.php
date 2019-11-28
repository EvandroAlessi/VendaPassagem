

<h3 style="display: inline-block;margin: 15px;">Voos</h3>
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
                                    Data de Partida
                                </td>
                                <td>
                                    Valor da Passagem
                                </td>
                                <th class="text-right" data-sort-ignore="true">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($voos as $voo) {?>
                                <tr>
                                    <td>
                                        <?=$voo->getDataPartida()?>
                                    </td>
                                    <td>
                                        <?=$voo->getValorPassagem()?>
                                    </td>
                                    
                                    <td style="float: right;">
                                        <a href="#" data-toggle="modal" data-target="#modalEditar<?=$voo->getID()?>" style="padding: 3px;"><i class="fa fa-pencil text-navy"></i></a>
                                        <a href="voos/delete/<?=$voo->getID()?>" style="padding: 3px;"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
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


<?php foreach ($voos as $voo) { ?>

<div class="modal" id="modalEditar<?=$voo->getID()?>" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Editar Voo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar<?=$voo->getID()?>" action="voos/edit/<?=$voo->getID()?>" method="POST">
                        <div class="form-group">
                            <label for="inputAddTitulo">Data Partida</label>
                            <input type="text" class="form-control" id="dataPartida" name="dataPartida" value="<?=$voo->getDataPartida()?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Valor Passagem</label>
                            <input type="text" class="form-control" id="valorPassagem" name="valorPassagem" value="<?=$voo->getValorPassagem()?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Aeronave</label>
                                <select  class="form-control" name="aeronaveID" value="<?=$voo->getAeronaveID()?>">                
                                <?php foreach($aeronaves as $aeronave){?>
                                    <option value="<?=$aeronave->getID();?>" <?=$voo->getAeronaveID() == $aeronave->getID()?'selected':''?>><?=$aeronave->getModelo()?></option>
                                <?php } ?>
                            </select>
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
                <h5 class="modal-title" id="labelModal">Adicionar novo Voo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar" action="voos/create" method="POST">
                        <div class="form-group">
                        <label for="inputAddTitulo">Data Partida</label>
                            <input type="text" class="form-control" id="dataPartida" name="dataPartida">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Valor Passagem</label>
                            <input type="text" class="form-control" id="valorPassagem" name="valorPassagem">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Aeronave</label>
                            <select  class="form-control" name="aeronaveID">
                                <?php foreach($aeronaves as $aeronave){?>
                                <option value="<?=$aeronave->getID();?>"><?=$aeronave->getModelo()?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

