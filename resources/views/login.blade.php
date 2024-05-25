<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Session</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow rounded-5 my-5">
                    <div class="card-body p-4 p-md-5">
                        <h1 class="display-5 fw-bold text-center">Login</h1>
                        <form action="{{ route('loginvalidate') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <label for="email">Email address</label>
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                            @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <br>
                            @if ($errors->has('all'))
                            <span class="text-danger my-3">
                                {{ $errors->first('all') }}
                            </span>
                            @endif
                            </div>

                            <div class="d-grid gap-2">
                                <button id="login-button" class="btn btn-primary" type="submit" href="{{ route('login') }}">Login</button>
                                <a href="" class="btn btn-outline-primary">Cancel</a>      
                                <p class="text-center mt-5">Don't have an account? <a href="{{ route('register') }}">Register</a></p>       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
