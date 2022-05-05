@extends('masterpage')

@section('title', 'คำนวณค่าโดยสารและเวลาเดินทาง')
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
                </div>
            </div>
        </article>

        <div class="breadcrumb--wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="#">กำหนดเวลาเดินรถ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">คำนวณค่าโดยสารและเวลาเดินทาง</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">คำนวณค่าโดยสารและเวลาเดินทาง</h2>
                </div>

                <div class="form-filter">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>สถานีต้นทาง</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>สถานีปลายทาง</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>    
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls icon icon__date">
                                <input type="text" class="form-control end-date" placeholder="วันที่เดินทาง">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <button type="button" class="btn btn--primary"><span>คำนวณ</span></button>
                        </div>
                    </div>
                </div>

                <div class="calculated--wrapper">
                    <div class="station--route">
                        
                        <div class="route--box">
                            <div class="box--info">
                                <span>ราคา :</span> 27 บาท
                            </div>

                            <ol class="route--info">
                                <li class="route--step">
                                    <a href="#nogo" class="step__point"></a>
                                    <span class="step__label">บางซื่อ</span>
                                </li>
                                <li class="route--step">
                                    <a href="#nogo" class="step__point--end"></a>
                                    <span class="step__label">หลักสี่</span>
                                </li>
                            </ol>

                            <div class="box--info__time">
                                <span>เวลาเดินทางโดยประมาณ :</span> 12 นาที
                            </div>
                        </div>

                        <div class="remark--route">
                            <div class="remark__left">
                                <span>*</span>คลิก <span class="point"></span> เพื่อดูรายละเอียดสถานี
                            </div>
                            <div class="remark__right">
                                อัตราค่าโดยสารคิดตามระยะทาง กิโลเมตรละ 1.50 บาท
                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive table--primary">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        ประเภทบัตรโดยสาร
                                    </th>
                                    <th>
                                        บุคคลทั่วไป
                                    </th>
                                    <th>
                                        นักเรียน นักศึกษา
                                    </th>
                                    <th>
                                        ผู้สูงอายุ
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        บัตรโดยสาร
                                    </th>
                                    <td>
                                        27 บาท
                                    </td>
                                    <td>
                                        24 บาท
                                    </td>
                                    <td>
                                        13 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        เหรียญโดยสาร
                                    </th>
                                    <td>
                                        27 บาท
                                    </td>
                                    <td>
                                        24 บาท
                                    </td>
                                    <td>
                                        13 บาท
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="remark">
                            <p><span>*</span> ซื้อเหรียญโดยสารได้ที่ ตู้จำหน่ายตั๋วอัตโนมัติและห้องจำหน่ายตั๋วโดยสาร</p>
                            <p><span>*</span> ซื้อบัตรโดยสารเติมเงินได้ที่ห้องจำหน่ายตั๋วโดยสาร</p>
                        </div>
                    </div>

                    <div class="accordion accordion--white" id="accordionTimeTable">
                        <div data-bs-toggle="collapse" data-bs-target="#collapse--time" aria-expanded="true" aria-controls="collapse--time" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            เวลาออก
                        </div>
                        <div id="collapse--time" class="accordion-collapse collapse show" aria-labelledby="collapse--time" data-bs-parent="#accordionTimeTable">
                            
                            <div class="table-responsive table--time">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ชั่วโมง</th>
                                            <th colspan="6">นาที</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                30
                                            </td>
                                            <td>
                                                50
                                            </td>
                                            <td>
                                            
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                6
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                            34
                                            </td>
                                            <td>
                                                47
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                7
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                8
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                9
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                42
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                11
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                13
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                14
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                15
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                16
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                            34
                                            </td>
                                            <td>
                                                47
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                17
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                18
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                19
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                42
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                20
                                            </td>
                                            <td>
                                            40
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                21
                                            </td>
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                            34
                                            </td>
                                            <td>
                                                47
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                22
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                23
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                36
                                            </td>
                                            <td>
                                                48
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                00
                                            </td>
                                            <td>
                                                12
                                            </td>
                                            <td>
                                            24
                                            </td>
                                            <td>
                                                42
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href="#nogo" class="btn btn--primary">
                                <span>กำหนดเวลาเดินรถ</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="container">
                <div class="row row-cols-1 row-cols-md-2 justify-content-between">
                    <div class="col">
                        <div class="view--count">
                            จำนวนผู้เข้าชม : <span>39068</span> คน
                        </div>
                    </div>
                    <div class="col">
                        <div class="social--block">
                            <span>แชร์ :</span>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/facebook.svg')}}" alt="facebook">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/twitter.svg')}}" alt="twitter">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/instagram.svg')}}" alt="instagram">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/youtube.svg')}}" alt="youtube">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/tiktok.svg')}}" alt="tiktok">
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </article>

        <!-- include html services -->
        @include('include._services')
    </main>

    <script>
        const scrollContainer = document.querySelector(".table--time");

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
