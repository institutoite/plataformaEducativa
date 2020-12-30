<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edukin</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('stylesheet/bootstrap.css') }}">

    <!-- Template Style-->
    <link rel="stylesheet" href="{{ asset('stylesheet/font-awesome.css') }}"> 
    <link rel="stylesheet" href="{{ asset('stylesheet/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/jquery-fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/jquery.mCustomScrollbar.min.css') }}">
    
    <link href="{{ asset('icon/favicon.ico') }}" rel="shortcut icon">
</head>
<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="bg-header">
        <div class="flat-header-blog">
            <div class="top-bar clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                            <ul class="information">
                                <li class="phone lt-sp003">
                                    <i class="fa fa-phone" aria-hidden="true"></i> +91 254 785 587
                                </li>
                                <li class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> educate@info.com
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                            <ul class="nav-sing">
                                <li><a href="#">Sing In</a></li>
                                <li><a href="#">Sing Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <header class="header menu-bar header-blog hv-menu-type2">
                <div class="container">
                    <div class="menu-bar-wrap clearfix">
                        <div id="logo" class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo/02.png') }}" alt="images"></a>
                        </div>
                        <div class="mobile-button"><span></span></div>
                        <div class="header-menu">
                            <nav id="main-nav" class="main-nav">
                                <ul class="menu">
                                    <li><a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="index.html">Home 1</a></li>
                                            <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                            <li class="menu-item"><a href="home3.html">Home 3</a></li>
                                            <li class="menu-item"><a href="home4.html">Home 4</a></li>
                                            <li class="menu-item"><a href="home5.html">Home 5</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
                                    <li><a href="#">Course</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="course.html">Course</a></li>
                                            <li class="menu-item"><a href="course-list.html">Course list</a></li>
                                            <li class="menu-item active"><a href="course-single.html">Course single</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
                                    <li><a href="#">Explore</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about.html">About</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
                                    <li><a href="#">Degrees</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="blog.html">Blog</a></li>
                                            <li class="menu-item"><a href="blog-single.html">Blog single</a></li>
                                        </ul><!-- sub-menu -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-title page-title-blog">
                <div class="page-title-inner">
                    <div class="breadcrumbs breadcrumbs-blog text-left">
                        <div class="container">  
                            <div class="breadcrumbs-wrap">
                                <ul class="breadcrumbs-inner">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="course-single.html">Course</a></li>
                                </ul>
                                <div class="title">
                                    Course
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- bg-header -->
    <div class="courses-single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-page-wrap clearfix">
                        <div class="course-single">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <div class="videobox">
                                        <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1">
                                            <img src="{{ asset('images/course-single/1.jpg') }}" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">{{ $course->name }}</a>
                                </div>
                                <p>
                                    {{ $course->description }}.
                                </p>
                                <div class="author-price">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ asset('images/course-single/2.jpg') }}" alt="images">
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="#">{{ $course->teacher->user->name }}</a>
                                            </div>
                                            <div class="job">
                                                {{ $course->teacher->title }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-wrap price-course-single">
                                        <div class="price">
                                            <span class="price-now">Bs.0</span>
                                        </div>
                                        <div class="btn-buynow">
                                            <a href="#">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flat-tabs">
                            <ul class="tab-title type1 clearfix"> 
                                <li class="item-title  overview">
                                    <span class="inner">OVERVIEW</span>
                                </li>
                                <li class="item-title curriculum">
                                    <span class="inner">CURRICULUM</span>
                                </li>
                                <li class="item-title instructor">
                                    <span class="inner">Tutor</span>
                                </li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="question-sg text clearfix">
                                            <div class="title">
                                                <a href="#">What will i learn?</a>
                                            </div>
                                            <p>
                                                Learn cutting edge deep reinforcement learning algorithms from Deep Q Networks (DQN) to Deep Deterministic Policy Gradients (DDPG). Apply these concepts to train agents to walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="access-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Access on mobile and TV</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms and from Deep Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Certificate of Completion</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms from Deep Q Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                            <div class="certificate">
                                                <div class="certificate-wrap">
                                                    <p>
                                                        An eduking is a blog created for educational purposes. Eduking blog archive and support student and teacher learning by facilitating reflection, questioning by self becoming a means for educators.
                                                    </p>
                                                    <ul class="list-certificate">
                                                        <li>
                                                            Graphic designers create visual concepts, 
                                                        </li>
                                                        <li>
                                                            Remember skill can developed with practice.
                                                        </li>
                                                        <li>
                                                            The field is considered a subset of visual communication design.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="images-certificate">
                                                    <img src="{{ asset('images/course-single/3.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="requirements-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Requirements</a>
                                            </div>
                                            <ul class="request">
                                                <li>
                                                   Understand what visual learning is for and how it is used
                                                </li>
                                                <li>
                                                   Need knowledge of photoshop and basic knowledge of indesign.
                                                </li>
                                                <li>
                                                   Preferable to have experience with PS, Sketch, Indesign and  Adobe XD.
                                                </li>
                                                <li>
                                                   Preferable to understand word embeddings
                                                </li>
                                            </ul>
                                        </div>
 
                                        <div class="description-single text clearfix">
                                            <div class="title">
                                                <a href="#">Description</a>
                                            </div>
                                            <p>
                                                Your ability to use types is one of the things that differentiates graphic design from others visual professions. A big parts of graphic design is understanding typography, developing your knowledge of typefaces, & how to apply them in your design. This will be a constant study throughout your career.
                                            </p>
                                        </div>

                                        <div class="price-course-single">
                                            <div class="price">
                                                <span class="price-previou">
                                                    <del>$169</del>
                                                </span>
                                                <span class="price-now">$169</span>
                                            </div>
                                            <div class="btn-buynow">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="question-sg text clearfix">
                                            <div class="title">
                                                <a href="#">What will i learn?</a>
                                            </div>
                                            <p>
                                                Learn cutting edge deep reinforcement learning algorithms from Deep Q Networks (DQN) to Deep Deterministic Policy Gradients (DDPG). Apply these concepts to train agents to walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="access-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Access on mobile and TV</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms and from Deep Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Certificate of Completion</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms from Deep Q Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                            <div class="certificate">
                                                <div class="certificate-wrap">
                                                    <p>
                                                        An eduking is a blog created for educational purposes. Eduking blog archive and support student and teacher learning by facilitating reflection, questioning by self becoming a means for educators.
                                                    </p>
                                                    <ul class="list-certificate">
                                                        <li>
                                                            Graphic designers create visual concepts, 
                                                        </li>
                                                        <li>
                                                            Remember skill can developed with practice.
                                                        </li>
                                                        <li>
                                                            The field is considered a subset of visual communication design.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="images-certificate">
                                                    <img src="{{ asset('images/course-single/3.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="requirements-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Requirements</a>
                                            </div>
                                            <ul class="request">
                                                <li>
                                                   Understand what visual learning is for and how it is used
                                                </li>
                                                <li>
                                                   Need knowledge of photoshop and basic knowledge of indesign.
                                                </li>
                                                <li>
                                                   Preferable to have experience with PS, Sketch, Indesign and  Adobe XD.
                                                </li>
                                                <li>
                                                   Preferable to understand word embeddings
                                                </li>
                                            </ul>
                                        </div>
 
                                        <div class="description-single text clearfix">
                                            <div class="title">
                                                <a href="#">Description</a>
                                            </div>
                                            <p>
                                                Your ability to use types is one of the things that differentiates graphic design from others visual professions. A big parts of graphic design is understanding typography, developing your knowledge of typefaces, & how to apply them in your design. This will be a constant study throughout your career.
                                            </p>
                                        </div>

                                        <div class="price-course-single">
                                            <div class="price">
                                                <span class="price-previou">
                                                    <del>$169</del>
                                                </span>
                                                <span class="price-now">$169</span>
                                            </div>
                                            <div class="btn-buynow">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="question-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Tutor</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->user->name }}.
                                            </p>
                                        </div>
                                        <div class="access-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Profesion</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->title }}.
                                            </p>
                                        </div>
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Biografia</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->biography }}.
                                            </p>
                                        </div>

                                        <div class="description-single text clearfix">
                                            <div class="title">
                                                <a href="#">Fecha de registro a la plataforma</a>
                                            </div>
                                            <p>
                                                {{ $course->teacher->created_at->format('d/m/Y') }}.
                                            </p>
                                        </div>

                                        <div class="price-course-single">
                                            <div class="price">
                                                <span class="price-previou">
                                                    <del>$169</del>
                                                </span>
                                                <span class="price-now">$169</span>
                                            </div>
                                            <div class="btn-buynow">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="question-sg text clearfix">
                                            <div class="title">
                                                <a href="#">What will i learn?</a>
                                            </div>
                                            <p>
                                                Learn cutting edge deep reinforcement learning algorithms from Deep Q Networks (DQN) to Deep Deterministic Policy Gradients (DDPG). Apply these concepts to train agents to walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="access-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Access on mobile and TV</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms and from Deep Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                        </div>
                                        <div class="certificate-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Certificate of Completion</a>
                                            </div>
                                            <p>
                                                Access  mobile deep reinforcement learning algorithms from Deep Q Networks to Deep Deterministic Policy Gradients. Apply these concepts to train agents to tv walk, drive, or perform other complex tasks.
                                            </p>
                                            <div class="certificate">
                                                <div class="certificate-wrap">
                                                    <p>
                                                        An eduking is a blog created for educational purposes. Eduking blog archive and support student and teacher learning by facilitating reflection, questioning by self becoming a means for educators.
                                                    </p>
                                                    <ul class="list-certificate">
                                                        <li>
                                                            Graphic designers create visual concepts, 
                                                        </li>
                                                        <li>
                                                            Remember skill can developed with practice.
                                                        </li>
                                                        <li>
                                                            The field is considered a subset of visual communication design.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="images-certificate">
                                                    <img src="{{ asset('images/course-single/3.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <div class="requirements-sg text clearfix">
                                            <div class="title">
                                                <a href="#">Requirements</a>
                                            </div>
                                            <ul class="request">
                                                <li>
                                                   Understand what visual learning is for and how it is used
                                                </li>
                                                <li>
                                                   Need knowledge of photoshop and basic knowledge of indesign.
                                                </li>
                                                <li>
                                                   Preferable to have experience with PS, Sketch, Indesign and  Adobe XD.
                                                </li>
                                                <li>
                                                   Preferable to understand word embeddings
                                                </li>
                                            </ul>
                                        </div>
 
                                        <div class="description-single text clearfix">
                                            <div class="title">
                                                <a href="#">Description</a>
                                            </div>
                                            <p>
                                                Your ability to use types is one of the things that differentiates graphic design from others visual professions. A big parts of graphic design is understanding typography, developing your knowledge of typefaces, & how to apply them in your design. This will be a constant study throughout your career.
                                            </p>
                                        </div>

                                        <div class="price-course-single">
                                            <div class="price">
                                                <span class="price-previou">
                                                    <del>$169</del>
                                                </span>
                                                <span class="price-now">$169</span>
                                            </div>
                                            <div class="btn-buynow">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-right">
                        <div class="widget widget-features">
                            <div class="widget-title">
                                Características del curso
                            </div>
                            <div class="content">
                                <ul class="features">
                                    <li>
                                        <a href="#">Categoría</a>
                                        <span>{{ $course->category->name }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Publicacion</a>
                                        <span>{{ $course->created_at->format('d/m/Y') }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Estudiantes inscritos</a>
                                        <span>{{ $course->students_count }}</span>
                                    </li>
                                    <li>
                                        <a href="#">Certificado</a>
                                        <span>Si</span>
                                    </li>
                                    <li>
                                        <a href="#">Nivel</a>
                                        <span>{{ $course->level->name }}</span>
                                    </li>
                                    <li>
                                        <a href="#"></a>
                                        <span></span>
                                    </li>
                                </ul>
                                <div class="share-via">
                                    <div class="title">
                                        Compartir
                                    </div>
                                    <ul class="social-media">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="related-course related-course-single">
                            <div class="title">
                                Related Courses
                            </div>
                            <div class="related-course-wrap client-style3">
                                <div class="flat-carousel-box data-effect clearfix" data-gap="30" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-dots="false" data-auto="false" data-nav="false">
                                    <div class="owl-carousel">
                                        <div class="flat-course">
                                            <div class="featured-post">
                                                <div class="entry-image">
                                                    <img src="{{ asset('images/course-grid/3.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="course-content clearfix">
                                                <div class="wrap-course-content">
                                                    <h4>
                                                        <a href="#">Learn Photoshop CC With Nir Eyal Complete Course</a>
                                                    </h4>
                                                    <p>
                                                        Education City is initiative of our Qatar Foundation for Education, Science and Community Development.  
                                                    </p>
                                                    <div class="author-info">
                                                        <div class="author-name">
                                                            Perttick Sid
                                                        </div>
                                                        <div class="enroll">
                                                            <a href="#">Enroll</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="meta-rate">
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span>(4)</span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-previou">
                                                                <del>$169</del>
                                                            </span>
                                                            <span class="price-now">$169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flat-course">
                                            <div class="featured-post">
                                                <div class="entry-image">
                                                    <img src="{{ asset('images/course-grid/3.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="course-content clearfix">
                                                <div class="wrap-course-content">
                                                    <h4>
                                                        <a href="#">Learn Photoshop CC With Nir Eyal Complete Course</a>
                                                    </h4>
                                                    <p>
                                                        Education City is initiative of our Qatar Foundation for Education, Science and Community Development.  
                                                    </p>
                                                    <div class="author-info">
                                                        <div class="author-name">
                                                            Perttick Sid
                                                        </div>
                                                        <div class="enroll">
                                                            <a href="#">Enroll</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="meta-rate">
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span>(4)</span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-previou">
                                                                <del>$169</del>
                                                            </span>
                                                            <span class="price-now">$169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flat-course">
                                            <div class="featured-post">
                                                <div class="entry-image">
                                                    <img src="{{ asset('images/course-grid/3.jpg') }}" alt="images">
                                                </div>
                                            </div>
                                            <div class="course-content clearfix">
                                                <div class="wrap-course-content">
                                                    <h4>
                                                        <a href="#">Learn Photoshop CC With Nir Eyal Complete Course</a>
                                                    </h4>
                                                    <p>
                                                        Education City is initiative of our Qatar Foundation for Education, Science and Community Development. 
                                                    </p>
                                                    <div class="author-info">
                                                        <div class="author-name">
                                                            Perttick Sid
                                                        </div>
                                                        <div class="enroll">
                                                            <a href="#">Enroll</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="meta-rate">
                                                        <div class="rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span>(4)</span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-previou">
                                                                <del>$169</del>
                                                            </span>
                                                            <span class="price-now">$169</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- courses-single -->
    <div class="cta-cr parallax parallax3">
        <div class="overlay183251"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="cta-content">
                        <div class="caption">How to start your teaching?</div>
                        <h3>
                            Starting your journey with us? Follow this guide still possible to become a teacher.
                        </h3>
                        <div class="btn-about-become">
                            <a href="#">Become a Teacher</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                    <div class="cta-information">
                        <div class="phone">
                            +91 254 785 587
                        </div>
                        <div class="email">
                            edukin@info.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- cta-cr -->
    <footer id="footer" class="footer-type1">
        <div class="form-send-email">
            <div class="container">
                <form action="#" class="form-send">
                    <input type="search" placeholder="Enter your email...">
                    <button class="btn send-button bg-clff5f60">
                        Send
                    </button>
                </form>
            </div>
        </div>
        <div id="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-footer">
                       <div class="logo-footer">
                           <img src="{{ asset('images/logo/04.png') }}" alt="images">
                       </div>
                    </div>
                    <div class="col-lg-2 col-company">
                        <h3 class="widget widget-title">
                            Company
                        </h3>
                        <ul class="widget-nav-menu">
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Feature Course</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-link">
                        <h3 class="widget widget-title">
                            Help Links
                        </h3>
                        <ul class="widget-nav-menu">
                            <li><a href="#">Student Support</a></li>
                            <li><a href="#">Course Policy</a></li>
                            <li><a href="#">Register  Key</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-course">
                        <h3 class="widget widget-title">
                            Course
                        </h3>
                        <ul class="widget-nav-menu">
                            <li><a href="#">Wordpres</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Learning English</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-media">
                        <h3 class="widget widget-title">
                            Social Media
                        </h3>
                        <ul class="widget-social-media">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom" class="bottom-type1 clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">
                            © 
                            <span class="text-year">
                                2018
                            </span>
                            <span class="text-name">
                                Roy Design.
                            </span>
                            <span class="license">
                                <a href="#">All Rights Reserved</a>
                            </span>
                        </div>
                    </div>
                    <div class="bottom-bar-menu">
                        <ul class="bottom-nav">
                            <li class="menu-item"><a href="#">About Company</a></li>
                            <li class="menu-item"><a href="#">Privacy Policy</a></li>
                            <li class="menu-item"><a href="#">Help Center</a></li>
                            <li class="menu-item"><a href="#">Terms</a></li>
                            <li class="menu-item"><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class="show"></a>
    </footer><!-- footer -->
    
    <script src="{{ asset('javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('javascript/rev-slider.js') }}"></script>
    <script src="{{ asset('javascript/plugins.js') }}"></script>
    <script src="{{ asset('javascript/jquery-countTo.js') }}"></script>
    <script src="{{ asset('javascript/jquery-ui.js') }}"></script>
    <script src="{{ asset('javascript/jquery-fancybox.js') }}"></script>
    <script src="{{ asset('javascript/flex-slider.min.js') }}"></script>
    <script src="{{ asset('javascript/scroll-img.js') }}"></script>
    <script src="{{ asset('javascript/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('javascript/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('javascript/parallax.js') }}"></script>
    <script src="{{ asset('javascript/jquery-isotope.js') }}"></script>
    <script src="{{ asset('javascript/equalize.min.js') }}"></script>
    <script src="{{ asset('javascript/main.js') }}"></script>

    <!-- slider -->
    <script src="{{ asset('rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('rev-slider/js/extensions/extensionsrevolution.extension.video.min.js') }}"></script>
</body>
</html>