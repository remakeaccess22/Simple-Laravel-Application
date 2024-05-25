<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="bg-light">
@include('sweetalert::alert')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-md-5">
                        <h1 class="display-5 fw-bold text-center">Register</h1>
                        <form action="{{ route('registervalidate') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                <label for="name">Full Name</label>
                            @if($errors->has('name'))
                                <span class="text-danger my-3">{{ $errors->first('name') }}</span>
                            @endif
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"  placeholder="Email">
                                <label for="email">Email address</label>
                            @if($errors->has('email'))
                                <span class="text-danger my-3">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                            @if($errors->has('password'))
                                <span class="text-danger my-3">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit" href="{{ route('register') }}">Register</button>
                                <a href="" class="btn btn-outline-primary">Cancel</a>      
                                <p class="text-center mt-5">Already have an account? <a href="{{ route('login') }}">Login Instead</a></p>                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>