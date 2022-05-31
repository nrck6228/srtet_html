@extends('masterpage')

@section('title', 'ทำเนียบผู้บริหารระดับสูง')
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
                            <!-- image dimension 1320*450px -->
                            <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-about.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item"><a href="#">เกี่ยวกับเรา</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ทำเนียบผู้บริหารระดับสูง</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="boards--wrapper">
                    <div class="title--page justify-content-center">
                        <h2 class="page__title text--primary">ทำเนียบผู้บริหารระดับสูง</h2>
                    </div>

                    <div class="boards--list">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-deck card-deck--cards-1 justify-content-center">
                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            กรรมการบริษัทฯ และกรรมการผู้อำนวยการใหญ่
                                        </p>
                                        <div class="card__contact">
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-call"></i>
                                                </span>
                                                <a href="tel:02-308-5600" class="contact__text">
                                                    08x-xxx-xxxx
                                                </a>
                                            </div>
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-mail"></i>
                                                </span>
                                                <a href="mailto:info@srtet.co.th" class="contact__text">
                                                    info@srtet.co.th
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-deck card-deck--cards-1 card-deck--cards-sm-2 card-deck--cards-md-2 card-deck--cards-lg-4 justify-content-center">
                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            รักษาการรองกรรมการผู้อำนวยการใหญ่ กลุ่มสายงานวิศวกรรม
                                        </p>
                                        <div class="card__contact">
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-call"></i>
                                                </span>
                                                <a href="tel:02-308-5600" class="contact__text">
                                                    08x-xxx-xxxx
                                                </a>
                                            </div>
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-mail"></i>
                                                </span>
                                                <a href="mailto:info@srtet.co.th" class="contact__text">
                                                    info@srtet.co.th
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            กรรมการบริษัทฯ และกรรมการผู้อำนวยการใหญ่
                                        </p>
                                    </div>

                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            กรรมการบริษัทฯ และกรรมการผู้อำนวยการใหญ่
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boards--wrapper">
                    <div class="title--page justify-content-center">
                        <h2 class="page__title text--primary">ผู้อำนวยการ</h2>
                    </div>

                    <div class="boards--list">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-deck card-deck--cards-1 card-deck--cards-sm-2 card-deck--cards-md-2 card-deck--cards-lg-4 justify-content-center">
                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <!-- image dimension 250*295px -->
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            รักษาการรองกรรมการผู้อำนวยการใหญ่ กลุ่มสายงานวิศวกรรม
                                        </p>
                                        <div class="card__contact">
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-call"></i>
                                                </span>
                                                <a href="tel:02-308-5600" class="contact__text">
                                                    08x-xxx-xxxx
                                                </a>
                                            </div>
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-mail"></i>
                                                </span>
                                                <a href="mailto:info@srtet.co.th" class="contact__text">
                                                    info@srtet.co.th
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            กรรมการบริษัทฯ และกรรมการผู้อำนวยการใหญ่
                                        </p>
                                    </div>

                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            กรรมการบริษัทฯ และกรรมการผู้อำนวยการใหญ่
                                        </p>
                                        <div class="card__contact">
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-call"></i>
                                                </span>
                                                <a href="tel:02-308-5600" class="contact__text">
                                                    08x-xxx-xxxx
                                                </a>
                                            </div>
                                            <div class="contact__item">
                                                <span class="contact__icon">
                                                    <i class="icon-mail"></i>
                                                </span>
                                                <a href="mailto:info@srtet.co.th" class="contact__text">
                                                    info@srtet.co.th
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card--board">
                                        <figure class="card__figure">
                                            <img class="card__image" src="{{ asset('assets/images/about/boards/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
                                        </figure>
                                        <h4 class="card__name">
                                            นายสุเทพ พันธุ์เพ็ง
                                        </h4>
                                        <p class="card__position">
                                            กรรมการบริษัทฯ และกรรมการผู้อำนวยการใหญ่
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

@push('script-spotlight')
    <!-- spotlight CSS  -->
    <link rel="stylesheet" href="{{ mix('/spotlight/spotlight.min.css') }}"/>
    <!-- spotlight JS  -->
    <script type="text/javascript" src="{{ mix('/spotlight/spotlight.min.js') }}"></script>
@endpush
