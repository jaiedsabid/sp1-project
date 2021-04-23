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
      <div id="patient-id">patient id: {{ $patient->id }}</div>
      <div id="patient-img" class="flex flex-center">
        <img id="image"
             src="{{ ($patient->image != null && $patient->image != '' ?
                    asset('uploads/images/' . $patient->image) : asset('assets/images/person.png')) }}"
             alt="Patient Image"
        />
      </div>
      <div id="patient-info" class="flex flex-row">
        <div id="patient-label">
          <label for="name" name="name">Name: </label>
          <label for="age" name="age">Age: </label>
          <label for="mobile" name="mobile">Mobile: </label>
          <label for="address" name="address">Address: </label>
          <label for="problem" name="problem">Problem: </label>
        </div>
        <div id="patient-details">
          <p id="name">{{ $patient->name }}</p>
          <p id="age">{{ $patient->age }}</p>
          <p id="mobile">{{ $patient->mobile }}</p>
          <p id="address">{{ $patient->address }}</p>
          <p id="problem">{!! $patient->problem !!}</p>
        </div>
      </div>
      <div id="footer" class="flex flex-row flex-space-between">
        <a href="{{ route('doctor.prescriptions', $patient->id) }}">Medical Reports</a>
        <a href="{{ route('doctor.edit_patient', $patient->id) }}">Edit</a>
        <a href="{{ route('doctor.remove_patient', $patient->id) }}">Remove</a>
        <a href="{{ route('doctor.patient_list') }}">Back</a>
      </div>
    </div>
    <script>
      let prob = document.querySelector('label[name="problem"]');
      let addr = document.getElementById("address");
      if (addr.offsetHeight > 19) {
        prob.style.marginTop = addr.offsetHeight - 1 + "px";
      }
    </script>
  </body>
</html>
