@extends('layouts.user_layout')

@section('content')


<!-- ======= Gallery Section ======= -->
<section id="portfolio" class="portfolio" data-aos="fade-up">

  <div class="container">
    <div class="row">

      <div class="col-12 p-0">
        <video autoplay controls loop muted class="w-100 h-auto d-block">
          <source src="assets/img/models/video-cut.mp4" type="video/mp4">
        </video>
      </div>


      <div>
        <h2>Save more money by booking <mark>high class profile girls in our escorts service</mark></h2>
        <p>Each of our models is carefully chosen for her elegance, beauty, and ability to engage with clients on a personal level. Our escorts are professionals who prioritize your satisfaction and aim to create a fulfilling, enjoyable experience. We pride ourselves on offering diverse, talented women who are skilled in a variety of personal preferences, ensuring a tailored experience for every client.</p>
      </div>

      <div>
        <h2><mark>100% Geniune model girls for campanions and enjoyment the special nights</mark></h2>
        <p>We offer a wide range of services designed to provide both companionship and excitement. Our escorts specialize in various types of experiences, from elegant dinner dates to luxurious weekend getaways. Choose from our array of packages or customize your experience to meet your specific needs.</p>
      </div>

      <div>
        <h2><mark>*Looking for a connection that feels genuine and satisfying?*</mark></h2>
        <p>As someone who understands the emotional and
          physical needs of my clients, I strive to provide an experience that’s as intimate and fulfilling as being
          with a girlfriend. Whether you're seeking a relaxed, sensual experience or a passionate encounter, I’m here to
          make sure you leave feeling satisfied, confident, and appreciated.
          Our Call girls are not just here to fulfill physical desires; I believe in creating a space where you can
          relax, enjoy, and feel truly cared for. Just like a girlfriend would, I listen to your needs, make sure we’re
          both comfortable, and create an experience that leaves you feeling like you’ve truly connected.

          Our goal is to ensure that your time with me is more than just a transaction—it’s a memorable, pleasurable
          experience where you feel valued and respected. Let’s make your time together something special."</p>
      </div>
      <div>
        <h2><mark>*Why Choose Our Call Girl Services?*</mark></h2>
        <p>
          When it comes to selecting a call girl, you deserve the best. Here's why we stand out among the rest:

          We offer a high level of professionalism, ensuring that our time together is respectful,
          enjoyable, and memorable. We take pride in delivering a service that meets the highest standards.

          Your privacy matters. We ensure that every interaction remains discreet and
          confidential, so you can enjoy your time with me without any worries.

          Every client is unique. We take the time to understand your desires, providing
          services that are tailored specifically to your preferences. Whether you’re looking for companionship or
          something more intimate, We deliver the experience you’re seeking.

          Our goal is to make sure that your experience is not just good, but
          exceptional. From the moment we meet, we’ll ensure that you feel relaxed, comfortable, and completely
          satisfied."
        </p>
      </div>

      <div class="section-header">
        <h2>See our most recommended models</h2>
        <p>Explore our gallery to find the embodiment of passion and sophistication, each companion eager to fulfill
          your desires.
          Each profile in our gallery is a testament to allure and charm, promising an exceptional experience tailored
          to your preferences.</p>
      </div>

      <div class="row">
        @foreach ($models as $model)
        <div class="col-sm-12 col-lg-4 card border-3 border-dark mt-2">
          <img height="350" width="350" src="{{ asset('admin/img/models/' . $model->image) }}" class="card-img-top"
            alt="{{ $model->modelName }}">
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
              <p>{{ $model->city }} - {{ $model->area }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>

</section>

<!-- ======= top model Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h1>Our Top Models</h1>
      <p>Browse through our gallery and elevate your experience with companions who redefine luxury and intimacy.</p>
    </div>

    <div class="row gy-5">

      @foreach ($topModels as $topModel)

      <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
        <div class="team-member">
          <div class="member-img">
            <img height="350" width="350" src="{{ asset('admin/img/models/' . $topModel->image) }}" class="img-fluid"
              alt="{{ $topModel->modelName }}">
          </div>
          <div class="member-info">
            <h4>{{ $topModel->modelName }} - {{ $topModel->city }}</h4>
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
      <h2>Our Services</h2>
      <p>Our escorts are not only beautiful but also embody elegance and grace. Whether attending a high-profile event
        or a private date, our companions are poised, polished, and professional.</p>
    </div>

    <div class="row gy-5">

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
            <img height="350" width="350" src="assets/img/models/6.jpeg" class="img-fluid" alt="Service Image">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Call girl services</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.
            </p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item">
          <div class="img">
            <img height="350" width="350" src="assets/img/models/5.jpeg" class="img-fluid" alt="Service Image">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Escorts Service</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut
              nesciunt dolorem.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item">
          <div class="img">
            <img height="350" width="350" src="assets/img/models/1.jpeg" class="img-fluid" alt="Service Image">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Providing models</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
              earum corrupti.</p>
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
        <img height="350" width="350" src="assets/img/models/12.png" class="img-fluid" alt="Service Image">
      </div>
    </div>

    <div class="d-flex align-items-center mt-4">
      <p>We understand that every client has different preferences and requirements. To ensure that you get the best
        value for your experience, our pricing is both competitive and transparent. Here’s an overview of what you can
        expect when booking with us:
        <br>
        <mark>Hourly Rates </mark><br>
        Standard Session (1 Hour): 5000-8000Rs.<br>
        Premium Session (1 Hour): 10000-15000Rs.<br>
        (For those who desire a more luxurious, personalized experience with additional services.)<br>
        <mark>Extended Sessions<br></mark>
        Half Day (4 Hours): 15000-25000Rs.<br>
        Full Day (8 Hours): 20000-40000RS.<br>
        A perfect option for those who want to spend a longer time with a companion for a business event, dinner, or
        even an overnight stay. <br>
        <mark>Overnight Rates <br></mark>
        Overnight (12 Hours): 25000-35000RS. <br>
        For clients who want an intimate and comfortable experience with a companion for an extended period of time, our
        overnight rates ensure that you have everything you need for a memorable experience. <br>
        Exclusive VIP Packages <br>
        <mark>Custom VIP Packages :</mark>
        These packages are tailored to suit your specific desires. Whether you need a companion for a special event, a
        luxury getaway, or any personalized experience, we can customize a package that perfectly matches your needs.
        <br><mark>Premium Add-Ons</mark><br>
        <strong>Luxury Transportation</strong><br>
        <strong>Exclusive Dinner Arrangements</strong><br>
        <strong>Special Event Assistance</strong><br>
        Enhance your experience with our premium add-ons, ensuring every moment is as luxurious and unforgettable as
        possible.
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <img height="350" width="350" class="card-img-top" src="assets/img/models/13.png" alt="Card image cap">
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
            <img height="350" width="350" class="card-img-top" src="assets/img/models/14.png" alt="Card image cap">
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
            <img height="350" width="350" class="card-img-top" src="assets/img/models/15.png" alt="Card image cap">
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
            <img height="350" width="350" class="card-img-top" src="assets/img/models/6.jpeg" alt="Card image cap">
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-1">
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-2">
                <i class="bi bi-question-circle question-icon"></i>
                How much does it cost to hire an escort?
              </button>
            </h3>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Rates vary widely depending on factors like location, duration of the booking, and the services offered.
                It's common for rates to be higher in major cities.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-3">
                <i class="bi bi-question-circle question-icon"></i>
                What services do escorts provide?
              </button>
            </h3>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Escorts offer companionship, which can include conversation, accompanying clients to events, and
                sometimes intimate services. Specific services should be discussed and agreed upon beforehand.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-4">
                <i class="bi bi-question-circle question-icon"></i>
                Can escorts travel with clients?
              </button>
            </h3>
            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                <i class="bi bi-question-circle question-icon"></i>
                Some escorts offer travel companionship for extended trips. Discuss travel arrangements, costs, and
                expectations thoroughly before booking.
              </div>
            </div>
          </div><!-- # Faq item-->

        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
        style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
    </div>

  </div>
</section><!-- End F.A.Q Section -->

<section id="contact" class="contact">
  <div class="container">

    <div class="row gy-5 gx-lg-5">

      <div class="col-lg-12 sm-12 md-12">

        <div class="info" id="info">
          <h3>Call now for 24/7 Escorts Booking</h3>
          <p class="text-dark">Send us a mail or pick up the phone – we are always available. We're available 24 hours a
            day.</p>

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

@stop