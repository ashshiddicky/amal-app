<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amal-app</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-yellow ">
    <div class="container">
      <a href="/landing" class="navbar-brand">
        <img src={{asset('img/c.png')}} alt="AdminLTE Logo" class="img-circle elevation-1" height="60" width="auto"  style="opacity: .9">
        <span class="brand-text font-weight-light"><b>Amal-app</b></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
         </ul>
          </li>
        </ul>

    </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        @if (Route::has('login'))
                    @auth
                      <li class="nav-item">
                        <a class="nav-link" role="button">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <span class="fas fa-sign-out-alt"></span> Log out
                                  </button>
                            </form>
                        </a>
                      </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" role="button">
                          <i class="fas fa-sign"> Login</i>
                        </a>
                      </li>
        @if (Route::has('register'))
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" role="button">
                          <i class="fas fa-users"> Register</i>
                        </a>
                      </li>
                    @endif
                    @endauth
         @endif

      </ul>

    </div>
  </nav>
  <!-- /.navbar -->
