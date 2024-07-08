<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('logres/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('logres/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('logres/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('logres/css/style.css')}}">

    <title>TechnoStore - Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('logres/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h4 style="font-weight: 600">TechnoStore</h4>
              <h1 style="font-weight: 600">Selamat Datang Kembali</h1>
              <p class="mb-4" style="color:rgb(18, 18, 18);">Anda perlu login agar dapat mengakses situs web ini.</p>
            </div>
            <form action="{{route('login')}}" method="post">
                @csrf
              <div class="form-group first">
                <label>Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group last mb-4">
                <label>Password</label>
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="inputChoosePassword">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              {{-- <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span> --}}
              
              {{-- <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div> --}}
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{asset('logres/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('logres/js/popper.min.js')}}"></script>
    <script src="{{asset('logres/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('logres/js/main.js')}}"></script>
  </body>
</html>