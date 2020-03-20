
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
<div class="sidebar-content">
    <!--- Sidemenu -->
    <div id="sidebar-menu" class="slimscroll-menu">
        <ul class="metismenu" id="menu-bar">
            <li class="menu-title">About</li>

            <li>
                <router-link :to="{name: 'home'}">
                    <i data-feather="home"></i>
                    <span> Escritorio </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'notificaciones'}">
                    <i data-feather="bell"></i>
                    <span> Notificaciones </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'noticias'}">
                    <i data-feather="twitch"></i>
                    <span> Noticias </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'productosServicios'}">
                    <i data-feather="truck"></i>
                    <span> Productos y servicios </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'estacionamientos'}">
                    <i data-feather="share"></i>
                    <span> Estacionamiento </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'arriendos'}">
                    <i data-feather="map"></i>
                    <span> Arriendos </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'residentes'}">
                    <i data-feather="users"></i>
                    <span> Residentes </span>
                </router-link>

            <li class="menu-title">Pagos </li>

            <li>
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span> Pagos </span>
                </a>
            </li>

            <!-- <li>
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span> Arriendos </span>
                </a>
            </li> -->

            <li>
                <a href="#">
                    <i data-feather="dollar-sign"></i>
                    <span> Multas y recargas </span>
                </a>
            </li>

            <li class="menu-title">Configuración </li>
            
            <li>
                <a href="angular-doc.html">
                    <i data-feather="users"></i>
                    <span> Usuarios </span>
                </a>
            </li>

            <li>
                <a href="laravel-doc.html">
                    <i data-feather="user"></i>
                    <span> Ver perfil </span>
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i data-feather="power"></i>
                    <span> Salir </span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>


        </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
</div>
<!-- Sidebar -left -->

</div>


<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->