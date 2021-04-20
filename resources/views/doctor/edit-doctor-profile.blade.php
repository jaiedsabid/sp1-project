<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('assets/css/edit-doctor-profile.css') }}" />
</head>
<body>
<div id="container" class="flex flex-col">
    <div id="page-title">
        <h2>Edit Profile</h2>
    </div>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="form flex flex-col">
            <div class="input-group">
                <label for="name">Name: </label>
                <input value="{{ $doctor->name }}" type="text" name="name">
            </div>
            <div class="input-group">
                <label for="degree">Degree: </label>
                <input value="{{ $doctor->degree }}" type="text" name="degree">
            </div>
            <div class="input-group">
                <label for="email">Email: </label>
                <input value="{{ $doctor->email }}" type="email" name="email">
            </div>
            <div class="input-group">
                <label for="password">Password: </label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <label for="password_confirmation">Confirm Password: </label>
                <input type="password" name="password_confirmation">
            </div>
            <div class="input-group">
                <label for="address">Address: </label>
                <input value="{{ $doctor->address }}" type="text" name="address">
            </div>
            <div class="input-group">
                <label for="mobile">Mobile: </label>
                <input value="{{ $doctor->mobile }}" type="tel" name="mobile">
            </div>
            <div class="input-group">
                <label for="dob">Birth Date: </label>
                <input value="{{ $doctor->dob }}" type="date" name="dob">
            </div>
            <div class="input-group">
                <label for="image">Image: </label>
                <input type="file" name="image">
            </div>
            <div class="message">
                <div class="error">
                    @foreach($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                    {{ session('error') }}
                </div>
                <div class="success">
                    {{ session('success') }}
                </div>
            </div>
            <div id="footer" class="flex flex-row flex-space-between">
                <button name="submit">Update</button>
                <a href="{{ route('doctor.profile') }}">Back</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
