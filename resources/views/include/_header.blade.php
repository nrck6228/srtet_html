<!-- Preload -->
<!-- <div class="loading--page">
    <div class="counter">
        <p>รถไฟฟ้าสายสีแดง</p>
        <h2>0%</h2>
    </div>
</div> -->
<!-- End Preload -->

<header class="header--wrapper">
    <div class="d-none d-xl-block header--desktop">
        <div class="container">
            <nav class="navbar navbar--top">
                <a class="navbar__brand" href="/">
                    <img src="{{ asset('assets/images/logo.svg')}}" alt="SRTET" class="logo">
                </a>
                <div class="list--menu">
                    <div class="font--block">
                        <a href="#nogo" class="text--link downFont">A-</a>
                        <a href="#nogo" class="text--link regularFont">A</a>
                        <a href="#nogo" class="text--link upFont">A+</a>
                    </div>
                    <div class="search--block">
                        <a href="javascript:void(0)" class="text--link" id="topSearch" data-bs-toggle="modal" data-bs-target="#searchModal">
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
                                        <a href="/organization-chart" title="ผังโครงสร้างองค์กร" class="dropdown-link">ผังโครงสร้างองค์กร</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/responsibility" title="ภารกิจ และหน้าที่รับผิดชอบของหน่วยงาน" class="dropdown-link">ภารกิจ และหน้าที่รับผิดชอบของหน่วยงาน</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/strategic" title="ยุทธศาสตร์ แผนปฏิบีติราชการ" class="dropdown-link">ยุทธศาสตร์ แผนปฏิบีติราชการ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/institute" title="หน่วยงานที่รับผิดชอบข้อมูล" class="dropdown-link">หน่วยงานที่รับผิดชอบข้อมูล</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/contact" title="ข้อมูลการติดต่อ" class="dropdown-link">ข้อมูลการติดต่อ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="#nogo" title="วิสัยทัศน์ และนโยบายต่างๆ ด้านเทคโนโลยีสารสนเทศ" class="dropdown-link">วิสัยทัศน์ และนโยบายต่างๆ ด้านเทคโนโลยีสารสนเทศ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/executive" title="ทำเนียบผู้บริหารระดับสูง" class="dropdown-link">ทำเนียบผู้บริหารระดับสูง</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/declaration" title="การเปิดเผยข้อมูลสาธารณะ" class="dropdown-link">การเปิดเผยข้อมูลสาธารณะ</a>
                                    </li>

                                    <!-- <li class="dropdown-item">
                                        <a href="/ITA" title="ITA" class="dropdown-link">ITA</a>
                                    </li> -->
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
                                        <a href="#nogo" title="ประเภทตั๋วโดยสาร" class="dropdown-link">ประเภทตั๋วโดยสาร</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/ticket-information" title="การออกตั๋วโดยสาร" class="dropdown-link">การออกตั๋วโดยสาร</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/fare-information" title="อัตราค่าโดยสาร" class="dropdown-link">อัตราค่าโดยสาร</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="#nogo" title="เงื่อนไขการใช้" class="dropdown-link">เงื่อนไขการใช้</a>
                                    </li>
                                    
                                    <li class="dropdown-item">
                                        <a href="/route-information" title="แผนที่สถานีรถไฟฟ้าสายสีแดง" class="dropdown-link">แผนที่สถานีรถไฟฟ้าสายสีแดง</a>
                                    </li>

                                    <!-- <li class="dropdown-item">
                                        <a href="/station-information" title="ข้อมูลสถานีรถไฟฟ้า" class="dropdown-link">ข้อมูลสถานีรถไฟฟ้า</a>
                                    </li> -->

                                    <li class="dropdown-item">
                                        <a href="/fare-calculated" title="คำนวณค่าโดยสารและเวลาเดินทาง" class="dropdown-link">คำนวณค่าโดยสารและเวลาเดินทาง</a>
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

                                    <li class="dropdown-item">
                                        <a href="/facilities" title="บริการสำหรับคนพิการ" class="dropdown-link">บริการสำหรับคนพิการ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/facilities" title="กฎข้อบังคับ/ข้อแนะนำการใช้บริการ" class="dropdown-link">กฎข้อบังคับ/ข้อแนะนำการใช้บริการ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/shopstation" title="ร้านค้าต่างๆ ประจำสถานี" class="dropdown-link">ร้านค้าต่างๆ ประจำสถานี</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="#nogo" title="สถานที่ใกล้เคียงที่น่าสนใจ" class="dropdown-link">สถานที่ใกล้เคียงที่น่าสนใจ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="#nogo" title="สินค้าและบริการอื่นๆ" class="dropdown-link">สินค้าและบริการอื่นๆ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/survey" title="แบบสำรวจออนไลน์" class="dropdown-link">แบบสำรวจออนไลน์</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/vote" title="Vote / Poll" class="dropdown-link">Vote / Poll</a>
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
                                        <a href="/events" title="ปฏิทินกิจกรรม" class="dropdown-link">ปฏิทินกิจกรรม</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/lostfound" title="ประกาศของหาย" class="dropdown-link">ประกาศของหาย</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="#nogo" title="บทความ" class="dropdown-link">บทความ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/report" title="รายงานประจำปี/ผลการปฎิบัติงาน" class="dropdown-link">รายงานประจำปี/ผลการปฎิบัติงาน</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown--navbar">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">จัดซื้อจัดจ้าง</a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-nav">
                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="แผนการจัดซื้อจัดจ้าง" class="dropdown-link">แผนการจัดซื้อจัดจ้าง</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="ร่างขอบเขตของงาน" class="dropdown-link">ร่างขอบเขตของงาน</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="ประกาศจัดซื้อจัดจ้าง" class="dropdown-link">ประกาศจัดซื้อจัดจ้าง</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="ผลการจัดซื้อจัดจ้าง" class="dropdown-link">ผลการจัดซื้อจัดจ้าง</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="ประกาศยกเลิกการจัดซื้อจัดจ้าง" class="dropdown-link">ประกาศยกเลิกการจัดซื้อจัดจ้าง</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="รายงานประจำปี" class="dropdown-link">รายงานประจำปี</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="ประกาศราคากลาง" class="dropdown-link">ประกาศราคากลาง</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/procurement/index" title="อื่นๆ" class="dropdown-link">อื่นๆ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="/ITA" title="ITA" class="nav-link">ITA</a>
                        </li>

                        <li class="nav-item">
                            <a  href="/career/listcareer"  title="ร่วมงานกับเรา" class="nav-link">ร่วมงานกับเรา</a>
                        </li>

                        <li class="nav-item dropdown dropdown--navbar">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">ติดต่อเรา</a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-nav">
                                    <li class="dropdown-item">
                                        <a href="/contact" title="ติดต่อสอบถาม" class="dropdown-link">ติดต่อสอบถาม</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/contact" title="ติดต่อหน่วยงานที่รับผิดชอบข้อมูล" class="dropdown-link">ติดต่อหน่วยงานที่รับผิดชอบข้อมูล</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/suggession" title="ระบบแนะนำ/ร้องเรียน" class="dropdown-link">ระบบแนะนำ/ร้องเรียน</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/question" title="ถาม - ตอบ" class="dropdown-link">ถาม - ตอบ</a>
                                    </li>

                                    <li class="dropdown-item">
                                        <a href="/faq" title="คำถามที่พบบ่อย" class="dropdown-link">คำถามที่พบบ่อย</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="d-block d-xl-none header--mobile">
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
            <div class="container">
                <nav class="navbar">
                    <div class="list--menu">
                        <div class="font--block">
                            <a href="javascript:void(0)" class="text--link">A-</a>
                            <a href="javascript:void(0)" class="text--link">A</a>
                            <a href="javascript:void(0)" class="text--link">A+</a>
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
    </div>
</header>