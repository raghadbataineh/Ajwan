@extends('.\layouts\master')

{{-- @section('title','') --}}


@section('css')

@endsection



@section('content')












<body>
    <!-- Topbar Start -->



    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
            <h1 class="text-white display-1 mb-5">Education Courses</h1>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" style="direction: rtl; text-align: right;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.40 PM.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2" style="font-size: 30px">من نحن</h6>
                        <h1 class="display-4">المعرفة ليست التي تحفظ، بل المعرفة هي التي تنتفع بها</h1>
                    </div>
                    <p>المعرفة، التعلم و التدريب. إن هذه العوامل هي مفاتيح التطور والنجاح. منذ العام 2015 والجمعية تحقق نجاحاً محلياً ودولياً واضعاً مقاييس جديدة في سوق مراكز التعليم والتدريب.

                        ونظراً لتميز الجمعية في مجال التعليم والتدريب لالتزامه الكامل بالقوانين وجودة الخدمة والتعليم وسعيه الدؤوب لنقل تجربة التعليم والتدريب لأعلى المستويات العالمية بالتركيز على صقل وتنمية المهارات والقدرات الفردية لبناء اشخاص منتجين للمعرفة متبعين وسائل التدريب الحديثة ومستخدمين أفضل الموارد المتوفرة
                    </p>
                    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">3.600</h1>
                                <h6 class="text-uppercase text-white">قطاع <span class="d-block">ألتعليمي</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1.000</h1>
                                <h6 class="text-uppercase text-white">قطاع<span class="d-block">ألتنموي</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">3.250</h1>
                                <h6 class="text-uppercase text-white">قطاع<span class="d-block">ألحماية</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0; direction: rtl; text-align: right;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5 order-lg-2">
                    <div class="section-title position-relative mb-4">
                        {{-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6> --}}
                        <h1 class="display-4">أهداف الجمعية</h1>
                    </div>
                    <p class="mb-4 pb-2">تسعى جمعية فكرة للإنسانية في تحقيق كافة أهدافها</p>
                    <div class="d-flex mb-3">

                        <div class="mt-n1">
                            <p></p>
                            <h4>دعم الطلاب وتنمية قدراتهم ومهاراتهم</h4>
                        </div>
                    </div>
                    <div class="d-flex mb-3">

                        <div class="mt-n1">
                            <p></p>
                            <h4>تقديم خدمات متنوعة وذلك من خلال الدورات مجانية</h4>
                        </div>
                    </div>
                    <div class="d-flex mb-3">

                        <div class="mt-n1">
                            <p></p>
                            <h4>دمج ذوي الإحتياجات الخاصة مع جميع أفراد المجتمع</h4>
                        </div>
                    </div>

                    <div class="d-flex mb-3">

                        <div class="mt-n1">
                            <p></p>
                            <h4>تحفيز قدرات الأفراد على تحقيق درجة عالية في النمو الذهني والأداء
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1" style="min-height: 500px;">
                    <!-- Your image content here -->

                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Feature Start -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2" style="font-size: 30px">دوراتنا</h6>
                    <h1 class="display-4">دورات جمعية فكرة</h1>
                </div>
            </div>
        </div>

        <div class="owl-carousel courses-carousel">
            @foreach($categorys as $category)
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{ url($category->image) }}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">{{ $category->name }}</h4>
                    <div class="border-top w-100 mt-3">
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{ route('shop.index', ['id' => $category->id]) }}">تفاصيل الدورة</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2" style="font-size: 30px">المدربين</h6>
                <h1 class="display-4">تعرف على مدربينا</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.43 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألاستاذ محمد الصمادي</h5>
                        <p class="mb-2">لغة عربية</p>

                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100"  src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.44 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألاستاذ مجدي دبابكة</h5>
                        <p class="mb-2">ألاحياء</p>

                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.45 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألاستاذ زيد ملكاوي</h5>
                        <p class="mb-2">كيمياء</p>

                    </div>
                </div>

                <div class="team-item">
                    <img class="img-fluid w-100"  src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.47 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألمعلمة ساره المصري</h5>
                        <p class="mb-2">English</p>

                    </div>
                </div>

                <div class="team-item">
                    <img class="img-fluid w-100"  src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.48 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألاستاذ جهاد الطيطي</h5>
                        <p class="mb-2">رياضيات</p>

                    </div>
                </div>

                <div class="team-item">
                    <img class="img-fluid w-100"  src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.49 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألاستاذ محمد الملالحة</h5>
                        <p class="mb-2">رياضيات</p>

                    </div>
                </div>

                <div class="team-item">
                    <img class="img-fluid w-100"  src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.50 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألمعلمة مرام الدهني</h5>
                        <p class="mb-2">فيزياء</p>

                    </div>
                </div>


                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('img/WhatsApp Image 2023-11-22 at 1.59.46 PM.jpeg') }}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">ألاستاذ محمد الدهني</h5>
                        <p class="mb-2">حاسوب</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                        <h1 class="display-4">What Say Our Students</h1>
                    </div>
                    <p class="m-0">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-2.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0">123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call Us</h4>
                                <p class="m-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                        <h1 class="display-4">Send Us A Message</h1>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @endsection


    @section('scripts')

    @endsection

