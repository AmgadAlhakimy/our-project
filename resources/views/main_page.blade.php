{{--  --}}
    <html lang="lung">
    <head>
        @include('layouts.main_page_header')
    </head>
    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
                    <h1 class="m-0 text-primary"><img src="http://127.0.0.1:8000/assets/images/layouts/logo2.png" class="col logo-img">
    {{--                    {{trans('public.kindergarten')}}--}}
                    </h1>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="#more_about_us" class="nav-item nav-link">{{ __('home_page.who we are') }}</a>
                        <a href="#Facilities" class="nav-item nav-link">{{ __('home_page.School Facilities') }}</a>
                        <a href="#" class="nav-item nav-link">{{ __('home_page.student_letters') }}</a>
                        <div class="nav-item dropdown">
                            <a href="#articals" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('home_page.articals') }}</a>
                            <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                                <a href="#classes" class="dropdown-item">{{ __('home_page.our classes') }}</a>
                                <a href="#" class="dropdown-item">{{ __('home_page.letters') }}</a>
                                <a href="#student_letters" class="dropdown-item">{{ __('home_page.fitst students') }}</a>
                                <a href="#activetes_students" class="dropdown-item">{{ __('home_page.activetes_students') }}</a>
                                <a href="#Photo_Gallery" class="dropdown-item">{{ __('home_page.Photo Gallery') }}</a>
                                <a href="#footer" class="dropdown-item">{{ __('home_page.Contact Us') }}</a>
                            </div>
                        </div>
                        <a href="#footer" class="nav-item nav-link">{{ __('home_page.Contact Us') }}</a>
                    </div>

                    <a href="{{route('login')}}" class="btn btn-primary outline:none rounded-pill px-3 d-none d-lg-block me-s ms-1">{{__('public.login')}}<i class="fa-solid fa-right-to-bracket ms-3"></i></a>
                    <a href="{{route('register-user')}}" class="btn btn-primary outline:none rounded-pill px-3 d-none d-lg-block me-s ms-1">{{__('public.sign up')}}</i><i class="fa-solid fa-user-plus ms-3"></i></a>
                    <div class="lang_style me-3 ms-3">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="text-center">
                                <a rel="alternate" class="" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }} "
                                class="">
                                <div class="form-label">
                                    {{ $properties['native'] }}
                                </div>
                                </a>
                            </dib>
                        @endforeach
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <div class="container-fluid p-0 mb-5">
                <div  class="owl-carousel header-carousel position-relative">
                    <div class="owl-carousel-item position-relative">
                        <img src="{{URL::asset(path: 'assets/images/home/carousel-1.jpg')}}" class="img-fluid" alt="" />

                        <div  class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">
                                        <h1 class="display-2 text-white animated slideInDown mb-4">{{ __('home_page.the pest garden in yemen') }}</h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ __('home_page.first main pargraph') }}</p>
                                        <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ __('home_page.know more about us') }}</a>
                                        <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">{{ __('home_page.our classes') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img src="{{URL::asset(path: 'assets/images/home/carousel-2.jpg')}}" class="img-fluid" alt="" />

                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">
                                        <h1 class="display-2 text-white animated slideInDown mb-4">{{ __('home_page.descover whate you child like') }}</h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ __('home_page.secound maine pargraph') }}</p>
                                        <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ __('home_page.know more about us') }}</a>
                                        <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">{{ __('home_page.our classes') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->


            <!-- Facilities Start -->
            <div class=" Facilities_Start container-xxl py-5">
                <div id="Facilities" class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">{{ __('home_page.School Facilities') }}</h1>
                        <p>{{ __('home_page.School Facilities disc') }}</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="facility-item">
                                <div class="facility-icon bg-primary">
                                    <span class="bg-primary"></span>
                                    <i class="fa fa-bus-alt fa-3x text-primary"></i>
                                    <span class="bg-primary"></span>
                                </div>
                                <div class="facility-text bg-primary">
                                    <h3 class="text-primary mb-3">{{ __('home_page.School Bus') }}</h3>
                                    <p class="mb-0">{{ __('home_page.School Bus disc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="facility-item">
                                <div class="facility-icon bg-success">
                                    <span class="bg-success"></span>
                                    <i class="fa fa-futbol fa-3x text-success"></i>
                                    <span class="bg-success"></span>
                                </div>
                                <div class="facility-text bg-success">
                                    <h3 class="text-success mb-3">{{ __('home_page.Playground') }}</h3>
                                    <p class="mb-0">{{ __('home_page.Playground disc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="facility-item">
                                <div class="facility-icon bg-warning">
                                    <span class="bg-warning"></span>
                                    <i class="fa fa-home fa-3x text-warning"></i>
                                    <span class="bg-warning"></span>
                                </div>
                                <div class="facility-text bg-warning">
                                    <h3 class="text-warning mb-3">{{ __('home_page.Healthy Canteen') }}</h3>
                                    <p class="mb-0">{{ __('home_page.Healthy Canteen disc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="facility-item">
                                <div class="facility-icon bg-info">
                                    <span class="bg-info"></span>
                                    <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                    <span class="bg-info"></span>
                                </div>
                                <div class="facility-text bg-info">
                                    <h3 class="text-info mb-3">{{ __('home_page.Positive Learning') }}</h3>
                                    <p class="mb-0">{{ __('home_page.Healthy Canteen disc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Facilities End -->


            <!-- About Start -->
            <div class="container-xxl py-5">
                <div id="more_about_us"class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-4">{{ __('home_page.Learn More About Our Work And Our Cultural Activities') }}</h1>
                            <p>{{ __('home_page.Learn More About Our Work And Our Cultural Activities disc 1') }}</p>
                            <p class="mb-4">{{ __('home_page.Learn More About Our Work And Our Cultural Activities disc 2') }}</p>
                        </div>
                        <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="{{URL::asset(path: 'assets/images/home/about-1.jpg')}}" class="img-fluid w-75 rounded-circle bg-light p-3" alt="" />
                                </div>
                                <div class="col-6 text-start" style="margin-top: -150px;">
                                    <img src="{{URL::asset(path: 'assets/images/home/about-2.jpg')}}" class="img-fluid w-100 rounded-circle bg-light p-3" alt="" />
                                </div>
                                <div class="col-6 text-end" style="margin-top: -150px;">
                                    <img src="{{URL::asset(path: 'assets/images/home/about-3.jpg')}}" class="img-fluid w-100 rounded-circle bg-light p-3" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Call To Action Start -->
            <div class="container-xxl py-5">
                <div id="articals" class="container">
                    <div class="bg-light rounded">
                        <div class="row g-0">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                                <div class="position-relative h-100">
                                    <img src="{{URL::asset(path: 'assets/images/home/call-to-action.jpg')}}" class="position-absolute w-100 h-100 rounded" alt="" style="object-fit: cover;" />
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="h-100 d-flex flex-column justify-content-center p-5">
                                    <h1 class="mb-4">{{ __('home_page.Become A Teacher') }}</h1>
                                    <p class="mb-4">{{ __('home_page.Become A Teacher disc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call To Action End -->


            <!-- Classes Start -->
            <div class="container-xxl py-5">
                <div id="classes" class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">{{ __('home_page.School Classes') }}</h1>
                        <p>{{ __('home_page.School Classes disc') }}</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="classes-item">
                                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                    <img src="{{URL::asset(path: 'assets/images/home/classes-1.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-4" href="">{{ __('home_page.Art & Drawing') }}</a>
                                    <div class="row g-1">
                                        <div class="col-4">
                                            <div class="border-top border-3 border-primary pt-2">
                                                <h6 class="text-primary mb-1">{{ __('home_page.Age:') }}</h6>
                                                <small>{{ __('home_page.Years') }}3-5</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-success pt-2">
                                                <h6 class="text-success mb-1">{{ __('home_page.Time:') }}</h6>
                                                <small>9-10{{ __('home_page.AM') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-warning pt-2">
                                                <h6 class="text-warning mb-1">{{ __('home_page.Capacity:') }}</h6>
                                                <small>30{{ __('home_page.Kids') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="classes-item">
                                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                    <img src="{{URL::asset(path: 'assets/images/home/classes-2.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-4" href="">{{ __('home_page.Color Management') }}</a>
                                    <div class="row g-1">
                                        <div class="col-4">
                                            <div class="border-top border-3 border-primary pt-2">
                                                <h6 class="text-primary mb-1">{{ __('home_page.Age:') }}</h6>
                                                <small>{{ __('home_page.Years') }}3-5</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-success pt-2">
                                                <h6 class="text-success mb-1">{{ __('home_page.Time:') }}</h6>
                                                <small>9-10{{ __('home_page.AM') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-warning pt-2">
                                                <h6 class="text-warning mb-1">{{ __('home_page.Capacity:') }}</h6>
                                                <small>30{{ __('home_page.Kids') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="classes-item">
                                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                    <img src="{{URL::asset(path: 'assets/images/home/classes-3.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-4" href="">{{ __('home_page.Athletic & Dance') }}</a>
                                    <div class="row g-1">
                                        <div class="col-4">
                                            <div class="border-top border-3 border-primary pt-2">
                                                <h6 class="text-primary mb-1">{{ __('home_page.Age:') }}</h6>
                                                <small>{{ __('home_page.Years') }}3-5</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-success pt-2">
                                                <h6 class="text-success mb-1">{{ __('home_page.Time:') }}</h6>
                                                <small>9-10{{ __('home_page.AM') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-warning pt-2">
                                                <h6 class="text-warning mb-1">{{ __('home_page.Capacity:') }}</h6>
                                                <small>30{{ __('home_page.Kids') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="classes-item">
                                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                    <img src="{{URL::asset(path: 'assets/images/home/classes-4.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-4" href="">{{ __('home_page.Language & Speaking') }}</a>
                                    <div class="row g-1">
                                        <div class="col-4">
                                            <div class="border-top border-3 border-primary pt-2">
                                                <h6 class="text-primary mb-1">{{ __('home_page.Age:') }}</h6>
                                                <small>{{ __('home_page.Years') }}3-5</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-success pt-2">
                                                <h6 class="text-success mb-1">{{ __('home_page.Time:') }}</h6>
                                                <small>9-10{{ __('home_page.AM') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-warning pt-2">
                                                <h6 class="text-warning mb-1">{{ __('home_page.Capacity:') }}</h6>
                                                <small>30{{ __('home_page.Kids') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="classes-item">
                                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                    <img src="{{URL::asset(path: 'assets/images/home/classes-5.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-4" href="">{{ __('home_page.Religion & History') }}</a>
                                    <div class="row g-1">
                                        <div class="col-4">
                                            <div class="border-top border-3 border-primary pt-2">
                                                <h6 class="text-primary mb-1">{{ __('home_page.Age:') }}</h6>
                                                <small>{{ __('home_page.Years') }}3-5</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-success pt-2">
                                                <h6 class="text-success mb-1">{{ __('home_page.Time:') }}</h6>
                                                <small>9-10{{ __('home_page.AM') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-warning pt-2">
                                                <h6 class="text-warning mb-1">{{ __('home_page.Capacity:') }}</h6>
                                                <small>30{{ __('home_page.Kids') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="classes-item">
                                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                    <img src="{{URL::asset(path: 'assets/images/home/classes-6.jpg')}}" class="img-fluid rounded-circle"  alt="" />
                                </div>
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-4" href="">{{ __('home_page.General Knowledge') }}</a>
                                    <div class="row g-1">
                                        <div class="col-4">
                                            <div class="border-top border-3 border-primary pt-2">
                                                <h6 class="text-primary mb-1">{{ __('home_page.Age:') }}</h6>
                                                <small>{{ __('home_page.Years') }}3-5</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-success pt-2">
                                                <h6 class="text-success mb-1">{{ __('home_page.Time:') }}</h6>
                                                <small>9-10{{ __('home_page.AM') }}</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border-top border-3 border-warning pt-2">
                                                <h6 class="text-warning mb-1">{{ __('home_page.Capacity:') }}</h6>
                                                <small>30{{ __('home_page.Kids') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Classes End -->


            <!-- Appointment Start -->
            {{-- <div class="container-xxl py-5">
                <div class="container">
                    <div class="bg-light rounded">
                        <div class="row g-0">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="h-100 d-flex flex-column justify-content-center p-5">
                                    <h1 class="mb-4">Make Appointment</h1>
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                                    <label for="gname">Gurdian Name</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                                    <label for="gmail">Gurdian Email</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                                    <label for="cname">Child Name</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                                    <label for="cage">Child Age</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                                    <label for="message">Message</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                                <div class="position-relative h-100">
                                    <img src="{{URL::asset(path: 'assets/images/home/appointment.jpg')}}" class="position-absolute w-100 h-100 rounded" alt=""style="object-fit: cover;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Appointment End -->


            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div id="student_letters" class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">{{ __('home_page.first children in the school') }}</h1>
                        <p>{{ __('home_page.first children in the school disc') }}</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item position-relative">
                                <img src="{{URL::asset(path: 'assets/images/home/team-1.jpg')}}" class="img-fluid rounded-circle w-75" alt="" />
                                <div class="team-text">
                                    <h3>{{ __('home_page.Full Name') }}</h3>
                                    <p>{{ __('home_page.student leter for the school 1') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item position-relative">
                                <img class="" src="img/" alt="">
                                <img src="{{URL::asset(path: 'assets/images/home/team-2.jpg')}}" class="img-fluid rounded-circle w-75" alt="" />
                                <div class="team-text">
                                    <h3>{{ __('home_page.Full Name') }}</h3>
                                    <p>{{ __('home_page.student leter for the school 1') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item position-relative">
                                <img class="img-fluid rounded-circle w-75" src="{{URL::asset(path: 'assets/images/home/team-3.jpg')}}" class="" alt="" />
                                <div class="team-text">
                                    <h3>{{ __('home_page.Full Name') }}</h3>
                                    <p>{{ __('home_page.student leter for the school 1') }}</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Testimonial Start -->
            <div class="container-xxl py-5">
                <div id="activetes_students" class="container">
                    <div   class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">{{ __('home_page.our activites children talk about it') }}</h1>
                        <p>{{ __('home_page.our activites children talk about it disc') }}.</p>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        {{-- 1 --}}
                        <div class="testimonial-item bg-light rounded p-5">
                            <p class="fs-5">{{ __('home_page.activites disc 1') }}</p>
                            <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                                <img class="" src="{{URL::asset(path: 'assets/images/home/testimonial-1.jpg')}}" class="img-fluid flex-shrink-0 rounded-circle" alt=""style="width: 90px; height: 90px;" />
                                <div class="ps-3">
                                    <h3 class="mb-1">{{ __('home_page.student name 1') }}</h3>
                                    <span>{{ __('home_page.student class 1') }}</span>
                                </div>
                                <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="testimonial-item bg-light rounded p-5">
                            <p class="fs-5">{{ __('home_page.activites disc 2') }}</p>
                            <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                                <img class="" src="{{URL::asset(path: 'assets/images/home/testimonial-2.jpg')}}" class="img-fluid flex-shrink-0 rounded-circle" alt=""style="width: 90px; height: 90px;" />
                                <div class="ps-3">
                                    <h3 class="mb-1">{{ __('home_page.student name 2') }}</h3>
                                    <span>{{ __('home_page.student class 2') }}</span>
                                </div>
                                <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="testimonial-item bg-light rounded p-5">
                            <p class="fs-5">{{ __('home_page.activites disc 3') }}</p>
                            <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                                <img class="" src="{{URL::asset(path: 'assets/images/home/testimonial-3.jpg')}}" class="img-fluid flex-shrink-0 rounded-circle" alt=""style="width: 90px; height: 90px;" />
                                <div class="ps-3">
                                    <h3 class="mb-1">{{ __('home_page.student name 3') }}</h3>
                                    <span>{{ __('home_page.student class 3') }}</span>
                                </div>
                                <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
    {{-- -------------------------------------------------------------- --}}
    <!-- Photo Gallery Start -->
    <div class="container-xxl py-5">
        <div id="Photo_Gallery" class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">{{ __('home_page.Photo Gallery') }}</h1>
                <p>{{ __('home_page.Photo Gallery disc') }}.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                {{-- 1 --}}
                <div class="">
                        <img class="img-fluid rounded bg-light p-1" src="{{URL::asset(path: 'assets/images/home/classes-1.jpg')}}" class="gallery_img " alt="" />
                </div>
                {{-- 2 --}}
                <div class="">
                        <img class="img-fluid rounded bg-light p-1" src="{{URL::asset(path: 'assets/images/home/classes-2.jpg')}}" class="gallery_img " alt="" />
                </div>
                {{-- 3 --}}
                <div class="">
                        <img class="img-fluid rounded bg-light p-1" src="{{URL::asset(path: 'assets/images/home/classes-3.jpg')}}" class="gallery_img " alt="" />
                </div>
                {{-- 4 --}}
                <div class="">
                        <img class="img-fluid rounded bg-light p-1" src="{{URL::asset(path: 'assets/images/home/classes-4.jpg')}}" class="gallery_img " alt="" />
                </div>
                {{-- 5 --}}
                <div class="">
                        <img class="img-fluid rounded bg-light p-1" src="{{URL::asset(path: 'assets/images/home/classes-5.jpg')}}" class="gallery_img " alt="" />
                </div>
                {{-- 6 --}}
                <div class="">
                        <img class="img-fluid rounded bg-light p-1" src="{{URL::asset(path: 'assets/images/home/classes-6.jpg')}}" class="gallery_img " alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Photo Gallery End -->
    {{-- -------------------------------------------------------------- --}}

            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div id="footer" class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 ">
                            <h3 class="text-white mb-4">{{ __('home_page.Get In Touch') }}</h3>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ __('home_page.Location, City, Country') }}</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ __('home_page.numbers') }}</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ __('home_page.school@gmial.com') }}</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a class="btn btn-link text-white-50" href="">{{ __('home_page.About Us') }}</a>
                            <a class="btn btn-link text-white-50" href="">{{ __('home_page.Contact Us') }}</a>
                            <a class="btn btn-link text-white-50" href="">{{ __('home_page.Our Services') }}</a>
                            {{-- <a class="btn btn-link text-white-50" href="">{{ __('home_page.Privacy Policy') }}</a>
                            <a class="btn btn-link text-white-50" href="">{{ __('home_page.Terms & Condition') }}</a> --}}
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="____">{{ __('home_page.junours planet') }}</a>, All Right Reserved.


                            {{ __('home_page.designed by:') }} 
                            <a class="border-bottom" href="____">KA-Soft</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="#container-fluid">{{ __('home_page.Home') }}</a>
                                    <a href="{{route('login')}}">{{__('public.login')}}</a>
                                    <a href="{{route('register-user')}}">{{__('public.sign up')}}</a>
                                    {{-- <a href="">FQAs</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top "><i class="bi bi-arrow-up"></i></a>
        </div>
    </body>
    @include('layouts.main_page_js')

    </html>





