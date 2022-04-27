<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            <article class="safeService--wrapper">
                <div class="container">
                    <div class="title--block">
                        <div class="page__title">
                            <h3>ความปลอดภัยและการบริการ</h3>
                        </div>

                        <a href="#nogo" title="เพิ่มเติม" class="page__readmore">
                            <span class="link__text">
                                เพิ่มเติม
                            </span>
                            <span class="link__icon">
                                <i class="icon-angle-right"></i>
                            </span>
                        </a>
                    </div>

                    <div class="service--slider">
                        <a href="#" title="" class="slider__item">
                            <div class="slider__figure">
                                <img class="slider__image" src="{{ asset('assets/images/slider/service/question-and-answer.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </div>
                            <div class="slider__content">
                                <p class="h3 slider__text">คำถามที่พบบ่อย</p>
                            </div>
                        </a>
                        <a href="#" title="" class="slider__item">
                            <div class="slider__figure">
                                <img class="slider__image" src="{{ asset('assets/images/slider/service/guide-book.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </div>
                            <div class="slider__content">
                                <p class="h3 slider__text">ข้อปฏิบัติขณะใช้รถไฟฟ้า</p>
                            </div>
                        </a>
                        <a href="#" title="" class="slider__item">
                            <div class="slider__figure">
                                <img class="slider__image" src="{{ asset('assets/images/slider/service/questions.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </div>
                            <div class="slider__content">
                                <p class="h3 slider__text">ขั้นตอนการใช้งาน RTV</p>
                            </div>
                        </a>
                        <a href="#" title="" class="slider__item">
                            <div class="slider__figure">
                                <img class="slider__image" src="{{ asset('assets/images/slider/service/alert.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </div>
                            <div class="slider__content">
                                <p class="h3 slider__text">กรณีฉุกเฉิน</p>
                            </div>
                        </a>
                        <a href="#" title="" class="slider__item">
                            <div class="slider__figure">
                                <img class="slider__image" src="{{ asset('assets/images/slider/service/questions.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </div>
                            <div class="slider__content">
                                <p class="h3 slider__text">ขั้นตอนการใช้งาน RTV</p>
                            </div>
                        </a>
                        <a href="#" title="" class="slider__item">
                            <div class="slider__figure">
                                <img class="slider__image" src="{{ asset('assets/images/slider/service/guide-book.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                            </div>
                            <div class="slider__content">
                                <p class="h3 slider__text">ข้อปฏิบัติขณะใช้รถไฟฟ้า</p>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        </main>

        @include('include._footer')

        @include('include._script')
    </body>
</html>
