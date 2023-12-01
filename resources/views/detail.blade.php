@extends('.\layouts\master')

{{-- @section('title','') --}}


@section('css')

@endsection



@section('content')



<body>
 

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Course Detail</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Course Detail</p>
            </div>
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


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                                
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2" >تفاصيل الدورة</h6>
                            <h1 class="display-4" style="text-align: right;">{{ $courses->name }}</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="{{ asset ( $courses->image)}}" alt="Image" width="80%">
                        <p>
                            دبلوم التجارة وإدارة الأعمال هو برنامج تعليمي يهدف إلى تزويد الطلاب بالمهارات والمعرفة الضرورية لفهم وتنفيذ مفاهيم إدارة الأعمال والتجارة. يتم تصميم البرنامج لتلبية احتياجات الطلاب الذين يسعون للعمل في مجال الأعمال والإدارة.


                        </p>
                        
                        <p> 

                            إدارة الموارد البشرية: يغطي البرنامج مواضيع إدارة الموارد البشرية، بما في ذلك اختيار وتوظيف الموظفين، وتطويرهم، وإدارة العلاقات العمالية. يهدف ذلك إلى تجهيز الطلاب بمهارات القيادة والتنظيم الضرورية.
                            
                            الاقتصاد والتجارة الدولية: يتناول البرنامج مفاهيم الاقتصاد والتجارة الدولية، مما يمكن الطلاب من فهم تأثير الاقتصاد العالمي على الأعمال التجارية وكيفية التفاعل مع الأسواق العالمية.
                            
                            إدارة الابتكار والتكنولوجيا: يشمل البرنامج دراسة كيفية إدارة الابتكار واستخدام التكنولوجيا في تحسين العمليات الأعمال وتحقيق التنمية المستدامة.
                            
                            إدارة المشاريع: يتناول البرنامج مفاهيم إدارة المشاريع، بما في ذلك التخطيط، والتنظيم، والتنفيذ، والمراقبة. يهدف إلى تجهيز الطلاب بالمهارات اللازمة لإدارة المشاريع بفعالية.
                            
                            ريادة الأعمال: يتيح البرنامج للطلاب فهم عملية إنشاء وتطوير الأعمال الخاصة، بما في ذلك تطوير الفكرة، وإعداد الخطط الريادية، وإدارة المخاط</p>
                    </div>

                    <h2 class="mb-3" style="text-align: right;">دورات مشابهة</h2>
<div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
    @foreach ($relatedCourses as $course)
        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="{{ route('coursedetails', $course->id) }}">
            <img class="img-fluid" src="{{ asset($course->image) }}" alt="{{ $course->name }}">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">{{ $course->name }}</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>{{ $course->instructor }}</span>
                        {{-- <span class="text-white"><i class="fa fa-star mr-2"></i>{{ $course->rating }}
                            <small>({{ $course->reviews }})</small></span> --}}
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
               </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Course Features</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">المدرب</h6>
                            <h6 class="text-white my-3">{{ $courses->instructor }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">التقييم</h6>
                            <h6 class="text-white my-3">4.5 <small>(250)</small></h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">عدد المحاضرات</h6>
                            <h6 class="text-white my-3">{{ $courses->Lectures }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">المدة الزمنية</h6>
                            <h6 class="text-white my-3">{{ $courses->Duration }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">حالة الدورة</h6>
                            <h6 class="text-white my-3">{{ $courses->status }}</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">اللغة</h6>
                            <h6 class="text-white my-3">English</h6>
                        </div>
                        {{-- <h5 class="text-white py-3 px-4 m-0">Course Price: $199</h5> --}}
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="">تواصل معنا لمزيد من المعلومات</a>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3">تصنيفات  </h2>
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $category)
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <a href="{{ route('category.indexcategory', $category->id) }}" class="text-decoration-none h6 m-0">{{ $category->name }}</a>
                                    {{-- <span class="badge badge-primary badge-pill">{{ $category->count }}</span> --}}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    @endsection

    @section('scripts')
    
    @endsection
    