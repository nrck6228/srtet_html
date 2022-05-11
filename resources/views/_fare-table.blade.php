@extends('masterpage')

@section('title', 'ข้อมูลกำหนดเวลาเดินรถ')
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
                        <li class="breadcrumb-item active" aria-current="page">ข้อมูลกำหนดเวลาเดินรถ</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- <article class="page--content">
            <div class="container">
                <div class="title--page justify-content-center">
                    <h2 class="page__title text--primary">ข้อมูลกำหนดเวลาเดินรถ</h2>
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

                <ul class="nav nav-tabs nav-tabs--third" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="route-rangsit" data-bs-toggle="tab" data-bs-target="#rangsit" type="button" role="tab" aria-controls="rangsit" aria-selected="true">เวลาออก (บางซื่อ - รังสิต)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="route-talingchan" data-bs-toggle="tab" data-bs-target="#talingchan" type="button" role="tab" aria-controls="talingchan" aria-selected="false">เวลาออก (บางซื่อ - ตลิ่งชัน)</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="rangsit" role="tabpanel" aria-labelledby="route-rangsit">
                        <div class="calculated--wrapper">
                            <div class="station--route">
                                
                                <div class="route--box">
                                    <div class="box--info">
                                        <span>ราคา :</span> 42 บาท
                                    </div>

                                    <ol class="route--info">
                                        <li class="route--step">
                                            <a href="/bangsur-station" class="step__point"></a>
                                            <span class="step__label">บางซื่อ</span>
                                        </li>
                                        <li class="route--step">
                                            <a href="/bangsur-station" class="step__point--end"></a>
                                            <span class="step__label">รังสิต</span>
                                        </li>
                                    </ol>

                                    <div class="box--info__time">
                                        <span>เวลาเดินทางโดยประมาณ :</span> 23 นาที
                                    </div>
                                </div>

                                <div class="remark--route">
                                    <div class="remark__left">
                                        <span>*</span>คลิก <span class="point"></span> เพื่อดูรายละเอียดสถานี
                                    </div>
                                    <div class="remark__right">
                                        อัตราค่าโดยสารคิดตามระยะทาง กิโลเมตรละ 1.50 บาท
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table--time">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="7">เวลาออก</th>
                                    </tr>
                                    <tr>
                                        <th>ชั่วโมง</th>
                                        <th colspan="6">นาที</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            30
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                        
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                        34
                                        </td>
                                        <td>
                                            47
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            11
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            13
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            16
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                        34
                                        </td>
                                        <td>
                                            47
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            17
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            18
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            19
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            21
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                        34
                                        </td>
                                        <td>
                                            47
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <a href="#nogo" class="btn btn--primary">
                                    <span>อัตราค่าโดยสาร</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="talingchan" role="tabpanel" aria-labelledby="route-talingchan">
                        <div class="calculated--wrapper">
                            <div class="station--route">
                                
                                <div class="route--box">
                                    <div class="box--info">
                                        <span>ราคา :</span> 35 บาท
                                    </div>

                                    <ol class="route--info">
                                        <li class="route--step">
                                            <a href="/bangsur-station" class="step__point"></a>
                                            <span class="step__label">บางซื่อ</span>
                                        </li>
                                        <li class="route--step">
                                            <a href="/bangsur-station" class="step__point--end"></a>
                                            <span class="step__label">ตลิ่งชัน</span>
                                        </li>
                                    </ol>

                                    <div class="box--info__time">
                                        <span>เวลาเดินทางโดยประมาณ :</span> 12 นาที
                                    </div>
                                </div>

                                <div class="remark--route">
                                    <div class="remark__left">
                                        <span>*</span>คลิก <span class="point"></span> เพื่อดูรายละเอียดสถานี
                                    </div>
                                    <div class="remark__right">
                                        อัตราค่าโดยสารคิดตามระยะทาง กิโลเมตรละ 1.50 บาท
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table--time">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="7">เวลาออก</th>
                                    </tr>
                                    <tr>
                                        <th>ชั่วโมง</th>
                                        <th colspan="6">นาที</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            30
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                        
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                        34
                                        </td>
                                        <td>
                                            47
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            11
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            13
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            16
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                        34
                                        </td>
                                        <td>
                                            47
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            17
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            18
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            19
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                        40
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            21
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                        34
                                        </td>
                                        <td>
                                            47
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            00
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                        24
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <a href="#nogo" class="btn btn--primary">
                                    <span>อัตราค่าโดยสาร</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article> -->

        <article class="page--content">
            <div class="container">
                <div class="responsive--tabs">
                    <ul class="nav nav-tabs nav-tabs--third" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="tab-A" data-bs-toggle="tab" data-bs-target="#pane-A" type="button" role="tab" aria-controls="pane-A" aria-selected="true">เวลาออก (บางซื่อ - รังสิต)</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab-B" data-bs-toggle="tab" data-bs-target="#pane-B" type="button" role="tab" aria-controls="pane-B" aria-selected="false">เวลาออก (บางซื่อ - ตลิ่งชัน)</button>
                        </li>
                    </ul>

                    <div id="content" class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                เวลาออก (บางซื่อ - รังสิต)
                            </div>
                            <div id="collapse-A" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                                <div class="calculated--wrapper">
                                    <div class="station--route">
                                        
                                        <div class="route--box">
                                            <div class="box--info">
                                                <span>ราคา :</span> 42 บาท
                                            </div>

                                            <ol class="route--info">
                                                <li class="route--step">
                                                    <a href="/bangsur-station" class="step__point"></a>
                                                    <span class="step__label">บางซื่อ</span>
                                                </li>
                                                <li class="route--step">
                                                    <a href="/bangsur-station" class="step__point--end"></a>
                                                    <span class="step__label">รังสิต</span>
                                                </li>
                                            </ol>

                                            <div class="box--info__time">
                                                <span>เวลาเดินทางโดยประมาณ :</span> 23 นาที
                                            </div>
                                        </div>

                                        <div class="remark--route">
                                            <div class="remark__left">
                                                <span>*</span>คลิก <span class="point"></span> เพื่อดูรายละเอียดสถานี
                                            </div>
                                            <div class="remark__right">
                                                อัตราค่าโดยสารคิดตามระยะทาง กิโลเมตรละ 1.50 บาท
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table--time">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="7">เวลาออก</th>
                                            </tr>
                                            <tr>
                                                <th>ชั่วโมง</th>
                                                <th colspan="6">นาที</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    30
                                                </td>
                                                <td>
                                                    50
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                34
                                                </td>
                                                <td>
                                                    47
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    7
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    9
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    42
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    11
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    13
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    14
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    15
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    16
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                34
                                                </td>
                                                <td>
                                                    47
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    17
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    18
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    19
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    42
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    21
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                34
                                                </td>
                                                <td>
                                                    47
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    23
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    42
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <a href="#nogo" class="btn btn--primary">
                                            <span>อัตราค่าโดยสาร</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B" class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                เวลาออก (บางซื่อ - ตลิ่งชัน)
                            </div>
                            <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                                <div class="calculated--wrapper">
                                    <div class="station--route">
                                        
                                        <div class="route--box">
                                            <div class="box--info">
                                                <span>ราคา :</span> 35 บาท
                                            </div>

                                            <ol class="route--info">
                                                <li class="route--step">
                                                    <a href="/bangsur-station" class="step__point"></a>
                                                    <span class="step__label">บางซื่อ</span>
                                                </li>
                                                <li class="route--step">
                                                    <a href="/bangsur-station" class="step__point--end"></a>
                                                    <span class="step__label">ตลิ่งชัน</span>
                                                </li>
                                            </ol>

                                            <div class="box--info__time">
                                                <span>เวลาเดินทางโดยประมาณ :</span> 12 นาที
                                            </div>
                                        </div>

                                        <div class="remark--route">
                                            <div class="remark__left">
                                                <span>*</span>คลิก <span class="point"></span> เพื่อดูรายละเอียดสถานี
                                            </div>
                                            <div class="remark__right">
                                                อัตราค่าโดยสารคิดตามระยะทาง กิโลเมตรละ 1.50 บาท
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table--time">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="7">เวลาออก</th>
                                            </tr>
                                            <tr>
                                                <th>ชั่วโมง</th>
                                                <th colspan="6">นาที</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    30
                                                </td>
                                                <td>
                                                    50
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                34
                                                </td>
                                                <td>
                                                    47
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    7
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    9
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    42
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    11
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    13
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    14
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    15
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    16
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                34
                                                </td>
                                                <td>
                                                    47
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    17
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    18
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    19
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    42
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    20
                                                </td>
                                                <td>
                                                40
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    21
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                34
                                                </td>
                                                <td>
                                                    47
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    22
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    23
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    36
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    00
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                24
                                                </td>
                                                <td>
                                                    42
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <a href="#nogo" class="btn btn--primary">
                                            <span>อัตราค่าโดยสาร</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- include html services -->
        @include('include._services')
    </main>

    <script>
        const scrollContainer = document.querySelector(".table--time");

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
