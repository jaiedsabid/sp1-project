<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/signup.css" />
  </head>
  <body>
    <div class="container">
        <div class="doctor">
            <p>{{$page_name}}'s Registration</p>
        </div>

        <div class="title">
            <h3>Please Fill Your Details</h3>
        </div>

        <div class="form">

            <form method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-inp">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Full Name"
                    />
                    <input
                        type="text"
                        name="degree"
                        id="degree"
                        placeholder="Degree"
                    />
                </div>

                <div class="form-inp">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="example@example.com"
                    />
                    <input
                        type="text"
                        name="address"
                        id="address"
                        placeholder="Address"
                    />
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

                <div class="form-inp">
                    <input
                        type="text"
                        name="mobile"
                        id="mobile"
                        placeholder="Mobile"
                    />

                </div>

            Image
            <div class="form-inp custom-file-upload">
                <input
                type="file"
                name="image"
                id="image"
                />
            </div>

            Date Of Birth
            <div class="form-inp">
                    <input
                    type="date"
                    name="dob"
                    id="dob"
                    />
            </div>


            {{-- Gender
            <div class="gender">
                <div>
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male">
                </div>
                <div>
                    <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female">
                </div>
                <div>
                    <label for="other">Other</label>
                    <input type="radio" id="other" name="gender" value="other">
                </div>
            </div>

            <div class="specialization">
                <input type="text" name="specialization" id="" placeholder="specialization">
            </div> --}}

            <p>
                By clicking SignUp you agree to our Terms, Data Policy. You may recive sms notification and
                can opt out at any time.
            </p>
            <div style="color: red">
                @foreach($errors->all() as $err)
                {{$err}} <br>
                @endforeach
            </div>
            <div class="buttons">
                <input type="submit" value="Sign Up" name="submit" />
                <a href="{{ route('login') }}"><input type="button" value="Back" name="signup" /></a>
            </div>
            </form>
        </div>


    </div>
  </body>
</html>
