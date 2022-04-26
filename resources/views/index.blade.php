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
            <article class="hero--slider">
                <div class="container">
                    <div class="slider--banner">
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
        </main>

        @include('include._script')
    </body>
</html>
