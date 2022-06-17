@extends('masterpage')

@section('title', 'ใบสมัครงาน')
@section('keywords', 'รถไฟฟ้าสายสีแดง')
@section('description', 'รถไฟฟ้าสายสีแดง')


@section('contentpage')

    <div class="main--wrapper">
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
                        <li class="breadcrumb-item"><a href="#">ร่วมงานกับ SRTET</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ใบสมัครงาน</li>
                    </ol>
                </nav>
            </div>
        </div>

        <article class="career--wrapper">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary mb-4">ใบสมัครงาน</h2>
                </div>

                <!-- <div class="stepper-wrapper">
                    <div class="stepper-item completed">
                        <div class="step-counter"></div>
                        <div class="step-name">
                            Step 1 :<br/>
                            ข้อมูลส่วนตัว
                        </div>
                    </div>
                    <div class="stepper-item active">
                        <div class="step-counter"></div>
                        <div class="step-name">
                            Step 2 :<br/>
                            ประวัติการศึกษาและทำงาน
                        </div>
                    </div>
                    <div class="stepper-item active">
                        <div class="step-counter"></div>
                        <div class="step-name">
                            Step 3 :<br/>
                            สมัครสำเร็จ
                        </div>
                    </div>
                </div> -->

                <div class="form-group-wrapper job-application d-print-block">
                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ข้อมูลตำแหน่งที่สมัคร</h3>
                        <div class="row">
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ตำแหน่ง</label>
                                    <p>เจ้าหน้าที่โครงการ</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>วันที่สมัคร</label>
                                    <p>01/06/2565</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                            <div class="form-group form--text">
                                    <label>วันที่เริ่มงาน</label>
                                    <p>15/06/2565</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เงินเดือนที่คาดหวัง (บาท)</label>
                                    <p>50,000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ข้อมูลส่วนตัว</h3>
                        <div class="row">
                            <div class="col-lg-3 col-print-3">
                                <div class="image-profile">
                                    <img class="img-upload" src="{{ asset('assets/images/career/icon-uploadimage.svg')}}" alt="รถไฟฟ้าสายสีแดง">
                                </div>                                           
                            </div>
                            <div class="col-lg-9 col-print-9">
                                <div class="row">
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>ชื่อ-สกุล (ภาษาไทย)</label>
                                            <p>นาย ทดสอบ สมัครงาน</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>ชื่อ-สกุล (ภาษาอังกฤษ)</label>
                                            <p>Mr. Todsob Smuckngan</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>ชื่อเล่น</label>
                                            <p>ทด</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>วันเกิด</label>
                                            <p>01/01/2530</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>อายุ</label>
                                            <p>35 ปี</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>เชื้อชาติ</label>
                                            <p>ไทย</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>สัญชาติ</label>
                                            <p>ไทย</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>ศาสนา</label>
                                            <p>-</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>เลขที่บัตรประชาชน</label>
                                            <p>176990002xxxx</p>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>วันที่ออกบัตร</label>
                                            <p>01/01/2530</p>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>วันที่หมดอายุบัตร</label>
                                            <p>01/01/2530</p>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>ส่วนสูง (ซม.)</label>
                                            <p>180</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <div class="form-group form--text">
                                            <label>น้ำหนัก (กก.)</label>
                                            <p>65</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ข้อมูลติดต่อ</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>อีเมล</label>
                                    <p>todsob.s@mail.com</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เบอร์โทรศัพท์</label>
                                    <p>08xxxxxxxx</p>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เบอร์โทรบิดา</label>
                                    <p>08xxxxxxxx</p>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เบอร์โทรมารดา</label>
                                    <p>08xxxxxxxx</p>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-9">
                                <div class="form-group form--text">
                                    <label>ที่อยู่ตามทะเบียนบ้าน</label>
                                    <p>109 ซอยหมู่บ้านมิตรภาพ 2 ถนนอ่อนนุช แขวงหนองบอน เขตประเวศ กรุงเทพมหานคร</p>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-3">
                                <div class="form-group form--text">
                                    <label>เบอร์โทร</label>
                                    <p>02xxxxxxx</p>
                                </div>
                            </div> -->
                            <div class="col-lg-6">
                                <div class="form-group form--text">
                                    <label>ที่อยู่ที่สามารถติดต่อได้</label>
                                    <p>109 ซอยหมู่บ้านมิตรภาพ 2 ถนนอ่อนนุช แขวงหนองบอน เขตประเวศ กรุงเทพมหานคร</p>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3">
                                <div class="form-group form--text">
                                    <label>เบอร์โทร</label>
                                    <p>02xxxxxxx</p>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="form-group--section">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="h3 text-red mb-3">การรับราชการทหาร (สำหรับผู้ชาย)</h3>
                                <div class="form-group form--text">
                                    <p>ได้รับการยกเว้น : ร่างกายไม่สมบูรณ์</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="h3 text-red mb-3">ชื่อบุคคลและช่องทางการติดต่อสำรอง</h3>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ชื่อ-นามสกุล</label>
                                    <p>นายทด สมัครงาน</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ความสัมพันธ์</label>
                                    <p>บิดา</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เบอร์โทรศัพท์</label>
                                    <p>086xxxxxxx</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ประวัติการศึกษา</h3>
                        <div class="row">
                            <div class="col-12">
                                <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุดลำดับ 1</h3>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>วุฒิระดับการศึกษา</label>
                                    <p>ปริญญาโท</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ชื่อสถานศึกษา</label>
                                    <p>มหาวิทยาลัยรามคำแหง</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ปีที่จบการศึกษา</label>
                                    <p>2555</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เกรดเฉลี่ย</label>
                                    <p>3.5</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>สาขาวิชา</label>
                                    <p>บริหารธุรกิจ</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h3 class="h3 text-darkgray mb-3">ระดับการศึกษาสูงสุดลำดับ 2</h3>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>วุฒิระดับการศึกษา</label>
                                    <p>ปริญญาตรี</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ชื่อสถานศึกษา</label>
                                    <p>มหาวิทยาลัยรามคำแหง</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ปีที่จบการศึกษา</label>
                                    <p>2553</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เกรดเฉลี่ย</label>
                                    <p>3.5</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>สาขาวิชา</label>
                                    <p>บริหารธุรกิจ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ประวัติการฝึกอบรม</h3>
                        <div class="row">
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ชื่อสถาบัน</label>
                                    <p>สถาบันบัณฑิตพัฒนบริหารศาสตร์</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>สาขา</label>
                                    <p>จิดวิทยา 1</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ชื่อสถาบัน</label>
                                    <p>สถาบันบัณฑิตพัฒนบริหารศาสตร์</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>สาขา</label>
                                    <p>จิดวิทยา 2</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ความสามารถด้านภาษาต่างประเทศ</h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group form--text">
                                    <label>ภาษา</label>
                                    <p>ภาษาอังกฤษ</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>พูด</label>
                                    <p>ดี</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>อ่าน</label>
                                    <p>ดี</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เขียน</label>
                                    <p>ดี</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group form--text">
                                    <label>ภาษา</label>
                                    <p>ภาษาจีน</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>พูด</label>
                                    <p>พอใช้</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>อ่าน</label>
                                    <p>พอใช้</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เขียน</label>
                                    <p>พอใช้</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ความสามารถด้านอื่นๆ</h3>
                        <div class="row">
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>พิมพ์ดีดไทย(คำ/นาที)</label>
                                    <p>30</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>พิมพ์ดีดอังกฤษ(คำ/นาที)</label>
                                    <p>45</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>โปรแกรมคอมพิวเตอร์</label>
                                    <p>Word, Excel</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>TOEIC</label>
                                    <p>800 คะแนน</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>JLPT</label>
                                    <p>800 คะแนน</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="h3 text-red mb-3">ใบอนุญาตขับขี่รถยนต์</h3>
                                <div class="form-group form--text">
                                    <p>มี</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ความสามารถพิเศษอื่นๆ</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group form--text">
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <h3 class="h3 text-red mb-3">ประวัติการทำงาน <span class="sub-title">(เริ่มจากสถานที่ทำงานสุดท้าย)</span></h3>
                        <div class="row">
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>อายุงานรวม (ปี)</label>
                                    <p>10</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>อายุงานในระดับบริหารรวม (ปี)</label>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group form--text">
                                    <label>ชื่อสถานประกอบการ</label>
                                    <p>ชื่อสถานประกอบการ</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ตำแหน่ง</label>
                                    <p>ตำแหน่ง</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>วันที่เริ่มต้นทำงาน</label>
                                    <p>01/07/2560</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>วันที่สิ้นสุดทำงาน</label>
                                    <p>31/05/2565</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เงินเดือน</label>
                                    <p>50,000</p>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8">
                                <div class="form-group form--text">
                                    <label>เหตุผลลาออก</label>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group form--text">
                                    <label>ชื่อสถานประกอบการ</label>
                                    <p>ชื่อสถานประกอบการ</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>ตำแหน่ง</label>
                                    <p>ตำแหน่ง</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>วันที่เริ่มต้นทำงาน</label>
                                    <p>01/06/2555</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>วันที่สิ้นสุดทำงาน</label>
                                    <p>31/05/2560</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-4">
                                <div class="form-group form--text">
                                    <label>เงินเดือน</label>
                                    <p>30,000</p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group form--text">
                                    <label>เหตุผลลาออก</label>
                                    <p>-</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <div class="consent">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="consent" id="chk_consent1" checked>
                                        <label class="form-check-label" for="chk_consent1">
                                            ข้าพเจ้าขอให้คำรับรองว่า ข้อความ รายละเอียด และเอกสารที่ข้าพเจ้าได้ให้ไว้นี้ถูกต้องและเป็นความจริงทุกประการ หากภายหลัง บริษัทฯ ตรวจสอบพบว่าข้อความในเป็นเท็จข้าพเจ้ายินยอมให้บริษัทฯ บอกเลิกจ้างข้าพเจ้าได้ทันที โดยไม่ต้องจ่ายค่าชดเชยใดๆและยินดีให้บริษัทฯ ดำเนินคดีตามกฏหมายทุกประการ อนึ่งเอกสารประกอบอื่นๆตามประกาศรับสมัครสอบข้าพเจ้านำส่งภายหลังเมื่อได้รับการประกาศเป็นผู้มีสิทธิ์สอบสัมภาษณ์พร้อมลงลายมือชื่อรับรองเอกสารต่อไป
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="consent" id="chk_consent2" checked>
                                        <label class="form-check-label" for="chk_consent2">
                                            ข้าพเจ้ายินยอมให้ บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด (รฟฟท.) เก็บรวบรวม / ใช้ / เปิดเผย ข้อมูลส่วนบุคคล  หรือข้อมูลอื่นๆที่เกี่ยวข้อง (Sensitive Data) ของข้าพเจ้า  และในกรณี ไม่ผ่านการพิจารณาคัดเลือก ข้อมูลในใบสมัครจะถูกเก็บรักษาไว้อีกเป็นระยะเวลา 1 ปี และในกรณีผ่านการพิจารณาคัดเลือก ข้อมูลในใบสมัครจะถูกเก็บรักษาไว้ตลอดระยะเวลาการเป็นพนักงาน/ลูกจ้าง และเก็บต่อเนื่องอีกเป็นระยะเวลา 10 ปี ทั้งนี้ ข้าพเจ้าได้อ่านข้อความข้างต้นและทราบถึงวัตถุประสงค์ในการเก็บรวบรวม ใช้หรือเปิดเผย (“ประมวลผล”) ข้อมูลส่วนบุคคล ตลอดจนเข้าใจข้อความดังกล่าวดีแล้ว และข้าพเจ้าให้ความยินยอมกับ รฟฟท. ในการนำข้อมูลส่วนบุคคลของข้าพเจ้าไปดำเนินการดังกล่าวข้างต้น
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group--section">
                        <div class="text-center">
                            <div class="btn-group">
                                <button class="btn btn--primary" onclick="window.print();"><span>พิมพ์</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </article>
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