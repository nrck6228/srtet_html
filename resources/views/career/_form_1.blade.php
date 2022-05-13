@extends('masterpage')

@section('title', 'ใบสมัครงาน')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')


@section('contentpage')

    <div class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-desktop.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item"><a href="#">ร่วมงานกับ SRTET</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ใบสมัครงาน</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="career--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">ใบสมัครงาน</h2>
                </div>

                <div class="form-group mb-4">
                    <form action="">
                        <h3 class="h3 text-red mb-3">ตำแหน่งสมัครงาน</h3>
                        <div class="group-form">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image-profile">
                                    <img src="{{ asset('assets/images/career/icon-uploadimage.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend icon icon__upload">
                                            <span class="input-group-text" id="input_name">รูปภาพ<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="อัพโหลด">
                                    </div>
                                </div>
                                <div class="col-lg-9">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            
        </article>
    </div>
    
@endsection

@push('script-slick')
    <!-- Slick CSS  -->
    <link rel="stylesheet" href="{{ mix('/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/slick/slick-theme.css') }}"/>
    <!-- Slick JS  -->
    <script type="text/javascript" src="{{ mix('/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/slick.js') }}"></script>
@endpush