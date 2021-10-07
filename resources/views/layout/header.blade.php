
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- fontawesome.com -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href="main-images/fabicon.png" type="image/png">
    <link rel="stylesheet" href="{{ URL::asset('styles/css.css') }}">
    <title>Math_baba</title>
</head>

<body>
    <!-- nav section -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./image/logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav align-items-center ms-auto" id="navbarNav">
                    <a class="nav-link active-color" aria-current="page" href="{{ url('/') }}">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Offers</a>
                    <a class="nav-link" href="{{ url('/allQuestion') }}">Question List</a>

                    <a class="nav-link" href="{{ url('/add') }} ">Add new</a>
                    {{-- <a class="nav-link"><input placeholder="Search your math answer here?" class="form-control me-2" type="text"></a>
                    <a href="" class="nav-links"><button class="btn common-button">Search</button></a> --}}

                    <div class="dropdown">
                        <button class="btn common-button dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                       @if(Auth::check())
                              {{ Auth::user()->email }}
                              @endif


                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>


                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </nav>


  @yield('content')

  @extends('layout.footer')
