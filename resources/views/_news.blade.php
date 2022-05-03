@extends('masterpage')

@section('title', 'ข่าวสารและกิจกรรม')
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
                        <li class="breadcrumb-item active" aria-current="page">ข่าวสาร</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="news--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">ข่าวสาร</h2>
                </div>

                <div class="form-filter">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls icon icon__date">
                                <input type="text" class="form-control start-date" placeholder="วันที่เริ่มต้น">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls icon icon__date">
                                <input type="text" class="form-control end-date" placeholder="วันที่สิ้นสุด">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <button type="button" class="btn btn-primary">ค้นหา</button>
                        </div>
                    </div>
                </div>
                

                <div class="card-deck">
                    <a href="" class="card card--news">
                        <div class="card__pin">New</div>
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

                    <a href="" class="card card--news">
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

                    <a href="" class="card card--news">
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

                    <a href="" class="card card--news">
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

                    <a href="" class="card card--news">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="ข่าว">
                        </div>
                        <div class="card__body">
                            <div class="card__date">5 เมษายน 2565</div>
                            <div class="card__title">
                                กรณีเหตุฉุกเฉิน ภายในขบวนรถไฟฟ้า
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