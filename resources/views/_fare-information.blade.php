@extends('masterpage')

@section('title', 'อัตราค่าโดยสาร')
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
                        <li class="breadcrumb-item active" aria-current="page">อัตราค่าโดยสาร</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">อัตราค่าโดยสาร</h2>
                </div>

                <div class="table-responsive table--fare">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>สถานี</th>
                                <th>ตลิ่งชัน</th>
                                <th>บางบำหรุ</th>
                                <th>บางซ่อน</th>
                                <th>บางซื่อ</th>
                                <th>จตุจักร</th>
                                <th>วัดเสมียนนารี</th>
                                <th>บางเขน</th>
                                <th>ทุ่งสองห้อง</th>
                                <th>หลักสี่</th>
                                <th>การเคหะ</th>
                                <th>ดอนเมือง</th>
                                <th>หลักหก</th>
                                <th>รังสิต</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    ตลิ่งชัน
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    บางบำหรุ
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                บางซ่อน
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                บางซื่อ
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                จตุจักร
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                วัดเสมียนนารี
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                บางเขน
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                ทุ่งสองห้อง
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                หลักสี่
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                การเคหะ
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                ดอนเมือง
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                หลักหก
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                            </tr>

                            <tr>
                                <td>
                                รังสิต
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td>
                                    XX
                                </td>
                                <td class="disabled">
                                    XX
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="#nogo" class="btn btn--primary">
                            <span>กำหนดเวลาเดินรถ</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="container">
                <div class="row row-cols-1 row-cols-md-2 justify-content-between">
                    <div class="col">
                        <div class="view--count">
                            จำนวนผู้เข้าชม : <span>39068</span> คน
                        </div>
                    </div>
                    <div class="col">
                        <div class="social--block">
                            <span>แชร์ :</span>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/facebook.svg')}}" alt="facebook">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/twitter.svg')}}" alt="twitter">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/instagram.svg')}}" alt="instagram">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/youtube.svg')}}" alt="youtube">
                            </a>
                            <a href="javascript:void(0)" class="social__icon">
                                <img src="{{ asset('assets/images/icon/tiktok.svg')}}" alt="tiktok">
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </article>

        <!-- include html services -->
        @include('include._services')
    </main>

    <script>
        const scrollContainer = document.querySelector(".table--fare");

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });
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
