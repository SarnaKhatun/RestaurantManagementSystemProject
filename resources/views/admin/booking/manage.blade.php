@extends('admin.master')
@section('title')
    Manage Booking
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">manage booking</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered" id="booking">
                                <thead>
                                <tr>
                                    <th>sl no:</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>No. of people</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
{{--                                        <td>{{$booking->user->name}}</td>--}}
{{--                                        <td>{{$booking->user->email}}</td>--}}
                                        <td>{{$booking->name}}</td>
                                        <td>{{$booking->email}}</td>
                                        <td>{{$booking->phone}}</td>
                                        <td>{{$booking->date}}</td>
                                        <td>{{$booking->time }}</td>
                                        <td>{{$booking->people }}</td>
                                        <td>{!! $booking->message  !!}</td>
                                        <td>{{$booking->status == 'pending' ? 'pending' : 'complete'}}</td>
                                        <td>

                                            <a href="{{route('booking.status', ['id' => $booking->id])}}" @if($booking->status == 'complete') class="btn btn-success" @endif @if($booking->status == 'pending') class="btn btn-warning" @endif  >
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('delete.book', ['id' => $booking->id])}}" class="btn btn-danger">
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
