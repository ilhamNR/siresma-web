<header id="header" class="header-transparent header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo text-center">
                            <a href="index.html">
                                <img alt="SIRESMA" width="50" height="50" src="{{url('img/Logo Siresma_2-01.svg')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-start">
                    <div class="header-row">
                        <div
                            class="header-nav header-nav-links header-nav-line header-nav-bottom-line header-nav-bottom-line-active-text-light header-nav-dropdowns-dark header-nav-light-text">
                            <div
                                class="header-nav-main header-nav-main-text-capitalize header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href={{ route('public.home') }}>
                                                Beranda
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href={{ route('public.visionMission') }}>
                                                Tentang
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href={{ route('public.newsIndex') }}>
                                                Berita
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle">
                                                Data Pengelolaan Sampah
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href={{ route('public.landfillData') }}>Timbunan Sampah</a></li>
                                                <li><a class="dropdown-item" href="komposisi-sampah.html">Komposisi Sampah</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href={{ route('public.newsIndex') }}>
                                                Aplikasi
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href={{ route('public.contactUs') }}>
                                                Hubungi Kami
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('public.contactUs') }}">
                                                <i class="fas fa-user"></i> 
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <button class="btn header-btn-collapse-nav ms-3 ms-sm-4" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
