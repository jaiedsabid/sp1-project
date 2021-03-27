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
            <p>Doctor's Registration</p>
        </div>

        <div class="title">
            <h3>Please Fill Your Details</h3>
        </div>

        <div class="form">

            <form method="get">
                <div class="form-inp">
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="User Name"
                    />
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                    />
                </div>

                <div class="form-inp">
                    <input
                        type="text"
                        name="mobile_no"
                        id="mobile_no"
                        placeholder="Mobile No"
                    />
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
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


            Gender
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
            </div>

            <p>
                By clicking SignUp you agree to our Terms, Data Policy. You may recive sms notification and
                can opt out at any time.
            </p>

            <div class="buttons">
                <input type="submit" value="Sign Up" name="submit" />
                <input type="button" value="Back" name="signup" />
            </div>
            </form>
        </div>
    </div>
  </body>
</html>
