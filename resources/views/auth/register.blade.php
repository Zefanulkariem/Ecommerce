<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TechnoStore - Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin_assets/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin_assets/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin_assets/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <h3 class="mt-2" style="font-weight: 300">TechnoStore</h3>
                </div>
                <h4 style="font-weight: 600">Daftarkan Akun</h4>
                <h6 class="font-weight-light">Anda perlu membuat akun untuk mengakses situs web ini.</h6>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-group">
                    <label>Username</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan Nama">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" required autocomplete="new-password" class="form-control  @error('password') is-invalid @enderror" id="inputChoosePassword">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan Password" class="form-control  @error('password') is-invalid @enderror" id="password-confirm">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  {{-- <div class="form-group">
                    <select class="form-select form-select-lg" id="exampleFormControlSelect2">
                      <option>Country</option>
                      <option>United States of America</option>
                      <option>United Kingdom</option>
                      <option>India</option>
                      <option>Germany</option>
                      <option>Argentina</option>
                    </select>
                  </div> --}}
                  {{-- <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div> --}}
                  <div class="mt-3 d-grid gap-2">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Sudah punya akun? <a href="{{'login'}}" class="text-primary">Sign Up</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin_assets/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin_assets/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin_assets/assets/js/template.js')}}"></script>
    <script src="{{asset('admin_assets/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin_assets/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
  </body>
</html>