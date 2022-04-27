<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ข่าว</title>

        @include('include._start')
    </head>
    <body>
        @include('include._header')

        <main class="main--wrapper">
            <article class="hero--slider">
                <div class="container">
                    <div class="slider--banner">
                        <a href="#" title="" class="slider__item">
                            <div class="slider__figure">
                                <img class="slider__image" src="{{ asset('assets/images/hero/banner-news.png')}}" alt="รถไฟฟ้าสายสีแดง">
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
                                <img class="slider__image" src="{{ asset('assets/images/hero/banner-news.png')}}" alt="รถไฟฟ้าสายสีแดง">
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
                    <h2 class="title-page mb-4">ข่าวสาร</h2>

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




            <div class="news--home" style="height: 500px">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                </div>
            </div>

            










        </main>

        @include('include._script')
    </body>
</html>
