<?php
$message = '<p class="error">All fields are required</p>';;
if (isset($_POST['submit'])) {
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone_number'];
$gender = $_POST['gender'];
$country = $_POST['country'];
if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($phone) || empty($gender) || empty($country)) {
$message = 'All fields are required';
}
if (strlen($firstName) < 3 || strlen($firstName) > 20) {
    $message .= '<p class="error">First name must be between 3 and 20 characters</p>';
    }
    if (strlen($lastName) < 3 || strlen($lastName) > 20) {
        $message .= '<p class="error">Last name must be between 3 and 20 characters</p>';
        }
        if (!is_numeric($phone)) {
        $message .= '<p class="error">Phone number should be numeric</p>';
        }
            if (strlen($phone) != 11) {
            $message .= '<p class="error">Phone number should be 11 digits long</p>';
            }
                if (empty($message)) {
                $message = '<p class="success">All inputs are valid, thank you</p>';
                }
}
?>

<!DOCTYPE <!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="Signup.css">
        <title>SIGN UP FORM</title>
        <script src ="signup.js"></script>
        <style>
            .error {
                color: red;
            }
            .success {
                color: green;
            }
    </head>
    <body>
        <?php echo $message; ?>
        <form method="POST" action="">
            
                <fieldset>
                    <legend>SIGN UP</legend>
                    <label for="firstname">Firstname :</label>
                    <input type="text" name="first_name"><br><br><br>
                    <label for="lastname">Lastname : </label>
                    <input type="text" name="last_name"><br><br><br>
                    <label for="email">Email :</label>
                    <input type="text" name="email"><br><br><br>
                    <label for="password">Password :</label>
                    <input type="password" name="password"><br><br><br>
                    <label for="confirm password" >Confirm Password :</label>
                    <input type="password" name="password"><br><br><br>
                    <label for="phone_number">Phone Number :</label>
                    <input type="number" name="phone_number"><br><br><br>
                    <label for="gender">Gender :</label>
                    <select name="gender">
                        <option value="choose" selected>Choose one</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                    </select><br><br><br>
                    <label for="country">Country :</label>
                    <select name="country">
                        <option value="choose one" selected>Choose one</option>
                        <option value="afghan">Afghanistan</option>
                        <option value="burun">Burundi</option>
                        <option value="cana">Canada</option>
                        <option value="Niger">Nigeria</option>
                    </select><br><br>
                    <input type="submit" name="submit" value="Submit">
                 </fieldset>
        
        </form>
    </body>
</html>