@extends('masterpage')

@section('title', 'การประเมินคุณธรรมและความโปร่งใส (ITA)')
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
                    </a>
                </div>
            </div>
        </article>

        <div class="breadcrumb--wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ITA</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="career--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">การประเมินคุณธรรมและความโปร่งใส (ITA)</h2>
                </div>
                
                <div class="accordion accordion--secondary" id="accordion_ita">
                    
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-1" aria-expanded="false" aria-controls="ita-1" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            ข้อมูลพื้นฐาน
                        </div>
                        <div id="ita-1" class="accordion-collapse collapse" aria-labelledby="ita-1" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2 pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                                <ul class="sub-item">
                                                    <li><a href="">sub item 1</a></li>
                                                    <li><a href="">sub item 2</a></li>
                                                    <li><a href="">sub item 3</a></li>
                                                    <li><a href="">sub item 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>03</span> อำนาจหน้าที่
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>04</span> แผนการขับเคลื่อนหน่วยงาน
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>05</span> ข้อมูลการติดต่อหน่วยงาน
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>06</span> กฎหมายที่เกี่ยวข้อง
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-2" aria-expanded="false" aria-controls="ita-2" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            ข่าวประชาสัมพันธ์
                        </div>
                        <div id="ita-2" class="accordion-collapse collapse" aria-labelledby="ita-2" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>03</span> อำนาจหน้าที่
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>04</span> แผนการขับเคลื่อนหน่วยงาน
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>05</span> ข้อมูลการติดต่อหน่วยงาน
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>06</span> กฎหมายที่เกี่ยวข้อง
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-3" aria-expanded="false" aria-controls="ita-3" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การปฏิสัมพันธ์ข้อมูล
                        </div>
                        <div id="ita-3" class="accordion-collapse collapse" aria-labelledby="ita-3" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-4" aria-expanded="false" aria-controls="ita-4" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            แผนดำเนินงาน
                        </div>
                        <div id="ita-4" class="accordion-collapse collapse" aria-labelledby="ita-4" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-5" aria-expanded="false" aria-controls="ita-5" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การปฏิบัติงาน
                        </div>
                        <div id="ita-5" class="accordion-collapse collapse" aria-labelledby="ita-5" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-6" aria-expanded="false" aria-controls="ita-6" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การให้บริการ
                        </div>
                        <div id="ita-6" class="accordion-collapse collapse" aria-labelledby="ita-6" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-7" aria-expanded="false" aria-controls="ita-7" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            แผนการใช้จ่ายงบประมาณประจำปี
                        </div>
                        <div id="ita-7" class="accordion-collapse collapse" aria-labelledby="ita-7" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-8" aria-expanded="false" aria-controls="ita-8" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การจัดซื้อจัดจ้างหรือการจัดหาพัสดุ
                        </div>
                        <div id="ita-8" class="accordion-collapse collapse" aria-labelledby="ita-8" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-9" aria-expanded="false" aria-controls="ita-9" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การบริหารและพัฒนาทรัพยากรบุคคล
                        </div>
                        <div id="ita-9" class="accordion-collapse collapse" aria-labelledby="ita-9" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-10" aria-expanded="false" aria-controls="ita-10" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การจัดการเรื่องร้องเรียนการทุจริต
                        </div>
                        <div id="ita-10" class="accordion-collapse collapse" aria-labelledby="ita-10" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-11" aria-expanded="false" aria-controls="ita-11" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การเปิดโอกาสให้เกิดการมีส่วนร่วม
                        </div>
                        <div id="ita-11" class="accordion-collapse collapse" aria-labelledby="ita-11" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-12" aria-expanded="false" aria-controls="ita-12" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            เจตจำนงสุจริตของผู้บริหาร
                        </div>
                        <div id="ita-12" class="accordion-collapse collapse" aria-labelledby="ita-12" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-13" aria-expanded="false" aria-controls="ita-13" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การประเมินความเสี่ยงเพื่อการป้องกันการทุจริต
                        </div>
                        <div id="ita-13" class="accordion-collapse collapse" aria-labelledby="ita-13" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-14" aria-expanded="false" aria-controls="ita-14" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            การสร้างวัฒนธรรมองค์กร
                        </div>
                        <div id="ita-14" class="accordion-collapse collapse" aria-labelledby="ita-14" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-15" aria-expanded="false" aria-controls="ita-15" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            แผนปฏิบัติการป้องกันการทุจริต
                        </div>
                        <div id="ita-15" class="accordion-collapse collapse" aria-labelledby="ita-15" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#ita-16" aria-expanded="false" aria-controls="ita-16" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            มาตรการภายในเพื่อส่งเสริมความโปร่งใสและป้องกันการทุจริต
                        </div>
                        <div id="ita-16" class="accordion-collapse collapse" aria-labelledby="ita-16" data-bs-parent="#accordion_ita">
                            <div class="content--accordion pb-2">
                                <div class="body--content">
                                    <div class="text--link text--ul">
                                        <ul class="item">
                                            <li>
                                                <a href="javascript:void(0)" class="has-sub">
                                                    <span>01</span> โครงสร้างองค์กร 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span>02</span> ข้อมูลผู้บริหาร
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="page--content">
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

@push('script-accordion')
    <script>
        function toggleIcon(e) {
            $(e.target)
                .prev('.accordion__title')
                .find(".more-less")
                .toggleClass('icon-angle-up icon-angle-down', 500);
        }
        $('.accordion--wrapper').on('hidden.bs.collapse', toggleIcon);
        $('.accordion--wrapper').on('shown.bs.collapse', toggleIcon);


        $('.has-sub').click(function(){
            $('.sub-item').toggleClass('show');
        });
    </script>
@endpush

