@extends('pages.base')

@section('content')


  <div class="modal fade" id="deleteButtonModal" tabindex="-1" aria-labelledby="deleteButtonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteButtonModal">Delete customer</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/customers/'.$customer->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            Are you sure you want to delete this customer id: {{$customer->id}}, Name: {{$customer->last_name. ', '. $customer->first_name}}.
          </div>
       
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    <h1 class="text-light" style="margin-bottom: 1vh; margin-top: 10vh">Edit Customer</h1>
    <div class="row">
        <div class="col-md-5 text-light">
            <form action="{{url('/customers/' . $customer->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group mt-2">
                    <label for="last_name">last_name</label>
                    <input class="form-control bg-dark text-light" type="text" name="last_name" value="{{$customer->last_name}}">
                    @error('last_name')
                        <p class="text-danger">{{$info}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="first_name">first_name</label>
                    <input class="form-control bg-dark text-light" type="text" name="first_name" value="{{$customer->first_name}}">
                    @error('first_name')
                        <p class="text-danger">{{$info}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="address">Address</label>
                    <input class="form-control bg-dark text-light" type="text" name="address" value="{{$customer->address}}">
                    @error('address')
                    <p class="text-danger">{{$info}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="phone">Phone</label>
                    <input class="form-control bg-dark text-light" type="text" name="phone" value="{{$customer->phone}}">
                    @error('phone')
                    <p class="text-danger">{{$info}}</p>
                    @enderror
                </div>
                  <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input class="form-control bg-dark text-light" type="text" name="email" value="{{$customer->email}}">
                    @error('email')
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