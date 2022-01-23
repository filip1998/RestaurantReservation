@extends('app')
@section('content')

<table class="table">
    <tr class="table-primary">
        <th>Restaurant</th>
        <th>Employee</th>
        <th>Capacity</th>
        <th>Empty</th>
        <th>Reserved</th>
        <th>Actions</th>
    </tr>
    @foreach($tables as $table)
    <tr>
        <td>{{$table -> restaurant -> res_name}}</td>
        <td>{{$table -> employee -> lastname}}</td>
        <td>{{$table -> capacity}}</td>
        <td>{{$table -> empty}}</td>
        <td>{{$table -> reserved}}</td>
        <td>
            <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('tables.destroy',['table'=> $table->id]) }}">Delete</a> 
        </td>
    </tr>
@endforeach
</table>
@endsection