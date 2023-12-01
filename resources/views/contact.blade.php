@extends('.\layouts\master')

{{-- @section('title','') --}}


@section('css')

@endsection



@section('content')



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
                                <h4>العنوان</h4>
                                <p class="m-0">الاردن، اربد، شارع الثلاثين، بناية المؤسسة المدنية ، الطوابق 1،2،3</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>رقم الهاتف</h4>
                                <p class="m-0"><a href="tel:0781012003">+0962 781012003</a></p>
                                <p class="m-0"><a href="tel:0791012003">+0962 791012003</a></p>
                               
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>الإيميل </h4>
                                <p class=""m-0"><a href="mailto:#">idea.hu2022@gmail.com</a>
                                <p class=""m-0"><a href="mailto:#">idea.headdep@gmail.com</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    @if (Session::has('success'))
                             <div class="alert alert-success text-center" dir="rtl">
                                 {{ Session::get('success') }}
                             </div>
                         @endif
                         @if (Session::has('error'))
                             <div class="alert alert-danger text-center" dir="rtl">
                                 {{ Session::get('error') }}
                             </div>
                         @endif
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2"> تواصل معنا</h6>
                        <h1 class="display-4" style="direction: rtl; text-align:center">ارسل رسالة</h1>
                    </div>
                    <div class="contact-form">
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" name="name" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="الاسم الكامل " value="{{ old('name') }}"
                                    style="direction: rtl;">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="col-6 form-group">
                                    <input type="text" name="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="الإيميل "
                                    value="{{ old('email') }}" style="direction: rtl; text-align:right">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="الموضوع"
                                value="{{ old('subject') }}" style="direction: rtl;">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif

                            </div>

                            <div class="form-group">
                                <textarea  name="message"  class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" style="direction: rtl;">{{ old('message') }} </textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" style="direction: rtl; text-align: center; float: right;" type="submit">إرسال</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


   
    @endsection

    @section('scripts')
    
    @endsection
    