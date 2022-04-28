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
            <article class="hero--wrapper">
                <div class="container">
                    <div class="hero--slider">
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



            <div class="news--home">
                <div class="container">
                    <div class="title--block justify-content-center">
                        <a href="/news" title="เพิ่มเติม" class="page__readmore">
                            <span class="link__text">เพิ่มเติม</span>
                            <span class="link__icon">
                                <i class="icon-angle-right"></i>
                            </span>
                        </a>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link h3 active" id="tab_1" data-bs-toggle="tab" data-bs-target="#nav-tab_1" type="button" role="tab" aria-controls="nav-tab_1" aria-selected="true">กิจกรรมการตลาด</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link h3" id="tab_2" data-bs-toggle="tab" data-bs-target="#nav-tab_2" type="button" role="tab" aria-controls="nav-tab_2" aria-selected="false">ข่าวประชาสัมพันธ์</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link h3" id="tab_3" data-bs-toggle="tab" data-bs-target="#nav-tab_3" type="button" role="tab" aria-controls="nav-tab_3" aria-selected="false">ข้อปฏิบัติการใช้งาน</button>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-tab_1" role="tabpanel" aria-labelledby="tab_1">
                            <div class="card-deck news--slider">
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
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
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news4.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab_2" role="tabpanel" aria-labelledby="tab_2">
                            <div class="card-deck news--slider">
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
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
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news4.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab_3" role="tabpanel" aria-labelledby="tab_3">
                            <div class="card-deck news--slider">
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news1.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
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
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news3.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="" class="card--slide card--news">
                                        <div class="card__figure">
                                            <img src="{{ asset('assets/images/news/img-news4.png')}}" alt="ข่าว">
                                        </div>
                                        <div class="card__body">
                                            <div class="card__date">5 เมษายน 2565</div>
                                            <div class="card__title">
                                                เมื่อพบเจอ บุคคลต้องสงสัย แจ้งทางเจ้าหน้าที่ได้ทันที
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            










        </main>

        @include('include._script')
    </body>
</html>
