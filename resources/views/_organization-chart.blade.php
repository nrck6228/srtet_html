@extends('masterpage')

@section('title', 'ผังโครงสร้างองค์กร')
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
                        <li class="breadcrumb-item"><a href="#">เกี่ยวกับเรา</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ผังโครงสร้างองค์กร</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">ผังโครงสร้างองค์กร</h2>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="group__icon">
                            <a href="{{ asset('assets/images/about/img-organization-chart.png')}}" title="ขยาย" data-title="false" class="spotlight">
                                <span class="icon">
                                    <i class="icon-zoom-in"></i>
                                </span>
                                <span class="text">
                                    ขยาย
                                </span>
                            </a>
                            <a href="javascript:void(0)" title="ดาวน์โหลด">
                                <span class="icon">
                                    <i class="icon-file-pdf"></i>
                                </span>
                                <span class="text">
                                    ดาวน์โหลด
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="content__figure">
                            <img class="w-100" src="{{ asset('assets/images/about/img-organization-chart.png')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
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
@endpush

@push('script-spotlight')
    <!-- spotlight CSS  -->
    <link rel="stylesheet" href="{{ mix('/spotlight/spotlight.min.css') }}"/>
    <!-- spotlight JS  -->
    <script type="text/javascript" src="{{ mix('/spotlight/spotlight.min.js') }}"></script>
@endpush
