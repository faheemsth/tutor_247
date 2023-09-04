<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ route('dashboard') }}">
            <div class="logo-img">
                <img height="30" src="{{ asset('img/sidebar_icons/24_7_logo.png') }}" class="header-brand-img"
                    title="TUTOR">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    @endphp

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ $segment1 == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><img src="{{ asset('img/sidebar_icons/dashboard.png') }}"
                            alt="" width="15px" height="15px" style="padding-right: 3px">
                        <span>{{ __('Dashboard') }}</span></a>
                </div>



                <div
                    class="nav-item {{ $segment1 == 'users' || $segment1 == 'roles' || $segment1 == 'permission' || $segment1 == 'user' ? 'active open' : '' }} has-sub">
                    <a href="#"> <img src="{{ asset('img/sidebar_icons/pngwing_users.png') }}" alt=""
                            width="15px" height="15px" style="padding-right: 3px">
                        <span>{{ __('Users') }}</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        @can('manage_user')
                            <img src="{{ asset('img/sidebar_icons/pngwing_users.png') }}" alt="">
                            <a href="{{ url('users') }}"
                                class="menu-item {{ $segment1 == 'users' ? 'active' : '' }}">{{ __('Student') }}</a>

                            <img src="{{ asset('img/sidebar_icons/pngwing_users.png') }}" alt="">
                            <a href="{{ url('user/create') }}"
                                class="menu-item {{ $segment1 == 'user' && $segment2 == 'create' ? 'active' : '' }}">{{ __('Tutor') }}</a>
                        @endcan
                        <!-- only those have manage_role permission will get access -->
                        @can('manage_roles')
                            <img src="{{ asset('img/sidebar_icons/pngwing_users.png') }}" alt="">
                            <a href="{{ url('roles') }}"
                                class="menu-item {{ $segment1 == 'roles' ? 'active' : '' }}">{{ __('Organization') }}</a>
                        @endcan
                        <!-- only those have manage_permission permission will get access -->
                        @can('manage_permission')
                            <img src="{{ asset('img/sidebar_icons/pngwing_users.png') }}" alt="">
                            <a href="{{ url('permission') }}"
                                class="menu-item {{ $segment1 == 'permission' ? 'active' : '' }}">{{ __('Parent') }}</a>
                        @endcan
                    </div>
                </div>


                <!-- Include demo pages inside sidebar start-->
                @include('pages.sidebar-menu')
                <!-- Include demo pages inside sidebar end-->

            </nav>

        </div>
    </div>
</div>
