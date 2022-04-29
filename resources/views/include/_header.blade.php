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
                <a class="navbar__brand" href="/home">
                    <img src="{{ asset('assets/images/logo.jpg')}}" alt="SRTET" class="logo">
                </a>
                <div class="list--menu">
                    <div class="font--block">
                        <a href="javascript:void(0)" class="text--link" id="downFont">A-</a>
                        <a href="javascript:void(0)" class="text--link" id="regularFont">A</a>
                        <a href="javascript:void(0)" class="text--link" id="upFont">A+</a>
                    </div>
                    <div class="search--block">
                        <a href="javascript:void(0)" class="text--link" id="topSearch">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                    <div class="language--block">
                        <a href="javascript:void(0)" class="text--link" id="topLang">EN</a>
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
            <nav class="navbar navbar-expand-lg navbar--bottom bg--primary">
                <div class="collapse navbar-collapse" id="navbar-content">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">หน้าหลัก</a>
                        </li>

                        <li class="nav-item dropdown dropdown--navbar">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">เกี่ยวกับเรา</a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-nav">
                                    <li class="dropdown-item">
                                        <a href="/history" title="ประวัติความเป็นมา" class="dropdown-link">ประวัติความเป็นมา</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/vision-mission" title="วิสัยทัศน์ พันธกิจ" class="dropdown-link">วิสัยทัศน์ พันธกิจ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/organization-chart" title="โครงสร้างหน่วยงาน ผู้บริหาร อำนาจหน้าที่" class="dropdown-link">โครงสร้างหน่วยงาน ผู้บริหาร อำนาจหน้าที่</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/executive" title="ทำเนียบผู้บริหารระดับสูง" class="dropdown-link">ทำเนียบผู้บริหารระดับสูง</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/responsible" title="หน่วยงานที่รับผิดชอบ" class="dropdown-link">หน่วยงานที่รับผิดชอบ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown--navbar">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">บริการลูกค้า</a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-nav">
                                    <li class="dropdown-item">
                                        <a href="/facilities" title="สิ่งอำนวยความสะดวก" class="dropdown-link">สิ่งอำนวยความสะดวก</a>
                                    </li>
                                </ul>
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