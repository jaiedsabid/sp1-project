<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Patient details</title>
    <link rel="stylesheet" href="{{ asset('assets/css/add-patient.css') }}" />
    <script src="https://cdn.tiny.cloud/1/osifzy9kgs9o918jd7gs07lvovmwsjbapuvonm5r976lrn3k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
<div id="container" class="flex flex-col">
    <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col">
        @csrf
        <div id="page-title">
            <h2>Edit Patient details</h2>
        </div>
        <div id="add-patient">
            <div class="input-group m-top">
                <label for="name">Name: </label>
                <input class="pos-right" type="text" name="name" value="{{ $patient->name }}">
            </div>
            <div class="input-group m-top">
                <label for="age">Age: </label>
                <input class="pos-right" type="text" name="age" value="{{ $patient->age }}">
            </div>
            <div class="input-group m-top">
                <label for="mobile">Mobile: </label>
                <input class="pos-right" type="text" name="mobile" value="{{ $patient->mobile }}">
            </div>
            <div class="input-group m-top">
                <label for="address">Address: </label>
                <input class="pos-right" type="text" name="address" value="{{ $patient->address }}">
            </div>
            <div class="input-group m-top">
                <label for="image">Image: </label>
                <input class="pos-right" type="file" name="image">
            </div>
            <div class="input-group m-top">
                <label for="name">Problem: </label> <br>
                <textarea name="problem" id="problem" cols="40" rows="18">
                    {!!$patient->problem!!}
                </textarea>
            </div>
        </div>
        <div class="message flex flex-center m-top">
            {{ session('message') }}
            <div class="errors">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        </div>
        <footer id="footer" class="flex flex-row flex-space-between">
            <a href="{{ route('doctor.patient_list') }}">Back</a>
            <input class="button" type="submit" value="Update" name="submit">
        </footer>
    </form>
</div>
<script>
    tinymce.init({
        selector: '#problem',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });
</script>
</body>
</html>
