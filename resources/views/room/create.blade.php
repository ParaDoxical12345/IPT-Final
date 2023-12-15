@extends('pages.base')

@section('content')



    <div class="row" style="margin-bottom: 1vh; margin-top: 10vh">
        <div class="col-md-5 text-light">
            <h1>Create a room</h1>
            <form action="{{url('rooms/create')}}" method="POST">
                @csrf
                <div class="form-group">Room Number</label>
                    <input type="text" name="room_number" class="form-control bg-dark text-light">
                    @error('room_number')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="room_type">Room Type</label>
                    <input type="text" name="room_type" class="form-control bg-dark text-light">
                    @error('room_type')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rate">Rate</label>
                    <input type="number" name="rate" class="form-control bg-dark text-light" >
                    @error('rate')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <input type="number" name="capacity" class="form-control bg-dark text-light" min="1">
                    @error('capacity')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex">
                    <div class="form-group my-3 d-grid gap-2 d-md-flex jsutify-content-end">
                        <button class="btn btn-primary">
                            Add room
                        </button>
                    </div>
                    <div class="form-group my-3 d-grid gap-2 d-md-flex jsutify-content-end">
                        <a href="{{url('/rooms')}}" class="btn btn-primary me-md-2" type="button">
                            Return
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
