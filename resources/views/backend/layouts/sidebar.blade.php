<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="">
            <a href="{{ url('/') }}" target="_blank" title="">
                @if($setting->first()->black_logo != null)
                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" class="ec-brand-icon" width="180px" alt="Logo">
                @else
                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" class="ec-brand-icon" width="180px" alt="Logo">
                @endif
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard --><!-- Sidebar -->
            @if(Auth::check() && Auth::user()->role == 1)
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>
            @else
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>
                <!-- user list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('users.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>
                <!-- Banner list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('banner.index') }}">
                        <i class="mdi mdi-tag-faces"></i>
                        <span class="nav-text">Banner</span>
                    </a>
                </li>
                <!-- category list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('gallerys.index') }}">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Gallery List</span>
                    </a>
                </li>
                <!-- category list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('experience.index') }}">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Experience</span>
                    </a>
                </li>
                <!-- clients list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('clients.index') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Clients</span>
                    </a>
                </li>
                <!-- stories list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('stories.index') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Stories</span>
                    </a>
                </li>
                <!-- videos list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('videos.index') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Videos</span>
                    </a>
                </li>
                <!-- album list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('album.index') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Album</span>
                    </a>
                </li>
                <!-- review list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('collection.index') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Photos Collection</span>
                    </a>
                </li>

                <!-- Addtional Page list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Addtional Page</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('about.index') }}">
                                    <span class="nav-text">About Us</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('privacypolicy.index') }}">
                                    <span class="nav-text">Privaci policy</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('termandcondition.index') }}">
                                    <span class="nav-text">Terms & Condition</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
