
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css">
<div class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">

            @if(Session::has('message'))
            <div id="alertContainer" class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                <strong class="mx-2">Success!</strong> {{ Session::get('message') }}
            </div>
            @endif

            @if(Session::has('loginError'))
            <div id="alertContainer" class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
                <strong class="mx-2">Failed!</strong> {{ Session::get('loginError') }}
            </div>
            @endif

            <div class="card login-card">
                
                <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="https://source.unsplash.com/featured/" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper d-flex align-items-center">
                            <img src="img/logo.png" alt="logo" class="logo" >Go - Blog
                    </div>
                    <p class="login-card-description">Sign into your account</p>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email address" required value="{{ old('email') }}">
                            @error('email')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password" id="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <button id="login" class="btn btn-block login-btn mb-4" type="submit" >Login</button>
                        </form>
                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                        <p class="login-card-footer-text">Don't have an account? <a href="/register" class="text-reset">Register here</a></p>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Terms of use.</a>
                            <a href="#!">Privacy policy</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
