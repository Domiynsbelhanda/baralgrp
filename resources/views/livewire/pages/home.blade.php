@extends('livewire.layout.app')

@section('title')
    {{__('home')}}
@endsection

@section('content')
    <style>
        .gallery img {
            width: 100%;
            height: auto;
            cursor: pointer;
        }
        .modal-dialog-centered {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-body {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .modal-body img {
            max-width: 100%;
            max-height: 80vh;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }
    </style>

    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
            },
            "autoplay": {
                "delay": 7000
            }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('assets/images/backgrounds/slider-bg-1-2.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="main-slider__box">
                            <div class="block-title text-left">
                                <h3>{{__('a-touch')}} <span>{{__('solar-energy')}}</span></h3>
                            </div>
                            <!-- /.block-title -->
                            <p>
                                {{__('slider-0-description')}}
                            </p>
                            <!-- /.thm-btn -->
                        </div><!-- /.main-slider__box -->

                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->

                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('assets/images/backgrounds/slider-bg-1-1.jpg')}});"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="main-slider__box">
                            <div class="block-title text-left">
                                <p><span></span>{{__('choose-quality')}}</p>
                                <h3>{{__('for-a-future')}} <span>{{__('your-business')}}</span></h3>
                            </div>
                            <!-- /.block-title -->
                            <p>
                                {{__('slide-1-description')}}
                            </p>
                            <!-- /.thm-btn -->
                        </div><!-- /.main-slider__box -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>
        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->

    @php
        $isMobile = "<script>document.body.getAttribute('data-is-mobile')</script>";
    @endphp

    <section class="about-one" id="about">
        <div class="container">
            <div class="row">

                @if ($isMobile)

                @else
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-one__images">
                            <img src="{{asset('assets/images/resources/about-1-1.png')}}" alt="">
                            <img src="{{asset('assets/images/resources/about-1-2.png')}}" alt="">
                            <div class="about-one__images-content text-center">
                                {{--                            <h3>48</h3>--}}
                                {{--                            <p>{{__('finished-project')}}</p>--}}
                            </div><!-- /.about-one__images-content -->
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                @endif

                <div class="col-lg-6">
                    <div class="about-one__content">
                        <div class="block-title text-left">
                            <p><span></span>{{__('about-company')}}</p>
                            <h3>{{__('company-presentation')}}</h3>
                        </div>
                        <!-- /.block-title -->
                        <p>
                            {{__('about-1')}}
                        </p>

                        <p>
                            {{__('about-2')}}
                        </p>

                        <p>
                            {{__('about-3')}}
                        </p>

                        <div class="about-one__box">
                            <i class="besit-icon-clock1"></i>
                            <div class="about-one__box-content">
                                <h3>24/7 Support</h3>
                                <div class="about-one__call-box">
                                    <i class="besit-icon-phone"></i>
                                    <p>{{__('call-us')}} <br> <a href="tel:+243 814 003 606">+243 814 003 606</a></p>
                                </div><!-- /.about-one__call-box -->
                            </div><!-- /.about-one__box-content -->
                        </div><!-- /.about-one__box -->

                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->


    <section class="service-one" id="services">
        <div class="container">
            <div class="block-title text-center">
                <p><span></span>{{__('why-choose')}}</p>
                <h3>
                    {{__('grow-business')}} <br> <span>{{__('with-our-various')}}.</span>
                </h3>
            </div>
            <!-- /.block-title -->
            <div class="service-one__3-col">
                <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                    <i class="far fa-solar-panel"></i>
                    <h3>{{__('solar')}}</h3>
                    <p>
                        {{__('solar-description')}}
                    </p>
                </div><!-- /.service-one__single -->

                <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <i class="far fa-wrench"></i>
                    <h3>{{__('mecanique')}}</h3>
                    <p>
                        {{__('mecanique-description')}}
                    </p>
                </div><!-- /.service-one__single -->
                <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <i class="far fa-sun"></i>
                    <h3>{{__('electrique')}}</h3>
                    <p>
                        {{__('electrique-description')}}
                    </p>
                </div><!-- /.service-one__single -->
                <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <i class="far fa-truck"></i>
                    <h3>{{__('logistique')}}</h3>
                    <p>
                        {{__('logistique-description')}}
                    </p>
                </div><!-- /.service-one__single -->
                <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                    <i class="far fa-ruler-combined"></i>
                    <h3>{{__('construction')}}</h3>
                    <p>
                        {{__('construction-description')}}
                    </p>
                </div><!-- /.service-one__single -->
                <div class="service-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                    <i class="far fa-print"></i>
                    <h3>{{__('imprimerie')}}</h3>
                    <p>
                        {{__('imprimerie-description')}}
                    </p>
                </div><!-- /.service-one__single -->
            </div><!-- /.service-one__3-col -->
        </div><!-- /.container -->
    </section><!-- /.service-one -->

    <section class="team-one" id="projects">
        <div class="container">
            <div class="block-title text-center">
                {{--                <p><span></span>{{__('team-member')}}</p>--}}
                <h3>
                    {{__('projects')}}
                    {{--                    <br> <span>{{__('team-qualified')}}</span>--}}
                </h3>
            </div>
            <!-- /.block-title -->
        </div><!-- /.container -->

        <div class="container mt-4">
            <div class="row gallery">
                <div class="col-md-4">
                    <img src="{{asset('assets/images/projects/project-1-1.png')}}" alt="Image 1" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/projects/project-1-2.png')}}" alt="Image 2" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/projects/project-1-3.png')}}" alt="Image 3" class="img-thumbnail">
                </div>

                <div class="col-md-4">
                    <img src="{{asset('assets/images/projects/project-1-4.png')}}" alt="Image 1" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/projects/project-1-5.png')}}" alt="Image 2" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/projects/project-1-6.png')}}" alt="Image 3" class="img-thumbnail">
                </div>
                <!-- Ajoutez plus d'images ici -->
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="modalImage" src="" alt="Image en grand" class="img-fluid">
                        <a class="carousel-control-prev" href="#" role="button" id="prevImage">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#" role="button" id="nextImage">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /.team-one -->


{{--    <section class="team-one" id="projects">--}}
{{--        <div class="container">--}}
{{--            <div class="block-title text-center">--}}
{{--                <p><span></span>{{__('team-member')}}</p>--}}
{{--                <h3>--}}
{{--                    {{__('projects')}}--}}
{{--                    <br> <span>{{__('team-qualified')}}</span>--}}
{{--                </h3>--}}
{{--            </div>--}}
{{--            <!-- /.block-title -->--}}
{{--            <div class="team-one__4-col">--}}

{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <div class="team-one__social">--}}
{{--                            <a href="#" class="fab fa-facebook-f"></a>--}}
{{--                            <a href="#" class="fab fa-twitter"></a>--}}
{{--                            <a href="#" class="fas fa-envelope"></a>--}}
{{--                            <a href="#" class="fab fa-linkedin-in"></a>--}}
{{--                        </div><!-- /.team-one__social -->--}}
{{--                        <img src="{{asset('assets/images/team/team-1-1.jpg')}}" alt="">--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3>Robert Vasquez</h3>--}}
{{--                        <p>UX Designer</p>--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}

{{--            </div><!-- /.team-one__4-col -->--}}
{{--        </div><!-- /.container -->--}}
{{--    </section><!-- /.team-one -->--}}


    <div class="contact-one__top" id="contact"
         style="background-image: url({{asset('assets/images/backgrounds/contact-bg-1-1.jpg')}});">
        <div class="container">
            <div class="row justify-content-start justify-content-md-start justify-content-lg-end">
                <div class="col-md-12 col-lg-7">
                    <div class="block-title">
                        <p><span></span>{{__('get-in')}}</p>
                        <h3>
                            {{__('contact-us-to-day')}}
                        </h3>
                    </div>
                    <!-- /.block-title -->

                </div><!-- /.col-md-12 col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-one__top -->

    <section class="contact-one">
        <div class="container">
            <div class="inner-container">
                <div class="row align-items-end">

                    <div
                        class="col-sm-12 col-md-12 col-lg-5 text-center text-md-center text-lg-center text-xl-left">
                        <img src="{{asset('assets/images/resources/contact-person-1-1.png')}}"
                             class="contact-one__person img-fluid wow fadeInLeft" data-wow-duration="1500ms"
                             alt=""/>
                    </div>
                    <!-- /.col-sm-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <form action="#" class="contact-one__form">
                            <h3>{{__('free-online-quote')}}</h3>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="{{__('your-name')}}" name="name"/>
                                        <i class="far fa-user"></i>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-sm-12 col-md-6 -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="{{__('email-id')}}" name="email"/>
                                        <i class="far fa-envelope-open"></i>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-sm-12 col-md-6 -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="{{__('phone-no')}}" name="phone"/>
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-sm-12 col-md-6 -->
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="{{__('subject')}}" name="subject"/>
                                        <i class="far fa-edit"></i>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-sm-12 col-md-6 -->
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="{{__('your-message')}}"></textarea>
                                        <i class="far fa-comment"></i>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-sm-12 col-md-12 -->
                                <div class="col-sm-12 col-md-12">
                                    <button type="submit" class="thm-btn">
                                        {{__('send-message')}}
                                        <i class="fa fa-arrow-circle-right"></i></button><!-- /.thm-btn -->
                                </div>
                                <!-- /.col-sm-12 col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /.contact-one__form -->
                    </div>
                    <!-- /.col-sm-12 -->
                </div><!-- /.row -->
            </div>
            <!-- /.inner-container -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.contact-one -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let isMobile = /Mobi|Android/i.test(navigator.userAgent);
            document.body.setAttribute('data-is-mobile', isMobile);
        });


        document.addEventListener('DOMContentLoaded', function() {
            var currentImageIndex = 0;
            var images = document.querySelectorAll('.gallery img');
            var modalImage = document.getElementById('modalImage');
            var imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
            var prevImage = document.getElementById('prevImage');
            var nextImage = document.getElementById('nextImage');

            function showImage(index) {
                var imgSrc = images[index].getAttribute('src');
                modalImage.setAttribute('src', imgSrc);
                imageModal.show();
                currentImageIndex = index;
            }

            images.forEach(function(image, index) {
                image.addEventListener('click', function() {
                    showImage(index);
                });
            });

            prevImage.addEventListener('click', function(e) {
                e.preventDefault();
                currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : images.length - 1;
                showImage(currentImageIndex);
            });

            nextImage.addEventListener('click', function(e) {
                e.preventDefault();
                currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
                showImage(currentImageIndex);
            });

            document.querySelector('.modal .close').addEventListener('click', function() {
                currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
                showImage(currentImageIndex);
            });
        });
    </script>
@endsection
