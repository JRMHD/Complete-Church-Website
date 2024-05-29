<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Events at Heaven Vision Church</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto:400,500%7CIbarra+Real+Nova:400,600,600i,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        @include('header')
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image simple-breadcrumbs"
            data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
            <div class="container">
                <div class="h1 breadcrumbs-custom-title">Latest events</div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Events</li>
                </ul>
            </div>
        </section>
        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row row-xl-100">
                    <div class="col-12">
                        <div class="post-modern-box bg-image-3 bg-img-3 context-dark">
                            <div class="post-date">Heaven Vision Church</div>
                            <h2>Blessing Children as they go back to School</h2>
                            <a class="location" href="#"><span class="icon mdi-map-marker mdi"></span>Umoja 1,
                                Nairobi, Kenya</a>
                            <a class="shadow btn btn-icon btn-icon-right btn-primary btn-svg offset-xl-50"
                                href="{{ url('events') }}" data-wow-delay=".3s"><span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                        viewBox="0 0 18 10" fill="#fff">
                                        <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                    </svg></span><span>Read more</span></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row row-narrow-50 row-30">
                            <div class="col-lg-4">
                                <div class="post-classic sm">
                                    <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                                src="images/event-1-390x273.jpg" alt="" width="390"
                                                height="273" /></a></div>
                                    <div class="post-classic__caption"><span class="post-info">Heaven Vision Church
                                        </span>
                                        <h3 class="post-title"><a href="{{ url('events') }}">The Struggle with
                                                Fellowship</a>
                                        </h3>
                                        <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                            href="{{ url('events') }}"><span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                    viewBox="0 0 18 10">
                                                    <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                                </svg></span><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="post-classic sm">
                                    <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                                src="images/event-2-390x273.jpg" alt="" width="390"
                                                height="273" /></a></div>
                                    <div class="post-classic__caption"><span class="post-info">Heaven Vision Church
                                        </span>
                                        <h3 class="post-title"><a href="{{ url('events') }}">The Dissappointment With
                                                Your
                                                Pastor</a></h3>
                                        <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                            href="{{ url('events') }}"><span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                    viewBox="0 0 18 10">
                                                    <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                                </svg></span><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>


                            <div
                                style="max-width: 800px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); text-align: center;">
                                <h1 style="color: #333;">Welcome to Our Church</h1>
                                <p>Find peace, hope, and community here.</p>
                                <div class="prayer-button">
                                    <a href="{{ url('prayerrequest') }}"
                                        style="display: inline-block; padding: 10px 20px; background-color: #4caf50; color: #fff; text-decoration: none; border-radius: 4px; transition: background-color 0.3s; cursor: pointer;">Share
                                        Your Prayer Request</a>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="post-classic sm">
                                    <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                                src="images/event-3-390x273.jpg" alt="" width="390"
                                                height="273" /></a></div>
                                    <div class="post-classic__caption"><span class="post-info">Heaven Vision Church
                                        </span>
                                        <h3 class="post-title"><a href="{{ url('events') }}">The Importance of
                                                Faithful
                                                Laymen</a></h3>
                                        <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                            href="{{ url('events') }}"><span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                    viewBox="0 0 18 10">
                                                    <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                                </svg></span><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="post-modern-box bg-image-3 bg-img-4 context-dark">
                            <div class="post-date">Heaven Vision Church</div>
                            <h2>Providing food for the needy</h2>
                            <a class="location" href="#"><span class="icon mdi-map-marker mdi"></span>Umoja 1,
                                Nairobi, Kenya</a>
                            <a class="shadow btn btn-icon btn-icon-right btn-primary btn-svg offset-xl-50"
                                href="{{ url('events') }}" data-wow-delay=".3s"><span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                        viewBox="0 0 18 10" fill="#fff">
                                        <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                    </svg></span><span>Read more</span></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row row-narrow-50 row-30">
                            <div class="col-lg-4">
                                <div class="post-classic sm">
                                    <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                                src="images/event-4-390x273.jpg" alt="" width="390"
                                                height="273" /></a></div>
                                    <div class="post-classic__caption"><span class="post-info">Heaven Vision Church
                                        </span>
                                        <h3 class="post-title"><a href="{{ url('events') }}">Why Do Sermons Matter?
                                                Live
                                                Discussion</a></h3>
                                        <a class="btn btn-icon btn-icon-right
                      btn-transparent btn-svg"
                                            href="{{ url('events') }}"><span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                    viewBox="0 0 18 10">
                                                    <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                                </svg></span><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="post-classic sm">
                                    <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                                src="images/event-5-390x273.jpg" alt="" width="390"
                                                height="273" /></a></div>
                                    <div class="post-classic__caption"><span class="post-info">Heaven Vision Church
                                        </span>
                                        <h3 class="post-title"><a href="{{ url('events') }}"> The Power of Faith in
                                                Your
                                                Everyday Life</a>
                                        </h3>
                                        <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                            href="{{ url('events') }}"><span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                    viewBox="0 0 18 10">
                                                    <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                                </svg></span><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="post-classic sm">
                                    <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                                src="images/event-6-390x273.jpg" alt="" width="390"
                                                height="273" /></a></div>
                                    <div class="post-classic__caption"><span class="post-info">Heaven Vision Church
                                        </span>
                                        <h3 class="post-title"><a href="{{ url('events') }}">The Rules of Modern
                                                Christian
                                                Dating</a></h3>
                                        <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                            href="{{ url('events') }}"><span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                    viewBox="0 0 18 10">
                                                    <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                                </svg></span><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('footer')
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
