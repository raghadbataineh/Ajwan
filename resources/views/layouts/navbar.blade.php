 <!-- Topbar Start -->
 <div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i class="fa fa-phone-alt mr-2"></i><a href="tel:0781012003" style="color: white">+0962 781012003</a></small>

                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i><a href="mailto:#" style="color: white">idea.headdep@gmail.com</a></small>

            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
 
 
 <!-- Navbar Start -->
 <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            {{-- <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Edukate</h1> --}}
            <img src="{{asset('images/fekra.jpg')}}" alt="" width="100%" height="70px">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse" dir="rtl">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{route('category.indexcategory')}}" class="nav-item nav-link">الصفحة الرئيسية</a>
                <a href="{{route('about')}}" class="nav-item nav-link active">من نحن </a>
                <a href="{{route('courses')}}" class="nav-item nav-link">كورسات</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">الصفحات</a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">مميزات جمعية فكرة</a>
                        <a href="{{route('gallery')}}" class="dropdown-item">الملحقات</a>
                        {{-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> --}}
                    </div>
                </div>
                <a href="{{route('show.contact')}}" class="nav-item nav-link">تواصل معنا</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->