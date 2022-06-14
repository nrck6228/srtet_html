@extends('masterpage')

@section('title', 'แบบสำรวจ Online')
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

            <div class="form-group-wrapper d-print-block">
                <form action="">
                    <h3 class="h3 text-red mb-3">ข้อมูลทั่วไป</h3>
                    <div class="form-group form--float form--dynamic">
                        <input class="form-control" type="text" placeholder="" value="Santanon">
                        <label>ชื่อ<span class="req">*</span></label>
                    </div>
                    <div class="form-group form--float form--dynamic">
                        <input class="form-control" type="text" placeholder="" value="">
                        <label>นามสกุล</label>
                    </div>
                    <div class="form-group form--float form--dynamic">
                        <input class="form-control" type="text" placeholder="" value="">
                        <label>อายุ</label>
                    </div>
                    <div class="form-group form--float form--dynamic">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="true" value="title">เพศ</option>
                            <option value="male" >ชาย</option>
                            <option value="female">หญิง</option>
                        </select>
                        <label class="did-floating-label">เพศ<span class="req">*</span></label>
                    </div>
                    <div class="form-group form--float form--dynamic">
                        <input class="form-control" type="text" placeholder="" value="">
                        <label>อีเมล</label>
                    </div>
                    <div class="form-group form--float form--dynamic">
                        <input class="form-control" type="text" placeholder="" value="">
                        <label>เบอร์โทร</label>
                    </div>

                    <h3 class="h3 text-red mb-3">การใช้บริการ รถไฟฟ้าแอร์พอร์ต เรล ลิงก์</h3>
                    <div class="form-group--section">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="h3 text-darkgray mb-3">การใช้บริการ รถไฟฟ้าแอร์พอร์ต เรล ลิงก์ ต่อสัปดาห์<span class="text-red">*</span> :</h3>
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
                    
                    <div class="form-group--section">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="h3 text-darkgray mb-3">ช่วงเวลาในการใช้บริการรถไฟฟ้าแอร์พอร์ต เรล ลิงก์</h3>
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
                    <div class="form-group--section">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="h3 text-darkgray mb-3">วัตถุประสงค์หลักในการใช้บริการรถไฟฟ้าแอร์พอร์ต เรล ลิงก์</h3>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group form--float">
                                    <textarea class="form-control"></textarea>
                                    <label>ระบุ</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="verify--wrapper">
                        <div class="title--verify">กรุณายืนยันตัวตน</div>
                        <div class="captcha--verify">
                            <div class="capcha g-recaptcha">
                                <div class="text" style="width: 266px;">
                                    <div class="">
                                        <div class="">
                                            <div class="">asdasdasdasdasd</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group">
                            <a href="/vote" class="btn btn--gray"><span>ย้อนกลับ</span></a>
                            <div class="btn btn--primary" id="modalalert"><span>ส่งคำตอบ</span></div>
                        </div>
                    </div>
                </form>


            </div>
        </div>

        <div class="container">
            @include('include._social')
        </div>
    </div>
</main>
@endsection



@push('script-slick')
    <!-- Slick CSS  -->
    <link rel="stylesheet" href="{{ mix('/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/slick/slick-theme.css') }}"/>
    <!-- Slick JS  -->
    <script type="text/javascript" src="{{ mix('/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/slick.js') }}"></script>

    <script type="text/javascript">
    var sizedynamic = $('.form--dynamic').length;
    console.log(sizedynamic);
    </script>
@endpush

@push('script-sweetalert')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script type="text/javascript">
        $('#modalalert').click(function(){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                confirmButtonText: '<span>ส่งข้อมูล</span>',
                // cancelButtonText: '<span>ยกเลิก</span>',
            })
        });
        
    </script>
@endpush

