<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link  {{liHelpers('home')}}" aria-current="page" href="{{route('home')}}">Home</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link {{liHelpers('about')}}" href="{{route('about')}}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Artisans</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Planètes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="https://laravel.com">Laravel.com</a></li>
                        <li><a class="dropdown-item" href="https://laravel.io">Laravel.io</a></li>
                        <li><a class="dropdown-item" href="https://laravel.com">Laracasts</a></li>
                        <li><a class="dropdown-item" href="https://laravel.com">Laraveljobs</a></li>
                        <li><a class="dropdown-item" href="https://laravel-news.com">Laravel News</a></li>
                        <li><a class="dropdown-item" href="https://larachat.co">Larachat</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{liHelpers('contact')}}" href="{{route('contact')}}">Contact</a>
                </li>

            </ul>



        </div>

        <ul class="nav navbar-nav navbar-right">

            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>

        </ul>


    </div>
</nav>