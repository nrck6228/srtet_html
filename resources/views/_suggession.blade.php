@extends('masterpage')

@section('title', 'เสนอแนะ/ร้องเรียน')
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
                    <li class="breadcrumb-item"><a href="#">ติดต่อเรา</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เสนอแนะ/ร้องเรียน</li>
                </ol>
            </nav>
        </div>
    </div>

    <article class="suggession--wrapper">
        <div class="container">
            <div class="title--page justify-content-center">
                <h2 class="page__title text--primary mb-4">เสนอแนะ/ร้องเรียน</h2>
            </div>

            <div class="form-group-wrapper">
                <form action="">
                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ข้อมูลผู้เสนอแนะ/ร้องเรียน</h3>
                        <div class="row">
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
                                    <label>เลขที่บัตรประชาชน</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group form--float icon icon__date">
                                    <input id="start_date" class="form-control hbd-date" type="text" placeholder="" value="" readonly>
                                    <label>วันเกิด</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group form--float icon icon__date">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>เบอร์โทร</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group form--float icon icon__date">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>อีเมล</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form--float">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>ที่อยู่</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group form--float">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="true" value="title">จังหวัด</option>
                                        <option value="1" >กรุงเทพมหานคร</option>
                                        <option value="2">กระบี่</option>
                                        <option value="3">กาญจนบุรี</option>
                                    </select>
                                    <label class="did-floating-label">จังหวัด</label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group form--float">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>รหัสไปรษณีย์</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ข้อมูลการเสนอแนะ/ร้องเรียน</h3>
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">ประเภท</option>
                                                <option value="1" >ประเภท 1</option>
                                                <option value="2">ประเภท 2</option>
                                                <option value="3">ประเภท 3</option>
                                            </select>
                                            <label class="did-floating-label">ประเภท</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-1[]" id="file_upload" class="form-file inputfile inputfile-1">
                                                <label for="file_upload"><span></span></label>
                                                <div class="title-selectfile">เอกสารแนบ</div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form--float">
                                    <textarea class="form-control"></textarea>
                                    <label>รายละเอียดการเสนอแนะ/ร้องเรียน</label>
                                </div>
                            </div>
                        </div>

                        <div class="consent consent--contact">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="consent" id="chk_consent">
                                        <label class="form-check-label" for="chk_consent">
                                            การให้ความยินยอมเกี่ยวกับข้อมูลส่วนบุคคล <a href="">รายละเอียด</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="verify--wrapper">
                        <div class="title--verify">กรุณายืนยันตัวตน</div>
                        <div class="captcha--verify">
                            Captcha
                        </div>

                        <div class="btn-group">
                            <button class="btn btn--primary"><span>ส่งข้อมูล</span></button>
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

@push('script-inputfile')
<script type="text/javascript" src="{{ mix('/js/custom-file-input.js') }}"></script>
<script type="text/javascript">
    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();

    //         reader.onload = function (e) {
    //             $('#blah').attr('src', e.target.result);
    //         }

    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }

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