



{{--cdns--}}
@section('cdns')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

{{--Navbar-top--}}
<nav id="navbar-top" class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="container ">
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">DC POWER&trade; VISA&reg;</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></a>
                  </li>
                </ul>
              </div>
        </div>
      
    </div>
</nav>

{{--Navbar-down--}}
<nav id="navbar-down" class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <div class="container ">
            
            <div class="collapse navbar-collapse fw-bold " id="navbarSupportedContent">
                <img src="{{asset('images/dc-logo.png')}}" class="" alt="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="#">CHARACTERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('comics.index') }}">COMICS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">FANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">NEWS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        
                    </li>
                </ul>
                <form class="">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
      
    </div>
</nav>

{{--main-jumbo--}}
<section >
    <div class="container-fluid" id="header-jumbotron">
       
    </div>
</section>

