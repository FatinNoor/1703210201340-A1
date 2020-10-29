<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h2>Employee list</h2> 
        </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date_of_birth</th>
                    <th>Salary</th>
                    <th>Gender</th>
                    <th>status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employee as $e)
                <tr>
                    <td>{{ $e->name}}</td>
                    <td>{{ $e->email}}</td>
                    <td>{{ $e->date_of_birth}}</td>
                    <td>{{ $e->salary}}</td>
                    <td>{{ $e->gender}}</td>
                    <td>{{ $e->status}}</td>
                </tr>

                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ URL::to('employee') }}">Back</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>