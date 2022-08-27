@extends('front.master')
@section('title')
    Special detail
@endsection
@section('body')
    <section class="py-5"></section>
    <section class="py-5"></section>
    <section class="py-5"></section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>{{$special->title}}</h3>
                                    <p class="fst-italic">{{$special->short_description}}</p>
                                    <p>{!! $special->long_description !!}</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset($special->image)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
