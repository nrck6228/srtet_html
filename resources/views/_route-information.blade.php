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
                        <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-route.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                    <div class="route--wrapper">
                        <div class="route--container">
                            <div class="main--station">
                                <div class="main--station__view">
                                    <div class="info__name">บางซื่อ</div>
                                    <div class="info__icon">
                                        <img src="{{ asset('assets/images/map/icons-01.png')}}" alt="รถไฟฟ้าสายสีน้ำเงิน">
                                    </div>
                                    <div class="info__icon">
                                        <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                    </div>
                                    <div class="info__icon">
                                        <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                    </div>
                                    <div class="info__icon">
                                        <img src="{{ asset('assets/images/map/icons-08.png')}}" alt="จุดจอดรถ">
                                    </div>
                                </div>
                                <div class="main--station__line">
                                    <a href="/station-information" class="redLine"></a>
                                    <a href="/station-information" class="lightredLine"></a>
                                </div>
                            </div>
                            <div class="line--station">

                                <div class="line--station__view redLine">
                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">จตุจักร</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">วัดเสมียนนารี</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">บางเขน</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">ทุ่งสองห้อง</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-03.png')}}" alt="รถไฟฟ้าสายสีชมพู">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">หลักสี่</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">การเคหะ</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-05.png')}}" alt="ท่าอากาศยานดอนเมือง">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">ดอนเมือง</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon"></div>
                                            <div class="info__icon"></div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">หลักหก</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="3 นาที">
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                        <div class="station--info__bottom">
                                            <div class="info__name">รังสิต</div>
                                            <a href="/station-information" class="info__icon"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="line--station__view lightredLine">
                                    <div class="station--info" data-text="7 นาที">
                                        <div class="station--info__bottom">
                                            <a href="/station-information" class="info__icon"></a>
                                            <div class="info__name">บางซ่อน</div>
                                        </div>
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-02.png')}}" alt="รถไฟฟ้าสายสีม่วง">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="7 นาที">
                                        <div class="station--info__bottom">
                                            <a href="/station-information" class="info__icon"></a>
                                            <div class="info__name">บางบำหรุ</div>
                                        </div>
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="station--info" data-text="7 นาที">
                                        <div class="station--info__bottom">
                                            <a href="/station-information" class="info__icon"></a>
                                            <div class="info__name">ตลิ่งชัน</div>
                                        </div>
                                        <div class="station--info__top">
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">
                                            </div>
                                            <div class="info__icon">
                                                <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="route--remark">
                                    <div class="remark__left">
                                        <span>*</span>คลิก <span class="point"></span> เพื่อดูรายละเอียดสถานี
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="route--connection">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-01.png')}}" alt="รถไฟฟ้าสายสีน้ำเงิน">&nbsp;รถไฟฟ้าสายสีน้ำเงิน
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-02.png')}}" alt="รถไฟฟ้าสายสีม่วง">&nbsp;รถไฟฟ้าสายสีม่วง
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-03.png')}}" alt="รถไฟฟ้าสายสีชมพู">&nbsp;รถไฟฟ้าสายสีชมพู
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-04.png')}}" alt="รถไฟฟ้าสายสีเหลือง">&nbsp;รถไฟฟ้าสายสีเหลือง
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-05.png')}}" alt="ท่าอากาศยานดอนเมือง">&nbsp;ท่าอากาศยานดอนเมือง
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-06.png')}}" alt="รถไฟทางไกล">&nbsp;รถไฟทางไกล
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-07.png')}}" alt="รถโดยสาร">&nbsp;รถโดยสาร
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/images/map/icons-08.png')}}" alt="จุดจอดรถ">&nbsp;จุดจอดรถ
                                        </li>
                                    </ul>
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
