<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <h1 class="m-0">SiAbanglih</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="#home" class="nav-item nav-link active">Home</a>
            <a href="#kandidat" class="nav-item nav-link">Kandidat & Peserta</a>
            <a href="#qc" class="nav-item nav-link">Quick Count</a>
            <a href="voting" class="nav-item nav-link">Voting</a>   
        </div>
        
        
        @guest
        <a href="{{route('login')}}" class="btn btn-primary-gradient rounded-pill py-2 px-4 d-md-block d-block mt-md-0 mt-3">Login</a>
        @endguest
        
        @auth
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle rounded-pill py-2 px-4 d-md-block d-block mt-md-0 mt-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
               Hai, {{auth()->user()->fullname}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @if (auth()->user()->role == 'Admin')
                <li><a class="dropdown-item" href="{{route('management-peserta.index')}}">Management Peserta</a></li>
                <li><a class="dropdown-item" href="{{route('management-kandidat.index')}}">Management Kandidat</a></li>
                <li><a class="dropdown-item" href="#">Report</a></li>
                <hr>
            @endif
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </div>
        @endauth
    </div>
</nav>