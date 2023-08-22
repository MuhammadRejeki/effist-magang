<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="#"><img src="{{ url('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <!-- Kalau butuh aja sidebar-title -->
                <!-- <li class="sidebar-title">Menu</li> -->

                <li class="sidebar-item @if($menu == 'dashboard') active @endif">
                    <a href="{{ url('/home') }}" class="sidebar-link">
                        <i class="bi bi-laptop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub @if(in_array($menu,['users','status','company','news'])) active @endif">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Master Data</span>
                    </a>

                    <ul class="submenu @if(in_array($menu,['users','status','company','news'])) active @endif">
                        <li class="submenu-item @if($menu == 'users') active @endif">
                            <a href="{{ url('/users') }}" class="submenu-link">Users</a>
                        </li>
                        <li class="submenu-item @if($menu == 'status') active @endif">
                            <a href="{{ url('/status') }}" class="submenu-link">Employment status</a>
                        </li>
                        <li class="submenu-item @if($menu == 'company') active @endif">
                            <a href="{{ url('/company') }}" class="submenu-link">Company</a>
                        </li>
                        <li class="submenu-item @if($menu == 'news') active @endif">
                            <a href="{{ url('/news') }}" class="submenu-link">News</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="{{ url('/logout') }}" class="sidebar-link">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>