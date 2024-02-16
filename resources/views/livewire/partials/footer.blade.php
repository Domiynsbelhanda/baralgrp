<div>
    <footer class="main-footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-widget footer-widget__about">
                            <a href="/"><img src="{{asset('assets/images/logo-light.png')}}" alt="" /></a>
                            <p>
                                {{__('footer-description')}}
                            </p>

                            <hr />
                            <div class="footer-widget__social">
                                <a href="#" class="fab fa-facebook-f"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-instagram"></a>
                                <a href="#" class="fab fa-linkedin-in"></a>
                            </div>
                            <!-- /.footer-widget__social -->
                        </div>
                        <!-- /.footer-widget footer-widget__about -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">{{__('useful')}}</h3>
                            <!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="/">{{__('home')}}</a></li>
                                <li><a href="#about">{{__('about')}}</a></li>
                                <li><a href="#services">{{__('services')}}</a></li>
                                <li><a href="#contact">{{__('contact')}}</a></li>
                            </ul>
                            <!-- /.list-unstyled footer-widget__links -->
                        </div>
                        <!-- /.footer-widget -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget footer-widget__contact">
                            <h3 class="footer-widget__title">{{__('contact-us')}}</h3>
                            <!-- /.footer-widget__title -->
                            <p>{{__('address')}}, Lubumbashi, {{__('country')}}</p>
                            <ul class="footer-widget__contact-list list-unstyled">
                                <li>
                                    <a href="mailto:info@baralgrp.com"><i class="themify-icon-email"></i>
                                        info@baralgrp.com</a>
                                </li>
                                <li>
                                    <a href="tel:+243 814 003 606"><i class="themify-icon-headphone-alt"></i>
                                        +243 814 003 606
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="themify-icon-link"></i> www.baralgrp.com</a>
                                </li>
                            </ul>
                            <!-- /.footer-widget__contact-list -->
                        </div>
                        <!-- /.footer-widget -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">{{__('social-follow')}}</h3>
                            <!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__gallery">
                                <li>
                                    <a href="#"><img src="assets/images/resources/footer-g-1-1.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/resources/footer-g-1-2.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/resources/footer-g-1-3.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/resources/footer-g-1-4.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/resources/footer-g-1-5.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/images/resources/footer-g-1-6.jpg" alt="" /></a>
                                </li>
                            </ul>
                            <!-- /.list-unstyled footer-widget__gallery -->
                        </div>
                        <!-- /.footer-widget -->
                    </div>
                    <!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.upper-footer -->
        <div class="bottom-footer">
            <div class="container">
                <div class="inner-container">
                    <p>Copyright {{\Carbon\Carbon::parse(\Illuminate\Support\Facades\Date::now())->format('Y')}} {{__('all-right-reserved')}}</p>
                    <!-- /.footer-menu -->
                </div>
                <!-- /.inner-container -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.bottom-footer -->
    </footer>
    <!-- /.main-footer -->
</div>
