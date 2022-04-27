<!-- Preload -->
<!-- <div class="loading--page">
    <div class="counter">
        <p>รถไฟฟ้าสายสีแดง</p>
        <h2>0%</h2>
    </div>
</div> -->
<!-- End Preload -->

<header class="header--wrapper">
    <div class="header--desktop d-none d-lg-block">
        <div class="container">
            <nav class="navbar navbar--top">
                <a class="navbar__brand" href="#">
                    <img src="{{ asset('assets/images/logo.jpg')}}" alt="SRTET" class="logo">
                </a>
                <div class="list--menu">
                    <div class="font--block">
                        <a href="javascript:void(0)" id="downFont">A-</a>
                        <a href="javascript:void(0)" id="regularFont">A</a>
                        <a href="javascript:void(0)" id="upFont">A+</a>
                    </div>
                    <div class="search--block">
                        <a href="javascript:void(0)" id="topSearch">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                    <div class="language--block">
                        <a href="javascript:void(0)" id="topLang">EN</a>
                    </div>
                    <div class="social--block">
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="{{ asset('assets/images/icon/facebook.svg')}}" alt="facebook">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="{{ asset('assets/images/icon/twitter.svg')}}" alt="twitter">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="{{ asset('assets/images/icon/instagram.svg')}}" alt="instagram">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="{{ asset('assets/images/icon/youtube.svg')}}" alt="youtube">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="{{ asset('assets/images/icon/tiktok.svg')}}" alt="tiktok">
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar--bottom">
                <div class="collapse navbar-collapse" id="navbar-content">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">หน้าหลัก</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">เกี่ยวกับเรา</a>
                            <div class="dropdown-menu">
                                <div class="list--menu p-4">
                                    <div class="container">
                                        <div class="row row-cols-md-2 row-cols-lg-4">
                                            <div class="col mb-3">
                                                <a href="#" title="" class="menu__item">เกี่ยวกับเรา</a>
                                            </div>
                                            <div class="col mb-3">
                                                <a href="#" title="" class="menu__item">เกี่ยวกับเรา</a>
                                            </div>
                                            <div class="col mb-3">
                                                <a href="#" title="" class="menu__item">เกี่ยวกับเรา</a>
                                            </div>
                                            <div class="col mb-3">
                                                <a href="#" title="" class="menu__item">เกี่ยวกับเรา</a>
                                            </div>
                                            <div class="col mb-3">
                                                <a href="#" title="" class="menu__item">เกี่ยวกับเรา</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="header--mobile d-block d-lg-none">
        <div class="container">
            <nav class="navbar navbar--top">
                <a class="navbar__brand" href="#">
                    <img src="{{ asset('assets/images/logo.jpg')}}" alt="SRTET" class="logo">
                </a>
                <div class="list--menu">
                    <div class="search--block">
                        <a href="javascript:void(0)" id="mobileSearch">Search</a>
                    </div>
                    <div class="language--block">
                        <a href="javascript:void(0)" id="mobileLang">EN</a>
                    </div>
                    <div class="hamburger" data-bs-toggle="collapse" data-bs-target="#collapseMobileNav" role="button" aria-expanded="false" aria-controls="collapseMobileNav">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </nav>
        </div>

        <div class="mobile--nav">
            <nav class="navbar">
                <div class="collapse" id="collapseMobileNav">                         
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">หน้าหลัก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="menuAbout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">เกี่ยวกับเรา</a>
                            <ul class="dropdown-menu" aria-labelledby="menuAbout">
                                <li>
                                    <a href="#" class="dropdown-item" target="_self">
                                        เกี่ยวกับเรา
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item" target="_self">
                                        เกี่ยวกับเรา
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item" target="_self">
                                        เกี่ยวกับเรา
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>