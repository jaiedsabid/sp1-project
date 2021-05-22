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
          <a href="{{ route('admin.profile') }}">
            <div id="card-1" class="card flex flex-col flex-align-center flex-center">
              <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" />
                <p>Profile</p>
            </div>
          </a>
        </div>
        <div>
          <a href="{{ route('admin.totalUser') }}">
            <div id="card-2" class="card flex flex-col flex-align-center flex-center">
              <img src="{{ asset('assets/images/list.png') }}" alt="List" />
                <p>User Count</p>
            </div>
          </a>
        </div>
        <div>
          <a href="{{ route('admin.addView') }}">
              <div id="card-2" class="card flex flex-col flex-align-center flex-center">
                  <img src="{{ asset('assets/images/add-user.png') }}" alt="List" />
                  <p>Add Doctor/Patient</p>
              </div>
          </a>
        </div>
        <div>
          <a href="{{ route('admin.doc_activity') }}">
            <div id="card-4" class="card flex flex-col flex-align-center flex-center">
                <img src="{{ asset('assets/images/log.png') }}" alt="List" />
              <p>Activity Log</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
