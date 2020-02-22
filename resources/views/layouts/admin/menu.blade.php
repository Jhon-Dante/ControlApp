
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
<div class="sidebar-content">
    <!--- Sidemenu -->
    <div id="sidebar-menu" class="slimscroll-menu">
        <ul class="metismenu" id="menu-bar">
            <li class="menu-title">About</li>

            <li>
                <a href="index.html">
                    <i data-feather="home"></i>
                    <span> Introduction </span>
                </a>
            </li>

            <li>
                <a href="support.html">
                    <i data-feather="help-circle"></i>
                    <span> Customer Support </span>
                </a>
            </li>

            <li class="menu-title">Getting Started</li>
            
            <li>
                <a href="angular-doc.html">
                    <i data-feather="bookmark"></i>
                    <span> Angular </span>
                </a>
            </li>
            <li>
                <a href="react-doc.html">
                    <i data-feather="bookmark"></i>
                    <span> React </span>
                </a>
            </li>
            <li>
                <a href="vue-doc.html">
                    <i data-feather="bookmark"></i>
                    <span> Vue </span>
                </a>
            </li>
            <li>
                <a href="laravel-doc.html">
                    <i data-feather="bookmark"></i>
                    <span> Laravel </span>
                </a>
            </li>

            <li class="menu-title">Usuario</li>

            <li>
                <a href="laravel-doc.html">
                    <i data-feather="user"></i>
                    <span> Ver perfil </span>
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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