<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>vladino.me | @lang("base.titlemoto") </title>
    <meta name="description" content="@lang("base.description")">
    <meta property="og:image" content="{{ assetn("images/me-and-programming.JPG") }}" />
    <meta property="og:url" content="https://vladino.me" />
    <meta property="og:title" content="@lang("base.titlemoto")" />
    <meta property="og:description" content="@lang("base.description")" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ assetn('js/app.js')}}?{{$version}}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ assetn('css/app.css') }}?{{$version}}" rel="stylesheet">
    <link href="{{ assetn('css/respo.css') }}?{{$version}}" rel="stylesheet">

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
    {{--MOBILE CONTENT--}}
    <div class="navigation-mobile-content">
        <div class="close-mobile-navigation">
            <span class="bi bi-x"></span>
        </div>
        <div class="navigation-mobile-content-inner">
            <a href="/"><h1>vladino.com <span class="fas fa-laptop-code"></span></h1></a>
            <ul>
                <li>
                    <a href="{{route("home")}}"
                       @if (Request::route()->getName() == "home") class="active" @endif>@lang("base.home")</a>
                </li>
                <li>
                    <a href="{{route("resume")}}"
                       @if (Request::route()->getName() == "resume") class="active" @endif>@lang("base.resume")</a>
                </li>
                <li>
                    <a href="{{route("contact")}}"
                       @if (Request::route()->getName() == "contact") class="active" @endif>@lang("base.contact")</a>
                </li>
            </ul>
        </div>
        <h1 class="navigation-mobile-footer">“@lang("base.somesexyquote")“</h1>
    </div>

    <section class="main-section @if (Request::route()->getName() != "home") main-section-offhome @endif" >
        @if (Request::route()->getName() == "home")
            <div class="my-bg" style="background-image: url({{assetn("images/me-and-my-life.JPG")}})"></div>
        @endif
        <section class="top-bar @if (Request::route()->getName() == "home") top-bar-layout @endif">
            <section class="logo">
                <a href="/"><h1>vladino.com <span class="bi bi-laptop"></span></h1></a>
            </section>
            <nav class="navigation navigation-desktop">
                <ul>
                    {{--MENU HANDLING--}}
                    <li>
                        <a href="{{route("home")}}"
                           @if (Request::route()->getName() == "home") class="active" @endif>@lang("base.home")</a>
                    </li>
                    <li>
                        <a href="{{route("resume")}}"
                           @if (Request::route()->getName() == "resume") class="active" @endif>@lang("base.resume")</a>
                    </li>
                    <li>
                        <a href="{{route("contact")}}"
                           @if (Request::route()->getName() == "contact") class="active" @endif>@lang("base.contact")</a>
                    </li>
                </ul>
                <br class="clear">
            </nav>
            <div class="navigation navigation-mobile">
                <span class="bi bi-list"></span>
            </div>
            <br class="clear">
        </section>

        @if (Request::route()->getName() == "home")
        <section class="main-quote">
            <h1 class="first">@lang("base.motofirst")</h1>
            <h1 class="second">@lang("base.motosecond")</h1>
            <h1 class="third">@lang("base.motothird")</h1>
        </section>
        <div class="arrow">
            <span class="fas fa-chevron-down"></span>
        </div>
        @endif

    </section>

    <section>
        @yield('content')
    </section>

    <section class="footer">
        <section class="footer-inner">
            <h1>“@lang("base.somesexyquote")“</h1>
            <ul class="menu-review">
                <li>
                    <a href="{{route("home")}}">@lang("base.home")</a>
                </li>
                <li>
                    <a href="{{route("resume")}}">@lang("base.resume")</a>
                </li>
                <li>
                    <a href="{{route("contact")}}">@lang("base.contact")</a>
                </li>
            </ul>
            <p>@lang("base.norightsreserved")</p>
            <ul class="social-icons">
                <li>
                    <a href="https://www.linkedin.com/in/vladino-vrab/" target="_blank"><span class="bi bi-linkedin"></span></a>
                </li>
                <li>
                    <a href="https://x.com/vladinovrab" target="_blank"><span class="bi bi-twitter-x"></span></a>
                </li>
                <li>
                    <a href="https://medium.com/@vladino.vrab" target="_blank"><span class="bi bi-medium"></span></a>
                </li>
                <li>
                    <a href="https://github.com/iNviNho" target="_blank"><span class="bi bi-github"></span></a>
                </li>
            </ul>
        </section>
    </section>

</body>
</html>
