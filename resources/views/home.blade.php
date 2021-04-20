<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" />
  </head>
  <body>
    <div id="container">
      <div id="page-title">
        <h2>Home Page</h2>
      </div>

      @auth
        <div id="logout-btn">
            <a href="{{ route('logout') }}">Logout</a>
        </div>


        <div id="cards" class="flex flex-row-wrap flex-space-evenly">
            <div>
            <a href="{{route('doctor.dashboard')}}">
                <div id="card-1" class="card flex flex-col flex-align-center flex-center">
                <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" />
                    <p>Doctor Dashboard</p>
                </div>
            </a>
            </div>
        </div>
      @endauth

      @guest
        @if (Auth::guard('admin')->check())
                <div id="logout-btn">
                    <a href="{{ route('logout') }}">Logout</a>
                </div>


                <div id="cards" class="flex flex-row-wrap flex-space-evenly">
                    <div>
                    <a href="{{route('admin.dashboard')}}">
                        <div id="card-1" class="card flex flex-col flex-align-center flex-center">
                        <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" />
                            <p>Admin Dashboard </p>
                        </div>
                    </a>
                    </div>
                </div>
            @else
                <div id="cards" class="flex flex-row-wrap flex-space-evenly">
                    <div>
                    <a href="{{route('adminlogin')}}">
                        <div id="card-1" class="card flex flex-col flex-align-center flex-center">
                        <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" />
                            <p>Login As An Admin </p>
                        </div>
                    </a>
                    </div>
                    <div>
                    <a href="{{route('login')}}">
                        <div id="card-2" class="card flex flex-col flex-align-center flex-center">
                            <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" />
                            <p>Login As A Doctor</p>
                        </div>
                    </a>
                    </div>

                </div>
            @endif

        @endguest

    </div>
  </body>
</html>




