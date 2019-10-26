<style>

#side-menu li:not(.active) {
    background: #293846; 
}

</style>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header" style="padding: 10px 5px !important; text-align: center !important;">
                <div class="logo-element" style="display: inline-block !important; margin: 0px !important; padding: 0px !important;">
                    VOo
                </div>
            </li>

            <li class="">
                <a><i class="fa fa-th-large"></i> <span class="nav-label" data-i18n="nav.dashboard">Geral</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse ">
                    <li class="home"><a href="./">Home</a></li>
                    <li class=""><a href="login">Logout</a></li>
                </ul>
            </li>
            <li class="">
                <a><i class="fa fa-bar-chart-o"></i> <span class="nav-label" data-i18n="nav.graphs">Departamentos</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="voos">Voos</a></li>
                    <li class=""><a href="destinos">Destinos</a></li>
                    <li class=""><a href="passageiros">Passageiros</a></li>
                    <li class=""><a href="aeronaves">Aeronaves</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>