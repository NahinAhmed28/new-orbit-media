<nav class="navbar navbar-expand-lg light">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#">
            <img src="{{asset('frontend/img/logo-dark.png')}}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link"  href="{{URL('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/soon')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/soon')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/soon')}}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/soon')}}">Shops</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/soon')}}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/soon')}}">Get Quote</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
