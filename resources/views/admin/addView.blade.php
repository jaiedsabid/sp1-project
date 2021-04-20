<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/doctor-profile.css') }}" />
  </head>
  <body>
    <div id="container">
      <div id="page-title">
        <h2>Dashboard</h2>
      </div>
      <div id="logout-btn">
        <a href="{{ route('logout') }}">Logout</a>
      </div>
        <div id="cards" class="flex flex-row-wrap flex-space-evenly">


            <div>
                <a href="{{ route('admin.addDoctor') }}">
                    <div id="card-2" class="card flex flex-col flex-align-center flex-center">
                        <img src="{{ asset('assets/images/add-user.png') }}" alt="List" />
                        <p>Add Doctor</p>
                    </div>
                </a>
            </div>

            <div>
                <a href="{{ route('admin.addView') }}">
                    <div id="card-2" class="card flex flex-col flex-align-center flex-center">
                        <img src="{{ asset('assets/images/add-user.png') }}" alt="List" />
                        <p>Add Patient</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="footer" class="flex flex-row flex-space-between">
            <a href="{{ route('admin.dashboard') }}">Back</a>
        </div>

      </div>
    </div>
  </body>
</html>
