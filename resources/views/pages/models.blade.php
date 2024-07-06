@extends('layouts.user_layout')

@section('content')

<section id="portfolio" class="portfolio" data-aos="fade-up">

    <div class="container">
        <div>
            <h1>100% Geniune model girls for campanions near your City</h1>
            <p>Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates. Reserve your companion today and indulge in a memorable experience that doesn't break the bank.
                Unlock exceptional savings by booking our high-class profile girls. Experience luxury without the premium price tag. Discover elegance and sophistication at affordable rates.</p>
        </div>

        @foreach ($goaModels as $model)
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
                    <p>{{ $model->city }} - {{ $model->area }}</p>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</section>

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
@stop