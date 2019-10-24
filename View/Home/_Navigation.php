<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="logo-element">
                    VOo
                </div>
            </li>

            <li class="@Html.IsSelected(controller: "Dashboards")">
                <a href="@Url.Action("Dashboard_Operacional", "Dashboards")"><i class="fa fa-th-large"></i> <span class="nav-label" data-i18n="nav.dashboard">Geral</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse @Html.IsSelected(controller: "Dashboards", cssClass: "in")">
                    <li class="@Html.IsSelected(action: "Dashboard_Operacional")"><a href="@Url.Action("Dashboard_Operacional", "Dashboards")">Operacional</a></li>
                    <li class="@Html.IsSelected(action: "Dashboard_Tecnico")"><a href="@Url.Action("Dashboard_Tecnico", "Dashboards")">Técnico</a></li>
                </ul>
            </li>
            <li class="@Html.IsSelected(controller: "Relatorios")">
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label" data-i18n="nav.graphs">Relatorios</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse @Html.IsSelected(controller: "Relatorios", cssClass: "in")">
                    <li class="@Html.IsSelected(action: "AtendimentosViaturas")"><a href="@Url.Action("AtendimentosViaturas", "Relatorios")">Atendimentos Viaturas</a></li>
                    <li class="@Html.IsSelected(action: "ContagemDisparos")"><a href="@Url.Action("ContagemDisparos", "Relatorios")">Contagem de Disparos</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>