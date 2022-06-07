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
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">เดือน</option>
                                            <option value="" >มกราคม</option>
                                            <option value="">กุมภาพันธ์</option>
                                            <option value="" >มีนาคม</option>
                                            <option value="">เมษายน</option>
                                            <option value="" >พฤษภาคม</option>
                                            <option value="">มิถุนายน</option>
                                            <option value="" >กรกฎาคม</option>
                                            <option value="">สิงหาคม</option>
                                            <option value="" >กันยายน</option>
                                            <option value="">ตุลาคม</option>
                                            <option value="" >พฤศจิกายน</option>
                                            <option value="">ธันวาคม</option>
                                        </select>
                                        <label class="did-floating-label">เดือน</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">วันที่</option>
                                            <option value="" >2565</option>
                                            <option value="">2564</option>
                                            <option value="" >2563</option>
                                            <option value="">2562</option>
                                        </select>
                                        <label class="did-floating-label">วันที่</label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>

                <div class="calendar-wrapper">
                    <div id="calendar_inline"></div>

                    <div class="activity--date">กิจกรรมประจำวันที่ <span class="date">27 พฤษภาคม 2565</span> : <span class="count">4 กิจกรรม</span></div>
                </div>




                <div class="body--content">
                    <!-- <div class="content__gallery">
                        <div class="gallery__for">
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="gallery__nav">
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news2.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="text--editor">
                        <div class="ck-content">
                            <p>
                                <span style="color: #BC1320"><strong>พบกับงานงานสัปดาห์หนังสือแห่งชาติครั้งที่ 50ฯ และสัปดาห์หนังสือนานาชาติ ครั้งที่ 20</strong></span>
                            </p>
                            
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>
                            พบกับกิจกรรมที่น่าสนใจในงานตลอด 12 วัน นอกจากหนังสือหลากหลายสำนักพิมพ์ 
                            และนิทรรศการให้ผู้ร่วมงานสัมผัสประสบการณ์ความรู้หลากหลายรูปแบบ สำหรับแฟนๆหนังสือ #ห้ามพลาด!!! ชวนเพื่อนๆมาเดินเลือกชมเลือกซื้อหนังสือน่าอ่าน กิจกรรมสนุกๆแต่ละบูธ นิทรรศการ และกิจกรรมต่างๆมากมายบนเวที... บนพื้นที่กว้างขวาง เดินทางสะดวก ไม่แออัด ณ สถานีกลางบางซื่อ
                            <br><br>


                            <figure class="media">
                                <div data-oembed-url="https://www.youtube.com/embed/K5Wjgku8vik">
                                    <div style="position: relative; padding-bottom: 100%; height: 0; padding-bottom: 56.2493%;">
                                        <iframe src="https://www.youtube.com/embed/K5Wjgku8vik" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div> -->

                    <div class="text--editor">
                        <div class="ck-content">
                            <figure class="image image_resized image-style-align-left" style="width: 26.19%;">
                                <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                                <figcaption>แผนที่ ทดสอบ</figcaption>
                            </figure>
                            <h3><strong>จุดเชื่อมต่อ</strong></h3>
                            <ul>
                                <li>ประตู 1 : สถานีขนส่ง บขส. , MRT บางซื่อ</li>
                                <li>ประตู 2 : SCG สำนักงานใหญ่</li>
                                <li>ประตู 3 : BTS จตุจักร , ตลาดนัดจตุจักร</li>
                                <li>ประตู 1 : สถานีขนส่ง บขส. , MRT บางซื่อ</li>
                            </ul>
                            <p>
                                asdf asdf Ipsum consetetur aliquam stet eirmod takimata accusam no sed vero dolor sed eos diam diam no commodo eu. Lorem dolore clita stet ut sea accusam diam et et sit voluptua et ea gubergren enim. Et est dolores praesent. Erat enim
                                rebum takimata quod duis liber voluptua dignissim. Ipsum sit elitr labore erat. Stet est dolores erat duis facilisi quis ipsum. Kasd clita nulla eirmod mazim sadipscing
                            </p>
                            <figure class="image image_resized image-style-align-right" style="width: 32.94%;">
                                <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="">
                                <figcaption></figcaption>
                            </figure>
                            <p>&nbsp;et aliquip rebum consequat est dolore nulla vel sed. Veniam amet commodo eos rebum nisl voluptua velit consetetur augue sit amet ut nonumy&nbsp;</p>
                            <p>
                                et. Gubergren consectetuer et amet sed. Sed ipsum molestie iriure diam dolore vero lorem sadipscing et eos et et et et in voluptua lorem. Eirmod nonumy sed sadipscing lorem sed voluptua rebum lorem sit hendrerit amet. Erat odio et sea
                                consectetuer blandit iriure facilisis et amet consequat sed nulla nobis qui amet. Suscipit at stet sed justo est amet nihil. &nbsp;Dolor et dolor duo dolor placerat. Sadipscing ut amet sed sea et gubergren et in exerci. Et in amet diam
                                rebum ipsum at et invidunt elit nonumy luptatum iusto aliquyam stet duo. Dolore rebum clita. Tempor rebum et eirmod lorem rebum zzril volutpat. Ipsum consetetur aliquam stet eirmod takimata accusam no sed vero dolor sed eos diam diam no
                                commodo eu. Lorem dolore clita stet ut sea accusam diam et et sit voluptua et ea gubergren enim. Et est dolores praesent. Erat enim rebum takimata quod duis liber voluptua dignissim. Ipsum sit elitr labore erat. Stet est dolores erat
                                duis facilisi quis ipsum. Kasd clita nulla eirmod mazim sadipscing et aliquip rebum consequat est dolore nulla vel sed. Veniam amet commodo eos rebum nisl voluptua velit consetetur augue sit amet ut nonumy et. Gubergren consectetuer et
                                amet sed. Sed ipsum molestie iriure diam dolore vero lorem sadipscing et eos et et et et in voluptua lorem. Eirmod nonumy sed sadipscing lorem sed voluptua rebum lorem sit hendrerit amet. Erat odio et sea consectetuer blandit iriure
                                facilisis et amet consequat sed nulla nobis qui amet. Suscipit at stet sed justo est amet nihil. &nbsp;Dolor et dolor duo dolor placerat. Sadipscing ut amet sed sea et gubergren et in exerci.&nbsp;
                            </p>
                            <p>Et in amet diam rebum ipsum at et invidunt elit nonumy luptatum iusto aliquyam stet duo. Dolore rebum clita. Tempor rebum et eirmod lorem rebum zzril volutpat.</p>

                        </div>
                    </div>
                </div>
            
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

            let getYear = $('.ui-datepicker-month').text();
            console.log(getYear);

            $('#calendar_inline').datepicker({
                //maxDate: 0,
                inline: true,
            });
            $("#calendar_inline").datepicker( $.datepicker.regional["th"] );
        });
        
    </script>

@endpush