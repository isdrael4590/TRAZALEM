
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>PRINCIPAL</span>
                </li>
                <li class="{{set_active(['home','em/dashboard'])}} submenu">
                    <a href="#" class="{{ set_active(['home','em/dashboard']) ? 'noti-dot' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span> PANEL</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['home'])}}" href="{{ route('home') }}">Panel del administrador</a></li>
                        <li><a class="{{set_active(['em/dashboard'])}}" href="{{ route('em/dashboard') }}">Panel del empleado</a></li>
                    </ul>
                </li>
                @if (Auth::user()->role_name=='Admin')
                    <li class="menu-title"> <span>Autoidentificacion</span> </li>
                    <li class="{{set_active(['search/user/list','userManagement','activity/log','activity/login/logout'])}} submenu">
                        <a href="#" class="{{ set_active(['search/user/list','userManagement','activity/log','activity/login/logout']) ? 'noti-dot' : '' }}">
                            <i class="la la-user-secret"></i> <span> Control del usuario</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                            <li><a class="{{set_active(['search/user/list','userManagement'])}}" href="{{ route('userManagement') }}">Todos los usuarios </a></li>
                            <li><a class="{{set_active(['activity/log'])}}" href="{{ route('activity/log') }}">Registro de actividades</a></li>
                            <li><a class="{{set_active(['activity/login/logout'])}}" href="{{ route('activity/login/logout') }}">Actividades del usuario</a></li>
                        </ul>
                    </li>
                @endif
                <li class="menu-title"> <span>Usuarios</span> </li>
                <li class="{{set_active(['all/employee/list','all/employee/list','all/employee/card'])}} submenu">
                    <a href="#" class="{{ set_active(['all/employee/list','all/employee/card',]) ? 'noti-dot' : '' }}">
                        <i class="la la-user"></i> <span> Usuarios</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['all/employee/list','all/employee/card'])}} {{ request()->is('all/employee/view/edit/*','employee/profile/*') ? 'active' : '' }}" href="{{ route('all/employee/card') }}">Todo el personal</a></li>

                    </ul>
                <li>---------////////////////////////---------</li>
                </li>
                <li class="menu-title"> <span>BASE DE DATOS</span> </li>
                <li class="{{set_active(['coderumedManagement/all/coderumedcontrol', 'coderumedManagement','coderumed/activity/log'])}} submenu">
                    <a href="#">
                        <i class="la la-files-o"></i> <span> RUMED</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['coderumedManagement/all/coderumedcontrol','coderumedManagement'])}}" href="{{ route('coderumedManagement') }}">Base de datos <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                       
                    </ul>
                </li>



                <li>---------////////////////////////---------</li>


                <li class="menu-title"> <span>ZONA DE SUCIA</span> </li>
                <li class="submenu">
                    <a href="#">
                        <i class="la la-money"></i>
                        <span> Zona de lavado </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="#">Recepciòn</a></li>
                        <li><a href="#">Ingreso lavadora</a></li>

                    </ul>
                </li>
                <li>---------////////////////////////---------</li>

                <li class="menu-title"> <span>ZONA NO ESTERIL</span> </li>
                <li class="{{set_active(['zneManagement/all/testbowie','zneManagement','testbowie/activity/log'])}}  submenu">
                    <a href=" ">
                        <i class="la la-edit"></i>
                        <span> Actividades ZNE</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }} ">

                        <li><a class="{{ Request::is('zneManagement' ? 'active' : '') }}" href="{{ route('zneManagement') }}">Prueba de BOWIE & DICK <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                        <!-- TODO: Cambiar a la ruta adeciada-->
                        <li><a class="{{ Request::is('zneManagement' ? 'active' : '') }}" href="{{ route('zneManagement') }}"> GENERADOR DE QR <span class="badge badge-pill bg-primary float-right">1</span></a></li>








                    </ul>
                </li>
                <li>---------////////////////////////---------</li>

                <li class="menu-title"> <span>ZONA ESTERIL</span> </li>
                <li class="submenu">
                    <a href="#">
                        <i class="la la-step-forward"></i>
                        <span> Actividades ZE</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="#">Prueba de BOWIE & DICK</a></li>
                        <li><a href="#">Generaciòn de QR</a></li>

                    </ul>
                </li>
                <li class="menu-title"> <span>Pages</span> </li>
                <li class="submenu"> <a href="#"><i class="la la-user"></i>
                    <span> Profile </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="profile.html"> Employee Profile </a></li>
                    </ul>
                </li>





            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
