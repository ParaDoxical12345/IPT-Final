<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
      body{
        background-image: url(https://4kwallpapers.com/images/wallpapers/nebulae-cosmic-stars-dark-blue-dark-background-digital-5120x2880-3926.jpg);
        background-attachment: fixed;
      }

    </style>
</head>
<body>

  <nav class="navbar bg-dark border-bottom border-body fixed-top" data-bs-theme="dark">
    <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
        <a class="nav-link {{Route::is('home') ? 'active' : ''}} " href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Route::is('customers') ? 'active' : ''}}" href="{{url('/customers')}}">Customers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Route::is('rooms') ? 'active' : ''}}" href="{{url('/rooms')}}">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Route::is('bookings') ? 'active' : ''}}" href="{{url('/bookings')}}">Bookings</a>
      </li>
    </ul>
  </nav>

    <div class="container mt-5" >
        @yield('content')   
    </div>
</body>
</html>