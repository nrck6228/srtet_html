@extends('masterpage')

@section('title', 'การออกตั๋วโดยสาร')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                        <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-route.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item active" aria-current="page">การออกตั๋วโดยสาร</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">การออกตั๋วโดยสาร</h2>
                </div>

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="content__figure">
                            <img class="w-100" src="{{ asset('assets/images/schedule/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                        </div>
                    </div>
                    <div class="col">
                        <div class="content__text">
                            <h3>วิธีการออกเหรียญโดยสาร โดยตู้จำหน่ายตั๋วโดยสาร</h3>
                            <p>
                                วิธีการซื้อเหรียญทำได้ง่ายๆ เพียงเลือกสถานีปลายทาง เครื่องจะคำนวณค่าโดยสารตามระยะทาง หากเป็นรถไฟสายท่าอากาศยานสุวรรณภูมิ หรือ CITY LINE ค่าโดยสารเริ่มต้นที่ ประมาณ 15 บาท สูงสุด 45 บาท 
                                เมื่อจ่ายค่าโดยสารตามกำหนด เครื่องจะออกเหรียญโดยสารสำหรับผ่านประตู เพื่อเข้าสู่ชานชาลา การออกเหรียญโดยสาร หรือ Token เหมาะสำหรับผู้โดยสารที่ต้องการเดินทางเที่ยวเดียวภายใน 1 วัน เริ่มจากเลือกสถานีปลายทาง 
                                หลังจากนั้นเลือกจำนวน Token (สูงสุดได้ 5 เหรียญต่อการทำรายการ 1 ครั้ง) เมื่อเลือกจำนวนได้แล้วให้ชำระเงินตามมูลค่าที่แสดงบนหน้าจอ เตรียมรับ Token เพื่อใช้งานได้ทันที</p>
                            <br>
                            <br>
                            <h3>วิธีการเติมเงินบัตรโดยสาร โดยตู้จำหน่ายตั๋วโดยสาร</h3>
                            <p>
                                สำหรับขั้นตอนการเติมเงินบัตรโดยสาร เพียงแค่นำบัตร Smart pass วางบริเวณช่องรับบัตรโดยสาร หน้าจอจะแสดงมูลค่าคงเหลือภายในบัตร หากท่านต้องการเติมเงิน ให้เลือกที่ช่อง Add Value และชำระเงินโดยธนบัตรเท่านั้น โดยกำหนดการเติมเงินขั้นต่ำที่ 20 บาท สูงสุดไม่เกิน 3,000 บาท (รวมวงเงินในบัตร) เครื่องจะรับธนบัตรใบละ 20,50,100 หรือ 500 เท่านั้น และจะไม่มีการทอนเงิน เมื่อทำรายการเรียบร้อย ให้กดยืนยันในการทำรายการ และนำบัตรโดยสารออกจากช่องรับบัตรโดยสาร</p>
                            <br>
                            <br>
                            <h3>วิธีการเติมเงินบัตรโดยสาร (โดยพนักงานจำหน่ายตั๋วโดยสาร)</h3>
                            <p>
                                สำหรับขั้นตอนการเติมเงินบัตรโดยสาร เพียงนำบัตร Smart pass แสดงต่อเจ้าหน้าจำหน่ายตั๋วโดยสาร และชำระค่าเติมเงินขั้นต่ำ 100 บาท สูงสุดไม่เกิน 3,000 บาท (รวมวงเงินในบัตร) หากท่านต้องการใบเสร็จ สามารถแจ้งต่อพนักงานได้ทุกสถานี
                            </p>
                            <br>
                            <br>
                            <h3>การตรวจสอบมูลค่าคงเหลือในบัตร</h3>
                            <p>
                                นอกจากนี้ตู้จำหน่ายตั๋วโดยสารอัตโนมัติ ยังสามารถตรวจสอบมูลค่าคงเหลือและประวัติย้อนหลังได้ เพียงผู้โดยสารวางบัตร Smart Passไว้ที่ช่องรับบัตรโดยสาร กดเลือกที่ Card History หน้าจอจะแสดงผลข้อมูลการเดินทาง 6 รายการย้อนหลัง
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @include('include._social')
        </article>

        @include('include._services')
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
