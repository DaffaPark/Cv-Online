<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
             <li class="treeview">
                <a href="{{ route("admin.home") }}">
                    <i class="bi bi-speedometer2" class="pull-right-container">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="bi bi-kanban-fill">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="bi bi-unlock-fill">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="bi bi-briefcase-fill">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="bi bi-people-fill">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            
            @can('Akses_RPL')
            <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>Data Murid RPL</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="nav-item">
                            <a href="/muridrpl" class="nav-link">
                              <p class="far fa-circle nav-icon"> Data Murid RPL</p>
                            </a>
                        </li>
                    </ul>
            </li>
            @endcan
            @can('Akses_Alumni')
            <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>Alumni</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                              <p class="far fa-circle nav-icon"> Dashboard</p>
                            </a>
                        </li>
                    </ul>
            </li>
            @endcan
            <li class="treeview">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="bi bi-power">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
            
        </ul>
    </section>
</aside>