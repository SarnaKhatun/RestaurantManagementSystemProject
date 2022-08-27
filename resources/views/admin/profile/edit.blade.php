@extends('admin.master')
@section('title')
    Edit Profile
@endsection
@section('body')
    <section class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">edit profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{Auth()->user()->name}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" value="{{Auth()->user()->email}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image">
                                        @if(isset(Auth()->user()->image))
                                            <img src="{{asset(Auth()->user()->image)}}" alt="" style="height: 100px; width: 100px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" class="form-control" value="{{Auth()->user()->userDetail->phone}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">About</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{Auth()->user()->userDetail->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Profile">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
