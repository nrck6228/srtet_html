@extends('masterpage')

@section('title', 'วิสัยทัศน์และพันธกิจ')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

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
                        <li class="breadcrumb-item"><a href="#">เกี่ยวกับเรา</a></li>
                        <li class="breadcrumb-item active" aria-current="page">วิสัยทัศน์และพันธกิจ</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">วิสัยทัศน์และพันธกิจ</h2>
                </div>

                <div class="text--editor">
                    <div class="ck-content">
                        <figure class="image" style="float: left; width: 640px; margin-right: 15px;">
                            <img src="{{ asset('assets/images/about/history/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </figure>
                        <p>
                            รอยทางจาก “กรมรถไฟ” สู่... “แอร์พอร์ต เรล ลิงค์” เป็นเวลากว่าหนึ่งศตวรรษที่กิจการรถไฟในประเทศไทยถือกำเนิดขึ้นด้วยพระมหากรุณาธิคุณในพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว รัชกาลที่ 5 ด้วยทรงมีพระราชวิสัยทัศน์ที่กว้างไกลว่าการคมนาคมขนส่งภายในราชอาณาจักรโดยเส้นทางรถไฟนั้น นอกจาก จะเป็นประโยชน์ต่อราษฎรและเศรษฐกิจของประเทศแล้ว ยังเป็นการเพิ่มศักยภาพในการบำรุงรักษาราชอาณาเขต เพื่อให้สะดวกแก่การปกครองและตรวจตรา การบริหารราชการแผ่นดินในมณฑลที่อยู่ห่างไกล ทั้งนี้ เพื่อเป็นการรับมือกับการขยายอาณานิคมของต่างชาติมายังภูมิภาคนี้ 
                            <br>
                            <br>
                            ในเดือนตุลาคม พ.ศ. 2433 พระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว ทรงพระกรุณาโปรดเกล้าฯ ให้สถาปนากรมรถไฟขึ้นเป็นครั้งแรกในสังกัดกระทรวงโยธาธิการ กระทั่งในวันที่ 26 มีนาคม พ.ศ.2439 พระองค์ได้เสด็จฯ ทรงเปิดการเดินรถไฟสายกรุงเทพ-นครราชสีมา เส้นทางรถไฟสายแรกของสยามประเทศ การรถไฟแห่งประเทศไทยจึงถือเอาวันที่ 26 มีนาคมของทุกปี เป็นวันคล้ายวันสถาปนากิจการรถไฟจนถึงปัจจุบัน นับตั้งแต่แรกสถาปนากิจการรถไฟในปี 2439 จนสิ้นรัชกาลที่ 5 ในปี พ.ศ.2453 มีทางรถไฟเปิดใช้แล้วทั้งสิ้น 932 กิโลเมตร และได้มีดำเนินการก่อสร้างขยายเส้นทางไปยังสายเหนือและใต้ในเวลาต่อมา
                            <br>
                            <br>
                            พระองค์ได้เสด็จฯ ทรงเปิดการเดินรถไฟสายกรุงเทพ-นครราชสีมา เส้นทางรถไฟสายแรกของสยามประเทศ การรถไฟแห่งประเทศไทยจึงถือเอาวันที่ 26 มีนาคมของทุกปี เป็นวันคล้ายวันสถาปนากิจการรถไฟจนถึงปัจจุบัน นับตั้งแต่แรกสถาปนากิจการรถไฟในปี 2439 จนสิ้นรัชกาลที่ 5 ในปี พ.ศ.2453 มีทางรถไฟเปิดใช้แล้วทั้งสิ้น 932 กิโลเมตร และได้มีดำเนินการก่อสร้างขยายเส้นทางไปยังสายเหนือและใต้ในเวลาต่อมา
                        </p>

                        <p>
                            ในรัชสมัยของพระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว รัชกาลที่ 6 พระองค์ทรงมีพระบรมราชโองการโปรดเกล้าฯ ให้เปลี่ยนชื่อจาก “กรมรถไฟ”เป็น “กรมรถไฟหลวง” และทรงพระกรุณาโปรดเกล้าฯ ให้ พระเจ้าน้องยาเธอ กรมพระกำแพงเพชรอัครโยธิน ดำรงตำแหน่งผู้บัญชาการกรมรถไฟหลวงเป็นพระองค์แรกในรัชสมัยของพระองค์มีเส้นทางรถไฟที่เปิดใช้ทั้งหมด 2,518 กิโลเมตร อย่างไรก็ตาม เมื่อประเทศไทยตกอยู่ในภาวะสงครามโลกครั้งที่ 1 และ ครั้งที่ 2 เส้นทางรถไฟได้รับความเสียหายอย่างหนัก และการขยายรางสร้างเส้นทางเพิ่มก็เป็นไปอย่างล่าช้า โดยมีเส้นทางรถไฟที่สร้างเพิ่มขึ้นรวมกันในสมัยรัชกาลที่ 7 และ รัชกาลที่ 8 เพียง 677 กิโลเมตร
                        </p>

                        <figure class="table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <figure class="image">
                                                <img src="{{ asset('assets/images/about/history/img-demo-02.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                            </figure>
                                        </td>
                                        <td>
                                            <figure class="image">
                                                <img src="{{ asset('assets/images/about/history/img-demo-03.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                            </figure>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </figure>
                    </div>
                </div>
            </div>

            @include('include._social')
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
