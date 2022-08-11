@extends('layout.main')
@section('content')
<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Healty Recipes </h2>
        <p>Check Out <span>Our Healty Recipes</span></p>
      </div>
{{-- 
      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
            <h4>Starters</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Breakfast</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>Lunch</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
            <h4>Dinner</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul> --}}

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-starters">

          {{-- <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Starters</h3>
          </div> --}}

          <div class="row gy-5">
@foreach ($recipes as $item)
        {{-- {{}} --}}
        <div class="col-lg-4 menu-item">
              <a href="{{$item->recipes_image}}" class="glightbox"><img src="{{$item->recipes_image}}" class="menu-img img-fluid" alt=""></a>
              <a href="{{route('recipes.show',$item->id)}}"><h4>{{$item->recipes_name}}</h4></a>
              <p class="ingredients">
                {{$item->recipes_description}}              
              </p>
              {{-- <p class="price">
                $5.95
              </p> --}}
            </div>
    @endforeach
          </div>
        </div><!-- End Starter Menu Content -->        
      </div>
    </div>
  </section><!-- End Menu Section -->
@endsection
