<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patients list</title>
    <link rel="stylesheet" href="{{ asset('assets/css/patient-list.css') }}" />
  </head>
  <body>
    <div id="container">
      <div id="page-title">
        <h2>Patients list</h2>
      </div>
      <div id="back-btn">
        <a href="{{ route('doctor.dashboard') }}">Back</a>
      </div>
      <div id="list">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Mobile</th>
            </tr>
          </thead>
          <tbody>
          @foreach($patients as $patient)
            <tr>
              <td>
                  <a href="{{ route('doctor.patient_details', $patient->id) }}">{{ $patient->id }}</a>
              </td>
              <td>
                  <a href="{{ route('doctor.patient_details', $patient->id) }}">{{ $patient->name }}</a>
              </td>
              <td>
                  <a href="{{ route('doctor.patient_details', $patient->id) }}">{{ $patient->mobile }}</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <div id="paginate" class="flex flex-center flex-space-evenly">
          <a href="{{ $patients->previousPageUrl() }}"><< Prev</a>
          <a href="{{ $patients->nextPageUrl() }}">Next >></a>
        </div>
      </div>
    </div>
  </body>
</html>
