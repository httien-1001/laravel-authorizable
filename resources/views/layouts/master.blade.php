<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>



    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                @if (Route::has('login') || Route::has('register'))

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            </ul>
        </nav>

@else
    <?php $menu = config('menu'); ?>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">

            @foreach($menu as $m)
                @if(Auth::user()->can($m['route']))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route($m['route'])}}">{{$m['label']}}</a>
                    </li>
                @endif
            @endforeach
            <li class="nav-item">

                <a class="nav-link"  href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
        </ul>
    </nav>
    @endguest
    </ul>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>

