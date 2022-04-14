<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cool Login form | By Code Info</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="wrapper">
          <h1>Hello Again!</h1>
          <p>Welcome back you've <br> been missed!</p>
          <form action="{{ route('admin.adminlogin') }}" method="POST">
            @csrf
            <input type="text" placeholder="Enter Email" name="email">
            @error('email')
                <div class="error">{{ $message }}</div>
             @enderror
            <input type="password" placeholder="password" name="password">
            <button type="submit">Sign in</button>
            @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
          </form>
          <p class="or">
            ----- or continue with -----
          </p>
          <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-github"></i>
            <i class="fab fa-facebook"></i>
          </div>
          <div class="not-member">
            Not a member? <a href="">Register Now</a>
          </div>
        </div>
    </div>
</body>
</html>