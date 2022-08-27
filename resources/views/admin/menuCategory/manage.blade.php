@extends('admin.master')
@section('title')
    Manage Menu Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">manage category</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered" id="menuCategories">
                                <thead>
                                <tr>
                                    <th>sl no:</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menuCategories as $menuCategory)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$menuCategory->category_name}}</td>
                                        <td>{{$menuCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('menuCategories.change-status', ['id' => $menuCategory->id])}}" @if($menuCategory->status == 1 ) class="btn btn-success" @endif @if($menuCategory->status == 0 ) class="btn btn-warning" @endif>
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('menuCategories.edit', $menuCategory->id)}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>edit</a>
                                            <form action="{{route('menuCategories.destroy', $menuCategory->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???????')">
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
