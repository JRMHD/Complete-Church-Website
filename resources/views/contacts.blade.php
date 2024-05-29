<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Contacts Us</title>
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
        <section class="breadcrumbs-custom bg-image simple-breadcrumbs mode-2"
            data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contacts</li>
                </ul>
            </div>
        </section>
        <!--Mailform-->
        <section class="section section-md">
            <div class="container">
                <div class="row row-50 row-narrow-50">
                    <div class="col-lg-6">
                        <div class="pre-title">come visit us</div>
                        <h2> How to find us</h2>
                        <p class="text-sm">We invite you to come just as you are and be a part of our community of
                            people who are
                            striving together to discover God’s purpose and plan for their lives!</p>
                        <ul class="contact-list offset-xl-50">
                            <li>Umoja 1, Nairobi, Kenya</li>
                            <li><a class="phone ml-0" href="tel:#">
                                    +254 738 900 924</a></li>
                            <li><a class="phone ml-0" href="tel:#">
                                    +254 780 823 843</a></li>
                            <li><a class="ml-0 link-secondary" href="mailto:#">heavenvim@yahoo.com</a></li>
                        </ul>
                        <ul class="social-list offset-xl-50 social-list-md">
                            <li><a href="#"><span class="icon fa fa-youtube-play"></span></a></li>
                            <li><a href="#"><span class="icon fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="icon fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="icon fa fa-rss"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="pre-title">Get in touch</div>
                        <h2>We want to hear from you</h2>
                        <p class="text-sm">If you have a question, a request, or a story to share with us, we’d love to
                            hear from
                            you!</p>

                    </div>
                </div>
            </div>
        </section>

        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>

        <style>
            .contact-form {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .contact-form h2 {
                margin-bottom: 20px;
                text-align: center;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .form-group input,
            .form-group textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }

            .form-group textarea {
                resize: vertical;
            }

            button[type="submit"] {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>

        <!--Google Map-->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.279720964807!2d36.8785135472596!3d-1.2817999792960237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f13f4bae98979%3A0xdf262d5e78cb3b77!2sUmoja%20Phase%201%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1716330854953!5m2!1sen!2ske"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        @include('footer')
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
