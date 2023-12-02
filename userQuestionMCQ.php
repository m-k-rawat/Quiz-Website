<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration-quiz";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Sorry we are failed to connect to the database";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FillUP Types Questions</title>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle disabled" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                    Quiz Type </a>
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
    <div class="container ">
        <form action="userQuestionMCQ.php" method="post">
       <?php
       $sql = "SELECT * FROM `questions`";
       $result =mysqli_query($conn,$sql);
       $num=mysqli_num_rows($result);
       if($num>0){
        while($row=mysqli_fetch_assoc($result)){
        echo '
        <section class="text-gray-600 body-font ">
         <div class="container px-5 py-7 mx-auto">
           <div class="flex flex-col text-center w-full">
           <div class="input-group input-group-lg">
              <span class="input-group-text" id="inputGroup-sizing-lg"  >Question</span>
              <h2 class="text-gray-900 p-2 text-lg title-font font-medium"> '.$row["question"].'</h2>
           </div>
           </div>
             <div class="w-1/3 m-7 ">
               <div class="flex rounded-lg h-full bg-gray-100 flex-col">
                 <div class="flex items-center">
                 <div class="input-group-text">
                  <input class="form-check-input mt-0" type="radio" value="option1" name="optionss">
                 </div>
                   <h2 class="text-gray-900 p-2 text-lg title-font font-medium"> Option1: '.$row["options1"].'</h2>
                 </div>
               </div>
             </div>
             <div class="w-1/3 m-7 ">
             <div class="flex rounded-lg h-full bg-gray-100 flex-col">
               <div class="flex items-center">
               <div class="input-group-text">
                   <input class="form-check-input mt-0" type="radio" value="option2" name="optionss">
               </div>
                 <h2 class="text-gray-900 p-2 text-lg title-font font-medium" > Option2: '.$row["options2"].'</h2>
               </div>
             </div>
           </div>
           </div>
           </div>
         </div>
       </section>
        <div class="text-center form-text">You have to submit particular answer by answer....</div>
       <div class="w-1/3 ml-12">
       <button type="submit" class="btn btn-secondary mx-auto">Submit answer</button>
       </div> ';
       }
    }
      else{
        echo "Ask admin to upload questions";
       }

       if($_SERVER['REQUEST_METHOD']=='POST'){
            
            $mcqanswer=$_POST['optionss'];
            $sql="INSERT INTO `mcq-answer` ( `optionss`) VALUES ( '$mcqanswer');";
            $result=mysqli_query($conn,$sql);
            if(!$result){
                echo "Data not succesfully sent to the database. Reload the page and try again !! ";
            }
    }
       ?> 
    </form>
    </div>

</body>
</html>