<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $fill=$_POST['fillQuestion'];
        $servername="localhost";
        $username="root";
        $password="";
        $database="registration-quiz";
        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Sorry we are failed to connect");
        }
   
    $sql="INSERT INTO `fillblanks` (`sno`, `fillQuestion`) VALUES (NULL, '$fill')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
      echo "Not sent successfully";
    }
 }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questions-Upload</title>
    <link rel="stylesheet" href="questions.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Quiz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Quiz Type
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="questions.php">MCQs</a></li>
                            <li><a class="dropdown-item" href="fillIn.php">Fill in the blanks</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <a href="logout.php" class="btn btn-outline-success">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    <br> <br>
    <div class="container">
        <div>
            <h1 class="heading">Wants to upload questions...?</h1>
        </div> <br> <br>
        <div>
            <h3>You can upload your questions here ... !! </h3> <br>
        </div>

        <form action="fillIn.php" method="post">
            <div>
                <input type="text" class="form-control" id="fillQuestion" placeholder="Enter Question"
                    name="fillQuestion">
                <p class="text-grey">Make sure once you add Question. you can't return back </p>
            </div>
            <div>
                <div class="col-sm-2" id="optionsContainer"></div>
            </div>
            <button type="submit" onclick="addMCQ()" class="btn btn-secondary">Add Question</button>
        </form>
        <div id="mcqDisplay"></div>
    </div>
    <script src="fillIn.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>