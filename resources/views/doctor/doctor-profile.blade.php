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
            <h2>Profile</h2>
        </div>
        <div id="doctor-id">user id: {{ $user->id }}</div>
        <div id="doctor-img" class="flex flex-center">
            <img
                id="image"
                src="{{ asset(($user->image != null && $user->image != '' ? 'uploads/images/' . $user->image : 'assets/images/person.png')) }}"
                alt="Doctor Image"
            />
        </div>
        <div id="doctor-info" class="flex flex-row">
            <div id="doctor-label">
                <label for="name" name="name">Name: </label>
                <label for="degree" name="degree">Degree: </label>
                <label for="email" name="email">Email: </label>
                <label for="mobile" name="mobile">Mobile: </label>
                <label for="address" name="address">Address: </label>
                <label for="dob" name="dob">Date of birth: </label>
            </div>
            <div id="doctor-details">
                <p id="name">{{ $user->name }}</p>
                <p id="degree">{{ ($user->degree != null && $user->degree != '' ? $user->degree : "N/A") }}</p>
                <p id="email">{{ $user->email }}</p>
                <p id="mobile">{{ $user->mobile }}</p>
                <p id="address">{{ $user->address }}</p>
                <p id="dob">{{ $user->dob }}</p>
            </div>
        </div>
        <div id="footer" class="flex flex-row flex-space-between">
            <a href="{{ route('doctor.edit_profile') }}">Edit</a>
            <a href="{{ route('doctor.dashboard') }}">Back</a>
        </div>
    </div>
</body>
</html>
