@extends('layout.main')
@section('content')
<section id="chefs" class="chefs section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        {{-- <h2>Chefs</h2> --}}
        <p>Our <span>Diet</span> categoires</p>
      </div>
      <div class="row gy-4">
        @foreach ($categoires as $item)
        
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="chef-member">
            <div class="member-img">
              <img src="{{$item->category_image}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              {{-- {{$item->id}} --}}
              <a href="nutritionists/{{$item->id}}">
                <h4>{{$item->category_name}}</h4>
              </a>
                <span></span>
              <p>{{$item->category_description}}</p>
            </div>
          </div>
        </div><!-- End Chefs Member -->
        @endforeach

        

        
      </div>
    </div>
  </section>
@endsection
