@extends('layout')
@section('content')
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Get in touch with us</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="mt-md-5 mt-4">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>Burger Bun, 208 Trainer Avenue street, Corner
                                Market, NY - 62617. </p>
                            <p> <a href="mailto:info@example.com"><span
                                        class="fa fa-envelope"></span>info@example.com</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+12 5348943649"> +12 534894364</a></p>

                            <h5 class="mt-4 mb-3">Opening Hours</h5>
                            <div class="hours">
                                <p><span class="fa fa-clock-o"></span>10:00am - 09:00pm</p>
                                <p>Sunday Closed</p>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- //contacts -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53963.23055443112!2d-9.230025695346852!3d32.292991451658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi%2C%20Morocco!5e0!3m2!1sen!2sin!4v1691394689423!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection()

