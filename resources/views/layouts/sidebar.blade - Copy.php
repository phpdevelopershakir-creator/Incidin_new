<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('backend/images/faces/face5.jpg')}}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="designation">{{ auth()->user()->name }}</p>
                </div>
            </div>
        </li>

        
        <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

    
 <li class="nav-item {{ request()->is('superadmin/location*') ? 'active' : '' }}">
    <a class="nav-link" data-toggle="collapse" href="#locationMenu"
       aria-expanded="{{ request()->is('superadmin/location*') ? 'true' : 'false' }}">
        <i class="fas fa-window-restore menu-icon"></i>
        <span class="menu-title">Location Management</span>
        <i class="menu-arrow"></i>
    </a>

    <div class="collapse {{ request()->is('superadmin/location*') ? 'show' : '' }}" id="locationMenu">
        <ul class="nav flex-column sub-menu">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/location/division') || request()->is('superadmin/location/division/*') ? 'active' : '' }}"
                   href="{{ route('superadmin.all.division') }}">
                    All Division
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/location/district') || request()->is('superadmin/location/district/*') ? 'active' : '' }}"
                   href="{{ route('superadmin.all.district') }}">
                    All Districts
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/location/upazila') || request()->is('superadmin/location/upazila/*') ? 'active' : '' }}"
                   href="{{ route('superadmin.all.upazila') }}">
                    All Upazila
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/location/union') || request()->is('superadmin/location/union/*') ? 'active' : '' }}"
                   href="{{ route('superadmin.all.union') }}">
                    All Union
                </a>
            </li>

        </ul>
    </div>
</li>


        


        
        <li class="nav-item {{ request()->is('superadmin/user/*') ? 'active' : '' }}">
    <a class="nav-link" data-toggle="collapse" href="#userMenu"
       aria-expanded="{{ request()->is('superadmin/user/*') ? 'true' : 'false' }}">
        <i class="fas fa-window-restore menu-icon"></i>
        <span class="menu-title">User Create</span>
        <i class="menu-arrow"></i>
    </a>

    <div class="collapse {{ request()->is('superadmin/user/*') ? 'show' : '' }}" id="userMenu">
        <ul class="nav flex-column sub-menu">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/user/create') ? 'active' : '' }}"
                   href="{{ url('superadmin/user/create') }}">
                   User Create
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/user/list') || request()->is('superadmin/user/*/edit') ? 'active' : '' }}"
                   href="{{ url('superadmin/user/list') }}">
                   User List
                </a>
            </li>

        </ul>
    </div>
</li>




        
        <li class="nav-item {{ request()->is('superadmin/case/*') ? 'active' : '' }}">
    <a class="nav-link" data-toggle="collapse" href="#dataMenu"
       aria-expanded="{{ request()->is('superadmin/case/*') ? 'true' : 'false' }}">
        <i class="fas fa-window-restore menu-icon"></i>
        <span class="menu-title">Data Entry</span>
        <i class="menu-arrow"></i>
    </a>

    <div class="collapse {{ request()->is('superadmin/case/*') ? 'show' : '' }}" id="dataMenu">
        <ul class="nav flex-column sub-menu">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/case/create') ? 'active' : '' }}"
                   href="{{ url('superadmin/case/create') }}">
                    Create Data
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/case/list') || request()->is('superadmin/case/*/edit') ? 'active' : '' }}"
                   href="{{ url('superadmin/case/list') }}">
                    View Data
                </a>
            </li>

        </ul>
    </div>
</li>


        
        


    
        <li class="nav-item {{ request()->is('superadmin/all/*') ? 'active' : '' }}">
    <a class="nav-link" data-toggle="collapse" href="#RolePermission"
       aria-expanded="{{ request()->is('superadmin/all/*') ? 'true' : 'false' }}">
        <i class="fas fa-window-restore menu-icon"></i>
        <span class="menu-title">Role & Permission</span>
        <i class="menu-arrow"></i>
    </a>

    <div class="collapse {{ request()->is('superadmin/all/*') ? 'show' : '' }}" id="RolePermission">
        <ul class="nav flex-column sub-menu">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/all/permission') ? 'active' : '' }}"
                   href="{{ url('superadmin/all/permission') }}">
                    All Permissions
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/all/role') ? 'active' : '' }}"
                   href="{{ url('superadmin/all/role') }}">
                    All Roles
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/all/role/permission') ? 'active' : '' }}"
                   href="{{ url('superadmin/all/role/permission') }}">
                    All Role & Permissions
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('superadmin/all/question') ? 'active' : '' }}"
                   href="{{ url('superadmin/all/question') }}">
                    Question List
                </a>
            </li>

        </ul>
    </div>
</li>



             <li class="nav-item {{ request()->is('superadmin/banners*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('superadmin/banners') }}">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Banner</span>
    </a>
</li>

        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
                <i class="far fa-file-alt menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>

    </ul>
</nav>


