@extends('admin.master')
@section('title')
    Manage Special
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage special</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive" id="specials">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($specials as $special)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$special->category->category_name}}</td>
                                        <td>{{$special->title}}</td>
                                        <td>{{$special->short_description}}</td>
                                        <td>{!! $special->long_description !!}</td>
                                        <td>
                                            <img src="{{asset($special->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{$special->status == 1 ? 'Available' : 'Unavailable'}}</td>
                                        <td>
                                            <a href="{{route('specials.change-status',['id' => $special->id] )}}" @if($special->status == 1) class="btn btn-success" @endif @if($special->status == 0) class="btn btn-warning" @endif >
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('specials.edit', $special->id)}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>edit</a>
                                            <form action="{{route('specials.destroy', $special->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete this?????')">
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
