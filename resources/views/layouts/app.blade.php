<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nice site</title>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <header class="mb-5">
            <nav class="navbar navbar-expand-sm navbar-dark bg-custom-light nice_padding">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_nav" aria-controls="header_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header_nav">
                    <ul class="navbar-nav align-items-center">
                        @foreach($pages as $page)
                            <li class="nav-item @if(Route::currentRouteName() == $page->slug && Route::currentRouteName() !== 'store') active @elseif(Route::currentRouteName() == $page->slug && Route::currentRouteName() == 'store')) font-weight-bold @endif @if($page->slug == 'store') mr-2 @endif">
                                <a class="nav-link" href="{{ route($page->slug) }}">{{ $page->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown mr-5">
                            <i class="fa fa-bell dropdown-toggle" aria-hidden="true" data-toggle="dropdown"></i>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                                Link 1
                            </a>
                            <a class="dropdown-item" href="#">
                                Link 2
                            </a>
                            <a class="dropdown-item" href="#">
                                Link 3
                            </a>
                        </div>
                        </li>
                        <li class="nav-item dropdown">
                            <i class="fa fa-user dropdown-toggle" aria-hidden="true" data-toggle="dropdown"></i>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                                Link 1
                            </a>
                            <a class="dropdown-item" href="#">
                                Link 2
                            </a>
                            <a class="dropdown-item" href="#">
                                Link 3
                            </a>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="container-fluid nice_padding">
            @yield('content')
        </main>
        <footer class="nice_padding container-fluid mb-3">
            <span class="mr-2">&#9400; 2015</span>
            <span class="nice_link">
                <a href="https://www.interesnee.ru/" target="_blank">interesnee.ru</a>
            </span>
        </footer>
        <script src="{{ asset('js/app.js') }}">  </script>
        @yield('scripts')
    </body>
</html>