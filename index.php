<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Website-Mini Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a href='index.php'><img src="https://blog.hubspot.com/hubfs/google-quiz.jpg" class="quiz" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">                 
                     <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Quiz Type   
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">MCQs</a></li>
                            <li><a class="dropdown-item" href="#">Fill in the blanks</a></li>
                            <li><a class="dropdown-item" href="puzzel.html">Puzzle Quiz</a></li>
                            <li><a class="dropdown-item" href="#">IQ Tests</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#help">Help/FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#feedback">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">AboutUs</a>
                    </li>
                </ul>
                <ul>
                    <a class="d-flex" role="search">
                        <a href="login.php" ><button class="btnn btnn-primary" type="submit">Log in </button></a>
                        <a href="signupUser.php" ><button class="btnn btnn-secondary" type="submit">Sign Up</button></a>
                    </a>
                    </ul>        
            </div>  
        </div>
    </nav>

    <div class="content-page" id="home">
        <div>
            <p>
            <h1> 🎉 Hello Quiz Enthusiasts! 🎉 </h1> <br>
            Whether you're here to test your knowledge, challenge your friends, or discover something new, we're
            thrilled to have you on board! At Your Quiz Website, we believe that learning and having fun can go
            hand in hand. <br><br>
            🧠 Ready to embark on a journey of curiosity and excitement? Discover your strengths,
            challenge your mind, and maybe even uncover a hidden talent or two!
            <br><br>
            🌟 Why Choose our Quiz Website? <br><br>

            Our Quiz websites is free to use, providing a cost-effective form of education for a wide audience...
            <br> <br>
            Quiz websites offer diverse quiz formats, including multiple-choice questions, true/false statements...
            <br><br>

            <b> Don't miss out on the fun! Click the "Login" button to get started, and let the adventure begin! </b>
            <br><br>
            <b> 🚀 Happy quizzing! </b>
            <br><br>
            Feel free to personalize this message based on the specific features and vibes of your quiz website.</p>
        </div>
        <div>
            <img src="question.jpg" class="rounded float-end" alt="Unable to load this image">
        </div>
    </div>
    <div id="help">
        <div class="help-page">
            <h1>New to Quiz Web? </h1> <br>
            <div>
                <img src="help.png" class="rounded float-start" alt="Unable to open this image">
            </div>
            <div>
                <p>A well-crafted help menu is essential for guiding users and addressing any queries they may have
                    while using your quiz website.</p>
                <p><b>Getting started : </b>Started with firstly creating a new account, if you are not ever signed up.
                </p>
                <p><b>Existing user: </b>If you are already a existing user, then please login to enjoy features of our
                    website</p>
                <p>From the above navbar, you can <b>Login</b> and <b>SignUp</b> to quiz website</p>
                <p><b>Admin:</b> If you are admin of quiz contest, then you can add quizzes as
                    according to your choice like fill in th blanks / true or False / Multiple Choice Question</p>
                <p><b>User:</b> If you are user of any quiz contest, then you have to solve quizzes of your panel as
                    given per your admin <br>
                </p>
                <p>For any furthur enquiry, you can contact to our team by giving feedback . Our team members provide
                    you all type of
                    support you need regarding the quizzes. </p>
                <p>A comprehensive and user-friendly help menu can significantly enhance the overall user experience.
                </p>
            </div>
        </div>
    </div>

    <div id="feedback">
        <h1>FeedBack</h1>
        <div class="content-feedback">
            <div>
                <img src="feedback.jpg" alt="">
            </div>
            <div>
                <form action="index.php" method="post">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" maxlength="100" name="feedback1"
                            placeholder="What did you enjoy the most about using our quiz platform?">
                    </div>
                    <div class="form-group  mb-3">
                        <input type="text" class="form-control" maxlength="100" name="feedback2"
                            placeholder="Did you find a variety of quizzes that matched your interests?">
                    </div>
                    <div class="form-group  mb-3">
                        <input type="text" class="form-control" maxlength="100" name="feedback3"
                            placeholder="What improvements would you suggest to enhance community interactions?">
                    </div>
                    <div class="form-group  mb-3">
                        <input type="text" class="form-control" maxlength="100" name="feedback4"
                            placeholder="Is there anything else you would like to share about your experience with our quiz website?">
                    </div>
                    <div class="form-group  mb-3">
                        <input type="text" class="form-control" maxlength="100" name="feedback5"
                            placeholder="Are there any features or functionalities you feel are lacking on our website?">
                    </div>
                    <div class="form-group  mb-3">
                        <input type="text" class="form-control" maxlength="100" name="feedback6"
                            placeholder="Any other suggestion...?">
                    </div>
                    <button type="submit" class="btn btn-light">Submit</button>
            </div>
            </form>
            <?php
                include "connect.php";
            ?>

        </div>
    </div>
    <br>
    <div id="about">
        <h1>Our Team Members</h1> <br> <br>
        <div class="content-about">
            <div class="card mb-3 me-4 p-4 namecard"
                style="max-width: 540px; box-shadow: 8px 8px 8px rgb(104, 99, 99); cursor: pointer;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./astha.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h5>Astha singh</h5>
                        <p>Hello! I'm Astha singh , a versatile and passionate Fullstack developer with a robust skill of strong
                            foundation in both backend and front-end technologies.</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3 me-4 p-4 namecard"
                style="max-width: 540px; box-shadow: 8px 8px 8px rgb(104, 99, 99); cursor: pointer;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="bharat.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h5>Bharat Kumar</h5>
                        <p>Hello! I'm Bharat Kumar, a detail-oriented front-end developer dedicated to crafting visually compelling and user-friendly web experiences.</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3 me-4 p-4 namecard"
                style="max-width:540px; box-shadow: 8px 8px 8px rgb(104, 99, 99); cursor: pointer;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="manish.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h5>Manish kumar</h5>
                        <p>I'm Manish Kumar combines a passion for learning and implementing cutting-edge technologies, seeking to build intuitive and visually appealing web interfaces.</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3 me-4 p-4 namecard"
                style="max-width: 540px; box-shadow: 8px 8px 8px rgb(104, 99, 99); cursor: pointer;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="yogita.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <h5>Yogita</h5>
                        <p> I'm Yogita a front-end developer , creating visually stunning and user-centric web interfaces with expertise in HTML, CSS, and JavaScript.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="footer" style="text-align: center; height: 10vh; margin-top: 1em;">
        <p>@madebyteamMembers</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>