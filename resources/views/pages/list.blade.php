@extends('master')
@section('title', 'Register')

@section('content')
@include('menu')
    <div class="container p-5 bg-light">
        <h2 class="mb-5">Registration List</h2>

        <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th scope="col">Sl</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($students as $key=>$student)
                    <tr>
                        <th scope="row">{{ $key+1}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                    </tr>
                @endforeach


            </tbody>
          </table>
    </div>

@endsection
