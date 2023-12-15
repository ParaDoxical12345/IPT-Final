@extends('pages.base')

@section('content')

@if(session('message'))
    <div class="alert alert-success" style="margin-bottom: 1vh; margin-top: 10vh">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end md-3" style="margin-bottom: 1vh; margin-top: 10vh">
    <a href="{{url('/bookings/create')}}" class="btn btn-dark me-md-2" type="button">
        Add New booking
    </a>
</div>

<div class="p-3 mb-5 bg-dark rounded">
    <table class="table table-dark table-hover">
        <thead>
            <th>ID</th>
            <th>Customer</th>
            <th>Room</th>
            <th>Checked In</th>
            <th>Checked Out</th>
            <th>Total Ammount</th>
            <th>Edit</th>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id}}</td>
                    <td>{{ $booking->customer->last_name. ", " .$booking->customer->first_name}}</td>
                    <td>{{ $booking->room->room_number. ", " .$booking->room->room_type}}</td>
                    <td>{{ $booking->check_in}}</td>
                    <td>{{ $booking->check_out}}</td>
                    <td>&#8369 {{ $booking->total_ammount}}</td>
                    <td class="text-center col-1">
                        <a href="{{url('/bookings/'.$booking->id)}}" class="btnn btn-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
