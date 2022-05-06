@extends('masterpage')

@section('title', 'ข้อมูลสถานีรถไฟฟ้า')
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
                    </div>
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
                                        สถานีจตุจักร
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

                                    <h3 class="h3">รายละเอียดทางเข้า - ออก</h3>
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

                                    <a href="/fare-information" title="" class="btn btn--primary mb-4">
                                        <span>อัตราค่าโดยสาร</span>
                                    </a>

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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 justify-content-between">
                    <div class="col">
                        <div class="view--count">
                            จำนวนผู้เข้าชม : <span>39068</span> คน
                        </div>
                    </div>
                    <div class="col">
                        <div class="social--block">
                            <span>แชร์ :</span>
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
                </div>

            </div>
        </article>
    </main>


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