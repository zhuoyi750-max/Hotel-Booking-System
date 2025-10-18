<body>
<?php include('Navigation Bar.php');?>
<br>
<?php
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"])|| !$_SESSION["loggedin"]){
} else {
    header("location: index.php");
}
$message = "";
if (isset($_POST["Login"])){
    $email =$_POST['email'];
    $password =$_POST['psw'];

    $sql = "SELECT * FROM users WHERE User_Email ='".$email ."'";
    try {
    $result =$conn->query($sql);
    if($result->num_rows >0){
        while($row = $result->fetch assoc()){
            if(password verify($password, $row["User_Password"])){
                // Password is correct, so start a new session
                session_start();
                // Store data in session variables
                $_SESSION["loggedin"]= true;
                $_SESSION["id"]= $row["User_ID"];
                $_SESSIoN["username"]= $row["User_Email"];
                //Redirect user to welcome page
                header("location: index.php");
            }else{
                $message = "<div class='error'><p>Invalid username or password</p></div>'";
            }
        }
    } else {
        $message ="<div class='error'><p>Error:".$sql."</p></div>";
    } catch(Exception $e){
        $message = "<div class='error'><p>". $e->getMessage()."</p></div>";
    }
    }
}
?>
