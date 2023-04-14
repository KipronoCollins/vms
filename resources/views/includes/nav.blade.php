<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">VMS</span></a>
    </div>
    <div class="menu">
        @if (Auth::user()->roleId == 1)
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        {{-- <small>Super Admin</small>                         --}}
                    </div>
                </div>
            </li>
            <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Users</span></a>
                <ul class="ml-menu">
                    <li><a href=" {{ route('admin.users') }} ">Manage Users</a></li>
                    <li><a href="chat.html">Add Users</a></li>                   
                </ul>
            </li>
        </ul>
        @endif
    </div>
</aside>