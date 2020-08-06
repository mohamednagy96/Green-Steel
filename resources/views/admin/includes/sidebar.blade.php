<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">Dashboard</li>

            <li>
                <a href="{{ route('admin.admin_users.index') }}">
                  <i class="fa fa-user"></i> <span>{{ __('Admins') }}</span>
                </a>
            </li>
{{-- 
            @can('roles_list')
                <li>
                    <a href="{{ route('admin.roles.index') }}">
                    <i class="fa fa-user"></i> <span>{{ __('Roles') }}</span>
                    </a>
                </li>
            @endcan --}}

            @can('about_list')
            <li>
                <a href="{{ route('admin.aboutus.index') }}">
                  <i class="fa fa-home"></i> <span>{{ __('AboutUs') }}</span>
                </a>
            </li>
            @endcan

            {{-- @can('clients_list')
            <li>
                <a href="{{ route('admin.ourclients.index') }}">
                  <i class="fa fa-users"></i> <span>{{ __('Our Clients') }}</span>
                </a>
            </li>
            @endcan --}}


            @can('services_list')
            <li>
                <a href="{{ route('admin.services.index') }}">
                  <i class="fa fa-paperclip"></i> <span>{{ __('services') }}</span>
                </a>
            </li>
            @endcan

            @can('settings_list')
            <li>
                <a href="{{ route('admin.settings.index') }}">
                  <i class="fa fa-paperclip"></i> <span>{{ __('Settings') }}</span>
                </a>
            </li>
            @endcan
            @can('contacts_list')
            <li>
              <a href="{{route('admin.contacts.index')}}">
                <i class="fa fa-paperclip"></i> <span>{{ __('Contact Us') }}</span>
              </a>
            </li>
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
