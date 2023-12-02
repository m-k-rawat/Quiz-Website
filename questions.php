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
                            <li><a class="dropdown-item" href="#">MCQs</a></li>
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
        <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="registration-quiz";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
      die("Sorry we are failed to connect".mysqli_connect_error());
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $questionName=$_POST['dataToSend'];
        $options1=$_POST['option1'];
        $options2=$_POST['option2'];
        $sql= "INSERT INTO `questions` (`question`, `options1`, `options2`) VALUES ('$questionName', '$options1', '$options2');";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo"Failed to sent data to the server";
        }
    }
?>
        <div>
            <h1 class="heading">Wants to upload questions...?</h1>
        </div> <br>
        <div>
            <h3>You can upload your questions here ... !! </h3> <br>
        </div>
        <form action="questions.php" method="post" id="mcqForm">
            <div>
                <input type="text" class="form-control" id="question" placeholder="Enter Question" name="dataToSend">
            </div>
            <div><br>
                <div class="col-sm-2" id="optionsContainer"></div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Option1:</span>
                <input type="text" class="form-control" name="option1" placeholder="Enter Option1">
                <span class="input-group-text">Option2:</span>
                <input type="text" class="form-control" name="option2" placeholder="Enter Option2">
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>