@extends("layouts.app")

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>

    <section class="base-section">
        <section class="inner">
            <h1>@lang("base.whoami")</h1>
            <p>@lang("base.whoamitext")</p>
            <a class="hvr-bounce-to-right" href="{{App::getLocale() . "/resume"}}">@lang("base.resume")</a>
        </section>
    </section>


    <section class="base-section base-section-dark">
        <section class="inner">
        <h1>@lang("base.drugheader")</h1>
        <div class="drugs-box row">
            <div class="drugs-box-inner col-md-4">
                <span class="fas fa-kiss-wink-heart"></span>
                <h3>@lang("base.druglove")</h3>
                <p>@lang("base.druglovetext")</p>
            </div>
            <div class="drugs-box-inner col-md-4">
                <span class="fas fa-home"></span>
                <h3>@lang("base.drughome")</h3>
                <p>@lang("base.drughometext")</p>
            </div>
            <div class="drugs-box-inner col-md-4">
                <span class="fas fa-user-friends"></span>
                <h3>@lang("base.drugfriends")</h3>
                <p>@lang("base.drugfriendstext")</p>
            </div>
            <div class="middle-line"></div>
            <div class="drugs-box-inner col-md-4">
                <span class="fas fa-laptop-code"></span>
                <h3>@lang("base.drugcoding")</h3>
                <p>@lang("base.drugcodingtext")</p>
            </div>
            <div class="drugs-box-inner col-md-4">
                <span class="fas fa-paw"></span>
                <h3>@lang("base.drugdog")</h3>
                <p>@lang("base.drugdogtext")</p>
            </div>
            <div class="drugs-box-inner col-md-4">
                <span class="fas fa-car"></span>
                <h3>@lang("base.drugcar")</h3>
                <p>@lang("base.drugcartext")</p>
            </div>
        </div>
        </section>
    </section>

    <section class="base-section">
        <section class="inner">
            <h1>@lang("base.lifeofadeveloper")</h1>

            <div class="gallery-wrapper">
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/IMG_7743.jpeg")}}" style="background-image: url({{assetn("images/IMG_7743.jpeg")}})"></div>
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/IMG_5903.JPG")}}" style="background-image: url({{assetn("images/IMG_5903.JPG")}})"></div>
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/me-and-friends-nature.jpg")}}" style="background-image: url({{assetn("images/me-and-friends-nature.jpg")}})"></div>
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/IMG_3931.jpeg")}}" style="background-image: url({{assetn("images/IMG_3931.jpeg")}})"></div>
{{----}}
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/IMG_7442.JPG")}}" style="background-image: url({{assetn("images/IMG_7442.JPG")}})"></div>
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/me-and-my-dog.jpg")}}" style="background-image: url({{assetn("images/me-and-my-dog.jpg")}})"></div>
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/me-and-nature.jpg")}}" style="background-image: url({{assetn("images/me-and-nature.jpg")}})"></div>
                <div class="gallery-box" data-fancybox="gallery" href="{{assetn("images/vladimir-vrab.jpg")}}" style="background-image: url({{assetn("images/vladimir-vrab.JPG")}})"></div>

                <br class="clear">
            </div>

            <br class="clear">

            <a class="hvr-bounce-to-right" href="/contact">@lang("base.contact")</a>

        </section>
    </section>

@endsection