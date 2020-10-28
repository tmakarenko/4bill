@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
        <h1 class="text-center">General info</h1>
    </div>
    <div class="col-8 offset-2">
    <table class="table table-bordered">
        <tr>
            <th>Row name</th>
            <th>Row value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>Login</td>
            <td>{{$user->login}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>
                {{$user->phone}}
            </td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>{{$user->date_of_birth}}</td>
        </tr>
        <tr>
            <td>About</td>
            <td>{{$user->about}}</td>
        </tr>
    </table>
    </div>
</div>
@endsection
