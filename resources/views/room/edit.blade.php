@extends('pages.base')

@section('content')


  <div class="modal fade" id="deleteButtonModal" tabindex="-1" aria-labelledby="deleteButtonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteButtonModal">Delete room</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/rooms/'.$room->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            Are you sure you want to delete this room id: {{$room->id}}, room detail: {{$room->room_number. '  '. $room->room_type}}.
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    <h1 style="margin-bottom: 1vh; margin-top: 10vh; color:white">Edit room</h1>
    <div class="row">
        <div class="col-md-5 text-light">
            <form action="{{url('/rooms/' . $room->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group mt-2">
                    <label for="room_number">Room Number</label>
                    <input class="form-control bg-dark text-light" type="text" name="room_number" value="{{$room->room_number}}">
                    @error('room_number')
                        <p class="text-danger">{{$info}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="room_type">Room Type</label>
                    <input class="form-control bg-dark text-light" type="text" name="room_type" value="{{$room->room_type}}">
                    @error('room_type')
                        <p class="text-danger">{{$info}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="rate">Rate</label>
                    <input class="form-control bg-dark text-light" type="number" name="rate" value="{{$room->rate}}">
                    @error('rate')
                    <p class="text-danger">{{$info}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="capacity">Capacity</label>
                    <input class="form-control bg-dark text-light" type="text" name="capacity" value="{{$room->capacity}}" min="1">
                    @error('capacity')
                    <p class="text-danger">{{$info}}</p>
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
