<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloger</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            min-height: 75rem;
          }
    </style>
    @stack('css')
</head>
<body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                <a class="navbar-brand" href="#">Blogger</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{url('/dashboard')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('post.index')}}">Post</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="#">Disabled</a>
                    </li> --}}
                  </ul>
                  <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
<div class="container">
    @yield('content')
</div>
    <script src="{{asset('js/app.js')}}"></script>
    @stack('js')
</body>
</html>
