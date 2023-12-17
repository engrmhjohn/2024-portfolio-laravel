<aside id="leftsidebar" class="sidebar">
    @php

    @endphp
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ url('/dashboard') }}"><img src="{{ asset($logo->logo ?? '') }}" width="100" alt="Logo"><span class="m-l-10"></span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="#"><img src="{{ asset('adminAssets') }}/images/profile_av.png" alt="User"></a>
                    <div class="detail">
                        <h6>{{ Auth::user()->name }}</h6> <img style="height: 20px; width:20px;" src="{{ asset('adminAssets') }}/images/badge.png" alt="User">
                        @if( Auth::user()->role == '2')
                        <small> <strong> Super Admin </strong> </small>
                        @elseif( Auth::user()->role == '1')
                        <small> <strong> Admin </strong> </small>
                        @else
                        <small> <strong> Will be Admin </strong> </small>
                        @endif
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i><span>Home</span></a>
            </li>
            @if( Auth::user()->role == '1' || Auth::user()->role == '2')
            <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-apps"></i><span>Content Manage</span></a>
                <ul class="ml-menu" style="display: none;">
                    <li><a href="" class=" waves-effect waves-block">Add Pages</a></li>
                </ul>
            </li>
            @if( Auth::user()->role == '2')
            <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-account"></i><span>Admin</span></a>
                <ul class="ml-menu" style="display: none;">
                    <li><a href="{{ route('manage_admin') }}" class=" waves-effect waves-block">Manage Admin</a></li>
                </ul>
            </li>
            @endif
            <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-account"></i><span>My Profile</span></a>
                <ul class="ml-menu" style="display: none;">
                    <li><a href="{{ url('admin/profile-admin') }}" class=" waves-effect waves-block">Manage Profile</a></li>
                </ul>
            </li>
            @else
            @endif
        </ul>
    </div>
</aside>