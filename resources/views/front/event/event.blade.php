@extends('front.master')
@section('title')
    Menu All
@endsection
@section('body')

    <section class="py-5"></section>
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
@endsection
