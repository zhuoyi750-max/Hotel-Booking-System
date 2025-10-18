<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css"/>
        <title>Sign Up</title>
    </head>
    <?php
            include('Navigation_Bar.php');
        ?>
    <body>
    <h1>Create a HW Travel Angency Account</h1>
        <label for="email">Enter Your Email:</label>
        <input type="text" name="email" class="Signup">

        <label for="pwd">Enter your password:</label>
        <input type="text" name="pwd" class="Signup">

        <label for="pwd">Repeat your password: </label>
        <input type="text" name="pwd" class="Signup">
        
        <input type="submit" name="signup" value="Sign Up!">

    </form>
    </body>
    </html>