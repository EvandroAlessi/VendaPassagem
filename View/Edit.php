<link href="../../Content/plugins/summernote/summernote.css" rel="stylesheet" type="text/css" />
<link href="../../Content/plugins/summernote/summernote-bs3.css" rel="stylesheet" type="text/css" />

<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Editando</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input class="form-control" id="Email" name="Email" type="text" value=" MARCELO.ADM@TORKLOCACOES.COM.BR">
                                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                            </div>

                            <div class="form-group" style="float: right;">
                                <button type="button" onclick="location.href = '/'" class="btn btn-secondary">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../Scripts/plugins/summernote/summernote.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote();
    });
</script>