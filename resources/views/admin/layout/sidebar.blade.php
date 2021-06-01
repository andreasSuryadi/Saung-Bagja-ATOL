<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ __('Detail') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin') }}"><i class="nav-icon icon-home"></i> {{ __('Beranda') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/about-us') }}"><i class="nav-icon icon-home"></i> {{ __('Tentang Kami') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/news-content') }}"><i class="nav-icon icon-puzzle"></i> {{ __('Berita') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/menus') }}"><i class="nav-icon icon-list"></i> {{ __('Hidangan') }}</a></li>


           <li class="nav-title">{{ __('Content') }}</li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/news') }}"><i class="nav-icon icon-puzzle"></i> {{ __('Berita') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/menus') }}"><i class="nav-icon icon-list"></i> {{ __('Hidangan') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Users') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
