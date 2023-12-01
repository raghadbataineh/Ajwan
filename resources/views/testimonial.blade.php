@extends('.\layouts\master')

{{-- @section('title','') --}}


@section('css')
<style>
    h2 {
        margin: 100px;
    }
</style>
@endsection



@section('content')

  {{-- our facilties  --}}
    <!-- Gallery -->
   <div class="container">
    <h2 style="text-align: center">الملحقات</h2>

    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        
            <img
            src="images/g.jpg"
            class="w-100 shadow-1-strong rounded mb-4"
              alt="Waves at Sea"
            />
          <img
          src="images/b.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
            alt="Wintry Mountain Landscape"
          />
        </div>
      
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img
          src="images/d.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
            alt="Mountains in the Clouds"
          />
      
          <img
          src="images/f.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"
          />
        </div>
      
        <div class="col-lg-4 mb-4 mb-lg-0">
          <img
          src="images/g.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
            alt="Waves at Sea"
          />
      
          <img
          src="images/h.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
            alt="Yosemite National Park"
          />
          
        </div>
      </div>
   </div>
  <!-- Gallery -->
    {{--  ENd our facilties  --}}

@endsection

@section('scripts')

@endsection
