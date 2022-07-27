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
                        <li class="breadcrumb-item"><a href="/">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="/procurement/index">จัดซื้อจัดจ้าง</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายละเอียดประกาศร่าง TOR</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">รายละเอียดประกาศร่าง TOR</h2>
                </div>

                <div class="procurement--wrapper">

                    <div class="table-responsive table--primary">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 240px">
                                        หัวข้อ
                                    </th>
                                    <th>
                                        รายละเอียด
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-start">
                                        หมายเลขประกาศ TOR
                                    </td>
                                    <td class="text-start">
                                        รฟท.ช./64001
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ชื่อประกาศ TOR
                                    </td>
                                    <td class="text-start">
                                        ประกวดราคาจ้างซ่อมแซมบำรุงรักษางานระบบราง ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start" colspan="2">
                                        รายละเอียด
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ชื่อหน่วยงาน
                                    </td>
                                    <td class="text-start">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        วงเงินงบประมาณ
                                    </td>
                                    <td class="text-start">
                                        6,000,000.00 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        วันที่ประกาศ
                                    </td>
                                    <td class="text-start">
                                        05/01/2564
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        วันสิ้นสุดรับฟังข้อวิจารณ์
                                    </td>
                                    <td class="text-start">
                                        12/04/2564
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        สถานที่ขอรับรายละเอียด
                                    </td>
                                    <td class="text-start">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        โทรศัพท์หมายเลข
                                    </td>
                                    <td class="text-start">
                                        02 3085600 ต่อ 1181 ติดต่อ อภิสิทธิ์
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ไฟล์แนบ
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="ประกาศประกวดราคา">ประกาศประกวดราคา</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="เอกสารประกวดราคา">เอกสารประกวดราคา</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="ขอบเขตงาน">ขอบเขตงาน</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="ราคากลาง">ราคากลาง</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href="/procurement/index" class="btn btn--gray w-100"><span>ย้อนกลับ</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="page--content">
            <div class="container">
                <div class="social--wrapper">
                    <div class="row row-cols-1 row-cols-md-2 justify-content-between align-items-center">
                        <div class="col">
                            <div class="view--date">
                                วันที่อัพเดท : <span>7 เมษายน 2565</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col-auto">
                                    <div class="view--count">
                                        จำนวนผู้เข้าชม : <span>39068</span> คน
                                    </div>
                                </div>
                            </div>
                        </div>
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
            //yearRange: '-80:+0',
        };
        $.datepicker.setDefaults($.datepicker.regional['th']);
        // EN
        // $.datepicker.regional['en'] ={
        //     dateFormat: 'dd/mm/yy',
        //     changeMonth: true,
        //     changeYear: true,
        //     constrainInput: true,
        //     yearOffSet : 0,
        // };
        // $.datepicker.setDefaults($.datepicker.regional['en']);

        $(document).ready(function () {

            $('#start_date').datepicker({
                minDate: '-3Y',
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }

                    $("#end_date").val('');
                    var start = $('#start_date').datepicker('getDate');
                    var end = new Date();
                    var d = end.getDate();
                    var m = end.getMonth();
                    var y = end.getFullYear();
                    var endDate = new Date(y, m, d);
                    console.log(start+"-"+end);
                    var days = (start - endDate) / 1000 / 60 / 60 / 24;
                    var mDate = days;

                    $("#end_date").datepicker("destroy");
                    $('#end_date').datepicker({
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
                    $("#end_date").datepicker("refresh");

                    $("#end_date").datepicker( $.datepicker.regional["th"] );

                },
            });
            $("#start_date").datepicker( $.datepicker.regional["th"] );
            //$("#start_date").datepicker( "setDate", new Date());
        });
    </script>

@endpush