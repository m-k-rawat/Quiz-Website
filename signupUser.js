function validateUsername() {
    var username = document.getElementById("username").value;
    var usernameErrorElement = document.getElementById("usernameError");

    if (username.length === 0) {
        usernameErrorElement.textContent = "Username cannot be empty!";
        return false;
    } else {
        usernameErrorElement.textContent = ""; // Clear the error message
        return true;
    }
}

function validateEmail() {
    var email = document.getElementById("email").value;
    var emailErrorElement = document.getElementById("emailError");
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        emailErrorElement.textContent = "Invalid email address!";
        return false;
    } else {
        emailErrorElement.textContent = ""; // Clear the error message
        return true;
    }
}

function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cpassword").value;
    var passwordErrorElement = document.getElementById("passwordError");

    if (password.length === 0 || confirmPassword.length === 0) {
        passwordErrorElement.textContent = "Password fields cannot be empty!";
        return false;
    } else if (password !== confirmPassword) {
        passwordErrorElement.textContent = "Passwords do not match!";
        return false;
    } else {
        passwordErrorElement.textContent = ""; // Clear the error message
        return true;
    }
}

function validateGender() {
    var genderElements = document.querySelectorAll(".radio-button");
    var genderErrorElement = document.getElementById("genderError");

    for (var i = 0; i < genderElements.length; i++) {
        if (genderElements[i].checked) {
            genderErrorElement.textContent = ""; // Clear the error message
            return true;
        }
    }

    genderErrorElement.textContent = "Please select a gender!";
    return false;
}

function validateTerms() {
    var termsCheckbox = document.getElementById("radio");
    var termsErrorElement = document.getElementById("termsError");

    if (!termsCheckbox.checked) {
        termsErrorElement.textContent = "You must accept the terms & conditions!";
        return false;
    } else {
        termsErrorElement.textContent = ""; // Clear the error message
        return true;
    }
}

function validateForm() {
    var isUsernameValid = validateUsername();
    var isEmailValid = validateEmail();
    var isPasswordValid = validatePassword();
    var isGenderValid = validateGender();
    var isTermsValid = validateTerms();
    if (isUsernameValid && isEmailValid && isPasswordValid && isGenderValid && isTermsValid) {
        // You can submit the form or perform other actions here
        alert("Form submitted successfully!");
    }else{
        alert("Something went wrong...!!");
    }
}