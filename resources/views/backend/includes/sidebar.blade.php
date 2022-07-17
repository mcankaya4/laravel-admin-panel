<div class="main-sidebar-nav default-navigation">
    <div class="nano">
        <div class="nano-content sidebar-nav">

            <div class="card-body border-bottom text-center nav-profile">
                <div class="notify setpos"><span class="heartbit"></span> <span class="point"></span></div>
                <img alt="profile" class="margin-b-10  "
                     src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}" width="80">
                <p class="lead margin-b-0 toggle-none">{{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                <p class="text-muted mv-0 toggle-none">Hoşgeldin</p>
            </div>

            <ul class="metisMenu nav flex-column" id="menu">
                <li class="nav-heading">
                    <span>Menü</span>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.index') }}">
                        <i class="fa fa-home"></i>
                        <span class="toggle-none">Anasayfa
                            <span class="badge badge-pill badge-danger float-right mr-2">1.0</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.slider.edit') }}">
                        <i class="fa fa-sliders"></i>
                        <span class="toggle-none">
                            Slider
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.about.edit') }}">
                        <i class="fa fa-address-book-o"></i>
                        <span class="toggle-none">
                            Hakkımda
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false">
                        <i class="fa fa-image"></i>
                        <span class="toggle-none">Breadcrumb İconlar
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.breadcrumb.index') }}">İconları Listele</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.breadcrumb.create') }}">İcon Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false">
                        <i class="fa fa-briefcase"></i>
                        <span class="toggle-none">Portfolyo
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.portfolio.index') }}">Portfolyoları Listele</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.portfolio.create') }}">Portfolyo Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.category.index') }}">
                        <i class="fa fa-tasks"></i>
                        <span class="toggle-none">
                            Kategoriler
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript: void(0);" aria-expanded="false">
                        <i class="fa fa-life-bouy"></i>
                        <span class="toggle-none">Hizmetler
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.service.index') }}">Hizmetleri Listele</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.service.create') }}">Hizmet Ekle</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
