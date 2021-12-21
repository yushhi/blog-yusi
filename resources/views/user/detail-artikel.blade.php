<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from template.hasthemes.com/bunzo/bunzo/blog-details-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Nov 2021 07:39:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Yusi</title>
    <meta name="description" content="Bunzo is one of the most popular blog template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bunzo - Blog HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    @include('includes.user.style')

</head>

<body class="theme-color-six">

    <!--========  header area =========-->
    <header class="header-six">
        <div class="header-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-4">
                        <div class="logo">
                            <a href="/">
                                <h2>Blog Yusi</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-8">
                        <div class="main-menu-area text-end">
                            <nav class="navigation-menu">
                                <ul>
                                    <li>
                                        <a href="/"><span>Home</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>About</span></a>
                                    </li>
                                    <li class="has-children"><a href="#"><span>Category</span></a>
                                        <ul class="submenu">
                                            <li><a href="#"><span>Category 1</span></a> </li>
                                            <li><a href="#"><span>Category 2</span></a> </li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#"><span>Contact </span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-menu-right">
                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--======== End of header area  =========-->


    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="blog-details-two-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="blog-details-two-header">

                                <div class="blog-details-two-post-meta">
                                    <span class="blog-details-two-post-author">
                                    By <a href="#">{{Auth::user()->name}}</a>
                                </span>
                                    <span class="post-date">
                                    <a href="#">{{ Carbon\Carbon::parse($artikel->created_at)->format('d M Y') }}</a>
                                </span>
                                    
                                </div>
                                <h2 class="blog-details-two-post-title">{{ $artikel->judul }}</h2>

                                <div class="blog-details-two-tags">
                                    <a href="#" class="btn-large wordpress">{{ $artikel->category->name }}</a>
                                </div>

                            </div>
                            <div class="blog-details-post-image mt-5  mb-5">
                                <img style="width: 100%;" src="{{ url('/images/'.$artikel->file) }}" alt="">
                            </div>

                            <div class="blog-details-two-post-text section-space--pb_80">
                                <div class="col-lg-10 m-auto">
                                    <h3 class="mb-5 title">{{ $artikel->judul }}</h3>
                                    <p> {!!($artikel->keterangan)  !!}</p>

                                    <div class="blog-details-two-share-area">
                                        <div class="share-title">
                                            <h4 class="title">Bagikan artikel ini:</h4>
                                        </div>
                                        <ul class="social-share-area">
                                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                            <li><a href="#"><i class="icofont-skype"></i></a></li>
                                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Related Post Area Start -->
            <div class="related-post-area bg-gray section-space--ptb_80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-7">
                            <div class="section-title">
                                <h2 class="title">Anda mungkin juga menyukai</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-5">
                            <div class="related-post-two-slider-navigation text-end">
                                <div class="related-post-button-prev navigation-button"><i class="icofont-long-arrow-left"></i></div>
                                <div class="related-post-button-next navigation-button"><i class="icofont-long-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper -->
                    @php $artikels = DB::table('artikels')->orderBy('created_at', 'desc')->take(4)->get(); @endphp
                    <div class="swiper-container related-post-two-slider-active">
                        <div class="swiper-wrapper">
                            @foreach($artikels as $a)
                            <div class="swiper-slide">
                                <!-- Single Most Populer Item Start -->
                                <div class="single-most-populer-item" style="width: 100%;">
                                    <a href="/{{ $a->id }}" class="most-populer-thum">
                                        <img src="{{ url('/images/'.$a->file) }}" alt="" height="250">
                                    </a>
                                    <div class="most-populer-content">
                                        <div class="most-populer-post-author">
                                            By <a href="#">{{Auth::user()->name}}</a>
                                        </div>
                                        <h3 class="title"><a href="/{{ $a->id }}">{{ $a->judul }}</a>
                                        </h3>
                                        <div class="most-populer-post-meta">
                                            <span class="post-date">
                                        <a href="#">{{ Carbon\Carbon::parse($a->created_at)->format('d M Y') }}</a>
                                    </span>
                                            
                                        </div>
                                    </div>
                                </div><!-- Single Most Populer Item End -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Post Area End -->

            <!-- Comment Area Start -->
            <div class="comment-area section-space--pt_60 section-space--pb_100">
                <div class="container">


                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="comment-list-wrapper">

                                <h3 class="widget-title mb-30">Komentar (3) </h3>
                                <ol class="comment-list">
                                    <li class="comment">
                                        <div class="comment-2">
                                            <div class="comment-author-info">
                                                <div class="comment-author vcard">
                                                    <img alt="" src="assets/images/comments/comments-1.png">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="meta">
                                                        <div class="comment-content-top">
                                                            <div class="comment-actions">
                                                                <h6 class="fn">Adit</h6>
                                                                <div class="comment-datetime"> Desainer Produk, Indonesia </div> <span class="separator">||</span> <span class="time">35 minutes ago </span>
                                                            </div>
                                                        </div>
                                                        <a class="comment-reply-link" href="#"><i class="icofont-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
                                                    humour, or randomised words which don't look even slightly believable. If you are going to use a passage of orem psum
                                                    to be sure there isn't anything embarrassing.</p>
                                            </div>
                                        </div>
                                        <ol class="children">
                                            <li class="comment ">
                                                <div class="comment-reply-wrap">
                                                    <div class="comment-author-info">
                                                        <div class="comment-author vcard">
                                                            <img alt="" src="assets/images/comments/comments-2.png">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="meta">
                                                                <div class="comment-content-top">
                                                                    <div class="comment-actions">
                                                                        <h6 class="fn">Budi Setiawan</h6>
                                                                        <div class="comment-datetime"> Programmer, Indonesia </div> <span class="separator">||</span> <span class="time">35 minutes ago </span>
                                                                    </div>
                                                                </div>
                                                                <a class="comment-reply-link" href="#"><i class="icofont-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                                                            humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                            to be sure there isn't anything embarrassing.</p>
                                                    </div>
                                                </div>
                                            </li><!-- comment End -->
                                            <li class="comment ">
                                                <div class="comment-reply-wrap">
                                                    <div class="comment-author-info">
                                                        <div class="comment-author vcard">
                                                            <img alt="" src="assets/images/comments/comments-3.png">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="meta">
                                                                <div class="comment-content-top">
                                                                    <div class="comment-actions">
                                                                        <h6 class="fn">Intan Putri</h6>
                                                                        <div class="comment-datetime"> Desainer Produk, Indonesia </div> <span class="separator">||</span> <span class="time">35 minutes ago </span>
                                                                    </div>
                                                                </div>
                                                                <a class="comment-reply-link" href="#"><i class="icofont-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                                                            humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                                                            to be sure there isn't anything embarrassing.</p>
                                                    </div>
                                                </div>
                                            </li><!-- comment End -->
                                        </ol><!-- children End -->
                                    </li><!-- comment End-->

                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="section-title">
                                <h3 class="title">Tinggalkan komentar</h3>
                            </div>
                            <form action="#" class="comment-form-area">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <textarea placeholder="Massage"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="submit-button text-center">
                                            <button class="btn-large btn-bg-6 btn-primary" type="submit"> Berlangganan Sekarang <i class="icofont-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comment Area End -->
        </div>
    </div>

    <!--======  footer area =======-->
    @include('includes.user.footer')
    <!--=====  End of footer area ========-->





    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top icofont-swoosh-up"></i>
        <i class="arrow-bottom icofont-swoosh-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index-2.html"><span>Home Two</span></a></li>
                                <li><a href="index-3.html"><span>Home Three</span></a></li>
                                <li><a href="index-4.html"><span>Home Four</span></a></li>
                                <li><a href="index-5.html"><span>Home Five</span></a></li>
                                <li><a href="index-6.html"><span>Home Six</span></a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html"><span>About</span></a></li>
                        <li class="has-children">
                            <a href="#">Category</a>
                            <ul class="sub-menu">
                                <li><a href="category.html"><span>Category List</span></a> </li>
                                <li><a href="category-grid.html"><span>Category Grid</span></a> </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="blog-details.html"><span>Blog Details</span></a> </li>
                                <li><a href="blog-details-two.html"><span>Blog Details Two</span></a> </li>
                                <li><a href="error-404.html"><span>Error 404</span></a> </li>
                                <li><a href="faq.html"><span>FAQ's</span></a> </li>
                                <li><a href="author-post.html"><span>Author post</span></a> </li>
                                <li><a href="register.html"><span>Register</span></a> </li>
                                <li><a href="write-post.html"><span>Write Post</span></a> </li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html"><span>Contact </span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->


    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>