@extends('front.master')
@section('title')
    Menu All
@endsection
@section('body')

    <section class="py-5"></section>
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

@endsection
