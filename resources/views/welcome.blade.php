<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>

        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />
        <link rel="canonical" href=""/>

        <!-- Install Bootstrap Framework -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <!-- CSS Layout -->
        <link rel="stylesheet" href="{{ mix('/css/global.css') }}">
        <link rel="stylesheet" href="{{ mix('/css/theme/red.css') }}">

        <!-- Install Jquery Framework -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js" integrity="sha512-NWNl2ZLgVBoi6lTcMsHgCQyrZVFnSmcaa3zRv0L3aoGXshwoxkGs3esa9zwQHsChGRL4aLDnJjJJeP6MjPX46Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    </head>
    <body>
        <div class="welcome--container">
            <div class="welcome--page">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="welcome--page__logo">
                                <a href="/"><img src="{{ asset('assets/images/logo.svg')}}" alt="SRTET" class="logo"></a>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="welcome--page__image">
                                <a href="/"><img src="{{ asset('assets/images/img-welcome.jpg')}}" alt="SRTET" class="logo"></a>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="welcome--page__actions">
                                <a href="/" title="" class="btn btn--primary">
                                    <span>เข้าสู่เว็บไซต์</span>
                                </a>

                                <a href="/" title="" class="btn btn--gray">
                                    <span>ประกาศสำคัญ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
