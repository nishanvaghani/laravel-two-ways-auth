<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cool Login form | By Code Info</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Hello Again!</h1>
            <p>Welcome back you've <br> been missed!</p>
            <form action="{{ route('create-user') }}" method="POST" >
                @csrf
                <input type="text" placeholder="Enter username" name="name" >
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="email" placeholder="Enter email" name="email">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="password" placeholder="Password" name="password" >
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="password" placeholder="Confirm Password" name="pass" id="pass">
                @error('pass')
                    <div class="error">{{ $message }}</div>
                @enderror
                <button type="submit">Sign up</button>
            </form>
        </div>
    </div>
</body>

</html>
