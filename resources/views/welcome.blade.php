<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Title -->
    <title>TIP Reporting System</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/foneeyt-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/nexus.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}') }}" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">

    <style>
        #more {
            display: none;
        }

        .mybox1 {
            display: none;

        }
    </style>
</head>

<body>
    <div id="body_bg">
        <!-- pre_header Start -->
        <!--
        <div id="pre_header" class="container">
            <div class="row margin-top-10 visible-lg">
                <div class="col-md-6">
                    <p>
                        <strong>Phone:</strong>&nbsp;1-800-123-4567
                    </p>
                </div>
                <div class="col-md-6 text-right">
                    <p>
                        <strong>Email:</strong>info@example.com
                    </p>
                </div>
            </div>
        </div>
        -->
        <!-- pre_header Start -->
        <div class="primary-container-group">
            <!-- Background -->
            <div class="primary-container-background">
                <div class="primary-container"></div>
                <div class="clearfix"></div>
            </div>
            <!--End Background -->
            <div class="primary-container">

                <!-- === END HEADER === -->
                <!-- === BEGIN CONTENT === -->
                <div id="content">
                    <div class="container no-padding">
                        <div class="row">
                            <!-- Carousel Slideshow -->
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <!-- Carousel Indicators -->

                                <div class="clearfix"></div>
                                <!-- End Carousel Indicators -->
                                <!-- Carousel Images -->
                                @php
                                $banner=DB::table('banners')->first()
                                @endphp
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{ asset('uploads/banner/' . $banner->image) }}">

                                    </div>
                                </div>
                                <!-- End Carousel Images -->

                            </div>
                            <!-- End Carousel Slideshow -->
                        </div>
                    </div>

                    <div class="container">
                        <div class="row margin-vert-30">
                            <!-- Main Text -->
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> About Us </h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Online database and reporting page on Trafficking in Person (TIP) in <span id="dots">...</span><span id="more">Bangladesh developed and hosted by Ministry of Home Affairs, Public Security Division with the technical assistance of UNODC and INCIDIN Bangladesh under the GloACT Bangladesh Project.
                                            </span></p>
                                        <button onclick="myFunction()" id="myBtn">Read more</button>

                                        <script>
                                            function myFunction() {
                                                var dots = document.getElementById("dots");
                                                var moreText = document.getElementById("more");
                                                var btnText = document.getElementById("myBtn");

                                                if (dots.style.display === "none") {
                                                    dots.style.display = "inline";
                                                    btnText.innerHTML = "Read more";
                                                    moreText.style.display = "none";
                                                } else {
                                                    dots.style.display = "none";
                                                    btnText.innerHTML = "Read less";
                                                    moreText.style.display = "inline";
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> Contact</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                        <div class="mybox">
                                            <p> Email: <b>info@tipreportbd.org</b>

                                            </p>

                                        </div>

                                        </p>




                                    </div>
                                </div>
                                <div class="panel panel-default" style="padding: 0,0,0,0; margin: auto;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Login to Upload Data</h3>
                                    </div>
                                    <div class="panel-body" style="padding: 0,0,0,0; margin: auto;">
                                        <p style="text-align: center;">
                                            <a href="https://tipreportbd.org/login" target="_blank"
                                                class="btn btn-aqua " style="display: block;"> Case Report >></a>
                                        </p>
                                    </div>
                                </div>



                            </div>
                            <div class="col-md-6">
                                <h2>Message Box</h2>
                                <br>
                                <blockquote>
                                    <!-- <p>
                                        <em> The Government of Bangladesh does not fully meet the minimum standards for the elimination of trafficking but is making significant efforts to do so. The government </em>
                                        <span id="span1">...</span>
                                            <span class="mybox1" id="mybox1id">
                                                demonstrated overall increasing efforts compared with the previous reporting period; therefore, Bangladesh remained on Tier 2. These efforts included increasing investigations, prosecutions, and convictions against traffickers. The government formally adopted victim identification guidelines for front-line officials and identified more victims of trafficking. The government also amended its overseas migrant worker’s policy to bring recruitment agents under greater oversight, thereby increasing accountability. In addition, the government deposited funding in a victim compensation fund for trafficking victims for the first time. The Government of Bangladesh is currently providing Trafficking in Persons (TIP) Report on annual basis which is an annual status update on the state of global anti-trafficking efforts. It is also the world’s most comprehensive resource of governmental anti-trafficking efforts and reflects the U.S. Government’s commitment to global leadership on this key human rights and law enforcement issue.
                                            </span>
                                    </p> -->
                                    <p>Bangladesh has been placed in Tier 2 in the 2025 Trafficking in Persons (TIP) Report by the US State Department, marking the sixth consecutive year in this categor</p> <br>

                                </blockquote>
                                <script>
                                    function changeReadMore() {
                                        const mycontent =
                                            document.getElementById('mybox1id');
                                        const mybutton =
                                            document.getElementById('mybuttonid');
                                        const span1 = document.getElementById("span1")

                                        if (mycontent.style.display === 'none' ||
                                            mycontent.style.display === '') {
                                            mycontent.style.display = 'inline';
                                            span1.style.display = "none";
                                            mybutton.textContent = 'Read Less';
                                        } else {
                                            mycontent.style.display = 'none';
                                            mybutton.textContent = 'Read More';
                                            span1.style.display = "inline";
                                        }
                                    }
                                </script>
                            </div>
                            <!-- End Main Text -->
                            <!-- Side Column -->
                            <div class="col-md-3">

                               
                                <div style="height: 10px;"></div>

                                <div class="panel panel-default" style="padding: 0,0,0,0; margin: auto;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Key Documents</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="posts-list margin-top-10">
                                            <li>
                                                <div class="recent-post">
                                                    <a href="">
                                                        <img class="pull-left" src="{{asset('front/assets/img/TOP.png')}}"
                                                            alt="thumb1">
                                                    </a>
                                                    <div class="posts-list-title">TIP Reporting System
                                                        <br><a href="https://tip-phase2.inspire32.com/login" target="_blank">Phase 2</a>
                                                    </div>

                                                </div>

                                            </li>
                                            <li>
                                                <div class="recent-post">
                                                    <a href="">
                                                        <img class="pull-left" src="{{asset('front/assets/img/Buttom.png')}}"
                                                            alt="thumb2">
                                                    </a>
                                                    <a href="#" class="posts-list-title">Sidebar post example</a>
                                                    <br>
                                                    <span class="recent-post-date">
                                                        July 30, 2013
                                                    </span>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                 <div style="height: 10px;"></div>
                                <div class="panel panel-default" style="padding: 0,0,0,0; margin: auto;">
                                    <img src="{{asset('front/assets/img/report.png')}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->

        <!-- Footer Menu -->

        <!-- End Footer Menu -->
        <!-- JS -->
        <script type="text/javascript" src="{{ asset('front/assets/js/jquery.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('front/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('front/assets/js/scripts.js') }}"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="{{ asset('front/assets/js/jquery.isotope.js') }}" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="{{ asset('front/assets/js/jquery.slicknav.js') }}" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="{{ asset('front/assets/js/jquery.visible.js') }}" charset="utf-8"></script>
        <!-- Sticky Div -->
        <script type="text/javascript" src="{{ asset('front/assets/js/jquery.sticky.js') }}" charset="utf-8"></script>
        <!-- Slimbox2-->
        <script type="text/javascript" src="{{ asset('front/assets/js/slimbox2.js') }}" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="{{ asset('front/assets/js/modernizr.custom.js') }}" type="text/javascript"></script>
        <!-- End JS -->
</body>

</html>
<!-- === END FOOTER === -->