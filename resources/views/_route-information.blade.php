@extends('masterpage')

@section('title', 'แผนที่สถานีรถไฟฟ้า')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-desktop.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <h2 class="slider__title">
                                รถไฟฟ้าสายสีแดง
                            </h2>
                            <h3 class="slider__text">
                                ยกระดับคุณภาพชีวิตชานเมือง
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
        </article>

        <div class="breadcrumb--wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="#">กำหนดเวลาเดินรถ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">แผนที่สถานีรถไฟฟ้า</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="home--route" style="background-image: none">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">แผนที่สถานีรถไฟฟ้า</h2>
                </div>

                <div class="map--wrapper">
                    <div class="map--figure">
                        <a href="javascript:void(0)" class="map__link">
                            <img class="w-100" src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </a>
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
                                    <h3 class="h2">
                                        สถานีกลางบางซื่อ
                                    </h3>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>สิ่งอำนวยความสะดวก</h3>
                                            <div class="facilities--list">
                                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                                                    <div class="col">
                                                        <a href="javascript:void(0)" class="facilities__item" data-bs-toggle="modal" data-bs-target="#facilitiesModal">
                                                            <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                            <p class="h4">
                                                                บันไดเลื่อน
                                                            </p>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <a href="javascript:void(0)" class="facilities__item">
                                                            <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                            <p class="h4">
                                                                บันไดเลื่อน
                                                            </p>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <a href="javascript:void(0)" class="facilities__item">
                                                            <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                            <p class="h4">
                                                                บันไดเลื่อน
                                                            </p>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <a href="javascript:void(0)" class="facilities__item">
                                                            <img class="img-fluid" src="{{ asset('assets/images/facilities/escalator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                            <p class="h4">
                                                                บันไดเลื่อน
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>รายละเอียดทางเข้า - ออก</h3>
                                            <ul class="exit--list">
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

                                            <a href="#" title="" class="btn btn--primary">
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
        </article>

        <!-- include html services -->
        @include('include._services')
    </main>

    <script>
        (function() {

            var mapLink = document.querySelector('.map__link');
            var stationWrapper = document.querySelector('.station--wrapper');

            mapLink.addEventListener('click', function() {
            
                stationWrapper.classList.toggle('show');

                $("html,body").animate({
                    scrollTop: $(stationWrapper).offset().top - 135
                }, 500);
            });

        })();
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
