@extends('masterpage')

@section('title', 'ข้อมูลสถานีรถไฟฟ้า')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('og_url', '') 
@section('og_title', '')
@section('og_description', '')
@section('og_image', '')

@section('contentpage')
    <main class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-route.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item active" aria-current="page">ข้อมูลสถานีรถไฟฟ้า</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="station--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">ข้อมูลสถานีรถไฟฟ้า</h2>
                </div>

                <div class="form-group-wrapper">
                    <form action="">
                        <div class="form-group--section">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">เลือกสถานี</option>
                                            <option value="" >สถานี</option>
                                            <option value="">สถานี</option> 
                                        </select>
                                        <label class="did-floating-label">เลือกสถานี</label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="body--content">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col mb-4">
                            <div class="content__gallery">
                                <div class="gallery__for">
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="gallery__nav">
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="station--content">
                                <div class="station--data">
                                    <h3 class="h2">
                                        สถานีกลางบางซื่อ
                                    </h3>

                                    <div class="location--data">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="data__label">
                                                ที่ตั้ง
                                                </p>
                                            </div>
                                            <div class="col-md-9">
                                                <address class="data__text">
                                                    336 ซอยกำแพงเพชร 2 ถนนเทอดดำริ แขวงจตุจักร เขตจตุจักร กรุงเทพมหานคร
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="data__label">
                                                    จำนวนชานชาลา
                                                </p>
                                            </div>
                                            <div class="col-md-9">
                                                <p class="data__text">
                                                    24 ชานชาลา
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="data__label">
                                                    ที่จอดรถ 
                                                </p>
                                            </div>
                                            <div class="col-md-9">
                                                <p class="data__text">
                                                    1,624 คัน
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="data__label">
                                                    เปิดให้บริการ
                                                </p>
                                            </div>
                                            <div class="col-md-9">
                                                <p class="data__text">
                                                    2 สิงหาคม พ.ศ. 2564
                                                </p>
                                            </div>
                                        </div>
                                    </div>

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

                                    <a href="/fare-information" title="" class="btn btn--primary mb-4">
                                        <span>อัตราค่าโดยสาร</span>
                                    </a>

                                    <div class="facilities--list">
                                        <h3>สิ่งอำนวยความสะดวก</h3>

                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                                            <div class="col">
                                                <a href="javascript:void(0)" class="facilities__item" data-bs-toggle="modal" data-bs-target="#facilitiesModal">
                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/connect-circle.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                    <p class="h4">
                                                        จุดเชื่อมต่อ
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
                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/elevator.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                    <p class="h4">
                                                        ลิฟต์
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="col">
                                                <a href="javascript:void(0)" class="facilities__item">
                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/atm-machine.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                    <p class="h4">
                                                        ATM
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="col">
                                                <a href="javascript:void(0)" class="facilities__item">
                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/bus-station.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                    <p class="h4">
                                                        รถประจำทาง
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="col">
                                                <a href="javascript:void(0)" class="facilities__item">
                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/wc.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                    <p class="h4">
                                                        ห้องน้ำ
                                                    </p>
                                                </a>
                                            </div>

                                            <div class="col">
                                                <a href="javascript:void(0)" class="facilities__item">
                                                    <img class="img-fluid" src="{{ asset('assets/images/facilities/store-alt.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                                    <p class="h4">
                                                        ร้านค้า
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                @include('include._social')
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
@endsection

@push('script-slick')
    <!-- Slick CSS  -->
    <link rel="stylesheet" href="{{ mix('/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/slick/slick-theme.css') }}"/>
    <!-- Slick JS  -->
    <script type="text/javascript" src="{{ mix('/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/slick.js') }}"></script>

    <script>
         $('.gallery__for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            fade: true,
            asNavFor: '.gallery__nav'
        });
        $('.gallery__nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.gallery__for',
            dots: false,
            focusOnSelect: true
        });
    </script>
@endpush