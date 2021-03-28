<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/dashboard.css" />
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
          <a href="#">
            <div id="card-1" class="card flex flex-row-wrap flex-align-center">
              <img src="assets/images/profile.png" alt="Profile" />
            </div>
          </a>
        </div>
        <div>
          <a href="#">
            <div id="card-1" class="card flex flex-row-wrap flex-align-center">
              <img src="assets/images/list.png" alt="List" />
            </div>
          </a>
        </div>
        <div>
          <a href="#">
            <div id="card-1" class="card flex flex-row-wrap flex-align-center">
              <p>Coming Soon...</p>
            </div>
          </a>
        </div>
        <div>
          <a href="#">
            <div id="card-1" class="card flex flex-row-wrap flex-align-center">
              <p>Coming Soon...</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
