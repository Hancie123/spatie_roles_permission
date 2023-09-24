<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>

<body>
    <div class="container m-5 w3-display-middle p-5 bg-light border rounded" style="max-width:400px;">
        <form action="{{url('/register')}}" class="w3-container" method="post">
            @csrf
            <p>
                <label>Name</label>
                <input name="name" class="w3-input w3-border" type="text">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </p>

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

            <p>
                <label>Confirmed Password</label>
                <input class="w3-input w3-border " name="password_confirmation" type="text">
                @error('confirmed')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </p>

            <button type="submit" class="btn btn-primary">Register</button>
            <a href="{{url('/login')}}" class="btn btn-primary">Login Back</a>

        </form>
    </div>

</body>

</html>
