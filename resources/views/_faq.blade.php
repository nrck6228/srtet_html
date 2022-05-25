@extends('masterpage')

@section('title', 'คำถามที่มักถามบ่อย')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')

@section('contentpage')

    <main class="main--wrapper">
        <article class="hero--wrapper">
            <div class="container">
                <div class="hero--slider">
                    <a href="#" title="" class="slider__item">
                        <div class="slider__figure">
                        <img class="slider__image" src="{{ asset('assets/images/hero/banner-demo-procurement.jpg')}}" alt="รถไฟฟ้าสายสีแดง">
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
                        <li class="breadcrumb-item"><a href="/contact">ติดต่อเรา</a></li>
                        <li class="breadcrumb-item active" aria-current="page">คำถามที่มักถามบ่อย</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">คำถามที่มักถามบ่อย</h2>
                </div>

                <div class="form-group-wrapper">
                    <form action="">
                        <div class="form-group--section">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <input class="form-control" type="text" placeholder="" value="">
                                        <label>คำค้นหา</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group form--float">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="true" value="title">เลือกประเภททั้งหมด</option>
                                            <option value="" >เลือกประเภททั้งหมด</option>
                                            <option value="">เลือกประเภททั้งหมด</option> 
                                        </select>
                                        <label class="did-floating-label">เลือกประเภททั้งหมด</label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="accordion accordion--secondary" id="accordion_question">
                    
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#question-1" aria-expanded="false" aria-controls="question-1" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            1. กรณีไฟฟ้าขัดข้องจะมีผลกระทบต่อการเดินรถ Airport Rail Link หรือไม่
                        </div>
                        <div id="question-1" class="accordion-collapse collapse" aria-labelledby="question-1" data-bs-parent="#accordion_question">
                            <div class="content--accordion">
                                <div class="text--editor">
                                    <div class="ck-content">
                                       <p>
                                            ระบบไฟฟ้าขับเคลื่อนสำหรับการเดินรถไฟฟ้า รับกระแสไฟฟ้าขนาด 69 kV จาก สถานีไฟฟ้าย่อยบางกะปิของการไฟฟ้านครหลวงจำนวน 2 แหล่งจ่าย โดยปกติใน การเดินรถไฟฟ้าจะใช้ไฟฟ้าที่รับมาจากการไฟฟ้านครหลวง เพียงแหล่งจ่ายเดียว
                                            <br><br>
                                            อีกหนึ่งแหล่งจ่ายจะไว้ใช้ในกรณีแหล่งจ่ายแรกขัดข้อง ทั้งนี้ระบบไฟฟ้าที่ใช้ใน โครงการจะถูกแปลงแรงดันโดยหม้อแปลงไฟฟ้ากำลังให้เหลือขนาด 25 kV (25,000 โวลต์) เพื่อใช้ในระบบการเดินรถไฟฟ้า ซึ่งระบบจ่าย ดังกล่าว จะมี หม้อแปลงไฟฟ้ากำลังจำนวน 2 ลูก แบ่งจ่ายไฟให้กับระบบ
                                            <br><br>
                                            หากลูกใดลูกหนึ่งชำรุดหม้อแปลงอีกลูกก็ยังสามารถจ่าย ไฟฟ้าได้ทั้งระบบ การควบคุมการเดินรถควบคุมด้วยระบบคอมพิวเตอร์หากระบบไฟฟ้าหลักขัดข้องก็มีระบบไฟฟ้าหลักสำรองเพื่อควบคุม การเดินรถให้เดินรถได้ตามปกติ ห้องสำรองไฟฟ้า UPS ซึ่งมีหน้าที่จ่ายไฟฟ้าให้กับระบบคอมพิวเตอร์ ควบคุมการเดินรถ กรณีที่ไฟฟ้าเกิดขัดข้องก็สามารถสำรองไฟฟ้าไว้ใช้ได้ถึง 8-12 ชม.
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#question-2" aria-expanded="false" aria-controls="question-2" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            2. ทำไมประตูรถไฟฟ้า แอร์พอร์ต เรล ลิงก์ เสียงดัง
                        </div>
                        <div id="question-2" class="accordion-collapse collapse" aria-labelledby="question-2" data-bs-parent="#accordion_question">
                            <div class="content--accordion">
                                <div class="text--editor">
                                    <div class="ck-content">
                                       <p>
                                            ระบบไฟฟ้าขับเคลื่อนสำหรับการเดินรถไฟฟ้า รับกระแสไฟฟ้าขนาด 69 kV จาก สถานีไฟฟ้าย่อยบางกะปิของการไฟฟ้านครหลวงจำนวน 2 แหล่งจ่าย โดยปกติใน การเดินรถไฟฟ้าจะใช้ไฟฟ้าที่รับมาจากการไฟฟ้านครหลวง เพียงแหล่งจ่ายเดียว
                                            <br><br>
                                            อีกหนึ่งแหล่งจ่ายจะไว้ใช้ในกรณีแหล่งจ่ายแรกขัดข้อง ทั้งนี้ระบบไฟฟ้าที่ใช้ใน โครงการจะถูกแปลงแรงดันโดยหม้อแปลงไฟฟ้ากำลังให้เหลือขนาด 25 kV (25,000 โวลต์) เพื่อใช้ในระบบการเดินรถไฟฟ้า ซึ่งระบบจ่าย ดังกล่าว จะมี หม้อแปลงไฟฟ้ากำลังจำนวน 2 ลูก แบ่งจ่ายไฟให้กับระบบ
                                            <br><br>
                                            หากลูกใดลูกหนึ่งชำรุดหม้อแปลงอีกลูกก็ยังสามารถจ่าย ไฟฟ้าได้ทั้งระบบ การควบคุมการเดินรถควบคุมด้วยระบบคอมพิวเตอร์หากระบบไฟฟ้าหลักขัดข้องก็มีระบบไฟฟ้าหลักสำรองเพื่อควบคุม การเดินรถให้เดินรถได้ตามปกติ ห้องสำรองไฟฟ้า UPS ซึ่งมีหน้าที่จ่ายไฟฟ้าให้กับระบบคอมพิวเตอร์ ควบคุมการเดินรถ กรณีที่ไฟฟ้าเกิดขัดข้องก็สามารถสำรองไฟฟ้าไว้ใช้ได้ถึง 8-12 ชม.
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#question-3" aria-expanded="false" aria-controls="question-3" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            3. เสียงดังบริเวณโบกี้ที่ 2 ของรถไฟฟ้า AIRPORT RAIL LINK ในขณะที่วิ่งผ่านสถานีรามคำแหงถึงสถานีหัวหมากเกิดจากสาเหตุอะไร
                        </div>
                        <div id="question-3" class="accordion-collapse collapse" aria-labelledby="question-3" data-bs-parent="#accordion_question">
                            <div class="content--accordion">
                                <div class="text--editor">
                                    <div class="ck-content">
                                       <p>
                                            ระบบไฟฟ้าขับเคลื่อนสำหรับการเดินรถไฟฟ้า รับกระแสไฟฟ้าขนาด 69 kV จาก สถานีไฟฟ้าย่อยบางกะปิของการไฟฟ้านครหลวงจำนวน 2 แหล่งจ่าย โดยปกติใน การเดินรถไฟฟ้าจะใช้ไฟฟ้าที่รับมาจากการไฟฟ้านครหลวง เพียงแหล่งจ่ายเดียว
                                            <br><br>
                                            อีกหนึ่งแหล่งจ่ายจะไว้ใช้ในกรณีแหล่งจ่ายแรกขัดข้อง ทั้งนี้ระบบไฟฟ้าที่ใช้ใน โครงการจะถูกแปลงแรงดันโดยหม้อแปลงไฟฟ้ากำลังให้เหลือขนาด 25 kV (25,000 โวลต์) เพื่อใช้ในระบบการเดินรถไฟฟ้า ซึ่งระบบจ่าย ดังกล่าว จะมี หม้อแปลงไฟฟ้ากำลังจำนวน 2 ลูก แบ่งจ่ายไฟให้กับระบบ
                                            <br><br>
                                            หากลูกใดลูกหนึ่งชำรุดหม้อแปลงอีกลูกก็ยังสามารถจ่าย ไฟฟ้าได้ทั้งระบบ การควบคุมการเดินรถควบคุมด้วยระบบคอมพิวเตอร์หากระบบไฟฟ้าหลักขัดข้องก็มีระบบไฟฟ้าหลักสำรองเพื่อควบคุม การเดินรถให้เดินรถได้ตามปกติ ห้องสำรองไฟฟ้า UPS ซึ่งมีหน้าที่จ่ายไฟฟ้าให้กับระบบคอมพิวเตอร์ ควบคุมการเดินรถ กรณีที่ไฟฟ้าเกิดขัดข้องก็สามารถสำรองไฟฟ้าไว้ใช้ได้ถึง 8-12 ชม.
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#question-4" aria-expanded="false" aria-controls="question-4" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            4. ช่องว่างระหว่างรถไฟและชานชาลามีระยะห่างจะเป็นอันตรายหรือไม่
                        </div>
                        <div id="question-4" class="accordion-collapse collapse" aria-labelledby="question-4" data-bs-parent="#accordion_question">
                            <div class="content--accordion">
                                <div class="text--editor">
                                    <div class="ck-content">
                                       <p>
                                            ระบบไฟฟ้าขับเคลื่อนสำหรับการเดินรถไฟฟ้า รับกระแสไฟฟ้าขนาด 69 kV จาก สถานีไฟฟ้าย่อยบางกะปิของการไฟฟ้านครหลวงจำนวน 2 แหล่งจ่าย โดยปกติใน การเดินรถไฟฟ้าจะใช้ไฟฟ้าที่รับมาจากการไฟฟ้านครหลวง เพียงแหล่งจ่ายเดียว
                                            <br><br>
                                            อีกหนึ่งแหล่งจ่ายจะไว้ใช้ในกรณีแหล่งจ่ายแรกขัดข้อง ทั้งนี้ระบบไฟฟ้าที่ใช้ใน โครงการจะถูกแปลงแรงดันโดยหม้อแปลงไฟฟ้ากำลังให้เหลือขนาด 25 kV (25,000 โวลต์) เพื่อใช้ในระบบการเดินรถไฟฟ้า ซึ่งระบบจ่าย ดังกล่าว จะมี หม้อแปลงไฟฟ้ากำลังจำนวน 2 ลูก แบ่งจ่ายไฟให้กับระบบ
                                            <br><br>
                                            หากลูกใดลูกหนึ่งชำรุดหม้อแปลงอีกลูกก็ยังสามารถจ่าย ไฟฟ้าได้ทั้งระบบ การควบคุมการเดินรถควบคุมด้วยระบบคอมพิวเตอร์หากระบบไฟฟ้าหลักขัดข้องก็มีระบบไฟฟ้าหลักสำรองเพื่อควบคุม การเดินรถให้เดินรถได้ตามปกติ ห้องสำรองไฟฟ้า UPS ซึ่งมีหน้าที่จ่ายไฟฟ้าให้กับระบบคอมพิวเตอร์ ควบคุมการเดินรถ กรณีที่ไฟฟ้าเกิดขัดข้องก็สามารถสำรองไฟฟ้าไว้ใช้ได้ถึง 8-12 ชม.
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#question-5" aria-expanded="false" aria-controls="question-5" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            5. สามารถนำจักรยานขึ้นรถไฟฟ้า AIRPORT RAIL LINK ได้หรือไม่
                        </div>
                        <div id="question-5" class="accordion-collapse collapse" aria-labelledby="question-5" data-bs-parent="#accordion_question">
                            <div class="content--accordion">
                                <div class="text--editor">
                                    <div class="ck-content">
                                       <p>
                                            ระบบไฟฟ้าขับเคลื่อนสำหรับการเดินรถไฟฟ้า รับกระแสไฟฟ้าขนาด 69 kV จาก สถานีไฟฟ้าย่อยบางกะปิของการไฟฟ้านครหลวงจำนวน 2 แหล่งจ่าย โดยปกติใน การเดินรถไฟฟ้าจะใช้ไฟฟ้าที่รับมาจากการไฟฟ้านครหลวง เพียงแหล่งจ่ายเดียว
                                            <br><br>
                                            อีกหนึ่งแหล่งจ่ายจะไว้ใช้ในกรณีแหล่งจ่ายแรกขัดข้อง ทั้งนี้ระบบไฟฟ้าที่ใช้ใน โครงการจะถูกแปลงแรงดันโดยหม้อแปลงไฟฟ้ากำลังให้เหลือขนาด 25 kV (25,000 โวลต์) เพื่อใช้ในระบบการเดินรถไฟฟ้า ซึ่งระบบจ่าย ดังกล่าว จะมี หม้อแปลงไฟฟ้ากำลังจำนวน 2 ลูก แบ่งจ่ายไฟให้กับระบบ
                                            <br><br>
                                            หากลูกใดลูกหนึ่งชำรุดหม้อแปลงอีกลูกก็ยังสามารถจ่าย ไฟฟ้าได้ทั้งระบบ การควบคุมการเดินรถควบคุมด้วยระบบคอมพิวเตอร์หากระบบไฟฟ้าหลักขัดข้องก็มีระบบไฟฟ้าหลักสำรองเพื่อควบคุม การเดินรถให้เดินรถได้ตามปกติ ห้องสำรองไฟฟ้า UPS ซึ่งมีหน้าที่จ่ายไฟฟ้าให้กับระบบคอมพิวเตอร์ ควบคุมการเดินรถ กรณีที่ไฟฟ้าเกิดขัดข้องก็สามารถสำรองไฟฟ้าไว้ใช้ได้ถึง 8-12 ชม.
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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

                <div class="row justify-content-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn--primary w-100"  data-bs-toggle="modal" data-bs-target="#questionModal"><span>ส่งคำถามออนไลน์</span></button>
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

    <!-- ส่งคำถามออนไลน์ -->
    <div class="modal fade modal--custom modal--md" id="questionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">ส่งคำถามออนไลน์</h5>
                    <button type="button" class="modal--close" data-bs-dismiss="modal" aria-label="Close">
                        <div class="btn--close">
                            <span>ปิด <i class="icon-close"></i></span>
                        </div>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal--content">
                        <div class="form-group-wrapper">
                            <form action="">
                                <div class="form-group--section">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group form--float">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="true" value="title">เลือกประเภททั้งหมด</option>
                                                    <option value="" >เลือกประเภททั้งหมด</option>
                                                    <option value="">เลือกประเภททั้งหมด</option> 
                                                </select>
                                                <label class="did-floating-label">เลือกประเภททั้งหมด</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-6">
                                            <div class="form-group form--float">
                                                <input class="form-control" type="text" placeholder="" value="">
                                                <label>ระบุคำถาม</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="verify--wrapper m-0">
                                                <div class="title--verify">กรุณายืนยันตัวตน</div>
                                                <div class="captcha--verify">
                                                    Captcha
                                                </div>

                                                <div class="btn-group">
                                                    <button class="btn btn--primary" data-bs-dismiss="modal" aria-label="Close"><span>ส่งคำถาม</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    </script>
@endpush

