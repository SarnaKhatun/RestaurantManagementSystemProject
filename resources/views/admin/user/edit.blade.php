@extends('admin.master')
@section('title')
    Edit User
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">edit user</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Role</label>
                                    <div class="col-md-8">
                                        <select name="access_label" class="form-control" id="">
                                            <option value="3" {{$user->access_label == 3 ? 'selected' : ''}}>Admin</option>
                                            <option value="2" {{$user->access_label == 2 ? 'selected' : ''}}>Testimony</option>
                                            <option value="1" {{$user->access_label == 1 ? 'selected' : ''}}>Chefs</option>
                                            <option value="0" {{$user->access_label == 0 ? 'selected' : ''}}>Customer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image">
                                        @if(isset($user->image))
                                            <img src="{{asset($user->image)}}" alt="" style="height: 100px; width: 100px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update User">
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
