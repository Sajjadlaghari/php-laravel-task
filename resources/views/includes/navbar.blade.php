<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ public_path('/assets/css/styles.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <a class="navbar-brand" href="{{route('employees')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('employees')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('employees/create') }}" class="btn btn-success">Add Employee</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('employees') }}" class="btn btn-success">Employee List</a>

                </li>

                </li>
                <li class="nav-item flex-end">
                    <a class="nav-link " href="{{ url('logout') }}">logout</a>
                </li>
            </ul>

        </div>
    </nav>


    </div>