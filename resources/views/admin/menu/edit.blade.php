@extends('admin.master')
@section('title')
    Edit Menu
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">edit menu</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('menus.update', $menu->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Menu Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" disabled><--select a option--></option>
                                            @foreach($menuCategories as $menuCategory)
                                                <option value="{{$menuCategory->id}}" {{$menuCategory->id == $menu->category_id ? 'selected' : ''}}>{{$menuCategory->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{$menu->title}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="menu1" cols="30" rows="5" class="form-control">{{$menu->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Price</label>
                                    <div class="col-md-8">
                                        <input type="text" name="price" class="form-control" value="{{$menu->price}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1" {{$menu->status == 1 ? 'checked' : ''}}>Published</label>
                                        <label for=""><input type="radio" name="status" value="0" {{$menu->status == 0 ? 'checked' : ''}}>Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Menu">
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
