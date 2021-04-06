<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />
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
          <a href="{{ route('doctor.profile') }}">
            <div id="card-1" class="card flex flex-col flex-align-center flex-center">
              <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" />
                <p>Profile</p>
            </div>
          </a>
        </div>
        <div>
          <a href="{{ route('doctor.patient_list') }}">
            <div id="card-2" class="card flex flex-col flex-align-center flex-center">
              <img src="{{ asset('assets/images/list.png') }}" alt="List" />
                <p>Patient list</p>
            </div>
          </a>
        </div>
        <div>
          <a href="{{ route('doctor.add_patient') }}">
              <div id="card-2" class="card flex flex-col flex-align-center flex-center">
                  <img src="{{ asset('assets/images/add-user.png') }}" alt="List" />
                  <p>Add Patient</p>
              </div>
          </a>
        </div>
        <div>
          <a href="#">
            <div id="card-4" class="card flex flex-col flex-align-center flex-center">
              <p>Coming Soon...</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
