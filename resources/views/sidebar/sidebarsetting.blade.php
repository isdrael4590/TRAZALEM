<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                <li><a href="{{ route('home') }}"><i class="la la-home"></i> <span>Retorno INICIO</span></a></li>
                <li class="menu-title">Configuracion</li>
                <li class="{{set_active(['company/settings/page'])}}"><a href="{{ route('company/settings/page') }}"><i class="la la-building"></i><span> Informaciòn del Hospital</span></a></li>
                
            </ul>
        </div>
    </div>
</div>
<!-- Sidebar -->