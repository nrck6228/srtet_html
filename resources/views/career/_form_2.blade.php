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

                <div class="form-group-wrapper">
                    <form action="">
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ประวัติการศึกษา</h3>
                            <div class="row" id="education">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุด :</h3>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">วุฒิระดับการศึกษา</option>
                                            <option value="1">ปวช.</option>
                                            <option value="2">ปวส.</option>
                                            <option value="3">ป.ตรี</option>
                                            <option value="4">ป.โท</option>
                                        </select>
                                        <label class="did-floating-label">วุฒิระดับการศึกษา</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>สถาบัน</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>คณะ</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>สาขา</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ปีที่จบการศึกษา</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เกรดเฉลี่ย</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-group__remark">
                                        <div class="select-file icon icon__upload">
                                            <input type="file" name="file-1[]" id="file_transcript" class="form-file inputfile inputfile-1">
                                            <label for="file_transcript"><span></span></label>
                                            <div class="title-selectfile">เอกสารแนบ(Transcript)</div>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                </div>
                            </div>
                            <div class="btn-group btn-action" id="btn_education">
                                <button class="btn btn--primary btn-add"><span>เพิ่ม</span></button>
                                <button class="btn btn--gray btn-delete"><span>ลบ</span></button>
                            </div>
                        </div>

                        <div class="form-group--section mb-5">
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ประวัติการฝึกอบรม :</h3>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>สถาบัน</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>สาขา</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-group__remark">
                                        <div class="select-file icon icon__upload">
                                            <input type="file" name="file-1[]" id="file_traning" class="form-file inputfile inputfile-1">
                                            <label for="file_traning"><span></span></label>
                                            <div class="title-selectfile">เอกสารแนบ(การฝึกอบรม)</div>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                </div>
                            </div>

                            <h3 class="h3 text-red mb-2">ทักษะความสามารถ</h3>
                            <div class="row" id="ability">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ความสามารถทางด้านภาษาต่างประเทศ :</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">ภาษา</option>
                                                    <option value="1">ภาษาอังกฤษ</option>
                                                    <option value="2">ภาษาจีน</option>
                                                    <option value="3">ญี่ปุ่น</option>
                                                </select>
                                                <label class="did-floating-label">ภาษา</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">พูด</option>
                                                    <option value="1">ภาษาอังกฤษ</option>
                                                    <option value="2">ภาษาจีน</option>
                                                    <option value="3">ญี่ปุ่น</option>
                                                </select>
                                                <label class="did-floating-label">พูด</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">อ่าน</option>
                                                    <option value="1">ภาษาอังกฤษ</option>
                                                    <option value="2">ภาษาจีน</option>
                                                    <option value="3">ญี่ปุ่น</option>
                                                </select>
                                                <label class="did-floating-label">อ่าน</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">เขียน</option>
                                                    <option value="1">ภาษาอังกฤษ</option>
                                                    <option value="2">ภาษาจีน</option>
                                                    <option value="3">ญี่ปุ่น</option>
                                                </select>
                                                <label class="did-floating-label">เขียน</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">ภาษา</option>
                                                    <option value="1">ภาษาไทย</option>
                                                    <option value="2">ภาษาอังกฤษ</option>
                                                    <option value="3">ภาษาจีน</option>
                                                </select>
                                                <label class="did-floating-label">ภาษา</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">พูด</option>
                                                    <option value="1">ภาษาไทย</option>
                                                    <option value="2">ภาษาอังกฤษ</option>
                                                    <option value="3">ภาษาจีน</option>
                                                </select>
                                                <label class="did-floating-label">พูด</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">อ่าน</option>
                                                    <option value="1">ภาษาไทย</option>
                                                    <option value="2">ภาษาอังกฤษ</option>
                                                    <option value="3">ภาษาจีน</option>
                                                </select>
                                                <label class="did-floating-label">อ่าน</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">เขียน</option>
                                                    <option value="1">ภาษาไทย</option>
                                                    <option value="2">ภาษาอังกฤษ</option>
                                                    <option value="3">ภาษาจีน</option>
                                                </select>
                                                <label class="did-floating-label">เขียน</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group btn-action mb-5" id="btn_ability">
                                <button class="btn btn--primary btn-add"><span>เพิ่ม</span></button>
                                <button class="btn btn--gray btn-delete"><span>ลบ</span></button>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ผลการสอบวัดระดับภาษา :</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">ผลสอบ</option>
                                                    <option value="1">TOEIC</option>
                                                    <option value="2">TOEFL</option>
                                                    <option value="3">IELTS</option>
                                                    <option value="4">JLPT</option>
                                                </select>
                                                <label class="did-floating-label">ผลสอบ</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <input class="form-control" type="text" placeholder="" value="">
                                                <label>ผลคะแนน</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">ผลสอบ</option>
                                                    <option value="1">TOEIC</option>
                                                    <option value="2">TOEFL</option>
                                                    <option value="3">IELTS</option>
                                                    <option value="4">JLPT</option>
                                                </select>
                                                <label class="did-floating-label">ผลสอบ</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form--float">
                                                <input class="form-control" type="text" placeholder="" value="">
                                                <label>ผลคะแนน</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ทักษะพิมพ์ดีด :</h3>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>พิมพ์ดีดไทย(คำ/นาที)</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>พิมพ์ดีดอังกฤษ(คำ/นาที)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">โปรแกรมคอมพิมเตอร์ :</h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ระบุ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">Certificate :</h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group form-group__remark">
                                        <div class="select-file icon icon__upload">
                                            <input type="file" name="file-1[]" id="file_certificate" class="form-file inputfile inputfile-1">
                                            <label for="file_certificate"><span></span></label>
                                            <div class="title-selectfile">เอกสารแนบ(certificate)</div>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ใบอณุญาตขับขี่รถยนต์ :</h3>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="driving_license" id="choice_1">
                                        <label class="form-check-label" for="choice_1">
                                            มี
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="driving_license" id="choice_2">
                                        <label class="form-check-label" for="choice_2">
                                            ไม่มี
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ความสามารถพิเศษอื่นๆ :</h3>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group form--float">
                                        <textarea class="form-control"></textarea>
                                        <label>ระบุ</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group--section mb-3">
                            <h3 class="h3 text-red mb-2">ประวัติการทำงาน <span class="sub-title">(เริ่มจากสถานที่ทำงานสุดท้าย)</span></h3>
                            <div class="row mb-2">
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>อายุงานรวม(ปี)</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float form-group__remark">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>อายุงานในระดับบริหารรวม(ปี)</label>
                                    </div>
                                    <div class="text-remark">(สำหรับผู้จัดการแผนกขึ้นไป)</div>
                                </div>
                            </div>
                            <div class="row mb-2" id="work_history">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ข้อมูลประวัติการทำงาน</h3>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ชื่อบริษัท</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ตำแหน่ง</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="start_date" class="form-control" type="text" placeholder="" value="" readonly>
                                        <label>เริ่มงาน</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="end_date" class="form-control" type="text" placeholder="" value="" readonly>
                                        <label>สิ้นสุด</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เงินเดือน</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>บุคคลอ้างอิง</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เหตุผลลาออก</label>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group btn-action mb-5" id="btn_work_history">
                                <button class="btn btn--primary btn-add"><span>เพิ่ม</span></button>
                                <button class="btn btn--gray btn-delete"><span>ลบ</span></button>
                            </div>
                        </div>

                        <div class="form-group--section">
                            <div class="consent">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="consent" id="chk_consent">
                                            <label class="form-check-label" for="chk_consent">
                                                ข้าพเจ้าขอให้คำรับรองว่า ข้อความ รายละเอียด และเอกสารที่ข้าพเจ้าได้ให้ไว้นี้ถูกต้องและเป็นความจริงทุกประการ หากภายหลัง บริษัทฯ ตรวจสอบพบว่าข้อความในเป็นเท็จข้าพเจ้ายินยอมให้บริษัทฯ บอกเลิกจ้างข้าพเจ้าได้ทันที โดยไม่ต้องจ่ายค่าชดเชยใดๆและยินดีให้บริษัทฯ ดำเนินคดีตามกฏหมายทุกประการ อนึ่งเอกสารประกอบอื่นๆตามประกาศรับสมัครสอบข้าพเจ้านำส่งภายหลังเมื่อได้รับการประกาศเป็นผู้มีสิทธิ์สอบสัมภาษณ์พร้อมลงลายมือชื่อรับรองเอกสารต่อไป
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="text-center">
                            <div class="btn-group">
                                <button class="btn btn--primary"><span>ส่งข้อมูล</span></button>
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
        readURL(this);
        if($(this).val() != ''){
            $(this).parent().addClass('has-data');
        } else {
            $(this).parent().removeClass('has-data');
        }
    });
</script>
@endpush