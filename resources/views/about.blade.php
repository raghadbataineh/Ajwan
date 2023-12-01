


@extends('.\layouts\master')

{{-- @section('title','') --}}


@section('css')

@endsection



@section('content')





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
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                        <h1 class="display-4">Why You Should Start Learning with Us?</h1>
                    </div>
                    <p class="mb-4 pb-2">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Skilled Instructors</h4>
                            <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>International Certificate</h4>
                            <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Online Classes</h4>
                            <p class="m-0">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


  

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    @endsection

    @section('scripts')
    
    @endsection