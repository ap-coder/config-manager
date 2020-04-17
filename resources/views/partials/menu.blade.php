<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('channel_server_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.channelServer.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('channel_server_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.channel-servers.index") }}" class="nav-link {{ request()->is('admin/channel-servers') || request()->is('admin/channel-servers/*') ? 'active' : '' }}">
                                    <i class="fa-fw far fa-check-square nav-icon">

                                    </i>
                                    {{ trans('cruds.channelServer.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('csi_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.csis.index") }}" class="nav-link {{ request()->is('admin/csis') || request()->is('admin/csis/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-check-square nav-icon">

                                    </i>
                                    {{ trans('cruds.csi.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('cso_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.csos.index") }}" class="nav-link {{ request()->is('admin/csos') || request()->is('admin/csos/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-check-square nav-icon">

                                    </i>
                                    {{ trans('cruds.cso.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('sync_server_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.syncServer.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('sync_server_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.sync-servers.index") }}" class="nav-link {{ request()->is('admin/sync-servers') || request()->is('admin/sync-servers/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-arrow-right nav-icon">

                                    </i>
                                    {{ trans('cruds.syncServer.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('system_default_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.systemDefault.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('channel_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.channels.index") }}" class="nav-link {{ request()->is('admin/channels') || request()->is('admin/channels/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-arrow-alt-circle-right nav-icon">

                                    </i>
                                    {{ trans('cruds.channel.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>