<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">Menü</li>
            <li class="{{ Route::currentRouteNamed('admin.index') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}">
                    <i data-feather="home"></i>
                    <span>Anasayfa</span>
                </a>
            </li>
            <li class="{{ Request::is(['admin/about/*','admin/about']) ? 'active' : '' }}">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="archive"></i>
                    <span>Hakkımda Bölümü</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Route::currentRouteNamed('admin.about.edit') ? 'active' : '' }}">
                        <a href="{{ route('admin.about.edit') }}">Düzenle</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is(['admin/slider/*','admin/slider']) ? 'active' : '' }}">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="sliders"></i>
                    <span>Slider Bölümü</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Route::currentRouteNamed('admin.slider.edit') ? 'active' : '' }}">
                        <a href="{{ route('admin.slider.edit') }}">Düzenle</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is(['admin/breadcrumb/*','admin/breadcrumb']) ? 'active' : '' }}">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="image"></i>
                    <span>İconlar Bölümü</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Route::currentRouteNamed('admin.breadcrumb.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.breadcrumb.index') }}">Listele</a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('admin.breadcrumb.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.breadcrumb.create') }}">Ekle</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is(['admin/portfolio/*','admin/portfolio']) ? 'active' : '' }}">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="bookmark"></i>
                    <span>Portfolyolar Bölümü</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Route::currentRouteNamed('admin.portfolio.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.portfolio.index') }}">Listele</a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('admin.portfolio.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.portfolio.create') }}">Ekle</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is(['admin/category/*','admin/category']) ? 'active' : '' }}">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="list"></i>
                    <span>Kategoriler Bölümü</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Route::currentRouteNamed('admin.category.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.category.index') }}">Listele ~ Ekle</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is(['admin/service/*','admin/service']) ? 'active' : '' }}">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="briefcase"></i>
                    <span>Hizmetler Bölümü</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Route::currentRouteNamed('admin.service.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.service.index') }}">Listele</a>
                    </li>
                    <li class="{{ Route::currentRouteNamed('admin.service.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.service.create') }}">Ekle</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
