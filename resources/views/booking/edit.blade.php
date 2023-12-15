@extends('pages.base')

@section('content')


  <div class="modal fade" id="deleteButtonModal" tabindex="-1" aria-labelledby="deleteButtonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteButtonModal">Delete booking</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/bookings/'.$booking->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            Are you sure you want to delete this booking id: {{$booking->id}}, booking detail: {{$booking->booking_number. '  '. $booking->booking_type}}.
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    <h1 style="margin-bottom: 1vh; margin-top: 10vh; color: white">Edit booking</h1>
    <div class="row">
        <div class="col-md-5 text-light">
            <form action="{{url('/bookings/' . $booking->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="customer_id">Select Customer</label>
                    <select name="customer_id" id="customer_id" class="form-select bg-dark text-light">
                        <option value="{{$booking->customer->id}}">{{$booking->customer->first_name}} {{$booking->customer->last_name}}</option>
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
                        <option value="{{$booking->room->id}}">{{$booking->room->room_number}} {{$booking->customer->room_type}}</option>
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
                    <input type="date" name="check_in" class="form-control bg-dark text-light" value="{{$booking->check_in}}">
                    @error('check_in')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="check_out">Check Out</label>
                    <input type="date" name="check_out" class="form-control bg-dark text-light" value="{{$booking->check_out}}">
                    @error('check_out')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="total_ammount">Total Ammount</label>
                  <input type="number" name="total_ammount" class="form-control bg-dark text-light" min="1" value="{{$booking->total_ammount}}">
                  @error('total_ammount')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>
                <div class="form-group my-3 d-grid d-md-flex justify-content-end gap-3">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteButtonModal">Delete</button>
                    <button class="btn btn-primary">Change</button>
                </div>
            </form>
        </div>
    </div>

@endsection
