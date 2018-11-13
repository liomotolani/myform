   function validateForm(){
    var email = document.forms["signUp"]["email"];
    if (email.value == ""){
        alert("Please input your email address");
        email.focus();
        return false;
    }

    var name = document.signUp.first_name;
    if (name.value == ""){
        alert("Please input your first name");
        name.focus();
        return false;
    }
    var lastName = document.signUp.last_name;
    if (lastName.value == ""){
        alert("Please input your last name");
        lastName.focus();
        return false;
    }
    var password = document.signUp.password;
    if (password.value == ""){
        alert("Please input your password");
        password.focus();
        return false;
    }
    var phone = document.myForm.phone;
    if(phone.value== "" || isNaN(phone.value)){
        alert("Phone number must be numeric. ");
        phone.focus();
        return false;
    }
    if (phone.value.length != 11){
        alert("Phone number should be exactly 11 digits. ");
        phone.focus();
        return false;
    }
    var gender = document.signUp.gender;
    if(gender.value == "choose"){
        alert("Please select your gender");
        return false;
    }
    var country = document.signUp.country;
    if(country.value == "choose one"){
        alert("Please select your country");
        return false;
    }
    return true;
}