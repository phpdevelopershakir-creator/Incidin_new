<nav id="sidebar" class="sidebar bg-white text-dark border-end">
    <ul class="nav flex-column">

        <!-- PROFILE -->
        <li class="nav-item text-center py-3 border-bottom">

            <div class="fw-bold text-dark">{{ auth()->user()->name }}</div>
        </li>

        <!-- DASHBOARD -->
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('dashboard') ? 'active bg-primary text-white' : 'text-dark' }}"
                href="{{ route('dashboard') }}">
                <i class="fa fa-home me-2"></i> Dashboard
            </a>
        </li>


        <!-- ========== LOCATION MENU ========== -->
        @php
        $locationRoutes = [
        'superadmin.all.division',
        'superadmin.all.district',
        'superadmin.all.upazila',
        'superadmin.all.union'
        ];
        $isLocationActive = request()->routeIs($locationRoutes);
        @endphp

        <li class="nav-item">
            <a class="nav-link text-dark d-flex justify-content-between {{ $isLocationActive ? '' : 'collapsed' }}"
                data-bs-toggle="collapse"
                href="#locationMenu">
                <span><i class="fas fa-map me-2"></i> Location Management</span>
                <i class="fas fa-chevron-down"></i>
            </a>

            <div class="collapse {{ $isLocationActive ? 'show' : '' }}" id="locationMenu">
                <ul class="nav flex-column ms-4">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.division') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.division') }}">
                            All Division
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.district') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.district') }}">
                            All Districts
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.upazila') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.upazila') }}">
                            All Upazila
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.union') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.union') }}">
                            All Union
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <!-- ========== USER CREATE MENU ========== -->
        @php
        $userRoutes = ['superadmin.user.create', 'superadmin.user.list', 'superadmin.user.edit'];
        $isUserActive = request()->routeIs($userRoutes);
        @endphp

        <li class="nav-item">
            <a class="nav-link text-dark d-flex justify-content-between {{ $isUserActive ? '' : 'collapsed' }}"
                data-bs-toggle="collapse"
                href="#userMenu">
                <span><i class="fas fa-user-plus me-2"></i> User Create</span>
                <i class="fas fa-chevron-down"></i>
            </a>

            <div class="collapse {{ $isUserActive ? 'show' : '' }}" id="userMenu">
                <ul class="nav flex-column ms-4">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.user.create') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.user.create') }}">
                            User Create
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.user.list','superadmin.user.edit') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.user.list') }}">
                            User List
                        </a>
                    </li>
                </ul>
            </div>
        </li>


        <!-- ========== DATA ENTRY MENU ========== -->
        @php
        $dataRoutes = ['superadmin.case.create', 'superadmin.case.list', 'superadmin.view.case','superadmin.question.summary'];
        $isDataActive = request()->routeIs($dataRoutes);
        @endphp

        <li class="nav-item">
            <a class="nav-link text-dark d-flex justify-content-between {{ $isDataActive ? '' : 'collapsed' }}"
                data-bs-toggle="collapse"
                href="#dataMenu">
                <span><i class="fas fa-database me-2"></i> Data Entry</span>
                <i class="fas fa-chevron-down"></i>
            </a>

            <div class="collapse {{ $isDataActive ? 'show' : '' }}" id="dataMenu">
                <ul class="nav flex-column ms-4">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.question.summary') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.question.summary') }}">
                            All Question
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.case.create') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.case.create') }}">
                            Create Data
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.case.list','superadmin.view.case') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.case.list') }}">
                            View Data
                        </a>
                    </li>

                </ul>
            </div>
        </li>


        <!-- ========== ROLE & PERMISSION ========== -->
        @php
        $roleRoutes = [
        'superadmin.all.permission',
        'superadmin.all.role',
        'superadmin.all.role.permission',
        'superadmin.all.question'
        ];
        $isRoleActive = request()->routeIs($roleRoutes);
        @endphp

        <li class="nav-item">
            <a class="nav-link text-dark d-flex justify-content-between {{ $isRoleActive ? '' : 'collapsed' }}"
                data-bs-toggle="collapse"
                href="#roleMenu">
                <span><i class="fas fa-key me-2"></i> Role & Permission</span>
                <i class="fas fa-chevron-down"></i>
            </a>

            <div class="collapse {{ $isRoleActive ? 'show' : '' }}" id="roleMenu">
                <ul class="nav flex-column ms-4">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.permission') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.permission') }}">
                            All Permissions
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.role') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.role') }}">
                            All Roles
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.role.permission') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.role.permission') }}">
                            Role & Permission
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('superadmin.all.question') ? 'active bg-primary text-white' : 'text-dark' }}"
                            href="{{ route('superadmin.all.question') }}">
                            58 Question
                        </a>
                    </li>

                </ul>
            </div>
        </li>


        <!-- BANNER -->


        <li class="nav-item">
            <a class="nav-link text-dark {{ request()->routeIs('superadmin.banners') ? 'active bg-primary text-white' : '' }}"
                href="{{ route('superadmin.banners') }}">
                <i class="fas fa-image me-2"></i> Banner
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-dark {{ request()->routeIs('listed.ministry.agency') ? 'active bg-primary text-white' : '' }}"
                href="{{ route('listed.ministry.agency') }}">
                List Ministry & Agency
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text {{ request()->routeIs('superadmin.all.faq') ? 'active bg-primary text-white' : '' }}"
                href="{{ route('superadmin.all.faq') }}">
                Question & Answers
            </a>
        </li>


        <!-- LOGOUT -->
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('logout') }}">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
        </li>

    </ul>
</nav>