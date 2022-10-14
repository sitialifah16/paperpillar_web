<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href={{asset ("assets/img/favicon.png" )}} type={{asset ("assets/image/png" )}}>
    <title>Courses</title>
    <!-- Bootstrap CSS -->
    @include('includes.css')
    <link rel="stylesheet" href={{asset ("assets/css/style.css" )}}>
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    @include('includes.header')
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Courses</h2>
                            <p>In the history of modern astronomy, there is probably no one greater leap forward than
                                the
                                building and launch of the space telescope known as the Hubble.</p>
                            <div class="page_link">
                                <a href="index.html">Home</a>
                                <a href="courses.html">Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Popular Courses</h2>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                            telescope. It’s
                            exciting to think about setting up your own viewing station.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src={{asset ("assets/img/courses/trainer1.jpg" )}} alt="">
                            <div class="authr_meta">
                                <img src={{asset ("assets/img/author1.png" )}} alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="{{ route('course-details') }}">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#"><i class="lnr lnr-user"></i>355</a>
                                    </span>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a>
                                    </span>
                                </div>
                                <div>
                                    <span class="price">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src={{asset ("assets/img/courses/trainer1.jpg" )}} alt="">
                            <div class="authr_meta">
                                <img src={{asset ("assets/img/author1.png" )}} alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="{{ route('course-details') }}">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-user"></i>355
                                        </a>
                                    </span>
                                    <span class="meta_info"><a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a></span>
                                </div>
                                <div>
                                    <span class="price df_color1">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- single course -->
               <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src={{asset ("assets/img/courses/trainer1.jpg" )}} alt="">
                            <div class="authr_meta">
                                <img src={{asset ("assets/img/author1.png" )}} alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="{{ route('course-details') }}">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-user"></i>355
                                        </a>
                                    </span>
                                    <span class="meta_info"><a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a></span>
                                </div>
                                <div>
                                    <span class="price">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single course -->
                <div class="col-lg-3 col-md-6">
                    <div class="single_course">
                        <div class="course_head overlay">
                            <img class="img-fluid w-100" src={{asset ("assets/img/courses/trainer1.jpg" )}} alt="">
                            <div class="authr_meta">
                                <img src={{asset ("assets/img/author1.png" )}} alt="">
                                <span>Mart Taylor</span>
                            </div>
                        </div>
                        <div class="course_content">
                            <h4>
                                <a href="{{ route('course-details') }}">Learn React js beginners</a>
                            </h4>
                            <p>When television was young, there was a huge popular show based on the still popular
                                fictional character of
                                Superman.</p>
                            <div class="course_meta d-flex justify-content-between">
                                <div>
                                    <span class="meta_info">
                                        <a href="#">
                                            <i class="lnr lnr-user"></i>355
                                        </a>
                                    </span>
                                    <span class="meta_info"><a href="#">
                                            <i class="lnr lnr-bubble"></i>35
                                        </a></span>
                                </div>
                                <div>
                                    <span class="price df_color2">$150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start footer Area  =================-->
    @include('includes.footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('includes.js')
</body>

</html>