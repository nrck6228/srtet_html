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

        <article class="news--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">สิ่งอำนวยความสะดวก</h2>
                </div>

                <div class="form-filter">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls">
                                <input type="text" class="form-control" placeholder="คำค้นหา">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls">
                                <select class="form-select" aria-label="เลือกประเภทร้านค้า">
                                    <option selected>เลือกประเภทร้านค้า</option>
                                    <option value="1">ประเภท 1</option>
                                    <option value="2">ประเภท 2</option>
                                    <option value="3">ประเภท 3</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="search__controls">
                                <select class="form-select" aria-label="สถานี">
                                    <option value="1" selected>สถานี 1</option>
                                    <option value="2">สถานี 2</option>
                                    <option value="3">สถานี 3</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                        </div>
                    </div>
                </div>
                

                <div class="card-deck card-deck--cards-1 card-deck--cards-sm-2">
                    <a href="" class="card card--shop">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/shop/img-bank-scb.png')}}" alt="bank">
                        </div>
                        <div class="card__body">
                            <div class="card__name">ธนาคารไทยพาณิชย์</div>
                            <div class="card__type">
                                ประเภทร้านค้า : ธนาคาร/ศูนย์แลกเปลี่ยนเงินตราต่างประเทศ
                            </div>
                            <div class="card__station">
                                สถานี : บางซื่อ
                            </div>
                        </div>
                    </a>

                    <a href="" class="card card--shop">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/shop/img-bank-scb.png')}}" alt="bank">
                        </div>
                        <div class="card__body">
                            <div class="card__name">ธนาคารไทยพาณิชย์</div>
                            <div class="card__type">
                                ประเภทร้านค้า : ธนาคาร/ศูนย์แลกเปลี่ยนเงินตราต่างประเทศ
                            </div>
                            <div class="card__station">
                                สถานี : บางซื่อ
                            </div>
                        </div>
                    </a>

                    <a href="" class="card card--shop">
                        <div class="card__figure">
                            <img src="{{ asset('assets/images/shop/img-bank-scb.png')}}" alt="bank">
                        </div>
                        <div class="card__body">
                            <div class="card__name">ธนาคารไทยพาณิชย์</div>
                            <div class="card__type">
                                ประเภทร้านค้า : ธนาคาร/ศูนย์แลกเปลี่ยนเงินตราต่างประเทศ
                            </div>
                            <div class="card__station">
                                สถานี : บางซื่อ
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
