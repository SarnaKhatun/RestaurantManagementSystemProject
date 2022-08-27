@extends('front.master')
@section('title')
    Menu All
@endsection
@section('body')

    <section class="py-5"></section>
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
                            <a href="{{route('show-event')}}" class="gallery-lightbox">
                                <img src="{{asset($event->image)}}" alt="" class="img-fluid" style="height: 250px; width: 250px;">
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Gallery Section -->
@endsection
