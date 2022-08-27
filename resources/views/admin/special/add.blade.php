@extends('admin.master')
@section('title')
    Add Special
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">add special</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('specials.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" disabled><--select a option--></option>
                                            @foreach($specialCategories as $specialCategory)
                                                <option value="{{$specialCategory->id}}">{{$specialCategory->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4">Title</label>
                                        <div class="col-md-8">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4">Short Description</label>
                                        <div class="col-md-8">
                                            <textarea name="short_description" id="" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4">Long Description</label>
                                        <div class="col-md-8">
                                            <textarea name="long_description" id="special1" cols="30" rows="6" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4">Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="image" >
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4">Status</label>
                                        <div class="col-md-8">
                                            <label for=""><input type="radio" name="status" value="1" checked>Available</label>
                                            <label for=""><input type="radio" name="status" value="0">Unavailable</label>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="" class="col-md-4"></label>
                                        <div class="col-md-8">
                                            <input type="submit" class="btn btn-success" value="Add Special">
                                        </div>
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
