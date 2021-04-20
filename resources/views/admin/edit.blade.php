<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/signup.css')}}" />
  </head>
  <body>
      <br><br><br><br><br>
    <div class="container">
        <div class="doctor">
            <p>Admin Edit</p>
        </div>

        <div class="title">
            <h3>Please Fill Your Details</h3>
        </div>

        <div class="form">

            <form method="post"  enctype="multipart/form-data" action="{{route('admin.storeEdit')}}">
                @csrf

                <div class="form-inp">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="anik"
                    style="width: 200em"/>
                </div>

                <div class="form-inp">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="example@example.com"
                    style="width: 200em"/>
                </div>

                <div class="form-inp">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                    />
                    <input
                        type="password"
                        name="con_password"
                        id="con_password"
                        placeholder="Confirm Password"
                    />
                </div>



            <div style="color: red">
                @foreach($errors->all() as $err)
                {{$err}} <br>
                @endforeach
            </div>
            <div class="buttons">
                <input type="submit" value="Update Profile" name="submit" style="width: 10em"/>
               <a href="{{route('admin.profile')}}"><input type="button" value="Back" name="signup" /></a>
            </div>
            </form>
        </div>


    </div>
  </body>
</html>
