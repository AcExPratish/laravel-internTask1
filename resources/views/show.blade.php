@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-end">
            <a href="/lecturer/createView" class="btn btn-primary">Create New</a>
        </div>
    </div>
    @if(count($users))
        <div class="row mt-5">
            <div class="col-12 p-5">
                <table class="table table-hover caption-top">
                    <caption>List of All Users</caption>
                    <thead>
                    <tr>
                        <th scope="col">I.D</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Module</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phoneNumber}}</td>
                            <td>{{$user->nationality}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->date}}</td>
                            <td>{{$user->faculty->name}}</td>
                            <td>{{$user->module}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mx-auto mt-5 mb-lg-5 my-lg-0">
            {{$users->links('vendor.pagination.bootstrap-5')}}
        </div>
        @else
            <div class="row mx-auto alert alert-info mt-5 justify-content-center h4 p-4">
                No Record's Found
            </div>
    @endif
@endsection
g
