@extends('master')
@section('title', 'Register')

@section('content')

@include('menu')

    <div class="container p-5 bg-light">


        <h2 class="mb-5">Registration Form</h2>

        <form method="POST" action="{{route('student.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">

                @error('name')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">

                @error('email')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">

                @error('phone')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                @enderror

            </div>

            <input type="submit" class="btn btn-primary" value="Submit">


        </form>
    </div>

@endsection
