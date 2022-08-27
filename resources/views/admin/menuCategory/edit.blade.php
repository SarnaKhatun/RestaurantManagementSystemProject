@extends('admin.master')
@section('title')
    Edit Menu Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">edit menu category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('menuCategories.update', $menuCategory->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" value="{{$menuCategory->category_name}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1" {{$menuCategory->status == 1 ? 'checked' : ''}}>Published</label>
                                        <label for=""><input type="radio" name="status" value="0" {{$menuCategory->status == 0 ? 'checked' : ''}}>Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Category">
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
