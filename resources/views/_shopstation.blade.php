@extends('masterpage')

@section('title', 'ข่าวสารและกิจกรรม')
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

                <div class="form-group-wrapper">
                    <form action="">
                        <div class="form-group--section">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>คำค้นหา</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">เลือกประเภทร้านค้า</option>
                                            <option value="" >ร้านค้า</option>
                                            <option value="">ร้านค้า</option> 
                                        </select>
                                        <label class="did-floating-label">เลือกประเภทร้านค้า</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">เลือกสถานี</option>
                                            <option value="" >สถานี</option>
                                            <option value="">สถานี</option> 
                                        </select>
                                        <label class="did-floating-label">เลือกสถานี</label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
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
            </div>

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
