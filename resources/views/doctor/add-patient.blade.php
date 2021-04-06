<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient's Profile</title>
    <link rel="stylesheet" href="{{ asset('assets/css/patient-profile.css') }}" />
</head>
<body>
<div id="container" class="flex flex-col">
    <div id="page-title">
        <h2>Patient's Profile</h2>
    </div>
    <div id="add-patient">

    </div>
    <div id="footer" class="flex flex-row flex-space-between">
        <a href="{{ url()->previous() }}">Back</a>
    </div>
</div>
</body>
</html>
