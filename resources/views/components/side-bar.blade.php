<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header text-center mb-4">
            <a class="navbar-brand text-primary" href="{{ url('/') }}">
                <img src="{{ asset('img/logo/logo.png') }}" alt="homepage" class="dark-logo" />
            </a>
        </div>
        <br>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">

                <!-- Nav items -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $curr_url=='home'?'active':'' }}" href="{{ route('home') }}">
                            <i class="fas fa-desktop"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ in_array($curr_url,['companies.index','companies.create','companies.edit'])?'active':'' }}"
                            href="{{ route('companies.index') }}">
                            <i class="fas fa-building"></i>
                            <span class="hide-menu">Companies</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ in_array($curr_url,['employees.index','employees.create','employees.edit'])?'active':'' }}"
                            href="{{ route('employees.index') }}">
                            <i class="fas fa-users"></i>
                            <span class="hide-menu">Employee</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
