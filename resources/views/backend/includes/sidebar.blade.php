<nav class="sidebar sidebar-offcanvas">
    <ul class="nav">
        <li class="nav-item {{ Route::currentRouteNamed('admin.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Anasayfa</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is(['admin/about/*','admin/about']) ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="about">
                <i class="mdi mdi-clipboard-account-outline menu-icon"></i>
                <span class="menu-title">Hakkımda</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is(['admin/about/*','admin/about']) ? 'show' : '' }}" id="about">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.about.edit') ? 'active' : '' }}" href="{{ route('admin.about.edit') }}">Genel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.about.edit.meta') ? 'active' : '' }}" href="{{ route('admin.about.edit.meta') }}">Meta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.about.edit.skills') ? 'active' : '' }}" href="{{ route('admin.about.edit.skills') }}">Yetenekler</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is(['admin/slider/*','admin/slider']) ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="slider">
                <i class="mdi mdi-camera-image menu-icon"></i>
                <span class="menu-title">Slider</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is(['admin/slider/*','admin/slider']) ? 'show' : '' }}" id="slider">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.slider.edit') ? 'active' : '' }}" href="{{ route('admin.slider.edit') }}">Düzenle</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is(['admin/breadcrumb/*','admin/breadcrumb']) ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#icon" aria-expanded="false" aria-controls="icon">
                <i class="mdi mdi-image-album menu-icon"></i>
                <span class="menu-title">İconlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is(['admin/breadcrumb/*','admin/breadcrumb']) ? 'show' : '' }}" id="icon">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.breadcrumb.index') ? 'active' : '' }}" href="{{ route('admin.breadcrumb.index') }}">Listele</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.breadcrumb.create') ? 'active' : '' }}" href="{{ route('admin.breadcrumb.create') }}">Ekle</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is(['admin/category/*','admin/category']) ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
                <i class="mdi mdi-format-list-triangle menu-icon"></i>
                <span class="menu-title">Kategoriler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is(['admin/category/*','admin/category']) ? 'show' : '' }}" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.category.index') ? 'active' : '' }}" href="{{ route('admin.category.index') }}">Listele ~ Ekle</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is(['admin/portfolio/*','admin/portfolio']) ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#portfolio" aria-expanded="false" aria-controls="portfolio">
                <i class="mdi mdi-bookmark-minus-outline menu-icon"></i>
                <span class="menu-title">Portfolyolar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is(['admin/portfolio/*','admin/portfolio']) ? 'show' : '' }}" id="portfolio">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.portfolio.index') ? 'active' : '' }}" href="{{ route('admin.portfolio.index') }}">Listele</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.portfolio.create') ? 'active' : '' }}" href="{{ route('admin.portfolio.create') }}">Ekle</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is(['admin/service/*','admin/service']) ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="service">
                <i class="mdi mdi-server-network menu-icon"></i>
                <span class="menu-title">Hizmetler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is(['admin/service/*','admin/service']) ? 'show' : '' }}" id="service">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.service.index') ? 'active' : '' }}" href="{{ route('admin.service.index') }}">Listele</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('admin.service.create') ? 'active' : '' }}" href="{{ route('admin.service.create') }}">Ekle</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
