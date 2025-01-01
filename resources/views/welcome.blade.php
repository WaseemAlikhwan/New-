<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Medical Center</title>


    </head>
    <body class="antialiased">

    <nav class="navbar " style="background-color: rgba(173, 216, 230, 0.5)">
  <div class="container-fluid">
    <a class="navbar-brand d-flex mx-auto">Medical Center</a>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="link-offset-2 link-underline link-underline-opacity-0 link-dark">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="link-offset-2 link-underline link-underline-opacity-0 link-dark" >Log in</a>

                    
                    @endauth
                </div>
            @endif
  </div>
  </nav>

<img src="{{asset('photoes/R.jfif')}}" class="img-fluid" alt="...">
     

         
    </body>
</html>
