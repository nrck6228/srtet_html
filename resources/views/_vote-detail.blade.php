@extends('masterpage')

@section('title', 'Vote/Poll')
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
                        <li class="breadcrumb-item"><a href="#">บริการลูกค้า</a></li>
                        <li class="breadcrumb-item"><a href="#">Vote/Poll</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="vote--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">ท่านพึงพอใจเว็บไซต์นี้หรือไม่</h2>
                </div>

                
                <div class="block-vote">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="block-vote-choice">
                                <div class="title__ans">คำตอบ</div>
                                <div class="choice__ans--wrapper">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="choice_1">
                                        <label class="form-check-label" for="choice_1">
                                            ดีมาก
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="choice_2">
                                        <label class="form-check-label" for="choice_2">
                                            ดี
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="choice_3">
                                        <label class="form-check-label" for="choice_3">
                                            พอใช้
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    

                    <div class="block-vote-total">

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
