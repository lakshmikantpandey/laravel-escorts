@extends('layouts.user_layout')

@section('content')


<!-- ======= Gallery Section ======= -->
<section id="portfolio" class="portfolio" data-aos="fade-up">

  <div class="container">

    <div>
      <video height="500" width="500" autoplay controls loop muted poster="https://www.pinkgoa.in/wp-content/uploads/2024/01/pinkgoa-call-girl-thumbnail.webp" src="https://www.pinkgoa.in/wp-content/uploads/2024/01/pinkgoa-call-girls.mp4"></video>
    </div>

    <div>
      <h2>Save more money by booking high class profile girls in our escorts service</h2>
      <p>Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
        Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates.</p>
    </div>

    <div>
      <h2>100% Geniune model girls for campanions and enjoyment the special nights</h2>
      <p>Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
        Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates.</p>
    </div>

    <div class="section-header">
      <h2>See our most recommended models</h2>
      <p>Explore our gallery to find the embodiment of passion and sophistication, each companion eager to fulfill your desires.
        Each profile in our gallery is a testament to allure and charm, promising an exceptional experience tailored to your preferences.</p>
    </div>

    @foreach ($models as $model)
    <div class="card border-3 border-dark mt-2">
      <img src="{{ asset('admin/img/models/' . $model->image) }}" class="card-img-top" alt="...">
      <div class="card-body model-card text-white">
        <table class="table-bordered border-white w-100">
          <tr>
            <td class="ps-2">Name</td>
            <td class="ps-2">{{ $model->modelName }}</td>
          </tr>
          <tr>
            <td class="ps-2">Age</td>
            <td class="ps-2">{{ $model->age }} Years</td>
          </tr>
        </table>
        <div class="card-body text-center mt-3">
          <p class="card-text">{{ $model->detail }}</p>
          <a class="btn btn-dark rounded-4 mb-3" href="/contact">View more</a>
          <p>{{ $model->city }}</p>
        </div>
      </div>
    </div>
    @endforeach

  </div>

</section>

<!-- ======= top model Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2 class="bg-warning">Our Top Models</h2>
      <p>Browse through our gallery and elevate your experience with companions who redefine luxury and intimacy.</p>
    </div>

    <div class="row gy-5">

      @foreach ($topModels as $topModel)

      <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
        <div class="team-member">
          <div class="member-img">
            <img src="{{ asset('admin/img/models/' . $topModel->image) }}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>{{ $topModel->modelName }}</h4>
            <span>Top Booked Model</span>
          </div>
        </div>
      </div>

      @endforeach

    </div>

  </div>
</section><!-- End top model Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2 class="bg-warning">Our Services</h2>
      <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
    </div>

    <div class="row gy-5">

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
            <img src="assets/img/models/6.jpeg" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Call girl services</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item">
          <div class="img">
            <img src="assets/img/models/5.jpeg" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Escorts Service</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item">
          <div class="img">
            <img src="assets/img/models/1.jpeg" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Providing models</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Pricing</h2>
    </div>

    <div class="col-xl-12 col-md-12 d-flex" data-aos="zoom-in" data-aos-delay="200">
      <div class="member-img">
        <img src="assets/img/models/12.png" class="img-fluid" alt="">
      </div>
    </div>

    <div class="d-flex align-items-center mt-4">
      <p>Save more money by booking high class profile girls in our escorts service</p>
    </div>
    <p>Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.</p>

    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <img class="card-img-top" src="assets/img/models/13.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">College Escorts</h5>
              <p class="card-text">1 hour - ₹9599 - ₹8000</p>
              <p class="card-text">2 hour - ₹10599 - ₹8999</p>
              <p class="card-text">6 hour - ₹17000 - ₹13000</p>
              <p class="card-text">Dinner Date - ₹7999</p>
              <p class="card-text">Full Night/Day - ₹26000</p>
              <a href="/contact" class="btn btn-info">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <img class="card-img-top" src="assets/img/models/14.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">College Escorts</h5>
              <p class="card-text">1 hour - ₹9599 - ₹8000</p>
              <p class="card-text">2 hour - ₹10599 - ₹8999</p>
              <p class="card-text">6 hour - ₹17000 - ₹13000</p>
              <p class="card-text">Dinner Date - ₹7999</p>
              <p class="card-text">Full Night/Day - ₹26000</p>
              <a href="/contact" class="btn btn-info">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <img class="card-img-top" src="assets/img/models/15.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Russian Escorts</h5>
              <p class="card-text">1 hour - ₹9599 - ₹8000</p>
              <p class="card-text">2 hour - ₹10599 - ₹8999</p>
              <p class="card-text">6 hour - ₹17000 - ₹13000</p>
              <p class="card-text">Dinner Date - ₹7999</p>
              <p class="card-text">Full Night/Day - ₹26000</p>
              <a href="/contact" class="btn btn-info">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <img class="card-img-top" src="assets/img/models/6.jpeg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Housewife Escorts</h5>
              <p class="card-text">1 hour - ₹9599 - ₹8000</p>
              <p class="card-text">2 hour - ₹10599 - ₹8999</p>
              <p class="card-text">6 hour - ₹17000 - ₹13000</p>
              <p class="card-text">Dinner Date - ₹7999</p>
              <p class="card-text">Full Night/Day - ₹26000</p>
              <a href="/contact" class="btn btn-info">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content px-xl-5">
          <h3>Have You Any <strong>Questions</strong></h3>
        </div>

        <div class="accordion accordion-flush px-xl-5" id="faqlist">

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                <i class="bi bi-question-circle question-icon"></i>
                How do I book a model?
              </button>
            </h3>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                To book a model in our services, you can contact us or fill the contact form we will reach you.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                <i class="bi bi-question-circle question-icon"></i>
                How much does it cost to hire an escort?
              </button>
            </h3>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Rates vary widely depending on factors like location, duration of the booking, and the services offered. It's common for rates to be higher in major cities.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                <i class="bi bi-question-circle question-icon"></i>
                What services do escorts provide?
              </button>
            </h3>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Escorts offer companionship, which can include conversation, accompanying clients to events, and sometimes intimate services. Specific services should be discussed and agreed upon beforehand.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                <i class="bi bi-question-circle question-icon"></i>
                Can escorts travel with clients?
              </button>
            </h3>
            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                <i class="bi bi-question-circle question-icon"></i>
                Some escorts offer travel companionship for extended trips. Discuss travel arrangements, costs, and expectations thoroughly before booking.
              </div>
            </div>
          </div><!-- # Faq item-->

        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
    </div>

  </div>
</section><!-- End F.A.Q Section -->

<section id="contact" class="contact">
  <div class="container">

    <div class="row gy-5 gx-lg-5">

      <div class="col-lg-12 sm-12 md-12">

        <div class="info bg-warning" id="info">
          <h3>Call now for 24/7 Escorts Booking</h3>
          <p class="text-dark">Send us a mail or pick up the phone – we are always available. We're available 24 hours a day.</p>

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p><a href="mailto:contact@escortshub.com">contact@escortshub.com</a></p>
            </div>
          </div>

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p><a href="tel:+91 9876543210">IN: +91 9876543210</a></p>
            </div>
          </div>

          <div class="info-item">
            <a href="https://api.whatsapp.com/send?phone=9131013768">
              <div class="d-flex">
                <div>
                  <i class="bi bi-whatsapp flex-shrink-0"></i>
                </div>
                <div>
                  <h4>Whatsapp:</h4>
                  <p>Send Message</p>
                </div>
              </div>
            </a>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>

<!-- 
<div class="card p-3">
  <div class="card-body">
    <h5 class="card-title">Categories</h5>
    <hr>
    <ul>
      <li>Category A</li>
      <li>Category B</li>
      <li>Category C</li>
      <li>Category D</li>
      <li>Category E</li>
      <li>Category F</li>
    </ul>
  </div>
</div> -->

@stop