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

                <div class="thankyou">
                    <div class="content">
                        <h2 class="page__title text--primary text-center mb-4">การกรอกใบสมัครงานสำเร็จ</h2>

                        <div class="text">
                            ขอบคุณสำหรับการเข้าร่วมเพื่อเป็นส่วนหนึ่งกับเรา<br/>
                            ทางเราได้ส่งอีเมลยืนยันในการสมัครงาน<br/>
                            ท่านสามารถเข้าตรวจสอบหรือแก้ไขข้อมูลการสมัครงานของท่านได้
                        </div>


                        <a href="/" class="btn btn--primary">
                            <span>กลับสู่หน้าหลัก</span>
                        </a>
                    </div>
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