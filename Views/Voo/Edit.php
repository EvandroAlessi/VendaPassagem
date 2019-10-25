<div class="modal" id="modalAlterar" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal">Alterar dados</h5>
                <button id="close_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="formAdicionar" action="edit" method="POST">
                        <div class="form-group">
                        <label for="inputAddTitulo">Data Partida</label>
                            <input type="text" class="form-control" id="inputAddTitulo" value="<?=$voo->getDataPartida()?>">
                        </div>
                        <div class="form-group">
                            <label for="inputAddTitulo">Valor Passagem</label>
                            <input type="text" class="form-control" id="inputAddTitulo" value="<?=$voo->getValorPassagem()?>">
                        </div>
                        <button type="submit" class="adicionar btn btn-primary bg-dark border-dark">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>