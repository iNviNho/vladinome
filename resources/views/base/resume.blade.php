@extends("layouts.app")

@section("content")

    <section class="base-section text-left">
        <section class="inner">
            <div class="">
                <div class="my-info">
                    <h3>Vladimír Vráb</h3>
                    <p>
                        @lang("base.myinfo")
                    </p>
                </div>
                <div class="my-face" style="background-image: url({{assetn("images/vladimir-vrab.jpg")}})"></div>
                <br class="clear">
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.summary")</h2>
            </div>
            <p>@lang("base.summarytext1")</p>
            <ul>
                @lang("base.summarytext2")
            </ul>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.education")</h2>
                <p></p>
            </div>
            <table class="table table-bordered table-mobile-hidden">
                <tbody>
                <tr>
                    <td class="years-column"><span class="fas fa-calendar-alt"></span> 2012 - 2015</td>
                    <td>@lang("base.educationschool")</td>
                </tr>
                <tr>
                    <td class="years-column"><span class="fas fa-calendar-alt"></span> 2016</td>
                    <td><strong>@lang("base.educationnettecertificate")</strong></td>
                </tr>
                </tbody>
            </table>
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="text-right"><span class="fas fa-calendar-alt"></span> 2012 - 2015</li>
                    <li>@lang("base.educationschool")</li>
                    <li class="text-right"><span class="fas fa-calendar-alt"></span> 2016</li>
                    <li>@lang("base.educationnettecertificate")</li>
                </ul>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin ">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.workhistory")</h2>
            </div>

            {{-- Bitpanda - Staff Software Engineer --}}
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">BITPANDA</td>
                    <td class="years-column years-column-right" style="white-space: nowrap;"><span class="fas fa-calendar-alt"></span> Jan 2026 - @lang("base.now")</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.bitpanda4header")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.bitpanda4text")
                        </ul>
                    </td>
                </tr>
            </table>

            <div class="arrow-inner">
                <span class="fas fa-arrow-up"></span>
            </div>

            {{-- Bitpanda - Lead Software Engineer --}}
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">BITPANDA</td>
                    <td class="years-column years-column-right" style="white-space: nowrap;"><span class="fas fa-calendar-alt"></span> Aug 2023 - Jan 2026</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.bitpanda3header")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.bitpanda3text")
                        </ul>
                    </td>
                </tr>
            </table>

            <div class="arrow-inner">
                <span class="fas fa-arrow-up"></span>
            </div>

            {{-- Bitpanda - Technical Lead --}}
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">BITPANDA</td>
                    <td class="years-column years-column-right" style="white-space: nowrap;"><span class="fas fa-calendar-alt"></span> Sep 2021 - Jul 2023</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.bitpanda2header")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.bitpanda2text")
                        </ul>
                    </td>
                </tr>
            </table>

            <div class="arrow-inner">
                <span class="fas fa-arrow-up"></span>
            </div>

            {{-- Notifea - Freelance --}}
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">NOTIFEA <small>(@lang("base.freelance"))</small></td>
                    <td class="years-column years-column-right" style="white-space: nowrap;"><span class="fas fa-calendar-alt"></span> Sep 2019 - Mar 2023</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.notifeaheader")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.notifeatext")
                        </ul>
                    </td>
                </tr>
            </table>

            <div class="arrow-inner">
                <span class="fas fa-arrow-up"></span>
            </div>

            {{-- Bitpanda - Software Engineer --}}
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">BITPANDA</td>
                    <td class="years-column years-column-right" style="white-space: nowrap;"><span class="fas fa-calendar-alt"></span> Mar 2018 - Sep 2021</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.bitpanda1header")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.bitpanda1text")
                        </ul>
                    </td>
                </tr>
            </table>

            <div class="arrow-inner">
                <span class="fas fa-arrow-up"></span>
            </div>

            {{-- ARTEXE --}}
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">ARTEXE</td>
                    <td class="years-column years-column-right" style="white-space: nowrap;"><span class="fas fa-calendar-alt"></span> Oct 2013 - Feb 2018</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.artexeheader")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.artexetext")
                        </ul>
                    </td>
                </tr>
            </table>

            <div class="arrow-inner">
                <span class="fas fa-arrow-up"></span>
            </div>

            {{-- Self Employed --}}
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">@lang("base.selfemployed")</td>
                    <td class="years-column years-column-right" style="white-space: nowrap;"><span class="fas fa-calendar-alt"></span> 2012 - 2013</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.firststeps")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.firststepstext")
                        </ul>
                    </td>
                </tr>
            </table>

        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.technicalskills")</h2>
            </div>
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td style="white-space: nowrap;"><strong>@lang("base.programminglanguages")</strong></td>
                    <td>Java, TypeScript, PHP, C++, SQL, HTML, CSS</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.frameworks")</strong></td>
                    <td>Spring Boot, Micronaut, Express, Laravel, Nette</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.databases")</strong></td>
                    <td>PostgreSQL, MySQL, Amazon DynamoDB, Redis</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.messagebrokers")</strong></td>
                    <td>Apache Kafka, Amazon SQS</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.cloudinfra")</strong></td>
                    <td>AWS Lambda, Datadog, Docker, Sentry, Graylog</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.architecturepatterns")</strong></td>
                    <td>Event-driven Architecture, Microservices, CQRS</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.softwaretools")</strong></td>
                    <td>IntelliJ IDEA, PHPStorm, CLion, Datagrip, Postman, GitLab, GitHub, Miro, Claude Code, GitHub Copilot</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.operationsystem")</strong></td>
                    <td>macOS, Ubuntu</td>
                </tr>
            </table>
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold">@lang("base.programminglanguages")</li>
                    <li>Java, TypeScript, PHP, C++, SQL, HTML, CSS</li>
                    <li class="bold">@lang("base.frameworks")</li>
                    <li>Spring Boot, Micronaut, Express, Laravel, Nette</li>
                    <li class="bold">@lang("base.databases")</li>
                    <li>PostgreSQL, MySQL, Amazon DynamoDB, Redis</li>
                    <li class="bold">@lang("base.messagebrokers")</li>
                    <li>Apache Kafka, Amazon SQS</li>
                    <li class="bold">@lang("base.cloudinfra")</li>
                    <li>AWS Lambda, Datadog, Docker, Sentry, Graylog</li>
                    <li class="bold">@lang("base.architecturepatterns")</li>
                    <li>Event-driven Architecture, Microservices, CQRS</li>
                    <li class="bold">@lang("base.softwaretools")</li>
                    <li>IntelliJ IDEA, PHPStorm, CLion, Datagrip, Postman, GitLab, GitHub, Miro, Claude Code, GitHub Copilot</li>
                    <li class="bold">@lang("base.operationsystem")</li>
                    <li>macOS, Ubuntu</li>
                </ul>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.languages")</h2>
            </div>
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td><strong>@lang("base.languagesnormal")</strong></td>
                    <td><strong>@lang("base.slovak")</strong></td>
                    <td><strong>@lang("base.czech")</strong></td>
                    <td><strong>@lang("base.english")</strong></td>
                    <td><strong>@lang("base.german")</strong></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>@lang("base.native")</td>
                    <td>@lang("base.native")</td>
                    <td>C1</td>
                    <td>A1</td>
                </tr>
            </table>
            <table class="table table-bordered table-mobile-show">
                <tr>
                    <td class="nowrap bold">@lang("base.languagesnormal")</td>
                    <td>Level</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.slovak")</td>
                    <td>@lang("base.native")</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.czech")</td>
                    <td>@lang("base.native")</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.english")</td>
                    <td>C1</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.german")</td>
                    <td>A1</td>
                </tr>
            </table>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.interesthobbies")</h2>
            </div>
            <ul>
                @lang("base.interesthobbiesli")
            </ul>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.hobbyprojects")</h2>
            </div>
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td style="white-space: nowrap;"><strong><a class="link" href="https://github.com/iNviNho/cabinparser" target="_blank">@lang("base.hobbyproject1name")</a></strong></td>
                    <td>@lang("base.hobbyproject1desc")</td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;"><strong><a class="link" href="https://github.com/iNviNho/gameformykids" target="_blank">@lang("base.hobbyproject2name")</a></strong></td>
                    <td>@lang("base.hobbyproject2desc")</td>
                </tr>
            </table>
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold"><a class="link" href="https://github.com/iNviNho/cabinparser" target="_blank">@lang("base.hobbyproject1name")</a></li>
                    <li>@lang("base.hobbyproject1desc")</li>
                    <li class="bold"><a class="link" href="https://github.com/iNviNho/gameformykids" target="_blank">@lang("base.hobbyproject2name")</a></li>
                    <li>@lang("base.hobbyproject2desc")</li>
                </ul>
            </div>
        </section>
    </section>

    <section class="base-section base-section-dark">
        <section class="inner">
            <div class="drugs-box row">
                {{-- Row 1: Enterprise languages & frameworks --}}
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/java.svg")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/spring.svg")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/kafka.svg")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/postgresql.svg")}})"></div>

                <div class="resume-logo-space"></div>

                {{-- Row 2: Cloud & Infrastructure --}}
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/aws.svg")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/docker.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/redis.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/mysql.png")}})"></div>

                <div class="resume-logo-space"></div>

                {{-- Row 3: Tools --}}
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/intellij.svg")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/git.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/php.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/laravel.png")}})"></div>
            </div>
        </section>
    </section>


@endsection