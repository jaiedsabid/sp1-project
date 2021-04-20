<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="logo">
        <img src="assets/images/logo.svg" alt="logo" />
      </div>

      <div class="title">
        <h3>Signin with your id number</h3>
      </div>

      <div class="form">
        <form method="post">
            @csrf
          <input
            type="text"
            name="email"
            id="email"
            value="{{ old('email') }}"
            placeholder="example@example.com"
          />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
          />
            <div id="errors">
                @foreach($errors->all() as $error)
                {{ $error }}
                @endforeach
            </div>
            @if(Request::is('adminlogin'))

                <div class="buttons">
                    <input type="submit" value="Log in" name="submit" />
                    <a href="{{ route('root') }}">Back</a>
                </div>

            @endif
            @if(Request::is('login'))

            <div class="buttons">
                <input type="submit" value="Log in" name="submit" />
                <a href="{{ route('signup') }}">Signup</a>
                <a href="{{ route('root') }}">Back</a>
            </div>
            @endif

        </form>
      </div>

      <div class="forget-password">
        <a href="#">Can't access your account?</a>
      </div>
    </div>
  </body>
</html>
