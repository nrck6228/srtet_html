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

                <div class="stepper-wrapper">
                    <div class="stepper-item completed">
                        <div class="step-counter"></div>
                        <div class="step-name dark-gray">
                            Step 1 :<br/>
                            ข้อมูลส่วนตัว
                        </div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter"></div>
                        <div class="step-name dark-gray">
                            Step 2 :<br/>
                            ประวัติการศึกษาและทำงาน
                        </div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter"></div>
                        <div class="step-name">
                            Step 3 :<br/>
                            สมัครสำเร็จ
                        </div>
                    </div>
                </div>

                <div class="thankyou">
                    <div class="content">
                        <h2 class="page__title text-center mb-4">ขอบคุณสำหรับการเข้าร่วมเพื่อเป็นส่วนหนึ่งกับเรา</h2>

                        <div class="text">
                            ทางเราได้ส่งอีเมลยืนยันในการสมัครงานเรียบร้อยแล้ว<br />
                            ท่านสามารถแก้ไขข้อมูลการสมัครของท่านได้
                        </div>


                        <div class="text-center btn-group">
                            <a href="/" class="btn btn--gray">
                                <span>หน้าแรก</span>
                            </a>
                            <a href="/" class="btn btn--primary">
                                <span>พิมพ์ใบสมัคร</span>
                            </a>
                        </div>
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