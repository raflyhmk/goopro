<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #3EC0D0 !important;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3" href="#">
                <img src="{{url('aset/user/image/logo.png')}}" class="img-thumbnail" alt="logo-image" style="width: 105px;">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
           
            <!-- Nav Item - aset -->
            <li class="nav-item">
                <a class="nav-link font-weight-normal" href="/pemilikaset">
                    <i class="fa-solid fa-border-all text-white"></i>
                    <span>Asset</span></a>
            </li>

            <!-- nav item - properti -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#properti"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-briefcase text-white"></i>
                    <span>Properti</span>
                </a>
                <div id="properti" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/properti">kelola properti</a>
                        <a class="collapse-item" href="/statusproperti">status properti</a>
                        <a class="collapse-item" href="/sertifikatproperti">kelola legalitas</a>
                    </div>
                </div>
            </li>

             <!-- nav item - kendaraan -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kendaraan"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-car text-white"></i>
                    <span>kendaraan</span>
                </a>
                <div id="kendaraan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/kendaraan">kelola kendaraan</a>
                        <a class="collapse-item" href="/statuskendaraan">status kendaraan</a>
                        <a class="collapse-item" href="/legalitaskendaraan">kelola legalitas</a>
                    </div>
                </div>
            </li>

             <!-- nav item - setting -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-gear text-white"></i>
                    <span>setting</span>
                </a>
                <div id="setting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">akun</a>
                        <a class="collapse-item" href="/login">logout</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>