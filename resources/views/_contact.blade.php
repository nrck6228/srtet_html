@extends('masterpage')

@section('title', 'ติดต่อเรา')
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
                    <li class="breadcrumb-item"><a href="#">ติดต่อ SRTET</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ติดต่อสอบถาม</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="contact--wrapper">
        <div class="container">
            <div class="title--page justify-content-center">
                <h2 class="page__title text--primary">ติดต่อสอบถาม</h2>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <div class="list-address-contact">
                        <div class="icon-list">
                            <i class="bi bi-building"></i>
                        </div>
                        <p>
                            สำนักงานใหญ่ : บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด สถานีกลางบางซื่อ เลขที่ 10 ถนนกำแพงเพชร แขวงจตุจักร เขตจตุจักร กรุงเทพฯ 10900
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="list-address-contact">
                        <div class="icon-list">
                            <i class="bi bi-wrench-adjustable-circle"></i>
                        </div>
                        <p>
                            ศูนย์ซ่อมบำรุง : ศูนย์ซ่อมบำรุงระบบรถไฟฟ้าสายสีแดง (CT Depot) เลขที่ 1001 ถนนกำแพงเพชร 2 แขวงจตุจักร เขตจตุจักร กรุงเทพฯ 10900
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="list-address-contact mb-3">
                                <div class="icon-list">
                                    <i class="f-icon icon-call"></i>
                                </div>
                                <p>
                                    02-481-5100 ext.20100
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="list-address-contact">
                                <div class="icon-list">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <p>
                                    <a href="mailto:its@srtet.co.th">its@srtet.co.th</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="block--group">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5880295004977!2d100.53999381488886!3d13.803690699807849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29c6d4772d1b9%3A0x5edf427b40688147!2sBang%20Sue%20Station!5e0!3m2!1sen!2sth!4v1652322048212!5m2!1sen!2sth" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">                
                    <div class="form-group-wrapper">
                        <form action="">
                            <!-- <h3 class="text-red mb-3">ติดต่อเรา</h3> -->
                            <div class="form-group--section mb-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ชื่อ - นามสกุล :</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>หมายเลขบัตรประชาชน :</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>ที่อยู่</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="true" value="title">เลือกหน่วยงาน</option>
                                                <option value="1" >หน่วยงานที่เกี่ยวข้อง 1</option>
                                                <option value="2">หน่วยงานที่เกี่ยวข้อง 2</option>
                                                <option value="3">หน่วยงานที่เกี่ยวข้อง 3</option>
                                            </select>
                                            <label class="did-floating-label">เลือกหน่วยงาน</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>เบอร์โทร</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>อีเมล</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group form--float">
                                            <textarea class="form-control"></textarea>
                                            <label>ระบุ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="consent consent--contact">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="consent" id="chk_consent">
                                                <label class="form-check-label" for="chk_consent">
                                                    การให้ความยินยอมเกี่ยวกับข้อมูลส่วนบุคคล <a href="">รายละเอียด</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="verify--wrapper">
                                <div class="title--verify">กรุณายืนยันตัวตน</div>
                                <div class="captcha--verify">
                                    Captcha
                                </div>

                                <div class="btn-group">
                                    <button class="btn btn--gray"><span>ย้อนกลับ</span></button>
                                    <button class="btn btn--primary"><span>ส่งข้อมูล</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <article class="page--content mb-2">
        <div class="container">
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