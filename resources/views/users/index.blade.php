@extends('app')
@section('content')

<table class="table">
    <tr class="table-primary">
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user -> id}}</td>
        <td>{{$user -> firstname}}</td>
        <td>{{$user -> lastname}}</td>
        <td>{{$user -> phone}}</td>
        <td>{{$user -> email}}</td>
        <td>
            <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('users.destroy',['user'=> $user->id]) }}">Delete</a> 
        </td>
    </tr>
@endforeach
</table>
@endsection