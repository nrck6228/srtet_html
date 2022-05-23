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

                <form action="">
                    <div class="form-group-wrapper mb-4">
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ตำแหน่งสมัครงาน</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image-profile">
                                        <img class="img-upload" src="{{ asset('assets/images/career/icon-uploadimage.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        <div class="icon-upload-image">
                                            <label for="file-upload">
                                                <img src="{{ asset('assets/images/icon/icon-camera.svg')}}"/>
                                            </label>

                                            <input id="file-upload" type="file" onChange="img_pathUrl(this);" style="display: none;"/>
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
                                            <!-- <div class="form-group form--float icon icon__upload">
                                                <input class="form-control form-file" id="file_resume" type="file">
                                                <label for="file_resume">Resume</label>
                                            </div> -->

                                            <div class="form-group">
                                                <div class="select-file icon icon__upload">
                                                    <input type="file" name="file-1[]" id="file_resume" class="form-file inputfile inputfile-1">
                                                    <label for="file_resume"><span></span></label>
                                                    <div class="title-selectfile">เรซูเม่</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">เลือกตำแหน่งที่จะสมัคร</option>
                                                    <option value="1" >ตำแหน่งที่ 1</option>
                                                    <option value="2">ตำแหน่งที่ 2</option>
                                                    <option value="3">ตำแหน่งที่ 3</option>
                                                </select>
                                                <label class="did-floating-label">เลือกตำแหน่งที่จะสมัคร</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group form--float icon icon__date">
                                                <input id="start_date" class="form-control" type="text" placeholder="" value="" readonly>
                                                <label>วันที่สมัคร</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group form--float icon icon__date">
                                                <input id="launch_date" class="form-control" type="text" placeholder="" value="" readonly>
                                                <label>เริ่มงาน</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group form--float">
                                                <input class="form-control" type="text" placeholder="" value="">
                                                <label>เงินเดือนที่คาดหวัง</label>
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
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">คำนำหน้า</option>
                                            <option value="1" >นาย</option>
                                            <option value="2">นาง</option>
                                            <option value="3">นางสาว</option>
                                        </select>
                                        <label class="did-floating-label">คำนำหน้า</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ชื่อ</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>นามสกุล</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ชื่อเล่น</label>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="title">Choose Prefix</option>
                                            <option value="1">Mr.</option>
                                            <option value="2">Mrs.</option>
                                            <option value="3">Miss.</option>
                                        </select>
                                        <label class="did-floating-label">Choose Prefix</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>Surname</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ข้อมูลส่วนตัว</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="start_date" class="form-control hbd-date" type="text" placeholder="" value="" readonly>
                                        <label>วันเกิด</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>อายุ (ปี)</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เชื้อชาติ</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>สัญชาติ</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ศาสนา</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ข้อมูลที่อยู่</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ที่อยู่ตามทะเบียนบ้าน</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ที่อยู่ปัจจุบันที่สามารถติดต่อได้</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทร</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทรบิดา</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทรมารดา</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>อีเมล</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ส่วนสูง (ซม.)</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>น้ำหนัก (กก.)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">เอกสารประจำตัว</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>บัตรประจำตัวประชาชน</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="input_idcard_start" class="form-control" type="text" placeholder="" value="" readonly>
                                        <label>วันที่ออกบัตร</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="input_idcard_exp" class="form-control" type="text" placeholder="" value="" readonly>
                                        <label>วันที่หมดอายุ</label>
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
                                        <span class="form-group form--float form-input-other">
                                            <input class="form-control" type="text" placeholder="" value="" disabled>
                                            <label>ระบุ</label>
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
                    </div>
                </form>
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

@push('script-inputfile')
<script type="text/javascript" src="{{ mix('/js/custom-file-input.js') }}"></script>
<script type="text/javascript">
    function img_pathUrl(input){
        $('.img-upload')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".form-file").change(function () {
        //readURL(this);
        if($(this).val() != ''){
            $(this).parent().addClass('has-data');
        } else {
            $(this).parent().removeClass('has-data');
        }
    });

    
</script>
@endpush