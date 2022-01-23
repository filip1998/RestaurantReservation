@extends('app')
@section('content')

<table class="table">
    <tr class="table-primary">
        <th>ID</th>
        <th>No_of_people</th>
        <th>Date</th>
        <th>Time</th>
        <th>Table</th>
        <th>User</th>
        <th>Actions</th>

    </tr>
    @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->no_of_people}}</td>
            <td>{{$reservation->date}}</td>
            <td>{{$reservation->time}}</td>
            <td>{{$reservation->table_id}}</td>
            <td>{{$reservation->user->lastname}}</td>
            <td>
                <a href="javascript:alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('reservations.destroy',['reservation'=> $reservation->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection