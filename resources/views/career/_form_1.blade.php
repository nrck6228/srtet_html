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
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ตำแหน่งสมัครงาน</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image-profile">
                                        <img src="{{ asset('assets/images/career/icon-uploadimage.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        <div class="icon-upload-image">
                                            <i class="bi bi-camera-fill"></i>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                    <!-- <div class="input-group input-group--remark">
                                        <div class="input-group-prepend icon icon__upload">
                                            <span class="input-group-text" id="input_name">รูปภาพ<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="อัพโหลด">
                                    </div> -->
                                    
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend icon icon__upload">
                                                    <span class="input-group-text" id="input_resume">Resume<span>*</span> :</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="อัพโหลด">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="input_launch">ตำแหน่ง<span>*</span> :</span>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="" disabled selected>เลือก</option>
                                                    <option value="1">ตำแหน่งที่ 1</option>
                                                    <option value="2">ตำแหน่งที่ 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend icon icon__date">
                                                    <span class="input-group-text" id="input_register">วันที่สมัคร<span>*</span> :</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="ระบุ" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend icon icon__date">
                                                    <span class="input-group-text" id="input_launch">เริ่มงาน<span>*</span> :</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="ระบุ" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend icon icon__upload">
                                                    <span class="input-group-text" id="input_salary">เงินเดือนที่คาดหวัง :</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="ระบุ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ชื่อผู้สมัคร</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_prefix">คำนำหน้า<span>*</span> :</span>
                                        </div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" disabled selected>เลือก</option>
                                            <option value="1">นาย</option>
                                            <option value="2">นาง</option>
                                            <option value="3">นางสาว</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_name">ชื่อ<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_surname">นามสกุล<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_nickname">ชื่อเล่น<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_prefixEN">Prefix<span>*</span> :</span>
                                        </div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" disabled selected>เลือก</option>
                                            <option value="1">Mr.</option>
                                            <option value="2">Mrs.</option>
                                            <option value="3">Miss.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_nameEN">Name<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_surnameEN">Surname<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ข้อมูลส่วนตัว</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend icon icon__date">
                                            <span class="input-group-text" id="input_hbd">วันเกิด<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_age">อายุ (ปี)<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_race">เชื้อชาติ :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_nationality">สัญชาติ :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_religion">ศาสนา :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ข้อมูลที่อยู่</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ที่อยู่ตามทะเบียนบ้าน :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ที่อยู่ปัจจุบันที่สามารถติดต่อได้ :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_phone">เบอร์โทร<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_phone2">เบอร์โทรบิดา<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_phone3">เบอร์โทรมารดา<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_mail">อีเมล :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_height">ส่วนสูง (ซม.) :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_weight">น้ำหนัก (กก.) :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">เอกสารประจำตัว</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input_idcard">บัตรประจำตัวประชาชน :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend icon icon__date">
                                            <span class="input-group-text" id="input_idcard_start">วันที่ออกบัตร :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend icon icon__date">
                                            <span class="input-group-text" id="input_idcard_exp">วันที่หมดอายุ :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ" readonly>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">การรับราชการทหาร(สำหรับผู้ชาย) :</h3>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="choice_1">
                                        <label class="form-check-label" for="choice_1">
                                            เกณฑ์แล้ว
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="question_1" id="choice_2">
                                        <label class="form-check-label" for="choice_2">
                                            ยังไม่เกณฑ์
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check form-check--other">
                                        <input class="form-check-input" type="radio" name="question_1" id="choice_3">
                                        <label class="form-check-label" for="choice_3">
                                            ได้รับการยกเว้น
                                        </label>
                                        <span class="form-input-other">
                                            <input type="text" class="form-control" placeholder="ระบุ" disabled>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="btn-group">
                                <button class="btn btn--primary"><span>ถัดไป</span></button>
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