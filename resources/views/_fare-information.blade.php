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
                                <th class="bg__center">บางซื่อ</th>
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
                                <th>
                                    ตลิ่งชัน
                                </th>
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
                                <th>
                                    บางบำหรุ
                                </th>
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
                                <th>
                                บางซ่อน
                                </th>
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
                                <th class="bg__center">
                                บางซื่อ
                                </th>
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
                                <th>
                                จตุจักร
                                </th>
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
                                <th>
                                วัดเสมียนนารี
                                </th>
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
                                <th>
                                บางเขน
                                </th>
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
                                <th>
                                ทุ่งสองห้อง
                                </th>
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
                                <th>
                                หลักสี่
                                </th>
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
                                <th>
                                การเคหะ
                                </th>
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
                                <th>
                                ดอนเมือง
                                </th>
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
                                <th>
                                หลักหก
                                </th>
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
                                <th>
                                รังสิต
                                </th>
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
        </article>
    </main>

    <script>
        // const scrollContainer = document.querySelector(".table--fare");

        // scrollContainer.addEventListener("wheel", (evt) => {
        //     evt.preventDefault();
        //     scrollContainer.scrollLeft += evt.deltaY;
        // });
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
