<div>
    <nav class="main-menu stricky">
        <div class="container">
            <ul class="main-menu__list one-page-scroll-menu">
                <li class="scrollToLink"><a href="/">{{__('home')}}</a></li>
                <li class="scrollToLink"><a href="#about">{{__('about')}}</a></li>
                <li class="scrollToLink"><a href="#services">{{__('services')}}</a></li>
                <li class="scrollToLink"><a href="#projects">{{__('projects')}}</a></li>
                <li class="scrollToLink"><a href="#contact">{{__('contact')}}</a></li>
                <li class="scrollToLink dropdown">
                    <a href="#blog">{{__('language')}}</a>
                    <ul>
                        <li>
                            <a href="language/en">
                                <img width="30" src="{{asset('assets/icons/uk_flag.svg')}}" alt="uk-flag">
                                <span
                                    @if(\Illuminate\Support\Facades\App::getLocale() == 'en') style="color: darkred" @endif
                                >
                                    &nbsp;{{__('english')}}
                                </span>
                            </a>
                        </li>
                        <li><a href="language/fr" >
                                <img width="30" src="{{asset('assets/icons/fr_flag.svg')}}" alt="fr-flag">
                                <span
                                    @if(\Illuminate\Support\Facades\App::getLocale() == 'fr') style="color: darkred" @endif
                                >
                                    &nbsp;{{__('french')}}
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.main-menu__list -->

            <a href="#" data-target="#contact" class="scroll-to-target thm-btn">{{__('consulting')}} <i
                    class="fa fa-arrow-circle-right"></i>
            </a>
            <!-- /.thm-btn -->
        </div>
        <!-- /.container -->
    </nav>
</div>
