<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/home.css')}}">
    <link rel="stylesheet" href="{{my_asset('/assets/frontend/default/css/card.css')}}">

</head>
<style>
    .text-overlay {
        position: relative;
    }

    .text-overlay h2,
    .text-overlay p {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }
</style>

<body>
    @extends('frontend.default.layouts.app')
    @section('content')
    @if (get_setting('slider_section_show') == 'on')
    <section>
        <section class=" hero-section " id="frontHomeTab">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="">
                    <div class="carousel-item active">
                        <video style="min-width:100%;" playsinline autoplay muted loop>
                            <source class=" opacity-100" src=" {{url('/public/assets/home/01.mp4')}}" type="video/mp4" />
                        </video>
                        <div class="carousel-caption carousel-caption-background">
                        </div>
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-lg-7 col-sm-12 home-cacap-head">
                                    <h2 class=" sm-mx-auto fw-700 fs-40 fs-sm-36px" style="">
                                        Hire the best consultations for any job, online</h2>
                                    <p class="fs-20 fs-sm-14 my-4 ">Millions of people use scholarships Australia to turn their ideas
                                        into
                                        reality.</p>
                                    <div class="lg-my-3 my-sm-0 home-banner-button ">
                                        <a href="{{route('register') }}?type=2" class="btn text-white fw-700  fs-20 fs-sm-12 mr-2 mb-3" style="background-color:#1d4335;">{{ translate('I want to Hire') }}</a>
                                        <a href="{{route('register') }}?type=1" class="btn text-white fw-700  fs-20 fs-sm-12  mb-3" style="background-color:#1d4335;">{{ translate('I want to Work') }}</a>
                                    </div>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!--  Used by -->
        <section class="">
            <div class=" home-slider">
                <div class="row ">
                    <div class="col-lg-6 col-sm-12">
                        <div class=" row ">
                            <div class=" col-lg-4 col-sm-12">
                                <h4 class="trusted heading-title fw-700" style="font-size:19px; color:#5ABC76;"> Used by </h4>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('Microsoft.svg')}}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('Airbnb.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('automatic.svg')}}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('Bissell.svg')}}" alt="">
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <img class=" " src="{{my_asset('NASDAQ.svg')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- explore services -->
        @if (get_setting('how_it_works_show') == 'on')
        <div class="border-top pb-2 " style="background-color:#275846;">
            <div class="mt-5 pb-2">
                <div class="">
                    <div class="">
                        <div class=" content-title  text-center pb-5 pt-3">
                            <h2 class="fw-700 fs-36 text-white mb-3">Need Scholarship help?</h2>
                            <h5 class="text-center text-white">It can be hard to know where to start. That's why we're here to guide
                                you.
                            </h5>
                        </div>
                        <div class="row need-help-section">
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <div class="d-flex">
                                            <img class=" mb-2 mx-auto d-block   p-3" src=" {{url('/public/assets/home/post.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #fff" />
                                            <div class="need-help-section-bar"></div>
                                        </div>
                                        <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white"> Post a job

                                        </p>
                                    </div>

                                    <h6 class="fs-18 mt-3  text-white text-center">
                                        Thousands of degrees, subjects and short courses from leading Australian unis in one place.
                                    </h6>
                                </div>

                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <!-- <div class="d-flex">
                                    <img class=" mb-2 mx-auto d-block text-black  p-3" src=" {{url('/public/assets/home/quiz1.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #000000; " />
                                    <div class="need-help-progress-bar"></div>
                                </div> -->
                                        <div class="d-flex">
                                            <img class="mb-2 mx-auto d-block text-black p-3" src="{{url('/public/assets/home/quiz.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #fff;" />
                                            <div class="need-help-section-bar"></div>
                                        </div>
                                        <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white"> Receive proposal
                                        </p>
                                    </div>
                                    <h6 class="fs-18 mt-3  text-white text-center">
                                        Guidance to find your best option, based on what's important to you.
                                    </h6>
                                </div>

                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <div class="d-flex">
                                            <img class=" mb-2 mx-auto d-block
                                     p-3" src=" {{url('/public/assets/home/enroll.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #fff" />
                                            <div class="need-help-section-bar"></div>
                                        </div>
                                        <p class="fs-22 fw-700 mb-lg-2 mt-3 consultant-category text-center text-white"> Make Selection

                                        </p>
                                    </div>
                                    <h6 class="fs-18 mt-3  text-white text-center">
                                        Simplified online enrolment to give you easy access to uni study.
                                    </h6>
                                </div>

                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class=" ">
                                    <div class=" h-136px align-items-center">
                                        <img class=" mb-2 mx-auto d-block p-3" src=" {{url('/public/assets/home/check.png')}}" alt="Image" style="width:55px; border-radius:50%; border:1px solid #fff" />
                                        <p class="fs-22 mt-3 fw-700 mb-lg-2 consultant-category text-center text-white"> Payment Securely
                                        </p>
                                    </div>
                                    <h6 class="fs-18 mt-3 text-white text-center">
                                        Get started on your study journey today.
                                    </h6>
                                </div>

                            </div>

                        </div>
                        <div class=" text-center py-5">
                            <a href="{{ url('projects/create')}}" class=" btn rounded border text-white fs-18" style="background-color:#275846;">
                                Let's get started
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Consultant Service Category -->
        @if (get_setting('featured_category_show') == 'on')
        <form id=" consultant-filter-form" action="" method="GET">
            <section class="bg-white border-top">
                <div class="container-home">
                    <div class="d-flex justify-content-between ">
                        <div class="w-lg-75 lh-1-8 content-title">
                            <!-- <h2 class="fw-700 fs-36 heading-title">{{ get_setting('featured_category_title') }}</h2> -->
                            <h2 class="fw-700 fre-small-font ">Hire academic consultants by category</h2>
                            <!-- <p class="fs-17 ">{{ get_setting('featured_category_subtitle') }}</p> -->
                        </div>
                        <!-- <a href=" search?keyword=&type=freelancer" class=" fs-16 text-dark btn border border-1 rounded-1  fre-consultant-category">{{ translate('All Consultants') }}
                            <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:20px;" />
                        </a> -->
                        <div>
                            <h5 class="btn rounded-1  border fre-consultant-category">
                                <a href=" search?keyword=&type=freelancer" class=" fs-16 text-dark ">{{ translate('All Consultants') }}
                                    <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:20px;" />
                                </a>
                            </h5>
                        </div>
                    </div>
                    <div class="row gutters-10">
                        @if (get_setting('featured_category_list') != null)
                        @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
                        @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
                        <div class="col-md-3">
                            <div class="card" style="height:350px;">
                                <img class="w-100 h-150px" src=" {{ custom_asset($category->photo) }}" alt="Image" />
                                <div class="card-body" style=" padding:13px;">

                                    <a class=" featured_category text-dark" onclick="applyFilter()" href="{{ route('freelancer.category', $category->slug)}}">
                                        <p class="fs-22 fw-600 " style="height:45px; line-height:23px;">{{ $category->name }}
                                        </p>
                                        <p class="fs-18 " style=" line-height:23px;">{{ $category->description }}</p>

                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
                    </div>
                    <h5 class="fre-button-show">
                        <a href="{{ route('search') }}?category=" class="fs-16 text-dark ">{{ translate('Browse More Categories') }}
                            <img class=" " src=" {{url('/public/assets/home/arrow-right.png')}}" alt="Image" style="width:20px;" />
                        </a>
                    </h5>
                </div>

            </section>

        </form>
        @endif

        <!-- Find academic jobs by category-->
        @if (get_setting('latest_project_show') == 'on')
        <section class="border-top" style="background-color:#FBF7ED; padding-bottom:6px;">
            <div class="container-home">
                <div class="d-flex justify-content-between ">
                    <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
                        <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                        <h2 class="fw-700 fre-small-font">Find academic jobs by category</h2>
                        <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                    </div>
                    <div>
                        <div class="pt-2 text-center">
                            <h5 class="btn rounded-1 border fre-consultant-category">
                                <a href="{{ route('search') }}?category=" class=" fs-16 text-dark ">

                                    <span>All
                                        Jobs</span>
                                </a>
                                <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:18px;" />
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                    $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
                    ->pluck('user_id');

                    $services = \App\Models\ProjectCategory::inRandomOrder()
                    ->get();
                    @endphp
                    @foreach ($services as $category)
                    <div class="col-md-3">
                        <a href="{{ route('projects.category', $category->slug)}}">
                            <div class="card" style="height:280px;">
                                <img class="img-fluid rounded opacity-75 job-cat" style="height:233px;" src=" {{ custom_asset($category->photo) }}" alt="Image">
                                <div class="job-title d-flex align-items-center">
                                    <span class=" fre-job-catagory fs-18 fw-700"> {{$category->name}}</span>
                                    <img class=" category-list mt-1" src=" {{url('/public/assets/home/jobs.png')}}" alt="Image" style="width:15px; height:15px;" />
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <h5 class="mx-3 fre-button-show">
                        <a href="{{ route('search') }}?keyword=&type=service" class="fs-16 text-dark ">
                            <span>All
                                Jobs</span>
                        </a>
                        <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:18px;" />
                        </a>
                    </h5>
                </div>
            </div>
        </section>
        @endif

        <!-- Join us -->
        @if (get_setting('latest_project_show') == 'on')
        <section class="border-top bg-white">
            <div class="container-home">
                <div class="row ">
                    <div class="col-lg-5">
                        <img class="mr-2  img-fluid" src="{{url('/public/assets/home/001.png')}}" alt="Image" style="width:500px;" />
                    </div>
                    <div class=" col-lg-7 col-sm-12">
                        <h2 class="fw-700 mb-3 heading-title fre-small-font" style="padding-top:36px;">What makes FreelancerEdu
                            impressive
                        </h2>
                        <div class="">
                            <div class=" d-flex ">
                                <div>
                                    <img class=" mr-2" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                                </div>
                                <div>
                                    <h6 class="fs-16 "><span class="fw-700 heading-title">Accessible academic experts:</span> Find work
                                        that hits your
                                        financial
                                        goals
                                        faster
                                        with
                                        ambitious startups
                                        and well-known brands.</h6>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                                <h6 class="fs-16 m-2"><span class="fw-700 heading-title">Fast responses:</span>

                                    Build a predictable pipeline of projects, big and small, through strong
                                    connections.
                                </h6>



                            </div>
                            <div class="d-flex align-items-center ">
                                <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                                <h6 class="fs-16 m-2 "> <span class="fw-700 heading-title">High-quality work:</span>
                                    Search for jobs or have
                                    clients
                                    come to you. The
                                    opportunities
                                    are endless.</h6>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <img class="" src="{{url('/public/assets/findJob/check.png')}}" alt="Image" style="width:15px;" />
                                <h6 class="fs-16 m-2 "><span class="fw-700 heading-title">We're here to help you:</span>
                                    Search for jobs or have
                                    clients
                                    come to you. The
                                    opportunities
                                    are endless.</h6>
                            </div>
                        </div>
                        <button type="button" class="btn mt-2 p-2 fs-16 px-4 text-white" style="background-color:#275846; margin-left:20px;">
                            <span><a href="{{ url('/search?keyword=&type=freelancer')}}" class="text-white"> Find talent</a></span>
                            <span><img class=" px-1 " src=" {{url('/public/assets/home/arrow.png')}}" alt="Image" style="width:18px; " />
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <!--Find scholarship by category -->
        @if (get_setting('latest_project_show') == 'on')
        <section class="border-top" style="background-color:#FBF7ED; padding-bottom:10px;">
            <div class="container-home" style=" ">
                <div class="d-flex justify-content-between ">
                    <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
                        <h2 class="fw-700 fre-small-font"> Find scholarship by category</h2>
                    </div>
                    <div>
                        <h5 class="pt-2 text-center btn rounded-1 border fre-consultant-category">
                            <a href="{{ route('scholarshipSearch')}}?keyword=&type=scholarships" class="fs-16 text-dark  "><span>All Scholarships
                                </span></a>
                            <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:18px;" />
                        </h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=15&type=scholarships') }} " class="text-dark">
                                <div class="card rounded " style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/social-science.jpg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>
                                                <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Social Sciences</p>
                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 8</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                                <!-- @foreach ($subjectCounts as $subject => $count)
                        <li class="list-group-item">
                          <span class="badge bg-primary">{{ $count }}</span>
                          {{ $subject }}
                        </li>
                        @endforeach -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=8&type=scholarships') }}" class="text-dark">
                                <div class="card rounded" style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/university.jpg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>

                                                <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Business and
                                                    Economics</p>

                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 5</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=10&type=scholarships') }}" class="text-dark">
                                <div class="card rounded" style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/medical.jpg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>

                                                <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Health and Medicine</p>


                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 12</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=11&type=scholarships') }}" class="text-dark">
                                <div class="card rounded" style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/humnaties.jpg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>

                                                <p class="card-title  fs-19 fs-700" style=" line-height:17px;"> Law</p>

                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 10</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=9&type=scholarships') }}" class="text-dark">
                                <div class="card rounded" style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/education.jpeg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>

                                                <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Education</p>


                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 12</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=7&type=scholarships') }}" class="text-dark">
                                <div class="card rounded" style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/arts.jpg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>

                                                <p class="card-title  fs-19 fs-700" style=" line-height:17px;">Arts and Humanities</p>


                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 20</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=14&type=scholarships') }}" class="text-dark">
                                <div class="card rounded" style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/engeneering.jpg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>

                                                <p class="card-title  fs-19 fs-700" style=" line-height:17px;"> Science and Engineering</p>

                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 15</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="caorusel-box">
                            <a href="{{url('scholarshipSearch?fieldStudy_id%5B%5D=12&type=scholarships') }}" class="text-dark">
                                <div class="card rounded" style="height:330px">
                                    <div class="">
                                        <div class=" ">
                                            <img src=" {{url('/public/assets/home/Find-scholarship/IT.jpg')}}" class="card-img-top" alt="service_image" height="212">
                                        </div>
                                        <div class="p-3">
                                            <div>
                                                <a class="card-title  fs-19 fs-700" style=" line-height:17px;">Mathematics and Statistics
                                                </a>
                                                <div class="mt-2">
                                                    <span>
                                                        <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image" style="width:14px;" />
                                                    </span>
                                                    <span class="fs-18"> 10</span>
                                                    <span class="fs-18"> Available</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
                <h5 class=" fre-button-show">
                    <a href="" class="fs-16 text-dark  "><span>All Scholarships
                        </span></a>
                    <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:18px;" />
                </h5>
        </section>
        @endif

        <!-- Trending services -->
        @if (get_setting('latest_project_show') == 'on')
        <section class="border-top bg-white" style=" padding-bottom:10px;">
            <div class="container-home">
                <div class="d-flex justify-content-between ">
                    <div class="w-lg-75 w-xl-50 lh-1-8 content-title ">
                        <!-- <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2> -->
                        <h2 class="fw-700 fre-small-font">Featured trending services</h2>
                        <!-- <p class="fs-18">{{ get_setting('service_section_subtitle') }}</p> -->
                    </div>
                    <div>
                        <h5 class="pt-2 text-center btn rounded-1 border fre-consultant-category">
                            <a href="{{ route('search') }}?keyword=&type=service" class="fs-16 text-dark  "><span>All
                                    services</span></a>
                            <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:18px;" />
                        </h5>
                    </div>
                </div>
                <div class="row">
                    @php
                    $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
                    ->pluck('user_id');

                    $services = \App\Models\Service::inRandomOrder()
                    ->whereIn('user_id', $user_ids)
                    ->take(get_setting('max_service_show_homepage'))
                    ->get();
                    @endphp
                    @foreach ($services as $service)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 ">
                        <div class="card">
                            <a href="{{ route('service.show', $service->slug) }}">
                                @if($service->image != null)
                                <img src="{{ custom_asset($service->image) }}" class="card-img-top" alt="service_image" height="212">
                                @else
                                <img src="{{ my_asset('assets/frontend/default/img/placeholder-blog.jpg') }}" class="card-img-top" alt="{{ translate('Service Image') }}" height="212">
                                @endif
                            </a>
                            <div class="card-body">
                                @if($service->category != null)
                                <a href="{{ route('service.show', $service->slug) }} " class="card-title text-dark  fw-700  fs-18">{{$service->category->name}}</a>
                                @endif
                                <p class="card-text fs-16 mt-2 " style="height:48px;">
                                    {{ \Illuminate\Support\Str::limit($service->title, 40, $end = '...') }}
                                </p>
                                <!-- <div class="">
                  <span>
                    <img class="mr-2" src=" {{url('/public/assets/home/star (2).png')}}" alt="Image"
                      style="width:12px;" />
                  </span>
                  <span> 4896</span>
                  <span> reviews</span>
                </div> -->
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mt-1">
                                    <div class="d-flex">
                                        <span class="pr-2">
                                            @if ($service->user->photo != null)
                                            <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                            @else
                                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                            @endif
                                        </span>
                                        <span class="d-flex flex-column justify-content-center">
                                            <a href="{{ route('freelancer.details', $service->user->user_name) }}" class="text-secondary fs-12"><span class=" ">{{ $service->user->name }}</span></a>
                                        </span>
                                    </div>
                                    <div>
                                        <span> from $50</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <h5 class="fre-button-show">
                    <a href="{{ route('search') }}?keyword=&type=service" class="fs-16 text-dark  "><span>All
                            services</span></a>
                    <img class=" category-list " src=" {{url('/public/assets/findJob/right.png')}}" alt="Image" style="width:18px;" />
                </h5>
            </div>
        </section>
        @endif

        <!-- learn with scholarship australia -->
        @if (get_setting('latest_project_show') == 'on')
        <section class="border-bottom" style="background-color:#FBF7ED; padding-top:10px;">
            <div class=" container-home">
                <div class="content-title">
                    <h2 class="fw-700 fre-small-font">Hear what recent FreelancerEdu clients have to say</h2>
                </div>
                <div class="">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class=" card rounded-1 " style="height:300px;">
                                <div class=" card-body">
                                    <p class="text-primary mt-2 fs-18">Great Work</p>
                                    <p class=" mt-3 fs-18 " style="height:120px;">"I am very satisfied with his work; so far, he has
                                        consistently
                                        delivered his job on time. We will work together in the future."
                                    </p>
                                    <hr>
                                    <div class="d-flex  ">
                                        <div>
                                            <img class="mr-2 border " src=" {{url('/public/assets/home/review-1.jpeg')}}" alt="Image" style="width:30px; border-radius:50%;
                  " />
                                        </div>
                                        <div>
                                            <small class="fw-700 fs-14 text-black"> Curtney Henry</small>
                                            <h6 class="fs-14 text-muted" style="Line height:10px;"> Academic advisor</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class=" card rounded-1 " style="height:300px;">
                                <div class=" card-body">
                                    <p class="text-primary mt-2 fs-18">Good Job</p>
                                    <p class=" mt-3 fs-18 " style="height:120px;">"I am happy with his responsiveness throughout the
                                        entire
                                        project
                                        duration; he was very experienced and provided quality work."
                                    </p>
                                    <hr>
                                    <div class="d-flex  ">
                                        <div>
                                            <img class="mr-2 border" src=" {{url('/public/assets/home/review-2.jpeg')}}" alt="Image" style="width:30px; border-radius:50%;
                  " />
                                        </div>
                                        <div class="">
                                            <small class="fw-700 fs-14 text-black"> Mr. jack</small>
                                            <h6 class="fs-14 text-muted" style="Line height:10px;"> Information technology expert</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class=" card rounded-1 " style="height:300px;">
                                <div class=" card-body">
                                    <p class="text-primary mt-2 fs-18">Fantastic</p>
                                    <p class=" fs-18 " style="height:88px;">
                                        " I am happy for my work and recommend him. He is a very potential and committed person."
                                    </p>
                                    <div class="border-top mt-5"></div>
                                    <div class="d-flex  mt-3">
                                        <div>
                                            <img class="mr-2  border" src=" {{url('/public/assets/home/review-3.jpeg')}}" alt="Image" style="width:30px; border-radius:50%;
                  " />
                                        </div>
                                        <div>
                                            <small class="fw-700 fs-14 text-black"> Mitchel Joe </small>
                                            <h6 class="fs-14 text-muted" style="Line height:10px;">Thesis writing helper</h6>
                                        </div>
                                    </div>
                                    </>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        @endif

        @if (get_setting('latest_project_show') == 'on')

        <div class="container-home ">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar  active fs-22  " id="hiring-talent-tab" data-toggle="tab" href="#education" role="tab" aria-controls="hiring" aria-selected="true">Education Course Accreditations</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar fs-22" id="finding-work-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="finding" aria-selected="false">Course Curriculum Development</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar fs-22" id="finding-work-tab" data-toggle="tab" href="#learning" role="tab" aria-controls="finding" aria-selected="false">Learning Management Systems</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar fs-22" id="finding-work-tab" data-toggle="tab" href="#writing" role="tab" aria-controls="finding" aria-selected="false">Writing and Editing</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar fs-22" id="finding-work-tab" data-toggle="tab" href="#research" role="tab" aria-controls="finding" aria-selected="false">Research and Analysis</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar fs-22" id="finding-work-tab" data-toggle="tab" href="#transcription" role="tab" aria-controls="finding" aria-selected="false">Transcription and Translation</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar fs-22" id="finding-work-tab" data-toggle="tab" href="#scholarship" role="tab" aria-controls="finding" aria-selected="false">Scholarship Applications</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fre-rv-find-work-bar fs-22" id="finding-work-tab" data-toggle="tab" href="#mentoring" role="tab" aria-controls="finding" aria-selected="false">Mentoring and Tutoring</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="education" role="tabpanel" aria-labelledby="hiring-talent-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        Instructional Designer</h6>
                                    <h6 class="fs-18">
                                        Curriculum Developer</h6>
                                    <h6 class="fs-18">Subject Matter Expert</h6>
                                    <h6 class="fs-18">Accreditation Specialist</h6>
                                    <h6 class="fs-18">Education Consultant</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">

                                    <h6 class="fs-18">
                                        Learning Designer</h6>
                                    <h6 class="fs-18">
                                        Assessment Coordinator</h6>
                                    <h6 class="fs-18">
                                        Quality Assurance Analyst</h6>
                                    <h6 class="fs-18">Content Writer </h6>
                                    <h6 class="fs-18">Researcher </h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        Project Manager</h6>
                                    <h6 class="fs-18">
                                        E-Learning Developer</h6>
                                    <h6 class="fs-18">
                                        Instructional Technologist</h6>
                                    <h6 class="fs-18">
                                        Educational Psychologist</h6>
                                    <h6 class="fs-18">
                                        Assessment Specialist</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18 text-normal">Multimedia Specialist</h6>
                                    <h6 class="fs-18 text-normal">Graphic Designer</h6>
                                    <h6 class="fs-18 text-normal">Data Analyst</h6>
                                    <h6 class="fs-18 text-normal">Evaluation and Assessment Coordinator</h6>
                                    <h6 class="fs-18 text-normal">Online Learning Coordinator</h6>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        Curriculum Developer</h6>
                                    <h6 class="fs-18">
                                        Instructional Designer</h6>
                                    <h6 class="fs-18">Subject Matter Expert (SME)</h6>
                                    <h6 class="fs-18">Education Consultant</h6>
                                    <h6 class="fs-18">Content Developer</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">
                                    <h6 class="fs-18">
                                        Learning Experience Designer</h6>
                                    <h6 class="fs-18">
                                        Curriculum Coordinator</h6>
                                    <h6 class="fs-18">
                                        Curriculum Writer</h6>
                                    <h6 class="fs-18">Instructional Technologist</h6>
                                    <h6 class="fs-18">Educational Specialist </h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        E-Learning Developer</h6>
                                    <h6 class="fs-18">
                                        Assessment Specialist</h6>
                                    <h6 class="fs-18">
                                        Learning Designer</h6>
                                    <h6 class="fs-18">
                                        Curriculum Project Manager</h6>
                                    <h6 class="fs-18">
                                        Curriculum Editor</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        Curriculum Consultant</h6>
                                    <h6 class="fs-18">Curriculum Coordinator</h6>
                                    <h6 class="fs-18">Instructional Materials Developer</h6>
                                    <h6 class="fs-18">Curriculum Integration Specialist</h6>
                                    <h6 class="fs-18">Curriculum Assessment Analyst</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="learning" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        LMS Developer</h6>
                                    <h6 class="fs-18">
                                        Instructional Designer</h6>
                                    <h6 class="fs-18">UX/UI Designer</h6>
                                    <h6 class="fs-18">Front-end Developer</h6>
                                    <h6 class="fs-18">Back-end Developer</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">

                                    <h6 class="fs-18">
                                        Full-stack Developer</h6>
                                    <h6 class="fs-18">
                                        Software Engineer </h6>
                                    <h6 class="fs-18">
                                        System Administrator</h6>
                                    <h6 class="fs-18">Database Administrator </h6>
                                    <h6 class="fs-18">Project Manager </h6>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">Quality Assurance Analyst </h6>
                                    <h6 class="fs-18">
                                        Content Developer</h6>
                                    <h6 class="fs-18">
                                        Graphic Designer</h6>
                                    <h6 class="fs-18">
                                        Mobile App Developer</h6>
                                    <h6 class="fs-18">
                                        Integration Specialist</h6>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        Technical Writer</h6>
                                    <h6 class="fs-18">User Support Specialist</h6>
                                    <h6 class="fs-18">Data Analyst</h6>
                                    <h6 class="fs-18">Training Coordinator</h6>
                                    <h6 class="fs-18">LMS Administrator</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="writing" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Academic Writer</h6>
                                    <h6 class="fs-18">
                                        Content Writer</h6>
                                    <h6 class="fs-18">Copywriter</h6>
                                    <h6 class="fs-18">Editor</h6>
                                    <h6 class="fs-18">Proofreader</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">
                                    <h6 class="fs-18">
                                        Researcher</h6>
                                    <h6 class="fs-18">
                                        Subject Matter Expert </h6>
                                    <h6 class="fs-18">
                                        Curriculum Developer</h6>
                                    <h6 class="fs-18">Instructional Designer </h6>
                                    <h6 class="fs-18">Copy Editor</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Publishing Assistant</h6>
                                    <h6 class="fs-18">
                                        Editorial Assistant</h6>
                                    <h6 class="fs-18">
                                        Technical Writer</h6>
                                    <h6 class="fs-18">
                                        Grant Writer</h6>
                                    <h6 class="fs-18">
                                        Manuscript Editor</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Citation Specialist</h6>
                                    <h6 class="fs-18">Academic Policy Writer</h6>
                                    <h6 class="fs-18">Legal Writer</h6>
                                    <h6 class="fs-18">Language Editor</h6>
                                    <h6 class="fs-18">Freelance Writer/Editor</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="research" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Confirmatory Factor Analysis(CFA)</h6>
                                    <h6 class="fs-18">
                                        Cross-Lagged Panel Models</h6>
                                    <h6 class="fs-18">Demographic Methods</h6>
                                    <h6 class="fs-18">Discourse analysis</h6>
                                    <h6 class="fs-18">Dynamic Panel Data Modeling</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">
                                    <h6 class="fs-18">
                                        Dynamic SEM (DSEM)</h6>
                                    <h6 class="fs-18">
                                        Ecological Momentary Assessment(EMA) </h6>
                                    <h6 class="fs-18">
                                        Empirical Dynamic Modeling(EDM)</h6>
                                    <h6 class="fs-18">Experience Sampling Methods(ESM)</h6>
                                    <h6 class="fs-18">Intensive Longitudinal Data Analysis </h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Longitudinal Analysis</h6>
                                    <h6 class="fs-18">
                                        Longitudinal SEM</h6>
                                    <h6 class="fs-18">
                                        Measurement Invariance Testing</h6>
                                    <h6 class="fs-18">
                                        Multilevel Modeling(MLM)</h6>
                                    <h6 class="fs-18">
                                        Multilevel Structural Equation Modeling(MSEM)</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">Panel Data Modeling</h6>
                                    <h6 class="fs-18">Path Analysis</h6>
                                    <h6 class="fs-18">Qualitative data analysis</h6>
                                    <h6 class="fs-18">Quantitative data analysis</h6>
                                    <h6 class="fs-18">Structural Equation Modeling(SEM)</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="transcription" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">Academic Transcriber</h6>
                                    <h6 class="fs-18">Academic Translator</h6>
                                    <h6 class="fs-18">Language Specialist</h6>
                                    <h6 class="fs-18">Transcriptionist</h6>
                                    <h6 class="fs-18">Language Services Coordinator</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">
                                    <h6 class="fs-18">Translation Project Manager</h6>
                                    <h6 class="fs-18">Language Quality Assurance Specialist </h6>
                                    <h6 class="fs-18">Linguistics Researcher</h6>
                                    <h6 class="fs-18">Bilingual Research Assistant </h6>
                                    <h6 class="fs-18">Language Analyst </h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Transcription Editor</h6>
                                    <h6 class="fs-18">
                                        Multilingual Content Writer</h6>
                                    <h6 class="fs-18">
                                        Academic Proofreader</h6>
                                    <h6 class="fs-18">
                                        Language Instructor</h6>
                                    <h6 class="fs-18">
                                        Language Technology Specialist</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        Interpreting Services Coordinator</h6>
                                    <h6 class="fs-18 text-normal">Localization Specialist</h6>
                                    <h6 class="fs-18 text-normal">Language Data Analyst</h6>
                                    <h6 class="fs-18 text-normal">Academic Language Consultant</h6>
                                    <h6 class="fs-18 text-normal">Language Services Administrator</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="scholarship" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Academic Consultant</h6>
                                    <h6 class="fs-18">
                                        Scholarship Application Advisor</h6>
                                    <h6 class="fs-18">Research Grant Consultant</h6>
                                    <h6 class="fs-18">Scholarship Specialist</h6>
                                    <h6 class="fs-18">Grant Proposal Writer</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">
                                    <h6 class="fs-18">Research Funding Consultant</h6>
                                    <h6 class="fs-18">Scholarship Application Reviewer </h6>
                                    <h6 class="fs-18">Research Project Manager</h6>
                                    <h6 class="fs-18">Funding Strategy Consultant</h6>
                                    <h6 class="fs-18">Grant Development Coordinator</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        Research Scholarship Coach</h6>
                                    <h6 class="fs-18">
                                        Scholarship Application Coordinator</h6>
                                    <h6 class="fs-18">
                                        Grant Writing Specialist</h6>
                                    <h6 class="fs-18">
                                        Research Funding Analyst</h6>
                                    <h6 class="fs-18">
                                        Scholarship Program Manager</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">
                                        Research Grant Administrator</h6>
                                    <h6 class="fs-18 text-normal">Funding Opportunities Researcher</h6>
                                    <h6 class="fs-18 text-normal">Scholarship Application Assessor</h6>
                                    <h6 class="fs-18 text-normal">Academic Writing Consultant</h6>
                                    <h6 class="fs-18 text-normal">Supervisors Communications Specialist</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mentoring" role="tabpanel" aria-labelledby="finding-work-tab">
                    <div class=" row mt-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">
                                    <h6 class="fs-18">Uni Maths Tutor</h6>
                                    <h6 class="fs-18">Uni Statistics Tutor</h6>
                                    <h6 class="fs-18">Uni Science Tutor</h6>
                                    <h6 class="fs-18">Uni English Language Tutor</h6>
                                    <h6 class="fs-18">Uni English Tutor</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  h-400px">
                                <div class=" px-3 py-2">

                                    <h6 class="fs-18">
                                        Uni Biology Tutor</h6>
                                    <h6 class="fs-18">
                                        Uni Chemistry Tutor </h6>
                                    <h6 class="fs-18">
                                        Uni Physics Tutor</h6>
                                    <h6 class="fs-18">Uni Computer Science Tutor</h6>
                                    <h6 class="fs-18">Uni Business Tutor</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        High School Maths Tutor</h6>
                                    <h6 class="fs-18">
                                        High School Statistics Tutor</h6>
                                    <h6 class="fs-18">
                                        High School Science Tutor</h6>
                                    <h6 class="fs-18">
                                        High School English Tutor</h6>
                                    <h6 class="fs-18">
                                        High School Biology Tutor</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="  ">
                                <div class="px-3 py-2">

                                    <h6 class="fs-18">
                                        High School Chemistry Tutor</h6>
                                    <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                                    <h6 class="fs-18 text-normal">Academic Coach</h6>
                                    <h6 class="fs-18 text-normal">Career Coach</h6>
                                    <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!--
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h1>Column one</h1>
              <div class="px-3 py-2">
                <h6 class="fs-18">
                  High School Chemistry Tutor</h6>
                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                <h6 class="fs-18 text-normal">Academic Coach</h6>
                <h6 class="fs-18 text-normal">Career Coach</h6>
                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
              </div>
            </div>
            <div class="col-md-6">
              <div class="px-3 py-2">

                <h6 class="fs-18">
                  High School Chemistry Tutor</h6>
                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                <h6 class="fs-18 text-normal">Academic Coach</h6>
                <h6 class="fs-18 text-normal">Career Coach</h6>
                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="vertical-line"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="px-3 py-2">

                <h6 class="fs-18">
                  High School Chemistry Tutor</h6>
                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                <h6 class="fs-18 text-normal">Academic Coach</h6>
                <h6 class="fs-18 text-normal">Career Coach</h6>
                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
              </div>
            </div>
            <div class="col-md-6">
              <div class="px-3 py-2">

                <h6 class="fs-18">
                  High School Chemistry Tutor</h6>
                <h6 class="fs-18 text-normal">High School Physics Tutor</h6>
                <h6 class="fs-18 text-normal">Academic Coach</h6>
                <h6 class="fs-18 text-normal">Career Coach</h6>
                <h6 class="fs-18 text-normal">Peer Academic Advisor</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->



        <!-- Last section -->
        <!-- @if (get_setting('slider_section_show') == 'on')
    <section class=" " style="min-height:350px; background-color:#FBF7ED;">
      <div class="container-main">
        <div class="pb-5">
          <div class="row ">
            <div class="col-lg-6 col-sm-12 px-4  p-3" style="">
              <div>
                <button class="btn  text-white fs-14" style="background-color:#275846;">Start today</button>
                <h2 class=" fw-700 fs-36 my-4"
                  style="font-family:sans-serif; letter-spacing: -.032em; line-height: 1em;">
                  Download
                  the
                  App
                </h2>
                <small class=" my-1 fs-18">To classes on the go with scholarship Australia app. Stream or download to
                  the
                  watch on the plane, the subway or wherever you learn best
                </small>
                <div class="mt-3">
                  <a href="{{ route('register') }}?type=2" style="background-color:#275846;" class=" btn mb-3 ">
                    <img class="" src=" {{url('/public/assets/home/apple.png')}}" alt="Image" style="height:20px; " />
                    <span>|</span>
                    <span class="text-white"> Apple store</span>

                  </a>
                  <a href="{{ route('register') }}?type=2" style="background-color:#275846;" class="btn  mb-3">
                    <img class="" src="{{url('/public/assets/home/playstore.png')}}" alt="Image"
                      style="height:20px; " />
                    <span>|</span>
                    <span class="text-white">Google play store</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 " style="">
              <img src=" {{url('/public/assets/findJob/home-banner.png')}}" alt="Image" class=" w-100" style=" " />
            </div>
          </div>
        </div>
      </div>

    </section>>
    @endif -->

        @endsection
        @section('script')
        @if ((Session::has('new_user') && Session::get('new_user') == true) || (auth()->check() &&
        auth()->user()->user_type ==
        null))
        <script>
            $('#show_new_user_modal').modal({
                show: true
            });
        </script>

        <script type="text/javascript">
            function applyFilter() {
                $('#consultant-filter-form').submit();
            }
        </script>


        @endif
        @endsection

</body>

</html>
