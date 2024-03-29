@extends('masterpage')

@section('title', 'ข่าวสารและกิจกรรม')
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
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-desktop.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item"><a href="#">ข่าวสาร</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content news--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">ให้หนังสือพาคุณเดินทางสู่อนาคต ที่ใกล้ตากว่าที่คิด</h2>
                </div>

                <div class="head--content">
                    <div class="text text__date">วันที่ : 6 เมษายน 2565</div>
                    <div class="text text__source">ที่มา : Facebook RED Line SRTET</div>
                </div>

                <div class="body--content">
                    <div class="content__gallery">
                        <div class="gallery__for">
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/23.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/24.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/26.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/22.jpg" alt="">
                            </div>
                        </div>
                        <div class="gallery__nav">
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/23.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/24.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/26.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="http://49.231.166.164/upload_fm/SMB Marketing/ภาพกิจกรรมวันแม่แห่งชาติ 65/วันแม่ 65/22.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="text--editor text--editor__clear">
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
                    </div>

                    <!-- <div class="text--editor text--editor__clear">
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
                    </div> -->
                </div>
            </div>
        </article>

        <article class="page--content">
            <div class="container">
                @include('include._social')
            </div>
        </article>

        <article class="page--content">
            <div class="container">
                <div class="related--content">
                    <div class="title--page">
                        <h2 class="page__title">
                            ข่าวสารอื่นๆ
                        </h2>
                    </div>
                    <div class="card-deck card-deck--cards-sm-2 card-deck--cards-md-2 card-deck--cards-lg-4">
                        <a href="/news-detail" class="card card--news">
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
                        <a href="/news-detail" class="card card--news">
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
                        <a href="/news-detail" class="card card--news">
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
                        <a href="/news-detail" class="card card--news">
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

    <script>
         $('.gallery__for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            fade: true,
            asNavFor: '.gallery__nav'
        });
        $('.gallery__nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.gallery__for',
            dots: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ],
        });
    </script>
@endpush