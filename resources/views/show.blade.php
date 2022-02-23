@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col-12 p-5">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
               @foreach($users as $user)
                   <tr>
                       <th scope="row">1</th>
                       <td>{{$user->name}}</td>
                       <td>Otto</td>
                       <td>@mdo</td>
                   </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
