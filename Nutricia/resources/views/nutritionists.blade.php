@extends('layout.main')
@section('content')
<section id="chefs" class="chefs section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        {{-- <h2>Chefs</h2> --}}
        <p>Our <span>Expert</span> Nutritionists</p>
      </div>

      <div class="row gy-4">
        @foreach ($nutritionst as $item)

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="chef-member">
            <div class="member-img">
              <img src="{{$item->nutritionist_image}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{$item->nutritionist_name}}</h4>
              <span>{{$item->nutritionist_description}}</span>
              <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
            </div>
          </div>
        </div><!-- End Chefs Member -->
        @endforeach

        

        
      </div>

    </div>
  </section>
@endsection
