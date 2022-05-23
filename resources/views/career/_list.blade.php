@extends('masterpage')

@section('title', 'ข่าวสารและกิจกรรม')
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
                        <li class="breadcrumb-item"><a href="#">ข่าวสารและกิจกรรม</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ข่าวสาร</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="career--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">ข่าวสาร</h2>
                </div>

                <div class="form-group-wrapper mb-4">
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
                                            <option selected="true" value="title">เลือกตำแหน่งที่จะสมัคร</option>
                                            <option value="" >ประชาสัมพันธ์</option>
                                            <option value="">IT Support</option> 
                                        </select>
                                        <label class="did-floating-label">เลือกตำแหน่งที่จะสมัคร</label>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn btn--primary"><span>ค้นหา</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="accordion--wrapper accordion--primary" id="accordion_career">
                    
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#career-1" aria-expanded="false" aria-controls="career-1" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            เจ้าหน้าที่งบประมาณอาวุโส (2 อัตรา)
                        </div>
                        <div id="career-1" class="accordion-collapse collapse" aria-labelledby="career-1" data-bs-parent="#accordion_career">
                            <div class="content--accordion">
                                <div class="head--content">
                                    <div class="item">
                                        <div class="icon icon--map">
                                            <i class="f-icon bi bi-geo-alt-fill"></i>
                                        </div>
                                        <div class="title">ประจำสาขา</div>
                                        <div class="detail">: สำนักงานใหญ่</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon icon--dateRegis">
                                            <i class="f-icon bi bi-calendar3"></i>
                                        </div>
                                        <div class="title">วันที่รับสมัคร</div>
                                        <div class="detail">: 6 เมษายน 2565 - 21 เมษายน 2565</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon icon--dateUpdate">
                                            <i class="f-icon icon-date-update"></i>
                                        </div>
                                        <div class="title">วันที่อัพเดต</div>
                                        <div class="detail">: 5 เมษายน 2565</div>
                                    </div>
                                </div>
                                <div class="body--content">
                                    <div class="text--editor">
                                        <div class="ck-content">
                                            <p style="color: #BC1320;">หน้าที่และความรับผิดชอบ</p>
                                            <ul>
                                                <li>รวบรวม/จัดทำ/ตรวจสอบ ข้อมูลเพื่อจัดทำแผนงบประมาณ Revenue, SG&A, CAPEX, และ Manpower สรุปผลและจัดทำข้อมูลเพื่อนำเสนอคณะกรรมการงบประมาณให้ทันตามกำหนดเวลาของกลุ่มบริษัท</li>
                                                <li>รวมรวมข้อมูลจัดทำรายงานทางการเงิน PL/BS/Cashflow และรายงานอัตราส่วนทางการเงิน</li>
                                                <li>ติดตามผลการดำเนินงานประจำเดือน ทำการวิเคราะห์ข้อมูลเปรียบเทียบแผน วิเคราะห์ผลต่าง และจัดทำรายงานนำเสนอฝ่ายบริหารและผู้ที่เกี่ยวข้อง ตามกำหนดเวลา</li>
                                                <li>ตรวจสอบ/ควบคุม การใช้งบประมาณของหน่วยงาน ให้เป็นไปตามแผนที่ได้รับการอนุมัติ</li>
                                                <li>จัดทำเอกสารประกอบการประชุมและประสานงานการจัดประชุมคณะกรรมการงบประมาณและคณะกรรมการลงทุน และประชุมอื่นๆ ที่เกี่ยวข้อง</li>
                                                <li>งาน add Hoc อื่นๆ ที่ได้รับตามมอบหมาย</li>
                                            </ul>
                                            <br>
                                            <p style="color: #BC1320;">คุณสมบัติ</p>
                                            <ul>
                                                <li>เพศชาย/หญิง อายุไม่เกิน 35 ปี</li>
                                                <li>วุฒิปริญญาตรี บริหารธุรกิจ สาขาบัญชี หรือสาขาที่เกี่ยวข้อง</li>
                                                <li>มีประสบการณ์ในงานด้านบัญชี และ/หรือด้านการเงิน 2-5 ปี</li>
                                                <li>มีประสบการณ์ในงานด้าน Audit 1-2 ปี สามารถปิดงบได้ </li>
                                                <li>มีความชำนาญ ในการใช้ Computer โปรแกรม MS Excel และ MS Office เป็นอย่างดี </li>
                                                <li>มี Commitment และสามารถปฏิบัติงานภายใต้ภาวะความกดดันได้ดี  </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="download-file">
                                    <p class="title">เอกสารแนบ</p>
                                    <div class="list-file">
                                        <div class="item">
                                            <a href="#">
                                                <div class="icon icon--file">
                                                    <i class="f-icon bi bi-file-earmark-pdf-fill"></i>
                                                </div>
                                                <div class="title">เอกสารแนบ 1</div>
                                            </a>
                                            
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <div class="icon icon--file">
                                                    <i class="f-icon  bi bi-file-earmark-pdf-fill"></i>
                                                </div>
                                                <div class="title">เอกสารแนบ 2</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <a href="/form1" class="btn btn--primary"><span>สมัครงาน</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion--item">
                        <div data-bs-toggle="collapse" data-bs-target="#career-2" aria-expanded="false" aria-controls="career-2" class="accordion__title">
                            <i class="more-less icon-angle-down"></i>
                            เจ้าหน้าที่โครงการ (1 อัตรา)
                        </div>
                        <div id="career-2" class="accordion-collapse collapse" aria-labelledby="career-2" data-bs-parent="#accordion_career">
                            <div class="content--accordion">
                                <div class="head--content">
                                    <div class="item">
                                        <div class="icon icon--map">
                                            <i class="f-icon bi bi-geo-alt-fill"></i>
                                        </div>
                                        <div class="title">ประจำสาขา</div>
                                        <div class="detail">: สำนักงานใหญ่</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon icon--dateRegis">
                                            <i class="f-icon bi bi-calendar3"></i>
                                        </div>
                                        <div class="title">วันที่รับสมัคร</div>
                                        <div class="detail">: 6 เมษายน 2565 - 21 เมษายน 2565</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon icon--dateUpdate">
                                            <i class="f-icon icon-date-update"></i>
                                        </div>
                                        <div class="title">วันที่อัพเดต</div>
                                        <div class="detail">: 5 เมษายน 2565</div>
                                    </div>
                                </div>
                                <div class="body--content">
                                    <div class="text--editor">
                                        <div class="ck-content">
                                            <p style="color: #BC1320;">หน้าที่และความรับผิดชอบ</p>
                                            <ul>
                                                <li>รวบรวม/จัดทำ/ตรวจสอบ ข้อมูลเพื่อจัดทำแผนงบประมาณ Revenue, SG&A, CAPEX, และ Manpower สรุปผลและจัดทำข้อมูลเพื่อนำเสนอคณะกรรมการงบประมาณให้ทันตามกำหนดเวลาของกลุ่มบริษัท</li>
                                                <li>รวมรวมข้อมูลจัดทำรายงานทางการเงิน PL/BS/Cashflow และรายงานอัตราส่วนทางการเงิน</li>
                                                <li>ติดตามผลการดำเนินงานประจำเดือน ทำการวิเคราะห์ข้อมูลเปรียบเทียบแผน วิเคราะห์ผลต่าง และจัดทำรายงานนำเสนอฝ่ายบริหารและผู้ที่เกี่ยวข้อง ตามกำหนดเวลา</li>
                                                <li>ตรวจสอบ/ควบคุม การใช้งบประมาณของหน่วยงาน ให้เป็นไปตามแผนที่ได้รับการอนุมัติ</li>
                                                <li>จัดทำเอกสารประกอบการประชุมและประสานงานการจัดประชุมคณะกรรมการงบประมาณและคณะกรรมการลงทุน และประชุมอื่นๆ ที่เกี่ยวข้อง</li>
                                                <li>งาน add Hoc อื่นๆ ที่ได้รับตามมอบหมาย</li>
                                            </ul>
                                            <br>
                                            <p style="color: #BC1320;">คุณสมบัติ</p>
                                            <ul>
                                                <li>เพศชาย/หญิง อายุไม่เกิน 35 ปี</li>
                                                <li>วุฒิปริญญาตรี บริหารธุรกิจ สาขาบัญชี หรือสาขาที่เกี่ยวข้อง</li>
                                                <li>มีประสบการณ์ในงานด้านบัญชี และ/หรือด้านการเงิน 2-5 ปี</li>
                                                <li>มีประสบการณ์ในงานด้าน Audit 1-2 ปี สามารถปิดงบได้ </li>
                                                <li>มีความชำนาญ ในการใช้ Computer โปรแกรม MS Excel และ MS Office เป็นอย่างดี </li>
                                                <li>มี Commitment และสามารถปฏิบัติงานภายใต้ภาวะความกดดันได้ดี  </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="download-file">
                                    <p class="title">เอกสารแนบ</p>
                                    <div class="list-file">
                                        <div class="item">
                                            <a href="#">
                                                <div class="icon icon--file">
                                                    <i class="f-icon bi bi-file-earmark-pdf-fill"></i>
                                                </div>
                                                <div class="title">เอกสารแนบ 1</div>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <a href="/form1" class="btn btn--primary"><span>สมัครงาน</span></a>
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
    </script>
@endpush

