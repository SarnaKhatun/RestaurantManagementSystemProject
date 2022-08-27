@extends('front.master')
@section('title')
    Menu All
@endsection
@section('body')

    <section class="py-5"></section>
    <!-- ======= Menu Section ======= -->
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
@endsection
