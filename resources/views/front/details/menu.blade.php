@extends('front.master')
@section('title')
    Menu detail
@endsection

@section('body')
    <section class="py-5"></section>
    <section class="py-5"></section>
    <section class="py-5"></section>
<section class="py-5">
    <div class="container">
        <div class="row">
                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <h4 class="text-capitalize">Menu: {{$menu->title}}</h4>
                        <p>{!! $menu->description !!}</p>
                        <p>Price: {{$menu->price}}</p>
                    </div>
                    <div class="menu-ingredients">

                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
