@extends('masterpage')

@section('title', 'Lost & Found')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-desktop.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <h2 class="slider__title">
                                รถไฟฟ้าสายสีแดง
                            </h2>
                            <h3 class="slider__text">
                                ยกระดับคุณภาพชีวิตชานเมือง
                            </h3>
                        </div>
                    </a>
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-desktop.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                        <div class="slider__content">
                            <h2 class="slider__title">
                                รถไฟฟ้าสายสีแดง
                            </h2>
                            <h3 class="slider__text">
                                ยกระดับคุณภาพชีวิตชานเมือง
                            </h3>
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
                        <li class="breadcrumb-item"><a href="#">ข่าวสารและกิจกรรม</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lost & Found</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="news--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">Lost & Found</h2>
                </div>

                <div class="form-group-wrapper">
                    <form action="">
                        <div class="form-group--section">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">หมวดข่าว</option>
                                            <option value="" >ข่าวสารประชาสัมพันธ์ทั่วไป</option>
                                            <option value="">ข่าวจากศูนย์</option> 
                                        </select>
                                        <label class="did-floating-label">หมวดข่าว</label>
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
                        </div>
                    </form>
                    
                </div>
                

                <div class="card-deck">
                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__highlight">
                            <div class="card__pin">New</div>
                            <div class="card__pin"><i class="bi bi-pin-angle-fill"></i></div>
                        </div>
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">6 เมษายน 2565</div>
                            <div class="card__title">
                                พบกับงานงานสัปดาห์หนังสือแห่งชาติครั้งที่ 50
                            </div>
                        </div>
                    </a>
                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">5 เมษายน 2565</div>
                            <div class="card__title">
                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                            </div>
                        </div>
                    </a>
                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">2 เมษายน 2565</div>
                            <div class="card__title">
                                ข้อปฏิบัติของผู้ป่วยโควิด เมื่อแยกกักตัวที่บ้าน
                            </div>
                        </div>
                    </a>
                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news4.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">1 เมษายน 2565</div>
                            <div class="card__title">
                                7 ขั้นตอนควรทำ เมื่อตรวจ ATK ขึ้น 2 ขีด
                            </div>
                        </div>
                    </a>

                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__pin">New</div>
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">6 เมษายน 2565</div>
                            <div class="card__title">
                                พบกับงานงานสัปดาห์หนังสือแห่งชาติครั้งที่ 50
                            </div>
                        </div>
                    </a>
                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">5 เมษายน 2565</div>
                            <div class="card__title">
                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                            </div>
                        </div>
                    </a>
                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">2 เมษายน 2565</div>
                            <div class="card__title">
                                ข้อปฏิบัติของผู้ป่วยโควิด เมื่อแยกกักตัวที่บ้าน
                            </div>
                        </div>
                    </a>
                    <a href="/lostfound-detail" class="card card--news">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news4.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">1 เมษายน 2565</div>
                            <div class="card__title">
                                7 ขั้นตอนควรทำ เมื่อตรวจ ATK ขึ้น 2 ขีด
                            </div>
                        </div>
                    </a>
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

                    //$("#end_date").val('');
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
        
            $('#end_date').datepicker({
                maxDate: 0,
                onSelect: function () {
                    if($(this).val() != ''){
                        $(this).parent().addClass('has-data');
                    } else {
                        $(this).parent().removeClass('has-data');
                    }
                },
            });
            $("#end_date").datepicker( $.datepicker.regional["th"] );
            //$("#start_date").datepicker( "setDate", new Date());
        });
        
    </script>

@endpush
