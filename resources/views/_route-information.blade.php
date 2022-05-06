@extends('masterpage')

@section('title', 'แผนที่สถานีรถไฟฟ้า')
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
                </div>
            </div>
        </article>

        <div class="breadcrumb--wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="#">กำหนดเวลาเดินรถ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">แผนที่สถานีรถไฟฟ้า</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="home--route" style="background-image: none">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">แผนที่สถานีรถไฟฟ้า</h2>
                </div>

                <div class="map--wrapper">
                    <div id="mapRoute" class="d-none d-lg-block map--figure">
                        <div class="map--svg">
                            <div class="map--svg--img">
                                <div class="map--base">
                                    <img src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง" width="1232" height="472">
                                </div>
                                <div class="station--base">
                                    <svg version="1.1" id="stationsSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="1232" height="472" viewBox="0 0 1232 472" enable-background="new 0 0 1232 472" xml:space="preserve">
                                        <title>สถานี</title>
                                        <g id="redLine" class="stations">
                                            <g>
                                                <g id="station1" class="station__position" link="link" onclick="window.location.href='/bangsur-station';">
                                                    <rect x="60" y="185" opacity="1" fill="#000" width="50" height="50"></rect>
                                                </g>

                                                <g id="station2" class="station__position" link="link" onclick="window.location.href='/chatuchak-station';">
                                                    <rect x="180" y="140" opacity="1" fill="#000" width="50" height="50"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-block d-lg-none map--figure">
                        <div class="map--base-mobile">
                            <a href="{{ asset('assets/images/map/img-demo-01.jpg')}}" title="รถไฟฟ้าสายสีแดง" data-title="false" class="spotlight">
                                <img src="{{ asset('assets/images/map/img-demo-01.jpg')}}" alt="รถไฟฟ้าสายสีแดง" class="w-100">
                            </a>
                        </div>

                        <div class="form-filter">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="search__controls">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>-- สถานี --</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- get position example -->
                <div style="display: none">
                    <div id="img_container"></div>
                    <canvas id="canvas" width="1232" height="472" style="background-image: url('{{ asset('assets/images/map/img-demo-01.jpg')}}'); background-size: cover;"></canvas>
                    <input type="text" name="MouseX" id="coor_x">
                    <input type="text" name="MouseY" id="coor_y">
                </div>
            </div>
        </article>

        <!-- include html services -->
        @include('include._services')
    </main>

    <script>
        function relMouseCoords(event) {
            var totalOffsetX = 0;
            var totalOffsetY = 0;
            var canvasX = 0;
            var canvasY = 0;
            var currentElement = this;

            do {
                totalOffsetX += currentElement.offsetLeft;
                totalOffsetY += currentElement.offsetTop;
            }
            while (currentElement = currentElement.offsetParent)

            canvasX = event.pageX - totalOffsetX;
            canvasY = event.pageY - totalOffsetY;
            console.log("x: " + canvasX + " y: " + canvasY);
            return { x: canvasX, y: canvasY }
        }
        HTMLCanvasElement.prototype.relMouseCoords = relMouseCoords;

        document.getElementById("canvas").onclick = function (event) {
            //Console.log('123456');
            var coords = canvas.relMouseCoords(event);
            document.getElementById("coor_x").value = coords.x - 25;
            document.getElementById("coor_y").value = coords.y - 25;

            var img = $('<div style="background-color: #000000; width: 100%; height: 100%;"></div>');
            $("#img_container").html(img).offset({ top: event.pageY - 25, left: event.pageX - 25 });
        }
    </script>   
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
