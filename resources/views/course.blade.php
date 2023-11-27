@extends ('layouts.master')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-1">الدورات</h1>
        <div class="d-inline-flex text-white mb-5">
            <p class="m-0 text-uppercase"><a class="text-white" href="">الرئيسية</a></p>
            <i class="fa fa-angle-double-left pt-1 px-3"></i>
            <p class="m-0 text-uppercase">الدورات</p>
        </div>
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">الدورات</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">الإدارة العامة والقيادة</a>
                        <a class="dropdown-item" href="#"> الموارد البشرية والتدريب</a>
                        <a class="dropdown-item" href="#"> العلاقات العامة والإعلام</a>
                    </div>
                </div>
                <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="الكلمة المفتاحية">
                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5">البحث</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Header End -->


    <!-- Courses Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center position-relative mb-5">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">دوراتنا</h6>
                    <h1 class="display-4">تحقق من إصداراتنا الجديدة لدوراتنا</h1>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                @foreach ($course as $singleCourse)
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="{{ route('single', ['id' => $singleCourse->id]) }}">
                        <img class="img-fluid" src="{{ asset('img/courses-1.jpg') }}" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">{{ $singleCourse->name }}</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i> {{ $singleCourse->instructor }}</span>
                                    <span class="text-white"><i class="fa fa-check  mr-2"></i> {{ $singleCourse->status }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            
            
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg justify-content-center flex-row-reverse mb-0">
                            <li class="page-item disabled">
                                <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                
            </div>
        </div>
    </div>
    
    <!-- Courses End -->

@endsection