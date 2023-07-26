<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="" alt="" />
        <a href="user-profile"> <h5 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h5></a>
        <a href="user-profile"> <h7 class="mt-3 f-14 f-w-600">{{ Auth::user()->email }}</h7></a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6><a href="/dashboard" class="navbar-link">General</a></h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Multas</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('multa-create') }}" class="">Cadastrar</a></li>
                            <li><a href="{{ route('multa') }}" class="">Listar</a></li>
                        </ul>
                    </li>
                
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Motoristas</span></a>
                        <ul class="nav-submenu menu-content">
                            <!--  -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Veículos</span></a>
                        <ul class="nav-submenu menu-content">
                             <!--  -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Escolas</span></a>
                        <ul class="nav-submenu menu-content">
                             <!--  -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="command"></i><span>Oficina</span></a>
                        <ul class="nav-submenu menu-content">
                             <!--  -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud"></i><span>Rotas</span></a>
                        <ul class="nav-submenu menu-content">
                             <!--  -->
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
