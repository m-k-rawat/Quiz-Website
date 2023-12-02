<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
    header("location:login.php");
    exit;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Quiz Contest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
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
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Quiz Type
                        </a>
                        <ul class="dropdown-menu active">
                            <li><a class="dropdown-item" href="userQuestionMCQ.php">MCQs</a></li>
                            <li><a class="dropdown-item" href="userQuestionFill.php">Fill in the blanks</a></li>
                        </ul>
                    </li>    
                </ul>
                <a href="logout.php" class="btn btn-outline-success m-1">Logout</a>
            </div>
        </div>
    </nav>
    <div>
    <section class="text-white-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="mcq.jpg">
            </div>
            <h2 class="title-font text-2xl font-medium text-white-900 mt-6 mb-3">MCQ's Question</h2>
            <p class="leading-relaxed text-base">Wants to participate in MCQ type Quiz.</p>
            <a href="userQuestionMCQ.php"><button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Start Now</button></a>
          </div>
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="fillinblanks.jpg">
            </div>
            <h2 class="title-font text-2xl font-medium text-white-900 mt-6 mb-3">Fill in the Blanks</h2>
            <p class="leading-relaxed text-base">Wants to participate in Fill in the blanks type Quiz</p>
            <a href="userQuestionFill.php"><button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Start Now</button></a>
          </div>
        </div>
      </div>
</section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>