<!-- navigation -->
<header class="navigation fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1" href="/">
          <img class="img-fluid" width="163px" src="{{ asset('img/g-blogg.png') }}" alt="">
        </a>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Homepage</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                About <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">
                
                <a class="dropdown-item" href="/about-us">About Me</a>
                
                <a class="dropdown-item" href="/about">About Blog</a>
                
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="/blog">Content</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
  
        <div class="order-2 order-lg-3 d-flex align-items-center">
            @auth
            <div class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Selamat Datang,  {{ Auth::user()->name }}!<i class="ti-angle-down ml-1"></i>
                </a>
                <div class="dropdown-menu">
                
                    <a class="dropdown-item" href="/authors/{{ Auth::user()->name }}"><i class="bi bi-person-fill"></i> Account</a>
                    
                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-card-list"></i>  Dashboard</a>
        
                    <hr class="dropdown-divider text-dark">
        
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>  Logout</button>
                    </form>
                </div>
              </div>
          
            @else
                <a href="/login" class="btn btn-primary mb-2">Login Here</a>
            @endauth
        </div>
  
      </nav>
    </div>
  </header>
  <!-- /navigation -->





{{-- <style>
    .change-link .link-nav {
        transition: transform 0.3s ease;
    }

    .login:hover {
        transform: scale(1.1);
    }

    .a-link:hover {
        color: black;
    }

    .change-link .link-nav:hover {
        transform: scale(1.2);
        color: grey !important;
        font-weight: bold;
    }
</style>

<nav class="navbar navbar-expand-lg bg-dark text-white p-3 mb-3">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Coba Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between align-items-center w-100 " id="navbarNavDropdown">
            <ul class="navbar-nav change-link mx-auto text-md-center text-left text-white">
                <li class="nav-item">
                    <a class="nav-link link-nav active text-white" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav text-white" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav text-white" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav text-white" href="/categories">Category</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" data-mdb-toggle="dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat Datang, {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-grid-fill"></i>   Dashboard</a></li>
                    <li><a class="dropdown-item" href="/authors/{{ Auth::user()->name }}"><i class="bi bi-person-fill"></i>   Profil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>  Logout</button>
                    </form>
                  </ul>
                </li>
                @else
                <li class="nav-item bg-secondary border rounded">
                    <a class="nav-link a-link text-white p-2" href="/login"><i class="bi bi-box-arrow-in-right"></i>  LOGIN</a> 
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<script>
    const dropdownToggle = document.querySelector('[data-mdb-toggle="dropdown"]');
    dropdownToggle.addEventListener('click', function() {
      this.nextElementSibling.classList.toggle('show');
    });
</script> --}}
