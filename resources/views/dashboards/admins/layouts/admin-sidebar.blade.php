<a href="{{ \URL::to('/')}}" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Your Site</span>
</a>

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2 admin_picture" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block admin_name">{{ Auth::user()->name }}</a>
    </div>
</div>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.dashboard')}}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.profile')}}" class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Profile
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('admin/employee/create')}}" class="nav-link {{ (request()->is('admin/employee*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Employee Create
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('admin/employees')}}" class="nav-link {{ (request()->is('admin/employee*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Employee All
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('admin/vehicle/all')}}" class="nav-link {{ (request()->is('admin/employee*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Vehicle Request All
                </p>
            </a>
        </li>
    </ul>
</nav>
