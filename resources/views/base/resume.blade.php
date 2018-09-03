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
            <table class="table table-bordered">
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
        </section>
    </section>

    <section class="base-section text-left alter-margin ">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>WORK HISTORY</h2>
            </div>
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">SELF EMPLOYED</td>
                    <td class="years-column years-column-right"><span class="fas fa-calendar-alt"></span> 2012 - 2013</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>First steps</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            <li>first time getting in touch with web development and its technologies</li>
                            <li>learning as much as possible to build my first website using famous czech PHP framework - nette</li>
                            <li>created 3 custom made websites from scratch</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">ARTEXE</td>
                    <td class="years-column years-column-right"><span class="fas fa-calendar-alt"></span> 2013 - 2018</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>Web developer, Software engineer, Product owner and Team master</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            <li>my first real job as a web developer</li>
                            <li>building professionaly prepared and custom made websites with specific functionality to serve clients needs</li>
                            <li>developing self-made information systems with dozens of modules for different business types and customers</li>
                            <li>team master for junior developers</li>
                            <li>being a part of company business planning and becoming a shareholder</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">BITPANDA</td>
                    <td class="years-column years-column-right"><span class="fas fa-calendar-alt"></span> 2018 - NOW</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>Software engineer</strong></td>
                </tr>
                <tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            <li>working on an API part of the biggest cryptocurrency trading platform in Europe with more than 850 000 customers</li>
                            <li>integrating API with different payment providers, identity providers, mail providers, sms & voice call providers and other 3rd party libraries</li>
                            <li>integrating features and combining internal services with a great emphasis on security, reliability, fastness and speed</li>
                            <li>getting in touch with a different programming aproaches, continuous integration, code writing styles and technologies</li>
                            <li>working with one of the best programmers in the Europe :)</li>
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
                <h2>TECHNICAL SKILLS</h2>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td style="white-space: nowrap;"><strong>Programming languages</strong></td>
                    <td>HTML, CSS, JavaScript, PHP, SQL</td>
                </tr>
                <tr>
                    <td><strong>PHP Frameworks</strong></td>
                    <td>Laravel, Lumen, Nette</td>
                </tr>
                <tr>
                    <td><strong>Databases</strong></td>
                    <td>MySQL, Redis</td>
                </tr>
                <tr>
                    <td><strong>Software tools</strong></td>
                    <td>PHPStorm, Datagrip, Postman, GitLab, GitHub</td>
                </tr>
                <tr>
                    <td><strong>Libraries and tools</strong></td>
                    <td>Doctrine 2 ORM, CakePHP ORM, Eloquent ORM, WebGL, Sentry, Graylog, Twilio, Nexmo, Amazon SQS, Latte, Blade, Bootstrap, jQuery,
                        Docker, GIT, Guzzle, cURL, SSH, OpenVPN, PHPUnit, Webhook, Composer,  Certbot, Bash, Google analytics, Heatmaps</td>
                </tr>
                <tr>
                    <td><strong>Hobby languages</strong></td>
                    <td>Java (OpenGL)</td>
                </tr>
                <tr>
                    <td><strong>Operation system</strong></td>
                    <td>Ubuntu</td>
                </tr>
            </table>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.projectsitouched")</h2>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.myfirstwebsite1")</strong></td>
                    <td>@lang("base.myfirstwebsite2")</td>
                </tr>
                <tr>
                    <td class="left-same-column">@lang("base.examples")</td>
                    <td>
                        <ul>
                            <li>
                                <a href="http://www.ekotrim.sk" target="_blank" class="link">www.ekotrim.sk</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customwebsites1")</strong></td>
                    <td>
                        @lang("base.customwebsites2")
                    </td>
                </tr>
                <tr>
                    <td class="left-same-column">@lang("base.examples")</td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.artexe.sk">www.artexe.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.marcormirelli.co">www.marcormirelli.com</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.m.marcomirelli.com">www.m.marcomirelli.com</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.hustra.sk">www.hustra.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.liver.sk">www.liver.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.infektologia.sk">www.infektologia.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.cinemadesign.sk">www.cinemadesign.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.alcoholkiller.com">www.alcoholkiller.com</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.informovanieapublicita.sk">www.informovanieapublicita.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.autoclinic.sk">www.autoclinic.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.gladstudio.se">www.gladstudio.se</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.veloxsro.sk">www.veloxsro.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.greatdrinks.sk">www.greatdrinks.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.pizzeriarimini.sk">www.pizzeriarimini.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.studyinslovakia.org">www.studyinslovakia.org</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.scanit.sk">www.scanit.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.plus360.eu">www.plus360.eu</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.konsolidacna.eu">www.konsolidacna.eu</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.bistrorambus.sk">www.bistrorambus.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.agroslavinvest.sk">www.agroslavinvest.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.biofit.sk">www.biofit.sk</a>
                                    </li>
                                    <li>
                                        <a class="link" target="_blank" href="http://www.imcopower.sk">www.imcopower.sk</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.honorablemention")</td>
                    <td>
                        <ul>
                            <li>
                                <a class="link" target="_blank" href="https://www.awwwards.com/sites/glad-studio">www.gladstudio.se</a> <span class="fas fa-award"></span>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customis1")</strong></td>
                    <td>
                        @lang("base.customis2")
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.examples")</td>
                    <td>
                        @lang("base.customis3")
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customapi1")</strong></td>
                    <td>
                        <ul>
                            @lang("base.customapi2")
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.examples")</td>
                    <td>
                        <ul>
                            <li>
                                <a class="link" href="https://www.bitpanda.com">www.bitpanda.com</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customprojects1")</strong></td>
                    <td>
                        @lang("base.customprojects2")
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.examples")</td>
                    <td>
                        <ul>
                            <li>
                                <a class="link" target="_blank" href="https://github.com/iNviNho/vladinome">vladinome</a>
                            </li>
                            <li>
                                <a class="link" target="_blank" href="https://github.com/iNviNho/hazarder">hazarder</a>
                            </li>
                            <li>
                                <a class="link" target="_blank" href="https://github.com/iNviNho/nginxdb">nginxdb</a>
                            </li>
                            <li>
                                <a class="link" target="_blank" href="https://github.com/iNviNho/webhook">webhook</a>
                            </li>
                            <li>
                                <a class="link" target="_blank" href="https://github.com/iNviNho/helpers">helpers</a>
                            </li>
                            <li>
                                <a class="link" target="_blank" href="https://github.com/iNviNho/PayBySquareQRCodeGenerator">PayBySquareQRCodeGenerator</a>
                            </li>
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
                <h2>@lang("base.languages")</h2>
            </div>
            <table class="table table-bordered">
                @lang("base.languageslist")
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

    <section class="base-section base-section-dark">
        <section class="inner">
            <div class="drugs-box row">
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/laravel.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/nette.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/symfony.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/cakephp.png")}})"></div>

                <div class="resume-logo-space"></div>

                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/htmlcssjs.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/phpstorm.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/docker.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/git.png")}})"></div>

                <div class="resume-logo-space"></div>

                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/php.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/composer.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/mysql.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/redis.png")}})"></div>

                <div class="resume-logo-space"></div>

                <div class="drugs-box-inner resume-logo resume-logo-ubuntu col-md-12" style="background-image: url({{assetn("images/logos/ubuntu.png")}})"></div>
            </div>
        </section>
    </section>


@endsection