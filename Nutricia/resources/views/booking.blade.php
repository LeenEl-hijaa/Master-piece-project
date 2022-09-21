@extends('layout.main')
@section('content')
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Book A Table</h2>
        <p>Book <span>Your Stay</span> With Us</p>
      </div>

      <div class="row g-0">

        <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
         
            <form action="book" method="post" class="form m-4">
                @csrf
                @if ($message = Session::get('sucess'))
                <div class="alert alert-success">
                {{ $message }}
                </div>
                @endif
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="date" name="date" class="form-control" id="date" placeholder="Birth Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control" name="height" id="time" placeholder="Height" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
                <input type="number" class="form-control" name="Weight" id="people" placeholder="Weight" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6">
<select class="form-control" name="select" id="">
    <option value="">select a dietitan</option>
    @foreach ($booking as $item)
    <option value="{{$item->id}}">{{$item->nutritionist_name}}</option>
@endforeach
</select>
                <div class="validate"></div>
              </div>
            </div>
            
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Additional notes"></textarea>
              <div class="validate"></div>
            </div>

            <div class="text-center mt-2"><button type="submit">Book Now</button></div>
          </form>
        </div><!-- End Reservation Form -->

      </div>

    </div>
  </section><!-- End Book A Table Section -->
