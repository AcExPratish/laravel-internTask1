@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col-10 d-flex justify-content-end">
            <a href="{{route('home')}}" class="btn btn-primary">Show All User's</a>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-8 bg-light p-5">
            <div class="row">
                <form action="/lecturer/createProcedure" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 col-12">
                        <label for="name" class="form-label">Lecturer's Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="nationality" class="form-label">Nationality</label>
                            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="nationality" id="nationality" required>
                                <option selected disabled>Please select your Nationality</option>
                                <option value="nepal">Nepal</option>
                                <option value="usa">USA</option>
                                <option value="uk">UK</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="date" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="faculty" class="form-label">Select Faculty</label>
                            <select class="form-select form-select-md" aria-label=".form-select-md example" name="faculty" id="faculty" required>
                                <option selected disabled>Please select a faculty </option>
                                    @if(count($faculty))
                                        @foreach($faculty as $facult)
                                                <option value="{{$facult->id}}">{{$facult->name}}</option>
                                            @endforeach
                                    @else
                                        <option selected disabled>No Faculties Available</option>
                                    @endif
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="module" class="form-label">Select Module</label>
                            <select class="form-select form-select-md" aria-label=".form-select-md example" name="module" id="module" required>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-check-label" for="gender">
                            Gender
                        </label>
                        <div class="col-12 d-flex" id="gender">
                            <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="gender" value="Male" required>
                                <label class="form-check-label" for="gender">
                                    Male
                                </label>
                            </div>
                            <div class="form-check my-2 ms-2">
                                <input class="form-check-input" type="radio" name="gender" value="Female" required>
                                <label class="form-check-label" for="gender">
                                    Female
                                </label>
                            </div>
                            <div class="form-check my-2 ms-2">
                                <input class="form-check-input" type="radio" name="gender" value="N/A" required>
                                <label class="form-check-label" for="gender">
                                    Rather not say
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary mt-3 w-100">Submit</button>
                        </div>
                    </div>
                    @if($errors->any())
                        <div class="row text-center bg-light border border-danger text-danger p-4 mt-5">
                            <ul style="list-style: none">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script>
        $(document).ready(function (){
            $('#faculty').change(function (){
                let fid = $(this).val();
                $.ajax({
                    url:"/lecturer/getState",
                    type:"post",
                    data:"fid="+fid+"&_token={{csrf_token()}}",
                    success: function(result){
                        $('#module').html(result);
                    }});
            });
        });
    </script>
@endsection
