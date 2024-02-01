<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

  @vite(['resources/assets/css/app.css', 'resources/assets/js/app.js', 'resources/assets/admin/vendor/css/pages/page-auth.css',])
</head>

<body>


<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                               Logo
                            </span>
                            <span class="app-brand-text demo text-body fw-bold ms-1">Login Panel</span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    @if(isset ($errors) && count($errors) > 0)
                        <div class="alert alert-warning" role="alert">
                            <ul class="list-unstyled mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="mb-3" method="post" action="{{ route('login') }}" >
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email or Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Enter your email or username" autofocus>
                            @error('username') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" class="form-control" name="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                            @error('password') <span class="text-danger"> {{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

</body>
</html>