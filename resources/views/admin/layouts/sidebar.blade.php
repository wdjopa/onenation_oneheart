<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{route("admins.home")}}"><img src="assets/images/logo/logo.png" alt="One Nation One Heart" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Général</li>

                <li class="sidebar-item @if(Request::segment(2) == trim('')) active @endif ">
                    <a href="{{route("admins.home")}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == trim('orphanages')) active @endif">
                    <a href="{{route("orphanages.index")}}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Orphelinats</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route("admins.home")}}" class='sidebar-link'>
                        <i class="bi bi-tag-fill"></i>
                        <span>Tags</span>
                    </a>
                </li>
                <li class="sidebar-title">Administration</li>
                <li class="sidebar-item">
                    <a href="{{route("admins.home")}}" class='sidebar-link'>
                        <i class="bi bi-cash-stack"></i>
                        <span>Donateurs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route("admins.home")}}" class='sidebar-link'>
                        <i class="bi bi-briefcase-fill"></i>
                        <span>Partenaires</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route("admins.home")}}" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Villes</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="{{route("users.index")}}" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item has-sub">
                    <a href="{{route("admins.home")}}" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="ui-map-google-map.html">Google Map</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>