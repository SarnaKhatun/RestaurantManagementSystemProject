@extends('front.master')
@section('title')
    Menu All
@endsection
@section('body')

    <section class="py-5"></section>
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
        </div>
    </section><!-- End Menu Section -->
@endsection
