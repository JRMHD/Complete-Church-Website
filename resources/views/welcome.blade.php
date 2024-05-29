<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Heaven Vision Church International - Umoja 1, Nairobi, Kenya</title>

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

        <body>
            <section class="section section-lg section-intro">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 text-center">
                            <h1 style="font-weight: bold; color: #FFD700;" class="wow fadeInUp" data-wow-delay=".1s">
                                Bringing the Whole Counsel of God to All Men</h1>
                            <p class="wow fadeInUp text-white text-sm" data-wow-delay=".2s">Welcome to Heaven Vision
                                Church
                                International, your spiritual home in Umoja 1, Nairobi. Join us in our mission to love
                                God, love others,
                                and serve the world.</p>
                        </div>
                    </div>
                </div>

            </section>

            <div class="church-giving">
                <h2>Church Giving</h2>
                <p>We appreciate your contributions to support our ministry. Your generosity helps us continue our
                    mission and serve our community.</p>
                <div class="payment-details">
                    <h3>Payment Details</h3>
                    <ul>
                        <li><strong>Paybill No.:</strong> 247247</li>
                        <li><strong>Account No.:</strong> +254720900924</li>
                    </ul>
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
            <style>
                .church-giving {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .church-giving h2 {
                    margin-bottom: 20px;
                    text-align: center;
                }

                .church-giving p {
                    margin-bottom: 20px;
                }

                .payment-details {
                    background-color: #f8f8f8;
                    padding: 20px;
                    border-radius: 5px;
                }

                .payment-details h3 {
                    margin-top: 0;
                    margin-bottom: 10px;
                    font-size: 18px;
                }

                .payment-details ul {
                    padding: 0;
                    margin: 0;
                    list-style: none;
                }

                .payment-details ul li {
                    margin-bottom: 10px;
                }

                .payment-details ul li strong {
                    font-weight: bold;
                }
            </style>

            <!--Welcome-->
            <section class="section section-lg bg-default">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="pre-title wow fadeInLeft" data-wow-delay=".1s">Welcome to Heaven Vision Church
                                International
                            </div>
                            <h2 class="wow fadeInRight" data-wow-delay=".2s">Bringing the Whole Counsel of God to All
                                Men</h2>
                            <p class="text-sm wow fadeInUp" data-wow-delay=".3s">Our mission is to bring 1000 lost souls
                                back to their God and to train 50 cells and 70 leaders by April 2027. We are committed
                                to loving God, loving others, and serving the world by supporting the needy masses and
                                spreading the Gospel. Join us in this divine mission and partner with us through prayer,
                                evangelism, training, and support.</p>
                            <a class="shadow btn btn-icon btn-icon-right wow fadeInUp" href="{{ url('events') }}"
                                data-wow-delay=".3s"
                                style="background-color: #4CBB17; color: #fff; transition: background-color 0.3s ease;">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                        viewbox="0 0 18 10" fill="#fff">
                                        <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                    </svg>
                                </span>
                                <span>More events us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Vision Section -->
            <section id="vision" class="section">
                <div class="container">
                    <h2 class="section-title">Our Vision</h2>
                    <p class="section-content">To be a vibrant community of faith that transforms lives through the
                        power of the Gospel, fostering deep relationships with God and one another, and impacting our
                        community and the world with God's love.</p>
                </div>
            </section>

            <!-- Mission Section -->
            <section id="mission" class="section">
                <div class="container">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="section-content">To know Jesus and make Him known through:</p>
                    <ul class="mission-list">
                        <li>Worship: Engaging in heartfelt and Spirit-led worship.</li>
                        <li>Discipleship: Equipping believers to grow in their faith.</li>
                        <li>Outreach: Reaching the lost and serving the needy.</li>
                        <li>Leadership: Training and empowering leaders for effective Ministry.</li>
                    </ul>
                </div>
            </section>

            <!-- Core Values Section -->
            <section id="core-values" class="section">
                <div class="container">
                    <h2 class="section-title">Our Core Values</h2>
                    <ul class="values-list">
                        <li>
                            <h3>Faith</h3>
                            <p>Trusting in God's word and promises.</p>
                        </li>
                        <li>
                            <h3>Love</h3>
                            <p>Demonstrating God's love through actions and relationships.</p>
                        </li>
                        <li>
                            <h3>Community</h3>
                            <p>Building a supportive and inclusive church family.</p>
                        </li>
                        <li>
                            <h3>Service</h3>
                            <p>Committing to serve others selflessly.</p>
                        </li>
                        <li>
                            <h3>Integrity</h3>
                            <p>Upholding honesty and transparency in all we do.</p>
                        </li>
                    </ul>
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



            <!-- Scriptural Back-Up Section -->
            <section id="scriptural-backup" class="section">
                <div class="container">
                    <h2 class="section-title">Scriptural Back-Up</h2>
                    <p>"Therefore go and make disciples of all nations, baptizing them in the name of the Father and of
                        the Son and of the Holy Spirit." - Matthew 28:19</p>
                    <p>"You are the light of the world. A city on a hill cannot be hidden." - Matthew 5:14</p>
                </div>
            </section>

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

            <!-- Five-Year Strategic Plan Section -->
            <section id="strategic-plan" class="section">
                <div class="container">
                    <h2 class="section-title">Five-Year Strategic Plan</h2>
                    <div class="plan-areas">
                        <div class="plan-area">
                            <h3>Agriculture Projects</h3>
                            <p><strong>Goal:</strong> To enhance food security and income levels of community members
                                through sustainable agriculture.</p>
                            <ul class="plan-list">
                                <li>Training Programs: Implement extensive training on modern farming techniques,
                                    organic farming, and climate-resilient crops.</li>
                                <li>Agribusiness Support: Provide financial and technical support for agribusiness
                                    ventures, including access to credit and market linkages.</li>
                                <li>Research and Innovation: Collaborate with agricultural research institutions to
                                    adopt new technologies and crop varieties.</li>
                                <li>Infrastructure Development: Invest in irrigation systems, storage facilities, and
                                    processing units to reduce post-harvest losses.</li>
                            </ul>
                        </div>
                        <div class="plan-area">
                            <h3>Education and Capacity Building</h3>
                            <p><strong>Goal:</strong> To improve educational outcomes and empower individuals with
                                skills for economic self-reliance.</p>
                            <ul class="plan-list">
                                <li>School Improvement Programs: Upgrade facilities and resources in church-run schools.
                                </li>
                                <li>Scholarships and Bursaries: Increase financial support for students from low-income
                                    families.</li>
                                <li>Vocational Training Centers: Establish centers focused on technical and vocational
                                    education to meet the labor market demands.</li>
                                <li>Adult Education: Expand adult literacy programs and continuing education
                                    opportunities.</li>
                            </ul>
                        </div>
                        <div class="plan-area">
                            <h3>Healthcare Services Expansion</h3>
                            <p><strong>Goal:</strong> To provide comprehensive healthcare services, particularly in
                                underserved areas.</p>
                            <ul class="plan-list">
                                <li>Hospital Upgrades: Modernize existing facilities and equip them with advanced
                                    medical technology.</li>
                                <li>Community Health Programs: Launch health awareness and preventive care campaigns.
                                </li>
                                <li>Mental Health Services: Integrate mental health into primary healthcare services.
                                </li>
                                <li>Telehealth Initiatives: Use telehealth to provide medical consultations and
                                    follow-ups in remote regions.</li>
                            </ul>
                        </div>
                        <div class="plan-area">
                            <h3>Economic Empowerment and Microfinance</h3>
                            <p><strong>Goal:</strong> To foster economic independence and entrepreneurship among
                                community members.</p>
                            <ul class="plan-list">
                                <li>Microfinance Expansion: Broaden the reach of microfinance services to more
                                    communities.</li>
                                <li>Entrepreneurship Training: Offer business development services, mentorship, and
                                    training for small and medium enterprises (SMEs).</li>
                                <li>Savings Programs: Promote savings groups and cooperative societies to build
                                    financial resilience.</li>
                            </ul>
                        </div>
                        <div class="plan-area">
                            <h3>Community Infrastructure Development</h3>
                            <p><strong>Goal:</strong> To improve living conditions and support sustainable community
                                development.</p>
                            <ul class="plan-list">
                                <li>Water and Sanitation Projects: Construct and maintain water supply systems and
                                    sanitation facilities.</li>
                                <li>Housing Initiatives: Develop affordable housing projects for low-income families.
                                </li>
                                <li>Environmental Conservation: Implement tree planting and conservation projects to
                                    address climate change.</li>
                                <li>Disaster Preparedness: Strengthen community capacity to respond to natural disasters
                                    and emergencies.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>



            <style>
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

                /* Vision Section */
                #vision {
                    background: #f4f4f4;
                }

                #vision p {
                    font-size: 1.2rem;
                    color: #555;
                    line-height: 1.6;
                    max-width: 800px;
                    margin: 0 auto;
                }

                /* Mission Section */
                #mission {
                    background: #fff;
                }

                #mission p,
                #mission ul {
                    font-size: 1.2rem;
                    color: #555;
                    line-height: 1.6;
                    max-width: 800px;
                    margin: 0 auto;
                    text-align: left;
                }

                .mission-list {
                    list-style: none;
                    padding: 0;
                    text-align: left;
                }

                .mission-list li {
                    margin-bottom: 10px;
                }

                /* Core Values Section */
                #core-values {
                    background: #fff;
                }

                .core-values-list {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 40px;
                    max-width: 1200px;
                    margin: 0 auto;
                }

                .core-values-item {
                    background: #f8f8f8;
                    padding: 40px;
                    border-radius: 8px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease-in-out;
                }

                .core-values-item:hover {
                    transform: translateY(-10px);
                }

                .core-values-item h3 {
                    margin-top: 0;
                    color: #222;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                }

                .core-values-item p {
                    margin-bottom: 10px;
                }

                /* Holistic Involvement Section */
                #holistic-involvement {
                    background: #f8f8f8;
                }

                .focus-areas {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 40px;
                    max-width: 1200px;
                    margin: 0 auto;
                }

                .focus-area {
                    background: #fff;
                    padding: 40px;
                    border-radius: 8px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease-in-out;
                }

                .focus-area:hover {
                    transform: translateY(-10px);
                }

                .focus-area h3 {
                    font-size: 1.8rem;
                    margin-bottom: 20px;
                    color: #222;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                }

                .focus-area p {
                    margin: 10px 0;
                }

                /* Contact Section */
                #contact {
                    background: linear-gradient(to right, #3498db, #8e44ad);
                    color: #fff;
                    text-align: center;
                    padding: 80px 0;
                }

                .contact-details,
                .contact-social {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-bottom: 40px;
                }

                .contact-details li,
                .contact-social li {
                    list-style: none;
                    margin: 10px 0;
                }

                .contact-social a {
                    color: #fff;
                    font-size: 2rem;
                    margin: 0 20px;
                    transition: color 0.3s;
                }

                .contact-social a:hover {
                    color: #f8f8f8;
                }

                /* Media Queries */
                @media (max-width: 768px) {
                    .container {
                        padding: 20px;
                    }

                    .core-values-list,
                    .focus-areas {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media (max-width: 480px) {

                    .core-values-list,
                    .focus-areas {
                        grid-template-columns: 1fr;
                    }
                }
            </style>


            <!--Posts-->
            <section class="section section-lg bg-default">
                <div class="container container-custom">
                    <div class="row row-narrow-66 row-40">
                        <!-- Post 1 -->
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
                            <div class="post-classic">
                                <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                            src="images/thumbnail-1-530x370.jpg" alt="" width="530"
                                            height="370" /></a></div>
                                <div class="post-classic__caption"><span class="post-info">Heaven Vision Church</span>
                                    <h3 class="post-title"><a href="{{ url('events') }}">Empowering Leaders for
                                            Tomorrow:
                                            Training
                                            Session</a></h3>
                                    <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                        href="{{ url('events') }}"><span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                viewbox="0 0 18 10">
                                                <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                            </svg></span><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Post 2 -->
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                            <div class="post-classic">
                                <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                            src="images/thumbnail-2-530x370.jpg" alt="" width="530"
                                            height="370" /></a></div>
                                <div class="post-classic__caption"><span class="post-info">Heaven Vision Church</span>
                                    <h3 class="post-title"><a href="{{ url('events') }}">Community Outreach: Feeding
                                            the
                                            Needy</a></h3>
                                    <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                        href="{{ url('events') }}"><span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                viewbox="0 0 18 10">
                                                <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                            </svg></span><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Post 3 -->
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                            <div class="post-classic">
                                <div class="post-classic__media"><a href="{{ url('events') }}"><img
                                            src="images/thumbnail-3-530x370.jpg" alt="" width="530"
                                            height="370" /></a></div>
                                <div class="post-classic__caption"><span class="post-info">Heaven Vision Church</span>
                                    <h3 class="post-title"><a href="{{ url('events') }}">Evangelism Workshop: Sharing
                                            the
                                            Gospel
                                            Effectively</a></h3>
                                    <a class="btn btn-icon btn-icon-right btn-transparent btn-svg"
                                        href="{{ url('events') }}"><span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                viewbox="0 0 18 10">
                                                <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                            </svg></span><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Welcome-->
            <section class="section section-lg bg-default">
                <div class="container">
                    <div class="row row-30 align-items-center">
                        <div class="col-lg-6 p-xl-0 wow fadeInLeft"><img src="images/home-1-660x495.jpg"
                                alt="Heaven Vision Church Community" width="660" height="495" />
                        </div>
                        <div class="col-lg-6 inset-left-110">
                            <div class="pre-title wow fadeInRight" data-wow-delay=".1s">Our Community</div>
                            <h2 class="wow fadeInRight" data-wow-delay=".2s">Serving God and Serving the Community
                            </h2>
                            <p class="wow fadeInRight" data-wow-delay=".3s">At Heaven Vision Church International, we
                                foster biblical
                                community through small groups and outreach programs. Our mission is to love God, love
                                others, and make
                                a tangible impact by contributing our time, talents, and resources to serve our
                                community and the world.
                            </p>
                            <a class="shadow btn btn-icon btn-icon-right btn-primary btn-svg offset-xl-50 wow fadeInUp"
                                href="{{ url('about') }}" data-wow-delay=".3s">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                        viewbox="0 0 18 10" fill="#fff">
                                        <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                                    </svg>
                                </span>
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--Donation-->
            <section class="section section-lg bg-default">
                <div class="container">
                    <div class="row row-30 align-items-center flex-column-reverse flex-lg-row">
                        <div class="col-lg-6 inset-right-110">
                            <div class="pre-title wow fadeInLeft" data-wow-delay=".1s">Your Donation Matters</div>
                            <h2 class="wow fadeInLeft" data-wow-delay=".2s">Support Our Mission</h2>
                            <p class="wow fadeInLeft" data-wow-delay=".3s">Giving is a biblical principle that, when
                                lived by,
                                produces a rich harvest in our lives. Consider donating today and join the wonderful
                                community of our
                                church supporters. Your giving is making a difference in this church, our community, and
                                the world.</p>
                            <p class="wow fadeInLeft" data-wow-delay=".3s"><strong>Call us to donate: +254 738 900
                                    924</strong></p>
                            <a class="shadow btn btn-secondary offset-xl-50 wow fadeInUp"
                                href="{{ url('contacts') }}" data-wow-delay=".3s"
                                style="color: white; background-color: #4CBB17;">Donate Now</a>
                        </div>
                        <div class="church-giving">
                            <h2>Church Giving</h2>
                            <p>We appreciate your contributions to support our ministry. Your generosity helps us
                                continue our
                                mission and serve our community.</p>
                            <div class="payment-details">
                                <h3>Payment Details</h3>
                                <ul>
                                    <li><strong>Paybill No.:</strong> 247247</li>
                                    <li><strong>Account No.:</strong> +254720900924</li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 p-xl-0 wow fadeInRight"><img src="images/home-2-660x495.jpg"
                                alt="Donation Image" width="660" height="495" />
                        </div> --}}
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
