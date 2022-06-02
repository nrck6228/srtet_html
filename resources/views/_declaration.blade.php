@extends('masterpage')

@section('title', 'การเปิดเผยข้อมูลสาธารณะ')
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
                            <!-- image dimension 1320*450px -->
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-about.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item"><a href="#">เกี่ยวกับเรา</a></li>
                        <li class="breadcrumb-item active" aria-current="page">การเปิดเผยข้อมูลสาธารณะ</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">การเปิดเผยข้อมูลสาธารณะ</h2>
                </div>

                <div class="form-group-wrapper">
                    <form action="">
                        <div class="form-group--section">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>คำค้นหา</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="start_date" class="form-control start-date" type="text" placeholder="" value="" readonly>
                                        <label>วันที่เริ่มต้น</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float icon icon__date">
                                        <input id="end_date" class="form-control end-date" type="text" placeholder="" value="" readonly>
                                        <label>วันที่สิ้นสุด</label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>

                <div class="table-responsive table--primary">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 100px">
                                    ลำดับ
                                </th>
                                <th>
                                    วันที่ประกาศ
                                </th>
                                <th>
                                    ชื่อเรื่อง
                                </th>
                                <th style="width: 250px">
                                    เอกสารแนบ
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศยกเลิกจ้างเหมาตรวจสอบอุปกรณ์ในโรงซ่อมบำรุงเพื่อความปลอดภัยและออกหนังสือรับรองความปลอดภัย จำนวน 1 งาน
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศยกเลิกจ้างเหมาตรวจสอบอุปกรณ์ในโรงซ่อมบำรุงเพื่อความปลอดภัยและออกหนังสือรับรองความปลอดภัย จำนวน 1 งาน
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    4
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    5
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    6
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    7
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    8
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    9
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    10
                                </td>
                                <td>
                                    <div class="procurement--date">
                                        25/05/2565
                                    </div>
                                </td>
                                <td class="text-start">
                                    <div class="procurement--name">
                                        ประกาศ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ ๒๕๖๕
                                    </div>
                                </td>
                                <td class="text-start">
                                    <ul class="list--primary">
                                        <li>
                                            <a href="#nogo" title="เอกสารแนบ 1">เอกสารแนบ 1</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pagination-wrapper">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item prev disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="f-icon icon-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item next">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="f-icon icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="container">
                @include('include._social')
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
        
            
            //$("#start_date").datepicker( "setDate", new Date());
        });
        
    </script>

@endpush
