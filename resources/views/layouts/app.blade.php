<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>vladino.me | enthusiastic young developer</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ assetn('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ assetn('css/app.css') }}?{{rand(1,250)}}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ assetn("images/logo.png") }}">

    @if (env("APP_ENV") == "production")
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124630454-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-124630454-1');
        </script>
    @endif

</head>
<body>
    @if (Request::route()->getName() == "home")
        <section class="main-section" >
            <div class="my-bg" style="background-image: url({{assetn("images/IMG_5018.JPG?new")}})"></div>
            <section class="top-bar row">
                <section class="logo col-md-4">
                    <a href="/{{App::getLocale()}}"><h1>vladino.me <span class="fas fa-laptop-code"></span></h1></a>
                </section>
                <nav class="navigation col-md-8">
                    <ul class="lang-ul">
                        <li >
                            <a @if (App::getLocale() == "sk")
                                class="active"
                                @endif href="/sk">SK</a>
                        </li>
                        <li class="">
                            <a @if (App::getLocale() == "en")
                               class="active"
                               @endif  href="/en">EN</a>
                        </li>
                        <li class="">
                            <a @if (App::getLocale() == "de")
                               class="active"
                               @endif href="/de">DE</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/{{App::getLocale() . "/"}}" class="active">Home</a>
                        </li>
                        <li>
                            <a href="/{{App::getLocale() . "/resume"}}">Resume</a>
                        </li>
                        <li>
                            <a href="/{{App::getLocale() . "/contact"}}">Contact</a>
                        </li>
                    </ul>
                    <br class="clear">
                </nav>
            </section>

            <section class="main-quote">
                <h1 class="first">ENTHUSIASTIC</h1>
                <h1 class="second">YOUNG</h1>
                <h1 class="third">DEVELOPER</h1>
            </section>

        </section>
    @else
        <section class="main-section main-section-offhome" >
            <section class="top-bar row">
                <section class="logo col-md-4">
                    <a href="/{{App::getLocale()}}"><h1>vladino.me <span class="fas fa-laptop-code"></span></h1></a>
                </section>
                <nav class="navigation col-md-8">
                    <ul class="lang-ul">
                        <li >
                            <a @if (App::getLocale() == "sk")
                               class="active"
                               @endif href="/sk">SK</a>
                        </li>
                        <li class="">
                            <a @if (App::getLocale() == "en")
                               class="active"
                               @endif  href="/en">EN</a>
                        </li>
                        <li class="">
                            <a @if (App::getLocale() == "de")
                               class="active"
                               @endif href="/de">DE</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="/{{App::getLocale() . "/"}}"
                               @if (Request::route()->getName() == "home") class="active" @endif>Home</a>
                        </li>
                        <li>
                            <a href="/{{App::getLocale() . "/resume"}}"
                               @if (Request::route()->getName() == "resume") class="active" @endif>Resume</a>
                        </li>
                        <li>
                            <a href="/{{App::getLocale() . "/contact"}}"
                               @if (Request::route()->getName() == "contact") class="active" @endif>Contact</a>
                        </li>
                    </ul>
                    <br class="clear">
                </nav>
            </section>
        </section>
    @endif

    <section>
        @yield('content')
    </section>

    <section class="footer">
        <section class="footer-inner">
            <h1>“some sexy quote“</h1>
            <ul class="menu-review">
                <li>
                    <a href="/{{App::getLocale()}}">Home</a>
                </li>
                <li>
                    <a href="/{{App::getLocale()}}/resume">Resume</a>
                </li>
                <li>
                    <a href="/{{App::getLocale()}}/contact">Contact</a>
                </li>
            </ul>
            <p>@2018 No rights reserved. Feel free to share or use whatever you wish to.</p>
            <ul class="social-icons">
                <li>
                    <a href="https://www.facebook.com/vladinoo.vrab"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li>
                    <a href="https://sk.linkedin.com/in/vladim%C3%ADr-vr%C3%A1b-73a441119"><span class="fab fa-linkedin"></span></a>
                </li>
                <li>
                    <a href="https://github.com/iNviNho"><span class="fab fa-github"></span></a>
                </li>
            </ul>
        </section>
    </section>

</body>
</html>