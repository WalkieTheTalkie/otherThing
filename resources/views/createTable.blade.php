<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Tracker App</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Santa Clause</div>
        <div class="list-group list-group-flush">
            <a href="http://127.0.0.1:8000/home" class="list-group-item list-group-item-action bg-light">Home</a>
            <a href="http://127.0.0.1:8000/sort" class="list-group-item list-group-item-action bg-light">Sort</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Account Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <h1 class="mt-4">Add Student</h1>
            <form action="/home" method="post">
                @csrf
                    First Name: <input type="text"
                                       name="name"
                                       value="{{old('name')}}">
                <p style="color:red">{{$errors->first('name')}}</p>
                    Last Name: <input type="text"
                                   name="last_name"
                                   value="{{old('last_name')}}" >
                <p style="color:red">{{$errors->first('last_name')}}</p>

               Status: <select name="graduated">
                    <option value = "0">Not Graduated</option>
                    <option value = "1">Graduated</option>
                </select>
<br/>
                <br/>Major: <input type='text'
                              name='Major'
                              value="{{old('Major')}}">
                <p style="color:red">{{$errors->first('Major')}}</p>

                Year of Graduation: <input type="text" name="realboys">
                <p style="color:red">{{$errors->first('realboys')}}</p>
                <input type="submit" value="add">
            </form>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
