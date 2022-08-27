@extends('admin.master')
@section('title')
    Manage Event
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage event</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered" id="events">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Event Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$event->name}}</td>
                                        <td>{{$event->price}}</td>
                                        <td>{!! $event->description !!}</td>
                                        <td>
                                            <img src="{{asset($event->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{$event->status == 1 ? 'Active' : 'Inactive'}}</td>
                                        <td>
                                            <a href="{{route('status.event', ['id' => $event->id])}}" @if($event->status == 1) class="btn btn-success" @endif @if($event->status == 0) class="btn btn-warning" @endif  >
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('edit.event', ['id' => $event->id])}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>edit</a>
                                            <a href="{{route('delete.event', ['id' => $event->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this???')">
                                                <i class="fa fa-trash"></i>delete</a>
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
