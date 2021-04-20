<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('assets/css/doctor-profile.css') }}" />
</head>
<body>
    <div id="container" class="flex flex-col">
        <div id="page-title">
            <h2>User Count</h2>
        </div>
        <div id="doctor-id"></div>

        <div id="doctor-info" class="flex flex-row">
            <div id="doctor-label">
                <label for="name" name="name">Total Doctor: </label>
                <label for="email" name="email">Total Patient: </label>

            </div>
            <div id="doctor-details">
                <p id="name">{{ $doctorCount }}</p>
                <p id="email">{{ $patientCount }}</p>

            </div>
        </div>
        <div id="footer" class="flex flex-row flex-space-between">
            <a href="{{ route('admin.dashboard') }}">Back</a>
        </div>
    </div>
</body>
</html>
