@extends('layouts.user_layout')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-header">
      <h2>Contact Us</h2>
      <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
    </div>

  </div>
  <div class="col-xl-12 col-md-12 d-flex" data-aos="zoom-in" data-aos-delay="200">
    <div class="member-img">
      <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
    </div>
  </div>

  <div class="d-flex align-items-center mt-4">
    <h4>Save more money by booking high class profile girls in our escorts service</h4>
  </div>
  <p>Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.</p>


  <div class="d-flex align-items-center mt-4">
    <h4>Save more money by booking high class profile girls in our escorts service</h4>
  </div>
  <p>Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
    Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
    Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
  </p>

  <div class="d-flex align-items-center mt-4">
    <h4>Save more money by booking high class profile girls in our escorts service</h4>
  </div>
  <p>Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
    Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
    Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
  </p>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img class="card-img-top" src="assets/img/testimonials/testimonials-2.jpg" alt="Card image cap">
      </div>
    </div>
  </div>


  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
  </div><!-- End Google Maps -->

  <div class="container">

    <div class="row gy-5 gx-lg-5">

      <div class="col-lg-4">

        <div class="info" id="info">
          <h3>Contact us for booking</h3>
          <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>


          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>contact@Lakshmikant.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p>IN: +91 7974207804</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      <div class="col-lg-8">
        <form action="{{ route('enquiry') }}" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="age" class="form-control" id="age" placeholder="Your Age" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="model_preference" class="form-control" id="model_preference" placeholder="Preference Model">
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section>
<!-- End Contact Section -->
@stop