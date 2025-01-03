@extends('frontend.layout')
@section('main-content')
    <section id="billboard" class="hero-section position-relative padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-white">Contact</h1>
                        <div class="breadcrumbs text-white">
                            <span class="item">
                                <a href="index.html">Home &gt;</a>
                            </span>
                            <span class="item">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <div class="contact-us padding-large">
        <div class="container">
            <div class="row">
                <div class="contact-info col-lg-6 pb-3">
                    <h2 class="display-7 text-uppercase text-white">Contact info</h2>
                    <div class="page-content d-flex flex-wrap">
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box text-white pe-4 mb-5">
                                <h3 class="card-title text-uppercase text-decoration-underline">Office</h3>
                                <div class="contact-address pt-3">
                                    <p>Keputih, Surabaya, Indonesia</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 321</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 654</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">cs@AITronics.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box">
                                <h3 class="card-title text-uppercase text-decoration-underline text-white">Management
                                </h3>
                                <div class="contact-address pt-3">
                                    <p>Keputih, Surabaya, Indonesia</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 321</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 654</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">management@AITronics.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inquiry-item col-lg-6">
                    <h2 class="display-7 text-uppercase text-white">Any questions?</h2>
                    <p>Use the form below to get in touch with us.</p>
                    <form id="form" class="form-group flex-wrap">
                        <div class="form-input col-lg-12 d-flex mb-3">
                            <input type="text" name="email" placeholder="Write Your Name Here"
                                class="form-control ps-3 me-3 mb-3">
                            <input type="text" name="email" placeholder="Write Your Email Here"
                                class="form-control ps-3 mb-3">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="email" placeholder="Phone Number" class="form-control ps-3">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="email" placeholder="Write Your Subject Here"
                                class="form-control ps-3">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea placeholder="Write Your Message Here" class="form-control ps-3" style="height:150px;"></textarea>
                        </div>
                    </form>
                    <button class="btn btn-light btn-medium text-uppercase btn-rounded-none">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
