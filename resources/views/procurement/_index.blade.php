@extends('masterpage')

@section('title', 'จัดซื้อจัดจ้าง')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-procurement.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item active" aria-current="page">จัดซื้อจัดจ้าง</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">จัดซื้อจัดจ้าง</h2>
                </div>

                <div class="form-group-wrapper">
                    <form action="" class="form-group--section">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="form-group form--float">
                                    <input class="form-control" type="text" placeholder="" value="" id="additional_values_1">
                                    <label>คำค้นหา</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="form-group form--float">
                                    <select class="form-select" aria-label="Default select example" id="additional_values_2">
                                        <option value="N/A">เลือกประเภท</option>
                                        <option value="slc1-7">แผนการจัดซื้อจัดจ้างประจําปี</option>
                                        <option value="slc1-11">แผนปฏิบัติการจัดซื้อจัดจ้างประจําปี</option>
                                        <option value="slc1-1">ประกาศจัดซื้อจัดจ้าง</option>
                                        <option value="slc1-3">ประกาศร่าง TOR</option>
                                        <option value="slc1-2">ประกาศราคากลาง</option> 
                                        <option value="slc1-10">ประกาศยกเลิก</option>
                                        <option value="slc1-4">สรุปผลการจัดซื้อจัดจ้าง</option> 
                                        <option value="slc1-9">รายงานผลการจัดซื้อจัดจ้างประจำปี</option>
                                        <option value="slc1-11">ประกาศรายชื่อผู้ที่ผ่านพิจารณาคุณสมบัติ</option>
                                        <option value="slc1-11">ประกาศชื่อผู้มีสิทธิเสนอราคา</option>
                                        <option value="slc1-8">ประกาศรายชื่อผู้ชนะการเสนอราคา</option> 
                                        <option value="slc1-11">ประกาศอื่นๆ</option>
                                        <option value="slc1-11">สําเนาสัญญา</option>
                                        <option value="slc1-11">รายงานขอซื้อขอจ้าง</option>
                                        <!-- <option value="slc1-5">สรุปผลการจัดซื้อจัดจ้างหรือการจัดหา พัสดุรายเดือน (สขร.)</option>
                                        <option value="slc1-6">ประกาศเชิญชวน</option> 
                                        <option value="slc1-9">รายงานผลการจัดซื้อจัดจ้างหรือการจัดหา พัสดุประจำปี</option>
                                        <option value="slc1-10">ยกเลิกประกาศจัดซื้อจัดจ้าง</option> -->
                                        
                                    </select>
                                    <label class="did-floating-label">เลือกประเภท</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_3">
                                <div class="form-group form--float">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="true" value="title">เลือกประเภท</option>
                                        <option value="slc2-1">จ้างก่อสร้างอาคาร</option>
                                        <option value="slc2-2">จ้างก่อสร้างอาคาร</option> 
                                    </select>
                                    <label class="did-floating-label">เลือกประเภท</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_4">
                                <div class="form-group form--float">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="true" value="title">เลือกประเภท</option>
                                        <option value="slc3-1">สอบราคา</option>
                                        <option value="slc3-2">สอบราคา</option> 
                                    </select>
                                    <label class="did-floating-label">เลือกประเภท</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_10">
                                <div class="form-group form--float">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>วงเงินงบประมาณเริ่มต้น</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_11">
                                <div class="form-group form--float">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>ถึงวงเงินงบประมาณ</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_5">
                                <div class="form-group form--float icon icon__date">
                                    <input id="start_date01" class="form-control start-date" type="text" placeholder="" value="" readonly>
                                    <label>วันที่เริ่มต้นรับฟังข้อวิจารณ์</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_6">
                                <div class="form-group form--float icon icon__date">
                                    <input id="end_date01" class="form-control end-date" type="text" placeholder="" value="" readonly>
                                    <label>วันที่สิ้นสุดรับฟังข้อวิจารณ์</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_7">
                                <div class="form-group form--float icon icon__date">
                                    <input id="start_date02" class="form-control start-date" type="text" placeholder="" value="" readonly>
                                    <label>วันที่เริ่มต้น</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_8">
                                <div class="form-group form--float icon icon__date">
                                    <input id="end_date02" class="form-control end-date" type="text" placeholder="" value="" readonly>
                                    <label>วันที่สิ้นสุด</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12" id="additional_values_9">
                                <div class="form-group form--float">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="true" value="title">เลือกปี</option>
                                        <option value="slc4-1">2565</option>
                                        <option value="slc4-2">2564</option> 
                                    </select>
                                    <label class="did-floating-label">เลือกปี</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                            </div>
                        </div>
                    </form>
                    
                </div>

                <div class="procurement--wrapper" id="table_template_1" style="display: none;">
                    @include('procurement._table-01')
                </div>

                <div class="procurement--wrapper" id="table_template_2" style="display: none;">
                    @include('procurement._table-02')
                </div>

                <div class="procurement--wrapper" id="table_template_3" style="display: none;">
                    @include('procurement._table-03')
                </div>

                <div class="procurement--wrapper" id="table_template_4" style="display: none;">
                    @include('procurement._table-04')
                </div>

                <div class="procurement--wrapper" id="table_template_5" style="display: none;">
                    @include('procurement._table-05')
                </div>

                <div class="procurement--wrapper" id="table_template_6" style="display: none;">
                    @include('procurement._table-06')
                </div>

                <div class="procurement--wrapper" id="table_template_7" style="display: none;">
                    @include('procurement._table-07')
                </div>

                <div class="procurement--wrapper" id="table_template_8" style="display: none;">
                    @include('procurement._table-08')
                </div>

                <div class="procurement--wrapper" id="table_template_9" style="display: none;">
                    @include('procurement._table-09')
                </div>

                <div class="procurement--wrapper" id="table_template_10" style="display: none;">
                    @include('procurement._table-10')
                </div>

                <div class="procurement--wrapper" id="table_template_11" style="display: none;">
                    @include('procurement._table-11')
                </div>
            </div>
        </article>
    </main>

    <script>
        // const scrollContainer = document.querySelector(".table--primary");

        // scrollContainer.addEventListener("wheel", (evt) => {
        //     evt.preventDefault();
        //     scrollContainer.scrollLeft += evt.deltaY;
        // });
        jQuery(function($) {
            $('#additional_values_2').change(function () {
                var val = $(this).val();
                console.log(val);
                if (val === 'slc1-1') {
                    $('#additional_values_3').show();
                    $('#additional_values_4').show();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').show();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-2') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').show();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-3') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').show();
                    $('#additional_values_6').show();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').show();
                    $('#additional_values_11').show();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').show();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-4') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').show();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').show();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-5') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').show();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-6') {
                    $('#additional_values_3').show();
                    $('#additional_values_4').show();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').show();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-7') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').show();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-8') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').show();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-9') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').show();
                    $('#table_template_10').hide();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-10') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').show();
                    $('#table_template_11').hide();
                }
                else if (val === 'slc1-11') {
                    $('#additional_values_3').hide();
                    $('#additional_values_4').hide();
                    $('#additional_values_5').hide();
                    $('#additional_values_6').hide();
                    $('#additional_values_7').show();
                    $('#additional_values_8').show();
                    $('#additional_values_9').show();
                    $('#additional_values_10').hide();
                    $('#additional_values_11').hide();

                    $('#table_template_1').hide();
                    $('#table_template_2').hide();
                    $('#table_template_3').hide();
                    $('#table_template_4').hide();
                    $('#table_template_5').hide();
                    $('#table_template_6').hide();
                    $('#table_template_7').hide();
                    $('#table_template_8').hide();
                    $('#table_template_9').hide();
                    $('#table_template_10').hide();
                    $('#table_template_11').show();
                }
            });
        });
    </script>
@endsection

@push('script-slick')
    <!-- Slick CSS  -->
    <link rel="stylesheet" href="{{ mix('/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/slick/slick-theme.css') }}"/>
    <!-- Slick JS  -->
    <script type="text/javascript" src="{{ mix('/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/slick.js') }}"></script>
@endpush

@push('script-datepicker')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="{{ mix('/js/jquery-ui-1.13.1.custom.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

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
            yearRange: '-80:+0',
            maxDate: 0,
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
        //     maxDate: 0,
        // };
        // $.datepicker.setDefaults($.datepicker.regional['en']);

        $(document).ready(function () {

            $("#start_date01, #start_date02").datepicker( $.datepicker.regional["th"] );
            //$("#start_date").datepicker( "setDate", new Date());
            
            $("#end_date01, #end_date02").datepicker( $.datepicker.regional["th"] );
            //$("#start_date").datepicker( "setDate", new Date());
        });
        
    </script>
@endpush