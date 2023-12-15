@extends('pages.base')

@section('content')



    <div class="row" style="margin-bottom: 1vh; margin-top: 10vh">
        <div class="col-md-5 text-light">
            <h1>Create Book</h1>
            <form action="{{url('bookings/create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="customer_id">Select Customer</label>
                    <select name="customer_id" id="customer_id" class="form-select bg-dark text-light">
                        <option hidden="true">Select Customer</option>
                        <option selected disabled>Select Customer</option>
                        @foreach ($customers as $customer_id => $customer)
                            <option value="{{$customer_id}}">{{$customer}}</option>
                        @endforeach
                    </select>
                    @error('customer_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="room_id">Select Room</label>
                    <select name="room_id" id="room_id" class="form-select bg-dark text-light">
                        <option hidden="true">Select Room</option>
                        <option selected disabled>Select Room</option>
                        @foreach ($rooms as $room_id => $room)
                            <option value="{{$room_id}}">{{$room}}</option>
                        @endforeach
                    </select>
                    @error('room_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="check_in">Check In</label>
                    <input type="date" name="check_in" class="form-control bg-dark text-light">
                    @error('check_in')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="check_out">Check Out</label>
                    <input type="date" name="check_out" class="form-control bg-dark text-light">
                    @error('check_out')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="total_ammount">Total Ammount</label>
                    <input type="number" name="total_ammount" class="form-control bg-dark text-light" min="1" value="0">
                    @error('total_ammount')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex">
                    <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">
                            Add Booking
                        </button>
                    </div>
                    <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                        <a href="{{url('/bookings')}}" class="btn btn-primary me-md-2" type="button">
                            Return
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
