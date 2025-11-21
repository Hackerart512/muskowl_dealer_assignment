<!doctype html>
<html lang="en" dir="ltr">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="GeniusOcean">
      <meta name="robots" content="noindex">
      <meta name="googlebot" content="noindex">
    <!-- Title -->
    <title>Login</title>
  
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome.css')}}">
    <!-- icofont -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/icofont.min.css')}}">
    <!-- Sidemenu Css -->
  
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/admin/css/custom.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/admin/css/responsive.css')}}" rel="stylesheet" />
    @yield('styles')

  </head>
  <body>

    <!-- Login and Sign up Area Start -->
    <section class="login-signup">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="login-area">
              <div class="header-area">
                <h4 class="title">{{ __('Login Now') }}</h4>
                <p class="text">{{ __('Welcome back, please sign in below') }}</p>
              </div>
              <div class="login-form">
                @include('includes.admin.form-login')
                <form id="loginform" action="{{ route('admin.login.submit') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-input">
                    <input type="email" name="email" class="User Name" placeholder="{{ __('Type Email Address') }}" value="" required="" autofocus>
                    <i class="icofont-user-alt-5"></i>
                  </div>
                  <div class="form-input">
                    <input type="password" name="password" class="Password" placeholder="{{ __('Type Password') }}">
                    <i class="icofont-ui-password"></i>
                  </div>
                  <div class="form-forgot-pass">
                    <div class="left">
                      <input type="checkbox" name="remember"  id="rp" {{ old('remember') ? 'checked' : '' }}>
                      <label for="rp">{{ __('Remember Password') }}</label>
                    </div> 
                  </div>
                  <input id="authdata" type="hidden"  value="{{ __('Authenticating...') }}">
                  <button class="submit-btn">{{ __('Login') }}</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Login and Sign up Area End -->


   
    <script src="{{asset('assets/admin/js/myscript.js')}}"></script>

  </body>

</html>