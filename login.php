
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-QuizWebsite</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css">
</head>

<body>
    <div class="container">
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="registration-quiz";
        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Sorry we are failed to connect");
        }
        $login=false;
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $usernamee=$_POST['usernamee'];
                $password=$_POST['password'];
                $sql="SELECT * FROM `user-register` where username='$usernamee' AND password='$password' ";
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if($num==1){
                    $login=true;
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$usernamee;
                    header("location:choose.php");
                }else{
                    echo "Invalid credentials";
                }
    }
    ?>
        <div class="box">
            <?php
             if($login){
                echo "You are logged in";
            }
            ?>
            <form action="login.php" method="post" class="form-box">
                <h2>LOGIN</h2>
                <div class="input-box">
                    <i class="fa-solid fa-lock" style="color: #e2e3e4;"></i>
                    <label for="Username">Username</label>
                    <input type="text" required placeholder="Enter UserName" name="usernamee">

                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <label for="password">Password</label>
                    <input type="password" required name="password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="newac">
                    <p>Don't have an account ? <a href="signup.php"> Create an account</a></p>
                </div>
            </form>
            <div class="info">
                <h1>Welcome Back! </h1> <br>
                <p>Unlock the gateway to knowledge! 🚪🔐 Welcome to the <br> quiz realm – where curiosity meets login. 🌐✨ </p>
            </div>
        </div>
    </div>
</body>

</html>