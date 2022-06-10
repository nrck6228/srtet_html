@extends('masterpage')

@section('title', 'หน้าแรก')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="home--hero">
            <div class="container">
                <div class="main--slider">
                    <!-- <div class="item video">
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
                    </div> -->

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
                <ul class="nav nav-tabs nav-tabs--primary" id="myTab" role="tablist" data-aos="fade-up">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="route-tab" data-bs-toggle="tab" data-bs-target="#route" type="button" role="tab" aria-controls="route" aria-selected="true">เส้นทางการเดินรถ<br>และอัตราค่าโดยสาร</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="time-tab" data-bs-toggle="tab" data-bs-target="#time" type="button" role="tab" aria-controls="time" aria-selected="false">เวลาและความถี่<br>การเดินรถ</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent" data-aos="fade-up">
                    <div class="tab-pane fade show active" id="route" role="tabpanel" aria-labelledby="route-tab">
                        <div class="map--wrapper">
                            <div class="title--page">
                                <h1 class="page__title">เส้นทางรถไฟฟ้าชานเมืองสายสีแดง</h1>
                            </div>

                            <div class="route--wrapper">
                                <div class="route--container">
                                    <div class="main--station">
                                        <div class="main--station__view">
                                            <div class="info__name">บางซื่อ</div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-01.png')}}" alt="รถไฟฟ้าสายสีน้ำเงิน">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-08.png')}}" alt="จุดจอดรถ">
                                            </div>
                                        </div>
                                        <div class="main--station__line" onclick="toggleVisibility('station_01');">
                                            <a href="#nogo" class="info__icon redLine"></a>
                                            <a href="#nogo" class="info__icon lightredLine"></a>
                                        </div>
                                    </div>
                                    <div class="line--station">

                                        <div class="line--station__view redLine">
                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">จตุจักร</div>
                                                    <a href="#nogo" class="info__icon" onclick="toggleVisibility('station_02');"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">วัดเสมียนนารี</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">บางเขน</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">ทุ่งสองห้อง</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-03.png')}}" alt="รถไฟฟ้าสายสีชมพู">
                                                    </div>
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">หลักสี่</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">การเคหะ</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-05.png')}}" alt="ท่าอากาศยานดอนเมือง">
                                                    </div>
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                                    </div>
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">ดอนเมือง</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon"></div>
                                                    <div class="info__icon"></div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">หลักหก</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="3 นาที">
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                                    </div>
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                                <div class="station--info__bottom">
                                                    <div class="info__name">รังสิต</div>
                                                    <a href="#nogo" class="info__icon"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line--station__view lightredLine">
                                            <div class="station--info" data-text="7 นาที">
                                                <div class="station--info__bottom">
                                                    <a href="#nogo" class="info__icon"></a>
                                                    <div class="info__name">บางซ่อน</div>
                                                </div>
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-02.png')}}" alt="รถไฟฟ้าสายสีม่วง">
                                                    </div>
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="7 นาที">
                                                <div class="station--info__bottom">
                                                    <a href="#nogo" class="info__icon"></a>
                                                    <div class="info__name">บางบำหรุ</div>
                                                </div>
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                                    </div>
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="station--info" data-text="7 นาที">
                                                <div class="station--info__bottom">
                                                    <a href="#nogo" class="info__icon"></a>
                                                    <div class="info__name">ตลิ่งชัน</div>
                                                </div>
                                                <div class="station--info__top">
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                                    </div>
                                                    <div class="info__icon">
                                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="route--remark">
                                            <div class="remark__left">
                                                <span>*</span>คลิก <span class="point"></span> เพื่อดูรายละเอียดสถานี
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="route--connection">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-01.png')}}" alt="รถไฟฟ้าสายสีน้ำเงิน">&nbsp;รถไฟฟ้าสายสีน้ำเงิน
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-02.png')}}" alt="รถไฟฟ้าสายสีม่วง">&nbsp;รถไฟฟ้าสายสีม่วง
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-03.png')}}" alt="รถไฟฟ้าสายสีชมพู">&nbsp;รถไฟฟ้าสายสีชมพู
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-04.png')}}" alt="รถไฟฟ้าสายสีเหลือง">&nbsp;รถไฟฟ้าสายสีเหลือง
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-05.png')}}" alt="ท่าอากาศยานดอนเมือง">&nbsp;ท่าอากาศยานดอนเมือง
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">&nbsp;รถไฟทางไกล
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">&nbsp;รถโดยสาร
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/images/map/icons-08.png')}}" alt="จุดจอดรถ">&nbsp;จุดจอดรถ
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="map--figure">
                                <a href="javascript:void(0)" class="map__link station__position">
                                    <img class="w-100" src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                </a>
                            </div> -->
                            
                            <!-- <div id="mapRoute" class="d-none d-lg-block map--figure">
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
                            </div> -->

                            <div class="d-block d-lg-none map--figure">
                                <div class="map--base-mobile">
                                    <a href="{{ asset('assets/images/map/img-demo-01.jpg')}}" title="รถไฟฟ้าสายสีแดง" data-title="false" class="spotlight">
                                        <img src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง" class="w-100">
                                    </a>
                                </div>

                                <div class="form-filter">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="search__controls">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>-- สถานี --</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>    
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn--primary w-100"><span>ค้นหา</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="station--wrapper">
                            <div id="station_01">
                                @include('stations._station-01')
                            </div>

                            <div id="station_02" style="display: none;">
                                @include('stations._station-02')
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="time" role="tabpanel" aria-labelledby="time-tab">
                        <div class="table--wrapper">
                            <div class="table-responsive table--time">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="7">เวลาออก</th>
                                        </tr>
                                        <tr>
                                            <th>ชั่วโมง</th>
                                            <th colspan="6">นาที</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                30
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                            
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                6
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                            34
                                            </td>
                                            <td>
                                                47
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                7
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                8
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                9
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                42
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                11
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                13
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                14
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                15
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                16
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                            34
                                            </td>
                                            <td>
                                                47
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                17
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                18
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                19
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                42
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                21
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                            34
                                            </td>
                                            <td>
                                                47
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                23
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                42
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="home--events">
            <div class="container">
                <div class="title--page justify-content-between" data-aos="fade-up">
                    <h2 class="page__title">ปฏิทินกิจกรรม</h2>

                    <a href="/events" title="เพิ่มเติม" class="page__readmore">
                        <span class="link__text">
                            เพิ่มเติม
                        </span>
                        <span class="link__icon">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                </div>

                <div class="content--wrapper" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-4">
                            <figure class="events--figure">
                                <img class="img-fluid" src="{{ asset('assets/images/events/demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </figure>
                        </div>

                        <div class="col-lg-8">
                            <a href="/events-detail" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
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
                                    <div class="col-md-9">
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

                            <a href="/events-detail" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
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
                                    <div class="col-md-9">
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

                            <a href="/events-detail" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
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
                                    <div class="col-md-9">
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

                            <a href="/events-detail" class="events--item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
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
                                    <div class="col-md-9">
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

                <div class="responsive--tabs">
                    <div class="title--page justify-content-end justify-content-lg-center" data-aos="fade-up">
                        <a href="/news" title="เพิ่มเติม" class="page__readmore">
                            <span class="link__text">เพิ่มเติม</span>
                            <span class="link__icon">
                                <i class="icon-angle-right"></i>
                            </span>
                        </a>

                        <ul class="nav nav-tabs nav-tabs--secondary" id="sectionNews" role="tablist" data-aos="fade-up">
                            <li class="nav-item">
                                <button class="nav-link active" id="tab-A" data-id="news" data-bs-toggle="tab" data-bs-target="#pane-A" type="button" role="tab" aria-controls="pane-A" aria-selected="true">กิจกรรมการตลาด</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="tab-B" data-id="news" data-bs-toggle="tab" data-bs-target="#pane-B" type="button" role="tab" aria-controls="pane-B" aria-selected="false">ข่าวประชาสัมพันธ์</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="tab-C" data-id="news" data-bs-toggle="tab" data-bs-target="#pane-C" type="button" role="tab" aria-controls="pane-C" aria-selected="false">ข้อปฏิบัติการใช้งาน</button>
                            </li>
                        </ul>
                    </div>
                    
                    <div id="content" class="tab-content" role="tablist" data-aos="fade-up">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                            กิจกรรมการตลาด
                            </div>
                            <div id="collapse-A" class="collapse py-4 py-lg-0 show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-A">
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
                        </div>

                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B" class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                            ข่าวประชาสัมพันธ์
                            </div>
                            <div id="collapse-B" class="collapse py-4 py-lg-0" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                                
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

                        <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                            <div class="card-header" role="tab" id="heading-C" class="collapsed" data-bs-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                            ข้อปฏิบัติการใช้งาน
                            </div>
                            <div id="collapse-C" class="collapse py-4 py-lg-0" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-C">
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
        $(document).ready(function () {
            let mapLink = $('a.info__icon');
            let stationWrapper = $('.station--wrapper');
            
            mapLink.click(function(){
                $('a.info__icon').removeClass('active');
                $(this).addClass('active');

                stationWrapper.addClass('show');
                $("html,body").animate({
                    scrollTop: $(stationWrapper).offset().top - 125
                }, 1000);
            });
        });

        var divs = ["station_01", "station_02"];
        var visibleDivId = null;
        function toggleVisibility(divId) {
            if(visibleDivId === divId) {
            //visibleDivId = null;
            } else {
                visibleDivId = divId;
            }
            hideNonVisibleDivs();
        }
        function hideNonVisibleDivs() {
            var i, divId, div;
            for(i = 0; i < divs.length; i++) {
                divId = divs[i];
                div = document.getElementById(divId);
                if(visibleDivId === divId) {
                    div.style.display = "block";
                } else {
                    div.style.display = "none";
                }
            }
        }
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

@push('script-tab')
    <script>
        // Home-->News(Tab)
        $("#tab-A, #heading-A").click(function(){
            let Tablink = $(this).data('link');
            //console.log(Tablink)
            $(".page__readmore").attr("href", Tablink)
        }); 
        $("#tab-B, #heading-B").click(function(){
            let Tablink2 = $(this).data('link');
            //console.log(Tablink2)
            $(".page__readmore").attr("href", Tablink2)
        }); 
        $("#tab-C, #heading-C").click(function(){
            let Tablink3 = $(this).data('link');
            //console.log(Tablink3)
            $(".page__readmore").attr("href", Tablink3)
        }); 

        // // Home--> News(Accordion)
        // $("#heading-A").click(function(){
        //     $(".page__readmore").attr("href", "/news")
        // }); 
        // $("#heading-B").click(function(){
        //     $(".page__readmore").attr("href", "/news")
        // }); 
        // $("#heading-C").click(function(){
        //     $(".page__readmore").attr("href", "/news")
        // }); 
    </script>
@endpush