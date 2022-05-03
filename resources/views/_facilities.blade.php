@extends('masterpage')

@section('title', 'สิ่งอำนวยความสะดวก')
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
                        <li class="breadcrumb-item"><a href="#">บริการลูกค้า</a></li>
                        <li class="breadcrumb-item active" aria-current="page">สิ่งอำนวยความสะดวก</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">สิ่งอำนวยความสะดวก</h2>
                </div>

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="content__figure">
                            <img class="w-100" src="{{ asset('assets/images/services/facilities/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                    </div>
                    <div class="col">
                        <div class="content__text">
                            <h3>ตู้จำหน่ายเหรียญโดยสารอัตโนมัติ</h3>
                            <p>
                                จำหน่ายเหรียญโดยสารอัตโนมัติ ให้บริการจำหน่ายเหรียญโดยสารแบบเที่ยว เดียว และมีการให้บริการเติมเงินสำหรับบัตรโดยสารด้วยทั้งนี้ ตู้จำหน่ายเหรียญ โดยสารนั้น ผู้โดยสารสามารถ เลือกจุดหมายปลายทาง และระบุจำนวนผู้โดยสาร โดยเครื่องจะคำนวณราคาให้อัตโนมัติ เมื่อชำระเงินเรียบร้อยเครื่องจะออกเหรียญโดยสาร พร้อมทั้งทอนเงินให้ด้วย
                            </p>
                            <p>
                                ค่าโดยสารสำหรับรถไฟ CITY LINE เริ่มต้นที่ ราคา 15-45 บาท ในขณะ ที่ค่าโดยสารสำหรับรถไฟ EXPRESS LINE ราคา 90 บาท
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col order-md-last">
                        <div class="content__figure">
                            <img class="w-100" src="{{ asset('assets/images/services/facilities/img-demo-02.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                    </div>
                    <div class="col">
                        <div class="content__text">
                            <h3>ตู้จำหน่ายเหรียญโดยสารอัตโนมัติ</h3>
                            <p>
                                จำหน่ายเหรียญโดยสารอัตโนมัติ ให้บริการจำหน่ายเหรียญโดยสารแบบเที่ยว เดียว และมีการให้บริการเติมเงินสำหรับบัตรโดยสารด้วยทั้งนี้ ตู้จำหน่ายเหรียญ โดยสารนั้น ผู้โดยสารสามารถ เลือกจุดหมายปลายทาง และระบุจำนวนผู้โดยสาร โดยเครื่องจะคำนวณราคาให้อัตโนมัติ เมื่อชำระเงินเรียบร้อยเครื่องจะออกเหรียญโดยสาร พร้อมทั้งทอนเงินให้ด้วย
                            </p>
                            <p>
                                ค่าโดยสารสำหรับรถไฟ CITY LINE เริ่มต้นที่ ราคา 15-45 บาท ในขณะ ที่ค่าโดยสารสำหรับรถไฟ EXPRESS LINE ราคา 90 บาท
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="content__figure">
                            <img class="w-100" src="{{ asset('assets/images/services/facilities/img-demo-03.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                    </div>
                    <div class="col">
                        <div class="content__text">
                            <h3>ตู้จำหน่ายเหรียญโดยสารอัตโนมัติ</h3>
                            <p>
                                จำหน่ายเหรียญโดยสารอัตโนมัติ ให้บริการจำหน่ายเหรียญโดยสารแบบเที่ยว เดียว และมีการให้บริการเติมเงินสำหรับบัตรโดยสารด้วยทั้งนี้ ตู้จำหน่ายเหรียญ โดยสารนั้น ผู้โดยสารสามารถ เลือกจุดหมายปลายทาง และระบุจำนวนผู้โดยสาร โดยเครื่องจะคำนวณราคาให้อัตโนมัติ เมื่อชำระเงินเรียบร้อยเครื่องจะออกเหรียญโดยสาร พร้อมทั้งทอนเงินให้ด้วย
                            </p>
                            <p>
                                ค่าโดยสารสำหรับรถไฟ CITY LINE เริ่มต้นที่ ราคา 15-45 บาท ในขณะ ที่ค่าโดยสารสำหรับรถไฟ EXPRESS LINE ราคา 90 บาท
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col order-md-last">
                        <div class="content__figure">
                            <img class="w-100" src="{{ asset('assets/images/services/facilities/img-demo-04.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                    </div>
                    <div class="col">
                        <div class="content__text">
                            <h3>ตู้จำหน่ายเหรียญโดยสารอัตโนมัติ</h3>
                            <p>
                                จำหน่ายเหรียญโดยสารอัตโนมัติ ให้บริการจำหน่ายเหรียญโดยสารแบบเที่ยว เดียว และมีการให้บริการเติมเงินสำหรับบัตรโดยสารด้วยทั้งนี้ ตู้จำหน่ายเหรียญ โดยสารนั้น ผู้โดยสารสามารถ เลือกจุดหมายปลายทาง และระบุจำนวนผู้โดยสาร โดยเครื่องจะคำนวณราคาให้อัตโนมัติ เมื่อชำระเงินเรียบร้อยเครื่องจะออกเหรียญโดยสาร พร้อมทั้งทอนเงินให้ด้วย
                            </p>
                            <p>
                                ค่าโดยสารสำหรับรถไฟ CITY LINE เริ่มต้นที่ ราคา 15-45 บาท ในขณะ ที่ค่าโดยสารสำหรับรถไฟ EXPRESS LINE ราคา 90 บาท
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
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