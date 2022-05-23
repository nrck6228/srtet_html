@extends('masterpage')

@section('title', 'ติดต่อเรา')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')


@section('contentpage')

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

            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div class="list-address-contact">
                                <div class="icon-list">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="name-list">
                                    Address
                                </div>
                                <p>
                                    ศูนย์ซ่อมบำรุงคลองตัน เลขที่ 27 ซอยเพชรบุรี 47 (ศูนย์วิจัย) แขวงบางกะปิ เขตห้วยขวาง กรุงเทพฯ 10320
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="list-address-contact">
                                <div class="icon-list">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="name-list">Phone</div>
                                <p>02-308-5600</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="list-address-contact">
                                <div class="icon-list">
                                    <i class="icon-mail"></i>
                                </div>
                                <div class="name-list">E-Mail</div>
                                <p>
                                    info@srtet.co.th
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="block--group">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5880295004977!2d100.53999381488886!3d13.803690699807849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29c6d4772d1b9%3A0x5edf427b40688147!2sBang%20Sue%20Station!5e0!3m2!1sen!2sth!4v1652322048212!5m2!1sen!2sth" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                            <label>ชื่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>นามสกุล</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form--float">
                                            <input class="form-control" type="text" placeholder="" value="">
                                            <label>หมายเลขบัตรประชาชน</label>
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
                                    <div class="col-lg-12">
                                        <div class="form-group form--float">
                                            <textarea class="form-control"></textarea>
                                            <label>ระบุ</label>
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
                                    <button class="btn btn--primary"><span>ยืนยัน</span></button>
                                    <a href="/vote" class="btn btn--gray"><span>เริ่มใหม่</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
            

        </div>
    </div>

@endsection



@push('script-slick')
    <!-- Slick CSS  -->
    <link rel="stylesheet" href="{{ mix('/slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/slick/slick-theme.css') }}"/>
    <!-- Slick JS  -->
    <script type="text/javascript" src="{{ mix('/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/slick.js') }}"></script>
@endpush