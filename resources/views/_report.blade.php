@extends('masterpage')

@section('title', 'รายงานประจำปี ')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-procument.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item"><a href="#">กำหนดเวลาเดินรถ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายงานประจำปี </li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">รายงานประจำปี </h2>
                </div>

                <div class="form-filter">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls">
                                <input type="text" class="form-control" placeholder="ชื่อรายงาน">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls icon icon__date">
                                <input type="text" id="start_date" class="form-control start-date" placeholder="วันที่เริ่มต้น">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls icon icon__date">
                                <input type="text" id="end_date" class="form-control end-date" placeholder="วันที่สิ้นสุด">
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-12">
                            <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                        </div>
                    </div>
                </div>

                <div class="procument--wrapper">
                    <div class="table-responsive table--primary">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        ลำดับ
                                    </th>
                                    <th>
                                        ชื่อรายงาน
                                    </th>
                                    <th>
                                        วันที่
                                    </th>
                                    <th>
                                        ไฟล์ดาวน์โหลด
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td class="text-start">
                                        <a href="/procument-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procument--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารรายงาน">เอกสารรายงาน 1/3</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="เอกสารรายงาน">เอกสารรายงาน 2/3</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="เอกสารรายงาน">เอกสารรายงาน 3/3</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td class="text-start">
                                        <a href="/procument-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procument--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารรายงาน">เอกสารรายงาน</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td class="text-start">
                                        <a href="/procument-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procument--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารรายงาน">เอกสารรายงาน</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td class="text-start">
                                        <a href="/procument-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procument--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารรายงาน">เอกสารรายงาน</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td class="text-start">
                                        <a href="/procument-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procument--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารรายงาน">เอกสารรายงาน</a>
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
            yearRange: '+443:+543',//TH
            //yearRange: '-80:+0',//EN
            dateFormat: 'dd/mm/yy',
            
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