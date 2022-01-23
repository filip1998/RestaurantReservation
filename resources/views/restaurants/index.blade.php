@extends('app')
@section('content')

<table class="table">
    <tr class="table-primary">
        <th>ID</th>
        <th>Restaurant_name</th>
        <th>City</th>
        <th>Restaurant_address</th>
        <th>Actions</th>
    </tr>
    
    @foreach($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant->id }}</td>
            <td>{{ $restaurant->res_name }}</td>
            <td>{{ $restaurant->city }}</td>
            <td>{{ $restaurant->res_address }}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('restaurants.destroy',['restaurant'=> $restaurant->id]) }}">Delete</a> 
            </td>
        </tr>
    @endforeach
</table>
@endsection