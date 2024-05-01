<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #3EC0D0 !important;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3" href="#">
                <img src="{{url('aset/user/image/logo.png')}}" class="img-thumbnail" alt="logo-image" style="width: 105px;">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- nav item - aset -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#aset"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-briefcase text-white"></i>
                    <span>aset</span>
                </a>
                <div id="aset" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">aset client</a>
                        <a class="collapse-item" href="#">iklan aset</a>
                        <a class="collapse-item" href="#">konfirmasi iklan</a>
                    </div>
                </div>
            </li>

            <!-- nav item - anggota -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#anggota"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-user-group text-white"></i>
                    <span>anggota</span>
                </a>
                <div id="anggota" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">manajer perusahaan</a>
                        <a class="collapse-item" href="#">pemilik aset</a>
                        <a class="collapse-item" href="#">laporan manager</a>
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