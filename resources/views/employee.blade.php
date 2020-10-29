<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h2>Add Employee</h2>
            @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>{{Session::get('success')}}</strong>
            </div>
            @endif
                <form method="post" action="{{ URL::to('store-employee')}}">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text"  class="form-control" placeholder="Enter name" name="name">
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="email"  class="form-control" placeholder="Enter email" name="email">
                        
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of birth:</label>
                        <input type="date"  class="form-control" placeholder="Enter date" name="date_of_birth">
                       
                    </div>
                    <div class="form-group">
                        <label for="email">Salary:</label>
                        <input type="number"  class="form-control" placeholder="Enter salary" name="salary">
                        
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="radio" class="form-control" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio"  class="form-control" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>                                              
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Status</label>
                    </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary" href="{{ URL::to('list-emp') }}">Back</a>
                </form>
           </div>
        </div>
    </div>
</body>
</html>