<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prescription list</title>
    <link rel="stylesheet" href="{{ asset('assets/css/patient-list.css') }}" />
  </head>
  <body>
    <div id="container">
      <div id="page-title">
        <h2>Prescription list</h2>
      </div>
      <div id="back-btn">
        <a href="{{ route('doctor.patient_details', $patient_id) }}">Back</a>
        <a href="{{ route('doctor.prescription_add', $patient_id) }}">Create</a>
      </div>
      <div id="list">
        <table>
          <thead>
            <tr>
                <th>ID</th>
                <th>Prescribed By</th>
                <th>Date</th>
            </tr>
          </thead>
          <tbody>
          @foreach($prescriptions as $prescription)
            <tr>
                <td>
                  <a href="{{ route('doctor.prescription_details', [$prescription->patient->id, $prescription->id]) }}">{{ $prescription->id }}</a>
                </td>
                <td>
                  <a href="{{ route('doctor.prescription_details', [$prescription->patient->id, $prescription->id]) }}">{{ $prescription->doctor->name }}</a>
                </td>
                <td>
                  <a href="{{ route('doctor.prescription_details', [$prescription->patient->id, $prescription->id]) }}">{{ $prescription->created_at }}</a>
                </td>
            </tr>
          @endforeach
          </tbody>
        </table>
          <div id="message" class="flex flex-center msg">
              <span>{{ session('message') }}</span>
          </div>
        <div id="paginate" class="flex flex-center flex-space-evenly">
          <a href="{{ $prescriptions->previousPageUrl() }}"><< Prev</a>
          <a href="{{ $prescriptions->nextPageUrl() }}">Next >></a>
        </div>
      </div>
    </div>
  </body>
</html>
