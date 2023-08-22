<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/img logo/LOGO MEDIACOM.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Media Com</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/profil/foto profil.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="fa-solid fa-gauge-high nav-icon"></i>
                        <p> Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard_users') }}" class="nav-link active">
                        <i class="fa-solid fa-users nav-icon"></i>
                        <p> Users</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard_jabatan') }}" class="nav-link">
                        <i class="fa-solid fa-user-plus nav-icon"></i>
                        <p> Jabatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard_artikel') }}" class="nav-link">
                        <i class="fa-solid fa-newspaper nav-icon"></i>
                        <p> Artikel</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
