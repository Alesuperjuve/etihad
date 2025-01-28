
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>My Web</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="{{ asset('skydash/src/assets/vendors/feather/feather.css') }}">
      <link rel="stylesheet" href="{{ asset('skydash/src/assets/vendors/ti-icons/css/themify-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('skydash/src/assets/vendors/css/vendor.bundle.base.css') }}">
      <link rel="stylesheet" href="{{ asset('skydash/src/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('skydash/src/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
      <!-- endinject -->
      <!-- inject:css -->
      <link rel="stylesheet" href="{{ asset('skydash/src/assets/css/style.css') }}">
      <!-- endinject -->
      <link rel="shortcut icon" href="{{ asset('skydash/src/assets/images/favicon.png') }}" />
    </head>
    <body>
      <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                  <div class="brand-logo">
                    <!-- <img src="{{ asset('skydash/src/assets/images/logo.svg') }}" alt="logo"> -->
                    <h3 class="font-weight-500 mb-xl-4 text-primary">Infiniferro Dubai</h3>
                  </div>

                  <!-- Session Status -->
                  <x-auth-session-status class="mb-4" :status="session('status')" />

                  <!-- Form Login -->
                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                      <input type="email" id="email" class="form-control form-control-lg" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group">
                      <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="current-password" placeholder="Password">
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="block mt-4">
                      <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                      </label>
                    </div>

                    <div class="mt-3 d-grid gap-2">
                      <button type="submit" class="btn btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                      @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                          Forgot your password?
                        </a>
                      @endif
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- plugins:js -->
      <script src="{{ asset('skydash/src/assets/vendors/js/vendor.bundle.base.js') }}"></script>
      <!-- endinject -->
      <!-- inject:js -->
      <script src="{{ asset('skydash/src/assets/js/off-canvas.js') }}"></script>
      <script src="{{ asset('skydash/src/assets/js/template.js') }}"></script>
      <script src="{{ asset('skydash/src/assets/js/settings.js') }}"></script>
      <script src="{{ asset('skydash/src/assets/js/todolist.js') }}"></script>
      <!-- endinject -->
    </body>
  </html>
