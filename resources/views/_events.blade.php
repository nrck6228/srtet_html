@extends('masterpage')

@section('title', 'ปฎิทิน')
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
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">ปฎิทินกิจกรรม</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="news--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">ปฏิทินกิจกรรม</h2>
                </div>

                <div class="form-group-wrapper">
                    <form action="">
                        <div class="form-group--section">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example" id="slc_months">
                                            <!-- <option selected="true" value="title">เดือน</option> -->
                                            <option value="1" >มกราคม</option>
                                            <option value="2">กุมภาพันธ์</option>
                                            <option value="3" >มีนาคม</option>
                                            <option value="4">เมษายน</option>
                                            <option value="5" >พฤษภาคม</option>
                                            <option value="6">มิถุนายน</option>
                                            <option value="7" >กรกฎาคม</option>
                                            <option value="8">สิงหาคม</option>
                                            <option value="9">กันยายน</option>
                                            <option value="10">ตุลาคม</option>
                                            <option value="11" >พฤศจิกายน</option>
                                            <option value="12">ธันวาคม</option>
                                        </select>
                                        <!-- <label class="did-floating-label">เดือน</label> -->
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example" id="slc_years">
                                            <option value="2565">2565</option>
                                            <option value="2564">2564</option>
                                            <option value="2563">2563</option>
                                            <option value="2562">2562</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>

                <div class="event--wrapper">
                    <div id="event_inline"></div>

                    <div class="activity--date">กิจกรรมประจำวันที่ <span class="date">27 พฤษภาคม 2565</span> : <span class="count">4 กิจกรรม</span></div>
                </div>


                <div class="activity--wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <a href="/events-detail" class="card card--event">
                                <div class="row g-0">
                                    <div class="col-xl-4 col-lg-3 col-md-4">
                                        <div class="card__figure">
                                            <img class="img-fluid" src="{{ asset('assets/images/events/demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-8">
                                        <div class="card__body">
                                            <div class="card__date">6 เมษายน 2565</div>
                                            <div class="card__name">สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์</div>
                                            <div class="card__desc">
                                                พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <a href="/events-detail" class="card card--event">
                                <div class="row g-0">
                                    <div class="col-xl-4 col-lg-3 col-md-4">
                                        <div class="card__figure">
                                            <img class="img-fluid" src="{{ asset('assets/images/events/demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-8">
                                        <div class="card__body">
                                            <div class="card__date">6 เมษายน 2565</div>
                                            <div class="card__name">สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์</div>
                                            <div class="card__desc">
                                                พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-6 col-lg-12">
                            <a href="/events-detail" class="card card--event">
                                <div class="row g-0">
                                    <div class="col-xl-4 col-lg-3 col-md-4">
                                        <div class="card__figure">
                                            <img class="img-fluid" src="{{ asset('assets/images/events/demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-8">
                                        <div class="card__body">
                                            <div class="card__date">6 เมษายน 2565</div>
                                            <div class="card__name">สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์</div>
                                            <div class="card__desc">
                                                พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <a href="/events-detail" class="card card--event">
                                <div class="row g-0">
                                    <div class="col-xl-4 col-lg-3 col-md-4">
                                        <div class="card__figure">
                                            <img class="img-fluid" src="{{ asset('assets/images/events/demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-8">
                                        <div class="card__body">
                                            <div class="card__date">6 เมษายน 2565</div>
                                            <div class="card__name">สวัสดีปีใหม่ไทยผู้โดยสารเนื่องในโอกาสเทศกาลสงกรานต์</div>
                                            <div class="card__desc">
                                                พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
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
            format: 'mm/yyyy',
            changeMonth: false,
            changeYear: false,
            dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
            monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            //monthNamesShort: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
            constrainInput: true,
            yearOffSet : 543,
            //yearRange: '-80:+0',
        };
        $.datepicker.setDefaults($.datepicker.regional['th']);
        //EN
        // $.datepicker.regional['en'] ={
        //     dateFormat: 'dd/mm/yy',
        //     changeMonth: false,
        //     changeYear: false,
        //     constrainInput: true,
        //     yearOffSet : 0,
        // };
        // $.datepicker.setDefaults($.datepicker.regional['en']);

        var dates = ['2022-09-24','2022-09-23','2022-09-02',];


        $(document).ready(function () {

            $('#event_inline').datepicker({
                //maxDate: 0,
                //inline: true,
                //updateViewDate: true,
                //defaultViewDate: {year: '2014'},
                beforeShowDay: function (date) {    
                    var y = date.getFullYear().toString();
                    var m = (date.getMonth() + 1).toString();
                    var d = date.getDate().toString();
                    if (m.length == 1) { m = '0' + m; }
                    if (d.length == 1) { d = '0' + d; }
                    var currDate = y + '-' + m + '-' + d;
                    if (dates.indexOf(currDate) >= 0) {
                        return [true, "highlight"];
                    } else {
                        return [true];
                    }
                },

            });
            $("#event_inline").datepicker( $.datepicker.regional["th"] );
 

            // var year = parseInt($(".ui-datepicker-year").text());
            // var numTH = 543;
            // var yearTH = year + numTH;
            // console.log(yearTH);

            //$(".ui-datepicker-year").text(yearTH)

            var date = $("#event_inline").datepicker('getDate');
            // alert(date.getDate());         // Day of the month
            // alert(date.getMonth()+1);        // Month with a zero index
            // alert(date.getDay());          // Day of the week
            // alert(date.getFullYear());

            var m = date.getMonth()+1;
            var y = date.getFullYear()+543;
            console.log(m, y);
            
            $('#slc_months').val(m);
            $('#slc_years').val(y);

            $('#slc_months').change(function(){
                var log_val = $(this).val();
                console.log(log_val);
                
                date.setMonth(log_val-1);
            });
            
        });

        
        

        
    </script>

@endpush