<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="description" content="Mehedi Hasan John">
    <meta name="author" content="Mehedi Hasan John">
    <meta name="keywords" content="Mehedi Hasan John">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">


    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontAssets') }}/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontAssets') }}/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontAssets') }}/img/favicon-16x16.png">
    <link rel="icon" sizes="16x16" href="{{ asset('frontAssets') }}/img/favicon.ico">
    <link rel="mask-icon" href="{{ asset('frontAssets') }}/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('frontAssets') }}/css/bootstrap.min.css" />

    <!-- Font style CSS -->
    <link rel="stylesheet" href="{{ asset('frontAssets') }}/css/font_style.css" />

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="{{ asset('frontAssets') }}/css/font-awesome.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontAssets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontAssets') }}/css/common.css">
    <link rel="stylesheet" href="{{ asset('frontAssets') }}/css/custom.css">

    <!-- CDNs for typed js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

</head>

<body>

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    @include('frontend.include.header')

    @yield('content')

    @include('frontend.include.footer')

    <!-- Modals -->
    <div id="personal_information" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/img1.jpg" alt="Mehedi Hasan John's Pic">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title text-center">Me At A Glance</h4>
                    <table class="table table-striped table-hover table-bordered">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>Mehedi Hasan John</td>
                            </tr>
                            <tr>
                                <td>Father’s Name</td>
                                <td>Md Samsul Molla</td>
                            </tr>
                            <tr>
                                <td>Mother’s Name</td>
                                <td>Sheuli Begum</td>
                            </tr>
                            <tr>
                                <td>Permanent Address</td>
                                <td>Thana: Baliakandi, District: Rajbari</td>
                            </tr>
                            <tr>
                                <td>Present Address</td>
                                <td>Thana: Jatrabari, District: Dhaka</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>13 January, 1997</td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td>Islam</td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>Bangladeshi</td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td>Unmarried</td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td>B+ (ve)</td>
                            </tr>
                            <tr>
                                <td>National ID No</td>
                                <td>5083549***</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer text-center bg-primary">
                    <h3 class="text-center">Die with memories, not dreams</h3>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="portfolioItem1" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/eduford.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Eduford</h4>
                    <p>A simple project for Educational Institute</p>
                </div>
                <div class="modal-footer">
                    <a href="https://engrmhjohn.github.io/eduford/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem2" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/central.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Central</h4>
                    <p>Service Related Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://engrmhjohn.github.io/central/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem3" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/topperr.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Topperr</h4>
                    <p>Service Related Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://engrmhjohn.github.io/topperr/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem4" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/eastland.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Eastland Insurance</h4>
                    <p>An Insurance Based Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.eastlandinsurance.com/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem5" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/eastland.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Eastland Insurance</h4>
                    <p>An Insurance Based Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.eastlandinsurance.com/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem6" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/educity.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Educity</h4>
                    <p>Educational Institute Based Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://educity.wiztecbd.com/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem7" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/osit.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">One Sky IT</h4>
                    <p>Professional Training Institute Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.ositbd.com/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem77" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/osit.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">One Sky IT</h4>
                    <p>Professional Training Institute Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.ositbd.com/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem8" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/onesky.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">One Sky</h4>
                    <p>Internet Service Provider Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.onesky.com.bd/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="portfolioItem9" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/guest.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Guest Delivery</h4>
                    <p>Door to Door Delivery Service</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.facebook.com/Guestdhk" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="portfolioItem88" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/onesky.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">One Sky</h4>
                    <p>Internet Service Provider Website</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.onesky.com.bd/" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="portfolioItem10" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/food.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">The food we eat</h4>
                    <p>It's about food. Spread the love with food.The food we eat.</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.facebook.com/profile.php?id=100086438711379" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="portfolioItem10" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="{{ asset('frontAssets') }}/img/bizzflare.jpg" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Bizzflare</h4>
                    <p>It's Digital Services. Spread the love with Bizzflare.</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.facebook.com/profile.php?id=61553970083838" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core js | Do not Delete -->
    <script src="{{ asset('frontAssets') }}/js/jquery.min.js"></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="{{ asset('frontAssets') }}/js/bootstrap.min.js"></script>

    <!-- Bootstrap progressbar JS -->
    <script src="{{ asset('frontAssets') }}/js/bootstrap-progressbar.min.js"></script>

    <!-- Count To JS -->
    <script src="{{ asset('frontAssets') }}/js/jquery.countTo.min.js"></script>

    <!-- Easing JS -->
    <script src="{{ asset('frontAssets') }}/js/jquery.easing.min.js"></script>

    <!-- Shuffle JS -->
    <script src="{{ asset('frontAssets') }}/js/jquery.shuffle.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="{{ asset('frontAssets') }}/js/slick.min.js"></script>

    <!-- Touchswipe JS -->
    <script src="{{ asset('frontAssets') }}/js/touchswipe.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('frontAssets') }}/js/script.js"></script>
    <script src="{{ asset('frontAssets') }}/js/custom.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.querySelector("body").classList.add("loaded");
            }, 10)
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "90%";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>
    <!--Start whatsapp chat plugin -->
    <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-733754a7-dfa6-4452-9dbe-090544a1dd62" data-elfsight-app-lazy></div> -->
    <!--End whatsapp chat plugin -->

    <!-- Template Javascript -->
    <script src="{{ asset('frontEndAssets') }}/js/main.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6576ae4d07843602b80060c8/1hhbpho40';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
