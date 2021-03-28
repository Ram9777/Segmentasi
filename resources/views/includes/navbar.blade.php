 <!-- navbar -->
 <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light">
        <a href="#" class="navbar-brand">
            <img src="frontend/images/logo.PNG" alt="logo"/>
         </a>
         <button class="navbar-toggler navbar-toggler-right"
         type="button"
         data-toggle="collapse"
         data-target="#navb">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{ url('/') }}" class="nav-link active">Home</a>
                </li>
                {{-- <li class="nav-item mx-md-2">
                    <a href="{{ url('history') }}" class="nav-link">History</a>
                </li> --}}

                <!-- mobile btton -->
               
            </ul>
            @guest
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    Masuk
                </button>
            </form>

            <!-- desktop btton -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    Masuk
                </button>
            </form>
            @endguest

            @auth
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
                    Keluar
                </button>
            </form>

            <!-- desktop btton -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                    Keluar
                </button>
            </form>
            @endauth
        </div>
    </nav>
</div>