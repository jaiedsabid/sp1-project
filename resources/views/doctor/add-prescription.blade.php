<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Prescription</title>
    <link rel="stylesheet" href="{{ asset('assets/css/add-patient.css') }}" />
    <script src="https://cdn.tiny.cloud/1/osifzy9kgs9o918jd7gs07lvovmwsjbapuvonm5r976lrn3k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <body>
    <div id="container" class="flex flex-col">
      <div id="page-title">
        <h2>Add Prescription</h2>
      </div>
        <div class="add-prescription">
            <form action="" method="post">
                @csrf
                <div class="input-group m-top">
                    <label for="prescription"><b>Prescription:</b></label>
                    <br><br>
                    <textarea name="prescription" id="prescription" cols="30" rows="30">
                    </textarea>
                </div>
                <div class="message">
                    {{ session('message') }}
                </div>
                <div id="footer" class="flex flex-row flex-space-between">
                    <button class="button" type="submit" value="Add" name="submit">Add</button>
                    <a href="{{ route('doctor.prescriptions', auth()->user()->getAuthIdentifier()) }}">Back</a>
                </div>
            </form>
        </div>
      </div>
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
