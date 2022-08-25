@extends('layout.main')
@section('content')
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Healty Recipes </h2>
        <p>Check Out <span>Our Healty Recipes</span></p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url({{$recipes->recipes_image}}) ;" data-aos="fade-up" data-aos-delay="150">
          <!-- <div class="call-us position-absolute">
            <h4>Book a Table</h4>
            <p>+1 5589 55488 55</p>
          </div> -->
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
           <h4> <i class="bi bi-check2-all"></i>{{$recipes->recipes_name}}</h4>
            <p class="fst-italic">
                {{$recipes->recipes_description}}
            </p>
            <p>
              {{$recipes->recipes_ingreadients}}
            </p>
            
                {{-- @foreach($recipes as $item) --}}
{{--               
              <li><i class="bi bi-check2-all"></i> sport advice from reliable sport experts.</li>
              <li><i class="bi bi-check2-all"></i> subscribtion from all over the world with several highly experienced nutritionists in The field of nutrition and diets.</li>
            @endforeach --}}
           
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p> -->

           
          </div>
        </div>
      </div>
    </section>
@endsection
