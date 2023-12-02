<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-QuizWebsite</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usernamee=$_POST['usernamee'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];
       
        //  CHECK WHETHER USERNAME EXISTS OR NOT
        $existSql="SELECT * FROM `user-register` where username='$usernamee' ";
        $result=mysqli_query($conn,$existSql);
        $numExistUser=mysqli_num_rows($result);
       if($numExistUser>0){
            $exist=true;
        }else{
            $exist=false;
            header("location:choose.php");
        }

      // SUBMIT THESE TO THE DATABASE
      if($exist==false){
      $sql="INSERT INTO `user-register` (`username`, `email`, `password`, `cpassword`, `gender`, `country`) VALUES ('$usernamee', '$email', '$password', '$cpassword', '$gender', '$country');";
      $result=mysqli_query($conn,$sql);
    }else{
        echo "Username might be already exist";
    }
}
?>
        <div class="box">
            <h2>Registration Form</h2>
            <div class="form-container">
                <form action="signupUser.php"  method="post">
                    <div class="input-name">
                        <i class="fa fa-user"></i>
                        <label for="usernamee"></label>
                        <input type="text" id="username" placeholder="Username" name="usernamee" required>
                        <p id="usernameError" class="error"></p>
                    </div>
                    <div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <label for="email"></label>
                        <input type="email" id="email" placeholder="Email" name="email" required>
                        <p id="emailError" class="error"></p>
                    </div>
                    <div class="input-name">
                        <i class="fa fa-lock lock"></i>
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-name">
                        <i class="fa fa-lock lock"></i>
                        <label for="cpassword"></label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                        <p id="passwordError" class="error"></p>
                    </div>
                    <div class="input-gender">
                        <label>
                            <input type="radio" value="male" class="radio-button" name="gender" id="male"><label
                                for="male">Male</label>
                        </label>
                        <label>
                            <input type="radio" value="female" class="radio-button" name="gender" id="female"><label
                                for="female">Female</label>
                        </label>
                        <label>
                            <input type="radio" value="other" class="radio-button" name="gender" id="other"><label
                                for="other">Other</label>
                        </label>
                        <p id="genderError" class="error"></p>
                    </div>
                    <div class="input-country element" id="country" placeholder="Select Country">
                        <label for="country">
                            <select name="country" id="country">
                                <option name="country" value="" selected="selected">Select Country</option>
                                <option name="country" value="Afghanistan">Afghanistan</option>
                                <option name="country" value="Albania">Albania</option>
                                <option name="country" value="Algeria">Algeria</option>
                                <option name="country" value="American Samoa">American Samoa</option>
                                <option name="country" value="Andorra">Andorra</option>
                                <option name="country" value="Angola">Angola</option>
                                <option name="country" value="Anguilla">Anguilla</option>
                                <option name="country" value="Antarctica">Antarctica</option>
                                <option name="country" value="Argentina">Argentina</option>
                                <option name="country" value="Armenia">Armenia</option>
                                <option name="country" value="Aruba">Aruba</option>
                                <option name="country" value="Australia">Australia</option>
                                <option name="country" value="Austria">Austria</option>
                                <option name="country" value="Azerbaijan">Azerbaijan</option>
                                <option name="country" value="Bahamas">Bahamas</option>
                                <option name="country" value="Bahrain">Bahrain</option>
                                <option name="country" value="Bangladesh">Bangladesh</option>
                                <option name="country" value="Barbados">Barbados</option>
                                <option name="country" value="Belarus">Belarus</option>
                                <option name="country" value="Belgium">Belgium</option>
                                <option name="country" value="Belize">Belize</option>
                                <option name="country" value="Benin">Benin</option>
                                <option name="country" value="Bermuda">Bermuda</option>
                                <option name="country" value="Bhutan">Bhutan</option>
                                <option name="country" value="Bolivia">Bolivia</option>
                                <option name="country" value="Botswana">Botswana</option>
                                <option name="country" value="Bouvet Island">Bouvet Island</option>
                                <option name="country" value="Brazil">Brazil</option>
                                <option name="country" value="Brunei Darussalam">Brunei Darussalam</option>
                                <option name="country" value="Bulgaria">Bulgaria</option>
                                <option name="country" value="Burkina Faso">Burkina Faso</option>
                                <option name="country" value="Burundi">Burundi</option>
                                <option name="country" value="Cambodia">Cambodia</option>
                                <option name="country" value="Cameroon">Cameroon</option>
                                <option name="country" value="Canada">Canada</option>
                                <option name="country" value="Cape Verde">Cape Verde</option>
                                <option name="country" value="Cayman Islands">Cayman Islands</option>
                                <option name="country" value="Chad">Chad</option>
                                <option name="country" value="Chile">Chile</option>
                                <option name="country" value="China">China</option>
                                <option name="country" value="Christmas Island">Christmas Island</option>
                                <option name="country" value="Colombia">Colombia</option>
                                <option name="country" value="Comoros">Comoros</option>
                                <option name="country" value="Congo">Congo</option>
                                <option name="country" value="Cook Islands">Cook Islands</option>
                                <option name="country" value="Costa Rica">Costa Rica</option>
                                <option name="country" value="Cote D'ivoire">Cote D'ivoire</option>
                                <option name="country" value="Croatia">Croatia</option>
                                <option name="country" value="Cuba">Cuba</option>
                                <option name="country" value="Cyprus">Cyprus</option>
                                <option name="country" value="Czech Republic">Czech Republic</option>
                                <option name="country" value="Denmark">Denmark</option>
                                <option name="country" value="Djibouti">Djibouti</option>
                                <option name="country" value="Dominica">Dominica</option>
                                <option name="country" value="Dominican Republic">Dominican Republic</option>
                                <option name="country" value="Ecuador">Ecuador</option>
                                <option name="country" value="Egypt">Egypt</option>
                                <option name="country" value="El Salvador">El Salvador</option>
                                <option name="country" value="Equatorial Guinea">Equatorial Guinea</option>
                                <option name="country" value="Eritrea">Eritrea</option>
                                <option name="country" value="Estonia">Estonia</option>
                                <option name="country" value="Ethiopia">Ethiopia</option>
                                <option name="country" value="Faroe Islands">Faroe Islands</option>
                                <option name="country" value="Fiji">Fiji</option>
                                <option name="country" value="Finland">Finland</option>
                                <option name="country" value="France">France</option>
                                <option name="country" value="French Guiana">French Guiana</option>
                                <option name="country" value="French Polynesia">French Polynesia</option>
                                <option name="country" value="Gabon">Gabon</option>
                                <option name="country" value="Gambia">Gambia</option>
                                <option name="country" value="Georgia">Georgia</option>
                                <option name="country" value="Germany">Germany</option>
                                <option name="country" value="Ghana">Ghana</option>
                                <option name="country" value="Gibraltar">Gibraltar</option>
                                <option name="country" value="Greece">Greece</option>
                                <option name="country" value="Greenland">Greenland</option>
                                <option name="country" value="Grenada">Grenada</option>
                                <option name="country" value="Guadeloupe">Guadeloupe</option>
                                <option name="country" value="Guam">Guam</option>
                                <option name="country" value="Guatemala">Guatemala</option>
                                <option name="country" value="Guinea">Guinea</option>
                                <option name="country" value="Guinea-bissau">Guinea-bissau</option>
                                <option name="country" value="Guyana">Guyana</option>
                                <option name="country" value="Haiti">Haiti</option>
                                <option name="country" value="Honduras">Honduras</option>
                                <option name="country" value="Hong Kong">Hong Kong</option>
                                <option name="country" value="Hungary">Hungary</option>
                                <option name="country" value="Iceland">Iceland</option>
                                <option name="country" value="India">India</option>
                                <option name="country" value="Indonesia">Indonesia</option>
                                <option name="country" value="Iraq">Iraq</option>
                                <option name="country" value="Ireland">Ireland</option>
                                <option name="country" value="Israel">Israel</option>
                                <option name="country" value="Italy">Italy</option>
                                <option name="country" value="Jamaica">Jamaica</option>
                                <option name="country" value="Japan">Japan</option>
                                <option name="country" value="Jordan">Jordan</option>
                                <option name="country" value="Kazakhstan">Kazakhstan</option>
                                <option name="country" value="Kenya">Kenya</option>
                                <option name="country" value="Kiribati">Kiribati</option>
                                <option name="country" value="Kuwait">Kuwait</option>
                                <option name="country" value="Kyrgyzstan">Kyrgyzstan</option>
                                <option name="country" value="Latvia">Latvia</option>
                                <option name="country" value="Lebanon">Lebanon</option>
                                <option name="country" value="Lesotho">Lesotho</option>
                                <option name="country" value="Liberia">Liberia</option>
                                <option name="country" value="Liechtenstein">Liechtenstein</option>
                                <option name="country" value="Lithuania">Lithuania</option>
                                <option name="country" value="Luxembourg">Luxembourg</option>
                                <option name="country" value="Macao">Macao</option>
                                <option name="country" value="Madagascar">Madagascar</option>
                                <option name="country" value="Malawi">Malawi</option>
                                <option name="country" value="Malaysia">Malaysia</option>
                                <option name="country" value="Maldives">Maldives</option>
                                <option name="country" value="Mali">Mali</option>
                                <option name="country" value="Malta">Malta</option>
                                <option name="country" value="Martinique">Martinique</option>
                                <option name="country" value="Mauritania">Mauritania</option>
                                <option name="country" value="Mauritius">Mauritius</option>
                                <option name="country" value="Mayotte">Mayotte</option>
                                <option name="country" value="Mexico">Mexico</option>
                                <option name="country" value="Monaco">Monaco</option>
                                <option name="country" value="Mongolia">Mongolia</option>
                                <option name="country" value="Montserrat">Montserrat</option>
                                <option name="country" value="Morocco">Morocco</option>
                                <option name="country" value="Mozambique">Mozambique</option>
                                <option name="country" value="Myanmar">Myanmar</option>
                                <option name="country" value="Namibia">Namibia</option>
                                <option name="country" value="Nauru">Nauru</option>
                                <option name="country" value="Nepal">Nepal</option>
                                <option name="country" value="Netherlands">Netherlands</option>
                                <option name="country" value="New Caledonia">New Caledonia</option>
                                <option name="country" value="New Zealand">New Zealand</option>
                                <option name="country" value="Nicaragua">Nicaragua</option>
                                <option name="country" value="Niger">Niger</option>
                                <option name="country" value="Nigeria">Nigeria</option>
                                <option name="country" value="Niue">Niue</option>
                                <option name="country" value="Norfolk Island">Norfolk Island</option>
                                <option name="country" value="Norway">Norway</option>
                                <option name="country" value="Oman">Oman</option>
                                <option name="country" value="Pakistan">Pakistan</option>
                                <option name="country" value="Palau">Palau</option>
                                <option name="country" value="Panama">Panama</option>
                                <option name="country" value="Papua New Guinea">Papua New Guinea</option>
                                <option name="country" value="Paraguay">Paraguay</option>
                                <option name="country" value="Peru">Peru</option>
                                <option name="country" value="Philippines">Philippines</option>
                                <option name="country" value="Pitcairn">Pitcairn</option>
                                <option name="country" value="Poland">Poland</option>
                                <option name="country" value="Portugal">Portugal</option>
                                <option name="country" value="Puerto Rico">Puerto Rico</option>
                                <option name="country" value="Qatar">Qatar</option>
                                <option name="country" value="Reunion">Reunion</option>
                                <option name="country" value="Romania">Romania</option>
                                <option name="country" value="Rwanda">Rwanda</option>
                                <option name="country" value="Saint Helena">Saint Helena</option>
                                <option name="country" value="Saint Lucia">Saint Lucia</option>
                                <option name="country" value="Samoa">Samoa</option>
                                <option name="country" value="San Marino">San Marino</option>
                                <option name="country" value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option name="country" value="Saudi Arabia">Saudi Arabia</option>
                                <option name="country" value="Senegal">Senegal</option>
                                <option name="country" value="Serbia and Montenegro">Serbia and Montenegro</option>
                                <option name="country" value="Seychelles">Seychelles</option>
                                <option name="country" value="Sierra Leone">Sierra Leone</option>
                                <option name="country" value="Singapore">Singapore</option>
                                <option name="country" value="Slovakia">Slovakia</option>
                                <option name="country" value="Slovenia">Slovenia</option>
                                <option name="country" value="Solomon Islands">Solomon Islands</option>
                                <option name="country" value="Somalia">Somalia</option>
                                <option name="country" value="South Africa">South Africa</option>
                                <option name="country" value="Spain">Spain</option>
                                <option name="country" value="Sri Lanka">Sri Lanka</option>
                                <option name="country" value="Sudan">Sudan</option>
                                <option name="country" value="Suriname">Suriname</option>
                                <option name="country" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option name="country" value="Swaziland">Swaziland</option>
                                <option name="country" value="Sweden">Sweden</option>
                                <option name="country" value="Switzerland">Switzerland</option>
                                <option name="country" value="Tajikistan">Tajikistan</option>
                                <option name="country" value="Thailand">Thailand</option>
                                <option name="country" value="Timor-leste">Timor-leste</option>
                                <option name="country" value="Togo">Togo</option>
                                <option name="country" value="Tokelau">Tokelau</option>
                                <option name="country" value="Tonga">Tonga</option>
                                <option name="country" value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option name="country" value="Tunisia">Tunisia</option>
                                <option name="country" value="Turkey">Turkey</option>
                                <option name="country" value="Turkmenistan">Turkmenistan</option>
                                <option name="country" value="Turks and Caicos Islands">Turks and Caicos Islands
                                </option>
                                <option name="country" value="Tuvalu">Tuvalu</option>
                                <option name="country" value="Uganda">Uganda</option>
                                <option name="country" value="Ukraine">Ukraine</option>
                                <option name="country" value="United Arab Emirates">United Arab Emirates</option>
                                <option name="country" value="United Kingdom">United Kingdom</option>
                                <option name="country" value="United States">United States</option>
                                <option name="country" value="Uruguay">Uruguay</option>
                                <option name="country" value="Uzbekistan">Uzbekistan</option>
                                <option name="country" value="Vanuatu">Vanuatu</option>
                                <option name="country" value="Venezuela">Venezuela</option>
                                <option name="country" value="Viet Nam">Viet Nam</option>
                                <option name="country" value="Wallis and Futuna">Wallis and Futuna</option>
                                <option name="country" value="Western Sahara">Western Sahara</option>
                                <option name="country" value="Western Sahara">Western Sahara</option>
                                <option name="country" value="Yemen">Yemen</option>
                                <option name="country" value="Zambia">Zambia</option>
                                <option name="country" value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </label>
                    </div>
                    <div class="input-terms">
                        <input type="checkbox" class="check-btn" id="radio" name="radio" value="radio" required>
                        <label for="radio">I accept the terms & conditions</label>
                        <p id="termsError" class="error"></p>
                    </div>
                    <div class="btn">
                        <input type="submit" class="button" onclick="validateForm()">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="signupUser.js"></script>
</body>

</html>