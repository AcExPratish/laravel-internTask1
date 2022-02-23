@extends('layouts.app')
@section('content')
    <div class="container p-5">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <div class="row">
                    <form action="/" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-12">
                            <label for="name" class="form-label">Lecturer's Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="email" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="email" name="email" required>
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
                                <select class="form-select form-select-md" aria-label=".form-select-sm example" name="module" id="module" required>
                                    <option selected disabled>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="module" class="form-label">Select Module</label>
                                <select class="form-select form-select-md" aria-label=".form-select-sm example" name="module" id="module" required>
                                    <option selected disabled>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="form-check-label" for="gender">
                                Gender
                            </label>
                            <div class="col-12 d-flex">
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="gender" id="gender">
                                    <label class="form-check-label" for="gender">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check my-2 ms-2">
                                    <input class="form-check-input" type="radio" name="gender" id="gender">
                                    <label class="form-check-label" for="gender">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check my-2 ms-2">
                                    <input class="form-check-input" type="radio" name="gender" id="gender">
                                    <label class="form-check-label" for="gender">
                                        Rather not say
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
