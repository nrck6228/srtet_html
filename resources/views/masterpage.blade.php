<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>

        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />
        <link rel="canonical" href="http://srtet-cms.siamedigital.com/th"/>

        <meta property="og:url"                content="@yield('og_url')" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="@yield('og_title')" />
        <meta property="og:description"        content="@yield('og_description')" />
        <meta property="og:image"              content="@yield('og_image')" />

        <!-- Install Bootstrap Framework -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- CSS Layout -->
        <link rel="stylesheet" href="{{ mix('/css/global.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/theme/red.css') }}">

        <!-- Install Jquery Framework -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js" integrity="sha512-NWNl2ZLgVBoi6lTcMsHgCQyrZVFnSmcaa3zRv0L3aoGXshwoxkGs3esa9zwQHsChGRL4aLDnJjJJeP6MjPX46Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    </head>
    <body>
        @include('include._header')

        @include('include._announce')

        @yield('contentpage')

        <!-- Search -->
        <div class="modal fade modal--custom" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content pt-5 px-4">
                    <div class="modal-header">
                        <h3 class="modal-title text-red" id="exampleModalLabel">ค้นหา</h3>
                        <button type="button" class="modal--close" data-bs-dismiss="modal" aria-label="Close">
                            <div class="btn--close">
                                <span>ปิด <i class="icon-close"></i></span>
                            </div>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal--content">
                            <div class="form-group-wrapper">
                                <form action="/search">
                                    <div class="form-group--section">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group form--float">
                                                    <input class="form-control" type="text" placeholder="" value="">
                                                    <label>คำค้นหา</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group form--float">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="selected" value="title">ข่าวสาร</option>
                                                        <option value="" >ข่าวสาร 1</option>
                                                        <option value="">ข่าวสาร 2</option> 
                                                    </select>
                                                    <label class="did-floating-label">ข่าวสาร</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="verify--wrapper m-0" style="text-align: left;">
                                                    <div class="btn-group">
                                                        <button class="btn btn--primary mx-0"><span>ค้นหา</span></button>
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

        @include('include._footer')

        <script type="text/javascript" src="{{ mix('/js/function.js') }}"></script>

        @stack('script-slick')

        @stack('script-tab')

        @stack('script-spotlight')

        @stack('script-datepicker')

        @stack('script-inputfile')

        @stack('script-addform')

        @stack('script-accordion')

        @stack('script-sweetalert')
        
    </body>
</html>
