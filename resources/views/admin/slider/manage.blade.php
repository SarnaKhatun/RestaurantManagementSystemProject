@extends('admin.master')
@section('title')
    Manage Slider
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">manage slider</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered" id="slides">
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->description}}</td>
                                        <td>
                                            <img src="{{asset($slider->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{$slider->status == 1 ? 'Inactive' : 'Active'}}</td>
                                        <td>
                                            <a href="{{route('sliders.change-status', ['id' => $slider->id])}}" @if($slider->status == 0) class="btn btn-success" @endif @if($slider->status == 1) class="btn btn-warning" @endif >
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>edit</a>

                                            <form action="{{route('sliders.destroy', $slider->id)}}" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???')" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
