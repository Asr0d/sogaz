<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>СОГАЗ МЕД</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('home/img/favicon.png')}}" rel="icon">
    <link href="{{asset('home/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('home/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('home/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: NewBiz
      Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="{{asset('home/img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="{{route('login')}}"><button class="button-login" id="form-open">Login</button></a></li>
            </ul>

        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">
            <img src="{{asset('home/img/intro-img.svg')}}" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
            <h2>Страхование -<br><span>это просто!</span><br>Мы покажем как</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="#services" class="btn-services scrollto">Our Services</a>
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>О нас</h3>
                <p>Мы убеждены, что обучение и постоянное развитие являются ключом к успеху в страховой индустрии</p>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        На нашем сайте вы найдете широкий спектр курсов и материалов по страхованию, которые позволят вам расширить свои знания и улучшить навыки в области обслуживания клиентов
                    </p>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="title"><a href="">Развивайся с нами</a></h4>
                        <p class="description">Наш сайт поможет вам развиваться в области страхования и достигать больших результатов</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-photo"></i></div>
                        <h4 class="title"><a href="">Страхование легко</a></h4>
                        <p class="description">Мы упрощаем процесс обучения страховых представителей, чтобы они могли достичь успеха быстрее и проще</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="">Лидеры страхования</a></h4>
                        <p class="description">Наши курсы и материалы помогают нашим студентам стать лидерами в своей области деятельности</p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('home/img/about-img.svg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="{{asset('home/img/about-extra-1.svg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>Онлайн-обучение - удобно и эффективно</h4>
                    <p>
                        Наша платформа обучения предоставляет возможность изучать материал в любое удобное для студента время и место
                    </p>
                    <p>
                        Мы предоставляем интерактивные онлайн-курсы, которые позволяют нашим студентам получить знания в максимально комфортных условиях.
                    </p>
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                    <img src="{{asset('home/img/about-extra-2')}}.svg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                    <h4>Сертификация и признание отрасли</h4>
                    <p>
                        Наши программы обучения признаны в отрасли и соответствуют требованиям, установленным в страховой сфере.
                    </p>
                    <p>
                        Мы предоставляем сертификаты нашим студентам, которые подтверждают их квалификацию и повышают их профессиональный статус.
                    </p>
                    <p>
                        Программа обучения разработана в сотрудничестве с ведущими компаниями страховой отрасли, что позволяет нам быть в курсе последних трендов и требований в отрасли и обеспечивает нашим студентам актуальную и востребованную программу обучения.
                    </p>
                </div>

            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Услуги</h3>
                <p>Страхование – это наша забота, обучение – ваша гарантия</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Онлайн-курсы</a></h4>
                        <p class="description">Мы предлагаем онлайн-курсы по страхованию, которые доступны для обучения в любое время и в любом месте</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Поддержка после обучения</a></h4>
                        <p class="description">мы предоставляем поддержку студентам после окончания курсов, чтобы помочь им применять полученные знания на практике и решать возникающие вопросы</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Сертификация</a></h4>
                        <p class="description">Мы предоставляем курсы обучения, которые помогают страховым представителям получить сертификаты и аккредитации, необходимые для работы в отрасли страхования.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Карьерное развитие</a></h4>
                        <p class="description">Мы помогаем страховым представителям развивать свою карьеру, предоставляя им доступ к профессиональным сетям контактов и возможности повысить свою квалификацию.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                        <h4 class="title"><a href="">Обновление знаний</a></h4>
                        <p class="description">Мы обновляем наши курсы и материалы, чтобы отразить изменения в отрасли страхования и помочь нашим студентам оставаться в курсе последних тенденций и развитий в отрасли.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                        <h4 class="title"><a href="">Экономию времени </a></h4>
                        <p class="description">Мы также помогаем страховым представителям экономить время на обучение, предоставляя им доступ к удобным онлайн-курсам, которые можно проходить в удобное время и из любой точки мира</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Почему выбрали нас? </h3>
                <p>"Практическая ориентированность программы" - наша программа обучения ориентирована на реальные задачи и ситуации, с которыми сталкиваются страховые представители, что позволяет нашим студентам эффективно применять полученные знания на практике.</p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-diamond"></i>
                        <div class="card-body">
                            <h5 class="card-title">Гибкий график обучения</h5>
                            <p class="card-text">Предоставляем гибкий график обучения, который позволяет нашим студентам выбирать удобное для них время и место для изучения материала</p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-language"></i>
                        <div class="card-body">
                            <h5 class="card-title">Удобство</h5>
                            <p class="card-text">Стремимся сделать нашу платформу обучения максимально удобной и интуитивно понятной для наших студентов. </p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-object-group"></i>
                        <div class="card-body">
                            <h5 class="card-title">Доступность</h5>
                            <p class="card-text">Предоставляем доступные цены на наши курсы и материалы, чтобы обеспечить доступность обучения для всех желающих развиваться в отрасли страхования.</p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Студентов</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Компаний</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Пройдено тестов</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18</span>
                    <p>Получено сертификатов</p>
                </div>

            </div>

        </div>
    </section>

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Отзывы</h3>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel wow fadeInUp">

                        <div class="testimonial-item">
                            <img src="{{asset('home/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="{{asset('home/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="{{asset('home/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="{{asset('home/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="{{asset('home/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            </p>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header">
                <h3>Команда</h3>
                <p>Вместе к успеху: наша команда преподавателей - ваш надежный партнер в обучении</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="{{asset('home/img/team-1.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="{{asset('home/img/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="{{asset('home/img/team-3.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="{{asset('home/img/team-4.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

        <div class="container">

            <div class="section-header">
                <h3>Наши клиенты</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dere santome nida.</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-1.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-2.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-3.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-4.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-5.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-6.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-7.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{asset('home/img/clients/client-8.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>
            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19754.16509747789!2d55.096693362084984!3d51.76465940563295!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x417bf0c3cdd7f631%3A0xb5d201258acd9401!2z0KHQvtCz0LDQty3QnNC10LQ!5e0!3m2!1sru!2slu!4v1682256027062!5m2!1sru!2slu" frameborder="0" style="border:0; width: 100%; height: 312px; border-radius: 30px" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>ул. Володарского 39, 460000</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>info@example.com</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+7 353 244-06-00</p>
                        </div>
                    </div>

                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>СОГАЗ МЕД</h3>
                    <p>Страховая компания «Согаз» — крупная российская страховая компания, отнесена к разряду системообразующих, лидер одноимённой страховой группы Согаз.</p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Разделы</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Контакты</h4>
                    <p>
                        ул. Володарского 39 <br>
                        Оренбург, 460000 <br>
                        Россия <br>
                        <strong>Телефон:</strong> +7 353 244-06-00<br>
                        <strong>Почта:</strong> info@example.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
      </div>
      <div class="credits"> -->
    <!--
      All the links in the footer should remain intact.
      You can delete the links only if you purchased the pro version.
      Licensing information: https://bootstrapmade.com/license/
      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
    -->
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div> -->
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{asset('home/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('home/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('home/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('home/lib/mobile-nav/mobile-nav.js')}}"></script>
<script src="{{asset('home/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('home/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('home/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('home/lib/lightbox/js/lightbox.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('home/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('home/js/main.js')}}"></script>

</body>
</html>
