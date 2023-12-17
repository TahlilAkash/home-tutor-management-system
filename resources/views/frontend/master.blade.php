<!doctype html>
<html lang="en">

<head>
  
    <title>Home</title>
    <meta charset="utf-8">
    @notifyCss
    <style>
        .notify{
            z-index: 1000000;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/fonts/brand/style.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/css/aos.css">

    <link rel="stylesheet" href="https://preview.colorlib.com/theme/tutor/css/style.css">
    <!-- <script nonce="9526ad61-09ed-44d2-954a-0817473f6c17">
        (function(w, d) {
            ! function(bS, bT, bU, bV) {
                bS[bU] = bS[bU] || {};
                bS[bU].executed = [];
                bS.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bS.zaraz.q = [];
                bS.zaraz._f = function(bW) {
                    return async function() {
                        var bX = Array.prototype.slice.call(arguments);
                        bS.zaraz.q.push({
                            m: bW,
                            a: bX
                        })
                    }
                };
                for (const bY of ["track", "set", "debug"]) bS.zaraz[bY] = bS.zaraz._f(bY);
                bS.zaraz.init = () => {
                    var bZ = bT.getElementsByTagName(bV)[0],
                        b$ = bT.createElement(bV),
                        ca = bT.getElementsByTagName("title")[0];
                    ca && (bS[bU].t = bT.getElementsByTagName("title")[0].text);
                    bS[bU].x = Math.random();
                    bS[bU].w = bS.screen.width;
                    bS[bU].h = bS.screen.height;
                    bS[bU].j = bS.innerHeight;
                    bS[bU].e = bS.innerWidth;
                    bS[bU].l = bS.location.href;
                    bS[bU].r = bT.referrer;
                    bS[bU].k = bS.screen.colorDepth;
                    bS[bU].n = bT.characterSet;
                    bS[bU].o = (new Date).getTimezoneOffset();
                    if (bS.dataLayer)
                        for (const ce of Object.entries(Object.entries(dataLayer).reduce(((cf, cg) => ({
                                ...cf[1],
                                ...cg[1]
                            })), {}))) zaraz.set(ce[0], ce[1], {
                            scope: "page"
                        });
                    bS[bU].q = [];
                    for (; bS.zaraz.q.length;) {
                        const ch = bS.zaraz.q.shift();
                        bS[bU].q.push(ch)
                    }
                    b$.defer = !0;
                    for (const ci of [localStorage, sessionStorage]) Object.keys(ci || {}).filter((ck => ck.startsWith("_zaraz_"))).forEach((cj => {
                        try {
                            bS[bU]["z_" + cj.slice(7)] = JSON.parse(ci.getItem(cj))
                        } catch {
                            bS[bU]["z_" + cj.slice(7)] = ci.getItem(cj)
                        }
                    }));
                    b$.referrerPolicy = "origin";
                    b$.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bS[bU])));
                    bZ.parentNode.insertBefore(b$, bZ)
                };
                ["complete", "interactive"].includes(bT.readyState) ? zaraz.init() : bS.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script> -->
</head>

<body>
    <x-notify::notify />
    <div class="site-wrap" id="home-section">
        
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <!-- header -->
        
        @include('frontend.partial.header')


        <!-- end-header -->


        <!-- breif  section -->
        <!-- <div class="site-section bg-light pb-0">
            <div class="container">
                <div class="row align-items-stretch overlap">
                    <div class="col-lg-8">
                        <div class="box h-100">
                            <div class="d-flex align-items-center">
                                <div class=""><img src="https://preview.colorlib.com/theme/tutor/images/img_1.jpg.webp" class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <a href="#" class="category">Tutorial</a>
                                    <h3><a href="#">Learning React Native</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quidem totam exercitationem eveniet blanditiis nulla, et possimus, itaque alias maxime!</p>
                                    <p class="mb-0">
                                        <span class="brand-react h5"></span>
                                        <span class="brand-javascript h5"></span>
                                    </p>
                                    <p class="meta">
                                        <span class="mr-2 mb-2">1hr 24m</span>
                                        <span class="mr-2 mb-2">Advanced</span>
                                        <span class="mr-2 mb-2">Jun 18, 2020</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box small h-100">
                            <div class="d-flex align-items-center mb-2">
                                <div class="img"><img src="https://preview.colorlib.com/theme/tutor/images/img_2.jpg.webp" class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <a href="#" class="category">Tutorial</a>
                                    <h3><a href="#">Learning React Native</a></h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                
                                <div class="text">
                                    <a href="#" class="category">Tutorial</a>
                                    <h3><a href="#">Learning React Native</a></h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="img"><img src="https://preview.colorlib.com/theme/tutor/images/img_2.jpg.webp" class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <a href="#" class="category">Tutorial</a>
                                    <h3><a href="#">Learning React Native</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end breif  section -->
        

        <!-- <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading mb-4">
                            <span class="caption">Tutorial Courses</span>
                            <h2>Choose Course</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-adobeillustrator"></span>
                            <h3>Illustrator</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-adobephotoshop"></span>
                            <h3>Photoshop</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-angular"></span>
                            <h3>Angular</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-javascript"></span>
                            <h3>JavaScript</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-react"></span>
                            <h3>React</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-vue-dot-js"></span>
                            <h3>Vue</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <form action="#" class="d-flex search-form">
                            <span class="icon-"></span>
                            <input type="search" class="form-control mr-2" placeholder="Search subjects">
                            <input type="submit" class="btn btn-primary px-4" value="Search">
                        </form>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="d-inline-flex align-items-center ml-auto">
                            <span class="mr-4">Share:</span>
                            <a href="#" class="mx-2 social-item"><span class="icon-facebook"></span></a>
                            <a href="#" class="mx-2 social-item"><span class="icon-twitter"></span></a>
                            <a href="#" class="mx-2 social-item"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="heading mb-4">
                            <span class="caption">Latest</span>
                            <h2>Tutorials</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex tutorial-item mb-4">
                            <div class="img-wrap">
                                <a href="#"><img src="https://preview.colorlib.com/theme/tutor/images/img_1.jpg.webp" alt="Image" class="img-fluid"></a>
                            </div>
                            <div>
                                <h3><a href="#">Learning React Native</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
                                <p class="mb-0">
                                    <span class="brand-react h5"></span>
                                    <span class="brand-javascript h5"></span>
                                </p>
                                <p class="meta">
                                    <span class="mr-2 mb-2">1hr 24m</span>
                                    <span class="mr-2 mb-2">Advanced</span>
                                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                                </p>
                                <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                            </div>
                        </div>
                        <div class="d-flex tutorial-item mb-4">
                            <div class="img-wrap">
                                <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div>
                                <h3><a href="#">Learning Angular 101</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
                                <p class="mb-0">
                                    <span class="brand-angular h5"></span>
                                    <span class="brand-javascript h5"></span>
                                </p>
                                <p class="meta">
                                    <span class="mr-2 mb-2">1hr 24m</span>
                                    <span class="mr-2 mb-2">Advanced</span>
                                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                                </p>
                                <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                            </div>
                        </div>
                        <div class="d-flex tutorial-item mb-4">
                            <div class="img-wrap">
                                <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div>
                                <h3><a href="#">Learning Photoshop</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
                                <p class="mb-0">
                                    <span class="brand-adobephotoshop h5"></span>
                                </p>
                                <p class="meta">
                                    <span class="mr-2 mb-2">1hr 24m</span>
                                    <span class="mr-2 mb-2">Advanced</span>
                                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                                </p>
                                <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                            </div>
                        </div>
                        <div class="d-flex tutorial-item mb-4">
                            <div class="img-wrap">
                                <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div>
                                <h3><a href="#">Advance Illustrator</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam. Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>
                                <p class="mb-0">
                                    <span class="brand-adobeillustrator h5"></span>
                                </p>
                                <p class="meta">
                                    <span class="mr-2 mb-2">1hr 24m</span>
                                    <span class="mr-2 mb-2">Advanced</span>
                                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                                </p>
                                <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                            </div>
                        </div>
                        <div class="custom-pagination">
                            <ul class="list-unstyled">
                                <li><a href="#"><span>1</span></a></li>
                                <li><span>2</span></li>
                                <li><a href="#"><span>3</span></a></li>
                                <li><a href="#"><span>4</span></a></li>
                                <li><a href="#"><span>5</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-side mb-3">
                            <a href="#"><img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid"></a>
                            <h3><a href="#">Learning React Native</a></h3>
                        </div>
                        <div class="box-side mb-3">
                            <a href="#"><img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid"></a>
                            <h3><a href="#">Learning React Native</a></h3>
                        </div>
                        <div class="box-side">
                            <a href="#"><img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid"></a>
                            <h3><a href="#">Learning React Native</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <div class="site-section bg-light">
        
            
            @yield('content')
             
            <div class="container">

                <!-- welcome title  home blade e included-->
                <!-- <div class="row justify-content-center">
                    <div class="col-lg-7 text-center mb-5">
                        <div class="heading">
                            <span class="caption">Welcome To Tuition Management Site</span>
                            
                        </div>
                    </div>
                </div> -->
                 <!-- end of welcome title  home blade e included-->

                
                <!-- cart gula -->

                <!-- <div class="row">
                    
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <h3 class="h5">Excellent Teacher!</h3>
            
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>

                            <div class="d-flex v-card align-items-center">
                                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Mike Fisher</span>
                                    <span>Owner, Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <h3 class="h5">Best Video Tutorial!</h3>
                            
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Jean Stanley</span>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <h3 class="h5">Easy to Understand!</h3>
                            
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Katie Rose</span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- end of cart -->
            </div>
        </div>




        <!-- Footer-->
        @include('frontend.partial.footer')


        <!-- <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Resources</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Support</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>

                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
    </div>

    <script src="https://preview.colorlib.com/theme/tutor/js/jquery-3.3.1.min.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/popper.min.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/bootstrap.min.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/owl.carousel.min.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/jquery.sticky.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/jquery.waypoints.min.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/jquery.animateNumber.min.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/jquery.fancybox.min.js"></script>
    <script src="jhttps://preview.colorlib.com/theme/tutor/js/jquery.easing.1.3.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/bootstrap-datepicker.min.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/aos.js"></script>
    <script src="https://preview.colorlib.com/theme/tutor/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <!-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script> -->
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"82616af81b204e9e","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
    @notifyJs

    {{-- // ssl scritp --}}
    <script>
        (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                tag.parentNode.insertBefore(script, tag);
            };
    
            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);
    </script>
</body>

</html>