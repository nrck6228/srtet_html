<!-- Preload -->
<!-- <div class="loading--page">
    <div class="counter">
        <p>รถไฟฟ้าสายสีแดง</p>
        <h2>0%</h2>
    </div>
</div> -->
<!-- End Preload -->

<header class="header--wrapper">
    <div class="d-none d-lg-block header--desktop">
        <div class="container">
            <nav class="navbar navbar--top">
                <a class="navbar__brand" href="/">
                    <img src="{{ asset('assets/images/logo.svg')}}" alt="SRTET" class="logo">
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
                    <div class="callcenter--block">
                        <a href="tel:1960" class="text--link" id="topCallCenter"><i class="icon-call"></i>&nbsp; Call Center 1960</a>
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
                    <ul class="navbar-nav" id="NavBar">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">หน้าหลัก</a>
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

                                    <!-- <li class="dropdown-item">
                                        <a href="/responsible" title="หน่วยงานที่รับผิดชอบ" class="dropdown-link">หน่วยงานที่รับผิดชอบ</a>
                                    </li> -->
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
                                    <li class="dropdown-item">
                                        <a href="/shopstation" title="ร้านค้าต่างๆ ประจำสถานี" class="dropdown-link">ร้านค้าต่างๆ ประจำสถานี</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="/vote" title="Vote / Poll" class="dropdown-link">Vote / Poll</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="/survey" title="แบบสำรวจออนไลน์" class="dropdown-link">แบบสำรวจออนไลน์</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown--navbar">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">กำหนดเวลาเดินรถ</a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-nav">
                                    <li class="dropdown-item">
                                        <a href="/fare-table" title="ข้อมูลกำหนดเวลาเดินรถ" class="dropdown-link">ข้อมูลกำหนดเวลาเดินรถ</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="/ticket-information" title="การออกตั๋วโดยสาร" class="dropdown-link">การออกตั๋วโดยสาร</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="/fare-information" title="อัตราค่าโดยสาร" class="dropdown-link">อัตราค่าโดยสาร</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="/route-information" title="แผนที่สถานีรถไฟฟ้า" class="dropdown-link">แผนที่สถานีรถไฟฟ้า</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="/station-information" title="ข้อมูลสถานีรถไฟฟ้า" class="dropdown-link">ข้อมูลสถานีรถไฟฟ้า</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="/fare-calculated" title="คำนวณค่าโดยสารและเวลาเดินทาง" class="dropdown-link">คำนวณค่าโดยสารและเวลาเดินทาง</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown--navbar">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">ข่าวสารและกิจกรรม</a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-nav">
                                    <li class="dropdown-item">
                                        <a href="/news" title="ข่าวสาร" class="dropdown-link">ข่าวสาร</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/activity" title="ภาพกิจกรรม" class="dropdown-link">ภาพกิจกรรม</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/lostfound" title="Lost & Found" class="dropdown-link">Lost & Found</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" title="จัดซื้อจัดจ้าง" href="/procument">จัดซื้อจัดจ้าง</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" title="รายงานประจำปี" href="/report">รายงานประจำปี</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" title="ติดต่อเรา" href="/contact">ติดต่อเรา</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="d-block d-lg-none header--mobile">
        <div class="container">
            <nav class="navbar navbar--top">
                <a class="navbar__brand" href="#">
                <img src="{{ asset('assets/images/logo.svg')}}" alt="SRTET" class="logo">
                </a>
                <div class="list--menu">
                    <div class="search--block">
                        <a href="javascript:void(0)" class="text--link" id="mobileSearch">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                    <div class="language--block">
                        <a href="javascript:void(0)" class="text--link" id="mobileLang">EN</a>
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
                <div class="list--menu">
                    <div class="font--block">
                        <a href="javascript:void(0)" class="text--link" id="downFont">A-</a>
                        <a href="javascript:void(0)" class="text--link" id="regularFont">A</a>
                        <a href="javascript:void(0)" class="text--link" id="upFont">A+</a>
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

                <div class="collapse" id="collapseMobileNav">
                    <!-- Clone child html from #NavBar -->
                </div>

                <div class="list--menu justify-content-center">
                    <div class="callcenter--block">
                        <a href="tel:1960" class="text--link" id="topCallCenter"><i class="icon-call"></i>&nbsp; Call Center 1960</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>