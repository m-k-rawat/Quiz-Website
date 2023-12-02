<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions--UserPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body>
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
                        <a class="nav-link dropdown-toggle disabled" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Quiz Type
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">MCQs</a></li>
                            <li><a class="dropdown-item" href="#">Fill in the blanks</a></li>
                        </ul>
                    </li>
                  
                </ul>
                <a href="logout.php" class="btn btn-outline-success m-1">Logout</a>
            </div>
        </div>
    </nav>
    <form action="userQuestionFill.php" method="post">
    <?php
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration-quiz";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check the connection
    if (!$conn) {
        die("Connection failed: ");
    }
    // Query to retrieve questions
    $sql="SELECT * FROM `fillblanks`";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
        if($num>0){
            while($row=mysqli_fetch_assoc($result)){
                echo ' <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-2 mx-auto">
                    <div class="-my-8 divide-y-2 divide-gray-100">
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                <span class="font-semibold title-font text-gray-700">QUESTION</span>
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><p> '. $row["fillQuestion"]. '</p>
                                </h2>
                                
                            </div>
                        </div>          
                    </div>
                </div>
            </section> ';
        }
    } else {
        echo "Not uploaded any questions yet";
    }
    ?>
    <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Enter your Details here</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Fill up the details...</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Your Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Enter above questions, answer here....</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</section>
  </form>
<?php
     if($_SERVER['REQUEST_METHOD']=='POST'){
      $name=$_POST['name'];
      $answer=$_POST['message'];
      $sql2="INSERT INTO `fillupuser` (`name`, `answers`) VALUES ('$name', '$answer');";
      $result2=mysqli_query($conn,$sql2);
      if($result2){   
         echo "Answers submitted succesfully";
      }
      }
    ?>
 
</body>

</html>