@extends('admin.master')
@section('title')
    Manage User
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage user</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive" id="myTable1">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Image</th>
                                    <th>Phone</th>
                                    <th>About</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            {{$user->access_label == 3 ? 'Admin' : ''}}
                                            {{$user->access_label == 2 ? 'Testimony' : ''}}
                                            {{$user->access_label == 1 ? 'chefs' : ''}}
                                            {{$user->access_label == 0 ? 'customer' : ''}}
                                        </td>
                                        <td>
                                            <img src="{{asset($user->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{$user->userDetail->phone}}</td>
                                        <td>{{$user->userDetail->description}}</td>
                                        <td>{{$user->userDetail->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('users.change-status', ['id' => $user->id])}}" @if($user->userDetail->status == 0) class="btn btn-success" @endif  @if($user->userDetail->status == 1) class="btn btn-warning" @endif>
                                                <i class="fa fa-egg"></i>status</a>
                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>edit</a>
                                            <form action="{{route('users.destroy', $user->id)}}" style="display: inline-block" method="post" onsubmit="return confirm('Are you sure want to delete this user????')">
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
