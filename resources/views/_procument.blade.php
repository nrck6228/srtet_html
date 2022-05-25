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
                        <li class="breadcrumb-item"><a href="#">กำหนดเวลาเดินรถ</a></li>
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
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="true" value="title">แผนการจัดซื้อจัดจ้าง</option>
                                        <option value="">จัดซื้อจัดจ้าง</option>
                                        <option value="">จัดซื้อจัดจ้าง</option> 
                                    </select>
                                    <label class="did-floating-label">แผนการจัดซื้อจัดจ้าง</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="form-group form--float">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>เลขที่ประกาศ</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="form-group form--float">
                                    <input class="form-control" type="text" placeholder="" value="">
                                    <label>ชื่อเรื่อง</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="form-group form--float">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="true" value="title">เลือกสถานะ</option>
                                        <option value="">สถานะ</option>
                                        <option value="">สถานะ</option> 
                                    </select>
                                    <label class="did-floating-label">เลือกสถานะ</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="form-group form--float icon icon__date">
                                    <input id="start_date" class="form-control start-date" type="text" placeholder="" value=" " readonly>
                                    <label>วันที่เริ่มต้น</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="form-group form--float icon icon__date">
                                    <input id="end_date" class="form-control end-date" type="text" placeholder="" value=" " readonly>
                                    <label>วันที่สิ้นสุด</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-12">
                                <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                            </div>
                        </div>
                    </form>
                    
                </div>

                <div class="procurement--wrapper">
                    <div class="remark--procurement">
                        <div class="remark">
                            <span>*</span> หมายเหตุ :
                        </div>
                        <div class="remark">
                            <i class="icon-user-circle"></i> = ดำเนินการหาผู้ประมูล,
                        </div>
                        <div class="remark">
                            <i class="icon-edit"></i> = มีการแก้ไขประกาศ,
                        </div>
                        <div class="remark">
                            <i class="icon-cancel-circle"></i> = ยกเลิกประกาศ
                        </div>
                    </div>

                    <div class="table-responsive table--primary">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        ลำดับ
                                    </th>
                                    <th>
                                        เลขที่ประกาศ
                                    </th>
                                    <th>
                                        ชื่อเรื่อง
                                    </th>
                                    <th>
                                        วันที่ประกาศ
                                    </th>
                                    <th>
                                        สถานะ
                                    </th>
                                    <th>
                                        เอกสาร
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
                                            รฟ.ยธ.1530/9/คล.02/2565
                                        </p>
                                    </td>
                                    <td class="text-start">
                                        <a href="/procurement-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procurement--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                        <p class="procurement--view">
                                            จำนวนผู้เข้าชม 35 คน
                                        </p>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td>
                                        <i class="icon-user-circle"></i>
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารชี้แจงเพิ่มเติม">เอกสารชี้แจงเพิ่มเติม</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="เอกสารประกวดราคา">เอกสารประกวดราคา</a>
                                            </li>
                                            <li>
                                                <a href="#nogo" title="รายละเอียดข้อมูลราคากลาง">รายละเอียดข้อมูลราคากลาง</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td class="text-start">
                                        <p class="procurement--order">
                                            รฟ.ยธ.1530/9/คล.02/2565
                                        </p>
                                    </td>
                                    <td class="text-start">
                                        <a href="/procurement-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procurement--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                        <p class="procurement--view">
                                            จำนวนผู้เข้าชม 35 คน
                                        </p>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td>
                                        <i class="icon-edit"></i>
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารประกวดราคา">เอกสารประกวดราคา</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td class="text-start">
                                        <p class="procurement--order">
                                            รฟ.ยธ.1530/9/คล.02/2565
                                        </p>
                                    </td>
                                    <td class="text-start">
                                        <a href="/procurement-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procurement--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                        <p class="procurement--view">
                                            จำนวนผู้เข้าชม 35 คน
                                        </p>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td>
                                        <i class="icon-cancel-circle"></i>
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารประกวดราคา">เอกสารประกวดราคา</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td class="text-start">
                                        <p class="procurement--order">
                                            รฟ.ยธ.1530/9/คล.02/2565
                                        </p>
                                    </td>
                                    <td class="text-start">
                                        <a href="/procurement-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procurement--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                        <p class="procurement--view">
                                            จำนวนผู้เข้าชม 35 คน
                                        </p>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td>
                                        <i class="icon-user-circle"></i>
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารประกวดราคา">เอกสารประกวดราคา</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td class="text-start">
                                        <p class="procurement--order">
                                            รฟ.ยธ.1530/9/คล.02/2565
                                        </p>
                                    </td>
                                    <td class="text-start">
                                        <a href="/procurement-detail" title="จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก" class="procurement--name">
                                            จ้างเหมาซ่อมเครื่องยนต์ GM รุ่น 6V71T รถ อน.7 (สบน.กท.) ศูนย์การผลิตและซ่อมบำรุง ฝ่ายการช่างโยธา จำนวน 1 เครื่อง โดยวิธีคัดเลือก
                                        </a>
                                        <p class="procurement--view">
                                            จำนวนผู้เข้าชม 35 คน
                                        </p>
                                    </td>
                                    <td>
                                        26/04/2565
                                    </td>
                                    <td>
                                        <i class="icon-user-circle"></i>
                                    </td>
                                    <td class="text-start">
                                        <ul class="list--primary">
                                            <li>
                                                <a href="#nogo" title="เอกสารประกวดราคา">เอกสารประกวดราคา</a>
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

    <script>
        const scrollContainer = document.querySelector(".table--primary");

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
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