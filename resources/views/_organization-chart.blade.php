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
                            <!-- image dimension 1320*450px -->
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-about.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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

                <div class="body--content">
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
            </div>

            <div class="container">
                @include('include._social')
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
