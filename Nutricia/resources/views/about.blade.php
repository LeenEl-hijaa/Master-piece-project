@extends('layout.main')
@section('content')
<body>

 <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(https://www.hfe.co.uk/wp-content/uploads/2021/06/Dietician-Diet-Plan.png) ;" data-aos="fade-up" data-aos-delay="150">
            <!-- <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+1 5589 55488 55</p>
            </div> -->
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                The first website specialized in providing nutritional information from reliable sources and the latest scientific studies in a simple and easy way.
                <br>
                The site also provides:
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> variety of articles about health and nutrition.</li>
                <li><i class="bi bi-check2-all"></i> sport advice from reliable sport experts.</li>
                <li><i class="bi bi-check2-all"></i> subscribtion from all over the world with several highly experienced nutritionists in The field of nutrition and diets.</li>
              </ul>
              <!-- <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p> -->

              <div class="position-relative mt-4">
                <img src="https://twincitiesnutritionist.com/wp-content/uploads/2021/06/AdobeStock_274813027-1024x683.jpeg" class="img-fluid" alt="">
                <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    @endsection
