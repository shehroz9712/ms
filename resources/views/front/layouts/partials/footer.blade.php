 
        <!-- footer area start -->
        <footer class="main-footer rel z-1">
            <div class="footer-top-wrap bgc-black pt-100 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-12">
                            <div class="footer-widget widget_logo wow fadeInUp delay-0-2s">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('assets/front/images/logos/logo.png') }}" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                                <h6 class="footer-title">Quick Link</h6>
                                <ul>
                                    <li><a href="{{ route('services') }}">Service</a></li>
                                    <li><a href="{{ route('blogs') }}">Blog</a>
                                    <li><a href="{{ route('projects') }}">Projects</a></li>
                                    <li><a href="{{ route('faq') }}">Faqs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget widget_newsletter wow fadeInUp delay-0-4s">
                                <form action="#">
                                    <label for="email-address"><i class="far fa-envelope"></i></label>
                                    <input id="email-address" type="email" placeholder="Email Address" required>
                                    <button>Sign Up <i class="far fa-angle-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-widget widget_contact_info wow fadeInUp delay-0-6s">
                                <h6 class="footer-title">Address</h6>
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i> 55 Main Street, 2nd block, New York City</li>
                                    <li><i class="far fa-envelope"></i> <a href="mailto:support@gmail.com">support@gmail.com</a></li>
                                    <li><i class="far fa-phone"></i> <a href="callto:+880(123)45688">+880 (123) 456 88</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-20 pb-5 rpt-25">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>Copyright @2023, <a href="index.html">Noxfolio</a> All Rights Reserved</p>
                            </div>
                       </div>
                       <div class="col-lg-6 text-lg-end">
                           <ul class="footer-bottom-nav">
                               <li><a href="#">Facebook</a></li>
                               <li><a href="#">Twitter</a></li>
                               <li><a href="#">Instagram</a></li>
                               <li><a href="#">LinkedIn</a></li>
                           </ul>
                       </div>
                   </div>
                   <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
                </div>
                <div class="bg-lines">
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

    </div>
    <!--End pagewrapper-->
   
   <!-- Jquery -->
   <script src="{{ asset('assets/front/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<!-- Appear Js -->
<script src="{{ asset('assets/front/js/appear.min.js') }}"></script>
<!-- Slick -->
<script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('assets/front/js/jquery.nice-select.min.js') }}"></script>
<!-- Image Loader -->
<script src="{{ asset('assets/front/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
<!-- WOW Animation -->
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<!-- Custom script -->
<script src="{{ asset('assets/front/js/script.js') }}"></script>

<!-- For Contact Form -->
<script src="{{ asset('assets/front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/front/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/front/js/contact-form-script.js') }}"></script>



</body>
</html>