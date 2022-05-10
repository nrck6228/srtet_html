@extends('masterpage')

@section('title', 'แบบสำรวจ Online')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')


@section('contentpage')

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
                    <li class="breadcrumb-item active" aria-current="page">แบบสำรวจ Online</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="survey--wrapper">
        <div class="container">
            <div class="title--page justify-content-center">
                <h2 class="page__title text--primary">สำรวจผู้ใช้บริการรถไฟฟ้าสายสีแดง</h2>
            </div>

            <div class="form-group mb-4">
                <form action="">
                    <h4 class="h4 text-red mb-3">ข้อมูลทั่วไป</h4>
                    <div class="group-form">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input_name">ชื่อ<span>*</span> :</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">นามสกุล<span>*</span> :</span>
                                    </div>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">อายุ :</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">เพศ :</span>
                                    </div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>เพศ</option>
                                        <option value="male">ชาย</option>
                                        <option value="female">หญิง</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">อีเมล :</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input_name">เบอร์โทร<span>*</span> :</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="h4 text-red mb-3">การใช้บริการ รถไฟฟ้าแอร์พอร์ต เรล ลิงก์</h4>
                    <div class="group-form">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="h4 text-darkgray mb-3">การใช้บริการ รถไฟฟ้าแอร์พอร์ต เรล ลิงก์ ต่อสัปดาห์<span class="text-red">*</span> :</h4>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="choice_1">
                                    <label class="form-check-label" for="choice_1">
                                        1 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="choice_2">
                                    <label class="form-check-label" for="choice_2">
                                        2-7 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="choice_3">
                                    <label class="form-check-label" for="choice_3">
                                        5 - 9 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="choice_4">
                                    <label class="form-check-label" for="choice_4">
                                        มากกว่า 10 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question_1" id="choice_5">
                                    <label class="form-check-label" for="choice_5">
                                        ไม่ค่อยบ่อย ขึ้นอยู่กับโอกาส
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group-form">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="h4 text-darkgray mb-3">ช่วงเวลาในการใช้บริการรถไฟฟ้าแอร์พอร์ต เรล ลิงก์</h4>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="question_1" id="chk_1">
                                    <label class="form-check-label" for="chk_1">
                                        1 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="question_1" id="chk_2">
                                    <label class="form-check-label" for="chk_2">
                                        2-7 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="question_1" id="chk_3">
                                    <label class="form-check-label" for="chk_3">
                                        5 - 9 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="question_1" id="chk_4">
                                    <label class="form-check-label" for="chk_4">
                                        มากกว่า 10 ครั้ง
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="question_1" id="chk_5">
                                    <label class="form-check-label" for="chk_5">
                                        ไม่ค่อยบ่อย ขึ้นอยู่กับโอกาส
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group-form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="input-group flex-column">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">วัตถุประสงค์หลักในการใช้บริการรถไฟฟ้าแอร์พอร์ต เรล ลิงก์ :</span>
                                    </div>
                                    <textarea class="form-control" placeholder="ระบุ"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="verify--wrapper">
                <div class="title--verify">กรุณายืนยันตัวตน</div>
                <div class="captcha--verify">
                    Captcha
                </div>

                <div class="btn-group">
                    <a href="/vote" class="btn btn--gray"><span>ย้อนกลับ</span></a>
                    <button class="btn btn--primary"><span>ส่งคำตอบ</span></button>
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
                            <img src="http://127.0.0.1:8000/assets/images/icon/facebook.svg" alt="facebook">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="http://127.0.0.1:8000/assets/images/icon/twitter.svg" alt="twitter">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="http://127.0.0.1:8000/assets/images/icon/instagram.svg" alt="instagram">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="http://127.0.0.1:8000/assets/images/icon/youtube.svg" alt="youtube">
                        </a>
                        <a href="javascript:void(0)" class="social__icon">
                            <img src="http://127.0.0.1:8000/assets/images/icon/tiktok.svg" alt="tiktok">
                        </a>
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
@endpush