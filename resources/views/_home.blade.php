@extends('masterpage')

@section('title', 'หน้าแรก')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="home--hero">
            <div class="container">
                <div class="main--slider">
                    <div class="item video">
                        <video class="slide-video slide-media" loop muted preload="metadata" poster="">
                            <source src="https://player.vimeo.com/external/138504815.sd.mp4?s=8a71ff38f08ec81efe50d35915afd426765a7526&profile_id=112" type="video/mp4" />
                        </video>
                        <div class="caption">
                            <h2 class="caption__title">
                                รถไฟฟ้าสายสีแดง
                            </h2>
                            <h3 class="caption__text">
                                ยกระดับคุณภาพชีวิตชานเมือง
                            </h3>
                        </div>
                    </div>

                    <div class="item image">
                        <a href="https://www.google.co.th" title="รถไฟฟ้าสายสีแดง" target="_blank" class="slide-link">
                            <div class="slide-image slide-media" style="background-image:url('{{ asset('assets/images/hero/banner-demo-home.jpg')}}');">
                                <img data-lazy="{{ asset('assets/images/hero/banner-demo-home.jpg')}}" class="image-entity" />
                            </div>
                            <figcaption class="caption">
                                <h2 class="caption__title">
                                    รถไฟฟ้าสายสีแดง
                                </h2>
                                <h3 class="caption__text">
                                    ยกระดับคุณภาพชีวิตชานเมือง
                                </h3>
                            </figcaption>
                        </a>
                    </div>
                    
                </div>
            </div>
        </article>

        <article class="home--route">
            <div class="container">
                <ul class="nav nav-tabs nav-tabs--primary" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="route-tab" data-bs-toggle="tab" data-bs-target="#route" type="button" role="tab" aria-controls="route" aria-selected="true">เส้นทางการเดินรถ<br>และอัตราค่าโดยสาร</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="time-tab" data-bs-toggle="tab" data-bs-target="#time" type="button" role="tab" aria-controls="time" aria-selected="false">เวลาและความถี่<br>การเดินรถ</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="route" role="tabpanel" aria-labelledby="route-tab">
                        <div class="map--wrapper">
                            <div class="title--page">
                                <h2 class="page__title">เส้นทางรถไฟฟ้าชานเมืองสายสีแดง</h2>
                            </div>
                            <!-- <div class="map--figure">
                                <a href="javascript:void(0)" class="map__link">
                                    <img class="w-100" src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                </a>
                            </div> -->
                            <div id="mapRoute" class="d-none d-lg-block map--figure">
                                <div class="map--svg">
                                    <div class="map--svg--img">
                                        <div class="map--base">
                                            <img src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง" width="1232" height="472">
                                        </div>
                                        <div class="station--base">
                                            <svg version="1.1" id="stationsSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="1232" height="472" viewBox="0 0 1232 472" enable-background="new 0 0 1232 472" xml:space="preserve">
                                                <title>สถานี</title>
                                                <g id="redLine" class="stations">
                                                    <g>
                                                        <g id="station1" class="station__position" link="link">
                                                            <rect x="60" y="185" opacity="1" fill="#000" width="50" height="50"></rect>
                                                        </g>

                                                        <g id="station2" class="station__position" link="link">
                                                            <rect x="180" y="140" opacity="1" fill="#000" width="50" height="50"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block d-lg-none map--figure">
                                <div class="map--base-mobile">
                                    <a href="{{ asset('assets/images/map/img-demo-01.jpg')}}" title="รถไฟฟ้าสายสีแดง" data-title="false" class="spotlight">
                                        <img src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง" class="w-100">
                                    </a>
                                </div>

                                <div class="form-filter">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="search__controls">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>-- สถานี --</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>    
                                        </div>
                                        <div class="col-md-2 col-sm-6 col-12">
                                            <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="station--wrapper">
                            <div class="row align-items-stretch">
                                <div class="col-lg-8">
                                    <div class="station--content">
                                        <div class="station--figure">
                                            <img class="w-100" src="{{ asset('assets/images/station/bangsur.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </div>
                                        <div class="station--data">
                                            <h3 class="data__title">
                                                สถานีกลางบางซื่อ
                                            </h3>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="data__subtitle">สิ่งอำนวยความสะดวก</h3>
                                                    <div class="facilities--list">
                                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                                                            <div class="col">
                                                                <a href="javascript:void(0)" class="facilities__item" data-bs-toggle="modal" data-bs-target="#facilitiesModal">
                                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                                    <p>
                                                                        บันไดเลื่อน
                                                                    </p>
                                                                </a>
                                                            </div>

                                                            <div class="col">
                                                                <a href="javascript:void(0)" class="facilities__item">
                                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                                    <p>
                                                                        บันไดเลื่อน
                                                                    </p>
                                                                </a>
                                                            </div>

                                                            <div class="col">
                                                                <a href="javascript:void(0)" class="facilities__item">
                                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                                    <p>
                                                                        บันไดเลื่อน
                                                                    </p>
                                                                </a>
                                                            </div>

                                                            <div class="col">
                                                                <a href="javascript:void(0)" class="facilities__item">
                                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                                    <p>
                                                                        บันไดเลื่อน
                                                                    </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="text--editor">
                                                        <div class="ck-content">
                                                            <h3>รายละเอียดทางเข้า - ออก</h3>
                                                            <ul>
                                                                <li>ประตู 1 : สถานีขนส่ง บขส. , MRT บางซื่อ</li>
                                                                <li>ประตู 2 : SCG สำนักงานใหญ่</li>
                                                                <li>ประตู 3 : BTS จตุจักร , ตลาดนัดจตุจักร</li>
                                                                <li>ประตู 1 : สถานีขนส่ง บขส. , MRT บางซื่อ</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <a href="/bangsur-station" title="รายละเอียดเพิ่มเติม" class="btn btn--primary">
                                                        <span>รายละเอียดเพิ่มเติม</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="fare--wrapper">
                                        <h3 class="h2">
                                            ค่าโดยสาร
                                        </h3>

                                        <div class="fare--rate">
                                            <div class="train--line">
                                                <h3>สายบางซื่อ - ตลิ่งชัน /ราคา : </h3>
                                                <div class="fare__item">
                                                    <span class="name">บางช่อน</span>
                                                    <span class="price">18 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">บางบำหรุ</span>
                                                    <span class="price">29 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">ตลิ่งชัน</span>
                                                    <span class="price">35 บาท</span>
                                                </div>
                                            </div>

                                            <div class="train--line">
                                                <h3>สายบางซื่อ - รังสิต /ราคา : </h3>
                                                <div class="fare__item">
                                                    <span class="name">จตุจักร</span>
                                                    <span class="price">16 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">วัดเสมียนนารี</span>
                                                    <span class="price">19 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">บางเขน</span>
                                                    <span class="price">20 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">ทุ่งสองห้อง</span>
                                                    <span class="price">23 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">จตุจักร</span>
                                                    <span class="price">16 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">วัดเสมียนนารี</span>
                                                    <span class="price">19 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">บางเขน</span>
                                                    <span class="price">20 บาท</span>
                                                </div>

                                                <div class="fare__item">
                                                    <span class="name">ทุ่งสองห้อง</span>
                                                    <span class="price">23 บาท</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="time" role="tabpanel" aria-labelledby="time-tab">
                        <div class="map--wrapper">
                            <div class="title--page">
                                <h2 class="page__title">คู่มือรถไฟฟ้าชานเมืองสายสีแดง</h2>
                            </div>
                            <div class="map--figure">
                                <img class="w-100" src="{{ asset('assets/images/map/img-demo-02.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="home--events">
            <div class="container">
                <div class="title--page justify-content-between">
                    <h2 class="page__title">ปฏิทินกิจกรรม</h2>

                    <a href="#nogo" title="เพิ่มเติม" class="page__readmore">
                        <span class="link__text">
                            เพิ่มเติม
                        </span>
                        <span class="link__icon">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                </div>

                <div class="content--wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <figure class="events--figure">
                                <img class="img-fluid" src="{{ asset('assets/images/events/demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </figure>
                        </div>

                        <div class="col-lg-8">
                            <a href="#" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="events__date">
                                            <div class="start__date">
                                                <h2 class="h2">
                                                    30
                                                </h2>
                                                <h3 class="h3">
                                                    เม.ย. 65
                                                </h3>
                                            </div>
                                            <div class="between__date">
                                                -
                                            </div>
                                            <div class="end__date">
                                                <h2 class="h2">
                                                    1
                                                </h2>
                                                <h3 class="h3">
                                                    พ.ค. 65
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="events__content">
                                            <h3 class="h3">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง 
                                            </h3>
                                            <p class="h4">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </a>

                            <a href="#" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="events__date">
                                            <div class="start__date">
                                                <h2 class="h2">
                                                    11 - 12
                                                </h2>
                                                <h3 class="h3">
                                                    เม.ย. 65
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="events__content">
                                            <h3 class="h3">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง 
                                            </h3>
                                            <p class="h4">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="events__date">
                                            <div class="start__date">
                                                <h2 class="h2">
                                                    30
                                                </h2>
                                                <h3 class="h3">
                                                    ธ.ค. 65
                                                </h3>
                                            </div>
                                            <div class="between__date">
                                                -
                                            </div>
                                            <div class="end__date">
                                                <h2 class="h2">
                                                    1
                                                </h2>
                                                <h3 class="h3">
                                                    ม.ค. 66
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="events__content">
                                            <h3 class="h3">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง 
                                            </h3>
                                            <p class="h4">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </a>

                            <a href="#" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="events__date">
                                            <div class="start__date">
                                                <h2 class="h2">
                                                    11 - 12
                                                </h2>
                                                <h3 class="h3">
                                                    เม.ย. 65
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="events__content">
                                            <h3 class="h3">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง 
                                            </h3>
                                            <p class="h4">
                                                บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด หรือผู้ให้บริการรถไฟฟ้าชานเมืองสายสีแดง สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="home--news">
            <div class="container">
                <div class="title--page justify-content-center">
                    <a href="/news" title="เพิ่มเติม" class="page__readmore">
                        <span class="link__text">เพิ่มเติม</span>
                        <span class="link__icon">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="nav nav-tabs nav-tabs--secondary" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab_1" data-bs-toggle="tab" data-bs-target="#nav-tab_1" type="button" role="tab" aria-controls="nav-tab_1" aria-selected="true">กิจกรรมการตลาด</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab_2" data-bs-toggle="tab" data-bs-target="#nav-tab_2" type="button" role="tab" aria-controls="nav-tab_2" aria-selected="false">ข่าวประชาสัมพันธ์</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab_3" data-bs-toggle="tab" data-bs-target="#nav-tab_3" type="button" role="tab" aria-controls="nav-tab_3" aria-selected="false">ข้อปฏิบัติการใช้งาน</button>
                        </li>
                    </ul>
                </div>
                
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-tab_1" role="tabpanel" aria-labelledby="tab_1">
                        <div class="news--slider">
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-01.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันจักรี
                                        </div>
                                        <p class="card__desc">
                                            เป็นวันระลึกถึงมหาจักรีบรมราชวงศ์ ที่พระพุทธยอดฟ้าจุฬาโลกมหาราช (รัชกาลที่ ๑) เสด็จขึ้นครองราชย์เป็นกษัตริย์พระองค์แรกแห่งราชวงศ์จักรี
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-02.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันประสูติ ทูลกระหม่อมหญิง อุบลรัตน์ราชกัญญา สิริวัฒนาพรรณวดี
                                        </div>
                                        <p class="card__desc">
                                            ขอพระองค์ทรงพระเจริญ ควรมิควรแล้วแต่จะโปรดเกล้าโปรดกระหม่อม
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-03.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันพระราชสมภพ สมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จ ...
                                        </div>
                                        <p class="card__desc">
                                            ด้วยเกล้าด้วยกระหม่อม ข้าพระพุทธเจ้า คณะผู้บริหาร และพนักงาน บริษัท
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-02.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันประสูติ ทูลกระหม่อมหญิง อุบลรัตน์ราชกัญญา สิริวัฒนาพรรณวดี
                                        </div>
                                        <p class="card__desc">
                                            ขอพระองค์ทรงพระเจริญ ควรมิควรแล้วแต่จะโปรดเกล้าโปรดกระหม่อม
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-03.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันพระราชสมภพ สมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จ ...
                                        </div>
                                        <p class="card__desc">
                                            ด้วยเกล้าด้วยกระหม่อม ข้าพระพุทธเจ้า คณะผู้บริหาร และพนักงาน บริษัท
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-tab_2" role="tabpanel" aria-labelledby="tab_2">
                        <div class="card-deck news--slider">
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-01.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันจักรี
                                        </div>
                                        <p class="card__desc">
                                            เป็นวันระลึกถึงมหาจักรีบรมราชวงศ์ ที่พระพุทธยอดฟ้าจุฬาโลกมหาราช (รัชกาลที่ ๑) เสด็จขึ้นครองราชย์เป็นกษัตริย์พระองค์แรกแห่งราชวงศ์จักรี
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-02.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันประสูติ ทูลกระหม่อมหญิง อุบลรัตน์ราชกัญญา สิริวัฒนาพรรณวดี
                                        </div>
                                        <p class="card__desc">
                                            ขอพระองค์ทรงพระเจริญ ควรมิควรแล้วแต่จะโปรดเกล้าโปรดกระหม่อม
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-03.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันพระราชสมภพ สมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จ ...
                                        </div>
                                        <p class="card__desc">
                                            ด้วยเกล้าด้วยกระหม่อม ข้าพระพุทธเจ้า คณะผู้บริหาร และพนักงาน บริษัท
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-02.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันประสูติ ทูลกระหม่อมหญิง อุบลรัตน์ราชกัญญา สิริวัฒนาพรรณวดี
                                        </div>
                                        <p class="card__desc">
                                            ขอพระองค์ทรงพระเจริญ ควรมิควรแล้วแต่จะโปรดเกล้าโปรดกระหม่อม
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-03.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันพระราชสมภพ สมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จ ...
                                        </div>
                                        <p class="card__desc">
                                            ด้วยเกล้าด้วยกระหม่อม ข้าพระพุทธเจ้า คณะผู้บริหาร และพนักงาน บริษัท
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-tab_3" role="tabpanel" aria-labelledby="tab_3">
                        <div class="card-deck news--slider">
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-01.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันจักรี
                                        </div>
                                        <p class="card__desc">
                                            เป็นวันระลึกถึงมหาจักรีบรมราชวงศ์ ที่พระพุทธยอดฟ้าจุฬาโลกมหาราช (รัชกาลที่ ๑) เสด็จขึ้นครองราชย์เป็นกษัตริย์พระองค์แรกแห่งราชวงศ์จักรี
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-02.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันประสูติ ทูลกระหม่อมหญิง อุบลรัตน์ราชกัญญา สิริวัฒนาพรรณวดี
                                        </div>
                                        <p class="card__desc">
                                            ขอพระองค์ทรงพระเจริญ ควรมิควรแล้วแต่จะโปรดเกล้าโปรดกระหม่อม
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-03.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันพระราชสมภพ สมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จ ...
                                        </div>
                                        <p class="card__desc">
                                            ด้วยเกล้าด้วยกระหม่อม ข้าพระพุทธเจ้า คณะผู้บริหาร และพนักงาน บริษัท
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-02.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันประสูติ ทูลกระหม่อมหญิง อุบลรัตน์ราชกัญญา สิริวัฒนาพรรณวดี
                                        </div>
                                        <p class="card__desc">
                                            ขอพระองค์ทรงพระเจริญ ควรมิควรแล้วแต่จะโปรดเกล้าโปรดกระหม่อม
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="card--news-slide">
                                    <div class="card__figure">
                                        <img src="{{ asset('assets/images/news/img-demo-03.png')}}" alt="ข่าว">
                                    </div>
                                    <div class="card__body">
                                        <div class="card__date">5 เมษายน 2565</div>
                                        <div class="card__title">
                                            วันคล้ายวันพระราชสมภพ สมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จ ...
                                        </div>
                                        <p class="card__desc">
                                            ด้วยเกล้าด้วยกระหม่อม ข้าพระพุทธเจ้า คณะผู้บริหาร และพนักงาน บริษัท
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="home--service">
            <div class="container">
                <div class="title--page justify-content-between">
                    <h2 class="page__title">ความปลอดภัยและการบริการ</h2>

                    <a href="#nogo" title="เพิ่มเติม" class="page__readmore">
                        <span class="link__text">
                            เพิ่มเติม
                        </span>
                        <span class="link__icon">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                </div>

                <div class="service--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/slider/service/question-and-answer.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <p class="slider__text">คำถามที่พบบ่อย</p>
                        </div>
                    </a>
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/slider/service/guide-book.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <p class="slider__text">ข้อปฏิบัติขณะใช้รถไฟฟ้า</p>
                        </div>
                    </a>
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/slider/service/questions.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <p class="slider__text">ขั้นตอนการใช้งาน RTV</p>
                        </div>
                    </a>
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/slider/service/alert.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <p class="slider__text">กรณีฉุกเฉิน</p>
                        </div>
                    </a>
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/slider/service/questions.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <p class="slider__text">ขั้นตอนการใช้งาน RTV</p>
                        </div>
                    </a>
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/slider/service/guide-book.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <p class="slider__text">ข้อปฏิบัติขณะใช้รถไฟฟ้า</p>
                        </div>
                    </a>
                </div>
            </div>
        </article>
    </main>

    <!-- รายละเอียดสถานี (สิ่งอำนวยความสะดวก) -->
    <div class="modal fade modal--custom modal--md" id="facilitiesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">ไตเติ้ล</h5>
                    <button type="button" class="modal--close" data-bs-dismiss="modal" aria-label="Close">
                        <div class="btn--close">
                            <span>ปิด <i class="icon-close"></i></span>
                        </div>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal--content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="modal__figure">
                                    <img class="img-fluid" src="{{ asset('assets/images/station/img-demo-01.webp')}}" alt="รถไฟฟ้าสายสีแดง">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="modal__text">  
                                    <h3>
                                    จุดเชื่อมต่อ
                                    </h3>
                                    
                                    <ul class="modal--list">
                                        <li class="list__item">
                                            ประตู 1 : สถานีขนส่ง บขส. , MRT บางซื่อ
                                        </li>
                                        <li class="list__item">
                                            ประตู 2 : SCG สำนักงานใหญ่
                                        </li>
                                        <li class="list__item">
                                            ประตู 3 : BTS จตุจักร , ตลาดนัดจตุจักร
                                        </li>
                                        <li class="list__item">
                                            ประตู 1 : สถานีขนส่ง บขส. , MRT บางซื่อ
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {

            var mapLink = document.querySelector('.station__position');
            var stationWrapper = document.querySelector('.station--wrapper');

            mapLink.addEventListener('click', function() {
            
                stationWrapper.classList.toggle('show');

            });

        })();
    </script>

    <script>
        var slideWrapper = $(".main--slider"),
            iframes = slideWrapper.find('.embed-player'),
            lazyImages = slideWrapper.find('.slide-image'),
            lazyCounter = 0;

            // POST commands to YouTube or Vimeo API
            function postMessageToPlayer(player, command){
            if (player == null || command == null) return;
            player.contentWindow.postMessage(JSON.stringify(command), "*");
            }

            // When the slide is changing
            function playPauseVideo(slick, control){
            var currentSlide, slideType, startTime, player, video;

            currentSlide = slick.find(".slick-current");
            slideType = currentSlide.attr("class").split(" ")[1];
            player = currentSlide.find("iframe").get(0);
            startTime = currentSlide.data("video-start");

        if (slideType === "vimeo") {
            switch (control) {
            case "play":
                if ((startTime != null && startTime > 0 ) && !currentSlide.hasClass('started')) {
                currentSlide.addClass('started');
                postMessageToPlayer(player, {
                    "method": "setCurrentTime",
                    "value" : startTime
                });
                }
                postMessageToPlayer(player, {
                "method": "play",
                "value" : 1
                });
                break;
            case "pause":
                postMessageToPlayer(player, {
                "method": "pause",
                "value": 1
                });
                break;
            }
            } else if (slideType === "youtube") {
                switch (control) {
                case "play":
                    postMessageToPlayer(player, {
                    "event": "command",
                    "func": "mute"
                    });
                    postMessageToPlayer(player, {
                    "event": "command",
                    "func": "playVideo"
                    });
                    break;
                case "pause":
                    postMessageToPlayer(player, {
                    "event": "command",
                    "func": "pauseVideo"
                    });
                    break;
                }
            } else if (slideType === "video") {
                video = currentSlide.children("video").get(0);
                if (video != null) {
                if (control === "play"){
                    video.play();
                } else {
                    video.pause();
                }
                }
            }
        }

            // Resize player
            function resizePlayer(iframes, ratio) {
                if (!iframes[0]) return;
                var win = $(".main--slider"),
                    width = win.width(),
                    playerWidth,
                    height = win.height(),
                    playerHeight,
                    ratio = ratio || 16/9;

                iframes.each(function(){
                    var current = $(this);
                    if (width / ratio < height) {
                    playerWidth = Math.ceil(height * ratio);
                    current.width(playerWidth).height(height).css({
                        left: (width - playerWidth) / 2,
                        top: 0
                        });
                    } else {
                    playerHeight = Math.ceil(width / ratio);
                    current.width(width).height(playerHeight).css({
                        left: 0,
                        top: (height - playerHeight) / 2
                    });
                    }
                });
            }

            // DOM Ready
            $(function() {
            // Initialize
            slideWrapper.on("init", function(slick){
                slick = $(slick.currentTarget);
                setTimeout(function(){
                playPauseVideo(slick,"play");
                }, 1000);
                resizePlayer(iframes, 16/9);
            });
            slideWrapper.on("beforeChange", function(event, slick) {
                slick = $(slick.$slider);
                playPauseVideo(slick,"pause");
            });
            slideWrapper.on("afterChange", function(event, slick) {
                slick = $(slick.$slider);
                playPauseVideo(slick,"play");
            });
            slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
                lazyCounter++;
                if (lazyCounter === lazyImages.length){
                lazyImages.addClass('show');
                // slideWrapper.slick("slickPlay");
                }
            });

            //start the slider
            slideWrapper.slick({
                // fade:true,
                autoplaySpeed:4000,
                lazyLoad:"progressive",
                speed:600,
                arrows:false,
                dots:true,
                cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
            });
        });

        // Resize event
        $(window).on("resize.slickVideoPlayer", function(){  
            resizePlayer(iframes, 16/9);
        });
    </script>

@endsection

@push('script-slick')
    <!-- Slick CSS  -->
    <link rel="stylesheet" href="{{ mix('/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/slick/slick-theme.css') }}"/>
    <!-- Slick JS  -->
    <script type="text/javascript" src="{{ mix('/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/slick.js') }}"></script>
@endpush