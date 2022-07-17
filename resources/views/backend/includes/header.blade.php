<div class="top-bar primary-top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a class="admin-logo" href="{{ route('admin.index') }}">
                    <h1>
                        <img alt="" src="{{ asset('backend/assets/img/icon.png') }}" class="logo-icon margin-r-10">
                        <img alt="" src="{{ asset('backend/assets/img/logo-dark.png') }}" class="toggle-none hidden-xs">
                    </h1>
                </a>
                <div class="left-nav-toggle">
                    <a href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
                </div>
                <div class="left-nav-collapsed">
                    <a href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="col">
                <ul class="list-inline top-right-nav">
                    <li class="dropdown icons-dropdown d-none-m">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i>
                            <div class="notify setpos"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                            <li>
                                <div class="dropdown-header">
                                    <a class="float-right" href="#"><small>View All</small></a> Notifications
                                </div>
                                <div class="scrollDiv">
                                    <div class="notification-list">

                                        <a class="clearfix" href="#">
													<span class="notification-icon">
														<i class="icon-cloud-upload text-primary"></i>
													</span>
                                            <span class="notification-title">Upload Complete</span>
                                            <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class="notification-time">15 minutes ago</span>
                                        </a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown avtar-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img alt="" class="rounded-circle"
                                 src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}" width="30">
                            {{ \Illuminate\Support\Facades\Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu top-dropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.user.index') }}"><i
                                        class="icon-user"></i> Profil</a>
                            </li><li>
                                <a class="dropdown-item" href="{{ route('password.confirm') }}"><i
                                        class="icon-lock"></i> Ekranı Kilitle</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="icon-settings"></i> Settings</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="icon-logout"></i> Çıkış
                                    Yap</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
