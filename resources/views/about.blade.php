<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Discover Heaven Vision Church International</title>
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
        <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-bg-1.jpg)"
            data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
            <div class="container">
                <div class="h1 breadcrumbs-custom-title" style="color: #EECD11;">About us</div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </section>
        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="pre-title wow fadeInLeft" data-wow-delay=".1s">Welcome to Heaven Vision Church
                            International
                        </div>
                        <h2 class="wow fadeInRight" data-wow-delay=".2s">Experience God's Love for Everyone</h2>
                        <p class="text-sm wow fadeInUp" data-wow-delay=".3s">Heaven Vision Church International is
                            dedicated to
                            spreading God's love far and wide, touching hearts and changing lives.</p>
                        <p class="text-sm wow fadeInUp" data-wow-delay=".4s">Our community is one of inclusivity and
                            acceptance,
                            where everyone is welcomed with open arms regardless of background or circumstance.</p>
                        <p class="text-sm wow fadeInUp" data-wow-delay=".5s">Join us as we journey together in faith
                            and fellowship,
                            supporting and uplifting each other along the way.</p>
                        <p class="text-sm wow fadeInUp" data-wow-delay=".6s">Whether you're seeking spiritual
                            guidance, community,
                            or simply a place to belong, Heaven Vision Church International is here for you.</p>
                    </div>
                </div>
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

        <!-- Holistic Involvement Section -->
        <section id="holistic-involvement" class="section">
            <div class="container">
                <h2 class="section-title">Holistic Involvement</h2>
                <p>
                    In Kenya, churches play a significant role not only in spiritual guidance but also in
                    socio-economic development.
                    Their involvement spans various sectors including education, healthcare, agriculture, and
                    community development.
                    Churches often leverage their extensive networks and influence to drive change and support
                    development agendas.
                </p>
                <div class="focus-areas">
                    <div class="focus-area">
                        <h3>Education and Training</h3>
                        <p><strong>Current Focus:</strong> Churches have established numerous schools, colleges, and
                            universities, providing education to thousands. They offer scholarships and bursaries to
                            needy students.</p>
                        <p><strong>Future Focus:</strong> Enhancing vocational training and technical education to
                            equip youth with employable skills.</p>
                    </div>
                    <div class="focus-area">
                        <h3>Healthcare</h3>
                        <p><strong>Current Focus:</strong> Churches operate hospitals and clinics, particularly in
                            rural areas where government facilities are scarce. They run health campaigns addressing
                            HIV/AIDS, malaria, and maternal health.</p>
                        <p><strong>Future Focus:</strong> Expanding healthcare services, including mental health and
                            specialized medical services, and investing in telemedicine to reach remote areas.</p>
                    </div>
                    <div class="focus-area">
                        <h3>Agriculture</h3>
                        <p><strong>Current Focus:</strong> Churches support agricultural projects through training
                            in sustainable farming practices, provision of seeds and tools, and facilitating access
                            to markets.</p>
                        <p><strong>Future Focus:</strong> Initiating large-scale agribusiness projects, promoting
                            agri-tech innovations, and enhancing food security through cooperative farming and value
                            addition.</p>
                    </div>
                    <div class="focus-area">
                        <h3>Economic Empowerment</h3>
                        <p><strong>Current Focus:</strong> Microfinance initiatives, savings and credit cooperatives
                            (SACCOs), and entrepreneurship training help communities build financial stability.</p>
                        <p><strong>Future Focus:</strong> Scaling up microfinance programs, supporting start-ups,
                            and fostering social enterprises to create jobs.</p>
                    </div>
                    <div class="focus-area">
                        <h3>Community Development</h3>
                        <p><strong>Current Focus:</strong> Churches are involved in building infrastructure such as
                            water supply systems, sanitation facilities, and housing for the disadvantaged.</p>
                        <p><strong>Future Focus:</strong> Strengthening disaster preparedness and response,
                            advocating for environmental conservation, and enhancing urban development projects.</p>
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* General Section Styles */
            .section {
                padding: 80px 0;
                text-align: center;
            }

            .section-title {
                font-size: 2.5rem;
                margin-bottom: 40px;
                color: #222;
                text-transform: uppercase;
                letter-spacing: 2px;
            }

            .section-content {
                font-size: 1.2rem;
                color: #555;
                line-height: 1.6;
                max-width: 800px;
                margin: 0 auto 40px;
            }

            /* Vision Section */
            #vision {
                background: #f4f4f4;
            }

            /* Mission Section */
            #mission {
                background: #fff;
            }

            .mission-list {
                list-style: none;
                padding: 0;
                font-size: 1.2rem;
                color: #555;
                line-height: 1.6;
                max-width: 800px;
                margin: 0 auto;
                text-align: left;
            }

            .mission-list li {
                margin-bottom: 10px;
            }

            /* Core Values Section */
            #core-values {
                background: #fff;
            }

            .values-list {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0;
                list-style: none;
                text-align: left;
            }

            .values-list li {
                background: #f8f8f8;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease-in-out;
            }

            .values-list li:hover {
                transform: translateY(-10px);
            }

            .values-list h3 {
                margin-top: 0;
                color: #222;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .values-list p {
                margin-bottom: 10px;
            }

            /* Media Queries */
            @media (max-width: 768px) {
                .container {
                    padding: 0 20px;
                }

                .mission-list {
                    text-align: center;
                }
            }
        </style>



        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row row-narrow-50 align-items-center row-30">
                    <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="inset-xl-right-60"><img src="images/about-1-660x495.jpg" alt=""
                                width="660" height="495" />
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay=".3s">
                        <div class="pre-title">Our Beliefs</div>
                        <h2>Living in God’s Amazing Grace!</h2>
                        <p>At Heaven Vision Church International, we believe in living our lives in the amazing grace of
                            God. We
                            strive to embody the teachings of Jesus Christ and share His love with everyone.</p>
                        <p>We believe in the power of prayer, the importance of community, and the transformational
                            impact of God's
                            Word. Our faith guides us to serve others with compassion and humility, and to seek justice
                            and equality
                            for all.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row row-narrow-50 align-items-center row-30 flex-xl-row-reverse">
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay=".2s">
                        <div class="inset-xl-left-60"><img src="images/about-2-660x495.jpg" alt=""
                                width="660" height="495" />
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="pre-title">LEAD BISHOP</div>
                        <h2>Bishop Maurice M. Matere<br>Lead Pastor</h2>
                        <p>Meet our Lead Pastor, Maurice M. Matere, who guides our congregation with passion and
                            devotion.</p>
                        <p>Bishop Matere is committed to nurturing spiritual growth, fostering community, and spreading
                            the message
                            of God's love to all.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row row-narrow-50 align-items-center row-30">
                    <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="inset-xl-right-60"><img src="images/about-3-660x495.jpg" alt=""
                                width="660" height="495" />
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay=".3s">
                        <div class="pre-title">Become a part of our community</div>
                        <h2>Join Heaven Vision Church International</h2>
                        <p>Join us and become a valued member of our community, dedicated to spreading love and serving
                            others.</p>
                        <ul class="list-marked inset-xl-left-20 font-weight-medium text-primary">
                            <li>Engage in our church office activities</li>
                            <li>Extend warm greetings to newcomers</li>
                            <li>Embrace hospitality by volunteering</li>
                            <li>Join our impactful small groups</li>
                        </ul>
                        <p>Experience the warmth of our community and the joy of serving together. Ready to embark on
                            this journey
                            with us?</p>
                        <a class="shadow btn btn-icon btn-icon-right btn-primary btn-svg offset-xl-55"
                            href="{{ url('contacts') }}" data-wow-delay=".3s">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                    viewbox="0 0 18 10" fill="#fff">
                                    <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                </svg>
                            </span>
                            <span>Join now</span>
                        </a>
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
