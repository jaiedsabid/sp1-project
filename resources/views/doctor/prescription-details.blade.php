<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prescription Details</title>
    <link rel="stylesheet" href="{{ asset('assets/css/patient-profile.css') }}" />
  </head>
  <body>
    <div id="container" class="flex flex-col">
      <div id="page-title">
        <h2>Prescription Details</h2>
      </div>
      <div id="prescription-details" class="flex flex-col">
          <div class="info-group m-left">
              <p><b>Prescription ID: </b> {{ $prescription->id }}</p>
          </div>
          <div class="info-group m-left">
              <p><b>Prescribed By: </b> {{ $prescription->doctor->name }}</p>
          </div>
          <div class="info-group m-left">
              <p><b>Patient Name: </b> {{ $prescription->patient->name }}</p>
          </div>
          <div class="info-group m-left">
              <p><b>Date: </b> {{ $prescription->created_at }}</p>
          </div>
          <div class="info-group m-left">
              <p><b>Medicine and times:</b></p>
              <p>{!! $prescription->prescriptions !!}</p>
          </div>
          <div id="footer" class="flex flex-row flex-space-between">
              <a href="{{ route('doctor.prescription_remove', [$prescription->patient->id, $prescription->id]) }}">Remove</a>
              <a href="{{ url()->previous() }}">Back</a>
          </div>
      </div>
    </div>
  </body>
</html>
