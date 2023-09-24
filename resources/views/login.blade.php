<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="container m-5 w3-display-middle p-5 bg-light border rounded" style="max-width:400px;">
        <form action="{{url('/login')}}" class="w3-container" method="post">
            @csrf

            <p>
                <label>Email</label>
                <input name="email" class="w3-input w3-border" type="text">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </p>
            <p>
                <label>Password</label>
                <input class="w3-input w3-border " name="password" type="text">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </p>

            <button type="submit" class="btn btn-primary">Login</button>
            <a href="{{url('/register')}}" class="btn btn-primary">Register</a>

        </form>
    </div>

</body>

</html>
