@extends('masterpage')

@section('title', 'ใบสมัครงาน')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')


@section('contentpage')

    <div class="main--wrapper">
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
                        <li class="breadcrumb-item"><a href="#">ร่วมงานกับ SRTET</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ใบสมัครงาน</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="career--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">ใบสมัครงาน</h2>
                </div>

                <div class="form-group mb-4">
                    <form action="">
                        <div class="form-group--section">
                            <h3 class="h3 text-red mb-3">ประวัติการศึกษา</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุด :</h3>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">วุฒิระดับการศึกษา<span>*</span> :</span>
                                        </div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" disabled selected>เลือก</option>
                                            <option value="1">ป.ตรี</option>
                                            <option value="2">ป.โท</option>
                                            <option value="3">ป.เอก</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">สถาบัน<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">คณะ<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">สาขา<span>*</span> :</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="ระบุ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="btn-group">
                                <button class="btn btn--primary"><span>ถัดไป</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            
        </article>
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