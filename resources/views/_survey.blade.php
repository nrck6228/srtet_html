@extends('masterpage')

@section('title', 'แบบสำรวจ Online')
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
                        <li class="breadcrumb-item"><a href="#">บริการลูกค้า</a></li>
                        <li class="breadcrumb-item active" aria-current="page">แบบสำรวจ Online</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="vote--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">แบบสำรวจ Online</h2>
                </div>

                <div class="form-group mb-4">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls icon icon__date">
                                <input type="text" class="form-control start-date datepicker" placeholder="วันที่เริ่มต้น">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls icon icon__date">
                                <input type="text" class="form-control end-date" placeholder="วันที่สิ้นสุด">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                        </div>
                    </div>
                </div>
                

                <div class="card-group card-group--cards-1">

                    <a href="/vote-detail" class="card card--vote">
                        <div class="card__title">ท่านพึงพอใจเว็บไซต์นี้หรือไม่</div>
                        <div class="card__progressbar progress" style="height: 5px;">
                            <div class="progress-bar bg-progress" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card__result">
                            <div class="result__people--vote">155 คน ร่วมโหวต (25%)</div>
                            <div class="result__people--join">
                                <i class="f-icon icon-eye"></i><span>350</span> คน
                            </div>
                        </div>
                    </a>

                    <a href="/vote-detail" class="card card--vote">
                        <div class="card__title">ท่านพึงพอใจเว็บไซต์นี้หรือไม่</div>
                        <div class="card__progressbar progress" style="height: 5px;">
                            <div class="progress-bar bg-progress" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card__result">
                            <div class="result__people--vote">155 คน ร่วมโหวต (76%)</div>
                            <div class="result__people--join">
                                <i class="f-icon icon-eye"></i><span>350</span> คน
                            </div>
                        </div>
                    </a>

                    <a href="/vote-detail" class="card card--vote">
                        <div class="card__title">ท่านพึงพอใจเว็บไซต์นี้หรือไม่</div>
                        <div class="card__progressbar progress" style="height: 5px;">
                            <div class="progress-bar bg-progress" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card__result">
                            <div class="result__people--vote">155 คน ร่วมโหวต (10%)</div>
                            <div class="result__people--join">
                                <i class="f-icon icon-eye"></i><span>350</span> คน
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

