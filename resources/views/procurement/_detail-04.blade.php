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
                        <li class="breadcrumb-item active" aria-current="page">รายละเอียดสรุปผลการจัดซื้อจัดจ้าง</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">รายละเอียดสรุปผลการจัดซื้อจัดจ้าง</h2>
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
                                        รายการจัดซื้อ - จัดจ้าง
                                    </td>
                                    <td class="text-start">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        วิธีการจัดซื้อ - จัดจ้าง
                                    </td>
                                    <td class="text-start">
                                        พิเศษ
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        หน่วยงานจัดซื้อ - จัดจ้าง
                                    </td>
                                    <td class="text-start">
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ราคากลาง
                                    </td>
                                    <td class="text-start">
                                        0.00 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        วงเงินงบประมาณ
                                    </td>
                                    <td class="text-start">
                                        950,000.00 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ที่เก็บเอกสาร
                                    </td>
                                    <td class="text-start">
                                        ห้องจัดซื้อ ชั้น ๒ ศูนย์ซ่อมบำรุงคลองตัน เลขที่ ๒๗ ถนนเพชรบุรีตัดใหม่ ๔๗ (ซอยศูนย์วิจัย) แขวงบางกะปิ เขตห้วยขวาง กรุงเทพมหานคร
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ราคาที่สรุปในการจัดซื้อ - จัดจ้าง
                                    </td>
                                    <td class="text-start">
                                        856,000.00 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        เหตุผลที่รับคัดเลือก
                                    </td>
                                    <td class="text-start">
                                        ผู้เสนอราคาที่มีคุณสมบัติถูกต้อง มีการรับประกันความชำรุดบกพร่องตรงตามเงื่อนไขของบริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ประกาศร่าง TOR (ที่เกี่ยวข้อง)
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="เอกสารแนบ 2">เอกสารแนบ 2</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        ประกวดราคา (ที่เกี่ยวข้อง)
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

                    <div class="table-responsive table--primary">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        ลำดับ
                                    </th>
                                    <th>
                                        เลขที่สัญญา
                                    </th>
                                    <th>
                                        ผู้เสนอราคา
                                    </th>
                                    <th>
                                        ราคาที่เสนอ
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td class="text-start">
                                        <p class="procurement--order">
                                            รฟจ.015/2559 ลงวันที่ 11 มีนาคม 2559
                                        </p>
                                    </td>
                                    <td class="text-start">
                                        <div class="procurement--company">
                                            บริษัทไทยโฮบิชิคอนสตรัคชั่นจำกัด
                                        </div>
                                    </td>
                                    <td>
                                        <div class="procurement--budget">
                                            6,000,000.00
                                        </div>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/datepicker-th.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/datepicker-en.js"></script>

    <script>

        $.datepicker.setDefaults( $.datepicker.regional[ "th" ] );
        var currentDate = new Date();

        currentDate.setYear(currentDate.getFullYear() + 543);
        
        $("#start_date").datepicker({
            changeMonth: true,
            changeYear: true,
            //yearRange: '-80:+0',//EN
            dateFormat: 'dd/mm/yy',

            // onSelect: function () {
            //     var dt2 = $('#end_date');
            //     var startDate = $(this).datepicker('getDate');
            //     var minDate = $(this).datepicker('getDate');
            //     var dt2Date = dt2.datepicker('getDate');
            //     //difference in days. 86400 seconds in day, 1000 ms in second
            //     var dateDiff = (dt2Date - minDate)/(86400 * 1000);
                
            //     startDate.setDate(startDate.getDate() + 30);
            //     if (dt2Date == null || dateDiff < 0) {
            //     		dt2.datepicker('setDate', minDate);
            //     }
            //     else if (dateDiff > 30){
            //     		dt2.datepicker('setDate', startDate);
            //     }
            //     //sets dt2 maxDate to the last day of 30 days window
            //     dt2.datepicker('option', 'maxDate', startDate);
            //     dt2.datepicker('option', 'minDate', minDate);
            // }
            
        });
        $('#start_date').datepicker("setDate",currentDate );

        $("#end_date").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '+443:+543',//TH
            //yearRange: '-80:+0',//EN
            dateFormat: 'dd/mm/yy',
        });
        $('#end_date').datepicker("setDate",currentDate );
    </script>

@endpush