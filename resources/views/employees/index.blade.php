@extends('app')
@section('content')

<table class="table">
    <tr class="table-primary">
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    @foreach($employees as $employee)
        <tr>
            <td>{{$employee -> id}}</td>
            <td>{{$employee -> firstname}}</td>
            <td>{{$employee -> lastname}}</td>
            <td>{{$employee -> phone}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('employees.destroy',['employee'=> $employee->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection