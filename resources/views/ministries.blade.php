<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Ministries - Heaven Vision Church International</title>
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
        <section class="breadcrumbs-custom bg-image bg-none"
            data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
            <div class="container">
                <div class="h1 breadcrumbs-custom-title">Our <br class="d-none d-xl-block"> Ministries</div>
                <p class="breadcrumbs-custom-caption">Discover the diverse ministries at Heaven Vision Church
                    International
                    dedicated to serving our community and spreading God's love.</p>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Ministries</li>
                </ul>
            </div>
        </section>

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


        <section class="section-lg section bg-default">
            <div class="container">
                <div class="row row-narrow-50 row-xl-100" data-lightgallery="group">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".1s">
                        <a class="gallery-thumbnail" href="images/ministries-1-390x495.jpg" data-lightgallery="item">
                            <img src="images/ministries-1-390x495.jpg" alt="" width="390" height="495" />
                            <div class="float-title">Youth Ministry</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                        <a class="gallery-thumbnail" href="images/ministries-2-390x495.jpg" data-lightgallery="item">
                            <img src="images/ministries-2-390x495.jpg" alt="" width="390" height="495" />
                            <div class="float-title">Men’s Ministry</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <a class="gallery-thumbnail" href="images/ministries-3-390x495.jpg" data-lightgallery="item">
                            <img src="images/ministries-3-390x495.jpg" alt="" width="390" height="495" />
                            <div class="float-title">Transformation</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                        <a class="gallery-thumbnail" href="images/ministries-4-390x495.jpg" data-lightgallery="item">
                            <img src="images/ministries-4-390x495.jpg" alt="" width="390" height="495" />
                            <div class="float-title">Women's Ministry</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <a class="gallery-thumbnail" href="images/ministries-5-390x495.jpg" data-lightgallery="item">
                            <img src="images/ministries-5-390x495.jpg" alt="" width="390" height="495" />
                            <div class="float-title">Children's Ministry</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                        <a class="gallery-thumbnail" href="images/ministries-6-390x495.jpg" data-lightgallery="item">
                            <img src="images/ministries-6-390x495.jpg" alt="" width="390"
                                height="495" />
                            <div class="float-title">Bible Study</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg bg-default">
            <div class="container">
                <div class="pre-title text-center wow fadeInUp" data-wow-delay=".1s">Deepen Your Connection with
                    Heaven</div>
                <h2 class="wow fadeInUp text-center" data-wow-delay=".2s">Latest Sermons</h2>
                <div class="row row-narrow-50 row-40 row-xl">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="thumbnail-classic">
                            <a class="thumbnail-classic__media" href="#"><img
                                    src="images/thumbnail-classic-3-610x458.jpg" alt="" width="610"
                                    height="458" /></a>
                            <h3><a href="#">Embracing God's Grace</a></h3>
                            <span class="subtitle-sm">Bishop Maurice M. Matere | Ephesians 2:8-9</span>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="thumbnail-classic">
                            <a class="thumbnail-classic__media" href="#"><img
                                    src="images/thumbnail-classic-4-610x458.jpg" alt="" width="610"
                                    height="458" /></a>
                            <h3><a href="#">The Power of Prayer</a></h3>
                            <span class="subtitle-sm">Pastor Mary Jane Smith | James 5:16</span>
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
