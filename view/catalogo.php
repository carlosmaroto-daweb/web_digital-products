<style>
    /*
    .come-from-modal.left .modal-dialog,
    .come-from-modal.right .modal-dialog {
        position: fixed;
        margin: auto;
        width: 320px;
        height: 100%;
        -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
        -o-transform: translate3d(0%, 0, 0);
        transform: translate3d(0%, 0, 0);
    }

    .come-from-modal.left .modal-content,
    .come-from-modal.right .modal-content {
        height: 100%;
        overflow-y: auto;
        border-radius: 0px;
    }

    .come-from-modal.left .modal-body,
    .come-from-modal.right .modal-body {
        padding: 15px 15px 80px;
    }

    .come-from-modal.right.fade .modal-dialog {
        right: -320px;
        -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
        -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
        -o-transition: opacity 0.3s linear, right 0.3s ease-out;
        transition: opacity 0.3s linear, right 0.3s ease-out;
    }

    .come-from-modal.right.fade.in .modal-dialog {
        right: 0;
    }*/
</style>

<main id="main">

    <!-- Home Section -->
    <section class="small-section bg-dark-alfa-50 bg-scroll light-content" data-background="assets/img/full-width-images/section-bg-19.jpg" id="home">
        <div class="container relative pt-70">

            <div class="row">

                <div class="col-md-8">
                    <div class="wow fadeInUpShort" data-wow-delay=".1s">
                        <h1 class="hs-line-7 mb-20 mb-xs-10">Catálogo</h1>
                    </div>
                    <div class="wow fadeInUpShort" data-wow-delay=".2s">
                        <p class="hs-line-6 opacity-075 mb-20 mb-xs-0">
                            We share our best ideas in our blog
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mt-30 wow fadeInUpShort" data-wow-delay=".1s">
                    <div class="mod-breadcrumbs text-end">
                        <a href="#">Home</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<a href="#">Blog</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<span>Columns</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Home Section -->

    <!-- Section -->
    <section class="page-section bg-dark">
        <div class="modal fade  come-from-modal right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        modal
                    </div>
                </div>
            </div>
        </div>


        <div class="container relative">

            <div class="mb-60 mb-xs-60">
                <div class="row justify-content-around">
                    <div class=" col-10">
                        <form class="form">
                            <div class="search-wrap">
                                <button class="search-button animate" type="submit" title="Start Search">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control search-field round" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="col-2 justify-content-end">
                        <div class="float-right ">
                            <button type="button" class="btn btn-mod btn-w btn-round btn-medium float-end" data-toggle="modal" data-target="#myModal">
                                Filtro
                            </button>
                        </div>
                    </div>
                </div>
            </div>






            <div class="row">

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-1.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title mb-3">
                        <a href="blog-single-sidebar-right-dark.html">Titulo</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">• Categoría</a>
                    </div>

                    <div class="post-prev-info">
                        <a href="">• Horas</a>
                    </div>

                    <div class="post-prev-info">
                        <a href="">• Acreditación</a>
                    </div>

                    <div class="post-prev-info">
                        <a href="">• Composición</a>
                    </div>

                    <div class="post-prev-text">
                        Breve descripción <br> Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere pellentesque mattis. Maecenas volutpat, diam enime volutpa.
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-2.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">TITULO</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">Empresa impartidora</a> • horas
                    </div>

                    <div class="post-prev-info">
                        <a href="">Categoría</a>
                    </div>

                    <div class="post-prev-text">
                        Breve descripcion - Proin fringilla augue at maximus vestibulum. Nam pulvi vitae neque et porttitor. Praesent sed nisi eleifend, lorem fermentum ac ante lorem ipsum sit amet.
                    </div>
                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-3.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Clean Style in the Web</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 7 December
                    </div>

                    <div class="post-prev-text">
                        Ember adipiscing elite curabitur iaculis accumsan augu nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique ultricies eros lorem blandit.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-4.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <div class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Duis Tristique Condimentum</a>
                    </div>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 10 December
                    </div>

                    <div class="post-prev-text">
                        Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere pellentesque mattis. Maecenas volutpat, diam enime volutpa.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-5.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Meet the New Web Design Trends</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 10 December
                    </div>

                    <div class="post-prev-text">
                        Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere pellentesque mattis. Maecenas volutpat, diam enime volutpa.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-6.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Minimalistic Product Design</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 9 December
                    </div>

                    <div class="post-prev-text">
                        Proin fringilla augue at maximus vestibulum. Nam pulvi vitae neque et porttitor. Praesent sed nisi eleifend, lorem fermentum ac ante lorem ipsum sit amet.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-7.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Clean Style in the Web</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 7 December
                    </div>

                    <div class="post-prev-text">
                        Ember adipiscing elite curabitur iaculis accumsan augu nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique ultricies eros lorem blandit.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-8.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <div class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Duis Tristique Condimentum</a>
                    </div>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 10 December
                    </div>

                    <div class="post-prev-text">
                        Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere pellentesque mattis. Maecenas volutpat, diam enime volutpa.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-9.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Meet the New Web Design Trends</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 10 December
                    </div>

                    <div class="post-prev-text">
                        Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere pellentesque mattis. Maecenas volutpat, diam enime volutpa.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-10.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Minimalistic Product Design</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 9 December
                    </div>

                    <div class="post-prev-text">
                        Proin fringilla augue at maximus vestibulum. Nam pulvi vitae neque et porttitor. Praesent sed nisi eleifend, lorem fermentum ac ante lorem ipsum sit amet.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-11.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <h3 class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Clean Style in the Web</a>
                    </h3>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 7 December
                    </div>

                    <div class="post-prev-text">
                        Ember adipiscing elite curabitur iaculis accumsan augu nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique ultricies eros lorem blandit.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="blog-single-sidebar-right-dark.html" tabindex="-1"><img src="assets/img/blog/post-prev-12.jpg" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" /></a>
                    </div>

                    <div class="post-prev-title">
                        <a href="blog-single-sidebar-right-dark.html">Duis Tristique Condimentum</a>
                    </div>

                    <div class="post-prev-info">
                        <a href="">John Doe</a> • 10 December
                    </div>

                    <div class="post-prev-text">
                        Lorem ipsum dolor sit amet, rembe adipiscing elite. Inwege maximus ligula semper metusere pellentesque mattis. Maecenas volutpat, diam enime volutpa.
                    </div>

                    <div class="post-prev-more">
                        <a href="blog-single-sidebar-right-dark.html" class="text-link" tabindex="-1">Learn More</a>
                    </div>

                </div>
                <!-- End Post Item -->

            </div>
        </div>
    </section>
    <!-- End Section -->


</main>