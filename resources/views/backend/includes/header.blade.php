<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onclick="return false;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="#" onclick="return false;" class="bars"></a>
            <a class="navbar-brand" href="{{ route('admin.index') }}">
                <img src="{{ asset('backend/assets/images/logo.png') }}" alt=""/>
                <span class="logo-name">Panel</span>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapse" style="">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" onclick="return false;" class="sidemenu-collapse">
                        <i data-feather="align-justify"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->
                <!-- #START# Notifications-->
                <li class="dropdown">
                    <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown"
                       role="button">
                        <i data-feather="bell"></i>
                        <span class="notify"></span>
                        <span class="heartbeat"></span>
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('backend/assets/images/user/user1.jpg') }}"
                                                     alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('backend/assets/images/user/user2.jpg') }}"
                                                     alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('backend/assets/images/user/user3.jpg') }}"
                                                     alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('backend/assets/images/user/user4.jpg') }}"
                                                     alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('backend/assets/images/user/user5.jpg') }}"
                                                     alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('backend/assets/images/user/user6.jpg') }}"
                                                     alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('backend/assets/images/user/user7.jpg') }}"
                                                     alt="">
                                            </span>
                                        <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#" onClick="return false;">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications-->
                <li class="dropdown user_profile">
                    <div class="chip dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}" alt="Contact Person">
                        {{ \Illuminate\Support\Facades\Auth::user()->name }}
                    </div>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="{{ route('admin.user.index') }}">
                                        <i class="material-icons">person</i>Profil
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">feedback</i>Feedback
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('password.confirm') }}">
                                        <i class="material-icons">lock</i>Ekranı Kilitle
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}">
                                        <i class="material-icons">power_settings_new</i>Çıkış Yap
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
