@extends('pages.base')

@section('content')

     

    <div class="row " style="margin-bottom: 1vh; margin-top: 10vh">
        <div class="col-md-5 text-light">
            <h1>Create Customer</h1>
            <form action="{{url('customers/create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control bg-dark text-light">
                    @error('last_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control bg-dark text-light">
                    @error('first_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control bg-dark text-light">
                    @error('address')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control bg-dark text-light">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control bg-dark text-light">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex">
                    <div class="form-group my-3 d-grid gap-2 d-md-flex jsutify-content-end">
                        <button class="btn btn-primary">
                            Add customer
                        </button>
                    </div>
                    <div class="form-group my-3 d-grid gap-2 d-md-flex jsutify-content-end">
                        <a href="{{url('/customers')}}" class="btn btn-primary me-md-2" type="button">
                            Return
                        </a>
                    </div>  
                </div> 
                
            </form>
        </div>
    </div>
@endsection