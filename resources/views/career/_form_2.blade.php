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
                        <div class="step-name">
                            Step 2 :<br/>
                            ประวัติการศึกษาและทำงาน
                        </div>
                    </div>
                    <div class="stepper-item active">
                        <div class="step-counter"></div>
                        <div class="step-name">
                            Step 3 :<br/>
                            สมัครสำเร็จ
                        </div>
                    </div>
                </div>

                <div class="form-group-wrapper mb-5">
                    <form action="/career/form3">
                        <div class="form-group--section mb-5" id="form-group_education">
                            <h3 class="h3 text-red mb-3">ประวัติการศึกษา</h3>
                            <div class="manage-form-education">
                                <div class="row mb-4 education-form show" id="education_1">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุดลำดับ 1</h3>
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
                                            <label class="did-floating-label">วุฒิระดับการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ปีที่จบการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เกรดเฉลี่ย<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาขาวิชา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-1[]" id="file_transcript_1" class="form-file inputfile inputfile-1">
                                                <label for="file_transcript_1"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 education-form" id="education_2" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุดลำดับ 2</h3>
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
                                            <label class="did-floating-label">วุฒิระดับการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ปีที่จบการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เกรดเฉลี่ย<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาขาวิชา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-2[]" id="file_transcript_2" class="form-file inputfile inputfile-1">
                                                <label for="file_transcript_2"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 education-form" id="education_3" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุดลำดับ 3</h3>
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
                                            <label class="did-floating-label">วุฒิระดับการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ปีที่จบการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เกรดเฉลี่ย<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาขาวิชา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-3[]" id="file_transcript_3" class="form-file inputfile inputfile-1">
                                                <label for="file_transcript_3"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 education-form" id="education_4" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุดลำดับ 4</h3>
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
                                            <label class="did-floating-label">วุฒิระดับการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ปีที่จบการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เกรดเฉลี่ย<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาขาวิชา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-4[]" id="file_transcript_4" class="form-file inputfile inputfile-1">
                                                <label for="file_transcript_4"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 education-form" id="education_5" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุดลำดับ 5</h3>
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
                                            <label class="did-floating-label">วุฒิระดับการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ปีที่จบการศึกษา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เกรดเฉลี่ย<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาขาวิชา<span class="req">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-5[]" id="file_transcript_5" class="form-file inputfile inputfile-1">
                                                <label for="file_transcript_5"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group btn-action" id="btn_education">
                                <div class="btn btn--primary btn-add" id="education_add"><span>เพิ่ม</span></div>
                                <div class="btn btn--gray btn-delete" id="education_del"><span>ลบ</span></div>
                            </div>
                        </div>

                        <div class="form-group--section mb-5" id="form-group_training">
                            <h3 class="h3 text-red mb-3">ประวัติการฝึกอบรม</h3>
                            <div class="manage-form-training">
                                <div class="row mb-4 training-form show" id="training_1">
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อหลักสูตร</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="starttraining_date_1" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่อบรม</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>จัดอบรมโดยสถาบัน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-traning-1[]" id="file_traning_1" class="form-file inputfile inputfile-1">
                                                <label for="file_traning_1"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 training-form" id="training_2" style="display: none;">
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อหลักสูตร</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="starttraining_date_2" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่อบรม</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>จัดอบรมโดยสถาบัน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-traning-2[]" id="file_traning_2" class="form-file inputfile inputfile-1">
                                                <label for="file_traning_2"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 training-form" id="training_3" style="display: none;">
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อหลักสูตร</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="starttraining_date_3" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่อบรม</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>จัดอบรมโดยสถาบัน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-traning-3[]" id="file_traning_3" class="form-file inputfile inputfile-1">
                                                <label for="file_traning_3"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 training-form" id="training_4" style="display: none;">
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อหลักสูตร</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="starttraining_date_4" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่อบรม</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>จัดอบรมโดยสถาบัน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-traning-4[]" id="file_traning_4" class="form-file inputfile inputfile-1">
                                                <label for="file_traning_4"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 training-form" id="training_5" style="display: none;">
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อหลักสูตร</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="starttraining_date_5" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่อบรม</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>จัดอบรมโดยสถาบัน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-traning-5[]" id="file_traning_5" class="form-file inputfile inputfile-1">
                                                <label for="file_traning_5"><span></span></label>
                                                <div class="title-selectfile">ไฟล์วุฒิการศึกษา<span class="req">*</span></div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group btn-action" id="btn_training">
                                <div class="btn btn--primary btn-add" id="training_add"><span>เพิ่ม</span></div>
                                <div class="btn btn--gray btn-delete" id="training_del"><span>ลบ</span></div>
                            </div>
                        </div>

                        <div class="form-group--section mb-3" id="form-group_work">
                            <h3 class="h3 text-red mb-3">ประวัติการทำงาน <span class="sub-title">(เริ่มจากสถานที่ทำงานสุดท้าย)</span></h3>
                            <!-- <div class="row mb-4">
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>อายุงานรวม (ปี)</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float form-group__remark">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>อายุงานในระดับบริหารรวม (ปี)</label>
                                    </div>
                                    <div class="text-remark">(สำหรับผู้จัดการแผนกขึ้นไป)</div>
                                </div>
                            </div> -->
                            <div class="manage-form-work">
                                <div class="row mb-4 work-form show" id="work_1">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-2">ข้อมูลประวัติการทำงาน 1</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานประกอบการ</label>
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
                                            <input id="startwork_date_1" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่เริ่มต้นทำงาน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="endwork_date_1" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่สิ้นสุดทำงาน</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เงินเดือน</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาเหตุที่ออก</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ลักษณะงานที่รับผิดชอบ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-1[]" id="file_work_1" class="form-file inputfile inputfile-1">
                                                <label for="file_work_1"><span></span></label>
                                                <div class="title-selectfile">Certificate</div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 work-form" id="work_2" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ข้อมูลประวัติการทำงาน 2</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานประกอบการ</label>
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
                                            <input id="startwork_date_2" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่เริ่มต้นทำงาน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="endwork_date_2" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่สิ้นสุดทำงาน</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เงินเดือน</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาเหตุที่ออก</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ลักษณะงานที่รับผิดชอบ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-1[]" id="file_work_2" class="form-file inputfile inputfile-1">
                                                <label for="file_work_2"><span></span></label>
                                                <div class="title-selectfile">Certificate</div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 work-form" id="work_3" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ข้อมูลประวัติการทำงาน 3</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานประกอบการ</label>
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
                                            <input id="startwork_date_3" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่เริ่มต้นทำงาน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="endwork_date_3" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่สิ้นสุดทำงาน</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เงินเดือน</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาเหตุที่ออก</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ลักษณะงานที่รับผิดชอบ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-1[]" id="file_work_3" class="form-file inputfile inputfile-1">
                                                <label for="file_work_3"><span></span></label>
                                                <div class="title-selectfile">Certificate</div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 work-form" id="work_4" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ข้อมูลประวัติการทำงาน 4</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานประกอบการ</label>
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
                                            <input id="startwork_date_3" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่เริ่มต้นทำงาน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="endwork_date_3" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่สิ้นสุดทำงาน</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เงินเดือน</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาเหตุที่ออก</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ลักษณะงานที่รับผิดชอบ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-1[]" id="file_work_4" class="form-file inputfile inputfile-1">
                                                <label for="file_work_4"><span></span></label>
                                                <div class="title-selectfile">Certificate</div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                                <div class="row mb-4 work-form" id="work_5" style="display: none;">
                                    <div class="col-12">
                                        <h3 class="h3 text-darkgray mb-3">ข้อมูลประวัติการทำงาน 5</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อสถานประกอบการ</label>
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
                                            <input id="startwork_date_3" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่เริ่มต้นทำงาน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float icon icon__date">
                                            <input id="endwork_date_3" class="form-control" type="text" placeholder="" value="" readonly>
                                            <label>วันที่สิ้นสุดทำงาน</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เงินเดือน</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>สาเหตุที่ออก</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ลักษณะงานที่รับผิดชอบ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group__remark">
                                            <div class="select-file icon icon__upload">
                                                <input type="file" name="file-1[]" id="file_work_5" class="form-file inputfile inputfile-1">
                                                <label for="file_work_5"><span></span></label>
                                                <div class="title-selectfile">Certificate</div>
                                            </div>
                                        </div>
                                        <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="btn-group btn-action mb-5" id="btn_work">
                                <div class="btn btn--primary btn-add" id="work_add"><span>เพิ่ม</span></div>
                                <div class="btn btn--gray btn-delete" id="work_del"><span>ลบ</span></div>
                            </div>
                        </div>

                        <div class="form-group--section mb-5" id="form-group_language">
                            <h3 class="h3 text-red mb-3">ความสามารถด้านภาษาต่างประเทศ</h3>
                            <div class="manage-form-language">
                                <div class="row language-form show" id="language_1">
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="title" disabled>ภาษา</option>
                                                <option value="1" selected="true">ภาษาอังกฤษ</option>
                                            </select>
                                            <label class="did-floating-label">ภาษา</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">พูด</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">พูด</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">อ่าน</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">อ่าน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">เขียน</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">เขียน</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row language-form show" id="language_2">
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="title" disabled>ภาษา</option>
                                                <option value="3">ภาษาจีน</option>
                                            </select>
                                            <label class="did-floating-label">ภาษา</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">พูด</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">พูด</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">อ่าน</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">อ่าน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">เขียน</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">เขียน</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row language-form" id="language_3" style="display: none;">
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
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">พูด</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">อ่าน</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">อ่าน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">เขียน</option>
                                                <option value="1">ดีมาก</option>
                                                <option value="2">ปานกลาง</option>
                                                <option value="3">น้อย</option>
                                            </select>
                                            <label class="did-floating-label">เขียน</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="btn-group btn-action" id="btn_language">
                                <div class="btn btn--primary btn-add" id="language_add"><span>เพิ่ม</span></div>
                                <div class="btn btn--gray btn-delete" id="language_del"><span>ลบ</span></div>
                            </div>
                        </div>

                        <div class="form-group--section mb-5">
                            <h3 class="h3 text-red mb-3">ความสามารถด้านอื่นๆ</h3>
                            <div class="row mb-2">
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
                                <div class="col-lg-6">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>โปรแกรมคอมพิวเตอร์</label>
                                    </div>
                                </div>
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
                                <div class="col-lg-3">
                                    <div class="form-group form-group__remark">
                                        <div class="select-file icon icon__upload">
                                            <input type="file" name="file-ability-1[]" id="file_certificate_1" class="form-file inputfile inputfile-1">
                                            <label for="file_certificate_1"><span></span></label>
                                            <div class="title-selectfile">Certificate</div>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form-group__remark">
                                        <div class="select-file icon icon__upload">
                                            <input type="file" name="file-ability-2[]" id="file_certificate_2" class="form-file inputfile inputfile-1">
                                            <label for="file_certificate_2"><span></span></label>
                                            <div class="title-selectfile">Certificate</div>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form-group__remark">
                                        <div class="select-file icon icon__upload">
                                            <input type="file" name="file-ability-3[]" id="file_certificate_3" class="form-file inputfile inputfile-1">
                                            <label for="file_certificate_3"><span></span></label>
                                            <div class="title-selectfile">Certificate</div>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpg</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group--section mb-5">
                            <h3 class="h3 text-red mb-3">ความสามารถพิเศษอื่นๆ :</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group form--float mb-0">
                                        <textarea class="form-control"></textarea>
                                        <label>ระบุ</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group--section">
                            <div class="consent">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="consent" id="chk_consent">
                                            <label class="form-check-label" for="chk_consent">
                                                ข้าพเจ้าขอให้คำรับรองว่า ข้อความ รายละเอียด และเอกสารที่ข้าพเจ้าได้ให้ไว้นี้ถูกต้องและเป็นความจริงทุกประการ หากภายหลัง บริษัทฯ ตรวจสอบพบว่าข้อความใดเป็นเท็จ ข้าพเจ้ายินยอมให้บริษัทฯ บอกเลิกจ้างข้าพเจ้าได้ทันที โดยไม่ต้องจ่ายค่าชดเชยใดๆและยินดีให้บริษัทฯ ดำเนินคดีตามกฏหมายทุกประการ อนึ่ง เอกสารประกอบอื่นๆตามประกาศรับสมัครสอบข้าพเจ้านำส่งภายหลังเมื่อได้รับการประกาศเป็นผู้มีสิทธิ์สอบสัมภาษณ์พร้อมลงลายมือชื่อรับรองเอกสารต่อไป
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="consent2" id="chk_consent2">
                                            <label class="form-check-label" for="chk_consent2">
                                                    ข้าพเจ้ายินยอมให้ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด (รฟฟท.) เก็บรวบรวม / ใช้ / เปิดเผย ข้อมูลส่วนบุคคล  หรือข้อมูลอื่นๆที่เกี่ยวข้อง (Sensitive Data) ของข้าพเจ้า  และในกรณี ไม่ผ่านการพิจารณาคัดเลือก ข้อมูลในใบสมัครจะถูกเก็บรักษาไว้อีกเป็นระยะเวลา 1 ปี และในกรณีผ่านการพิจารณาคัดเลือก ข้อมูลในใบสมัครจะถูกเก็บรักษาไว้ตลอดระยะเวลาการเป็นพนักงาน/ลูกจ้าง และเก็บต่อเนื่องอีกเป็นระยะเวลา 10 ปี ทั้งนี้ ข้าพเจ้าได้อ่านข้อความข้างต้นและทราบถึงวัตถุประสงค์ในการเก็บรวบรวม ใช้หรือเปิดเผย (“ประมวลผล”) ข้อมูลส่วนบุคคล ตลอดจนเข้าใจข้อความดังกล่าวดีแล้ว และข้าพเจ้าให้ความยินยอมกับ รฟฟท. ในการนำข้อมูลส่วนบุคคลของข้าพเจ้าไปดำเนินการดังกล่าวข้างต้น
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

@push('script-addform')
<script type="text/javascript">
    /* ----  Education  --- */
    let MoreEducation = 2;
    $('#education_add').click(function () {
        $('#education_'+MoreEducation).show();
        $('#education_'+MoreEducation).addClass('show');
        MoreEducation += 1;

        let sizeEducation_add = $(this).closest("#form-group_education").find('.manage-form-education .education-form.show').length;
        //console.log(sizeEducation_add);
        if(sizeEducation_add == 5){
            $('#education_add').hide();
        }else{
            $('#education_del').css('display','inline-block');
        }
    });
    $('#education_del').click(function(){
        MoreEducation -= 1;
        $('#education_'+MoreEducation+'.show').hide();
        $('#education_'+MoreEducation).removeClass('show');

        let sizeEducation_del = $(this).closest("#form-group_education").find('.manage-form-education .education-form.show').length;
        //console.log(sizeEducation_del);
        if(sizeEducation_del == 1){
            $('#education_del').hide();
        }
        if(sizeEducation_del <= 5){
            $('#education_add').show();
        }
    });


    /* ----  Training  --- */
    let MoreTraining = 2;
    $('#training_add').click(function () {
        $('#training_'+MoreTraining).show();
        $('#training_'+MoreTraining).addClass('show');
        MoreTraining += 1;

        let sizeTraining_add = $(this).closest("#form-group_training").find('.manage-form-training .training-form.show').length;
        //console.log(sizeEducation_add);
        if(sizeTraining_add == 5){
            $('#training_add').hide();
        }else{
            $('#training_del').css('display','inline-block');
        }
    });
    $('#training_del').click(function(){
        MoreTraining -= 1;
        $('#training_'+MoreTraining+'.show').hide();
        $('#training_'+MoreTraining).removeClass('show');

        let sizeTraining_del = $(this).closest("#form-group_training").find('.manage-form-training .training-form.show').length;
        //console.log(sizeEducation_del);
        if(sizeTraining_del == 1){
            $('#training_del').hide();
        }
        if(sizeTraining_del <= 5){
            $('#training_add').show();
        }
    });

    /* ----  language  --- */
    let MoreLanguage = 3;
    $('#language_add').click(function () {
        $('#language_'+MoreLanguage).show();
        $('#language_'+MoreLanguage).addClass('show');
        MoreLanguage += 1;

        let sizeLanguage_add = $(this).closest("#form-group_language").find('.manage-form-language .language-form.show').length;
        console.log(sizeLanguage_add);
        if (sizeLanguage_add == 3) {
            $('#language_add').hide();
            $('#language_del').css('display','inline-block');
        } 
    });
    $('#language_del').click(function(){
        MoreLanguage -= 1;
        $('#language_'+MoreLanguage+'.show').hide();
        $('#language_'+MoreLanguage).removeClass('show');
        if(MoreLanguage == 3){
            $('#language_add').show();
            $('#language_del').hide();
        }
    });


    /* ----  work  --- */
    let MoreWork = 2;
    $('#work_add').click(function () {
        $('#work_'+MoreWork).show();
        $('#work_'+MoreWork).addClass('show');
        MoreWork += 1;

        let sizeWork_add = $(this).closest("#form-group_work").find('.manage-form-work .work-form.show').length;
        console.log(sizeWork_add);
        if (sizeWork_add == 5) {
            $('#work_add').hide();
        } else{
            $('#work_del').css('display','inline-block');
        }
    });
    $('#work_del').click(function(){
        MoreWork -= 1;
        $('#work_'+MoreWork+'.show').hide();
        $('#work_'+MoreWork).removeClass('show');

        let sizeWork_del = $(this).closest("#form-group_work").find('.manage-form-work .work-form.show').length;
        //console.log(sizeWork_del);
        if(sizeWork_del == 1){
            $('#work_del').hide();
        }
        if(sizeWork_del <= 5){
            $('#work_add').show();
        }

        if(MoreWork == 2){
            $('#work_del').hide();
        }
        if(MoreWork <= 5){
            $('#work_add').show();
        }
    });




</script>

@endpush

@push('script-datepicker')

    
    <link rel="stylesheet" href="{{ mix('/css/jquery-ui.min.css') }}"/>
    <script type="text/javascript" src="{{ mix('/js/jquery-ui-1.13.1.custom.js') }}"></script>

    <script type="text/javascript">
        // TH
        $.datepicker.regional['th'] ={
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
            monthNamesShort: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            constrainInput: true,
            yearOffSet : 543,
        };
        $.datepicker.setDefaults($.datepicker.regional['th']);
        // EN
        // $.datepicker.regional['en'] ={
        //     dateFormat: 'dd/mm/yy',
        //     changeMonth: true,
        //     changeYear: true,
        //     constrainInput: true,
        //     yearOffSet : 0,
        //     yearRange: '-80:+0',
        // };
        // $.datepicker.setDefaults($.datepicker.regional['en']);

        $(document).ready(function () {
            

            $('#startwork_date_1').datepicker({
                minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }

                    $("#endwork_date_1").val('');
                    var start = $('#startwork_date_1').datepicker('getDate');
                    var end = new Date();
                    var d = end.getDate();
                    var m = end.getMonth();
                    var y = end.getFullYear();
                    var endDate = new Date(y, m, d);
                    console.log(start+"-"+end);
                    var days = (start - endDate) / 1000 / 60 / 60 / 24;
                    var mDate = days;

                    $("#endwork_date_1").datepicker("destroy");
                    $('#endwork_date_1').datepicker({
                        minDate: days,
                        maxDate: 0,
                        onSelect: function () {
                            if($(this).val() != ''){
                                $(this).parent().addClass('has-data');
                            } else {
                                $(this).parent().removeClass('has-data');
                            }
                        },
                    });
                    $("#endwork_date_1").datepicker("refresh");
                    $("#endwork_date_1").datepicker( $.datepicker.regional["th"] );
                },
            });
            $("#startwork_date_1").datepicker( $.datepicker.regional["th"] );


            $('#startwork_date_2').datepicker({
                minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }

                    $("#endwork_date_2").val('');
                    var start = $('#startwork_date_2').datepicker('getDate');
                    var end = new Date();
                    var d = end.getDate();
                    var m = end.getMonth();
                    var y = end.getFullYear();
                    var endDate = new Date(y, m, d);
                    console.log(start+"-"+end);
                    var days = (start - endDate) / 1000 / 60 / 60 / 24;
                    var mDate = days;

                    $("#endwork_date_2").datepicker("destroy");
                    $('#endwork_date_2').datepicker({
                        minDate: days,
                        maxDate: 0,
                        onSelect: function () {
                            if($(this).val() != ''){
                                $(this).parent().addClass('has-data');
                            } else {
                                $(this).parent().removeClass('has-data');
                            }
                        },
                    });
                    $("#endwork_date_2").datepicker("refresh");
                    $("#endwork_date_2").datepicker( $.datepicker.regional["th"] );
                },
            });
            $("#startwork_date_2").datepicker( $.datepicker.regional["th"] );


            $('#startwork_date_3').datepicker({
                minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }

                    $("#endwork_date_3").val('');
                    var start = $('#startwork_date_3').datepicker('getDate');
                    var end = new Date();
                    var d = end.getDate();
                    var m = end.getMonth();
                    var y = end.getFullYear();
                    var endDate = new Date(y, m, d);
                    console.log(start+"-"+end);
                    var days = (start - endDate) / 1000 / 60 / 60 / 24;
                    var mDate = days;

                    $("#endwork_date_3").datepicker("destroy");
                    $('#endwork_date_3').datepicker({
                        minDate: days,
                        maxDate: 0,
                        onSelect: function () {
                            if($(this).val() != ''){
                                $(this).parent().addClass('has-data');
                            } else {
                                $(this).parent().removeClass('has-data');
                            }
                        },
                    });
                    $("#endwork_date_3").datepicker("refresh");
                    $("#endwork_date_3").datepicker( $.datepicker.regional["th"] );
                },
            });
            $("#startwork_date_3").datepicker( $.datepicker.regional["th"] );


            $('#startwork_date_4').datepicker({
                minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }

                    $("#endwork_date_4").val('');
                    var start = $('#startwork_date_4').datepicker('getDate');
                    var end = new Date();
                    var d = end.getDate();
                    var m = end.getMonth();
                    var y = end.getFullYear();
                    var endDate = new Date(y, m, d);
                    console.log(start+"-"+end);
                    var days = (start - endDate) / 1000 / 60 / 60 / 24;
                    var mDate = days;

                    $("#endwork_date_4").datepicker("destroy");
                    $('#endwork_date_4').datepicker({
                        minDate: days,
                        maxDate: 0,
                        onSelect: function () {
                            if($(this).val() != ''){
                                $(this).parent().addClass('has-data');
                            } else {
                                $(this).parent().removeClass('has-data');
                            }
                        },
                    });
                    $("#endwork_date_4").datepicker("refresh");
                    $("#endwork_date_4").datepicker( $.datepicker.regional["th"] );
                },
            });
            $("#startwork_date_4").datepicker( $.datepicker.regional["th"] );


            $('#startwork_date_5').datepicker({
                minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }

                    $("#endwork_date_5").val('');
                    var start = $('#startwork_date_5').datepicker('getDate');
                    var end = new Date();
                    var d = end.getDate();
                    var m = end.getMonth();
                    var y = end.getFullYear();
                    var endDate = new Date(y, m, d);
                    console.log(start+"-"+end);
                    var days = (start - endDate) / 1000 / 60 / 60 / 24;
                    var mDate = days;

                    $("#endwork_date_5").datepicker("destroy");
                    $('#endwork_date_5').datepicker({
                        minDate: days,
                        maxDate: 0,
                        onSelect: function () {
                            if($(this).val() != ''){
                                $(this).parent().addClass('has-data');
                            } else {
                                $(this).parent().removeClass('has-data');
                            }
                        },
                    });
                    $("#endwork_date_5").datepicker("refresh");
                    $("#endwork_date_5").datepicker( $.datepicker.regional["th"] );
                },
            });
            $("#startwork_date_5").datepicker( $.datepicker.regional["th"] );


            $('#starttraining_date_1').datepicker({
                //minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }
                },
            });
            $("#starttraining_date_1").datepicker( $.datepicker.regional["th"] );

            $('#starttraining_date_2').datepicker({
                //minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }
                },
            });
            $("#starttraining_date_2").datepicker( $.datepicker.regional["th"] );

            $('#starttraining_date_3').datepicker({
                //minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }
                },
            });
            $("#starttraining_date_3").datepicker( $.datepicker.regional["th"] );

            $('#starttraining_date_4').datepicker({
                //minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }
                },
            });
            $("#starttraining_date_4").datepicker( $.datepicker.regional["th"] );

            $('#starttraining_date_5').datepicker({
                //minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }
                },
            });
            $("#starttraining_date_5").datepicker( $.datepicker.regional["th"] );

        });
        
    </script>

@endpush