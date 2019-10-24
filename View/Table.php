@model System.Collections.Generic.IEnumerable<EvaluationPage.Models.Procedimento>

@{
    ViewBag.Title = "Dashbard v.2";
}

@section Styles {
    @Styles.Render("~/plugins/footableStyles")

    <style>
        ul.select-personalizado {
            width: 210px;
            margin: 0;
            padding: 0;
            box-sizing: 0;
            float: right;
        }

        ul.select-personalizado > div {
            display: none;
            border-radius: 4px;
            border: 1px solid #ccc;
            position: absolute;
            background-color: darkgray;
            z-index: 100;
        }

        ul.select-personalizado li {
            width: 210px;
            height: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ccc;
            padding: 0 15px;
        }

        ul.select-personalizado li.button {
            background-color: #2f4050;
            border-color: #2f4050;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 0.9em;
            font-family: sans-serif, "arial";
        }

        ul.select-personalizado li.button span {
            white-space: nowrap;
            overflow: hidden;
            margin-right: 30px;
        }

        ul.select-personalizado li.button img {
            width: 8px;
            height: 8px;
        }

        ul.select-personalizado li:not(.button) {
            border: 0px;
            border-bottom: 1px solid #eee;
            text-transform: uppercase;
            font-size: 0.8em;
            font-family: sans-serif, "arial";
        }

        ul.select-personalizado li:not(.button) input {
            position: relative;
            top: 2px;
        }
    </style>
}

<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content" style="overflow-x: scroll">

                    <ul class="select-personalizado" id="select-documento" style="margin-top: 10px">
                        <li class="button"><span>Selecionar colunas</span><img src="https://www.freeiconspng.com/uploads/white-arrow-png-24.png"></li>
                        <div class="select-options">
                            @{
                                foreach (var item in Model.First().GetType().GetProperties().Select(p => p.Name))
                                {

                                    <li>
                                        <label>
                                            <input data-documento="@item" type="checkbox" selecionado>
                                            <span>@item</span>
                                        </label>
                                    </li>
                                }
                            }
                        </div>
                    </ul>

                    @*<select class="select2-selection--multiple" id="select-columns" style="float: right;">
                            @foreach (var item in Model.First().GetType().GetProperties().Select(p => p.Name))
                            {
                                <option value="@item">@item</option>
                            }
                        </select>*@
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                            <tr>
                                <td class="cliente">
                                    Cliente
                                </td>
                                <td class="nome">
                                    Nome
                                </td>
                                <td class="EmailEventos" style="display: none;" none>
                                    Email Eventos
                                </td>
                                <td class="Email">
                                    Email
                                </td>
                                <td class="Fone1">
                                    Fone
                                </td>
                                <td class="cidade">
                                    Cidade
                                </td>
                                <td class="Numchamado" style="display: none;" none>
                                    Numero chamado
                                </td>
                                <td class="Data">
                                    Data
                                </td>
                                <td class="Evento" style="display: none;" none>
                                    Evento
                                </td>
                                <td class="Descricao">
                                    Descricao
                                </td>
                                <td class="OperadorFinalizou">
                                    Operador Finalizou
                                </td>
                                <td class="Observacoes_conta" style="display: none;" none>
                                    Observacoes Conta
                                </td>
                                <td class="motivo" style="display: none;" none>
                                    Motivo
                                </td>
                                <td class="Nota" style="display: none;" none>
                                    Nota
                                </td>
                                <td class="Comentario" style="display: none;" none>
                                    Comentário
                                </td>
                                <th class="text-right" data-sort-ignore="true">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (var item in Model)
                            {
                                <tr>
                                    <td class="cliente">
                                        @item.cliente
                                    </td>
                                    <td class="nome">
                                        @item.nome
                                    </td>
                                    <td class="EmailEventos" style="display: none;">
                                        @string.Join(" ", item.EmailEventos.Split(';'))
                                    </td>
                                    <td class="Email">
                                        @item.Email
                                    </td>
                                    <td class="Fone1">
                                        @item.Fone1
                                    </td>
                                    <td class="cidade">
                                        @item.cidade
                                    </td>
                                    <td class="Numchamado" style="display: none;">
                                        @item.Numchamado
                                    </td>
                                    <td class="Data">
                                        @item.Data
                                    </td>
                                    <td class="Evento" style="display: none;">
                                        @item.Evento
                                    </td>
                                    <td class="Descricao">
                                        @item.Descricao
                                    </td>
                                    <td class="OperadorFinalizou">
                                        @item.OperadorFinalizou
                                    </td>
                                    <td class="Observacoes_conta" style="display: none;">
                                        @item.Observacoes_conta
                                    </td>
                                    <td class="motivo" style="display: none;">
                                        @item.motivo
                                    </td>
                                    <td class="Nota" style="display: none;">
                                        @item.Nota
                                    </td>
                                    <td class="Comentario" style="display: none;">
                                        @item.Comentario
                                    </td>
                                    <td style="float: right;">
                                        <a href="@Url.Action("Edit")/@item.IdSequencia" style="padding: 3px;"><i class="fa fa-pencil text-navy"></i></a>
                                        @*<a href="#" style="padding: 3px;"><i class="fa fa-trash text-danger"></i></a>*@
                                    </td>
                                </tr>
                            }
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

@section Scripts {
    @Scripts.Render("~/plugins/footable")

    <script type="text/javascript">
        $(document).ready(function () {

            $('.footable').footable();

            $(".select-personalizado .button").click(function () {
                $('.select-options').slideToggle();
            });

            $(".select-personalizado input[selecionado]").change(function () {
                var itens = new Array();
                $(this).parents('.select-personalizado').find('input[selecionado]').each(function () {
                    var item = $(this).siblings('span').html();
                    if ($(this).prop('checked')) {
                        $('.' + item).css('display', 'table-cell');
                    }
                    else {
                        $('.' + item).css('display', 'none');
                    }
                });
                if (itens.length == 0) {
                    $(this).parents('.select-personalizado').find('.button span').html('Selecionar colunas');
                } else {
                    $(this).parents('.select-personalizado').find('.button span').html(itens.join(', '));
                }
            });

            $(".select-personalizado input[obrigatorio]").change(function () {
                if ($(this).prop('checked')) {
                    var documento = $(this).attr('data-documento');
                    $('.select-personalizado input[data-documento=' + documento + '][selecionado]').prop('checked', true);


                    ////////////////
                    var itens = new Array();
                    $(this).parents('.select-personalizado').find('input[selecionado]').each(function () {
                        if ($(this).prop('checked')) {
                            var item = $(this).siblings('span').html();
                            itens.push(item);
                        }
                    });

                    $(this).parents('.select-personalizado').find('.button span').html(itens.join(', '));
                    ////////////////
                }
            });

            $(".select-personalizado input[selecionado]").change(function () {
                if (!$(this).prop('checked')) {
                    var documento = $(this).attr('data-documento');
                    $('.select-personalizado input[data-documento=' + documento + '][obrigatorio]').prop('checked', false);
                }
            });


        });
    </script>
}