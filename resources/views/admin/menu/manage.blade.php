@extends('admin.master')
@section('title')
    Manage Menu
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">manage menu</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered" id="menus">
                                <thead>
                                <tr>
                                    <th>sl no:</th>
                                    <th>Menu Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $menu)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$menu->category->category_name}}</td>
                                        <td>{{$menu->title}}</td>
                                        <td>{!! $menu->description !!}</td>
                                        <td>{{$menu->price}}</td>
                                        <td>{{$menu->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('menus.change-status', ['id' => $menu->id])}}" @if($menu->status == 1 ) class="btn btn-success" @endif @if($menu->status == 0 ) class="btn btn-warning" @endif>
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('menus.edit', $menu->id)}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>edit</a>
                                            <form action="{{route('menus.destroy', $menu->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???????')">
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
