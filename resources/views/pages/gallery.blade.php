@extends('layouts.user_layout')

@section('content')


<!-- ======= Gallery Section ======= -->
<section id="portfolio" class="portfolio" data-aos="fade-up">

  <div class="container">

    <div class="section-header">
      <h2>See our most recommended models Gallery</h2>
      <p>Explore our gallery to find the embodiment of passion and sophistication, each companion eager to fulfill your desires.
        Each profile in our gallery is a testament to allure and charm, promising an exceptional experience tailored to your preferences.</p>
    </div>

  </div>

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

      <ul class="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
        @foreach ($categories as $category)
        <li data-filter=".filter-{{ $category->id }}">{{ $category->categoryName }}</li>
        @endforeach
      </ul><!-- End Portfolio Filters -->

      <div class="row g-0 portfolio-container">
        @foreach($models as $model)
        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-{{ $model->categoryId }}">
          <img src="{{ asset('admin/img/models/' . $model->image) }}" class="img-fluid" alt="{{ $model->modelName }}">
          <div class="portfolio-info">
            <h4>{{ $model->modelName }}-{{ $model->city }}</h4>
            <a href="{{ asset('admin/img/models/' . $model->image) }}" title="{{ $model->modelName }}" data-gallery="portfolio-gallery" class="glightbox preview-link"></a>
            <a href="/contact" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i>Book Now</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</section><!-- End Gallery Section -->

<!-- ======= top model Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Top Models</h2>
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
            <h4>{{ $topModel->modelName }} - {{ $topModel->city }}</h4>
            <span>Our Top Model <a href="/contact#contactForm" type="button" class="btn btn-info btn-sm">Book now</a></span>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>

<section id="contact" class="contact">
  <div class="container">

    <div class="row gy-5 gx-lg-5">

      <div class="col-lg-12 sm-12 md-12">

        <div class="info" id="info">
          <h3>Contact us for booking</h3>
          <p>Send us a mail or pick up the phone – we are always available. We're available 24 hours a day.</p>
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

        </div>

      </div>
    </div>

  </div>
</section>

@endsection