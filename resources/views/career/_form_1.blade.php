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
                        <div class="step-name">
                            Step 1 :<br/>
                            ข้อมูลส่วนตัว
                        </div>
                    </div>
                    <div class="stepper-item active">
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


                <div class="form-group-wrapper">
                    <form action="/career/form2">
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ข้อมูลตำแหน่งที่สมัคร</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">ตำแหน่ง*</option>
                                            <option value="1" >ตำแหน่งที่ 1</option>
                                            <option value="2">ตำแหน่งที่ 2</option>
                                            <option value="3">ตำแหน่งที่ 3</option>
                                        </select>
                                        <label class="did-floating-label">ตำแหน่ง<span class="req">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="regis_date" class="form-control" type="text" placeholder="" value="" readonly>
                                        <label>วันที่สมัคร</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="launch_date" class="form-control" type="text" placeholder="" value="" readonly>
                                        <label>เริ่มงาน</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เงินเดือนที่ต้องการ (บาท)</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form-group__remark">
                                        <div class="select-file icon icon__upload">
                                            <input type="file" name="file-1[]" id="file_resume" class="form-file inputfile inputfile-1">
                                            <label for="file_resume"><span></span></label>
                                            <div class="title-selectfile">เรซูเม่</div>
                                        </div>
                                    </div>
                                    <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .doc .docx .pdf และ .jpeg</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ข้อมูลส่วนตัว</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="image-profile">
                                                <img class="img-upload" src="{{ asset('assets/images/career/icon-uploadimage.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                            </div>                                           
                                            <div class="form-group form-group__remark">
                                                <div class="select-file icon icon__upload">
                                                    <input type="file" name="file-1[]" id="file_upload" class="form-file inputfile inputfile-1" onChange="img_pathUrl(this);">
                                                    <label for="file_upload"><span></span></label>
                                                    <div class="title-selectfile">รูปภาพ</div>
                                                </div>
                                            </div>
                                            <div class="text-remark">ขนาดไฟล์ไม่เกิน 2 MB ชนิดไฟล์นามสกุล .jpg</div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected="true" value="title">คำนำหน้า</option>
                                                            <option value="1" >นาย</option>
                                                            <option value="2">นาง</option>
                                                            <option value="3">นางสาว</option>
                                                        </select>
                                                        <label class="did-floating-label">คำนำหน้า<span class="req">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>ชื่อ<span class="req">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>นามสกุล<span class="req">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option value="title">Prefix</option>
                                                            <option value="1">Mr.</option>
                                                            <option value="2">Mrs.</option>
                                                            <option value="3">Miss.</option>
                                                        </select>
                                                        <label class="did-floating-label">Prefix<span class="req">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>Name<span class="req">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>Surname<span class="req">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>ชื่อเล่น</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float icon icon__date">
                                                        <input id="hbd_date" class="form-control hbd-date" type="text" placeholder="" value="" readonly>
                                                        <label>วันเกิด<span class="req">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input id="age" class="form-control" type="text" placeholder="" value="">
                                                        <label>อายุ (ปี)</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>เชื้อชาติ</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>สัญชาติ</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>ศาสนา</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>เลขที่บัตรประชาชน</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-4">
                                                    <div class="form-group form--float icon icon__date">
                                                        <input id="input_idcard_start" class="form-control" type="text" placeholder="" value="" readonly>
                                                        <label>วันที่ออกบัตร</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float icon icon__date">
                                                        <input id="input_idcard_exp" class="form-control" type="text" placeholder="" value="" readonly>
                                                        <label>วันที่หมดอายุบัตร</label>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>ส่วนสูง (ซม.)</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group form--float">
                                                        <input class="form-control" type="text" placeholder="" value="">
                                                        <label>น้ำหนัก (กก.)</label>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ข้อมูลติดต่อ</h3>
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ที่อยู่ปัจจุบันที่สามารถติดต่อได้<span class="req">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>อีเมล<span class="req">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทรศัพท์มือถือ<span class="req">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ชื่อบุคคลและช่องทางการติดต่อสำรอง<span class="req">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ความสัมพันธ์<span class="req">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทรศัพท์มือถือ<span class="req">*</span></label>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทร<span class="req">*</span></label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทรบิดา<span class="req">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทรมารดา<span class="req">*</span></label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-6">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>ที่อยู่ทะเบียนบ้าน</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>เบอร์โทร</label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="address" id="chk_address">
                                        <label class="form-check-label" for="chk_address">
                                            ที่อยู่เดียวกันกับทะเบียนบ้าน
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">การรับราชการทหาร (สำหรับผู้ชาย)</h3>
                            <div class="row">
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
                                            ได้รับการยกเว้น (ระบุ)
                                        </label>
                                        <span class="form-group form--float form-input-other">
                                            <input class="form-control" type="text" placeholder="" value="" disabled>
                                            <label>ระบุ</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ใบอนุญาตขับขี่รถยนต์</h3>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="driving_license" id="yes">
                                        <label class="form-check-label" for="yes">
                                            มี
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="driving_license" id="no">
                                        <label class="form-check-label" for="no">
                                            ไม่มี
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-5">
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

@push('script-datepicker')

    
    <link rel="stylesheet" href="{{ mix('/css/jquery-ui.min.css') }}"/>
    <script type="text/javascript" src="{{ mix('/js/jquery-ui-1.13.1.custom.js') }}"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script type="text/javascript">
        function GetAge(birthDate) {
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }
        // TH
        $.datepicker.regional['th'] ={
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
            monthNamesShort: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            constrainInput: true,
            yearOffSet : 543,
            
            
            onSelect: function() {
                if($(this).val() != ''){
                    $(this).parent().addClass('has-data');
                } else {
                    $(this).parent().removeClass('has-data');
                }
            },
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

            $('#regis_date').datepicker({
                maxDate: 0,
                yearRange: '-80:+0',
            });
            $("#regis_date").datepicker( $.datepicker.regional["th"] );

            $('#launch_date').datepicker({
                minDate: 0,
                maxDate: '+2M'
            });
            $("#launch_date").datepicker( $.datepicker.regional["th"] );
            


            $('#hbd_date').datepicker({
                maxDate: 0,
                yearRange: '-80:+0',
                onSelect: function (dateText, inst) {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                        $('#age').parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                        $('#age').parent().removeClass('has-data');
                    }
                    var old = $(this).datepicker('getDate');
                    var age = GetAge(old);
                    console.log(age);
                    $('#age').val(age);
                },
            });
            $("#hbd_date").datepicker( $.datepicker.regional["th"] );
            //$("#start_date").datepicker( "setDate", new Date());


            $('#input_idcard_start').datepicker({
                maxDate: 0,
                yearRange: '-80:+0',
            });
            $("#input_idcard_start").datepicker( $.datepicker.regional["th"] );

            $('#input_idcard_exp').datepicker({
                minDate: 0,
                maxDate: '+9y',
            });
            $("#input_idcard_exp").datepicker( $.datepicker.regional["th"] );


        });
        
    </script>

@endpush