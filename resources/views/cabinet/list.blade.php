@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
        <h1 class="text-center">General info</h1>
    </div>
    <div class="col-8 offset-2">
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Soft del</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->deleted_at}}</td>
            <td>
                @if(!$user->deleted_at && $user->id != auth()->user()->id)
                    <a type="button" class="btn btn-primary" href="/user/{{$user->id}}}/deactivate">Delete</a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    <div class="col-2 offset-5">
        {{$users->links()}}
    </div>

</div>
@endsection
