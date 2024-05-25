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
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark text-right">
    <div class="container">
        <ul class="navbar-nav">
        <li class="nav-item">
                <x-nav-link href="{{ route('home') }}" :active="request()->is('home')">Home</x-nav-link>
            </li>
        <li class="nav-item">
                <x-nav-link href="{{ route('order.index') }}" :active="request()->is('order*')">Orders</x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="{{ route('account') }}" :active="request()->is('account')">Account</x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="{{ route('settings') }}" :active="request()->is('settings')">Settings</x-nav-link>
            </li>
        </ul>
    </div>
</nav>

    {{ $slot }}

</body>
</html>