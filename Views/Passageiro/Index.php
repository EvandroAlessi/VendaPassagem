<link href="Content/plugins/footable/footable.core.css" rel="stylesheet" type="text/css" />

<h3 style="display: inline-block;margin: 15px;">Passageiros</h3>
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
                                    CPF
                                </td>
                                <td>
                                    RG
                                </td>
                                <td>
                                    Nome
                                </td>
                                <td>
                                    Data de Nascimento
                                </td>
                                <th class="text-right" data-sort-ignore="true">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($passageiros as $entidade) {?>
                                <tr>
                                    <td>
                                        <?=$entidade->getCPF()?>
                                    </td>
                                    <td>
                                        <?=$entidade->getRG()?>
                                    </td>
                                    <td>
                                        <?=$entidade->getNome()?>
                                    </td>
                                    <td>
                                        <?=$entidade->getDataNascimento()?>
                                    </td>
                                    <td style="float: right;">
                                        <a href="#" data-toggle="modal" data-target="#modalEditar<?=$entidade->getID()?>" style="padding: 3px;"><i class="fa fa-pencil text-navy"></i></a>
                                        <a href="passageiros/delete/<?=$entidade->getID()?>" style="padding: 3px;"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
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


<?php foreach ($passageiros as $entidade) {?>

<div class="modal" id="modalEditar<?=$entidade->getID()?>" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Editar Passageiro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar<?=$entidade->getID()?>" action="passageiros/edit/<?=$entidade->getID()?>" method="POST">
                        <div class="form-group">
                            <label for="inputAddTitulo">CPF</label>
                            <input type="text" class="form-control" id="CPF" name="CPF" value="<?=$entidade->getCPF()?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">RG</label>
                            <input type="text" class="form-control" id="RG" name="RG" value="<?=$entidade->getRG()?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?=$entidade->getNome()?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Data de Nascimento</label>
                            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="<?=$entidade->getdataNascimento()?>">
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
                <h5 class="modal-title" id="labelModal">Adicionar Passageiro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar" action="passageiros/create" method="POST">
                        <div class="form-group">
                            <label for="inputAddTitulo">CPF</label>
                            <input type="text" class="form-control" id="CPF" name="CPF">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">RG</label>
                            <input type="text" class="form-control" id="RG" name="RG">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Data de Nascimento</label>
                            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="Scripts/plugins/footable/footable.all.min.js"></script>

<script>
    $(document).ready(function () {

        $('.footable').footable();

        $(".select-personalizado .button").click(function () {
            $('.select-options').slideToggle();
        });
    });
</script>