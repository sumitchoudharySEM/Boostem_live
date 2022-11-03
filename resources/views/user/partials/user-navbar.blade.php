<header class="navbar navbar-header navbar-header-fixed" style="position:fixed;width: 100vw; padding:2px 10vw; z-index:100;">
    <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        <a href="http://themepixels.me/demo/dashforge1.1/index.html" class="df-logo">Boost<span>em</span></a>
    </div><!-- navbar-brand -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            <a href="http://themepixels.me/demo/dashforge1.1/index.html" class="df-logo">Boost<span>em</span></a>
            <a id="mainMenuClose" href="#"><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
            <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
            {{-- <li class="nav-item with-sub active">
                <a href="#" class="nav-link"><i data-feather="pie-chart"></i> Dashboard</a>
                <ul class="navbar-menu-sub">
                    <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Sales Monitoring</a></li>
                    <li class="nav-sub-item"><a href="dashboard-two.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Website Analytics</a></li>
                    <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Cryptocurrency</a></li>
                    <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Helpdesk Management</a></li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item with-sub">
                <a href="#" class="nav-link"><i data-feather="package"></i> Apps</a>
                <ul class="navbar-menu-sub">
                    <li class="nav-sub-item"><a href="app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>
                    <li class="nav-sub-item"><a href="app-chat.html" class="nav-sub-link"><i data-feather="message-square"></i>Chat</a></li>
                    <li class="nav-sub-item"><a href="app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li>
                    <li class="nav-sub-item"><a href="app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li>
                    <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li>
                </ul>
            </li> --}}

            <li class="nav-item"><a href="{{url('/home')}}" class="nav-link"><i data-feather="box"></i> Discover</a></li>
            <li class="nav-item"><a href="" class="nav-link"><i data-feather="box"></i> Events</a></li>
            <li class="nav-item"><a href="" class="nav-link"><i data-feather="box"></i> Blogs</a></li>
            <li class="nav-item"><a href="" class="nav-link"><i data-feather="archive"></i>Communityes</a></li>
        </ul>
    </div><!-- navbar-menu-wrapper -->
    <div class="navbar-right">
        <a id="navbarSearch" href="#" class="search-link"><i data-feather="search"></i></a>

        <div class="dropdown dropdown-notification">
            <a href="#" class="dropdown-link new-indicator" data-toggle="dropdown">
                <i data-feather="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Notifications</div>
                
                <a href="#" class="dropdown-item">
                    <div class="media">
                        
                        <div class="media-body mg-l-15">
                            <p><strong>No notification yet</strong> </p>
                            <span>Till now</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>

                <div class="dropdown-footer"><a href="#">View all Notifications</a></div>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        @if (Auth::check())
        <div class="dropdown dropdown-profile">
            <a href="#" class="dropdown-link" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm">
                  @if(Auth::user()->profile_photo_path == null) <img src="{{ asset('public/icons/user-img.png') }}" class="rounded-circle" alt="{{ Auth::user()->name }}">
                  @else <img src="{{ Auth::user()->profile_photo_path }}" class="rounded-circle" alt="{{ Auth::user()->name }}">
                  @endif
                </div>
            </a><!-- dropdown-link -->
            <div class="dropdown-menu dropdown-menu-right tx-13">
                <div class="avatar avatar-lg mg-b-15">
                    @if(Auth::user()->profile_photo_path == null) <img src="{{ asset('public/icons/user-img.png') }}" class="rounded-circle" alt="{{ Auth::user()->name }}">
                    @else <img src="{{ Auth::user()->profile_photo_path }}" class="rounded-circle" alt="{{ Auth::user()->name }}">
                    @endif
                </div>
                <h6 class="tx-semibold mg-b-5">{{ Auth::user()->name }}</h6>
                <p class="mg-b-25 tx-12 tx-color-03">{{ Auth::user()->email }}</p>

                {{-- <a href="{{ route('view.profile') }}" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                <a href="{{ route('edit.profile') }}" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('settings.profile') }}" class="dropdown-item"><i data-feather="settings"></i>Settings</a> --}}

                <a href="" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                <a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item"><i data-feather="settings"></i>Settings</a>
                
                  <a href="{{ url('logout') }}" class="dropdown-item"><i data-feather="log-out"></i>Log Out</a>
                
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        @else
        <a href="{{ route('user.register') }}" style="padding:6px 16px; font-size:1.1rem; background-color:#0168fa; color:white;margin-left: 0.7rem; cursor: pointer; border-radius: 4px; " >Login</a>
        @endif
    </div><!-- navbar-right -->
    <div class="navbar-search">
        <div class="navbar-search-header">
            <input type="search" class="form-control" placeholder="Type and hit enter to search...">
            <button class="btn"><i data-feather="search"></i></button>
            <a id="navbarSearchClose" href="#" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
        </div><!-- navbar-search-header -->
        <div class="navbar-search-body">
            <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent
                Searches</label>
            <ul class="list-unstyled">
                <li><a href="dashboard-one.html">modern dashboard</a></li>
                <li><a href="app-calendar.html">calendar app</a></li>
                <li><a href="http://themepixels.me/demo/dashforge1.1/collections/modal.html">modal examples</a></li>
                <li><a href="http://themepixels.me/demo/dashforge1.1/components/el-avatar.html">avatar</a></li>
            </ul>

            <hr class="mg-y-30 bd-0">

            <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search
                Suggestions</label>

            <ul class="list-unstyled">
                <li><a href="dashboard-one.html">cryptocurrency</a></li>
                <li><a href="app-calendar.html">button groups</a></li>
                <li><a href="http://themepixels.me/demo/dashforge1.1/collections/modal.html">form elements</a></li>
                <li><a href="http://themepixels.me/demo/dashforge1.1/components/el-avatar.html">contact app</a></li>
            </ul>
        </div><!-- navbar-search-body -->
    </div><!-- navbar-search -->
</header><!-- navbar -->

<script src="{{ asset('public/dashforge/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/dashforge/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/dashforge/lib/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('public/dashforge/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('public/dashforge/lib/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('public/dashforge/lib/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('public/dashforge/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('public/dashforge/lib/jquery.flot/jquery.flot.resize.js') }}"></script>

<script src="{{ asset('public/dashforge/assets/js/dashforge.js') }}"></script>
<script src="{{ asset('public/dashforge/assets/js/dashforge.sampledata.js') }}"></script>
<script src="{{ asset('public/dashforge/assets/js/dashboard-two.js') }}"></script>

<!-- append theme customizer -->
<script src="{{ asset('public/dashforge/lib/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('public/dashforge/assets/js/dashforge.settings.js') }}"></script>
