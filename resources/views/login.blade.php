<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('landingPage/style.css') }}">

    <title>Login</title>
  </head>
  <body>
    <main class="container-fluid d-flex justify-content-center align-items-center" id="login-section">
        <div class="card col-md-6 col-lg-4 mx-3 shadow">
            <div class="card-body p-5 my-3">
                <div class="container text-center mb-5">
                    <h1>Login</h1>
                </div>

                @if (session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}
                    </div>
                @endif

                <div class="container mt-3">
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="form-email" class="form-label">Email address</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="form-email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                          @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="mb-5">
                          <label for="form-password" class="form-label">Password</label>
                          <input type="password" class="form-control @error('email') is-invalid @enderror" id="form-password" name="password">
                          @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
