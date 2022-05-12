@extends('masterpage')

@section('title', 'วิสัยทัศน์และพันธกิจ')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

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
                        <li class="breadcrumb-item active" aria-current="page">วิสัยทัศน์และพันธกิจ</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">วิสัยทัศน์และพันธกิจ</h2>
                </div>

                <div class="body--content">
                    <div class="text--editor">
                        <div class="ck-content">
                            <figure class="image image_resized image-style-align-left" style="width: 50%;">
                                <img src="{{ asset('assets/images/about/vision-mission/img-demo-01.png')}}" alt="รถไฟฟ้าสายสีแดง">
                            </figure>
                            <h3>วิสัยทัศน์</h3>
                            <h4>
                                “บริษัทฯ มุ่งมั่นเพื่อเป็นผู้นำในการให้บริการเดินรถไฟฟ้าที่มีมาตรฐานในระดับสากล”
                            </h4>
                            <br>
                            <br>
                            <h3>พันธกิจ</h3>
                            <h4>
                                “บริษัทฯ ให้บริการด้วยความปลอดภัย เชื่อถือได้ มีประสิทธิภาพ และความคุ้มค่า”
                            </h4>
                            <br>
                            <br>
                            <h3>นโยบาย</h3>
                            <ol>
                                <li>
                                    ให้บริการด้วยใจ ปลอดภัย และมีประสิทธิภาพ สร้างความพึงพอใจและความคุ้มค่าแก่ผู้ใช้บริการ
                                </li>
                                <li>
                                    สร้างมาตรฐานการปฏิบัติงานในการเดินรถ และซ่อมบำรุง
                                </li>
                                <li>
                                    พัฒนาบุคลากรใหห้มีศักยภาพอย่างต่อเนื่อง
                                </li>
                                <li>
                                    รับผิดชอบต่อสังคม และสิ่งแวดล้อมที่เกี่ยวเนื่องกับธุรกิจขององค์กร
                                </li>
                                <li>
                                    อำนวยความสะดวกในการเชื่อมต่อกับระบบขนส่งอื่นๆ
                                </li>
                            </ol>

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
