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
