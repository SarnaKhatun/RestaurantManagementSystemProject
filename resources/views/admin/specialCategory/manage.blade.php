@extends('admin.master')
@section('title')
    Manage Special Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage category</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive" id="special2">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($specialCategories as $specialCategory)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$specialCategory->category_name}}</td>
                                        <td>{{$specialCategory->status == 1 ? 'Active' : 'Inactive'}}</td>
                                        <td>
                                            <a href="{{route('specialCategories.changeStatus', ['id' => $specialCategory->id])}}" @if($specialCategory->status == 1) class="btn btn-success" @endif @if($specialCategory->status == 0) class="btn btn-warning" @endif>
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('specialCategories.edit', $specialCategory->id)}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>edit</a>

                                            <form action="{{route('specialCategories.destroy', $specialCategory->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this?????')">
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
