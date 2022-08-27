@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="1800" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->

                    @foreach($sliders as $slider)
                    <div class="carousel-item active" style="background-image: url({{asset($slider->image)}});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">{{$slider->title}}</h2>
                                <p class="animate__animated animate__fadeInUp">{{$slider->description}}</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{asset('/')}}front-assets/img/about.jpg");'>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Whu Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <h2>Why choose <span>Our Restaurant</span></h2>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box">
                            <span>01</span>
                            <h4>Lorem Ipsum</h4>
                            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>02</span>
                            <h4>Repellat Nihil</h4>
                            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <span>03</span>
                            <h4> Ad ad velit qui</h4>
                            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Whu Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container">

                <div class="section-title">
                    <h2>Check our tasty <span>Menu</span></h2>
                </div>

                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-center">
                        <ul id="menu-flters">
                            @foreach($menus as $menu)
                            <li><a href="{{route('menu.details', ['id' => $menu->id])}}" >{{$menu->category->category_name}}</a></li>
                            @endforeach
{{--                            <li data-filter=".filter-starters">Starters</li>--}}
{{--                            <li data-filter=".filter-salads">Salads</li>--}}
{{--                            <li data-filter=".filter-specialty">Specialty</li>--}}
                        </ul>
                    </div>
                </div>





{{--                    <div class="col-lg-6 menu-item filter-starters">--}}
{{--                        <div class="menu-content">--}}
{{--                            <a href="#">Crab Cake</a><span>$7.95</span>--}}
{{--                        </div>--}}
{{--                        <div class="menu-ingredients">--}}
{{--                            A delicate crab cake served on a toasted roll with lettuce and tartar sauce--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 menu-item filter-salads">--}}
{{--                        <div class="menu-content">--}}
{{--                            <a href="#">Caesar Selections</a><span>$8.95</span>--}}
{{--                        </div>--}}
{{--                        <div class="menu-ingredients">--}}
{{--                            Lorem, deren, trataro, filede, nerada--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 menu-item filter-specialty">--}}
{{--                        <div class="menu-content">--}}
{{--                            <a href="#">Tuscan Grilled</a><span>$9.95</span>--}}
{{--                        </div>--}}
{{--                        <div class="menu-ingredients">--}}
{{--                            Grilled chicken with provolone, artichoke hearts, and roasted red pesto--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 menu-item filter-starters">--}}
{{--                        <div class="menu-content">--}}
{{--                            <a href="#">Mozzarella Stick</a><span>$4.95</span>--}}
{{--                        </div>--}}
{{--                        <div class="menu-ingredients">--}}
{{--                            Lorem, deren, trataro, filede, nerada--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 menu-item filter-salads">--}}
{{--                        <div class="menu-content">--}}
{{--                            <a href="#">Greek Salad</a><span>$9.95</span>--}}
{{--                        </div>--}}
{{--                        <div class="menu-ingredients">--}}
{{--                            Fresh spinach, crisp romaine, tomatoes, and Greek olives--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 menu-item filter-salads">--}}
{{--                        <div class="menu-content">--}}
{{--                            <a href="#">Spinach Salad</a><span>$9.95</span>--}}
{{--                        </div>--}}
{{--                        <div class="menu-ingredients">--}}
{{--                            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6 menu-item filter-specialty">--}}
{{--                        <div class="menu-content">--}}
{{--                            <a href="#">Lobster Roll</a><span>$12.95</span>--}}
{{--                        </div>--}}
{{--                        <div class="menu-ingredients">--}}
{{--                            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll--}}
{{--                        </div>--}}
{{--                    </div>--}}



            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container">

                <div class="section-title">
                    <h2>Check our <span>Specials</span></h2>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav flex-column">
                            @foreach($specials as $special)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('special.details', ['id' => $special->id])}}">{{$special->category->category_name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>ierterjgrgndfgr</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{asset('/')}}front-assets/img/specials-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Specials Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container">

                <div class="section-title">
                    <h2>Organize Your <span>Events</span> in our Restaurant</h2>
                </div>

                <div class="events-slider swiper">
                    <div class="swiper-wrapper">
                        @foreach($events as $event)
                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{asset($event->image)}}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>{{$event->name}}</h3>
                                    <div class="price">
                                        <p><span>{{$event->price}}Tk.</span></p>
                                    </div>
                                    <p class="fst-italic">{{$event->description}}</p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container">

                <div class="section-title">
                    <h2>Book a <span>Table</span></h2>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <form action="{{route('book.add')}}" method="post" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="text-center"><button type="submit" {{$hasBooking == true ? 'disabled' : ''}}>Send Message</button></div>
                </form>

            </div>
        </section><!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Some photos from <span>Our Restaurant</span></h2>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <div class="row g-0">
                    @foreach($sliders as $slider)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="" class="gallery-lightbox">
                                    <img src="{{asset($slider->image)}}" alt="" class="img-fluid" style="height: 250px; width: 250px;">
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @foreach($specials as $special)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="{{route('special.details', ['id' => $special->id])}}" class="gallery-lightbox">
                                    <img src="{{asset($special->image)}}" alt="" class="img-fluid" style="height: 250px; width: 250px;">
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @foreach($events as $event)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="" class="gallery-lightbox">
                                    <img src="{{asset($event->image)}}" alt="" class="img-fluid" style="height: 250px; width: 250px;">
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
            <div class="container">

                <div class="section-title">
                    <h2>Our Proffesional <span>Chefs</span></h2>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <div class="row">
                    @foreach($users as $user)
                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="{{asset($user->image)}}" class="img-fluid" alt="" style="height: 300px; width: 300px;"></div>
                            <div class="member-info">
                                <h4>{{$user->name}}</h4>
                                <span>{{$user->access_label == 1 ? 'Chefs' : ''}}</span>
                                <p>{!! $user->userDetail->description !!}</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container position-relative">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach($usersT as $user)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset($user->image)}}" class="testimonial-img" alt="">
                                <h3>{{$user->name}}</h3>
                                <h4>{{$user->access_label == 2 ? 'Testimony' : ''}}</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{$user->userDetail->description}}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>Contact</span> Us</h2>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>
            </div>

            <div class="map">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street<br>New York, NY 535022</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-clock"></i>
                            <h4>Open Hours:</h4>
                            <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                        </div>
                    </div>
                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
