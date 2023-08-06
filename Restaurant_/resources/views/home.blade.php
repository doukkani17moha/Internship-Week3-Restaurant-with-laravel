@extends('layout', ['title' => 'Home'])

@section('page-content')
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h3>MidwayCafe</h3>
                            <h4>THE BEST EXPERIENCE</h4>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">
                                    <h2>Make A Reservation</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('assets/images/slide-01.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('assets/images/slide-02.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ asset('assets/images/slide-03.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Midway Cafe is one of the best restaurant HTML templates with Bootstrap v4.5.2 CSS framework. You
                            can download and feel free to use this website template layout for your restaurant business. You
                            are allowed to use this template for commercial purposes. You are NOT allowed to redistribute
                            the template ZIP file on any template donwnload website. Please contact us for more information.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/images/about-thumb-01.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/about-thumb-02.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/about-thumb-03.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://www.youtube.com/embed/eMF9tfxigGw" target="_blank"> <i
                                    class="fa fa-play"></i></a>
                            <img src="{{ asset('assets/images/about-video-bg.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Midway Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><img src="{{ asset('assets/images/tab-icon-01.png') }}"
                                                        alt="">Breakfast</a></li>
                                            <li><a href='#tabs-2'><img src="{{ asset('assets/images/tab-icon-02.png') }}"
                                                        alt="">Lunch</a></a></li>
                                            <li><a href='#tabs-3'><img src="{{ asset('assets/images/tab-icon-03.png') }}"
                                                        alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align:center;" class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        @foreach ($breakfast as $item)
                                            @if ($item->id % 2 == 0)
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="left-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="{{ asset('assets/images/plats/' . $item->plat_img) }}"
                                                                        alt="">
                                                                    <h4>{{ $item->plat_name }}</h4>
                                                                    <p>{{ $item->plat_descr }}</p>
                                                                    <div class="price">
                                                                        <h6>${{ $item->plat_price }}</h6>
                                                                    </div>
                                                                    <span class="product_rating">
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <span
                                                                            class="rating_avg">({{ $item->rating }})</span>
                                                                    </span>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        @foreach ($breakfast as $item)
                                            @if ($item->id % 2 != 0)
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="right-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="{{ asset('assets/images/plats/' . $item->plat_img) }}"
                                                                        alt="">
                                                                    <h4>{{ $item->plat_name }}</h4>
                                                                    <p>{{ $item->plat_descr }}</p>
                                                                    <div class="price">
                                                                        <h6>${{ $item->plat_price }}</h6>
                                                                    </div>
                                                                    <span class="product_rating">
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <span
                                                                            class="rating_avg">({{ $item->rating }})</span>
                                                                    </span>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </article>

                                <article id='tabs-2'>
                                    <div class="row">
                                        @foreach ($lunch as $item)
                                            @if ($item->id % 2 == 0)
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="left-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="{{ asset('assets/images/plats/' . $item->plat_img) }}"
                                                                        alt="">
                                                                    <h4>{{ $item->plat_name }}</h4>
                                                                    <p>{{ $item->plat_descr }}</p>
                                                                    <div class="price">
                                                                        <h6>${{ $item->plat_price }}</h6>
                                                                    </div>
                                                                    <span class="product_rating">
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <span
                                                                            class="rating_avg">({{ $item->rating }})</span>
                                                                    </span>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        @foreach ($lunch as $item)
                                            @if ($item->id % 2 != 0)
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="right-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="{{ asset('assets/images/plats/' . $item->plat_img) }}"
                                                                        alt="">
                                                                    <h4>{{ $item->plat_name }}</h4>
                                                                    <p>{{ $item->plat_descr }}</p>
                                                                    <div class="price">
                                                                        <h6>${{ $item->plat_price }}</h6>
                                                                    </div>
                                                                    <span class="product_rating">
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <span
                                                                            class="rating_avg">({{ $item->rating }})</span>
                                                                    </span>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        @foreach ($dinner as $item)
                                            @if ($item->id % 2 == 0)
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="left-list">

                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="{{ asset('assets/images/plats/' . $item->plat_img) }}"
                                                                        alt="">
                                                                    <h4>{{ $item->plat_name }}</h4>
                                                                    <p>{{ $item->plat_descr }}</p>
                                                                    <div class="price">
                                                                        <h6>${{ $item->plat_price }}</h6>
                                                                    </div>
                                                                    <span class="product_rating">
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <span
                                                                            class="rating_avg">({{ $item->rating }})</span>
                                                                    </span>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        @foreach ($dinner as $item)
                                            @if ($item->id % 2 != 0)
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="right-list">
                                                            <div class="col-lg-12">
                                                                <div class="tab-item">
                                                                    <img src="{{ asset('assets/images/plats/' . $item->plat_img) }}"
                                                                        alt="">
                                                                    <h4>{{ $item->plat_name }}</h4>
                                                                    <p>{{ $item->plat_descr }}</p>
                                                                    <div class="price">
                                                                        <h6>${{ $item->plat_price }}</h6>
                                                                    </div>
                                                                    <span class="product_rating">
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <i class="fa fa-star "></i>
                                                                        <span
                                                                            class="rating_avg">({{ $item->rating }})</span>
                                                                    </span>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </article>
                            </section>
                            <br>
                            <a href="/menu"><input style="color:#fff; background-color:#FB5849; font-size:20px;"
                                    class="btn" type="submit" value="Browse All"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($menucake as $plat)
                        <div class="item">
                            <?php
                            $img = $plat->plat_img;
                            ?>
                            <div class='card'
                                style="background-image: url({{ asset('assets/images/plats/' . $img) }})">
                                <div class="price">
                                    <h6>${{ $plat->plat_price }}</h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'>{{ $plat->plat_name }}</h1>
                                    <p class='description'>{{ $plat->plat_descr }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section">
                                            <span class="product_rating">
                                                <i class="fa fa-star "></i>
                                                <i class="fa fa-star "></i>
                                                <i class="fa fa-star "></i>
                                                <i class="fa fa-star "></i>
                                                <span class="rating_avg">({{ $plat->rating }})</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of Fast Food </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($menufast as $plat)
                        <div class="item">
                            <?php
                            $img = $plat->plat_img;
                            ?>
                            <div class='card'
                                style="background-image: url({{ asset('assets/images/plats/' . $img) }})">
                                <div class="price">
                                    <h6>${{ $plat->plat_price }}</h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'>{{ $plat->plat_name }}</h1>
                                    <p class='description'>{{ $plat->plat_descr }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section">
                                            <span class="product_rating">
                                                <i class="fa fa-star "></i>
                                                <i class="fa fa-star "></i>
                                                <i class="fa fa-star "></i>
                                                <i class="fa fa-star "></i>
                                                <span class="rating_avg">({{ $plat->rating }})</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($chefs as $chef)
                    <div class="col-lg-4">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
                                <ul class="social-icons">
                                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <img src="{{ asset('assets/images/chefs/' . $chef->chef_img) }}" alt="Chef #1">
                            </div>
                            <div class="down-content">
                                <h4>{{ $chef->chef_name }}</h4>
                                <span>{{ $chef->chef_job }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Members of Midway Dine are always active to response your call.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">01824072334</a>
                                        <br><a href="#">01554649446</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="mailto:mdk8@gmail.com">mdk8@gmail.com</a><br>
                                        <a href="mailto:omirb@gmail.com">omirb@gmail.com</a><br>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('reserve') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Table Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="number-guests" name="no_guest" id="number-guests">
                                            <option value="number-guests">Number Of Guests</option>
                                            <option name="1" id="1">1</option>
                                            <option name="2" id="2">2</option>
                                            <option name="3" id="3">3</option>
                                            <option name="4" id="4">4</option>
                                            <option name="5" id="5">5</option>
                                            <option name="6" id="6">6</option>
                                            <option name="7" id="7">7</option>
                                            <option name="8" id="8">8</option>
                                            <option name="9" id="9">9</option>
                                            <option name="10" id="10">10</option>
                                            <option name="11" id="11">11</option>
                                            <option name="12" id="12">12</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <div id="filterDate2">
                                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                                            <input name="date" id="date" type="text" class="form-control"
                                                placeholder="dd/mm/yyyy">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input name="time" id="time" type="time" class="form-control"
                                        placeholder="hh:mm">
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Make A
                                            Reservation</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                        <div id="reservation-success-modal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p id="modal-message">Your reservation has been successfully made!</p>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const modal = document.getElementById("reservation-success-modal");
                                const modalMessage = document.getElementById("modal-message");
                                const closeButton = modal.querySelector(".close");

                                const reservationSuccess = @json(session('reservationSuccess')); // Get the flag value

                                if (reservationSuccess) {
                                    const successMessage = "Your reservation has been successfully made!";
                                    modalMessage.textContent = successMessage; // Update modal content
                                    modal.style.display = "block"; // Show the modal

                                    // Reset the session variable after displaying the pop-up
                                    @php session(['reservationSuccess' => false]); @endphp
                                }

                                document.getElementById("contact").addEventListener("submit", async function(event) {
                                    event.preventDefault();
                                    const formData = new FormData(this);
                                    try {
                                        const response = await fetch(this.action, {
                                            method: 'POST',
                                            body: formData
                                        });

                                        if (response.ok) {
                                            // Update the flag value in session
                                            @php session(['reservationSuccess' => true]); @endphp

                                            // Manually trigger the pop-up display
                                            const successMessage = "Your reservation has been successfully made!";
                                            modalMessage.textContent = successMessage; // Update modal content
                                            modal.style.display = "block"; // Show the modal

                                            // Reset the session variable after displaying the pop-up
                                            @php session(['reservationSuccess' => false]); @endphp
                                        } else {
                                            // Handle error if needed
                                        }
                                    } catch (error) {
                                        console.error(error);
                                    }
                                });
                                closeButton.addEventListener("click", function() {
                                    modal.style.display = "none"; // Close the modal
                                    location.reload(); // Refresh the page
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
@endsection
