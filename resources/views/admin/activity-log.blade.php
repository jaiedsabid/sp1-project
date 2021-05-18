<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Activity Log</title>
    <link rel="stylesheet" href="{{ asset('assets/css/patient-list.css') }}" />
</head>
<body>
<div id="container">
    <div id="page-title">
        <h2>Activity Log</h2>
    </div>
    <div id="back-btn">
        <a href="{{ route('admin.dashboard') }}">Back</a>
    </div>
    <div id="list">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Login At</th>
                <th>Login IP</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td>
                        {{ $doctor->id }}
                    </td>
                    <td>
                        {{ $doctor->name }}
                    </td>
                    <td>
                        {{ $doctor->last_login_at }}
                    </td>
                    <td>
                        {{ $doctor->login_ip }}
                    </td>
                    <td>
                        <b><a href="{{ route('admin.remove_doctor', $doctor->id) }}">Remove</a></b>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div id="message" class="flex flex-center msg">
            <span>{{ session('message') }}</span>
        </div>
        <div id="paginate" class="flex flex-center flex-space-evenly">
            <a href="{{ $doctors->previousPageUrl() }}"><< Prev</a>
            <a href="{{ $doctors->nextPageUrl() }}">Next >></a>
        </div>
    </div>
</div>
</body>
</html>
